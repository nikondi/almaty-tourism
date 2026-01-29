<?php
if (!isset($lightHeader))
    $lightHeader = false;
?>
    <header class="header<?= $lightHeader ? ' header--light' : ''; ?>">
        <div class="container">
            <div class="header-inner">
                <a href="/" class="header-logo">
                    <svg width="174" height="46">
                        <use xlink:href="/assets/img/logo.svg#logo"/>
                    </svg>
                </a>
                <div class="mobile-menu">
                    <nav class="header-nav">
                        <ul>
                            <li><a href="#">Каталог</a></li>
                            <li><a href="#">Заявки</a></li>
                            <li><a href="#">Аналитика</a></li>
                            <li><a href="#">О нас</a></li>
                            <li><a href="#">Фото и видео банк</a></li>
                        </ul>
                    </nav>
                    <div class="header-actions">
                        <!-- TODO: lang switcher -->
                        <div class="header-action lang-switcher">
                            <span>RU</span>
                            <span><img src="/assets/img/icons/<?= $lightHeader ? 'light/' : ''; ?>/chevron-down.svg"
                                       alt=""></span>
                        </div>

                        <a href="#" class="header-action">
                            <img src="/assets/img/icons/<?= $lightHeader ? 'light/' : ''; ?>/user.svg" alt="">
                        </a>
                    </div>
                </div>
                <button class="mobile-burger">
                    <span></span>
                </button>
            </div>
        </div>
    </header>
<?php if (!$lightHeader): ?>
    <div class="header-placeholder"></div>
<?php endif; ?>