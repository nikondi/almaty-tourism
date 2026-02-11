import {useMice} from "@/react/mice-app/MiceContext";

type Props = {
  onBefore?: () => boolean
  skip?: number
}

export default function NextButton({onBefore, skip = 1}: Props) {
  const {setStep} = useMice();

  const nextStep = () => {
    if (!onBefore || onBefore())
      setStep(prev => prev + skip);
  }

  return <div className="mice-form-next">
    <button type="button" className="btn btn-primary btn-primary--white" onClick={nextStep}>
      Продолжить
    </button>
  </div>;
}