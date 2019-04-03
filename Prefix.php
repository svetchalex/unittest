<?php
/**
 * Задача 7
 * Реализуйте функцию addPrefix, которая добавляет к каждому элементу массива переданный префикс и возвращает
 * получившийся массив. Функция предназначена для работы со строковыми элементами.
 * Аргументы: Массив, Префикс. После префикса автоматически добавляется пробел.
 *
 */
declare(strict_types=1);

/**
 * Class Prefix
 */
class Prefix
{
    /**
     * @param $names
     * @param $prefix
     *
     * @return array|string
     */
    function addPrefix(array $names, string $prefix): array
    {
        $newName = [];
        foreach ($names as $key => $name) {
            $newName[$key] = $prefix . ' ' . $name;
        }
        return $newName;
    }
}
