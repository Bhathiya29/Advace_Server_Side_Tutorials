<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Module Mark Calculator</title>
</head>
<body>
    <h2>Module Mark Calculator</h2>
    <?php 
    if ($_SERVER['REQUEST_METHOD']=='POST'){
        // colletcting the marks from the form and storing them in variables
        $cw1=$_POST['cw1'];
        $cw2=$_POST['cw2'];

        if($cw1>=0 && $cw1<=100 && $cw2>=0 && $cw2<=100){
            // calculating the average of the two coursework marks
           $average=(($cw1*0.4)+($cw2*0.6));
           echo "<h3>The Overall Module Mark is $average</h3>";
        }else{
            echo"<h3>Invalid inputs, please enter valid results</h3>";
        }
        }else{
            echo "<h3>Form not submitted, please submit again</h3>";
        }
    
    
    
    ?>
</body>
</html>


