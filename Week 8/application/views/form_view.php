<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script>
        // jQuery event handler
        $(document).ready(function() {
            $('#submitBtn').click(function(event) {
            event.preventDefault();
            alert('Button clicked!');
    });
});

    // Updated jQuery event handler with AJAX call
        $(document).ready(function() {
            $('#submitBtn').click(function(event) {
                event.preventDefault();
                var name = $('#celebrityName').val();
                $.ajax({
                    type: 'POST',
                    url: 'controller/get_celebrity_info',
                    data: { name: name },
                    success: function(response) {
                        var data = JSON.parse(response);
                        var image = '<img src="' + data.url + '" alt="' + data.name + '">';
                        var films = '<ul>';
                        $.each(data.films, function(index, film) {
                            films += '<li>' + film + '</li>';
                        });
                        films += '</ul>';
                        $('#result').html(image + films);
                    }
                });
            });
    });
    </script>
    <title>Tutorial 8 </title>
</head>
<body>
<form id="celebrityForm">
    <input type="text" id="celebrityName" placeholder="Enter celebrity name">
    <button type="submit" id="submitBtn">Submit</button>
</form>
<div id="result"></div>
</body>
</html>