<?php
declare(strict_types=1);

/**
 * Class Random
 * Класс реализует генератор рандомных чисел
 */
class Random
{
    private $seed;
    private $hold;
    private $factor;
    private $module;
    private $increment;

    /**
     * Random constructor.
     *
     * @param $seed
     */
    public function __construct(float $seed)
    {
        $this->seed = $seed;
        $this->hold = $seed;
        $this->factor = 7;
        $this->module = 10;
        $this->increment = 7;
    }

    /**
     * Метод, возврающающий новое случайное число
     *
     * @return float
     */
    public function getNext(): float
    {
        $this->seed = ($this->factor * $this->seed + $this->increment) % $this->module;
        return $this->seed;
    }

    /**
     * Метод, сбрасывающий генератор на начальное значение
     *
     * @return mixed
     */
    public function reset(): float
    {
        $this->seed = $this->hold;
        return $this->seed;
    }
}
