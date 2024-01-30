<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <style>
            header {
                background : grey;
                padding : 2em;
                
            }
        </style>
    </head>


<body>
<header>
    <form action="" method="get">
        <label for="fname">First Name:</label>
        <input type="text" id="fname" name="fname"><br>
        <label for="lname">Last Name:</label>
        <input type ="text" id="lname" name="lname"><br>
        <button>submit</button>
    </form>


    <!-- <h1>
        <?php
// 1. variables
        $name = 'Chaitanya Patil';
        $greetings = 'Good afternoon!';

// 2. concate
        //echo "Good {$greetings}"
        echo "{$name}, {$greetings}";

// 3. $_GET
        
        $name = $_GET['fname'];

        echo "Hello, $name";
        ?>

    </h1> -->

<!-- 4. Dislay First Name & Last name from a form -->

    <!-- <h1>
        <?php
            echo "Hello, " . $_GET['fname'] . $_GET['lname']; 
        ?>
    </h1> -->

<!-- 5. Sanitize using htmlspecialchars()-->
    
    <!-- <h1> 
        <?php
            echo "Hello, " . htmlspecialchars($_GET['name']);
        ?>
    </h1> -->

<!-- 6. render only html and php in other file--> 
    
    <!-- <h1>
        <?= $greeting; ?>
    </h1>  -->

<!-- 7. display array on list tag-->
    <ul>
        <?php 
            foreach($names as $name) {
                echo "<li>$name</li>";
            } 
        ?>

        <?php 
            foreach ($animals as $animal) {
                echo "<li>$animal</li>";
            }
        ?>    
    </ul>

<!-- 8. Print associate array-->
    <ul>
        <?php 
            foreach ($persons as $feature => $val) {
                echo "<li><strong>ucwords($feature)</strong> : $val</li>";
            }
        ?>
    </ul>
        
 <!-- 8.1 Task : To do List-->

    <h1>Task of the Day</h1>
    <?= ucwords("this is chaitanya patil's to-do list. ") ?>

<!-- 8.2 Accessing each value by foreach -->
    <!-- <ul>
        
    <?php foreach ($task as $title => $value) :?>
            <li>
                <strong><?= ucwords($title)  ?>: </strong> 
                <?= $value ?>
            </li>

    <?php endforeach; ?>

    </ul> -->

<!-- 8.3 Accessing each value by separate and more control way -->

    <ul>

        <li>
            <strong>Name :</strong><?= $task['title']; ?>
        </li>

        <li>
            <strong>Due Date :</strong><?= $task['due']; ?>
        </li>

        <li>
            <strong>Personal Responsible :</strong><?= $task['assigned_to']; ?>
        </li>

        <li>
            <strong>Status: </strong><?= $task['completed'] ? 'Completed' : 'Incomplete'; ?>
        </li>

    </ul>

    </header>

<!-- 9. Functions and filtering -->
    <h1> Books Chaitanya Love's</h1>

    <?php
      
    ?>
 
    <ul> 
        <?php foreach (filterByAuthor($books, 'Andie Weir') as $book) : ?>
                
                    <li>
                        <a href="<?= $book['purchaseUrl'] ?>">
                            <?= $book['name']; ?> (<?= $book['releaseYear']; ?>) - By <?= $book['author'] ?>
                        </a>
                    </li>
                
        <?php endforeach; ?>
        
    </ul>
    

    
</body>
</html>