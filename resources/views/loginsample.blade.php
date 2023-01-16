<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
    <div style="padding-top:150px;">
    <h1> CRUD SYSTEM </h1>
    <form action="{{url('/')}}/api/register" method="post">
        <input name="name" type="text" placeholder="Enter Name"><br><br>
        <input name="number" type="text" placeholder="Enter Number"><br><br>
        <input name="email" type="text" placeholder="Enter Email"><br><br>
        <input name="password" type="password" placeholder="Enter Password"><br><br>
        <input type="submit" value="Insert">
        <a href="{{url('/')}}/api/view"> <input type="button" value="View"> </a>
    </form><br><br>
    </div>
    </center>
</body>
</html>