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
  text-decoration: none;
  color: white;
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
 
.data{
    margin-top: 100px;
    margin-left: 250px;
    }
form,h6{
    margin-top: 50px;
    margin-left:20px ;
}
table{
    margin-left:20px ;
    
}
table{
    width: 80%;
}
button{
    height:100%;
    border: 3px outset #333;
    background-color: #333;    
    color: white;
    margin-left:0px;
}
</style>

<ul>
    <li><a href="/index" style="margin-top:2px;" class="a">Accueil</a></li>
   <li style="margin-left:10px;"><a href="{{ URL('addapprenants/' . $promotion[0]->id) }} ">Ajouter un apprenant</a></li>

    <li></li>
    
  </ul>

<form action="/edit/{{ $promotion[0]->id }}" method="get">

    <input type="text" name="name" value="{{ $promotion[0]->name }} ">
    
    <button>Confirmer</button>

</form>


<h6>Liste des apprenants : </h6>

<table>

    <thead>
        <th>Nom</th>
        <th>Email</th>
        <th>Actions</th>
    </thead>
    <tbody>
        @if ($apprenants[0]->id_app !=null)

            @foreach ($apprenants as $row)
                <tr>
                    <td>{{ $row->name }}</td>
                    <td>{{ $row->email }}</td>
                     <td>
                        <a href="/update_apprenants/{{ $row->id_app }}">Modifier </a> 
                        <a href="/deleteapprenants?id={{ $row->id_app }}">/Supprimer </a> 
                    </td> 
                </tr>
                <input type="hidden" id="idsearch" value="{{ $row->id_promo }}">
            @endforeach
        @endif
    </tbody>
</table>

<script src="{{ URL::asset('js/searchappr.js') }}"></script>


