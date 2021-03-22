<?php
/**
 * WordPress の基本設定
 *
 * このファイルは、インストール時に wp-config.php 作成ウィザードが利用します。
 * ウィザードを介さずにこのファイルを "wp-config.php" という名前でコピーして
 * 直接編集して値を入力してもかまいません。
 *
 * このファイルは、以下の設定を含みます。
 *
 * * MySQL 設定
 * * 秘密鍵
 * * データベーステーブル接頭辞
 * * ABSPATH
 *
 * @link https://ja.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// 注意:
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.osdn.jp/%E7%94%A8%E8%AA%9E%E9%9B%86#.E3.83.86.E3.82.AD.E3.82.B9.E3.83.88.E3.82.A8.E3.83.87.E3.82.A3.E3.82.BF 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** MySQL 設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
/**define( 'DB_NAME', 'mysqldatabase47883' );*/
define( 'DB_NAME', 'databasename' );

/** MySQL データベースのユーザー名 */
define( 'DB_USER', 'databaseuser' );
/** define( 'DB_USER', 'mysqldbuser@livestreaming-mysqldbserver' );*/

/** MySQL データベースのパスワード */
/** define( 'DB_PASSWORD', '7Sayosuteki' );*/
define( 'DB_PASSWORD', 'xxxxxxxxxxxxxxxx' );

/** MySQL のホスト名 */
/*define( 'DB_HOST', 'livestreaming-mysqldbserver.mysql.database.azure.com' );*/
define( 'DB_HOST', 'localhost' );

/** データベースのテーブルを作成する際のデータベースの文字セット */
define( 'DB_CHARSET', 'utf8mb4' );

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define( 'DB_COLLATE', '' );

/** 山上コメント
 * こちらに設置先のURLを指定してください
 * WP_HOME　には設置先URLのトップページの末尾に、/wpをつけてください。
 * ダミーを入力しますので、参照ください
*/
define('WP_HOME','https://livestreaming-dev.azurewebsites.net/wp');
define('WP_SITEURL','https://livestreaming-dev.azurewebsites.net');
/**define('WP_HOME','https://livestreaming.azurewebsites.net/wp');*/*/
/**define('WP_SITEURL','https://livestreaming.azurewebsites.net/');*/
/** 山上コメント */

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'J2+h g]7]|<U9GVkgZ_eXX>jth7]5FC-]EBywv|:12!L5@DQza5*vv$&J$rSR1Rt' );
define( 'SECURE_AUTH_KEY',  'r&9?7ot!7>*.yULpZeMp<[7x3Fb33ZM%=5[uAv`o8?S<ySpR{[*l1J{gZF|gZ.gX' );
define( 'LOGGED_IN_KEY',    'CF-tCnc;1xwhn/Sbq}GZ*SK`N-rTsBQ K ND11`|w3ib}jgf7b$$}ZY{BH4m=i^+' );
define( 'NONCE_KEY',        'AMr%E~{I9}7C)GmXPm!s2>WMk~b?*R)LhXSwQ&@4BQ<Xe*wFGKI_K+&SIy]:UoKp' );
define( 'AUTH_SALT',        'PV3XHxEO+x_q{O_ne.1to`J*t7T<B@5RX#MLVIL :l!%ny%&Ys6%eHRZIvr6,k]=' );
define( 'SECURE_AUTH_SALT', '4FdeQ^S,w,k!gAzSi{[]E3~rdq0p(fi64lx+N[@Xx(Rg|se3X57-6y,#kcqqIMyD' );
define( 'LOGGED_IN_SALT',   '!]K[^^-_U*t2%Pq#O~RY_ot$)DZG1dbr|-2Q~d.S:6za;V$CWwZsx%yg1(ZghxN|' );
define( 'NONCE_SALT',       '>~zzb|;6E.LcRdOO-IGXF+Q!GtM37z4a<E)W/$hS`/)U^ad21|[Fsame}S?zKKD#' );

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix = 'ricoh_dev_';

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 *
 * その他のデバッグに利用できる定数についてはドキュメンテーションをご覧ください。
 *
 * @link https://ja.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* 編集が必要なのはここまでです ! WordPress でのパブリッシングをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
