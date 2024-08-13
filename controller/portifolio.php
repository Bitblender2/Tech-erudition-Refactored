<?php

require_once 'include/db.php';
require_once 'include/function.php';

$data = getData($db);




$heading = "Portfolio";
$description = "Check out our projects down below, if you have any interest in any do contact us for further questions";

require_once 'include/header.php';
require_once 'include/nav.php';
require_once 'include/heading.php';
require_once 'view/portifolio.view.php';
require_once 'include/footer.php';
