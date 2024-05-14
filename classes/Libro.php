<?php

include_once __DIR__ . '/MaterialeBibliotecario.php';

class Libro extends MaterialeBibliotecario {
    private $titolo;
    private $autore;
    private $annoPubblicazione;

    public function __construct($titolo, $autore, $annoPubblicazione) {
        $this->titolo = $titolo;
        $this->autore = $autore;
        $this->annoPubblicazione = $annoPubblicazione;
        self::$contatoreMateriali++;
    }

    // metodo statico che restituisce il valore dell'attributo
    // statico $contatoreMateriali della classe astratta MaterialeBibliotecario.
    // Tiene traccia del numero totale di libri presenti nella biblioteca.
    public static function contaLibri() {
        return self::$contatoreMateriali;
    }
}
?>
