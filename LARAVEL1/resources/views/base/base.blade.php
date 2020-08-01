<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  {{$data['run']}}
  <br>
  {{$data['run2'][0]}}
  {{-- @foreach ($data['run2'] as $dd) --}}
<?php
// $a=$a++;
// dd($dd);
?>
  {{-- {{$dd->$a}} --}}
  {{-- @endforeach --}}
</body>
</html>
