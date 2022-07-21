<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Muallif qo'shish</title>
</head>
<body>
<form action="{{route('muallif.store')}}" method="post">

@csrf

    <div class="col-auto">
        <label  class="col-form-label">Muallif nomi</label>
    </div>
    <div class="col-auto">
        <input type="text"   name="muallif" class="form-control">
    </div>
    <button  type="submit" class="btn btn-success mt-3"> Qo'shish</button>


</form>
</body>
</html>
