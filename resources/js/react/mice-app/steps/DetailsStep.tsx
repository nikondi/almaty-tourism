import NextButton from "@/react/mice-app/components/NextButton";
import {Fields, FieldsColumn, Input, Step, StepName, Textarea} from "@/react/mice-app/components";
import {Fragment, ReactNode, useMemo} from "react";
import {useMice} from "@/react/mice-app/MiceContext";

export default function DetailsStep() {
  const {data, setDetails} = useMice();

  const fields: ReactNode[] = useMemo(() => {
    const f = [];
    if (data.need_support.includes('food'))
      f.push(<Input name="details"
                    onChange={(e) => setDetails('food_info', e.target.value)}
                    useContextValue={false}
                    value={data.details.food_info}
                    hint="Укажите количество человек и дней" label="Питание" placeholder="обед для 30 человек, 2 дня"/>)

    if (data.need_support.includes('flight'))
      f.push(<Textarea name="details"
                       onChange={(e) => setDetails('flight_info', e.target.value)}
                       useContextValue={false}
                       value={data.details.flight_info}
                       label="Перелет" hint="Количество билетов, направления (город/страна)"/>)

    if (data.need_support.includes('excursion'))
      f.push(<Input type="number" name="details"
                    onChange={(e) => setDetails('excursion_peoples', e.target.value)}
                    useContextValue={false}
                    value={data.details.excursion_peoples}
                    label="Экскурсия" hint="Количество участников экскурсии" placeholder="5"/>)

    if (data.need_support.includes('tech'))
      f.push(<Textarea name="details"
                       onChange={(e) => setDetails('tech', e.target.value)}
                       useContextValue={false}
                       value={data.details.tech}
                       label="Техническое обеспечение" hint="Уточните (свет, звук, оборудование)"/>)


    if (data.need_support.includes('cultural'))
      f.push(<Textarea name="details"
                       onChange={(e) => setDetails('cultural_info', e.target.value)}
                       useContextValue={false}
                       value={data.details.cultural_info}
                       label="Культурная программа" hint="Уточните формат (концерт, национальные танцы, шоу)"/>)

    return f;
  }, [data.details]);

  return <Step>
    <StepName>Детализация по выбранным опциям</StepName>
    <Fields>
      <FieldsColumn>
        {fields.slice(0, Math.ceil(fields.length / 2)).map((elem, i) => <Fragment key={i}>{elem}</Fragment>)}
      </FieldsColumn>
      <FieldsColumn>
        {fields.slice(Math.ceil(fields.length / 2)).map((elem, i) => <Fragment key={i}>{elem}</Fragment>)}
      </FieldsColumn>
    </Fields>
    <NextButton/>
  </Step>;
}