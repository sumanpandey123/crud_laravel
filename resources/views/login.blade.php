<!DOCTYPE html>
<html lang="en">
<head>
   <style>
.maincontainer
{
 width: 100% ;
 height: 100vh ;
}
.sub1
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
   </style>
    <script type="text/javascript" src="script.js"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <div class="maincontainer">
      <div class="sub1">
      <center>
            <h1 class="fonthead"> CRUD (CREATE) </h1>
         <form action="{{url('/')}}/api/register" method="post">
            <table>
               <tr>
                  <label class="fontnormal"> Name </label>
               </tr> &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;
               <tr>
                  <input type="text" name="name" placeholder="Enter The Name">
               </tr> <br><br><br>
               <tr>
                  <label class="fontnormal"> Number </label>
               </tr> &ensp;&ensp;&emsp;
               <tr>
                  <input type="text" name="number" placeholder="Enter The Number">
               </tr> <br><br><br>
               <tr>
                  <label class="fontnormal"> Email </label>
               </tr> &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;
               <tr>
                  <input type="email" name="email" placeholder="Enter The Email">
               </tr> <br><br><br>
               <tr>
                  <label class="fontnormal"> Password</label>
               </tr> &ensp;&ensp;&ensp;
               <tr>
                  <input type="password" name="password" placeholder="Enter The Password">
               </tr> <br><br><br>
               <tr>
                  <input style="padding: 0px 20px 0px 20px ;" type="submit" value="Insert"> &emsp;
                  <a href="{{url('/')}}/api/view"><input style="padding: 0px 20px 0px 20px ;" type="button" value="View"></a>
               </tr>
            </table>
         </form>
      </center>
      </div>
   </div>
</body>
</html>