<div class="request-row">
    <div class="container">
        <div class="request-row__top">
            <a href="<?= $item['link'] ?>" class="request-row__title"><?= $item['title'] ?></a>
            <div class="request-row-short">
                <div class="request-row__description"><?= $item['short'] ?></div>
                <div class="request-row-tags">
                    <?php if (isset($item['tags'])): ?>
                        <?php foreach ($item['tags'] as $tag): ?>
                            <div class="request-row-tag tag">
                                <span><?= $tag ?></span>
                            </div>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </div>
            </div>
            <div class="request-row-actions">
                <button type="button" class="request-row-trigger">
                    <img src="/assets/img/icons/chevron-down.svg" alt=""/>
                </button>
                <a href="<?= $item['link'] ?>" class="request-row-arrow">
                    <img src="/assets/img/icons/light/arrow-up-right.svg" alt=""/>
                </a>
            </div>
        </div>
        <div class="request-row-full">
            <div class="request-row-inner">
                <div class="request-row__image">
                    <img src="<?= $item['image']; ?>" alt="">
                </div>
                <div class="request-row__description">
                    <?= $item['description'] ?>
                </div>
                <div class="request-row-tags">
                    <?php if (isset($item['tags'])): ?>
                        <?php foreach ($item['tags'] as $tag): ?>
                            <div class="request-row-tag tag">
                                <span><?= $tag ?></span>
                            </div>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </div>
                <a href="<?= $item['link'] ?>" class="request-row-arrow">
                    <img src="/assets/img/icons/light/arrow-up-right.svg" alt=""/>
                </a>
            </div>
        </div>
    </div>
</div>
