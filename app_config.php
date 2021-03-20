<?php
// get protocol.
$protocol = 'https://';
$extension = pathinfo($_SERVER['SERVER_NAME'], PATHINFO_EXTENSION);
$domain = $_SERVER['HTTP_HOST'];

/** 山上コメント
 * こちらにphpテンプレートで利用するルートパス設定をしております。サブディレクトリに設置する場合は、コメントアウトを参照して
 * パスを記述してください。
*/
// $APP_URL = $protocol . $_SERVER['HTTP_HOST'] . '/path/to/directory/';
$APP_URL = $protocol . $_SERVER['HTTP_HOST'] . '/';

define('APP_URL', $APP_URL);
define('APP_PATH', dirname(__FILE__) . '/');

function au($path = "")
{
    echo APP_URL . $path;
}
