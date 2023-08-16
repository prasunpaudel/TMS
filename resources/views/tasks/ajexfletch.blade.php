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
    <div id="container"></div>
    
    {{-- ajax --}}
    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function(){
            $('#getdata').click(function(){
                $.ajax({
                    type:'get',
                    url:'{{ route("ajexFletchdata") }}',
                    dataType:"json",

                    success:function(data){
                        let dataContainer = $("#container");
                        dataContainer.empty();

                        data.forEach(function(el) {
                            dataContainer.append('<p>'+ el.name +'<p>');
                            dataContainer.append('<p>'+ el.email +'<p>');
                        });
                    },
                    error:function(error){
                        console.error(error);
                    }
                });
            });
        });
    </script>
</body>
</html>