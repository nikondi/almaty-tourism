import {ChangeEventHandler, HTMLProps, useRef} from "react";
import {useMice} from "@/react/mice-app/MiceContext";
import {IMiceForm} from "@/react/mice-app/types";
import FieldError from "@/react/mice-app/components/FieldError";

type Props = Omit<HTMLProps<HTMLSelectElement>, 'value' | 'name'> & {
  name: keyof IMiceForm
  label: string
  options: Record<string, string>
}

export default function Select({name, className, onChange, options, children, label, ...rest}: Props) {
  const {data, setData} = useMice();
  const selectRef = useRef<HTMLSelectElement>(null);

  const onSelectChange: ChangeEventHandler<HTMLSelectElement> = (ev) => {
    onChange && onChange(ev);

    setData(name, ev.target.value);
  };
  const showPicker = () => {
    try {
      selectRef.current?.showPicker();
    } catch (_) {
    }
  }

  return <div className="mice-field">
    <div className="mice-field-dropdown" onClick={showPicker}>
      <select onChange={onSelectChange} value={data[name] as string || ''} {...rest} ref={selectRef}
              onClick={(e) => e.stopPropagation()}
              className="mice-field__input"
      >
        {label && <option value="" disabled>{label}</option>}
        {Object.entries(options).map(([key, value]) => <option key={key} value={key}>{value}</option>)}
      </select>
    </div>
    <FieldError name={name}/>
  </div>
}