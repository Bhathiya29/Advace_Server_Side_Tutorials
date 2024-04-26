<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Movies</title>
</head>
<body>
    <h1>All Movies</h1>
    <ul>
    <?php foreach ($movies as $movie): ?>
        <li><?php echo $movie['title']; ?> - <?php echo $movie['director']; ?></li>
    <?php endforeach; ?>
    </ul>
</body>
</html>
