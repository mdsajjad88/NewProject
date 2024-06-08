<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arry type form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>
<body>
    <div class="container">
        <div class="row">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        @if(Session::has('success'))
        <p class="alert alert-success">{{ Session::get('success') }}</p>
        @endif

            <div class="col">
                <form action="{{url('datapost')}}" method="post" enctype="multipart/form-data">
                    @csrf 
                    <table class="table table-bordered" id="table">
                    <tr>
                        <td><b>Name</b></td>
                        <td><b>E-mail</b></td>
                        <td><b>Photo</b></td>
                        <td><b>Action</b> </td>
                    </tr>    
                    <tr>
                            <td><input type="text" name="inputs[0][name]" placeholder="Enter Your Name" class="form-control"></td>
                            <td><input type="email" name="inputs[0][email]" placeholder="Enter Your E-mail Address" class="form-control"></td>
                            <td><input type="text" name="inputs[0][photo]" class="form-control"></td>
                            <td><input type="button" class='btn btn-primary form-control' value="Add" id="add"></td>
                        </tr>
                    </table>
                   <input type="submit" value="Submit" class="btn btn-success">
                </form>
            </div>
        </div>
    </div>


    <script>
        var i = 0;
        $('#add').click(function(){
            ++i;
            $('#table').append(
                `<tr><td> <input type="text"  name="inputs[`+i+`][name]" placeholder="Enter Your Name" class="form-control"></td>
                <td> <input type="email"  name="inputs[`+i+`][email]" placeholder="Enter Your Email Address" class="form-control"></td>
                <td> <input type="text"  name="inputs[`+i+`][photo]"  class="form-control"></td>
                <td><input type="button" class="btn btn-danger remove-btn form-control" value="Remove"></td>
                </tr>`,
            );
        });
        $(document).on('click', '.remove-btn', function(){
            $(this).parents('tr').remove();
        });
    </script>
</body>
</html>