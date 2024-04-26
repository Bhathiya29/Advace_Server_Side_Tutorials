<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Module Details - Tutorial 9</title>
</head>
<body>
    <h1>Module Details</h1>
    <p>Module Code: <?php echo $module_code; ?></p>
    <div id="studentsList"></div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            // Fetch students for the module and display them
            $.ajax({
                type: 'GET',
                url: '<?php echo base_url("api/modules/details/") ?>' + '<?php echo $module_code; ?>',
                success: function(response) {
                    var students = response.students;
                    var studentsList = $('#studentsList');
                    studentsList.append('<h2>Students Registered</h2>');
                    students.forEach(function(student) {
                        studentsList.append('<p>' + student.name + '</p>');
                    });
                },
                error: function(xhr, status, error) {
                    console.error(xhr.responseText);
                }
            });
        });
    </script>
</body>
</html>
