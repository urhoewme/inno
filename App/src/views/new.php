<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
<h1>Sign Up Form</h1>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
<form action="/users/create" method="post">
    <div class="form-group">
        <label for="exampleFormControlInput1">Email address</label>
        <input name="email" type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
        <label for="exampleFormControlInput1">Name</label>
        <input name="name" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Patrick">
    </div>
    <div class="form-group">
        <label for="exampleFormControlSelect1">Example select</label>
        <select name="gender" class="form-control" id="exampleFormControlSelect1">
            <option>Male</option>
            <option>Female</option>
        </select>
        <label for="exampleFormControlSelect1">Example select</label>
        <select name="status" class="form-control" id="exampleFormControlSelect1">
            <option>Active</option>
            <option>Inactive</option>
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
</body>
</html>