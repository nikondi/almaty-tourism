import {createContext, useContext} from "react";
import {IMiceContext} from "@/react/mice-app/types";

const MiceContext = createContext<IMiceContext>(null);
export const useMice = () => useContext(MiceContext);

export default MiceContext;