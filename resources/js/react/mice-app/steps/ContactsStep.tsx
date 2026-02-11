import NextButton from "@/react/mice-app/components/NextButton";
import {Fields, Input, MaskedInput, Step, StepName} from "@/react/mice-app/components";
import {validateStep} from "@/react/mice-app/helpers";
import {IMiceForm} from "@/react/mice-app/types";
import {useMice} from "@/react/mice-app/MiceContext";

const stepRequiredFields: (keyof IMiceForm)[] = [
  'name',
  'surname',
  'organization',
  'position',
  'email',
  'phone',
]

export default function ContactsStep() {
  const {data, setErrors} = useMice();

  return <Step>
    <StepName>Контактная информация</StepName>
    <Fields>
      <Input name="name" label="Имя" placeholder="Имя"/>
      <Input name="surname" label="Фамилия" placeholder="Фамилия"/>
      <Input name="organization" label="Организация" placeholder="Название компании"/>
      <Input name="position" label="Должность" placeholder="Должность"/>
      <Input name="email" type="email" label="Email" placeholder="Почта"/>
      <MaskedInput mask="+7 (999) 999-99-99" name="phone" type="tel" label="Телефон" placeholder="+7 (___) ___-__-__"/>
    </Fields>
    <NextButton onBefore={() => validateStep(stepRequiredFields, data, setErrors)}/>
  </Step>;
}