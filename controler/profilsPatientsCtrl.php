<?php

$patients = new patients();

if (isset($_GET['id'])) {
    $patients->id = $_GET['id'];
}

/* Regex */
$regexName = '/^[A-Za-zàèìòùÀÈÌÒÙáéíóúýÁÉÍÓÚÝâêîôûÂÊÎÔÛãñõÃÑÕäëïöüÿÄËÏÖÜŸçÇßØøÅåÆæœ° \'\-]+$/';
$regexbirthdate = '/^[0-9]{4}-[0-9]{2}-[0-9]{2}/';
$regexPhone = '/^0[1-9][0-9]{8}/';
$regexMail = '/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/';
/* Variable form error */
$formError = array();

if (isset($_POST['submit'])) {

    /* verification input lastname */
    if (!empty($_POST['lastname'])) {
        if (preg_match($regexName, $_POST['lastname'])) {
            $patients->lastname = htmlspecialchars($_POST['lastname']);
        } else {
            $formError['lastname'] = 'Lastname invalid';
        }
    }

    /* verification input firstname */
    if (!empty($_POST['firstname'])) {
        if (preg_match($regexName, $_POST['firstname'])) {
            $patients->firstname = htmlspecialchars($_POST['firstname']);
        } else {
            $formError['firstname'] = 'Firstname invalid';
        }
    }

    /* verification input birthdate */
    if (!empty($_POST['birthdate'])) {
        if (preg_match($regexbirthdate, $_POST['birthdate'])) {
            $patients->birthdate = htmlspecialchars($_POST['birthdate']);
        } else {
            $formError['birthdate'] = 'Birthdate invalid';
        }
    }

    /* verification input phone */
    if (!empty($_POST['phone'])) {
        if (preg_match($regexPhone, $_POST['phone'])) {
            $patients->phone = htmlspecialchars($_POST['phone']);
        } else {
            $formError['phone'] = 'Phone number invalid';
        }
    }

    /* verification input mail */
    if (!empty($_POST['mail'])) {
        if (preg_match($regexMail, $_POST['mail'])) {
            $patients->mail = htmlspecialchars($_POST['mail']);
        } else {
            $formError['mail'] = 'Mail address invalid';
        }
    }

    if (count($formError) == 0) {
        $updatePatients = $patients->updatePatients();
    }
}

$showEachPatients = $patients->getEachPatients();
