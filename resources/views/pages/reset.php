<div class="auth-form">
    <div class="auth-form__title">Забыли пароль?</div>
    <form onsubmit="window.location.href = '/recovery/sended'; return false" id="auth-reset-form">
        <fieldset class="auth-fieldset">
            <div class="auth-field password-field">
                <div class="auth-field-inner">
                    <label class="auth-field__label" for="password">Пароль</label>
                    <input class="auth-field__input" type="password" name="password" id="password" required>
                    <button type="button" class="password-field__eye"></button>
                </div>
            </div>
            <div class="auth-field password-field">
                <div class="auth-field-inner">
                    <label class="auth-field__label" for="password">Подтверждение пароля</label>
                    <input class="auth-field__input" type="password" name="password" id="password" required>
                    <button type="button" class="password-field__eye"></button>
                </div>
            </div>
        </fieldset>
        <div class="auth-form__description auth-form__description--after">
            <p>Минимум 10 символов.</p>
            <ul>
                <li>Одна заглавная буква</li>
                <li>Одна цифра</li>
                <li>Один символ</li>
            </ul>
        </div>

        <div class="auth-form-buttons">
            <button class="btn btn-primary">Сбросить пароль</button>
        </div>
    </form>
</div>