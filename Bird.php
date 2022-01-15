<?php

// Bird en sí puede ser un animal, por eso implementamos directamente de Animal sus
// características. Si hiciera referencia a "aves", haríamos una interfaz intermedia,
// al igual que si la aplicación necesitara implementar algún otro tipo de ave.

class Bird implements Animal
{
    protected $height;

    public function fly()
    {
        echo "Bird is flying";
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