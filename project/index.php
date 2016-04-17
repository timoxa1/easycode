<?php
function autoload($class) // функция для динамического подключения классов
{
    require_once (strtolower($class).'.php');
}
spl_autoload_register('autoload');
