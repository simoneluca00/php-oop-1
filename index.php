<?php

// 1) NOTE creazione classe Movie
class Movie {
    public $title;
    public $year;
    public $originalLanguage;
    public $direction;
    public $rentalPrice;

    // 2) NOTE impostazione del costruttore
    public function __construct($_title, $_year, $_originalLanguage, $_direction) {
        $this -> title = $_title;
        $this -> year = $_year;
        $this -> originalLanguage = $_originalLanguage;
        $this -> direction = $_direction;
        $this -> setRentalPrice($_year);
    }

    // 3) NOTE funzione che stabilisce il prezzo per il noleggio
    public function setRentalPrice( $year ){
        if ($year < 2020) {
            $this->rentalPrice = 20;
        } else {
            $this->rentalPrice = 30;
        }
    }

    // 4) NOTE funzione che restituisce il valore della proprietà "rentalPrice"
    public function getRentalPrice(){
        return $this->rentalPrice;
    }
}

// 5) NOTE istanza per "The Wolf Of Wall Street"
$TheWolfOfWallStreet = new Movie("The Wolf Of Wall Street", 2013, "English", "Martin Scorsese");

// 5) NOTE istanza per "È stata la mano di Dio"
$eStataLaManoDiDio = new Movie("È stata la mano di Dio", 2021, "Italian", "Paolo Sorrentino");


// 6) NOTE utilizzare metodo della classe per stabilire il prezzo --> invece di impostarlo in questo modo è possibile attivare la funzione direttamente nel construct
// $TheWolfOfWallStreet -> setRentalPrice( $TheWolfOfWallStreet -> year );
// $eStataLaManoDiDio -> setRentalPrice( $eStataLaManoDiDio -> year );

// 7) NOTE stampa dei valori per "The Wolf Of Wall Street"

echo "<p>" . 
        "1) Il film " . $TheWolfOfWallStreet -> title . ", uscito nel " . $TheWolfOfWallStreet -> year . " e diretto da " . $TheWolfOfWallStreet -> direction . ", ha un prezzo di " . $TheWolfOfWallStreet -> getRentalPrice() . "€;" .
    "</p>";

// 7) NOTE stampa dei valori per "È stata la mano di Dio"
echo "<p>" . 
        "2) Il film " . $eStataLaManoDiDio -> title . ", uscito nel " . $eStataLaManoDiDio -> year . " e diretto da " . $eStataLaManoDiDio -> direction . ", ha un prezzo di " . $eStataLaManoDiDio -> getRentalPrice() . "€;" .
    "</p>";


?>