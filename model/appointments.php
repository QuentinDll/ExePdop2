<?php

class appointments {

    //Liste des attributs
    private $connexion;
    public $id;
    public $dateHour;
    public $idPatients;

    /**
     * Méthode construct
     */
    public function __construct() {
        //On test les erreurs avec le try/catch 
        //Si tout est bon, on est connecté à la base de donnée
        try {
            $this->connexion = new PDO('mysql:host=localhost;dbname=hospitalE2N;charset=utf8', 'quentindll', 'first');
        }
        //Autrement, un message d'erreur est affiché
        catch (Exception $e) {
            die($e->getMessage());
        }
    }

    /**
     * Méthode pour modifier ajouter un rendez vous
     * @return type
     */
    public function addAppointments() {
        $result = $this->connexion->prepare('INSERT INTO `appointments`( `dateHour`, `idPatients`) VALUES ( :dateHour, :idPatients)');
        $result->bindValue(':dateHour', $this->dateHour, PDO::PARAM_STR);
        $result->bindValue(':idPatients', $this->idPatients, PDO::PARAM_INT);
        return $result->execute();
    }

    /**
     * Méthode pour modifier ajouter un rendez vous
     * @return type
     */
    public function checkIfAppointmentsExist() {
        
    }

    /**
     * Méthode pour  
     * @return type
     */
    public function getAppointmentsList() {
        $isObjectResult = array();
        $result = $this->connexion->prepare('SELECT `id`, `dateHours` FROM `appointments`;');
        if ($result->execute()) {
            $isObjectResult = $result->fetch(PDO::FETCH_OBJ);
        }
        return $isObjectResult;
    }

}
