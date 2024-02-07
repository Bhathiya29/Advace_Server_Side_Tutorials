<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Marks</title>
</head>
<body>
    <h1>6COSC022W - Student Marks</h1>
    
    <h2>Students Who Received Over <?php echo $_POST['mark'];?></h2>

    <?php 
    $students_marks = array('Samwise Gamgee'=>88,'Frodo Baggins'=>56,'Elrond Half-Elven'=>92,"Gandalf Mithrandir" => 35,
    "Merry Brandybuck" => 41,
    "Pippin Took" => 25,
    "Legolas Greenleaf" => 67);

    $condition = $_POST['mark'];

    foreach($students_marks as $student_mark => $mark){
        if($mark >= $condition){
            echo"<p>$student_mark : $mark</p>";
        }
    }
    
    
    
    ?>
</body>
</html>