<?php


function getData($db)
{
    $sql = "SELECT * FROM `project`";
    $result = $db->query($sql);
    $data = $result->fetch_all(MYSQLI_ASSOC);
    $result->free();
    return $data;
}


function project($db, $id)
{
    $sql = "SELECT * FROM `project` WHERE `id` = ?";
    $stmt = $db->prepare($sql);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();
    $project = $result->fetch_assoc();
    $stmt->free_result();
    $stmt->close();
    return $project;
}


function getProjectById($db, $id)
{
    // Sanitize the ID to ensure it's an integer
    $id = intval($id);

    // Prepare the SQL query
    $sql = "SELECT * FROM `project` WHERE `id` = ?";
    $stmt = $db->prepare($sql);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();

    // Fetch the project data
    $project = $result->fetch_assoc();

    // Free the result and close the statement
    $stmt->free_result();
    $stmt->close();

    // Return the project data
    return $project;
}
