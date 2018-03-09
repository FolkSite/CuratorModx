<?php
namespace KRS\AdminSystem\Controller;

/**
 * ХРАНИТЕЛЬ MODX
 * Это класс в котором можно хранить модх
 *
 * 1. Создаем экземпляр класса
 * 2. Вызываем метод setModx и передаем в него переменную $modx
 * 3. Наследуем этот класс и пользуемся переменной в виде метода getModx
 *
 * Например: self::getModx()->getConfig('site_start')
 */
class CuratorModx
{
    /**
     * @var \DocumentParser
     * */
    static private $modx;

    /**
     * @param $modx \DocumentParser
     */
    final public function setModx($modx)
    {
        self::$modx = $modx;
    }

    /**
     * @return \DocumentParser
     */
     final public static function getModx()
    {
        return self::$modx;
    }
}



