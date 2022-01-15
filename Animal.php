<?php

// Creo un elemento común a todos los animales para el ejemplo, establecer
// y obtener la altura de un animal.

interface Animal
{
    function setHeight($value);

    function getHeight();
}
