<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Word Definitions</title>
    <script src="https://code.jquery.com/jquery-3.7.1.js" crossorigin="anonymous"></script>
</head>
<body>
    <h2>Word Definitions</h2>
    <form id="wordForm">
        <label for="word">Enter a Word:</label>
        <input type="text" id="word" name="word">
        <button type="submit" id="submitWord">Get Definition</button>
    </form>

    <div id="definition"></div>

    <script>
        $(document).ready(function () {
            $('#wordForm').submit(function (e) {
                e.preventDefault();
                var word = $('#word').val();
                $.ajax({
                    type: 'POST',
                    url: '<?php echo base_url("word/get_definition"); ?>',
                    data: {word: word},
                    success: function(response) {
                        $('#definition').text(response);
                    },
                    error: function() {
                        alert('Error fetching definition.');
                    }
                });
            });
        });
    </script>
</body>
</html>
