<?php

require_once 'include/db.php';
require_once 'include/function.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id'])) {
    // Call the function to get the project data
    $project = getProjectById($db, $_POST['id']);
}

$heading = "Project";
$description = "<p><span><a href='./portifolio'>Portfolio</a></span>/" . htmlspecialchars($project['title']) . "</p>";


// Close the database connection if necessary


require_once 'include/header.php';
require_once 'include/nav.php';
require_once 'include/heading.php';
require_once 'view/project.view.php';
require_once 'include/footer.php';
