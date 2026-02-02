<section class="requests-list-section">
    <div class="container">
        <h1 class="section-title section-title--center">Заявки</h1>
    </div>
    <div class="requests-filters">
        <div class="container">
            <div class="requests-filters-wrapper">
                <button type="button" class="requests-filter-button">
                    <span>Фильтры</span>
                    <svg width="24" height="24">
                        <use xlink:href="/assets/img/icons/filters.svg#filters"/>
                    </svg>
                </button>
                <div class="requests-grid-types">
                    <button class="requests-grid-type active" data-type="default">
                        <svg width="24" height="24">
                            <use xlink:href="/assets/img/icons/filters.svg#grid"/>
                        </svg>
                    </button>
                    <button class="requests-grid-type" data-type="list">
                        <svg width="24" height="24">
                            <use xlink:href="/assets/img/icons/filters.svg#row-vertical"/>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="requests-grid">
            <?php
            $requests = [
                    ['tags' => ['Техническое оборудование', 'Техническое оборудование', '+2'], 'image' => '/assets/img/request.png', 'link' => '/request', 'title' => 'Корпоратив для IT-компании', 'description' => 'Хочу организовать новогодний корпоратив с ведущим и банкетом в уютной атмосфере для 100 гостей.'],
                    ['tags' => ['Техническое оборудование'], 'image' => '/assets/img/request.png', 'link' => '/request', 'title' => 'Корпоратив для IT-компании', 'description' => 'Хочу организовать новогодний корпоратив с ведущим и банкетом в уютной атмосфере для 100 гостей.'],
                    ['tags' => ['Техническое оборудование'], 'image' => '/assets/img/request.png', 'link' => '/request', 'title' => 'Корпоратив для IT-компании', 'description' => 'Хочу организовать новогодний корпоратив с ведущим и банкетом в уютной атмосфере для 100 гостей.'],
                    ['tags' => ['Техническое оборудование'], 'image' => '/assets/img/request.png', 'link' => '/request', 'title' => 'Корпоратив для IT-компании', 'description' => 'Хочу организовать новогодний корпоратив с ведущим и банкетом в уютной атмосфере для 100 гостей.'],
                    ['tags' => ['Техническое оборудование'], 'image' => '/assets/img/request.png', 'link' => '/request', 'title' => 'Корпоратив для IT-компании', 'description' => 'Хочу организовать новогодний корпоратив с ведущим и банкетом в уютной атмосфере для 100 гостей.'],
                    ['tags' => ['Техническое оборудование', '+4'], 'image' => '/assets/img/request.png', 'link' => '/request', 'title' => 'Корпоратив для IT-компании', 'description' => 'Хочу организовать новогодний корпоратив с ведущим и банкетом в уютной атмосфере для 100 гостей.'],
                    ['tags' => ['Техническое оборудование'], 'image' => '/assets/img/request.png', 'link' => '/request', 'title' => 'Корпоратив для IT-компании', 'description' => 'Хочу организовать новогодний корпоратив с ведущим и банкетом в уютной атмосфере для 100 гостей.'],
                    ['tags' => ['Техническое оборудование'], 'image' => '/assets/img/request.png', 'link' => '/request', 'title' => 'Корпоратив для IT-компании', 'description' => 'Хочу организовать новогодний корпоратив с ведущим и банкетом в уютной атмосфере для 100 гостей.'],
                    ['tags' => ['Техническое оборудование'], 'image' => '/assets/img/request.png', 'link' => '/request', 'title' => 'Корпоратив для IT-компании', 'description' => 'Хочу организовать новогодний корпоратив с ведущим и банкетом в уютной атмосфере для 100 гостей.'],
                    ['tags' => ['Техническое оборудование'], 'image' => '/assets/img/request.png', 'link' => '/request', 'title' => 'Корпоратив для IT-компании', 'description' => 'Хочу организовать новогодний корпоратив с ведущим и банкетом в уютной атмосфере для 100 гостей.'],
            ];
            foreach ($requests as $card): ?>
                <?php include VIEW_PATH . 'components/request-card.php'; ?>
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