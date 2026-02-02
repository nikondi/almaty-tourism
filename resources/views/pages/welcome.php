<section class="wide-section welcome-first">
    <div class="welcome-first-background swiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide"><img src="/assets/img/welcome/first-background.jpg" alt=""></div>
            <div class="swiper-slide"><img src="/assets/img/welcome/platform.png" alt=""></div>
            <div class="swiper-slide"><img src="/assets/img/welcome/guides-mobile.png" alt=""></div>
            <div class="swiper-slide"><img src="/assets/img/welcome/support.jpg" alt=""></div>
        </div>
    </div>
    <div class="welcome-first-black"></div>

    <div class="container">
        <div class="welcome-first-inner">
            <h1 class="welcome-first-title">Организуйте мероприятие в Алматы быстро и удобно</h1>
            <div class="welcome-first-description">
                Найдите площадку, услуги и готовые решения в одном месте
            </div>
            <div class="welcome-first-buttons">
                <button class="btn btn-primary">Оставить запрос</button>
                <button class="btn btn-secondary btn-secondary--white">Выставить услугу</button>
            </div>
            <div class="welcome-first-steps">
                <div class="swiper welcome-first-steps-slider">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="welcome-first-step">
                                <div class="welcome-first-step__number">01</div>
                                <div class="welcome-first-step__text">Майс поддержка</div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="welcome-first-step">
                                <div class="welcome-first-step__number">02</div>
                                <div class="welcome-first-step__text">Почему в Алматы лучше</div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="welcome-first-step">
                                <div class="welcome-first-step__number">03</div>
                                <div class="welcome-first-step__text">Найдите площадку, услуги и готовые решения в одном
                                    месте
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="welcome-first-step">
                                <div class="welcome-first-step__number">04</div>
                                <div class="welcome-first-step__text">Найдите площадку, услуги и готовые решения в одном
                                    месте
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="slider-wrapper platform-section">
    <div class="container">
        <div class="platform-wrapper">
            <img src="/assets/img/welcome/platform.png" class="platform-image" alt=""/>
            <div class="platform-text">
                <h2 class="platform-title">Платформа для бизнеса в Алматы</h2>
                <div class="platform-description">Наша платформа помогает компаниям, организациям и частным клиентам
                    быстро находить проверенные площадки и подрядчиков для деловых и частных мероприятий.
                </div>
            </div>
        </div>
        <div class="platform-slider">
            <?php
            $slides = [
                ['link' => '#', 'title' => 'Достопримечательно<wbr>сти и культурное наследие', 'description' => 'Наша платформа помогает компаниям, организациям и частным клиентам быстро находить проверенные площадки и подрядчиков для деловых и частных мероприятий.'],
                ['link' => '#', 'title' => 'MICE‑площадки и инфраструктура событий', 'description' => 'Наша платформа помогает компаниям, организациям и частным клиентам быстро находить проверенные площадки и подрядчиков для деловых и частных мероприятий.'],
                ['link' => '#', 'title' => 'Размещение', 'description' => 'Наша платформа помогает компаниям, организациям и частным клиентам быстро находить проверенные площадки и подрядчиков для деловых и частных мероприятий.'],
                ['link' => '#', 'title' => 'Питание и кейтеринг', 'description' => 'Наша платформа помогает компаниям, организациям и частным клиентам быстро находить проверенные площадки и подрядчиков для деловых и частных мероприятий.'],
                ['link' => '#', 'title' => 'Активности, развлечения и оздоровление', 'description' => 'Наша платформа помогает компаниям, организациям и частным клиентам быстро находить проверенные площадки и подрядчиков для деловых и частных мероприятий.'],
                ['link' => '#', 'title' => 'Размещение', 'description' => 'Наша платформа помогает компаниям, организациям и частным клиентам быстро находить проверенные площадки и подрядчиков для деловых и частных мероприятий.'],
            ];
            ?>
            <div class="platform-slides swiper">
                <div class="swiper-wrapper">
                    <?php foreach ($slides as $slide): ?>
                        <div class="swiper-slide">
                            <a href="<?= $slide['link'] ?>" class="platform-card">
                                <div class="platform-card__arrow">
                                    <div class="platform-card__arrow-inner">
                                        <img src="/assets/img/icons/light/arrow-up-right.svg" alt="">
                                    </div>
                                </div>
                                <div class="platform-card__title"><?= $slide['title'] ?></div>
                                <div class="platform-card__description"><?= $slide['description'] ?></div>
                            </a>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="platform-nav">
                <button class="platform-nav-arrow platform-nav-arrow--prev">
                    <img src="/assets/img/icons/light/chevron-left.svg" alt="">
                </button>
                <div class="platform-nav-indicator">
                    <span class="platform-nav-indicator__current">01</span>
                    <span>/</span>
                    <span class="platform-nav-indicator__total">06</span>
                </div>
                <button class="platform-nav-arrow platform-nav-arrow--next">
                    <img src="/assets/img/icons/light/chevron-right.svg" alt="">
                </button>
            </div>
        </div>
    </div>
