<?php

// Dog es un tipo de animal con características propias de los cánidos.
// De esta manera, creamos una clase Canids (que no podrá ser instanciada ya que es un tipo de animal)
// con las características que los definen, de la que extenderá Dog.

class Dog implements canids
{
    protected $height;

    public function run()
    {
        echo "Dog is running";
    }

    public function bark()
    {
        echo "Dog is barking";
    }

    public function getHeight()
    {
        return $this->height;
    }

    /**
     * @param mixed $height
     */
    public function setHeight($height)
    {
        $this->height = $height;
    }
}
