import {IMiceContext, IMiceForm} from "@/react/mice-app/types";
import {Dispatch, SetStateAction} from "react";

export const validateStep = (fields: (keyof IMiceForm)[], data: IMiceForm, setErrors: Dispatch<SetStateAction<IMiceContext['errors']>>) => {
  const errors: IMiceContext['errors'] = {};
  fields.forEach((name) => {
    if (Array.isArray(data[name])) {
      if (data[name].length == 0)
        errors[name] = 'Выберите хотя бы один пункт';
    } else {
      if (!(data[name] as string).trim()) {
        errors[name] = `Поле обязательно для заполнения`;
      }
    }
  })

  setErrors(errors);

  return Object.keys(errors).length === 0;
}