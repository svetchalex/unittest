<?php
declare(strict_types=1);

/**
 * Class Circle
 * Данный класс вычисляет длину окружности и ее площадь по радиусу $radius
 */
class Circle
{
    private $radius;

    /**
     * Circle constructor.
     *
     * @param $radius
     *
     * @throws Exception
     */
    public function __construct(float $radius)
    {
        if ($radius > 0) {
            $this->radius = $radius;
        } else {
            throw new Exception('Значение должно быть больше нуля');
        }
    }

    /**
     * Метод вычисляет длину окружности
     *
     * @return float|int
     */
    public function getArea(): float
    {
        $area = M_PI * $this->radius * $this->radius;
        return $area;
    }

    /**
     * Метод вычисляет площадь окружности
     *
     * @return float|int
     */
    public function getCircumference(): float
    {
        $circumference = 2 * M_PI * $this->radius;
        return $circumference;
    }
}
