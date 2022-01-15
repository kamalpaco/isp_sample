<?php

// La clase "canids" hace referencia a los tipos de animales cánidos
// perros, lobos... como animales que son, tienen características comúnes al resto
// "extends Animal"

interface canids extends Animal
{
    function bark();

    function run();
}