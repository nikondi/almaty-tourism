<div class="auth-form">
    <div class="auth-form__title">Вход</div>
    <div class="auth-form__description">Войдите в систему, чтобы управлять своей учетной записью</div>

    <!-- TODO: убрать onsubmit, или переделать на ajax -->
    <form onsubmit="alert('Отправлено'); return false" id="login-form">
        <fieldset class="auth-fieldset">
            <div class="auth-field">
                <div class="auth-field-inner">
                    <label class="auth-field__label" for="login">Логин</label>
                    <input class="auth-field__input" type="text" name="login" id="login" required>
                </div>
            </div>
            <div class="auth-field password-field password-field--with-reset">
                <div class="auth-field-inner">
                    <label class="auth-field__label" for="password">Пароль</label>
                    <input class="auth-field__input" type="password" name="password" id="password" required>
                    <button type="button" class="password-field__eye"></button>
                    <a href="/recovery" type="button" class="password-field__reset">Напомнить пароль</a>
                </div>
            </div>
        </fieldset>

        <div class="auth-form-buttons">
            <button class="btn btn-primary">Войти</button>
            <a href="/register" class="btn btn-secondary btn-secondary--white">Регистрация</a>
        </div>
    </form>
</div>