<?php

class Movie {

    public $title;
    public $length;
    public $director;
    public $cast;
    public $category;
    public $nationality;
    public $language;
    public $productionYear;


    function __construct(string $title, int $length, string $director, array $cast, array $category, string $nationality, string $language, int $productionYear){
        $this->title = $title;
        $this->length = $length;
        $this->director = $director;
        $this->cast = $cast;
        $this->category = $category;
        $this->nationality = $nationality;
        $this->language = $language;
        $this->productionYear = $productionYear;

    }

    function getLengthString(){
        return "{$this->length} min";
    }

}