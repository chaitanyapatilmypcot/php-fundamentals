<?php 

$config = require ('config.php');
$db = new Database($config['databases']);

$header = "Note";


$id = $_GET['id'];

$currentUserId = 1;


//Query
$query = "SELECT * FROM notes where id = ?";

//Initialize & results
$notesResult = $db->query($query, [$id]);


$note = mysqli_fetch_assoc($notesResult);


// print_r($note);
// exit();

if (!$note) {
    abort(404);
}

if ( $note['user_id'] !== $currentUserId) {
    abort(403);
}


// dd($note);

// dd($notes);

require "views/note.view.php";