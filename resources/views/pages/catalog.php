<?php
$show_type = $_GET['show'] ?? 'grid';

$tags = [
    ['id' => 1, 'name' => 'Достопримечательности и культурное наследие'],
    ['id' => 2, 'name' => 'Питание и кейтеринг'],
    ['id' => 3, 'name' => 'Размещение'],
    ['id' => 4, 'name' => 'MICE‑площадки и инфраструктура событий'],
    ['id' => 5, 'name' => 'Активности, развлечения и оздоровление'],
    ['id' => 6, 'name' => 'Транспорт и логистика'],
    ['id' => 7, 'name' => 'Профессиональные услуги и партнёрская экосистема'],
];

$filters = [
    [
        'name' => 'h-objects', 'label' => 'Исторические объекты',
        'items' => ['Памятники', 'Места исторических событий', 'Архитектурные ансамбли',]
    ],
    [
        'name' => 'k-objects', 'label' => 'Культурные учреждения',
        'items' => ['Театры', 'Музеи', 'Галереи', 'Концертные залы', 'Библиотеки',]
    ],
    [
        'name' => 'a-objects', 'label' => 'Архитектура и религиозные сооружения',
        'items' => ['Культовые храмы', 'Мечети', 'Соборы', 'Знаковые здания',]
    ],
    [
        'name' => 'p-objects', 'label' => 'Природные объекты',
        'items' => ['Горы', 'Ущелья', 'Озёра', 'Водопады', 'Парки', 'Эко‑тропы',]
    ],
];

