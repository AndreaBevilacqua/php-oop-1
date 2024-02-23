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

$movie1 = new Movie("Harry potter", "Fantasy", 2001);
$movie2 = new Movie("The conjuring", "Horror", 2013);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP</title>
</head>
<body>
    
</body>
</html>
