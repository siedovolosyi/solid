<?php

interface Citchen
{
    public function cookMeal($name);

    // Наружение принцица интерфейс. Для интерфейсов должна быть своя
    // специализация, лучше создать несколько интерфейсов, чем один со
    // множеством методов.
    public function buyProducts($name, $quantity);

    public function checkout($client);

}

interface Checkout
{
    public function checkout($client);
}

interface Stock
{
    public function buyProducts($name, $quantity);
}