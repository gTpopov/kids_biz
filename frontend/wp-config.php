<?php
/**
 * Основные параметры WordPress.
 *
 * Этот файл содержит следующие параметры: настройки MySQL, префикс таблиц,
 * секретные ключи, язык WordPress и ABSPATH. Дополнительную информацию можно найти
 * на странице {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Кодекса. Настройки MySQL можно узнать у хостинг-провайдера.
 *
 * Этот файл используется сценарием создания wp-config.php в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать этот файл
 * с именем "wp-config.php" и заполнить значения.
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('DB_NAME', 'kids-biz');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется снова авторизоваться.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         ':^z@70>1!GGAwi5|D?cS=-#/N@pX<{(fa7;/`OeKsJx-A?-BTA7}Tsx%`{)Y4Hb:');
define('SECURE_AUTH_KEY',  'N.qR#yjDKywwxypUadFfkG?68n@-v8oW,-HPx.AJ|Hfy?6}`7? R-Go|,o)2f-_k');
define('LOGGED_IN_KEY',    'YiBDn>|-EVjoj|u0O0vo5x)zJPj58|8rBs:~yBKB1xcKmCOCWi=E1Fk+1c:{Sg=~');
define('NONCE_KEY',        'WoarY^8-v%__]-$)7|W]@ri3TR$ZSv8L_w|T9g(WZ|{Lq4~/<*tI3k6L9r%J-f]a');
define('AUTH_SALT',        'yK#Ky{(xf9_-4q0>gpJ^a`zhvMOLQenoV?Ri(i a<P-.1lI1Rrw~%nlm[g-uv@i]');
define('SECURE_AUTH_SALT', '/R-I{+b](jjBfj|7mz6z[p)!L9n@i(,8:^.-*W(>=Y!WpM8@5vTMs~MbC.`>L-+r');
define('LOGGED_IN_SALT',   'S*fr+/ bKQd,snJkJO+}o-?+D%~O3u4uv(ye.%]1!0KfH[4)+p1WpTv3GP_YR1NG');
define('NONCE_SALT',       'ON/mu!?=@$mI>.j<&[t:CGn:v.6@=mNbltLJX6-Fld]JzWDwqwPPwKFJxJj4{d?i');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько блогов в одну базу данных, если вы будете использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'kb_';

/**
 * Язык локализации WordPress, по умолчанию английский.
 *
 * Измените этот параметр, чтобы настроить локализацию. Соответствующий MO-файл
 * для выбранного языка должен быть установлен в wp-content/languages. Например,
 * чтобы включить поддержку русского языка, скопируйте ru_RU.mo в wp-content/languages
 * и присвойте WPLANG значение 'ru_RU'.
 */
define('WPLANG', 'ru_RU');

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Настоятельно рекомендуется, чтобы разработчики плагинов и тем использовали WP_DEBUG
 * в своём рабочем окружении.
 */
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
