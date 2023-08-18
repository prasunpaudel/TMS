<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <button id="getdata">Get</button>
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody id="container"></tbody>
    </table>
    
    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function(){
            $('#getdata').click(function(){
                $.ajax({
                    type: 'get',
                    url: '{{ route("ajexFletchdata") }}',
                    dataType: 'json',
    
                    success: function(response) {
                        let dataContainer = $("#container");
                        dataContainer.empty();
    
                        response.datas.forEach(function(task) {
                            // Create a table row for each task with the task's ID as the row ID
                            let row = $('<tr>').attr('id', 'task-' + task.id);
                            row.append($('<td>').text(task.name));
                            row.append($('<td>').text(task.email));
                            dataContainer.append(row);
                        });
                    },
                    error: function(error) {
                        console.error(error);
                    }
                });
            });
        });
    </script>
</body>
</html>
