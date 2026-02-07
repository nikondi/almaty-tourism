<?php
$contractor = [
    'coords' => [76.945645, 43.237163],
    'title' => 'Grand Conference Hall',
    'type' => 'Премиум-зал для конференций и форумов',
    'images' => [
        '/assets/img/request/main.png',
        '/assets/img/request/main.png',
        '/assets/img/request/main.png',
        '/assets/img/request/main.png',
        '/assets/img/request/main.png',
        '/assets/img/request/main.png',
    ],

    'district' => 'Ауезовский',
    'capacity' => '300',
    'tech' => 'Микрофоны, проектор, экран',
    'level' => 'Премиум',

    'description' => 'Компания ищет современный зал в центре Алматы с полным техническим оснащением и кейтерингом. Важно, чтобы помещение подходило для двухдневной конференции и имело удобный доступ к транспорту.',

    'has' => ['Площадка с рассадкой «театр»', 'Сцена, проектор, звуковое оборудование', 'Кофе-брейк на 120 человек', 'Переводчик RU/EN',],

    'tags' => ['Кейтеринг и питание', 'Конференция', 'Переводчик', '+100 человек', 'Техническое оборудование',],
];

$client = [
    'photo' => '/assets/img/contractor.png',
    'name' => 'Нурланова Анель',
    'position' => 'Менеджер',
    'phone' => 'ххх-ххх-ххх',
    'email' => 'ххххх@mail.com',
    'site' => 'www.xxxxxx.kz',
    'socials' => [
        ['icon' => '/assets/img/icons/socials/inst.svg', 'link' => '#'],
        ['icon' => '/assets/img/icons/socials/wa.svg', 'link' => '#'],
        ['icon' => '/assets/img/icons/socials/facebook.svg', 'link' => '#'],
    ]
];

$reviews = [
    ['type' => 'text', 'photo' => '/assets/img/reviews-1.png', 'name' => 'Антон Мартынов', 'text' => '“Мы проводили в Grand Conference Hall конференцию для партнёров и сотрудников на 200 человек. С самого начала команда площадки проявила себя профессионально: помогли с рассадкой, подготовили всю технику и организовали обслуживание на высшем уровне.”'],
    ['type' => 'video', 'photo' => '/assets/img/reviews-2.png', 'name' => 'Мария Василиса', 'preview' => '/assets/img/reviews-preview.png', 'video' => '/assets/video/footer-video.mp4'],
    ['type' => 'text', 'photo' => '/assets/img/reviews-1.png', 'name' => 'Антон Мартынов', 'text' => '“Мы проводили в Grand Conference Hall конференцию для партнёров и сотрудников на 200 человек. С самого начала команда площадки проявила себя профессионально: помогли с рассадкой, подготовили всю технику и организовали обслуживание на высшем уровне.”'],
    ['type' => 'text', 'photo' => '/assets/img/reviews-1.png', 'name' => 'Антон Мартынов', 'text' => '“Мы проводили в Grand Conference Hall конференцию для партнёров и сотрудников на 200 человек. С самого начала команда площадки проявила себя профессионально: помогли с рассадкой, подготовили всю технику и организовали обслуживание на высшем уровне.”'],
    ['type' => 'video', 'photo' => '/assets/img/reviews-2.png', 'name' => 'Мария Василиса', 'preview' => '/assets/img/reviews-preview.png', 'video' => '/assets/video/footer-video.mp4'],
    ['type' => 'text', 'photo' => '/assets/img/reviews-1.png', 'name' => 'Антон Мартынов', 'text' => '“Мы проводили в Grand Conference Hall конференцию для партнёров и сотрудников на 200 человек. С самого начала команда площадки проявила себя профессионально: помогли с рассадкой, подготовили всю технику и организовали обслуживание на высшем уровне.”'],
    ['type' => 'video', 'photo' => '/assets/img/reviews-2.png', 'name' => 'Мария Василиса', 'preview' => '/assets/img/reviews-preview.png', 'video' => '/assets/video/footer-video.mp4'],
    ['type' => 'text', 'photo' => '/assets/img/reviews-1.png', 'name' => 'Антон Мартынов', 'text' => '“Мы проводили в Grand Conference Hall конференцию для партнёров и сотрудников на 200 человек. С самого начала команда площадки проявила себя профессионально: помогли с рассадкой, подготовили всю технику и организовали обслуживание на высшем уровне.”'],
    ['type' => 'video', 'photo' => '/assets/img/reviews-2.png', 'name' => 'Мария Василиса', 'preview' => '/assets/img/reviews-preview.png', 'video' => '/assets/video/footer-video.mp4'],
];
?>
<section class="request-top-section contractor-top-section">
    <div class="container">
        <div class="request-top">
            <div class="contractor-top-title">
                <h1 class="request-title section-title"><?= $contractor['title'] ?></h1>
                <div class="contractor-top-title__rating">4,9</div>
            </div>
            <div class="contractor-top-type"><?= $contractor['type'] ?></div>
        </div>
        <div class="request-image-slider swiper">
            <div class="swiper-wrapper">
                <?php foreach ($contractor['images'] as $image): ?>
                    <div class="swiper-slide"><img src="<?= $image ?>" alt=""></div>
                <?php endforeach; ?>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
