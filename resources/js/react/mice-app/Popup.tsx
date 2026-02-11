import {SubmitEventHandler, useEffect, useRef, useState} from "react";
import eventBus from "@/libs/EventBus";
import {Progress, StepIndicators} from "@/react/mice-app/components";
import {useMice} from "@/react/mice-app/MiceContext";
import {steps} from "@/react/mice-app/const";
import {Success} from "@/react/mice-app/steps";
import axios from "axios";


export default function Popup() {
  const [opened, setOpened] = useState(true);
  const {step, data, appData, setStep} = useMice();
  const stepsRef = useRef<HTMLFormElement>(null);
  const close = () => {
    setOpened(false);
    eventBus.emit('mice-form:closed');
  }

  const open = () => {
    setOpened(true);
  }

  useEffect(eventBus.on('mice-form:open', open), []);
  useEffect(eventBus.on('mice-form:close', close), []);

  const onSubmit: SubmitEventHandler = (e) => {
    e.preventDefault();

    setStep(steps.length);
    if (!appData.action) {
      console.log(data);
      console.error('Укажите action отправки формы')
      return;
    }
    axios.post(appData.action, data)
        .then(() => {
          setStep(steps.length);
        });
  }

  // Я уже задолбался, время 3 утра, поэтому через useEffect
  useEffect(() => {
    stepsRef.current?.scrollTo({top: 0, behavior: 'smooth'});
  }, [step]);

  if (!opened)
    return;

  return <div className="mice-form-wrapper" onClick={close}>
    <div className="mice-form-inner container" onClick={(e) => e.stopPropagation()}>
      <div className="mice-form__title">Поддержка MICE мероприятий</div>
      <button type="button" className="mice-form-close" onClick={close}>
        <img src="/assets/img/icons/light/close-circle.svg" alt=""/>
      </button>
      <div className="mice-form-content">
        <div className="mice-form-side">
          <StepIndicators/>
        </div>
        <div className="mice-form">
          <div className="mice-form-top">
            <Progress/>
          </div>
          <form onSubmit={onSubmit} className="mice-form-steps" ref={stepsRef}>
            {step < steps.length
                ? steps[step]?.elem
                : <Success/>
            }
          </form>
        </div>
      </div>
    </div>
  </div>;
}