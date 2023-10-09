@include('layout.navbar')

@section('content')
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
  <title>Document</title>
</head>
<body>

<table class="center" border="1">
  <tr>
    <th>Id Petugas</th>
    <th>Nama</th>
    <th>Username</th>
    <th>Password</th>
    <th>Telp</th>
    <th>Level</th>
  </tr>


@foreach($petugas as $petugas)
<tr>
  <td>{{$petugas->id_petugas}}</td>
  <td>{{$petugas->nama_petugas}}</td>
  <td>{{$petugas->username}}</td>
  <td>{{$petugas->password}}</td>
  <td>{{$petugas->telp}}</td>
  <td>{{$petugas->level}}</td>
</tr>
@endforeach
</table>
</body>


