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

    public function getCategory()
    {
        return $this->category;
    }

    // Essa função está dependendo de uma classe concreta, com isso, só é possivel setar uma categoria do tipo DramaCategory
    public function setCategory(DramaCategory $category)
    {
        $this->category = $category;
    }
}