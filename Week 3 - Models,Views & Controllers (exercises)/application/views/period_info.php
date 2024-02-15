<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tutorial3 - Dinosaurs</title>
</head>
<body>
<h2><?php echo $period_info ? $period_info['land_animals'] : 'Period Information Not Found'; ?></h2>
    <p>Land Animals: <?php echo $period_info ? $period_info['land_animals'] : 'N/A'; ?></p>
    <p>Marine Animals: <?php echo $period_info ? $period_info['marine_animals'] : 'N/A'; ?></p>
    <p>Avian Animals: <?php echo $period_info ? $period_info['avian_animals'] : 'N/A'; ?></p>
    <p>Plant Life: <?php echo $period_info ? $period_info['plant_life'] : 'N/A'; ?></p>
</body>
</html>