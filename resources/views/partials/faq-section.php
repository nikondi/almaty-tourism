<section class="welcome-faq-section">
    <div class="container welcome-faq-wrapper">
        <div class="welcome-faq-text">
            <div class="welcome-faq-tag">Вопросы?</div>
            <h2 class="section-title">Часто задаваемые вопросы</h2>
            <div class="welcome-faq-description">В этом разделе мы собрали ответы на самые популярные вопросы о том, как
                работает наша платформа. Здесь вы узнаете, как разместить запрос, как партнёры откликаются на заявки,
                как
                проходит модерация объявлений и какие возможности доступны клиентам и подрядчикам.
            </div>
        </div>
        <div class="welcome-faq-list">
            <?php
            $questions = [
                ['question' => 'Как разместить запрос на мероприятие?', 'answer' => 'Ответ. Очень длинный ответ с <b>Тегами</b> и <i>Курсивом</i>'],
                ['question' => 'Сколько стоит размещение запроса?', 'answer' => 'Ответ. Очень длинный ответ с <b>Тегами</b> и <i>Курсивом</i>'],
                ['question' => 'Как стать партнёром?', 'answer' => 'Ответ. Очень длинный ответ с <b>Тегами</b> и <i>Курсивом</i>'],
                ['question' => 'Как работает модерация?', 'answer' => 'Ответ. Очень длинный ответ с <b>Тегами</b> и <i>Курсивом</i>'],
                ['question' => 'Как я получу отклики на мой запрос?', 'answer' => 'Ответ. Очень длинный ответ с <b>Тегами</b> и <i>Курсивом</i>'],
                ['question' => 'Нужно ли мне общаться только через сайт?', 'answer' => 'Ответ. Очень длинный ответ с <b>Тегами</b> и <i>Курсивом</i>'],
            ];
            foreach ($questions as $question): ?>
                <div class="faq-item">
                    <div class="faq-item__question"><?= $question['question'] ?></div>
                    <svg width="24" height="24" viewBox="0 0 24 24" class="faq-item-icon">
                        <path d="M6 12H18" stroke="#232323" stroke-width="1.5" stroke-linecap="round"
                              stroke-linejoin="round"/>
                        <path d="M12 18V6" stroke="#232323" stroke-width="1.5" stroke-linecap="round"
                              stroke-linejoin="round" class="faq-item-icon__rotate"/>
                    </svg>

                    <div class="faq-item-answer">
                        <div class="faq-item-answer__inner"><?= $question['answer'] ?></div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>