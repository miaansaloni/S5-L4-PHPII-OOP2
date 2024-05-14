<?php

include_once __DIR__ . '/../interfaces/prestito.php';

// Implementa l'interfaccia Prestito
// l'attributo statico $contatoreMateriali che tiene traccia del numero totale di materiali nella biblioteca

abstract class MaterialeBibliotecario implements Prestito {
    public static $contatoreMateriali = 0;

    public function presta() {
        if (self::$contatoreMateriali > 0) {
            self::$contatoreMateriali--;
            echo "Materiale prestato.";
        } else {
            echo "Impossibile prestare materiale: nessun materiale disponibile.";
        }
    }

    public function restituisci()
    {
        self::$contatoreMateriali++;
    }
}