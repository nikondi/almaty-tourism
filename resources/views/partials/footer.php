<footer class="footer">
    <div class="container">
        <div class="footer-logo">
            <a href="/">
                <svg width="174" height="46">
                    <use xlink:href="/assets/img/logo.svg#logo"/>
                </svg>
            </a>
        </div>
        <div class="footer-flex">
            <nav class="footer-menus">
                <div class="footer-menu">
                    <div class="footer-menu__title">Основные страницы</div>
                    <ul class="footer-menu-list">
                        <?php
                        $menu = [
                                ['text' => 'Каталог', 'link' => '#'],
                                ['text' => 'Заявки', 'link' => '#'],
                                ['text' => 'Аналитика', 'link' => '#'],
                                ['text' => 'О нас', 'link' => '#'],
                                ['text' => 'Фото и видео банк', 'link' => '#'],
                        ];
                        foreach ($menu as $item) : ?>
                            <li>
                                <a href="<?= $item['link'] ?>"><?= $item['text'] ?></a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                <div class="footer-menu">
                    <div class="footer-menu__title">Каталог</div>
                    <ul class="footer-menu-list">
                        <?php
                        $menu = [
                                ['text' => 'Достопримечательности и культурное наследие ', 'link' => '#'],
                                ['text' => 'Питание и кейтеринг', 'link' => '#'],
                                ['text' => 'Размещение', 'link' => '#'],
                                ['text' => 'Mice-площадки и инфраструктура событий', 'link' => '#'],
                                ['text' => 'Активности, развлечение и оздоровление ', 'link' => '#'],
                                ['text' => 'Транспорт и логистика', 'link' => '#'],
                                ['text' => 'Профессиональные услуги и партнёрская экосистема ', 'link' => '#'],
                        ];
                        foreach ($menu as $item) : ?>
                            <li>
                                <a href="<?= $item['link'] ?>"><?= $item['text'] ?></a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </nav>
            <div class="footer-contacts">
                <div class="footer-contacts__title">Связаться</div>
                <ul class="footer-contacts-list">
                    <li class="footer-contact">
                        <div class="footer-contact__number">01</div>
                        <div class="footer-contact__content">
                            <div class="footer-contact__label">Телефон</div>
                            <div class="footer-contact__text"><a href="tel:+7 (777) 777 77 77">+7 (777) 777 77 77</a>
                            </div>
                        </div>
                    </li>
                    <li class="footer-contact">
                        <div class="footer-contact__number">02</div>
                        <div class="footer-contact__content">
                            <div class="footer-contact__label">Email</div>
                            <div class="footer-contact__text"><a href="mailto:">info@visitalmaty.kz</a></div>
                        </div>
                    </li>
                    <li class="footer-contact">
                        <div class="footer-contact__number">03</div>
                        <div class="footer-contact__content">
                            <div class="footer-contact__label">Адрес</div>
                            <div class="footer-contact__text">Казахстан, Алматы,<br/>
                                Байзакова 303
                            </div>
                        </div>
                    </li>
                    <li class="footer-contact">
                        <div class="footer-contact__number">04</div>
                        <div class="footer-contact__content">
                            <div class="footer-contact__label">Социальные сети</div>
                            <div class="footer-contact__text footer-contact__text--divided">
                                <a href="#">Instagram</a>
                                <a href="#">Youtube</a>
                                <a href="#">LinkedIn</a>
                                <a href="#">Tik-Tok</a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <div class="footer-politics">
            <a href="#">Политика конфиденциальности</a>
        </div>
    </div>
    <div class="footer-video">
        <video src="/assets/video/footer-video.mp4" muted autoplay playsinline loop></video>
    </div>
</footer>