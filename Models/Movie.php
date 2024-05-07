<?php 
include __DIR__ ."/Product.php";

class Movie extends Product
{
    public string $language;
    public function __construct($title,$language,$cover,$price,$rating){
    $this->language = $language;
    parent::__construct($title,$cover,$price,$rating);
    }

    // public function getByLanguage($movies, $language){
    //     return $movies.filter($movie.original_language === $language)
    // }
  
    
}