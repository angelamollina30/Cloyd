<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    
    <form action="{{ route('blog.store') }}" method="post">
       @csrf
        <label>First Name</label></br>
        <input type="text" name="FirstName" id="FirstName" class="form-control"></br>
        <label>Last Name</label></br>
        <input type="text" name="LastName" id="LastName" class="form-control"></br>
        <label>Contact No</label></br>
        <input type="text" name="ContactNo" id="ContactNo" class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
</body>
</html>