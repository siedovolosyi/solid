<?php

//Прин­цип един­ствен­ной обя­зан­но­сти / ответ­ствен­но­сти (single responsibility principle )
// обо­зна­ча­ет, что каж­дый объ­ект дол­жен иметь одну обя­зан­ность и эта обя­зан­ность должна быть
// пол­но­стью инкап­су­ли­ро­вана в класс. Все его сер­висы должны быть направ­лены исклю­чи­тельно на
// обес­пе­че­ние этой обя­зан­но­сти. Иными словами интерфейс или класс при разработке имеют
// одну единственную ответсвенность.

class Cook
{

    private $meal;
    private $name;

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getOrder(): Order
    {
        return new Order();
    }

    public function setMeal($meal)
    {
        $this->meal = $meal;
    }

    public function getMeal()
    {
        return $this->meal;
    }

    /**
     * Готовим блюдо. Ответсвенность повара.
     *
     * @return Meal
     */
    public function cookMeal(): Meal
    {
        return new Meal($this->name);
    }

    // Нарушение принципе единой ответсвенности. Повар должен готовить еду,
    // а не считать стоимость заказа. Метод расчета по заказу нужно вынести
    // в отдельный класс Order
    public function checkout()
    {

    }

}

class Order
{

    private $meal;
    private $amount;

    public function __construct($meal = '')
    {
        $this->meal = $meal;
    }

    /**
     * @return string
     */
    public function getMeal(): string
    {
        return $this->meal;
    }

    public function setAmount($amount)
    {
        $this->amount = $amount;
    }

    public function getAmount()
    {
        return $this->amount;
    }

    public function checkout()
    {

    }
}

class Meal
{

    private $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

}
