<?php
$request = [
    'title' => 'Конференция на 120 человек',
    'date' => '5 ноября 2025',
    'datetime' => '2025-11-05',
    'image' => '/assets/img/request/main.png',

    'type' => 'Конференция',
    'dates' => '15–16 ноября 2025',
    'members' => '120',
    'description' => 'Компания ищет современный зал в центре Алматы с полным техническим оснащением и кейтерингом. Важно, чтобы помещение подходило для двухдневной конференции и имело удобный доступ к транспорту.',

    'need' => ['Площадка с рассадкой «театр»', 'Сцена, проектор, звуковое оборудование', 'Кофе-брейк на 120 человек', 'Переводчик RU/EN',],

    'tags' => ['Кейтеринг и питание', 'Конференция', 'Переводчик', '+100 человек', 'Техническое оборудование',],
];

$client = [
    'photo' => '/assets/img/request/client.png',
    'name' => 'Сергей Александр',
    'phone' => 'ххх-ххх-ххх',
    'email' => 'ххххх@mail.com',
];

$more_requests = [
    ['link' => '/request', 'title' => 'Гастрономический фестиваль', 'tags' => ['Кейтеринг и питание'], 'date' => '5 ноября 2025', 'image' => '/assets/img/request/main.png'],
    ['link' => '/request', 'title' => 'Тимбилдинг на природе', 'tags' => ['Переводчик'], 'date' => '10 июля 2025', 'image' => '/assets/img/request/main.png'],
    ['link' => '/request', 'title' => 'Корпоративный банкет для банка', 'tags' => ['+100 человек'], 'date' => '29 сентября 2025', 'image' => '/assets/img/request/main.png'],
    ['link' => '/request', 'title' => 'Презентация нового продукта', 'tags' => ['Техническое оборудование'], 'date' => '5 ноября 2025', 'image' => '/assets/img/request/main.png'],
    ['link' => '/request', 'title' => 'Гастрономический фестиваль', 'tags' => ['Кейтеринг и питание'], 'date' => '5 ноября 2025', 'image' => '/assets/img/request/main.png'],
    ['link' => '/request', 'title' => 'Тимбилдинг на природе', 'tags' => ['Переводчик'], 'date' => '10 июля 2025', 'image' => '/assets/img/request/main.png'],
    ['link' => '/request', 'title' => 'Корпоративный банкет для банка', 'tags' => ['+100 человек'], 'date' => '29 сентября 2025', 'image' => '/assets/img/request/main.png'],
    ['link' => '/request', 'title' => 'Презентация нового продукта', 'tags' => ['Техническое оборудование'], 'date' => '5 ноября 2025', 'image' => '/assets/img/request/main.png'],
];
?>
<section class="request-top-section">
    <div class="container">
        <div class="request-top">
            <h1 class="request-title section-title"><?= $request['title'] ?></h1>
            <div class="request-top__date">
                <b>Дата публикации:</b>
                <time datetime="<?= $request['datetime'] ?>"><?= $request['date'] ?></time>
            </div>
        </div>
        <img class="request-image" src="<?= $request['image'] ?>" alt=""/>
    </div>
</section>

