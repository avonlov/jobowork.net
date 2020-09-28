<?php
// Парсим необходимые данные со страницы
require_once 'simple_html_dom.php';
// URL откуда будем парсить
$html = file_get_html('https://jobowork.net/ooo-studiopak.html');
// Ищем DIV "ocenka_sb_company"0
foreach($html->find('div.ocenka_sb_company') as $ocenka_sb_company)
file_put_contents('rate.txt', $ocenka_sb_company);
//Очищаем память
$html->clear();
unset($html);
?> 