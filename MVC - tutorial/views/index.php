<!DOCTYPE html>
<html>
<head>
    <title>Funny Lines</title>
</head>
<body>
    <h2>Add Funny Line</h2>
    <form action="index.php?action=add" method="post">
        <input type="text" name="line" placeholder="Enter a funny line">
        <input type="submit" value="Submit">
    </form>

    <h2>Funny Lines</h2>
    <ul>
    <?php foreach ($lines as $line): ?>
        <li>
            <?php echo $line['line']; ?>
            <a href="index.php?action=delete&id=<?php echo $line['id']; ?>">Delete</a>
        </li>
    <?php endforeach; ?>
    </ul>
</body>
</html>
