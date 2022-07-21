<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<marquee style=""><h1 class="text center" style="text-align:center"> Kitoblar</h1></marquee>

<table class="table table-dark table-striped container">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nomi</th>
      <th scope="col">Muallifi</th>
    </tr>
  </thead>
  <tbody>
  @foreach($data as $dd)
    <tr>
       <td>{{$dd->id}}</td>
       <td>{{$dd->name}}</td>
       <td>{{$dd->muallif->name}}</td>

    </tr>
  @endforeach

  </tbody>
</table>

<a href="{{route('kitob.create')}}" style="align-content: inherit"><button class="btn btn-success"> Kitob Qo'shish</button></a>



</body>
</html>

