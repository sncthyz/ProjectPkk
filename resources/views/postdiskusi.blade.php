<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="/postdiskusi" method="POST" enctype="multipart/form-data">
@csrf
<label for="">Judul</label>
<input type="text" name="title" >
<label for="">Description</label>
<input type="text" name="description">
<label for="">Foto</label>
<input type="file" name="imagePath" >
<button type="submit">Kirim</button>
</form>
</body>
</html>
