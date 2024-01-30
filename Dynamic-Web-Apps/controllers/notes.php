<?php 

$config = require ('config.php');
$db = new Database($config['databases']);

$header = "My Notes";

$query = "SELECT * FROM notes where user_id = 1";

$notesResult = $db->query($query);
$notes = mysqli_fetch_all($notesResult, MYSQLI_ASSOC);

// dd($notes);

require "views/notes.view.php";