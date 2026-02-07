<?php
$story = [
    'title' => 'Конференция для IT-компании на 200 человек',
    'type' => 'Конференция',
    'quotes' => '"Я давно переживал, что организация корпоративов занимает слишком много сил: звонки, переговоры, поиск площадки и кейтеринга. В этом году мы решили попробовать платформу. Честно скажу, не ожидал, что всё получится так быстро и просто."',
    'content' => '<p>Когда мы получили первые отклики уже через несколько часов — это было приятным сюрпризом. Вместо хаоса у нас была ясная картина: кто что предлагает, какие условия, цены и кейсы. Я почувствовал спокойствие и уверенность, что событие пройдёт на уровне.</p>
        <p>Корпоратив на 80 человек получился живым и уютным. Зал был идеально подобран под наш формат, оборудование работало без сбоев, ведущий держал публику, а кейтеринг превзошёл ожидания. Коллеги остались в восторге, атмосфера была праздничной и комфортной.</p>
        <p>Мы выбрали подрядчика <b>CityFood Catering</b> — они взяли на себя еду и обслуживание. Всё было подано красиво, вкусно и вовремя. С ними было очень легко работать.</p>
        <p>Я бы поставил подрядчику 10 из 10 — за качество, сервис и отношение к деталям. А платформе — отдельное спасибо: она реально экономит время и даёт надёжных партнёров. Теперь буду пользоваться только так.</p>',
    'location' => 'Атакент мол',
    'datetime' => '2025-11-16',
    'date' => '16 ноября 2025',
    'image' => '/assets/img/request.png',
];

$client = [
    'photo' => '/assets/img/request/client.png',
    'name' => 'Сергей Александр',
];

?>
<section class="story-section">
    <div class="container">
        <div class="story-top">
            <h1 class="section-title"><?= $story['title'] ?></h1>
            <div class="story__type"><?= $story['type'] ?></div>
        </div>
        <div class="story-wrapper">
            <div class="story-side">
                <div class="story-client">
                    <div class="story-client__img">
                        <img src="<?= $client['photo'] ?>" alt="">
                    </div>
                    <div class="story-client__name"><?= $client['name']; ?></div>
                </div>
                <div class="story-badges">
                    <div class="story-badge">
                        <img src="/assets/img/icons/light/location.svg" alt="">
                        <span><?= $story['location']; ?></span>
                    </div>
                    <div class="story-badge">
                        <img src="/assets/img/icons/light/calendar-tick.svg" alt="">
                        <time datetime="<?= $story['datetime'] ?>"><?= $story['date']; ?></time>
                    </div>
                </div>
            </div>
            <div class="story-content">
                <blockquote>
                    <?= $story['quotes']; ?>
                </blockquote>
                <?= $story['content']; ?>
            </div>
        </div>
        <div class="story-image">
            <img src="<?= $story['image'] ?>" alt="">
        </div>
    </div>
</section>