<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit</title>
</head>
<body>
<form method='POST'action="/update/{{$siswa}}">
@csrf 
    <input type="text" placeholder="nama" name="nama" value="{{$siswa->nama}}">
    <br>
    <br>
    <input type="text" placeholder="kelas" name="kelas" value="{{$siswa->kelas}}">
    <button type='submit'>Update</button>
    </form>
</body>
</html>
