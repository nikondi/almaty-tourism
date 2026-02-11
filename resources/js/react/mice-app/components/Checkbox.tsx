import {ChangeEventHandler, HTMLProps} from "react";
import {IMiceForm} from "@/react/mice-app/types";
import {useMice} from "@/react/mice-app/MiceContext";

type Props = Omit<HTMLProps<HTMLInputElement>, 'value' | 'name' | 'checked'> & {
  name: keyof IMiceForm
  value: string
}

export default function Checkbox({name, className, onChange, children, value, ...rest}: Props) {
  const {data, setData, errors, setErrors} = useMice();
  const onInputChange: ChangeEventHandler<HTMLInputElement> = (e) => {
    onChange && onChange(e);

    if (errors[name]) {
      setErrors((prev) => {
        const {[name]: _, ...newErrors} = prev;
        return newErrors;
      })
    }

    const newValue = e.target.checked
        ? [...data.need_support, value]
        : data.need_support.filter((v) => v != value);
    setData('need_support', newValue);
  }

  return <label className="checkbox-label checkbox-label--light">
    <input type="checkbox" name={name} onChange={onInputChange} checked={data.need_support.includes(value)} {...rest} />
    <div className="checkbox-label__check"></div>
    <span>{children}</span>
  </label>
}