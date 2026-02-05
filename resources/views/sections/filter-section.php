<?php
$show_type = $_GET['show'] ?? 'grid';

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
?>

<!-- TODO: строки и карта -->
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
                    <?php if ($show_map ?? false): ?>
                        <button type="submit" class="filters-show-type<?= $show_type == 'map' ? ' active' : ''; ?>"
                                name="show"
                                value="map">
                            <svg width="24" height="24">
                                <use xlink:href="/assets/img/icons/filters.svg#map"/>
                            </svg>
                        </button>
                    <?php endif; ?>
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

