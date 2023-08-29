<?php

class DramaCategory
{
}

class Movie
{
    private $name;
    private $category;

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    // Essa função está dependendo da classe DramaCategory
    public function getCategory()
    {
        return new DramaCategory;
    }
}