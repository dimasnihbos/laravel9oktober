<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h1>Detail Pengaduan</h1>
        <p class="text-mute">NIK : {{ $data->nik }}</p>
        <p class="bg-secondary p-5">{{ $data->isi_laporan }}</p>
    </div>
</body>
</html>