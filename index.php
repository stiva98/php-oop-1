<?php
    class Movie 
    {
        public $name;
        public $year;
        public $nationalite;
        public $genre;

        function __construct(
            $name, 
            $year, 
            $nationalite, 
            $genre
        )
        {
            $this -> name = $name;
            $this -> year = $year;
            $this -> nationalite = $nationalite;
            $this -> genre = $genre;
        }

        public function getFullDatesMovie () 
        {
            return $this -> name.' '.$this -> year.' '.$this -> nationalite.' '. $this -> genre.'<br>';
        }
    }

    $Oppenheimer = new Movie (
        'Oppenheimer', 
        2023, 
        'USA', 
        'Commedia'
    );
    $Barbie = new Movie (
        'Barbie', 
        2023, 
        'USA', 
        'Avventura'
    );

echo 'I dati sono: '.$Oppenheimer->getFullDatesMovie();
echo 'I dati sono: '. $Barbie->getFullDatesMovie();



