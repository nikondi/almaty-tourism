import {PropsWithChildren} from "react";

export default function NextButton({children}: PropsWithChildren) {
  return <div className="mice-form-step__name">
    {children}
  </div>;
}