<script>
    // TODO: на нормальную отправку. Нужно для билда
    function onRegisterSubmit() {
        window.location.href = "/register/success";
        return false;
    }
</script>
<div class="auth-form register-form">
    <?php include VIEW_PATH . '/components/register-heading.php'; ?>
    <form id="register-form" onsubmit="return onRegisterSubmit()">
        <div class="register-step active">
            <fieldset class="auth-fieldset">
                <label class="register-btn-checkbox">
                    <input type="radio" name="client_type" value="customer" checked>
                    <span>Я буду заказчиком</span>
                </label>
                <label class="register-btn-checkbox">
                    <input type="radio" name="client_type" value="contractor">
                    <span>Я буду подрядчиком</span>
                </label>
            </fieldset>

            <div class="auth-form-buttons">
                <button class="btn btn-primary register-next-step" type="button">Продолжить</button>
            </div>

            <a href="/login" class="auth-form__extlink">Войти в аккаунт</a>
        </div>

        <div class="register-step">
            <fieldset class="auth-fieldset">
                <div class="auth-field">
                    <div class="auth-field-inner">
                        <label class="auth-field__label" for="name">Имя</label>
                        <input class="auth-field__input" type="text" name="name" id="name" required>
                    </div>
                </div>
                <div class="auth-field">
                    <div class="auth-field-inner">
                        <label class="auth-field__label" for="surname">Фамилия</label>
                        <input class="auth-field__input" type="text" name="surname" id="surname" required>
                    </div>
                </div>
            </fieldset>

            <div class="auth-form-buttons">
                <button class="btn btn-primary register-next-step" type="button">Продолжить</button>
            </div>

            <a href="/login" class="auth-form__extlink">Войти в аккаунт</a>
        </div>
        <div class="register-step">
            <fieldset class="auth-fieldset">
                <div class="auth-field">
                    <div class="auth-field-inner">
                        <label class="auth-field__label" for="company_name">Название компании</label>
                        <input class="auth-field__input" type="text" name="company_name" id="company_name" required>
                    </div>
                </div>
                <div class="auth-field auth-field--dropdown register-contractor-field">
                    <div class="auth-field-inner">
                        <label class="auth-field__label" for="service_type">Категория услуг</label>
                        <select name="service_type" id="service_type" class="auth-field__input" required>
                            <option value="" selected disabled>Название</option>
                            <option value="1">Достопримечательности и культурное наследие</option>
                            <option value="2">Питание и кейтеринг</option>
                            <option value="3">Размещение</option>
                            <option value="4">MICE‑площадки и инфраструктура событий</option>
                            <option value="5">Активности, развлечения и оздоровление</option>
                            <option value="6">Транспорт и логистика</option>
                            <option value="7">Профессиональные услуги и партнёрская экосистема</option>
                        </select>
                    </div>
                </div>
                <div class="auth-field auth-field--phone">
                    <div class="auth-field-inner">
                        <label class="auth-field__label" for="phone">Телефон</label>
                        <input class="auth-field__input" type="tel" name="phone" id="phone" required>
                    </div>
                </div>
                <div class="auth-field">
                    <div class="auth-field-inner">
                        <label class="auth-field__label" for="email">Email</label>
                        <input class="auth-field__input" type="email" name="email" id="email" required>
                    </div>
                </div>
                <div class="auth-field password-field">
                    <div class="auth-field-inner">
                        <label class="auth-field__label" for="password">Пароль</label>
                        <input class="auth-field__input" type="password" name="password" id="password" required>
                        <button type="button" class="password-field__eye"></button>
                    </div>
                </div>
            </fieldset>

            <div class="auth-form-buttons">
                <button class="btn btn-primary" type="submit">Продолжить</button>
            </div>

            <a href="/login" class="auth-form__extlink">Войти в аккаунт</a>
        </div>
    </form>

    <div class="register-step register-success">
        <div class="register-success__icon">
            <svg width="132" height="132" viewBox="0 0 132 132" fill="none">
                <path
                    d="M66 11C35.695 11 11 35.695 11 66C11 96.305 35.695 121 66 121C96.305 121 121 96.305 121 66C121 35.695 96.305 11 66 11ZM92.29 53.35L61.105 84.535C60.335 85.305 59.29 85.745 58.19 85.745C57.09 85.745 56.045 85.305 55.275 84.535L39.71 68.97C38.115 67.375 38.115 64.735 39.71 63.14C41.305 61.545 43.945 61.545 45.54 63.14L58.19 75.79L86.46 47.52C88.055 45.925 90.695 45.925 92.29 47.52C93.885 49.115 93.885 51.7 92.29 53.35Z"
                    fill="#7ABF55"/>
            </svg>
        </div>
        <div class="register-success__text">Вы успешно зарегистрировались</div>
        <div class="auth-form-buttons">
            <a href="/" class="btn btn-primary">Перейти на страницу</a>
        </div>
        <a href="/login" class="auth-form__extlink register-customer-field">Создать заявку</a>
        <a href="/login" class="auth-form__extlink register-contractor-field">Выставить услугу</a>
    </div>
</div>