</section>

<section class="actual-requests-section">
    <div class="container">
        <h3 class="section-title">Актуальные запросы</h3>
        <?php
        $actual_requests = [
            ['date' => '10 ноября 2025', 'image' => '/assets/img/welcome/actual-request.png', 'link' => '/request', 'title' => 'Конференция на 120 человек', 'description' => 'Ищу современный зал с техническим оснащением и питанием для проведения двухдневной конференции.'],
            ['date' => '10 ноября 2025', 'image' => '/assets/img/welcome/actual-request.png', 'link' => '/request', 'title' => 'Корпоратив для IT-компании', 'description' => 'Хочу организовать новогодний корпоратив с ведущим и банкетом в уютной атмосфере для 100 гостей.'],
            ['date' => '10 ноября 2025', 'image' => '/assets/img/welcome/actual-request.png', 'link' => '/request', 'title' => 'Тренинг для сотрудников', 'description' => 'Необходим небольшой зал с переводчиком и техникой для проведения двухдневного тренинга в октябре.'],
            ['date' => '10 ноября 2025', 'image' => '/assets/img/welcome/actual-request.png', 'link' => '/request', 'title' => 'Тимбилдинг за городом', 'description' => 'Компания планирует выездной тимбилдинг с играми, питанием и транспортом для коллектива из 60 человек.'],
            ['date' => '10 ноября 2025', 'image' => '/assets/img/welcome/actual-request.png', 'link' => '/request', 'title' => 'Презентация нового продукта', 'description' => 'Бизнес запускает новый продукт и хочет провести яркое мероприятие с презентацией, сценой и видеосъёмкой.'],
            ['date' => '10 ноября 2025', 'image' => '/assets/img/welcome/actual-request.png', 'link' => '/request', 'title' => 'Международный форум', 'description' => 'Крупный заказчик готовит трёхдневный форум для зарубежных делегаций с проживанием, питанием и синхронным переводом.'],
        ];
        ?>
        <div class="actual-requests-grid">
            <?php foreach ($actual_requests as $card): ?>
                <?php include VIEW_PATH . 'components/request-card.php'; ?>
            <?php endforeach; ?>
        </div>
        <div class="actual-requests-button-wrapper">
            <a href="/requests" class="btn btn-secondary">
                <span>Смотреть все</span>
                <img src="/assets/img/icons/arrow-right.svg" alt="" class="btn-icon">
            </a>
        </div>
    </div>
</section>

<section class="welcome-photobank-section">
    <div class="container">
        <h3 class="section-title section-title--right">Фото и видео банк</h3>
        <?php
        $images = [
            '/assets/img/welcome/photo-bank/1.jpg',
            '/assets/img/welcome/photo-bank/6.jpg',
            '/assets/img/welcome/photo-bank/7.jpg',
            '/assets/img/welcome/photo-bank/4.jpg',
            '/assets/img/welcome/photo-bank/9.jpg',
            '/assets/img/welcome/photo-bank/2.jpg',
            '/assets/img/welcome/photo-bank/3.jpg',
            '/assets/img/welcome/photo-bank/8.jpg',
            '/assets/img/welcome/photo-bank/5.jpg',
        ];
        ?>
        <div class="welcome-photobank-grid">
            <?php foreach ($images as $image): ?>
                <a href="<?= $image ?>" data-fancybox="welcome-bank">
                    <img src="<?= $image ?>" alt="">
                </a>
            <?php endforeach; ?>
        </div>
        <div class="welcome-photobank-button-wrapper">
            <a href="#" class="btn btn-secondary">
                <span>Смотреть фото</span>
                <img src="/assets/img/icons/arrow-right.svg" alt="" class="btn-icon">
            </a>
        </div>
    </div>
