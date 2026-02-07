<?php
$show_type = $show_type ?? $_GET['show'] ?? 'grid';
$tags = [
    ['id' => 1, 'name' => 'Достопримечательности и культурное наследие'],
    ['id' => 2, 'name' => 'Питание и кейтеринг'],
    ['id' => 3, 'name' => 'Размещение'],
    ['id' => 4, 'name' => 'MICE‑площадки и инфраструктура событий'],
    ['id' => 5, 'name' => 'Активности, развлечения и оздоровление'],
    ['id' => 6, 'name' => 'Транспорт и логистика'],
    ['id' => 7, 'name' => 'Профессиональные услуги и партнёрская экосистема'],
];

// ! Единственное отличие здесь от всех карточек как заявок, так и подрядчиков - наличие координат и id
// При выводе карты выводить все предложения, подгрузку не делав((
$contractors = [
    ['id' => 1, 'coords' => [76.945645, 43.237163], 'title' => 'Grand Conference Hall', 'description' => 'Идеально подходит для крупных конференций и форумов, оснащён сценой, профессиональной техникой и просторной парковкой.', 'link' => '/catalog/single', 'tags' => ['Бостандыкский', 'Техника: полный комплект', 'Тест',], 'short' => 'Идеально подходит для крупных конференций и форумов, оснащён сценой, профессиональной техникой и просторной парковкой.', 'image' => '/assets/img/catalog/card.png'],
    ['id' => 2, 'coords' => [76.79011979248048, 43.23967308490353], 'title' => 'Urban Loft Hall', 'description' => 'Идеально подходит для крупных конференций и форумов, оснащён сценой, профессиональной техникой и просторной парковкой.', 'link' => '/catalog/single', 'tags' => ['Бостандыкский', 'Техника: полный комплект', 'Тест',], 'short' => 'Идеально подходит для крупных конференций и форумов, оснащён сценой, профессиональной техникой и просторной парковкой.', 'image' => '/assets/img/catalog/card.png'],
    ['id' => 3, 'coords' => [76.93706193115236, 43.27154210305923], 'title' => 'Event Space 24', 'description' => 'Идеально подходит для крупных конференций и форумов, оснащён сценой, профессиональной техникой и просторной парковкой.', 'link' => '/catalog/single', 'tags' => ['Бостандыкский', 'Техника: полный комплект', 'Тест',], 'short' => 'Идеально подходит для крупных конференций и форумов, оснащён сценой, профессиональной техникой и просторной парковкой.', 'image' => '/assets/img/catalog/card.png'],
    ['id' => 4, 'coords' => [76.87766709472658, 43.206782719525584], 'title' => 'Hotel Alma Conference Center', 'description' => 'Идеально подходит для крупных конференций и форумов, оснащён сценой, профессиональной техникой и просторной парковкой.', 'link' => '/catalog/single', 'tags' => ['Бостандыкский', 'Техника: полный комплект', 'Тест',], 'short' => 'Идеально подходит для крупных конференций и форумов, оснащён сценой, профессиональной техникой и просторной парковкой.', 'image' => '/assets/img/catalog/card.png'],
    ['id' => 5, 'coords' => [76.9339720263672, 43.25824447630928], 'title' => 'TechnoPark Event Room', 'description' => 'Идеально подходит для крупных конференций и форумов, оснащён сценой, профессиональной техникой и просторной парковкой.', 'link' => '/catalog/single', 'tags' => ['Бостандыкский', 'Техника: полный комплект', 'Тест',], 'short' => 'Идеально подходит для крупных конференций и форумов, оснащён сценой, профессиональной техникой и просторной парковкой.', 'image' => '/assets/img/catalog/card.png'],
    ['id' => 6, 'coords' => [76.83063187744142, 43.2825794197837], 'title' => 'Skyline Banquet Hall', 'description' => 'Идеально подходит для крупных конференций и форумов, оснащён сценой, профессиональной техникой и просторной парковкой.', 'link' => '/catalog/single', 'tags' => ['Бостандыкский', 'Техника: полный комплект', 'Тест',], 'short' => 'Идеально подходит для крупных конференций и форумов, оснащён сценой, профессиональной техникой и просторной парковкой.', 'image' => '/assets/img/catalog/card.png'],
    ['id' => 7, 'coords' => [76.85226121093751, 43.25422952354854], 'title' => 'Cultural Center Alatau', 'description' => 'Идеально подходит для крупных конференций и форумов, оснащён сценой, профессиональной техникой и просторной парковкой.', 'link' => '/catalog/single', 'tags' => ['Бостандыкский', 'Техника: полный комплект', 'Тест',], 'short' => 'Идеально подходит для крупных конференций и форумов, оснащён сценой, профессиональной техникой и просторной парковкой.', 'image' => '/assets/img/catalog/card.png'],
    ['id' => 8, 'coords' => [76.8563810839844, 43.2431870287794], 'title' => 'Business Hub Meeting Room', 'description' => 'Идеально подходит для крупных конференций и форумов, оснащён сценой, профессиональной техникой и просторной парковкой.', 'link' => '/catalog/single', 'tags' => ['Бостандыкский', 'Техника: полный комплект', 'Тест',], 'short' => 'Идеально подходит для крупных конференций и форумов, оснащён сценой, профессиональной техникой и просторной парковкой.', 'image' => '/assets/img/catalog/card.png'],
    ['id' => 9, 'coords' => [76.95491471435548, 43.3031435843025], 'title' => 'Green Park Hall', 'description' => 'Идеально подходит для крупных конференций и форумов, оснащён сценой, профессиональной техникой и просторной парковкой.', 'link' => '/catalog/single', 'tags' => ['Бостандыкский', 'Техника: полный комплект', 'Тест',], 'short' => 'Идеально подходит для крупных конференций и форумов, оснащён сценой, профессиональной техникой и просторной парковкой.', 'image' => '/assets/img/catalog/card.png'],
    ['id' => 10, 'coords' => [76.92504563476564, 43.245445884914076], 'title' => 'Premium Palace Hall', 'description' => 'Идеально подходит для крупных конференций и форумов, оснащён сценой, профессиональной техникой и просторной парковкой.', 'link' => '/catalog/single', 'tags' => ['Бостандыкский', 'Техника: полный комплект', 'Тест',], 'short' => 'Идеально подходит для крупных конференций и форумов, оснащён сценой, профессиональной техникой и просторной парковкой.', 'image' => '/assets/img/catalog/card.png'],
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

<?php
$show_map = true;
$url_prefix = '/catalog';
include VIEW_PATH . 'sections/filter-section.php';
?>

<section class="contractors-section">
    <?php if ($show_type == 'grid'): ?>
        <div class="container">
            <div class="requests-grid">
                <?php foreach ($contractors as $item): ?>
                    <?php include VIEW_PATH . 'components/request-card.php'; ?>
                <?php endforeach; ?>
            </div>
        </div>
    <?php elseif ($show_type == 'list'): ?>
        <div class="requests-list">
            <?php foreach ($contractors as $item): ?>
                <?php include VIEW_PATH . 'components/request-row.php'; ?>
            <?php endforeach; ?>
        </div>
    <?php elseif ($show_type == 'map'): ?>
        <div class="container">
            <div class="map-wrapper" data-data="<?= htmlspecialchars(json_encode([
                'items' => $contractors
            ])) ?>">
                <div class="map__map"></div>
                <div class="map-sidebar">

                </div>
            </div>
        </div>
        <template id="map-item">
            <div class="map-side-item">
                <div class="map-side-item-image"><img src="" alt=""></div>
                <div class="map-side-item-content">
                    <div class="tags"></div>
                    <a href="" class="map-side-item-title"></a>
                    <div class="map-side-item-description"></div>
                </div>
            </div>
        </template>
        <template id="map-popup">
            <div class="map-popup">
                <div class="map-popup-image"></div>
                <div class="map-popup-content">
                    <div class="map-popup-date tags"></div>
                    <a href="" class="map-popup-title"></a>
                    <div class="map-popup-description"></div>
                </div>
            </div>
        </template>
    <?php endif; ?>

    <?php if ($show_type != 'map'): ?>
        <div class="container">
            <?php include VIEW_PATH . 'components/pagination.php'; ?>
        </div>
    <?php endif; ?>
</section>

<!-- TODO: для карты -->
<script src="https://api-maps.yandex.ru/v3/?apikey=2d1ba930-83e2-4cb7-91d4-6b9f44288f74&lang=ru_RU"></script>
