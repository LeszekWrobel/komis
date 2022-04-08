<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title></title>
</head>
<body>
<h1>hej</h1>

@foreach ($commissions as $commission)
   <li> {{$commission}} </li>
    <li> {{$commission->title}} </li>
    <li> {{$commission->description}} </li>

@endforeach
</body>
</html>
