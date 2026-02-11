import NextButton from "@/react/mice-app/components/NextButton";
import {Checkbox, Fields, FieldsColumn, Step, StepName} from "@/react/mice-app/components";
import {needSupports} from "@/react/mice-app/const";
import {validateStep} from "@/react/mice-app/helpers";
import {useMice} from "@/react/mice-app/MiceContext";
import FieldError from "@/react/mice-app/components/FieldError";
import {TNeedSupportName} from "@/react/mice-app/types";

export default function NeedSupportStep() {
  const entries = Object.entries(needSupports);
  const {data, setErrors} = useMice();

  return <Step>
    <StepName>Запрашиваемая поддержка</StepName>
    <Fields>
      <FieldsColumn>
        {entries.slice(0, Math.ceil(entries.length / 2)).map(([value, name]) => (
            <Checkbox name="need_support" value={value} key={value}>{name}</Checkbox>
        ))}
      </FieldsColumn>
      <FieldsColumn>
        {entries.slice(Math.ceil(entries.length / 2)).map(([value, name]) => (
            <Checkbox name="need_support" value={value} key={value}>{name}</Checkbox>
        ))}
      </FieldsColumn>
    </Fields>
    <FieldError name="need_support"/>
    <NextButton onBefore={() => validateStep(['need_support'], data, setErrors)}
                skip={data.need_support.some(r => (['food', 'excursion', 'flight', 'tech', 'cultural'] as TNeedSupportName[]).includes(r)) ? 1 : 2}/>
  </Step>;
}