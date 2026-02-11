import {ChangeEventHandler, FocusEventHandler, HTMLProps, ReactNode, useRef, useState} from "react";
import {useMice} from "@/react/mice-app/MiceContext";
import {IMiceForm} from "@/react/mice-app/types";
import FieldError from "@/react/mice-app/components/FieldError";
import InputMask from "@mona-health/react-input-mask";

type Props = Omit<HTMLProps<HTMLInputElement>, 'value' | 'name'> & {
  label: string;
  name: keyof IMiceForm
  mask?: string;
  icon?: ReactNode;
}

export default function MaskedInput({
                                      name,
                                      className,
                                      onChange,
                                      onFocus,
                                      onBlur,
                                      placeholder,
                                      label,
                                      mask,
                                      icon,
                                      ...rest
                                    }: Props) {

  const {data, setData, errors, setErrors} = useMice();
  const [focused, setFocused] = useState(false);

  const inputRef= useRef<HTMLInputElement>(null);

  const onInputChange: ChangeEventHandler<HTMLInputElement> = (ev) => {
    onChange && onChange(ev);

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
      <InputMask mask={mask}
                 className={`mice-field__input ${className} ${focused ? ' mice-field__input--focused' : ''}`}
                 name={name}
                 value={data[name] as string} onChange={onInputChange}
                 id={`mice-input-${name}`}
                 onBlur={onInputBlur} onFocus={onInputFocus}
                 placeholder={focused ? '' : placeholder}
                 ref={inputRef}
                 {...rest} />
      {icon && <div className="mice-field__icon" onClick={() => inputRef.current?.focus()}>{icon}</div>}
    </div>
    <FieldError name={name}/>
  </div>
}