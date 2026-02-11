import {IMiceForm} from "@/react/mice-app/types";
import {useMice} from "@/react/mice-app/MiceContext";

type Props = {
  name: keyof IMiceForm
}

export default function FieldError({name}: Props) {
  const {errors} = useMice();

  if (!errors[name])
    return;

  return <div className="mice-field__error">
    <svg width="16" height="16" viewBox="0 0 16 16" fill="none">
      <path
          d="M7.99992 14.6668C11.6818 14.6668 14.6666 11.6821 14.6666 8.00016C14.6666 4.31826 11.6818 1.3335 7.99992 1.3335C4.31802 1.3335 1.33325 4.31826 1.33325 8.00016C1.33325 11.6821 4.31802 14.6668 7.99992 14.6668Z"
          stroke="#F93232" strokeWidth="1.33333" strokeLinecap="round" strokeLinejoin="round"/>
      <path d="M10 6L6 10" stroke="#F93232" strokeWidth="1.33333" strokeLinecap="round" strokeLinejoin="round"/>
      <path d="M6 6L10 10" stroke="#F93232" strokeWidth="1.33333" strokeLinecap="round" strokeLinejoin="round"/>
    </svg>
    <div>{errors[name]}</div>
  </div>;
}