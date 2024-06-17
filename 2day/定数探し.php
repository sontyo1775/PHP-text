<?php
// 下のコメントアウト外すと// URL_BASE は　：https://example.com　TRUEの場合
// define('URL_BASE', 'https://example.com'); 

defined('URL_BASE') || define('URL_BASE', 'https://default.example.com');

// URL_BASE は　：https://default.example.com　FALSEの場合
print 'URL_BASE は　：' .  URL_BASE; 