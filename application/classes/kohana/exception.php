<?php defined('SYSPATH') or die('No direct script access.');

class Kohana_Exception extends Kohana_Kohana_Exception {
 
    public static function handler(Exception $e)
    {
        // Стандартная обработка, если проект на стадии разработки
        if (Kohana::PRODUCTION === Kohana::$environment)
        {
            parent::handler($e);
        }
        else
        {
            try
            {
                // Пишем в лог
                Kohana::$log->add(Log::ERROR, parent::text($e));
 
                $attributes = array
                (
                    'action'  => 500, // Ошибка по умолчанию
                    'message' => rawurlencode($e->getMessage())
                );
 
                // Получаем код ошибки, как название экшена
                if ($e instanceof HTTP_Exception)
                {
                    $attributes['action'] = $e->getCode();
                }
 
                // Выполняем запрос, обращаясь к роутеру для обработки ошибок
                echo Request::factory(Route::get('error')->uri($attributes))
                    ->execute()
                    ->send_headers()
                    ->body();
            }
            catch (Exception $e)
            {
                // Чистим буфер и выводим текст ошибки
                ob_get_level() and ob_clean();
                echo parent::text($e);
                exit(1);
            }
        }
    }
}