<?php

class Movie {

    // Variabili d'istanza
    public $title;
    public $genre;
    public $realeaseYear;

    // Costruttore
    public function __costruction($title, $genre, $realeaseYear){
        $this->title = $title;
        $this->gerne = $genre;
        $this->releaseYear = $realeaseYear;
    }

    // Metodo
    public function getTitle() {
        return $this->title;
    }
}

// Oggetti 
$movie1 = new Movie("Harry potter", "Fantasy", 2001);
$movie2 = new Movie("The conjuring", "Horror", 2013);

// Stampo in pagina 

echo $movie1->getTitle();
echo $movie2->getTitle();


