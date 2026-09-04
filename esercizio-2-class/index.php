<?php 

class Persona {
    public $nome;
    public $cognome;

    public function __construct(string $nome, string $cognome){
        $this->nome = $nome;
        $this->cognome = $cognome;

    }
    public function saluto(): string {
        return "Ciao, mi chiamo {$this->nome} {$this->cognome}";
    }
}

class Docente extends Persona {
    public $skills = [];
    public function __construct(string $nome, string $cognome, array $skills = []){
        parent::__construct($nome, $cognome);
        $this->skills = $skills;
    }
    public function saluto(): string{
        if(!empty($this->skills)){
            $lista_skills = implode(", ", $this->skills);
            return parent::saluto() . " e insegno {$lista_skills}.";
        }
        return parent::saluto() . ".";
    }
}

class Studente extends Persona {
    public $materie = [];
    public function __construct(string $nome, string $cognome, array $materie = []){
        parent::__construct($nome, $cognome);
        $this->materie = $materie;
    }

    public function saluto(): string{
        if(!empty($this->materie)){
            $lista_materie = implode(", ", $this->materie);
            return parent::saluto() . " e studio {$lista_materie}.";
        }
        return parent::saluto() . ".";
    }
}

$studente = new Studente("Francesco", "Cardullo", ["javascript", "php"]);
echo $studente->saluto() . "<br>";

$professore = new Docente("Michele", "Tedesco", ["javascript", "react", "php", "laravel"]);
echo $professore->saluto();
