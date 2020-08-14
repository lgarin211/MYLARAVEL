<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta  name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="{{'/login/set'}}" method="post">
<input htmlspecialchar type="text" placeholder="email" name="email" value="">
<input htmlspecialchar type="password" placeholder="pwd" name="pwd">
@csrf
<button type="submit">kirim</button>
</form>
<br><hr>
<form action="{{'/login/upload'}}" method="post">
    <input htmlspecialchar type="text" placeholder="email" name="email" value="">
    <input htmlspecialchar type="text" placeholder="nama" name="nama">
    <input htmlspecialchar type="password" placeholder="pwd" name="pwd">
    @csrf
    <button type="submit">kirim</button>
</form>
<hr>
<table class="table table-light">
    <tbody>
        <tr>
            <td>nama</td>
            <td>email</td>
        </tr>
        @foreach ($all_data as $dt)
        <tr>
        <td>{{$dt->email}}</td>
        <td>{{$dt->nama}}</td>
        <td>{{$dt->password}}</td>
        </tr>
        @endforeach
    </tbody>
</table>


</body>
</html>
