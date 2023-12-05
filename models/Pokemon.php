<?php
require_once('models/PokemonManager.php');

// Classe Pokemon
class Pokemon 
{
    private ?int $idPokemon;
    private string $nomEspece;
    private ?string $description;
    private string $typeOne;
    private ?string $typeTwo;
    private ?string $urlImg;

    // Constructeur de la classe Pokemon
    public function __construct(?int $idPokemon, string $nomEspece, ?string $description, ?string $typeOne, ?string $typeTwo, ?string $urlImg) {
        $this->idPokemon = $idPokemon;
        $this->nomEspece = $nomEspece;
        $this->description = $description;
        $this->typeOne = $typeOne;
        $this->typeTwo = $typeTwo;
        $this->urlImg = $urlImg;
    }

    // Getter de IdPokemon
    public function getIdPokemon() : ?int {
        return $this->idPokemon;
    }

    // Setter de IdPokemon
    public function setIdPokemon(int $idPokemon) {
        $this->idPokemon = $idPokemon;
    }

    // Getter de nomEspece
    public function getNomEspece() : string {
        return $this->nomEspece;
    }

    // Setter de nomEspece 
    public function setNomEspece(string $nomEspece) {
        $this->nomEspece = $nomEspece;
    }

    // Getter de Description
    public function getDescription() : ?string {
        return $this->description;
    }

    // Setter de Description
    public function setDescription(string $description) {
        $this->description = $description;
    }

    // Getter de typeOne
    public function getTypeOne() : ?string {
        return $this->typeOne;
    }

    // Setter de typeOne
    public function setTypeOne(string $typeOne) {
        $this->typeOne = $typeOne;
    }

    // Getter de typeTwo
    public function getTypeTwo() : ?string {
        return $this->typeTwo;
    }

    // Setter de typeTwo
    public function setTypeTwo(string $typeTwo) {
        $this->typeTwo = $typeTwo;
    }

    // Getter de urlImg
    public function getUrlImg() : ?string {
        return $this->urlImg;
    }

    // Setter de urlImg
    public function setUrlImg(string $urlImg) {
        $this->urlImg = $urlImg;
    }

    // Fonction permettant d'hydrater un objet Pokemon
    public function hydrate(array $donnees) {
        foreach ($donnees as $key => $value) {
            $method = 'set'.ucfirst($key);
            if (method_exists($this,$method)) {
                $this->$method($value);
            }
        }
    }
} 
?>