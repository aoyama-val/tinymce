<?php

ini_set('display_errors', 1);
error_reporting(E_ALL & ~E_DEPRECATED);
date_default_timezone_set('Asia/Tokyo');
mb_internal_encoding('UTF-8');
mb_language('uni');

if (!empty($_POST['html'])) {
    file_put_contents('default.html', $_POST['html']);
}
