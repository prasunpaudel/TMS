<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Title</title>
</head>
<body>
    <table class="table table-primary table-striped table-hover table-bordered table-sm table-responsive-sm">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">name</th>
                <th scope="col">email</th>
                
            </tr>
        </thead>
        @foreach($tasks as $key=>$task)
        <tbody>
        <tr>
            <th scope="row">{{$task->id}}</th>
            
            <td>{{ $task->name }}</td>
            <td>{{ $task->email }}</td>
        </tr>
    </tbody>
    @endforeach
</table>
{{ $tasks->links() }}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>