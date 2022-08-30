<?php

declare (strict_types = 1);

class Movie
{
    private $actors;

    public function setActorsName(array $actors): void
    {
        $this->actors = $actors;
    }

    public function getActorsName(): string
    {
        echo "The name of actors are : \n <br>";
        foreach ($this->actors as $actor) {
            echo $actor . "<br>\n";
        }
    }
}

$movie1 = new Movie();
$movie1->setActorsName(['Jhon','Mary','George']);
$movie1->getActorsName();
