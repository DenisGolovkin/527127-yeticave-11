<?php
// подключаем заготовленные вспомогательные ф-ции и данные
require_once('helpers.php');
require_once('functions.php');
require_once('data.php');

// подключаем шаблон
$page_content = include_template('main.php', [
  'categories' => $categories,
  'items' => $items,
]);
// подключаем основной макет страницы
$layout_content = include_template('layout.php', [
  'content' => $page_content,
  'title' => "Yeti Cave",
  'is_auth' => $is_auth,
  'user_name' => $user_name,
]);
print($layout_content);
