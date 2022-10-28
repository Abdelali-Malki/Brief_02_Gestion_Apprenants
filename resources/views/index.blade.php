<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">    <title>Document</title>
</head>
<body>
    
</body>
</html>
<style>
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
    body{
        background-color:whitesmoke; 
        margin: 0;
        padding: 0;
    }
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 80%;
}
td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}
tr:nth-child(even) {
  background-color: #dddddd;
}
.a:hover{
    text-decoration: none;
    color: white;
}
.data{
    margin-top: 100px;
    margin-left: 250px;
    }
</style>

<ul>
    <li><a href="/add" style="margin-left:100px;margin-top:2px;" class="a">Ajouter nouveau promotion</a></li>
    
    <li><input type="text" name="search" id="search" placeholder="search" style="width:50%; margin-left:500px;margin-top:13px;"> </li>
  </ul>


<div id="data" class="data">

        <div>
            <table>
                <tr>
                    <th>Id promotion </th>
                    <th> Nom </th>
                    <th> Actions </th>
                </tr>
                @foreach ($data as $row)

                <tr>
                    <td>{{ $row->id }} </td>
                    <td>{{ $row->name }}</td>
                    <td> 
                        <a href="/update_promotion/{{ $row->id }}"> Modifier </a> 
                        <a href="/deletepromo?id={{ $row->id }}"> / Supprimer </a> 
                    </td>
                </tr>
                @endforeach

        </table>
        </div>
    
</div>

<script src="{{ URL::asset('js/search.js') }}"></script>