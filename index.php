<?php
/* Я НЕ СОВСЕМ УВЕРЕН  В ЭТОМ ВСЕМ*/
interface Builder
{
    public function createEngin();

    public function createSеat();

    public function createWheel();
}

class Director
{
    public function build(Builder $builder)
    {
        $builder->createEngin();
        $builder->createSеat();
        $builder->createWheel();
    }
}

class MotoBuilder implements Builder
{
    private $moto;

    public function createEngin()
    {
        $this->moto = new Engin();
    }

    public function createSеat()
    {
        $this->moto = new Seat();
    }

    public function createWheel()
    {
        $this->moto = new Wheel();
    }

}

class QuadBikeBuilder implements Builder
{
    private $quadBike;

    public function createEngin()
    {
        $this->quadBike = new Engin();
    }

    public function createSеat()
    {
        $this->quadBike = new Seat();
    }

    public function createWheel()
    {
        $this->quadBike = new Wheel();
    }

}