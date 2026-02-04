<section class="welcome-stories-section">
    <div class="container">
        <h2 class="section-title">Истории успеха</h2>
        <div class="welcome-stories-tags tags">
            <?php
            $tags = [
                ['name' => 'Гиды и Туроператоры', 'link' => '#'],
                ['name' => 'Кейтеринг и питание', 'link' => '#'],
                ['name' => 'Оборудование и техника', 'link' => '#'],
                ['name' => 'Ведущие и артисты', 'link' => '#'],
                ['name' => 'Переводчики', 'link' => '#'],
                ['name' => 'Транспорт и логистика', 'link' => '#'],
                ['name' => 'Декор и оформление', 'link' => '#'],
            ];
            foreach ($tags as $tag): ?>
                <a href="<?= $tag['link'] ?>" class="tag"><?= $tag['name'] ?></a>
            <?php endforeach; ?>
        </div>
        <div class="welcome-stories-grid stories-grid">
            <?php
            $stories = [
                ['title' => 'Конференция для IT-компании', 'description' => '', 'img' => '/assets/img/welcome/stories/1.jpg', 'link' => '/story'],
                ['title' => 'Тимбилдинг на природе', 'description' => 'Выездное мероприятие для 80 сотрудников с транспортом, активностями и фуршетом.', 'img' => '/assets/img/welcome/stories/2.jpg', 'link' => '/story'],
                ['title' => 'Презентация нового продукта', 'description' => '', 'img' => '/assets/img/welcome/stories/3.jpg', 'link' => '/story'],
                ['title' => 'Международная конференция по энергетике', 'description' => '', 'img' => '/assets/img/welcome/stories/4.jpg', 'link' => '/story'],
                ['title' => 'Корпоративный банкет для банка', 'description' => '', 'img' => '/assets/img/welcome/stories/5.jpg', 'link' => '/story'],
                ['title' => 'Гастрономический фестиваль', 'description' => '', 'img' => '/assets/img/welcome/stories/6.jpg', 'link' => '/story'],
                ['title' => 'Культурный вечер для делегации', 'description' => 'Программа с гидами, переводчиками, ужином в национальном стиле и выступлениями артистов.', 'img' => '/assets/img/welcome/stories/7.jpg', 'link' => '/story'],
                ['title' => 'Тренинг для сотрудников холдинга', 'description' => '', 'img' => '/assets/img/welcome/stories/8.jpg', 'link' => '/story'],
                ['title' => 'Международный медицинский форум', 'description' => '', 'img' => '/assets/img/welcome/stories/9.jpg', 'link' => '/story'],
            ];
            foreach ($stories as $card): ?>
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