</section>

<section class="welcome-guides-section">
    <div class="container">
        <div class="welcome-guides-tags tags">
            <a href="#" class="tag">Гиды</a>
            <a href="#" class="tag">Туроператоры</a>
            <a href="#" class="tag">Переводчики</a>
        </div>
        <div class="welcome-guides-title">
            Пользуются доверием профессионалов<br/>
            <span>из различных отраслей туризма</span>
        </div>
        <div class="welcome-guides-description">
            Наша платформа помогает компаниям, организациям и частным клиентам быстро находить проверенные площадки и
            подрядчиков для деловых и частных мероприятий.
        </div>
        <div class="welcome-guides-button">
            <a href="#" class="btn btn-secondary">
                <span>Смотреть всех</span>
                <img src="/assets/img/icons/arrow-right.svg" alt="" class="btn-icon">
            </a>
        </div>
    </div>
</section>

<section class="welcome-support-section">
    <div class="container">
        <div class="welcome-support-wrap">
            <div class="welcome-support-text">
                <h2 class="welcome-support-title">Поддержка MICE мероприятий</h2>
                <div class="welcome-support-description">«Almaty Tourism Bureau оказывает поддержку в проведении
                    международных конференций, форумов, саммитов и других деловых мероприятий. Заполните форму ниже,
                    чтобы мы могли рассмотреть вашу заявку и предложить оптимальный формат сотрудничества.»
                </div>
            </div>
            <div class="welcome-support-button">
                <!-- TODO: форма -->
                <button type="button" class="btn btn-secondary btn-secondary--white">
                    Заполнить заявку
                </button>
            </div>
        </div>
        <ul class="welcome-support-list">
            <?php
            $supports = [
                ['icon' => 'food', 'name' => 'Питание', 'link' => '#'],
                ['icon' => 'microphone', 'name' => 'Техническое обеспечение', 'link' => '#'],
                ['icon' => 'map', 'name' => 'Экскурсия', 'link' => '#'],
                ['icon' => 'hotel', 'name' => 'Проживание', 'link' => '#'],
                ['icon' => 'masks', 'name' => 'Культурная программа', 'link' => '#'],
                ['icon' => 'bag', 'name' => 'Сувениры', 'link' => '#'],
                ['icon' => 'tickets', 'name' => 'Перелёт', 'link' => '#'],
                ['icon' => 'bus', 'name' => 'Трансфер', 'link' => '#'],
                ['icon' => 'peoples', 'name' => 'Конференц-зал', 'link' => '#'],
            ];
            foreach ($supports as $support): ?>

                <li>
                    <a href="<?= $support['link'] ?>">
                        <svg width="32" height="32">
                            <use xlink:href="/assets/img/welcome/support.svg#<?= $support['icon'] ?>"
                        </svg>
                        <span><?= $support['name'] ?></span>
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>
        <img src="/assets/img/welcome/support.jpg" class="welcome-support-image" alt="">
    </div>
</section>

