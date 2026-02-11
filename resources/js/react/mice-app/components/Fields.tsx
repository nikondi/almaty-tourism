import {PropsWithChildren} from "react";

export default function Fields({children}: PropsWithChildren) {
  return <div className="mice-fields">
    {children}
  </div>
}