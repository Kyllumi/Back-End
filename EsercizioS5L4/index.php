<?php

interface Prestito
{
    public function presta();
    public function restituisci();
}


abstract class MaterialeBibliotecario implements Prestito
{
    public static $contatoreMateriali = 0;

    public function presta()
    {
        return self::$contatoreMateriali--;
    }
    public function restituisci()
    {
        return self::$contatoreMateriali++;
    }
}


class Libro extends MaterialeBibliotecario
{
    const type = "libro";
    public static $contaLibri = 0;
    public $titolo;
    public $autore;
    public $annoPubblicazione;

    public function __construct($titolo, $autore, $annoPubblicazione)
    {
        $this->titolo = $titolo;
        $this->autore = $autore;
        $this->annoPubblicazione = $annoPubblicazione;
        parent::$contatoreMateriali++;
        self::$contaLibri++;
    }

    public function presta()
    {
        parent::$contatoreMateriali--;
        self::$contaLibri--;
    }

    public function restituisci()
    {
        parent::$contatoreMateriali++;
        self::$contaLibri++;
    }
}

class DVD extends MaterialeBibliotecario
{
    const type = "dvd";
    public static $contaDVD = 0;
    public $titolo;
    public $regista;
    public $annoPubblicazione;

    public function __construct($titolo, $regista, $annoPubblicazione)
    {
        $this->titolo = $titolo;
        $this->regista = $regista;
        $this->annoPubblicazione = $annoPubblicazione;
        parent::$contatoreMateriali++;
        self::$contaDVD++;
    }

    public function restituisci()
    {
        parent::$contatoreMateriali++;
        self::$contaDVD++;
    }

    public function presta()
    {
        parent::$contatoreMateriali--;
        self::$contaDVD--;
    }
}

$l1 = new Libro("Harry Potter", "J.K. Rowling", 1997);
$d1 = new DVD("Pulp Fiction", "Quentin Tarantino", 1994);
$l2 = new Libro("Il Signore degli Anelli", "J.R.R. Tolkien", 1954);
$d2 = new DVD("Il Re", "Quentin Tarantino", 1994);
$l3 = new Libro("Il Re", "Quentin Tarantino", 1994);
$d3 = new DVD("Il Re", "Quentin Tarantino", 1994);


echo "<br>";
echo "Tot Libri = " . Libro::$contaLibri;
echo "<br>";
echo "Tot DVD = " . DVD::$contaDVD;
echo "<br>";
echo "TOTALONE: " . MaterialeBibliotecario::$contatoreMateriali;

