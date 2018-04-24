<?php

class Recipe
{
    // Properties
    private $title;
    public $ingredients = [];
    public $instructions = [];
    public $yield;
    public $tag = [];
    public $source = "Daniel Usani";

    public function setTitle($title)
    {
        $this->title = ucwords($title);
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function displayRecipe()
    {
        return "{$this->title} by {$this->source}";
    }
}

$recipe1 = new Recipe();
$recipe1->source = "Grandma Usani";
$recipe1->setTitle("my first recipe");

$recipe2 = new Recipe();
$recipe2->source = "Betty Crocker";
$recipe2->setTitle("my second recipe");

echo $recipe1->getTitle();
echo $recipe1->displayRecipe();
echo $recipe2->displayRecipe();
// var_dump($recipe1);
