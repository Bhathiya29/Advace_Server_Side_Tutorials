<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script>
    $(document).ready(function() {
        $.ajax({
            type: 'GET',
            url: 'controller/get_all_celebrities',
            success: function(response) {
                var celebrities = JSON.parse(response);
                var list = '<ul>';
                $.each(celebrities, function(index, celebrity) {
                    list += '<li><a href="#" class="celebrityLink" data-name="' + celebrity.name + '">' + celebrity.name + '</a></li>';
                });
                list += '</ul>';
                $('#celebrityList').html(list);
            }
        });
        
        $(document).on('click', '.celebrityLink', function(event) {
            event.preventDefault();
            var name = $(this).data('name');
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

    <title>Celebrity Listing</title>
</head>
<body>
    <div id="celebrityList"></div>
    <div id="result"></div>
</body>
</html>