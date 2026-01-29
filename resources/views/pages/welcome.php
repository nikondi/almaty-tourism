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