<section class="request-content-section">
    <div class="container">
        <div class="request-content">
            <div class="request-info">
                <div class="request-info-section">
                    <div class="request-info-section__title">Основная информация</div>
                    <div class="request-info-section__content">
                        <table class="request-info-main">
                            <tr>
                                <td>Тип события:</td>
                                <td><?= $request['type']; ?></td>
                            </tr>
                            <tr>
                                <td>Даты:</td>
                                <td><?= $request['dates']; ?></td>
                            </tr>
                            <tr>
                                <td>Количество участников:</td>
                                <td><?= $request['members']; ?></td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="request-info-section">
                    <div class="request-info-section__title">Описание</div>
                    <div class="request-info-section__content">
                        <?= $request['description']; ?>
                    </div>
                </div>
                <div class="request-info-section">
                    <div class="request-info-section__title">Что требуется</div>
                    <div class="request-info-section__content">
                        <div class="tags request-need-tags">
                            <?php foreach ($request['need'] as $tag) : ?>
                                <div class="tag request-need-tag"><?= $tag ?></div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
                <div class="request-info-section">
                    <div class="request-info-section__title">Дополнительная информация</div>
                    <div class="request-info-section__content request-additional">
                        <a href="#" class="btn btn-secondary btn--narrow">Список участников</a>
                        <a href="#" class="btn btn-secondary btn--narrow">Скачать бриф</a>
                    </div>
                </div>
                <div class="request-info-section request-info-map">
                    <div class="request-info-section__title">
                        <div>Карта</div>
                        <div class="request-info-map__district">
                            <b>Желаемый район:</b>
                            <span>Ауэзовский район</span>
                        </div>
                    </div>
                    <div class="request-info-section__content">
                        <!-- TODO: map -->
                        <div class="request-info-map__map"></div>
                    </div>
                </div>
                <div class="request-info-section">
                    <div class="request-info-section__title">Связаться с клиентом</div>
                    <div class="request-info-section__content">
                        <div class="request-info-client">
                            <div class="request-info-client__image"><img src="<?= $client['photo'] ?>" alt=""></div>
                            <div class="request-info-client__content">
                                <div class="request-info-client__name"><?= $client['name'] ?></div>
                                <div class="request-info-client__contact">
                                    <a href="tel:<?= $client['phone'] ?>">
                                        <img src="/assets/img/icons/call.svg" alt="">
                                        <span><?= $client['phone']; ?></span>
                                    </a>
                                </div>
                                <div class="request-info-client__contact">
                                    <a href="mailto:<?= $client['email']; ?>">
                                        <img src="/assets/img/icons/sms.svg" alt="">
                                        <span><?= $client['email']; ?></span>
                                    </a>
                                </div>
                            </div>
                            <div class="request-info-client__more">
                                <a href="#">Показать информацию</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="request-side">
                <div class="request-side-tags tags">
                    <?php foreach ($request['tags'] as $tag) : ?>
                        <div class="tag request-side-tag"><?= $tag ?></div>
                    <?php endforeach; ?>
                </div>
                <div class="request-side-client">
                    <div class="request-side-client-inner">
                        <div class="request-side-client__image"><img src="<?= $client['photo']; ?>" alt=""></div>
                        <div class="request-side-client__content">
                            <div class="request-side-client__name"><?= $client['name'] ?></div>
                            <div class="request-side-client__contact">
                                <a href="tel:<?= $client['phone'] ?>">
                                    <img src="/assets/img/icons/call.svg" alt="">
                                    <span><?= $client['phone'] ?></span>
                                </a>
                            </div>
                            <div class="request-side-client__contact">
                                <a href="mailto:<?= $client['email'] ?>">
                                    <img src="/assets/img/icons/sms.svg" alt="">
                                    <span><?= $client['email'] ?></span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <a href="#" class="btn btn-secondary">Показать информацию</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="more-requests-section more-requests slider-wrapper">
    <div class="container">
        <div class="more-requests-top">
            <h3 class="section-title">Похожие объявления</h3>
            <div class="more-requests-buttons more-requests-buttons--desktop">
                <button class="more-requests-button more-requests-button--prev">
                    <img src="/assets/img/icons/chevron-left.svg" alt="">
                </button>
                <button class="more-requests-button more-requests-button--next">
                    <img src="/assets/img/icons/chevron-right.svg" alt="">
                </button>
            </div>
        </div>
        <div class="more-requests-slider swiper">
            <div class="swiper-wrapper">
                <?php foreach ($more_requests as $card): ?>
                    <div class="swiper-slide">
                        <a href="<?= $card['link'] ?>" class="more-request-card">
                            <div class="more-request-card-top">
                                <?php foreach ($card['tags'] as $tag) : ?>
                                    <div class="more-request-card-tag"><?= $tag ?></div>
                                <?php endforeach; ?>
                            </div>
                            <div class="more-request-card__image">
                                <img src="<?= $card['image'] ?>" alt="">
                            </div>
                            <div class="more-request-card__content">
                                <div class="more-request-card__title"><?= $card['title'] ?></div>
                                <div class="more-request-card__date">
                                    <b>Дата публикации:</b><br/>
                                    <?= $card['date'] ?>
                                </div>
                            </div>
                        </a>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
        <div class="more-requests-buttons more-requests-buttons--mobile">
            <button class="more-requests-button more-requests-button--prev">
                <img src="/assets/img/icons/chevron-left.svg" alt="">
            </button>
            <button class="more-requests-button more-requests-button--next">
                <img src="/assets/img/icons/chevron-right.svg" alt="">
            </button>
        </div>
    </div>
</section>