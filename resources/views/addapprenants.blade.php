

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Document</title>
    <style>
 body{   
        background: white;
        margin: 0;
        }
 ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}
li {
  float: left;
}
li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}
li a:hover {
  background-color: #111;
}
.myDiv {
  border: 3px outset black;
  background-color: white;    
  text-align: center;
  width: 40%;
  height: 40%;
  margin: 0 auto;
  left: 34%;
}
button{
    width:30%;
    height:100%;
    border: 3px outset black;
    background-color: black;    
    color: white;
  }
@media  (max-width: 800px) {
    .myDiv {
  border: 3px outset black;
  background-color: white;    
  text-align: center;
  height: 40%;
  width: 70%;
  position: static;
  margin-top:200px; 
  padding: 10px;
  }
  input{
    width:20%;
    height:100%;
    border: 3px outset black;
    background-color: white;    
    color: white;
  }
  h2{
    font-size: 20px;
  }
  button{
    width:30%;
    height:100%;
    border: 3px outset black;
    background-color: black;    
    color: white;
  }
}
form{
    padding-left: 10px;
}
@media only screen and (min-width: 800px) {
.myDiv {
    border: 3px outset black;
  background-color: white;    
  text-align: center;
  height: 40%;
  width: 70%;
  position: static;
  margin-top:150px; 
  
}.inp{
    text-align: center; 
}
form{
    padding-left: 100px;
}
a:hover{
    text-decoration: none;
    color: white;
}
}
  /* Black */
  
    </style>
</head>
<body>

    <ul>
        <li><a href="/index" style="margin-left:100px;margin-top:2px;" class="a">Accueil</a></li>
        {{-- <li><input type="text" name="search" id="search" placeholder="search" style="width:50%; margin-left:500px;margin-top:13px;"> </li> --}}
      </ul>

      <div class="myDiv"><br>
     <h2>Ajouter un apprenant</h2> <br>
    <form action="/insertapprenants" method="get">
          <div class="col-sm-10" id="inp">
            <input type="text" class="form-control" name="nameapprenants" id="" placeholder="Nom ">   <br>      
            <input type="text" class="form-control" name="emailapprenants" id="" placeholder="Email">  <br>
            <input type="hidden" name="promoapprenants" value="{{ $id }}">
    
          <div class="col-sm-10">
            <button type="submit" style="margin-left:20px;margin-bottom:10px; border-radius:5px;">click</button>
        </div>
      </form>
    </div>

</body>
</html>