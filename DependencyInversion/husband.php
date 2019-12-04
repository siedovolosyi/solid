<?php
/**
 * Принцип инверсии зависимости
 * DIP
 * Зависимости внутри системы строятся на основе абстракций.
 * Модули верхних уровней не должны зависить от модулей нижних уровней.
 * Оба типа модулей должны зависить от абстракции.
 * Абстракции не должны зависить от деталей.
 * Детали должны зависить от абстракций.
 *
 * ИЛИ короче: Зависимости должны строиться относительно абстракций, а не
 * деталей(класс)!
 *
 */

class juniorMale
{
    // сильная зависимость от класса wife, нарушение принципа единой
    // ответсвеенности.
    public function eat()
    {
        $wife = new Wife();
        $food = $wife->getFood();
        // ... eat
    }
}
class middleMale
{
    //данный класс более гибкий для изменений, но все равно чтобы поесть мы
    // привязаны к классу Wife
    private $wife;

    public function __construct(Wife $wife)
    {
        $this->wife = $wife;
    }

    public function eat()
    {
        $this->wife->getFood();
        // ... eat
    }
}

class seniorMale
{
    // В конструктор добавили объект класса, который реализовавает интерфей.
    // Теперь мужик может кушать и у жены и в кафе.
    private $foodProvider;

    public function __construct(IFoodProvider $foodProvider)
    {
        $this->foodProvider = $foodProvider;
    }

    public function eat()
    {
        $food = $this->foodProvider->getFood();
        // ... eat
    }
}