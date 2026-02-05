<?php
$tags = [
    ['id' => 1, 'name' => 'Все'],
    ['id' => 2, 'name' => 'Город'],
    ['id' => 3, 'name' => 'Достопримечательности'],
    ['id' => 4, 'name' => 'Природа'],
];

$media = [
    ['preview' => '/assets/img/photobank.png', 'full' => '/assets/img/photobank.png'],
    ['preview' => '/assets/img/photobank.png', 'full' => '/assets/video/footer-video.mp4'],
    ['preview' => '/assets/img/photobank.png', 'full' => '/assets/img/photobank.png'],
    ['preview' => '/assets/img/photobank.png', 'full' => '/assets/video/footer-video.mp4'],
    ['preview' => '/assets/img/photobank.png', 'full' => '/assets/img/photobank.png'],
    ['preview' => '/assets/img/photobank.png', 'full' => '/assets/video/footer-video.mp4'],
    ['preview' => '/assets/img/photobank.png', 'full' => '/assets/img/photobank.png'],
    ['preview' => '/assets/img/photobank.png', 'full' => '/assets/video/footer-video.mp4'],
    ['preview' => '/assets/img/photobank.png', 'full' => '/assets/img/photobank.png'],
    ['preview' => '/assets/img/photobank.png', 'full' => '/assets/video/footer-video.mp4'],
    ['preview' => '/assets/img/photobank.png', 'full' => '/assets/img/photobank.png'],
    ['preview' => '/assets/img/photobank.png', 'full' => '/assets/video/footer-video.mp4'],
    ['preview' => '/assets/img/photobank.png', 'full' => '/assets/img/photobank.png'],
    ['preview' => '/assets/img/photobank.png', 'full' => '/assets/video/footer-video.mp4'],
    ['preview' => '/assets/img/photobank.png', 'full' => '/assets/img/photobank.png'],
    ['preview' => '/assets/img/photobank.png', 'full' => '/assets/video/footer-video.mp4'],
    ['preview' => '/assets/img/photobank.png', 'full' => '/assets/img/photobank.png'],
    ['preview' => '/assets/img/photobank.png', 'full' => '/assets/video/footer-video.mp4'],
]
?>
<section class="catalog-first-section media-first-section">
    <div class="container">
        <div class="section-title section-title--center">Фото и видео банк</div>
        <div class="catalog-tags">
            <?php foreach ($tags as $tag): ?>
                <a href="#" class="btn btn-secondary catalog-tag"><?= $tag['name'] ?></a>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<section class="media-tabs-section">
    <div class="container media-tabs-wrapper">
        <div class="media-tabs">
            <a href="/media/photo" class="media-tab <?= $type == 'photo' ? ' active' : '' ?>">
                <svg width=" 24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M9 22H15C20 22 22 20 22 15V9C22 4 20 2 15 2H9C4 2 2 4 2 9V15C2 20 4 22 9 22Z"
                          stroke="#171717" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <path
                        d="M9 10C10.1046 10 11 9.10457 11 8C11 6.89543 10.1046 6 9 6C7.89543 6 7 6.89543 7 8C7 9.10457 7.89543 10 9 10Z"
                        stroke="#171717" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <path
                        d="M2.66992 18.9501L7.59992 15.6401C8.38992 15.1101 9.52992 15.1701 10.2399 15.7801L10.5699 16.0701C11.3499 16.7401 12.6099 16.7401 13.3899 16.0701L17.5499 12.5001C18.3299 11.8301 19.5899 11.8301 20.3699 12.5001L21.9999 13.9001"
                        stroke="#171717" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
                <span>Фото 3.1т</span>
            </a>
            <a href="/media/video" class="media-tab <?= $type == 'video' ? ' active' : '' ?>">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M9 22H15C20 22 22 20 22 15V9C22 4 20 2 15 2H9C4 2 2 4 2 9V15C2 20 4 22 9 22Z"
                          stroke="#171717" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <path
                        d="M9.09961 12V10.52C9.09961 8.60999 10.4496 7.83999 12.0996 8.78999L13.3796 9.52999L14.6596 10.27C16.3096 11.22 16.3096 12.78 14.6596 13.73L13.3796 14.47L12.0996 15.21C10.4496 16.16 9.09961 15.38 9.09961 13.48V12Z"
                        stroke="#171717" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round"
                        stroke-linejoin="round"/>
                </svg>
                <span>Видео 182</span>
            </a>
        </div>
        <div class="dropdown media-dropdown">
            <div class="dropdown__label">
                <span>Ориентация</span>
            </div>
            <div class="dropdown-inner">
                <div class="dropdown-inner__subtitle">Ориентация</div>
                <ul class="dropdown-inner__list">
                    <li>
                        <a href="#" class="checked-row active"><span>Все</span></a>
                    </li>
                    <li>
                        <a href="#" class="checked-row"><span>Портретные</span></a>
                    </li>
                    <li>
                        <a href="#" class="checked-row"><span>Пейзажные</span></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="media-gallery-section">
    <div class="container">
        <div class="media-gallery-grid">
            <?php foreach ($media as $item): ?>
                <a href="<?= $item['full'] ?>" class="media-gallery-item" data-fancybox="media">
                    <img src="<?= $item['preview'] ?>" alt=""/>
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