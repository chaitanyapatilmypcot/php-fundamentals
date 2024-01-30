<?php 

$config = require ('config.php');
$db = new Database($config['databases']);

$header = "Note";


$id = $_GET['id'];

//Query
$query = "SELECT * FROM notes where id = ?";

//Initialize & results
$notesResult = $db->query($query, [$id]);
$note = mysqli_fetch_assoc($notesResult);

// dd($notes);

require "views/note.view.php";