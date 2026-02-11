import {IStep, TNeedSupportName} from "@/react/mice-app/types";
import {ConfirmStep, ContactsStep, DetailsStep, HistoryStep, InfoStep, NeedSupportStep} from "@/react/mice-app/steps";

export const needSupports: Record<TNeedSupportName, string> = {
  food: 'Питание',
  souvenir: 'Сувениры',
  living: 'Проживание',
  conference: 'Конференц-зал',
  flight: 'Перелёт',
  tech: 'Техническое обеспечение',
  transfer: 'Трансфер',
  cultural: 'Культурная программа',
  excursion: 'Экскурсия',
}

export const steps: IStep[] = [
  {
    name: 'Общая информация',
    elem: <InfoStep/>
  },
  {
    name: 'История мероприятия',
    elem: <HistoryStep/>
  },
  {
    name: 'Запрашиваемая поддержка',
    elem: <NeedSupportStep/>
  },
  {
    name: 'Детализация по выбранным опциям',
    elem: <DetailsStep/>
  },
  {
    name: 'Контактная информация',
    elem: <ContactsStep/>
  },
  {
    name: 'Подтверждение и отправка',
    elem: <ConfirmStep/>
  },
]