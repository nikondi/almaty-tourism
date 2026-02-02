<?php
$tags = ['Гиды и Туроператоры', 'Кейтеринг и питание', 'Оборудование и техника', 'Ведущие и артисты', 'Переводчики', 'Транспорт и логистика', 'Декор и оформление',];

$stories = [
    ['title' => 'Тимбилдинг на природе', 'description' => 'Выездное мероприятие для 80 сотрудников с транспортом, активностями и фуршетом.', 'img' => '/assets/img/welcome/stories/2.jpg', 'link' => '#'],
    ['title' => 'Конференция для IT-компании', 'description' => 'Выездное мероприятие для 80 сотрудников с транспортом, активностями и фуршетом.', 'img' => '/assets/img/welcome/stories/1.jpg', 'link' => '#'],
    ['title' => 'Презентация нового продукта', 'description' => 'Выездное мероприятие для 80 сотрудников с транспортом, активностями и фуршетом.', 'img' => '/assets/img/welcome/stories/3.jpg', 'link' => '#'],
    ['title' => 'Международная конференция по энергетике', 'description' => 'Выездное мероприятие для 80 сотрудников с транспортом, активностями и фуршетом.', 'img' => '/assets/img/welcome/stories/4.jpg', 'link' => '#'],
    ['title' => 'Корпоративный банкет для банка', 'description' => 'Выездное мероприятие для 80 сотрудников с транспортом, активностями и фуршетом.', 'img' => '/assets/img/welcome/stories/5.jpg', 'link' => '#'],
    ['title' => 'Гастрономический фестиваль', 'description' => 'Выездное мероприятие для 80 сотрудников с транспортом, активностями и фуршетом.', 'img' => '/assets/img/welcome/stories/6.jpg', 'link' => '#'],
    ['title' => 'Культурный вечер для делегации', 'description' => 'Программа с гидами, переводчиками, ужином в национальном стиле и выступлениями артистов.', 'img' => '/assets/img/welcome/stories/7.jpg', 'link' => '#'],
    ['title' => 'Тренинг для сотрудников холдинга', 'description' => 'Выездное мероприятие для 80 сотрудников с транспортом, активностями и фуршетом.', 'img' => '/assets/img/welcome/stories/8.jpg', 'link' => '#'],
    ['title' => 'Международный медицинский форум', 'description' => 'Выездное мероприятие для 80 сотрудников с транспортом, активностями и фуршетом.', 'img' => '/assets/img/welcome/stories/9.jpg', 'link' => '#'],
    ['title' => 'Конференция для IT-компании', 'description' => 'Выездное мероприятие для 80 сотрудников с транспортом, активностями и фуршетом.', 'img' => '/assets/img/welcome/stories/1.jpg', 'link' => '#'],
    ['title' => 'Тимбилдинг на природе', 'description' => 'Выездное мероприятие для 80 сотрудников с транспортом, активностями и фуршетом.', 'img' => '/assets/img/welcome/stories/2.jpg', 'link' => '#'],
    ['title' => 'Презентация нового продукта', 'description' => 'Выездное мероприятие для 80 сотрудников с транспортом, активностями и фуршетом.', 'img' => '/assets/img/welcome/stories/3.jpg', 'link' => '#'],
    ['title' => 'Международная конференция по энергетике', 'description' => 'Выездное мероприятие для 80 сотрудников с транспортом, активностями и фуршетом.', 'img' => '/assets/img/welcome/stories/4.jpg', 'link' => '#'],
    ['title' => 'Корпоративный банкет для банка', 'description' => 'Выездное мероприятие для 80 сотрудников с транспортом, активностями и фуршетом.', 'img' => '/assets/img/welcome/stories/5.jpg', 'link' => '#'],
    ['title' => 'Гастрономический фестиваль', 'description' => 'Выездное мероприятие для 80 сотрудников с транспортом, активностями и фуршетом.', 'img' => '/assets/img/welcome/stories/6.jpg', 'link' => '#'],
    ['title' => 'Культурный вечер для делегации', 'description' => 'Программа с гидами, переводчиками, ужином в национальном стиле и выступлениями артистов.', 'img' => '/assets/img/welcome/stories/7.jpg', 'link' => '#'],
    ['title' => 'Тренинг для сотрудников холдинга', 'description' => 'Выездное мероприятие для 80 сотрудников с транспортом, активностями и фуршетом.', 'img' => '/assets/img/welcome/stories/8.jpg', 'link' => '#'],
    ['title' => 'Международный медицинский форум', 'description' => 'Выездное мероприятие для 80 сотрудников с транспортом, активностями и фуршетом.', 'img' => '/assets/img/welcome/stories/9.jpg', 'link' => '#'],
];
?>
<section class="stories-index-section">
    <div class="container">
        <h1 class="section-title section-title--center">Истории успеха</h1>
        <div class="tags stories-index-tags">
            <?php foreach ($tags as $tag): ?>
                <a href="#" class="tag"><?= $tag ?></a>
            <?php endforeach; ?>
        </div>
        <div class="stories-grid">
            <?php foreach ($stories as $card): ?>
                <?php include VIEW_PATH . 'components/story-card.php'; ?>
            <?php endforeach; ?>
        </div>
        <div class="stories-button">
            <a href="/stories" class="btn btn-secondary">
                <span>Смотреть все</span>
                <img src="/assets/img/icons/arrow-right.svg" alt="" class="btn-icon">
            </a>
        </div>
    </div>
</section>