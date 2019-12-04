<?php


class Cook
{
    public $client;

    // В ресторанах были повары и обычные клиенты.
    // Собственник решил открыть VIP обслуживания для
    // Vip клиентов в одном из ресторанов. Нарушением принципа
    // открытости/закрытости будет нарушен, если мы сделаем изменения в
    // классе повар и изменим логику в методе cookMeal(). Правильно будет
    // принять решение, что класс повар(Cook) закрыт для изменений(финальный)
    // и создать новый класс для работы с VIP клиентами - VipCook. Логика по
    // работе с вип клиентами изменять там. Тем самым мы сохраним
    // работоспособность старых ресторанов, которые не работают с VIP лиентами.
    /**
     * @param $meal
     */
    private function cookMeal($meal)
    {
        /**
         * regular cooking
         */
    }



}

class Client
{
    protected $meal;
    protected $cook;

    /**
     * @return mixed
     */
    public function getMeal()
    {
        return $this->meal;
    }

    /**
     * @param  mixed  $meal
     */
    public function setMeal($meal)
    {
        $this->meal = $meal;
    }

    /**
     * @return mixed
     */
    public function getCook()
    {
        return $this->cook;
    }

    /**
     * @param  mixed  $cook
     */
    public function setCook($cook)
    {
        $this->cook = $cook;
    }

    public function eat($meal)
    {
        /**
         * @todo need to implement
         */
    }
    public function checkout()
    {
        /**
         * @todo need to implement
         */
    }

}

class VipClient extends Client
{

}

class VipCook extends Cook
{
    public $client;

    /**
     * @param  mixed  $client
     */
    public function setClient($client)
    {
        $this->client = $client;
    }

    /**
     * @param $meal
     * @deprecated since 2.0, use {@see vipCookingMeal()} instead.
     * @return \Meal|void
     */
    private function cookMeal($meal)
    {

    }

    public function vipCookingMeal()
    {
        /**
         * vip logic
         */
    }



}
