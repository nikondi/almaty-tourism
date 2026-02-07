<?php

$app_url = getenv('APP_URL')?:"localhost:8000";

exec("php -S \"$app_url\" -t public");