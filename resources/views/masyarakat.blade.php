@include('layout.navbar')

@section('content')
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

<table class="center" border="1">
  <tr>
    <th>Nik</th>
    <th>Nama</th>
    <th>Username</th>
    <th>Password</th>
    <th>Telp</th>
  </tr>


@foreach($masyarakat as $masyarakat)
<tr>
  <td>{{$masyarakat->nik}}</td>
  <td>{{$masyarakat->nama}}</td>
  <td>{{$masyarakat->username}}</td>
  <td>{{$masyarakat->password}}</td>
  <td>{{$masyarakat->telp}}</td>
</tr>
@endforeach
</table>
</body>


