import {steps} from "@/react/mice-app/const";
import {useMice} from "@/react/mice-app/MiceContext";

export default function StepIndicators() {
  const {step: stepNumber} = useMice();

  return <div className="mice-form-indicators">
    {steps.map((step, i) =>
        <div key={i}
             className={`mice-form-indicator ${stepNumber > i ? 'active' : ''} ${i - stepNumber >= 0 ? 'mice-form-indicator--offset-' + (i - stepNumber + 1) : ''}`}
             style={{zIndex: i}}>
          <div className="mice-form-indicator__number">{i + 1}</div>
          <div className="mice-form-indicator__text">{step.name}</div>
        </div>
    )}
  </div>;
}