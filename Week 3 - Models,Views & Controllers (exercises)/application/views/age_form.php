<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Enter Date of Birth</title>
</head>
<body>
    <h2>Enter Your Date of Birth</h2>
    <?php echo form_open('agecalculator/calculate_age'); ?>
        <input type="date" name="dob" required>
        <button type="submit">Submit</button>
    <?php echo form_close(); ?>
</body>
</html>
