<?php
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

<section class="more-requests-section more-requests slider-wrapper">
    <div class="container">
        <div class="more-requests-top">
            <h3 class="request-info-section__title">Похожие объявления</h3>
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