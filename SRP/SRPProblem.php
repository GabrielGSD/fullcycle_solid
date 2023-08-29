<?php
/**
 * Classe com muitas responsabilidades
 */
class Course
{
    private $name;
    private $category;
    private $description;

    public function connection()
    {
        $pdo = new PDO('mysql:host=localhost;dbname=testdb;charset=utf8mb4');
        return $pdo;
    }

    public function createCategory()
    {
        $this->connection()->insert($this->category);
    }

    public function createCourse()
    {
        $this->connection()->insert($this->name);
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }
}

/**
 * Solução SRP
 * 
 * Entidade Course apenas com getters e setters (name, category, description)
 * Entidade Category, para criar uma categoria para o curso
 * Repositório que faz a conexão com o banco de dados e persiste o valor dessas classes (createCourse, createCategory)
 */