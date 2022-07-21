<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kitob qo'shish</title>
</head>
<body>
<h2 style="text-align: center">Kitob Qo'shish</h2>
<form action="{{route('kitob_store')}}" method="post" class="form-control container">
    @csrf
    @method('POST')

<div class="row g-3 align-items-center">

    <div class="form-group">
        <label class="col-form-label">Kitob nomi</label>
    </div>
       <input type="text" class="container" name="name">

    <br>

    <div class="form-group">
        <label for="building">Muallif</label>
        <select name="muallif" id="building" class="form-select form-control">
            <option value="none">Muallif tanlang</option>
            @foreach($muallif as $m)
                <option value="{{$m->id}}">{{$m->name}}</option>
            @endforeach
        </select>
    </div>

</div>

    <button type="submit" class="btn btn-success mt-3">Saqlash</button>

</form>
<br><br><br>


<a href="{{route('muallif.create')}}"><button class="btn btn-success">Muallif Qo'shish</button></a>
</body>
</html>
