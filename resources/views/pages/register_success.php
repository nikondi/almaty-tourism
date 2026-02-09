<div class="auth-form register-form">
    <?php
    $is_success = true;
    include VIEW_PATH . '/components/register-heading.php' ?>
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
    <!-- TODO: в зависимости от выбранного -->
    <a href="/login" class="auth-form__extlink">Создать заявку</a>
    <!--<a href="/login" class="auth-form__extlink">Выставить услугу</a> - для подрядчика -->
</div>