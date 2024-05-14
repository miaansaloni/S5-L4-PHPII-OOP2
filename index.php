<?php
include_once __DIR__ . '/classes/Libro.php';
include_once __DIR__ . '/classes/DVD.php';
include_once __DIR__ . '/classes/MaterialeBibliotecario.php';

// Test

// LIBRI
$libro1 = new Libro("Il signore degli anelli", "J.R.R. Tolkien", 1954);
$libro2 = new Libro("Harry Potter e la Pietra Filosofale", "J.K. Rowling", 1997);
$libro3 = new Libro("Cronache di Narnia", "C.S. Lewis", 1950);

// DVD
$dvd1 = new DVD("Inception", "Christopher Nolan", 2010);
$dvd2 = new DVD("Pulp Fiction", "Quentin Tarantino", 1992);
$dvd3 = new DVD("The Matrix", "Lana Wachowski, Lilly Wachowski", 1999);


echo "Numero totale di materiali nella biblioteca: " . MaterialeBibliotecario::$contatoreMateriali . "<br>";
// echo "Numero totale di libri nella biblioteca: " . Libro::contaLibri() . "<br>";
// echo "Numero totale di DVD nella biblioteca: " . DVD::contaDVD() . "<br>";
?>
