import {ChangeEventHandler, FocusEventHandler, HTMLProps, useState} from "react";
import {useMice} from "@/react/mice-app/MiceContext";
import {IMiceForm} from "@/react/mice-app/types";
import FieldError from "@/react/mice-app/components/FieldError";

type Props = Omit<HTMLProps<HTMLInputElement>, 'name'> & {
  label: string;
  name: keyof IMiceForm
  useContextValue?: boolean
  hint?: string
}

export default function Input({
                                name,
                                className,
                                value,
                                onChange,
                                onFocus,
                                onBlur,
                                hint,
                                placeholder,
                                useContextValue = true,
                                label,
                                ...rest
                              }: Props) {
  const {data, setData, errors, setErrors} = useMice();
  const [focused, setFocused] = useState(false);

  const onInputChange: ChangeEventHandler<HTMLInputElement> = (ev) => {
    if (onChange)
      onChange(ev);
    else
      setData(name, ev.target.value);

    if (errors[name]) {
      setErrors((prev) => {
        const {[name]: _, ...newErrors} = prev;
        return newErrors;
      })
    }
  };

  const onInputFocus: FocusEventHandler<HTMLInputElement> = (e) => {
    onFocus && onFocus(e);
    setFocused(true);
  }
  const onInputBlur: FocusEventHandler<HTMLInputElement> = (e) => {
    onBlur && onBlur(e);
    setFocused(false);
  }

  return <div className="mice-field">
    <div className="mice-field-inner">
      <label className="mice-field__label" htmlFor={`mice-input-${name}`}>{label}</label>

      <input className={`mice-field__input ${className} ${focused ? ' mice-field__input--focused' : ''}`} name={name}
             id={`mice-input-${name}`}
             placeholder={focused ? '' : placeholder}
             value={useContextValue ? data[name] as string : value}
             onChange={onInputChange}
             onFocus={onInputFocus}
             onBlur={onInputBlur}
             {...rest} />
    </div>
    {hint && <div className="mice-field__error">
        <div>{hint}</div>
    </div>}
    <FieldError name={name}/>
  </div>
}