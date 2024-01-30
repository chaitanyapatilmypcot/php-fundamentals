<?php

// Connect to Database and Excute the query

class Database {

public $connection;

public function __construct($config, $username = 'root', $password = '') { 

    //1. 
    //$dsn = 'mysql:' . http_build_query($config, '', ';');

    // OR $dsn = "mysql:host={$config['host']};port={$config['port']};dbname={$config['dbname']};user=root;charset={$config['charset']}";

    //2.
    // $this->connection = new PDO($dsn, $username, $password, [
    //     PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    // ]);   

    $this->connection =  mysqli_connect($config['host'], $username, $password, $config['dbname']);

    if (!$this->connection) {
        die("Connection failed: " . mysqli_connect_error());
    }
}


public function query($query, $params = [] ) {
    
    //3.
    //$statement = $this->connection->prepare($query);

    $statement = mysqli_prepare($this->connection, $query);

    if(!$statement) {
        die("Error in preparing Statement: " . mysqli_error($this->connection));
    }

    if (!empty($params)) {
        $this->bindParams($statement, $params);  //to bind parameters to the prepared statement dynamically.
    }


    //4.
    //$statement -> execute($params);

    $success =  mysqli_stmt_execute($statement);

    if (!$success) {
        die("Error in executing statement: " . mysqli_stmt_error($statement));
    }

    $result = mysqli_stmt_get_result($statement);

    if (!$result) {
        die("Error in getting result: " . mysqli_stmt_error($statement));
    }


    return $result;
    
}


































private function bindParams($statement, $params) {
    $types = "";
    $bindParams = [];

    foreach ($params as $param) {
        if (is_int($param)) {
            $types .= "i";
        } elseif (is_double($param)) {
            $types .= "d";
        } else {
            $types .= "s";
        }

        $bindParams[] = &$param;
    }

    array_unshift($bindParams, $statement, $types);

    call_user_func_array('mysqli_stmt_bind_param', $bindParams);
}
}
 



?>