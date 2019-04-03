<?php
/**
 * Задача 12
 * Реализуйте функцию getSameParity, которая принимает на вход массив чисел и возвращает новый, состоящий из элементов,
 * у которых такая же чётность, как и у первого элемента входного массива.
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

