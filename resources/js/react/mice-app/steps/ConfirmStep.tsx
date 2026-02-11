import {Step, StepName} from "@/react/mice-app/components";
import {useMice} from "@/react/mice-app/MiceContext";
import {useState} from "react";

export default function ConfirmStep() {
  const {appData} = useMice();
  const [checked, setChecked] = useState(false);


  return <Step>
    <StepName>Подтверждение и отправка</StepName>

    <label className="checkbox-label checkbox-label--light">
      <input type="checkbox" checked={checked} onChange={(e) => setChecked(e.target.checked)}/>
      <div className="checkbox-label__check"></div>
      <span>Согласен с <a href={appData.privacyLink} className="mice-privacy-link" target="_blank">условиями обработки данных</a></span>
    </label>

    <div className="mice-form-next">
      <button type="submit" className="btn btn-primary btn-primary--white" disabled={!checked}>
        Продолжить
      </button>
    </div>
  </Step>;
}