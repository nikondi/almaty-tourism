export default function requestPage() {
  initRegisterForm();
}

type ClientType = 'contractor' | 'customer';

function initRegisterForm() {
  const wrapper = document.querySelector<HTMLElement>(".register-form");
  if (!wrapper)
    return;

  let currentClientType: ClientType = 'contractor';

  const steps = wrapper.querySelectorAll<HTMLElement>(".register-step");
  const indicators = wrapper.querySelectorAll<HTMLElement>(".register-step-indicator");

  const showStep = (index: number) => {
    indicators[index].classList.add("active");
    steps.forEach((el, i) => {
      if (index == i)
        el.classList.add("active");
      else
        el.classList.remove("active");
    });
  }

  const inputs = wrapper.querySelectorAll<HTMLInputElement>("input[type=text], input[type=password], input[type=email], input[type=tel], select");

  inputs.forEach((input) => {
    const wrap = input.closest('.auth-field');
    ['change', 'input'].forEach((ev) => input.addEventListener(ev, () => {
      wrap.querySelector('.auth-field__error')?.remove();
    }));

    if (wrap.classList.contains('auth-field--dropdown')) {
      wrap.addEventListener("click", function () {
        try {

          wrap.querySelector<HTMLSelectElement>('select')?.showPicker()
        } catch (_) {
        }
      })
    }
  })

  const validateStep = (index: number) => {
    let isValid = true;

    steps[index].querySelectorAll<HTMLInputElement>("input[required]").forEach((input) => {
      const wrap = input.closest('.auth-field');
      wrap.querySelector('.auth-field__error')?.remove();
      if (input.value.trim() == "") {
        isValid = false;
        const errorDiv = document.createElement('div')
        errorDiv.innerText = 'Поле обязательно для заполнения';
        errorDiv.className = 'auth-field__error';
        wrap.append(errorDiv);
      }
    });

    return isValid;
  }

  steps.forEach((step, i) => {
    const nextButton = step.querySelector<HTMLButtonElement>(".register-next-step");
    nextButton?.addEventListener('click', () => {
      if (validateStep(i))
        showStep(i + 1);
    });
  });

  inputs.forEach((input) => {
    const wrap = input.closest('.auth-field');
    if (wrap.classList.contains('register-form--contractor') || wrap.classList.contains('register-form--customer'))
      input.dataset.required = input.required ? '1' : null;
  });


  const checkClientType = () => {
    currentClientType = (wrapper.querySelector<HTMLInputElement>('input[name="client_type"]:checked').value as ClientType) ?? 'contractor';
    const oppositeType: ClientType = currentClientType === 'contractor' ? 'customer' : 'contractor';
    wrapper.classList.remove(`register-form--${oppositeType}`);
    wrapper.classList.add(`register-form--${currentClientType}`);

    inputs.forEach((input) => {
      const wrap = input.closest('.auth-field');
      if(wrap.classList.contains(`register-${oppositeType}-field`))
        input.required = false;
      if(wrap.classList.contains(`register-${currentClientType}-field`))
        input.required = !!input.dataset.required;
    })
  }
  checkClientType();
  wrapper.querySelectorAll<HTMLInputElement>('input[name="client_type"]').forEach((input) => input.addEventListener('change', checkClientType));
}