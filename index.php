<?php
class movie
{
    public $titolo;
    public $anno;
    public $genere;
    public $poster;

    public function __construct($titolo, $anno, $genere)
    {
        $this->titolo = $titolo;
        $this->anno = $anno;
        $this->genere = $genere;
    }

    public function setPoster($poster)
    {
        $this->poster = $poster;
    }
    public function getPoster()
    {
        return $this->poster;
    }

    public function getMovieDetails()
    {
        return $this->titolo . '' . $this->anno . '' . $this->genere;
    }
}

class genere
{
    public $name;
    public function __construct($name)
    {
        $this->name = $name;
    }
}




?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>php-oop-1</title>
</head>

<body>

</body>

</html>