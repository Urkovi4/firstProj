<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('DB_NAME', 'nutoniandb');

/** Имя пользователя MySQL */
define('DB_USER', 'adm');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 'adm');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8mb4');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

define('FS_METHOD', 'direct');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'A]N@u[}9nsY_,LwaWK#=j)4z~Gl$)<o:)DF+EV~u&yi4)@&945L&MRdde^J@8R^F');
define('SECURE_AUTH_KEY',  '.&2sa2j cfiFB{6`F3HjGKKe8Y:<|{<u5]%v@AZOP sfO=.TaSS1yV`E:p^P(=0D');
define('LOGGED_IN_KEY',    'lJLh|K[wxs+K8t5v %s]$Fk%3Q7OrH&z|n~dr6Zs$_Z0o vc8Rh@$*19pj}E9X^+');
define('NONCE_KEY',        '`=2rO0jbt}IB45e,WE>!tm Q)<#]6d6AhCFm*ZbBbhFq@g_)1{K V*d!H*DAae@v');
define('AUTH_SALT',        'Y<|}6B5/3IuhqG@BQGdaSlt,e@@m#%05*V[S{bz{mkli[H/16|xQ3/fq4u^@OPe?');
define('SECURE_AUTH_SALT', 'JqD/C1+IJ$Bfh?q1r^M.D$/h!J!0GdG3c(Yu^R)9w;`iLLJbB::uYW{ZyA[|dqg?');
define('LOGGED_IN_SALT',   '5(SX7pL;riQG]NN3.]Xo9&%K:`#GojUJ~E^?ie,`jy uk|md*vXPC+2v0A7^G+MW');
define('NONCE_SALT',       'C^|P.PWh`vMiMxcVLqS?sHRZ_OuyP`RJc#%#0IAl5@U+:>?tUm{9^{g.!?S;2)FT');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');

