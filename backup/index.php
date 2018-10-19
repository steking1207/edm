<?php
include_once 'view/incl/classes.php';
include_once 'view/incl/startup.php';

$route = new Router(Request::uri());

if (strlen(Request::uri()) && !strlen($route->getParameter(1))) {
    header('Location:/');
    exit();
}

switch ($route->getParameter(1)) {
    case "appointment":
        include 'view/appointment.php';
        break;

    case "information":
        include 'view/information.php';
        break;

    case "privacy":
        include 'view/privacy.php';
        break;

    case "about":
        include 'view/about.php';
        break;

    case "contact":
        include 'view/contact.php';
        break;

    case "page":
        include 'view/page.php';
        break;

    case "demo":
        include 'view/demo.php';
        break;

    default:
        if (strlen($route->getParameter(1))) {
            header('Location:/');
            exit();
        } else {
            include 'view/home.php';
        }

        break;
}
?>