<section class="welcome-stories-section">
    <div class="container">
        <h2 class="section-title">Истории успеха</h2>
        <div class="welcome-stories-tags tags">
            <?php
            $tags = [
                ['name' => 'Гиды и Туроператоры', 'link' => '#'],
                ['name' => 'Кейтеринг и питание', 'link' => '#'],
                ['name' => 'Оборудование и техника', 'link' => '#'],
                ['name' => 'Ведущие и артисты', 'link' => '#'],
                ['name' => 'Переводчики', 'link' => '#'],
                ['name' => 'Транспорт и логистика', 'link' => '#'],
                ['name' => 'Декор и оформление', 'link' => '#'],
            ];
            foreach ($tags as $tag): ?>
                <a href="<?= $tag['link'] ?>" class="tag"><?= $tag['name'] ?></a>
            <?php endforeach; ?>
        </div>
        <div class="welcome-stories-grid">
            <?php
            $stories = [
                ['title' => 'Конференция для IT-компании', 'description' => '', 'img' => '/assets/img/welcome/stories/1.jpg', 'link' => '#'],
                ['title' => 'Тимбилдинг на природе', 'description' => 'Выездное мероприятие для 80 сотрудников с транспортом, активностями и фуршетом.', 'img' => '/assets/img/welcome/stories/2.jpg', 'link' => '#'],
                ['title' => 'Презентация нового продукта', 'description' => '', 'img' => '/assets/img/welcome/stories/3.jpg', 'link' => '#'],
                ['title' => 'Международная конференция по энергетике', 'description' => '', 'img' => '/assets/img/welcome/stories/4.jpg', 'link' => '#'],
                ['title' => 'Корпоративный банкет для банка', 'description' => '', 'img' => '/assets/img/welcome/stories/5.jpg', 'link' => '#'],
                ['title' => 'Гастрономический фестиваль', 'description' => '', 'img' => '/assets/img/welcome/stories/6.jpg', 'link' => '#'],
                ['title' => 'Культурный вечер для делегации', 'description' => 'Программа с гидами, переводчиками, ужином в национальном стиле и выступлениями артистов.', 'img' => '/assets/img/welcome/stories/7.jpg', 'link' => '#'],
                ['title' => 'Тренинг для сотрудников холдинга', 'description' => '', 'img' => '/assets/img/welcome/stories/8.jpg', 'link' => '#'],
                ['title' => 'Международный медицинский форум', 'description' => '', 'img' => '/assets/img/welcome/stories/9.jpg', 'link' => '#'],
            ];
            foreach ($stories as $story): ?>
                <div class="welcome-story">
                    <img src="<?= $story['img']; ?>" alt="" class="welcome-story__img">
                    <div class="welcome-story__text">
                        <div class="welcome-story__title"><?= $story['title']; ?></div>
                        <div class="welcome-story__description"><?= $story['description']; ?></div>
                        <a href="<?= $story['link'] ?>" class="welcome-story__link">Читать</a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <div class="welcome-stories-button">
            <a href="#" class="btn btn-secondary">
                <span>Смотреть все</span>
                <img src="/assets/img/icons/arrow-right.svg" alt="" class="btn-icon">
            </a>
        </div>
    </div>
</section>

<section class="welcome-faq-section">
    <div class="container welcome-faq-wrapper">
        <div class="welcome-faq-text">
            <div class="welcome-faq-tag">Вопросы?</div>
            <h2 class="section-title">Часто задаваемые вопросы</h2>
            <div class="welcome-faq-description">В этом разделе мы собрали ответы на самые популярные вопросы о том, как
                работает наша платформа. Здесь вы узнаете, как разместить запрос, как партнёры откликаются на заявки,
                как
                проходит модерация объявлений и какие возможности доступны клиентам и подрядчикам.
            </div>
        </div>
        <div class="welcome-faq-list">
            <?php
            $questions = [
                ['question' => 'Как разместить запрос на мероприятие?', 'answer' => 'Ответ. Очень длинный ответ с <b>Тегами</b> и <i>Курсивом</i>'],
                ['question' => 'Сколько стоит размещение запроса?', 'answer' => 'Ответ. Очень длинный ответ с <b>Тегами</b> и <i>Курсивом</i>'],
                ['question' => 'Как стать партнёром?', 'answer' => 'Ответ. Очень длинный ответ с <b>Тегами</b> и <i>Курсивом</i>'],
                ['question' => 'Как работает модерация?', 'answer' => 'Ответ. Очень длинный ответ с <b>Тегами</b> и <i>Курсивом</i>'],
                ['question' => 'Как я получу отклики на мой запрос?', 'answer' => 'Ответ. Очень длинный ответ с <b>Тегами</b> и <i>Курсивом</i>'],
                ['question' => 'Нужно ли мне общаться только через сайт?', 'answer' => 'Ответ. Очень длинный ответ с <b>Тегами</b> и <i>Курсивом</i>'],
            ];
            foreach ($questions as $question): ?>
                <div class="faq-item">
                    <div class="faq-item__question"><?= $question['question'] ?></div>
                    <svg width="24" height="24" viewBox="0 0 24 24" class="faq-item-icon">
                        <path d="M6 12H18" stroke="#232323" stroke-width="1.5" stroke-linecap="round"
                              stroke-linejoin="round"/>
                        <path d="M12 18V6" stroke="#232323" stroke-width="1.5" stroke-linecap="round"
                              stroke-linejoin="round" class="faq-item-icon__rotate"/>
                    </svg>

                    <div class="faq-item-answer">
                        <div class="faq-item-answer__inner"><?= $question['answer'] ?></div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>