<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
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
  width: 30%;
  height: 20%;
  margin: 0 auto;
  position: absolute;
  top: 40%;
  left: 37%;
}
button{background-color: #555555;
 color: white;
 width:20%;
    height: 25px;
}
  /* Black */
  input{
    width:60%;
    height: 20px;
  }
        
    </style>
</head>
<body>

    <ul>
        <li><a href="/index " style="margin-left:100px;margin-top:2px;" class="a">Page précedentes</a></li>
        {{-- <li><input type="text" name="search" id="search" placeholder="search" style="width:50%; margin-left:500px;margin-top:13px;"> </li> --}}
      </ul>

      <div class="myDiv">
    <h2>Ajouter une promotion</h2>
    <form action="/insert" method="get">
        <input type="text" name="name" placeholder="Promotion ..">
        <button>Ajouter</button>
        </form>
    </div>
</body>
</html>
