<?php

class GeometryFigure
{
    protected string $name = '';

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    public function getArea(): float
    {
        return 0.0;
    }

    /**
     * @return float
     */
    public function getPerimetr(): float
    {
        return 0.0;
    }

    public function  __toString()
    {
        return 'Имя фигуры:' . $this->getName() . '<br/>'.
            'Площадь:' . $this->getArea() . '<br/>'.
            'Периметр:' . $this->getPerimetr() . '<br/>'.
    }
}