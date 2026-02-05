<?php
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

<?php
$show_map = true;
include VIEW_PATH.'sections/filter-section.php';
?>

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
</section>