$contractors = [
    ['title' => 'Grand Conference Hall', 'description' => 'Идеально подходит для крупных конференций и форумов, оснащён сценой, профессиональной техникой и просторной парковкой.', 'link' => '/catalog/single', 'tags' => ['Бостандыкский', 'Техника: полный комплект', '+3',], 'image' => '/assets/img/catalog/card.png'],
    ['title' => 'Urban Loft Hall', 'description' => 'Идеально подходит для крупных конференций и форумов, оснащён сценой, профессиональной техникой и просторной парковкой.', 'link' => '/catalog/single', 'tags' => ['Бостандыкский', 'Уровень: базовый',], 'image' => '/assets/img/catalog/card.png'],
    ['title' => 'Event Space 24', 'description' => 'Идеально подходит для крупных конференций и форумов, оснащён сценой, профессиональной техникой и просторной парковкой.', 'link' => '/catalog/single', 'tags' => ['Бостандыкский', 'Сцена: есть', 'Уровень: премиум',], 'image' => '/assets/img/catalog/card.png'],
    ['title' => 'Hotel Alma Conference Center', 'description' => 'Идеально подходит для крупных конференций и форумов, оснащён сценой, профессиональной техникой и просторной парковкой.', 'link' => '/catalog/single', 'tags' => ['Бостандыкский',], 'image' => '/assets/img/catalog/card.png'],
    ['title' => 'TechnoPark Event Room', 'description' => 'Идеально подходит для крупных конференций и форумов, оснащён сценой, профессиональной техникой и просторной парковкой.', 'link' => '/catalog/single', 'tags' => ['Бостандыкский',], 'image' => '/assets/img/catalog/card.png'],
    ['title' => 'Skyline Banquet Hall', 'description' => 'Идеально подходит для крупных конференций и форумов, оснащён сценой, профессиональной техникой и просторной парковкой.', 'link' => '/catalog/single', 'tags' => ['Бостандыкский',], 'image' => '/assets/img/catalog/card.png'],
    ['title' => 'Cultural Center Alatau', 'description' => 'Идеально подходит для крупных конференций и форумов, оснащён сценой, профессиональной техникой и просторной парковкой.', 'link' => '/catalog/single', 'tags' => ['Бостандыкский',], 'image' => '/assets/img/catalog/card.png'],
    ['title' => 'Business Hub Meeting Room', 'description' => 'Идеально подходит для крупных конференций и форумов, оснащён сценой, профессиональной техникой и просторной парковкой.', 'link' => '/catalog/single', 'tags' => ['Бостандыкский',], 'image' => '/assets/img/catalog/card.png'],
    ['title' => 'Green Park Hall', 'description' => 'Идеально подходит для крупных конференций и форумов, оснащён сценой, профессиональной техникой и просторной парковкой.', 'link' => '/catalog/single', 'tags' => ['Бостандыкский',], 'image' => '/assets/img/catalog/card.png'],
    ['title' => 'Premium Palace Hall', 'description' => 'Идеально подходит для крупных конференций и форумов, оснащён сценой, профессиональной техникой и просторной парковкой.', 'link' => '/catalog/single', 'tags' => ['Бостандыкский',], 'image' => '/assets/img/catalog/card.png'],
]
?>
<section class="catalog-first-section">
    <div class="container">
        <div class="section-title section-title--center">Каталог</div>
        <div class="catalog-tags">
            <?php foreach ($tags as $tag): ?>
                <a href="#" class="btn btn-secondary catalog-tag"><?= $tag['name'] ?></a>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section class="filters-section catalog-filters-section">
    <div class="container">
        <form action="" class="filters-wrapper">
            <div class="filters-top">
                <div class="filters-toggle-wrap">
                    <button type="button" class="filters-toggle">
                        <span>Фильтры</span>
                        <svg width="24" height="24">
                            <use xlink:href="/assets/img/icons/filters.svg#filters"/>
                        </svg>
                    </button>
                </div>
                <div class="filters-show-types">
                    <button type="submit" class="filters-show-type<?= $show_type == 'grid' ? ' active' : ''; ?>"
                            name="show"
                            value="grid">
                        <svg width="24" height="24">
                            <use xlink:href="/assets/img/icons/filters.svg#grid"/>
                        </svg>
                    </button>
                    <button type="submit" class="filters-show-type<?= $show_type == 'list' ? ' active' : ''; ?>"
                            name="show"
                            value="list">
                        <svg width="24" height="24">
                            <use xlink:href="/assets/img/icons/filters.svg#row-vertical"/>
                        </svg>
                    </button>
                    <button type="submit" class="filters-show-type<?= $show_type == 'map' ? ' active' : ''; ?>"
                            name="show"
                            value="map">
                        <svg width="24" height="24">
                            <use xlink:href="/assets/img/icons/filters.svg#map"/>
                        </svg>
                    </button>
                </div>
            </div>
            <div class="filters-inner">
                <div class="filters-items">
                    <?php foreach ($filters as $filter): ?>
                        <div class="filters-col">
                            <div class="filters-col__title"><?= $filter['label'] ?></div>
                            <div class="filters-col__list">
                                <?php foreach ($filter['items'] as $item): ?>
                                    <label class="checkbox-label checkbox-label--light">
                                        <input type="checkbox" name="filters[<?= $filter['name'] ?>][]"
                                               value="<?= $item ?>">
                                        <span class="checkbox-label__check"></span>
                                        <span><?= $item ?></span>
                                    </label>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
                <div class="filters-buttons">
                    <button type="button" class="btn btn-secondary btn-secondary--white filters-reset">Сбросить</button>
                    <button type="button" class="btn btn-primary filters-submit">Применить</button>
                </div>
            </div>
        </form>
    </div>
</section>
<section class="contractors-section">
    <div class="container">
        <div class="contractors-grid">
            <?php foreach ($contractors as $contractor): ?>
                <a href="<?= $contractor['link']; ?>" class="contractor-card">
                    <div class="contractor-card-background">
                        <img src="<?= $contractor['image']; ?>" alt="">
                    </div>
                    <div class="contractor-card__tags tags">
                        <?php foreach ($contractor['tags'] as $tag): ?>
                            <div class="tag blur-tag"><?= $tag ?></div>
                        <?php endforeach; ?>
                    </div>
                    <div class="contractor-card-info">
                        <div class="contractor-card-info__text">
                            <div class="contractor-card__title"><?= $contractor['title']; ?></div>
                            <div class="contractor-card__description"><?= $contractor['description']; ?></div>
                        </div>
                        <div class="contractor-card__arrow">
                            <img src="/assets/img/icons/light/arrow-up-right.svg" alt="" />
                        </div>
                    </div>
                </a>
            <?php endforeach; ?>
        </div>
    </div>
</section>