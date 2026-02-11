import {useMice} from "@/react/mice-app/MiceContext";
import {useEffect, useMemo, useRef, useState} from "react";
import {steps} from "@/react/mice-app/const";

type Props = {}

export default function Progress({}: Props) {
  const {step} = useMice();
  const progress = useMemo(() => {
    return Math.ceil(step / steps.length * 100);
  }, [step])
  const progressPercent = useAnimatedNumber(progress, 300);

  return <div className="mice-form-progress-wrap">
    <div className="mice-form-progress">
      <div className="mice-form-progress__inner" style={{width: progress + '%'}}></div>
    </div>
    <div>
      {progressPercent}%
    </div>
  </div>;
}

function useAnimatedNumber(targetNumber: number, duration: number = 500) {
  const [displayNumber, setDisplayNumber] = useState(targetNumber);
  const requestRef = useRef<number>(null);
  const startTimeRef = useRef<number>(null);
  const startNumberRef = useRef(targetNumber);

  useEffect(() => {
    startNumberRef.current = displayNumber;
    startTimeRef.current = undefined;

    const animate = (time: number) => {
      if (!startTimeRef.current) startTimeRef.current = time;

      const elapsed = time - startTimeRef.current;
      const progress = Math.min(elapsed / duration, 1);

      // Можно использовать разные функции плавности
      const easeInOutQuad = (t: number) =>
          t < 0.5 ? 2 * t * t : 1 - Math.pow(-2 * t + 2, 2) / 2;

      const easedProgress = easeInOutQuad(progress);
      const currentNumber = startNumberRef.current +
          (targetNumber - startNumberRef.current) * easedProgress;

      setDisplayNumber(currentNumber);

      if (progress < 1) {
        requestRef.current = requestAnimationFrame(animate);
      }
    };

    requestRef.current = requestAnimationFrame(animate);

    return () => {
      if (requestRef.current) {
        cancelAnimationFrame(requestRef.current);
      }
    };
  }, [targetNumber, duration]);

  return Math.round(displayNumber);
}