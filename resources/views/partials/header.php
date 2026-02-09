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
                            <li><a href="/catalog">Каталог</a></li>
                            <li><a href="/requests">Заявки</a></li>
                            <li><a href="#">Аналитика</a></li>
                            <li><a href="/about">О нас</a></li>
                            <li><a href="/media/photo">Фото и видео банк</a></li>
                        </ul>
                    </nav>
                    <div class="header-actions">
                        <div class="header-action dropdown lang-switcher">
                            <div class="dropdown__label">
                                <span>RU</span>
                                <span>
                                    <img src="/assets/img/icons/<?= $lightHeader ? 'light/' : ''; ?>/chevron-down.svg" alt="" class="lang-switcher__icon">
                                </span>
                            </div>
                            <div class="dropdown-inner">
                                <ul class="dropdown-inner__list">
                                    <li>
                                        <a href="#" class="checked-row active"><span>RU</span></a>
                                    </li>
                                    <li>
                                        <a href="#" class="checked-row"><span>EN</span></a>
                                    </li>
                                    <li>
                                        <a href="#" class="checked-row"><span>KZ</span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>


                        <a href="/login" class="header-action">
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