import React from 'react';
import ReactDOM from 'react-dom/client';
import Popup from "@/react/mice-app/Popup";
import {MiceForm} from "@/react/mice-app/MiceContext";
import {AppData} from "@/react/mice-app/types";

type AppProps = {
  data: AppData;
}

const App = ({data}: AppProps) => {
  return <MiceForm appData={data}>
    <Popup/>
  </MiceForm>
}

document.addEventListener('DOMContentLoaded', initMiceApp);

function initMiceApp() {
  const rootElem = document.getElementById("mice-app");
  const root = ReactDOM.createRoot(rootElem);

  const appData: AppData = JSON.parse(rootElem.dataset.data);

  root.render(<App data={appData}/>);
}