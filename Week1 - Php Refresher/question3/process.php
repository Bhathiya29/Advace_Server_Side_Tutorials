<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BOOK DATABSE</title>
</head>
<body>
    <h1>Welcome to the BOOK DATABASE</h1>
    <h2>Here are your search results</h2>

    <?php
    
    #checking if the form has been submitted
    if(isset($_POST['submit'])){
        #getting the search term user searched
        $term = $_POST['title'];

        #connecting to the database
        $servername='localhost';
        $username='root';
        $password='';
        $dbname = 'test';

        $conn = new mysqli($servername,$username,$password,$dbname);

        #checking if the connection was successful
        if($conn->connect_error){
            die('Connection failed: '.$conn->connect_error);
        }

        #writing the query to search the database
        $sql = "SELECT * FROM books WHERE title LIKE '%$term%'";

        #executing the query
        $result = $conn->query($sql);


        if($result->num_rows>0){
            echo"<h3> Matching Books </h3>";
            echo "<table border='1'>
                    <tr>
                        <th>Title</th>
                        <th>Author</th>
                        <th>Year of Publication</th>
                        <th>Price</th>
                    </tr>";
            while($row = $result->fetch_assoc()){
                echo "<tr>
                        <td>".$row['title']."</td>
                        <td>".$row['author']."</td>
                        <td>".$row['year_of_publication']."</td>
                        <td>".$row['price']."</td>
                    </tr>";
            }
            echo "</table>";
        }else {
            echo "<p>No matching books found</p>";
        }

        #closing the connection
        $conn->close();
    }
    ?>
</body>
</html>