<?php

require_once 'Dotenv.php';
require_once 'Validator.php';
require_once 'Loader.php';

$dotenv = new Dotenv\Dotenv(__DIR__);
$dotenv->load();

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
define('DB_NAME', $_ENV['DB_NAME']);

/** Имя пользователя MySQL */
define('DB_USER', $_ENV['DB_USER']);

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', $_ENV['DB_PASSWORD']);

/** Имя сервера MySQL */
define('DB_HOST', $_ENV['DB_HOST']);

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'qIX%`d_ACY_}y* $+D>K|{EOV_Ub7`#|kb m7ksr-]#?WX`H3=bbOQiw^~Aj-:#e');
define('SECURE_AUTH_KEY',  '?vTH#Ss86!Xvo2_av*>^gijI#bl]d18bL(g s76-(EBV.oq8ZC^(Yd=h _7h<HC,');
define('LOGGED_IN_KEY',    '1|+iDjX<#CVdcEi|zI}_Y%8%~?DCKg4$.$]flyk[S:1B$k5oKS-IRK|qCVO7Ts~1');
define('NONCE_KEY',        'V]]u$zsywYWY=<o~QP5o!i7x()RVm[ai+brl~v||X[9X>ASeO|Y$j&P(;{b|!>Dc');
define('AUTH_SALT',        '0&k4pbn+YIR4DSRT+@(]ZkloN[/%=3,O&w<d:koiD>ih2|]+[{PrtYm; d-v+z9W');
define('SECURE_AUTH_SALT', 'z1wC%*GeC)KIq7C.slIU<KzKN`xY.mN.K]+dZmgA8{.g0xKMe+mFpuyT#.M. IMO');
define('LOGGED_IN_SALT',   'boF!P58CgiBKc-$<+=!+H^`._Wb`rb+:-B+[1~`sTfT12i&48%T|fTR8UP7}V*(8');
define('NONCE_SALT',       ']WR#s78]<+orHN<C7Pm;`ms86p;K8>-I?7siWd&(u:E_ iP0-UZ,TYl<EM?Yp]Wv');

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
define('WP_DEBUG', $_ENV['APP_DEBUG']);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
