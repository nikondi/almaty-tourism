import {Fields, Input, MaskedInput, NextButton, Select, Step, StepName} from "@/react/mice-app/components";
import {useMice} from "@/react/mice-app/MiceContext";
import {IMiceForm} from "@/react/mice-app/types";
import {validateStep} from "@/react/mice-app/helpers";


const stepRequiredFields: (keyof IMiceForm)[] = [
  'event_name',
  'event_people_count',
  'event_date',
  'event_foreign_count',
  'event_place',
  'event_type',
]

export default function InfoStep() {
  const {appData, data, setErrors} = useMice();

  return <Step>
    <StepName>Общая информация</StepName>
    <Fields>
      <Input name="event_name" label="Название мероприятия" placeholder="Название мероприятия"/>
      <Input name="event_people_count" label="Количество участников" placeholder="100" type="number"/>
      <MaskedInput mask="99.99.9999" name="event_date" label="Дата проведения" placeholder="00.00.0000"
                   icon={<CalendarIcon/>}/>
      <Input name="event_foreign_count" label="Дата проведения" placeholder="40" type="number"/>
      <Input name="event_place" label="Место проведения" placeholder="Место проведения"/>
      <Select name="event_type" label="Формат мероприятия" options={appData.event_types}/>
    </Fields>
    <NextButton onBefore={() => validateStep(stepRequiredFields, data, setErrors)}/>
  </Step>;
}

function CalendarIcon() {
  return <svg width="24" height="24" viewBox="0 0 24 24" fill="none">
    <path
        d="M19 4H5C3.89543 4 3 4.89543 3 6V20C3 21.1046 3.89543 22 5 22H19C20.1046 22 21 21.1046 21 20V6C21 4.89543 20.1046 4 19 4Z"
        stroke="white" strokeWidth="2" strokeLinecap="round" strokeLinejoin="round"/>
    <path d="M16 2V6" stroke="white" strokeWidth="2" strokeLinecap="round" strokeLinejoin="round"/>
    <path d="M8 2V6" stroke="white" strokeWidth="2" strokeLinecap="round" strokeLinejoin="round"/>
    <path d="M3 10H21" stroke="white" strokeWidth="2" strokeLinecap="round" strokeLinejoin="round"/>
  </svg>
}