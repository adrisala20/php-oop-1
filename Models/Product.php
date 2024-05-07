<?php 
class Product 
{
    public string $title;
    public string $cover;
    public float $price;
    public float $rating;

    //costruttore
    public function __construct($title,$cover,$price,$rating){
        $this->title = $title;
        $this->cover = $cover;
        $this->price = $price;
        $this->rating = $rating;
    }

    public function showAll(){
        echo ' ' . 'tutti i film';
    }
}


/**
 * Oggi pomeriggio ripassate i primi concetti di classe, variabili e metodi d'istanza che abbiamo visto stamattina e create un progetto in cui:
 * è definita una classe ‘Movie’
   * all'interno della classe sono dichiarate delle variabili d'istanza
   * all'interno della classe è definito un costruttore
   * all'interno della classe è definito almeno un metodo
* vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà
 */