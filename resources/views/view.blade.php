<!DOCTYPE html>
<html lang="en">
<head>
   <style>
.maincontainer
{
 width: 100% ;
 height: 100vh ;
}
.sub2
{
 width: 100% ;
 height: 100vh ;
 background-color: #232242 ;
 border-width: 60px 20px 40px 20px ;
 border-style: solid;
 border-color: #36364B ;
}
.fonthead
{
    color: white;
    font-family: Calibri;
    font-size: 2.5em;
}
.fontsubhead
{
    color: white;
    font-family: Calibri;
    font-size: 1.5em;
}
.fontnormal
{
    color: white;
    font-family: Calibri;
    font-size: 1.0em;
}
::placeholder { /* Chrome, Firefox, Opera, Safari 10.1+ */
    color: black;
    opacity: 0.5; /* Firefox */
  }
  table, th, td {
  border: 1px solid;
  color:white;
  padding: 15px;
}
   </style>
    <script type="text/javascript" src="script.js"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <div class="maincontainer">
   <div class="sub2">
      <center> <h1 class="fonthead"> CRUD (VIEW) </h1>
      <form>
            <table>
               <tr>
                  <th class="fontnormal">ID</th>
                  <th class="fontnormal">NAME</th>
                  <th class="fontnormal">NUMBER</th>
                  <th class="fontnormal">EMAIL</th>
                  <th class="fontnormal">PASSWORD</th>
                  <th class="fontnormal">ACTION</th>
               </tr>
               @foreach ($users as $check)
               <tr>
                  <td>{{ $check['id'] }}</td>
                  <td>{{ $check['name'] }}</td>
                  <td>{{ $check['number'] }}</td>
                  <td>{{ $check['email'] }}</td>
                  <td>{{ $check['password'] }}</td>
                  <td><a href="{{ url('/api/update/'.$check->id)}}">Edit</a> / <a href="{{ url('/api/delete/'.$check->id)}}">Delete</a></td>
               </tr>
               @endforeach
            </table>
         </form>
      </center>
      </div>
   </div>
</body>
</html>