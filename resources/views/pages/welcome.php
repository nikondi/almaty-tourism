<section class="wide-section welcome-first">
    <div class="container">
        <div class="welcome-first-black"></div>
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
<!-- TODO: mobile -->
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
                ['date' => '10 ноября 2025', 'image' => '/assets/img/welcome/actual-request.png', 'link' => '#', 'title' => 'Конференция на 120 человек', 'description' => 'Ищу современный зал с техническим оснащением и питанием для проведения двухдневной конференции.'],
                ['date' => '10 ноября 2025', 'image' => '/assets/img/welcome/actual-request.png', 'link' => '#', 'title' => 'Корпоратив для IT-компании', 'description' => 'Хочу организовать новогодний корпоратив с ведущим и банкетом в уютной атмосфере для 100 гостей.'],
                ['date' => '10 ноября 2025', 'image' => '/assets/img/welcome/actual-request.png', 'link' => '#', 'title' => 'Тренинг для сотрудников', 'description' => 'Необходим небольшой зал с переводчиком и техникой для проведения двухдневного тренинга в октябре.'],
                ['date' => '10 ноября 2025', 'image' => '/assets/img/welcome/actual-request.png', 'link' => '#', 'title' => 'Тимбилдинг за городом', 'description' => 'Компания планирует выездной тимбилдинг с играми, питанием и транспортом для коллектива из 60 человек.'],
                ['date' => '10 ноября 2025', 'image' => '/assets/img/welcome/actual-request.png', 'link' => '#', 'title' => 'Презентация нового продукта', 'description' => 'Бизнес запускает новый продукт и хочет провести яркое мероприятие с презентацией, сценой и видеосъёмкой.'],
                ['date' => '10 ноября 2025', 'image' => '/assets/img/welcome/actual-request.png', 'link' => '#', 'title' => 'Международный форум', 'description' => 'Крупный заказчик готовит трёхдневный форум для зарубежных делегаций с проживанием, питанием и синхронным переводом.'],
        ];
        ?>
        <div class="actual-requests-grid">
            <?php foreach ($actual_requests as $actual_request): ?>
                <a href="<?= $actual_request['link'] ?>" class="actual-request">
                    <img src="<?= $actual_request['image'] ?>" alt="" class="actual-request-image">
                    <div class="actual-request-inner">
                        <div class="actual-request-top">
                            <div class="actual-request-date">
                                <img src="/assets/img/icons/light/calendar.svg" alt="">
                                <span><?= $actual_request['date'] ?></span>
                            </div>
                        </div>
                        <div class="actual-request-bottom">
                            <div class="actual-request-text">
                                <div class="actual-request-title"><?= $actual_request['title'] ?></div>
                                <div class="actual-request-description"><?= $actual_request['description'] ?></div>
                            </div>
                        </div>
                    </div>
                    <div class="actual-request-arrow">
                        <img src="/assets/img/icons/light/arrow-up-right.svg" alt=""/>
                    </div>
                </a>
            <?php endforeach; ?>
        </div>
        <div class="actual-requests-button-wrapper">
            <a href="#" class="btn btn-secondary">
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
        <div class="welcome-guides-tags">
            <a href="#">Гиды</a>
            <a href="#">Туроператоры</a>
            <a href="#">Переводчики</a>
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