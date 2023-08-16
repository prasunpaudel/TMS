<!DOCTYPE html>
<html>
<head>
    <title>Add Company</title>
</head>
<body>

<form id="addCompanyForm">
    @csrf
    <input type="text" name="name" placeholder="Company Name" value="">
    <input type="text" name="email" placeholder="Company Model">
    <button type="submit">Add Company</button>
</form>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        $('#addCompanyForm').submit(function(e) {
            e.preventDefault();

            // Define the form data to send in the Ajax request
            var formData = {
                name: $('input[name="name"]').val(),
                email: $('input[name="email"]').val(),
                _token: '{{ csrf_token() }}'
            }; 

            // $name = $_POST['name'];
            // $name = Session::get('name');

            $.ajax({
                type: 'POST',
                url: '{{ route("store") }}', // Replace with the correct route or URL
                data: formData,

                success: function(response) {
                    alert(response.message);
                    // Clear the form fields
                    // $('input[name="name"]').val('');
                    // $('input[name="model"]').val('');
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
