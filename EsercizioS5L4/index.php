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
        self::$contatoreMateriali--;
    }

    public function restituisci()
    {
        self::$contatoreMateriali++;
    }
}


class Libro extends MaterialeBibliotecario
{
    public static $contaLibri = [];
    public static $libriPrestati = [];
    public $titolo;
    public $autore;
    public $annoPubblicazione;

    public function __construct($titolo, $autore, $annoPubblicazione)
    {
        $this->titolo = $titolo;
        $this->autore = $autore;
        $this->annoPubblicazione = $annoPubblicazione;
        parent::$contatoreMateriali++;
        self::$contaLibri[] = $this;
    }

    public function presta()
    {
        parent::$contatoreMateriali--;
        self::$libriPrestati[] = $this;
        $index = array_search($this, self::$contaLibri, true);
        if ($index !== false) {
            array_splice(self::$contaLibri, $index, 1);
        }
    }

    public function restituisci()
    {
        if (!in_array($this, self::$libriPrestati, true)) {
            echo "Impossibile restituire il libro '{$this->titolo}' perché non è stato prestato.";
            return;
        }

        parent::$contatoreMateriali++;
        self::$contaLibri[] = $this;
        $index = array_search($this, self::$libriPrestati, true);
        if ($index !== false) {
            array_splice(self::$libriPrestati, $index, 1);
        }
    }
}

class DVD extends MaterialeBibliotecario
{
    public static $contaDVD = [];
    public static $dvdPrestati = [];
    public $titolo;
    public $regista;
    public $annoPubblicazione;

    public function __construct($titolo, $regista, $annoPubblicazione)
    {
        $this->titolo = $titolo;
        $this->regista = $regista;
        $this->annoPubblicazione = $annoPubblicazione;
        parent::$contatoreMateriali++;
        self::$contaDVD[] = $this;
    }

    public function presta()
    {
        parent::$contatoreMateriali--;
        self::$dvdPrestati[] = $this;
        $index = array_search($this, self::$contaDVD, true);
        if ($index !== false) {
            array_splice(self::$contaDVD, $index, 1);
        }
    }

    public function restituisci()
    {
        if (!in_array($this, self::$dvdPrestati, true)) {
            echo "Impossibile restituire il DVD '{$this->titolo}' perché non è stato prestato.";
            return;
        }

        parent::$contatoreMateriali++;
        self::$contaDVD[] = $this;
        $index = array_search($this, self::$dvdPrestati, true);
        if ($index !== false) {
            array_splice(self::$dvdPrestati, $index, 1);
        }
    }
}

$l1 = new Libro("Harry Potter", "J.K. Rowling", 1997);
$d1 = new DVD("Pulp Fiction", "Quentin Tarantino", 1994);
$l2 = new Libro("Il Signore degli Anelli", "J.R.R. Tolkien", 1954);
$d2 = new DVD("Il Re", "Quentin Tarantino", 1994);
$l3 = new Libro("Il Re", "Quentin Tarantino", 1994);
$d3 = new DVD("Il Re", "Quentin Tarantino", 1994);

// $d1->presta();
$d1->restituisci();

echo "<br>";
echo "Tot Libri = " . count(Libro::$contaLibri);
echo "<br>";
echo "Tot DVD = " . count(DVD::$contaDVD);
echo "<br>";
echo "<h2>TOTALONE: " . MaterialeBibliotecario::$contatoreMateriali . "</h2>";
