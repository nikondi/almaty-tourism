import {PropsWithChildren} from "react";

export default function Step({children}: PropsWithChildren) {
  return <div className="mice-form-step">
    {children}
  </div>;
}