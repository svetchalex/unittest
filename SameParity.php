<?php
/**
 * Задача 12
 * Реализуйте функцию getSameParity, которая принимает на вход массив чисел и возвращает новый, состоящий из элементов,
 * у которых такая же чётность, как и у первого элемента входного массива.
 * Примеры
 * getSameParity([]);        // => []
 * getSameParity([1, 2, 3]); // => [1, 3]
 * getSameParity([1, 2, 8]); // => [1]
 * getSameParity([2, 2, 8]); // => [2, 2, 8]
 * Подсказки Проверка чётности - остаток от деления: $item % 2 == 0 — чётное число Если на вход функции передан пустой
 * массив, то она должна вернуть пустой массив. Проверить массив на пустоту можно с помощью функции empty
 */
declare(strict_types=1);

/**
 * Class FindIndex
 */
class SameParity
{
    /**
     * @param $numbers
     *
     * @return array
     */
    function getSameParity(array $numbers): array
    {
        $res_numb = [];
        if (!empty($numbers)) {
            $res = $numbers[0] % 2;
            foreach ($numbers as $number) {
                if ($res === ($number % 2)) {
                    $res_numb[] = $number;
                }
            }
        }
        return $res_numb;
    }
}

