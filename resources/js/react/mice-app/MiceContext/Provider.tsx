import {PropsWithChildren, useEffect, useState} from "react";
import MiceContext from "@/react/mice-app/MiceContext/Context";
import {AppData, IMiceContext, IMiceForm, SetDataByKeyValuePair} from "@/react/mice-app/types";
import eventBus from "@/libs/EventBus";

type Props = PropsWithChildren<{
  appData: AppData
}>

const initialForm: IMiceForm = {
  event_name: '',
  event_people_count: '',
  event_foreign_count: '',
  event_date: '',
  event_place: '',
  event_type: '',

  name: '',
  surname: '',
  organization: '',
  position: '',
  email: '',
  phone: '',

  history_places: '',
  history_description: '',
  need_support: [],

  details: {
    excursion_peoples: '',
    cultural_info: '',
    tech: '',
    food_info: '',
    flight_info: ''
  }
};

export default function Provider({appData, children}: Props) {
  const [data, setContextData] = useState<IMiceForm>(initialForm);
  const [errors, setErrors] = useState<IMiceContext['errors']>({});
  const [step, setStep] = useState(0);

  const setData: SetDataByKeyValuePair<IMiceForm> = (key, value) => {
    setContextData((prev) => ({...prev, [key]: value}))
  }

  useEffect(eventBus.on('mice-form:closed', () => {
    setContextData(initialForm);
    setStep(0);
  }), []);

  const setDetails = (name: keyof IMiceForm['details'], value: string) => {
    setContextData((prev) => ({...prev, details: {...prev.details, [name]: value}}));
  }

  return <MiceContext.Provider value={{
    appData,
    data, setData,
    step, setStep,
    errors, setErrors,
    setDetails
  }}>
    {children}
  </MiceContext.Provider>;
}