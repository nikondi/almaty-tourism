import {ChangeEventHandler, FocusEventHandler, HTMLProps, useState} from "react";
import {useMice} from "@/react/mice-app/MiceContext";
import {IMiceForm} from "@/react/mice-app/types";
import FieldError from "@/react/mice-app/components/FieldError";

type Props = Omit<HTMLProps<HTMLTextAreaElement>, 'name'> & {
  label: string;
  name: keyof IMiceForm
  hint?: string
  useContextValue?: boolean
}

export default function Textarea({
                                   name,
                                   className,
                                   onChange,
                                   onFocus,
                                   onBlur,
                                   value,
                                   placeholder,
                                   hint,
                                   useContextValue = true,
                                   label,
                                   ...rest
                                 }: Props) {
  const {data, setData, errors, setErrors} = useMice();
  const [focused, setFocused] = useState(false);

  const onInputChange: ChangeEventHandler<HTMLTextAreaElement> = (ev) => {
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

  const onInputFocus: FocusEventHandler<HTMLTextAreaElement> = (e) => {
    onFocus && onFocus(e);
    setFocused(true);
  }
  const onInputBlur: FocusEventHandler<HTMLTextAreaElement> = (e) => {
    onBlur && onBlur(e);
    setFocused(false);
  }

  return <div className="mice-field">
    <div className={`mice-field-inner ${focused ? ' mice-field-inner--focused' : ''}`}>
      <label className="mice-field__label" htmlFor={`mice-input-${name}`}>{label}</label>
      <textarea className={`mice-field__input ${className}`} name={name}
                id={`mice-input-${name}`}
                placeholder={focused ? '' : placeholder}
                value={useContextValue ? data[name] as string : value}
                onChange={onInputChange}
                onFocus={onInputFocus}
                onBlur={onInputBlur}
                {...rest} />
    </div>
    <FieldError name={name}/>
    {hint && <div className="mice-field__error">
        <div>{hint}</div>
    </div>}
  </div>
}