</section>

<section class="request-content-section slider-wrapper">
    <div class="container">
        <div class="request-content">
            <div class="request-info">
                <div class="request-info-section">
                    <div class="request-info-section__title">Основная информация</div>
                    <div class="request-info-section__content">
                        <table class="request-info-main">
                            <tr>
                                <td>Район:</td>
                                <td><?= $contractor['district']; ?></td>
                            </tr>
                            <tr>
                                <td>Вместимость:</td>
                                <td><?= $contractor['capacity']; ?></td>
                            </tr>
                            <tr>
                                <td>Техника:</td>
                                <td><?= $contractor['tech']; ?></td>
                            </tr>
                            <tr>
                                <td>Уровень:</td>
                                <td><?= $contractor['level']; ?></td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="request-info-section">
                    <div class="request-info-section__title">Описание</div>
                    <div class="request-info-section__content">
                        <?= $contractor['description']; ?>
                    </div>
                </div>
                <div class="request-info-section">
                    <div class="request-info-section__title">В наличии</div>
                    <div class="request-info-section__content">
                        <div class="tags request-need-tags">
                            <?php foreach ($contractor['has'] as $tag) : ?>
                                <div class="tag request-need-tag"><?= $tag ?></div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
                <div class="request-info-section">
                    <div class="request-info-section__title">Дополнительная информация</div>
                    <div class="request-info-section__content request-additional">
                        <a href="#" class="btn btn-secondary btn--narrow">Скачать бриф</a>
                        <a href="#" class="btn btn-secondary btn--narrow">План зала</a>
                    </div>
                </div>
                <div class="request-info-section request-info-map">
                    <div class="request-info-section__title">
                        <div>Карта</div>
                    </div>
                    <div class="request-info-section__content">
                        <div class="request-info-map__map" data-data="<?= htmlspecialchars(json_encode(['coords' => $contractor['coords']])) ?>"></div>
                    </div>
                </div>
            </div>
            <div class="request-side">
                <div class="request-side-tags tags">
                    <?php foreach ($contractor['tags'] as $tag) : ?>
                        <div class="tag request-side-tag"><?= $tag ?></div>
                    <?php endforeach; ?>
                </div>
                <div class="request-side-client">
                    <div class="request-side-client-inner">
                        <div class="request-side-client__image"><img src="<?= $client['photo']; ?>" alt=""></div>
                        <div class="request-side-client__content">
                            <div class="request-side-client__name"><?= $client['name'] ?></div>
                            <div class="request-side-client__contact contractor-side-client__contact">
                                <img src="/assets/img/icons/user.svg" alt="">
                                <span><?= $client['position'] ?></span>
                            </div>
                            <a href="tel:<?= $client['phone'] ?>"
                               class="request-side-client__contact contractor-side-client__contact">
                                <img src="/assets/img/icons/call.svg" alt="">
                                <span><?= $client['phone'] ?></span>
                            </a>
                            <a href="mailto:<?= $client['email'] ?>"
                               class="request-side-client__contact contractor-side-client__contact">
                                <img src="/assets/img/icons/sms.svg" alt="">
                                <span><?= $client['email'] ?></span>
                            </a>
                        </div>
                    </div>
                    <a href="#" class="btn btn-secondary">Показать информацию</a>
                </div>
            </div>
        </div>

        <!-- TODO: возможно сделать "дымку" по бокам для широких экранов -->
        <div class="reviews">
            <div class="reviews-top">
                <h3 class="request-info-section__title">Отзывы</h3>
                <div class="reviews-buttons reviews-buttons--desktop">
                    <button class="reviews-button reviews-button--prev">
                        <img src="/assets/img/icons/light/chevron-left.svg" alt="">
                    </button>
                    <button class="reviews-button reviews-button--next">
                        <img src="/assets/img/icons/light/chevron-right.svg" alt="">
                    </button>
                </div>
            </div>
            <div class="reviews-slider swiper">
                <div class="swiper-wrapper">
                    <?php foreach ($reviews as $i => $card): ?>
                        <div class="swiper-slide">
                            <div class="review-card<?= ($card['type'] == 'video') ? ' review-card--video' : '' ?>">
                                <div class="review-card-top">
                                    <div class="review-card__photo">
                                        <img src="<?= $card['photo'] ?>" alt="">
                                    </div>
                                    <div class="review-card__name"><?= $card['name'] ?></div>
                                </div>
                                <?php if ($card['type'] == 'video'): ?>
                                    <a href="<?= $card['video'] ?>" data-fancybox="review-<?= $i ?>>"
                                       class="review-card__video">
                                        <img src="<?= $card['preview'] ?>" alt="">
                                    </a>
                                <?php else: ?>
                                    <div class="review-card-text"><?= $card['text'] ?></div>
                                <?php endif; ?>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
        <div class="contractor-contacts-wrapper">
            <div class="request-info-section__title">Связаться с клиентом</div>
            <div class="contractor-contacts">
                <div class="contractor-contacts__image">
                    <img src="<?= $client['photo'] ?>" alt="">
                </div>
                <div class="contractor-contacts-text">
                    <div class="contractor-contacts__name"><?= $client['name'] ?></div>
                    <div class="contractor-contacts__contact">
                        <img src="/assets/img/icons/user.svg" alt="">
                        <span><?= $client['position'] ?></span>
                    </div>
                    <a href="tel:<?= $client['phone'] ?>" class="contractor-contacts__contact">
                        <img src="/assets/img/icons/call.svg" alt="">
                        <span><?= $client['phone'] ?></span>
                    </a>
                    <a href="mailto:<?= $client['email'] ?>" class="contractor-contacts__contact">
                        <img src="/assets/img/icons/sms.svg" alt="">
                        <span><?= $client['email'] ?></span>
                    </a>
                    <a href="<?= $client['site'] ?>" class="contractor-contacts__contact">
                        <img src="/assets/img/icons/global.svg" alt="">
                        <span><?= $client['site'] ?></span>
                    </a>
                    <div class="contractor-contacts-socials-title">Социальные сети</div>
                    <div class="contractor-contacts-socials">
                        <?php foreach ($client['socials'] as $social): ?>
                            <a href="<?= $social['link'] ?>"><img src="<?= $social['icon']; ?>" alt=""></a>
                        <?php endforeach; ?>
                    </div>
                    <a href="#" class="contractor-contacts__link">Показать информацию</a>
                </div>
            </div>
        </div>
    </div>
</section>


<?php include VIEW_PATH . 'sections/more-requests.php'; ?>

<!-- TODO: для карты -->
<script src="https://api-maps.yandex.ru/v3/?apikey=2d1ba930-83e2-4cb7-91d4-6b9f44288f74&lang=ru_RU"></script>
