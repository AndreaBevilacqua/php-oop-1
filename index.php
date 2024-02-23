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
