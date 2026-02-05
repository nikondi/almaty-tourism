<a href="<?= $item['link'] ?>" class="request-card">
    <img src="<?= $item['image'] ?>" alt="" class="request-card-image">
    <div class="request-card-inner">
        <div class="request-card-top">
            <?php if (isset($item['date'])): ?>
                <div class="request-card-date">
                    <img src="/assets/img/icons/light/calendar.svg" alt="">
                    <span><?= $item['date'] ?></span>
                </div>
            <?php endif; ?>
            <?php if (isset($item['tags'])): ?>
                <?php foreach ($item['tags'] as $tag): ?>
                    <div class="request-card-tag">
                        <span><?= $tag ?></span>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
        <div class="request-card-bottom">
            <div class="request-card-text">
                <div class="request-card-title"><?= $item['title'] ?></div>
                <div class="request-card-description"><?= $item['short'] ?></div>
            </div>
        </div>
    </div>
    <div class="request-card-arrow">
        <img src="/assets/img/icons/light/arrow-up-right.svg" alt=""/>
    </div>
</a>
