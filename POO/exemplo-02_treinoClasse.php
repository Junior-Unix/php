<?php

class escola{

    private $materia;
    private $professor;

    public function getMateria(){
        return $this->materia;
    }
    public function setMateria($materia){
        $this->materia = $materia;
    }

    public function getProfessor(){
        return $this->professor;
    }
    public function setProfessor($professor){
        $this->professor = $professor;
    }

    public function listar(){
        return array(
            "Matéria"=>$this->getMateria(),
            "Professor"=>$this->getProfessor(),
        );
    }
}

$classe1 = new escola();
$classe1->setProfessor("Professor Nelson.");
$classe1->setMateria("Portugues");

$classe2 = new escola();
$classe2->setProfessor("Professor Maicon de Oliveira Sabino.");
$classe2->setMateria("Química");

$classe3 = new escola();
$classe3->setProfessor("Professora Lilian Marina Koptian.");
$classe3->setMateria("Artes.");

$classe4 = new escola();
$classe4->setProfessor("Professor Andre Nicollay Mussak.");
$classe4->setMateria("Sociologia.");


print_r($classe1->listar());

?>