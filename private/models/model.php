<?php
// Model functions
// In dit bestand zet je ALLE functions die iets met data of de database doen

// Model functions
// In dit bestand zet je ALLE functions die iets met data of de database doen



function getAllBlogs() {
	$connection = dbConnect();
	$sql        = "SELECT * FROM `blogs`";
	$statement  = $connection->query( $sql );
	return $statement->fetchAll();
 }
 function searchBlogs($search){
    $sql = "SELECT * FROM `blogs` WHERE `titel` LIKE :search";
    $connection = dbConnect();
    $statement = $connection->prepare( $sql );
    $params = [
        'search' => '%' . $search . '%'
    ];
    $statement->execute($params);
    return $statement->fetchAll();

 }
 


