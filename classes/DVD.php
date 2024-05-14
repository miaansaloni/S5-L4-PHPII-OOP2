<?php

include_once __DIR__ . '/MaterialeBibliotecario.php';

class DVD extends MaterialeBibliotecario {
    private $titolo;
    private $regista;
    private $annoPubblicazione;

    public function __construct($titolo, $regista, $annoPubblicazione) {
        $this->titolo = $titolo;
        $this->regista = $regista;
        $this->annoPubblicazione = $annoPubblicazione;
    }

    // metodo statico che restituisce il valore dell'attributo
    // statico $contatoreMateriali della classe astratta MaterialeBibliotecario.
    // Tiene traccia del numero totale di DVD presenti nella biblioteca.
    public static function contaDVD() {
        return self::$contatoreMateriali;
    }
}
?>
