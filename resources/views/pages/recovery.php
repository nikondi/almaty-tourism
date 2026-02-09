<div class="auth-form">
    <div class="auth-form__title">Забыли пароль?</div>
    <div class="auth-form__description">Пожалуйста, введите ваш зарегистрированный адрес электронной почты. Мы отправим
        вам ссылку на создание нового пароля
    </div>
    <form onsubmit="window.location.href = '/recovery/sended'; return false" id="recovery-form">
        <fieldset class="auth-fieldset">
            <div class="auth-field">
                <div class="auth-field-inner">
                    <label class="auth-field__label" for="email">Почта</label>
                    <input class="auth-field__input" type="email" name="email" id="email" required>
                </div>
            </div>
        </fieldset>

        <div class="auth-form-buttons">
            <button class="btn btn-primary">Продолжить</button>
        </div>
    </form>
</div>