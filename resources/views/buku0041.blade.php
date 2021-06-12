<!DOCTYPE html>
<html>
<head>
<title>Buku</title>
</head>
<body>
    <h2><center>Gito Pramana Karya</h2></center>
    <h3> List Buku</h3>
    
    <table border="1">
<tr>
<th>Id Buku</th>
<th>Judul Buku</th>
<th>Tahun Terbit</th>
</tr>
@foreach($buku as $p)
    <tr>
    <td>{{ $p->id }}</td>
    <td>{{ $p->judul }}</td>
    <td>{{ $p->tahun_terbit }}</td>
    </tr>
@endforeach
</table>
    <a href="/export"> Export Excel </a>
</body>
</html>