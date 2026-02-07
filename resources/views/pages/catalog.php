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

$contractors = [
    ['title' => 'Grand Conference Hall', 'description' => 'Идеально подходит для крупных конференций и форумов, оснащён сценой, профессиональной техникой и просторной парковкой.', 'link' => '/catalog/single', 'tags' => ['Бостандыкский', 'Техника: полный комплект', 'Тест',], 'short' => 'Идеально подходит для крупных конференций и форумов, оснащён сценой, профессиональной техникой и просторной парковкой.', 'image' => '/assets/img/catalog/card.png'],
    ['title' => 'Urban Loft Hall', 'description' => 'Идеально подходит для крупных конференций и форумов, оснащён сценой, профессиональной техникой и просторной парковкой.', 'link' => '/catalog/single', 'tags' => ['Бостандыкский', 'Техника: полный комплект', 'Тест',], 'short' => 'Идеально подходит для крупных конференций и форумов, оснащён сценой, профессиональной техникой и просторной парковкой.', 'image' => '/assets/img/catalog/card.png'],
    ['title' => 'Event Space 24', 'description' => 'Идеально подходит для крупных конференций и форумов, оснащён сценой, профессиональной техникой и просторной парковкой.', 'link' => '/catalog/single', 'tags' => ['Бостандыкский', 'Техника: полный комплект', 'Тест',], 'short' => 'Идеально подходит для крупных конференций и форумов, оснащён сценой, профессиональной техникой и просторной парковкой.', 'image' => '/assets/img/catalog/card.png'],
    ['title' => 'Hotel Alma Conference Center', 'description' => 'Идеально подходит для крупных конференций и форумов, оснащён сценой, профессиональной техникой и просторной парковкой.', 'link' => '/catalog/single', 'tags' => ['Бостандыкский', 'Техника: полный комплект', 'Тест',], 'short' => 'Идеально подходит для крупных конференций и форумов, оснащён сценой, профессиональной техникой и просторной парковкой.', 'image' => '/assets/img/catalog/card.png'],
    ['title' => 'TechnoPark Event Room', 'description' => 'Идеально подходит для крупных конференций и форумов, оснащён сценой, профессиональной техникой и просторной парковкой.', 'link' => '/catalog/single', 'tags' => ['Бостандыкский', 'Техника: полный комплект', 'Тест',], 'short' => 'Идеально подходит для крупных конференций и форумов, оснащён сценой, профессиональной техникой и просторной парковкой.', 'image' => '/assets/img/catalog/card.png'],
    ['title' => 'Skyline Banquet Hall', 'description' => 'Идеально подходит для крупных конференций и форумов, оснащён сценой, профессиональной техникой и просторной парковкой.', 'link' => '/catalog/single', 'tags' => ['Бостандыкский', 'Техника: полный комплект', 'Тест',], 'short' => 'Идеально подходит для крупных конференций и форумов, оснащён сценой, профессиональной техникой и просторной парковкой.', 'image' => '/assets/img/catalog/card.png'],
    ['title' => 'Cultural Center Alatau', 'description' => 'Идеально подходит для крупных конференций и форумов, оснащён сценой, профессиональной техникой и просторной парковкой.', 'link' => '/catalog/single', 'tags' => ['Бостандыкский', 'Техника: полный комплект', 'Тест',], 'short' => 'Идеально подходит для крупных конференций и форумов, оснащён сценой, профессиональной техникой и просторной парковкой.', 'image' => '/assets/img/catalog/card.png'],
    ['title' => 'Business Hub Meeting Room', 'description' => 'Идеально подходит для крупных конференций и форумов, оснащён сценой, профессиональной техникой и просторной парковкой.', 'link' => '/catalog/single', 'tags' => ['Бостандыкский', 'Техника: полный комплект', 'Тест',], 'short' => 'Идеально подходит для крупных конференций и форумов, оснащён сценой, профессиональной техникой и просторной парковкой.', 'image' => '/assets/img/catalog/card.png'],
    ['title' => 'Green Park Hall', 'description' => 'Идеально подходит для крупных конференций и форумов, оснащён сценой, профессиональной техникой и просторной парковкой.', 'link' => '/catalog/single', 'tags' => ['Бостандыкский', 'Техника: полный комплект', 'Тест',], 'short' => 'Идеально подходит для крупных конференций и форумов, оснащён сценой, профессиональной техникой и просторной парковкой.', 'image' => '/assets/img/catalog/card.png'],
    ['title' => 'Premium Palace Hall', 'description' => 'Идеально подходит для крупных конференций и форумов, оснащён сценой, профессиональной техникой и просторной парковкой.', 'link' => '/catalog/single', 'tags' => ['Бостандыкский', 'Техника: полный комплект', 'Тест',], 'short' => 'Идеально подходит для крупных конференций и форумов, оснащён сценой, профессиональной техникой и просторной парковкой.', 'image' => '/assets/img/catalog/card.png'],
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
            <div id="map-app" data-data="<?= htmlspecialchars(json_encode([
                'items' => $contractors
            ])) ?>"></div>
        </div>
    <?php endif; ?>

    <?php if ($show_type != 'map'): ?>
        <div class="container">
            <div class="requests-show-more">
                <button type="button" class="btn btn-secondary">Смотреть ещё</button>
            </div>

            <ul class="pagination requests-pagination">
                <li class="pagination-item active"><a href="#">1</a></li>
                <li class="pagination-item"><a href="#">2</a></li>
                <li class="pagination-item"><a href="#">3</a></li>
                <li class="pagination-item"><a href="#">4</a></li>
                <li class="pagination-item"><span>...</span></li>
                <li class="pagination-item"><a href="#">100</a></li>
            </ul>
        </div>
    <?php endif; ?>
</section>
<script src="https://api-maps.yandex.ru/v3/?apikey=2d1ba930-83e2-4cb7-91d4-6b9f44288f74&lang=ru_RU"></script>
