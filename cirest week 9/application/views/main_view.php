<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>University App Tutorial 9</title>
</head>
<body>
    <h1>List of Modules</h1>
    <div id="moduleList"></div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            // Fetch modules and display them
            $.ajax({
                type: 'GET',
                url: '<?php echo base_url("api/modules"); ?>',
                success: function(response) {
                    var modules = response;
                    var moduleList = $('#moduleList');
                    modules.forEach(function(module) {
                        moduleList.append('<p><a href="#" class="moduleLink" data-code="' + module.code + '">' + module.code + ' - ' + module.name + '</a></p>');
                    });
                },
                error: function(xhr, status, error) {
                    console.error(xhr.responseText);
                }
            });

            // Handle click event for module links
            $(document).on('click', '.moduleLink', function(event) {
                event.preventDefault();
                var moduleCode = $(this).data('code');
                $.ajax({
                    type: 'POST',
                    url: '<?php echo base_url("main/module_details"); ?>',
                    data: { module_code: moduleCode },
                    success: function(response) {
                        $('#moduleDetails').html(response);
                    },
                    error: function(xhr, status, error) {
                        console.error(xhr.responseText);
                    }
                });
            });
        });
    </script>
</body>
</html>
