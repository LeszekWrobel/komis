<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>Create</title>
</head>
<body>
<h1>Create</h1>

<form method="POST" action="/commissions">
{{csrf_field()}}
<input type="text" name="title" placeholder="Tytuł ogłoszenia">
<input type="textarea" name="description" placeholder="Opis">
<button type="submmit">Dodaj ogłoszenie</button>
</form>
</body>
</html>
