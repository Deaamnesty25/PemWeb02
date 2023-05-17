<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
   <h2>Form Tambah Mobil</h2>
   <form action="/mobil/simpanData" method="POST">
    @csrf
    <div>
        <label for="">Nama Mobil</label><br>
        <input type="text" name="nama mobil" required><br>
    </div>
    <div>
        <label for="">Merk Mobil</label><br>
        <input type="text" name="merk mobil" required><br>
    </div>
    <div>
        <label for="">CC</label><br>
        <input type="text" name="CC" required><br>
    </div>
    <div class="from group">
        <button type="submit">Tambah Data</button>
    </div>
   </form>
</body>
</html>