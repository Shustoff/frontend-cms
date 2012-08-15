<?php defined('SYSPATH') or die('No direct script access.');
/*********
* Cookie Settings
*/
class Cookie extends Kohana_Cookie {
// Уникальная для каждого сайта строка salt-значения, которая используется для работы cookies
// шифрует подпись куки, формирует строковое значение из имени браузера ($_SERVER['HTTP_USER_AGENT']), имени куки и значения куки, генерирует хэш от полученной строки. В результате получается подпись для куки, которая ставиться перед значением и отделяется от значения тильдой.
// перед прочтением значения куки генерируется заново подпись и сравнивается с переденной. в случае несоответствия кука отбрасывается.
// Обязательно поменять для каждого сайта! После смены старые куки недействительны.
public static $salt = 'kyka';

// время жизни cookies в секундах или 0 (0 = хранятся до закрытия браузера)
// default = 0
public static $expiration = 3600;

// URL, ограничивающий доступ к cookies
// default = '/'
public static $path = '/';

// Домен, на котором cookies будут доступны
// default = NULL, что генерирует значение аналогичное $_SERVER['HTTP_HOST']
// Если надо сделать куку доступной для всех поддоменов, поставьте точку перед началом домена
// '.example.com' -- Allow cookies to be accessed on example.com and *.example.com
public static $domain = NULL;

// Позволить использовать cookies только по протоколу HTTPS
// default = FALSE
public static $secure = FALSE;

// Позволить использовать cookies только по протоколу HTTP (также закрывается доступ через Javascript)
// default = FALSE
public static $httponly = FALSE;

} // End cookie