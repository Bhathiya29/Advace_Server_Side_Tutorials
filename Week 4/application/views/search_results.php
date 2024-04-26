<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Results</title>
</head>
<body>
    <h1>Search Results</h1>
    <?php if ($movies !== false): ?>
        <ul>
        <?php foreach ($movies as $movie): ?>
            <li><?php echo $movie['title']; ?> - <?php echo $movie['director']; ?></li>
        <?php endforeach; ?>
        </ul>
    <?php else: ?>
        <p>No movies found for the specified genre.</p>
    <?php endif; ?>
</body>
</html>
