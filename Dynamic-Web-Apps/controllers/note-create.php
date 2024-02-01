<?php 

$config = require ('config.php');
$db = new Database($config['databases']);   

$query = "INSERT INTO notes(body,user_id) VALUES(? , ?)";

$header = "Create Note";


    if ($_SERVER["REQUEST_METHOD"] === 'POST') {

        if (!empty($_POST['body'])) {
            $body = $_POST['body'];
            $user_id = 1;  
    
            $statement = mysqli_prepare($db->connection, $query);
            
            mysqli_stmt_bind_param($statement, "si", $body, $user_id);
    
            $success = mysqli_stmt_execute($statement);
                
            mysqli_stmt_close($statement);
           
        }
    }








    // $success = $db->query($query, [
    //     $_POST['body'],
    //     1 
    // ]);
    
 //dd($_SERVER);

require "views/note-create.view.php";