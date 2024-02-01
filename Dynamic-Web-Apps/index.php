    <?php 

    require "functions.php";

    require "Database.php";

    require "router.php";

    // Connect to Database and Excute the query

    

    // extract config from config.php 

    // $config = require ('config.php');
    // $db = new Database($config['databases']);




    // $id = $_GET['id'];
    // $query = "select * from posts where id = :id";
    $query = "select * from posts";

    // dd($query);

    // $posts = $db->query($query, [ ':id' => $id])->fetch();
    $postsResult = $db->query($query);
    $posts = mysqli_fetch_all($postsResult, MYSQLI_ASSOC);


    //use this otherb than dump and die
    // print_r($posts);exit;




    foreach($posts as $post) {
        echo "<p>" . $post['id'] . "</p>";
        echo "<li>" . $post['title'] . "</li>";
    }
 

