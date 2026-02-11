import NextButton from "@/react/mice-app/components/NextButton";
import {Fields, Step, StepName, Textarea} from "@/react/mice-app/components";
import {IMiceForm} from "@/react/mice-app/types";
import {useMice} from "@/react/mice-app/MiceContext";
import {validateStep} from "@/react/mice-app/helpers";

const stepRequiredFields: (keyof IMiceForm)[] = [
  'history_places',
  'history_description',
]


export default function HistoryStep() {
  const {data, setErrors} = useMice();

  return <Step>
    <StepName>История мероприятия</StepName>

    <Fields>
      <Textarea name="history_places" label="Где ранее проводилось мероприятие" placeholder="Города и страны"/>
      <Textarea name="history_description" label="Краткое описание мероприятия" placeholder="Описание"/>
    </Fields>

    <NextButton onBefore={() => validateStep(stepRequiredFields, data, setErrors)}/>
  </Step>;
}