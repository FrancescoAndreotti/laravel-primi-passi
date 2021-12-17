<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <h2>Lista della spesa:</h2>
  @if(count($lista_spesa) > 0)
  <ul>
    @foreach($lista_spesa as $item)
    <li>
      {{ $item }}
    </li>
    @endforeach
  </ul>
  @else 
  <p>Lista della spesa vuota</p>
  @endif
</body>
</html>