<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> Books Chaitanya Love's</h1>
 
    <ul> 
        <?php foreach ($filteredBooks as $book) : ?>
                
                    <li>
                        <a href="<?= $book['purchaseUrl'] ?>">
                            <?= $book['name']; ?> (<?= $book['releaseYear']; ?>) - By <?= $book['author'] ?>
                        </a>
                    </li>
                
        <?php endforeach; ?>
        
    </ul>


<!-- Task 2: Display movies released in 2000 or > 2000 -->
    
<h1>Chaitanya's favorite movies</h1>

<ul>
    <?php foreach ($filteredMovies as $movie) : ?> 
        <li>
        <?= $movie['name'] ?>
        </li>
    <?php endforeach; ?>
    
</ul>
</body>
</html>