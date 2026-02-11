import {Dispatch, ReactNode, SetStateAction} from "react";

export interface IMiceContext {
  appData: AppData
  data: IMiceForm,
  setData: SetDataByKeyValuePair<IMiceForm>

  step: number
  setStep: Dispatch<SetStateAction<number>>
  setDetails: (name: keyof IMiceForm['details'], value: string) => void

  errors: Partial<Record<keyof IMiceForm, string>>

  setErrors: Dispatch<SetStateAction<IMiceContext['errors']>>
}

export type TNeedSupportName = 'food' | 'living' | 'flight' | 'transfer' | 'excursion' | 'souvenir' | 'conference' | 'tech' | 'cultural' | string;

export interface IMiceForm {
  event_name: string;
  event_people_count: string;
  event_foreign_count: string;
  event_date: string;
  event_place: string;
  event_type: string;

  name: string
  surname: string
  organization: string
  position: string
  email: string
  phone: string

  history_places: string
  history_description: string
  need_support: TNeedSupportName[]

  details: {
    food_info: string
    excursion_peoples: string
    flight_info: string
    tech: string
    cultural_info: string
  }
}

export type AppData = {
  action: string
  privacyLink: string
  event_types: Record<string, string>
}

export type SetDataByKeyValuePair<TForm> = <K extends keyof TForm>(key: K, value: TForm[K]) => void;

export interface IStep {
  name: string
  elem: ReactNode
}