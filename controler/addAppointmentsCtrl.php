<?php

// instentiation
$appointment = new appointments();
$addAppointment = $appointment->addAppointments();
// regex
$regDate = '/([0-9]{4})\-(([0]{1}[0-9]{1})|([1]{1}[0-2]{1}))\-(([0-2]{1}[0-9]{1})|([3]{1}[0-1]))/';
$regHour = '/(([0-1]{1}[0-9]{1})|([2]{1}[0-3]{1}))\:([0-5]{1}[0-9]{1})/';

$insertSuccess = false;
// form error
$formError = array();

// verif
if (isset($_POST['submit'])) {
    if (!isset($_POST['date']) && !preg_match($regDate, $_POST['date'])) {
        $formError['date'] = 'Veuillez vérifier votre date';
    }
    if (!isset($_POST['hour']) && !preg_match($regHour, $_POST['hour'])) {
        $formError['hour'] = 'Veuillez vérifier votre heure';
    }
    // si le post'select-patient' n'est pas vides 
    if (!empty($_POST['select-patient'])) {
        if (!is_nan($_POST['select-patient'])) {
            $appointment->id = htmlspecialchars($_POST['select-patient']);
        } else {
            $formError['idPatients'] = 'Ce patients est invalide';
        }
    } else {
        $formError['idPatients'] = 'Veuillez renseigner un patient';
    }
    if (count($formError) == 0) {
        $appointment->dateHour = $_POST['date'] . ' ' . $_POST['hour'];
        $appointment->idPatients = $_POST['select-patient'];
        if ($appointment->addAppointments()) {
            $insertSuccess = true;
            $appointment->idPatients = '';
            $appointment->submit = '';
        }
    }
}
$getAppointmentsList = $appointment->getAppointmentsList();
