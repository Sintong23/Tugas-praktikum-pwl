<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Daftar para murid</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
    <h1>Daftar Mahasiswa</h1>

    <ul>
        <li>
            <table>
                <td>
                <tr>
            Nama    : Amanda </td><tr>
            Nim     : 302214082</tr> <tr>
            Gender  : Perempuan</tr></tr>
            <td>
            <form action="/detail_mahasiswa" method="POST">
            
            @csrf
            <button type="submit" class="btn btn-primary"> Detail Mahasiswa</button></td>
        
        
            </form></table>
        </li>
        <li>
            Nama    : Ninna 
            Nim     : 302214086
            Gender  : Perempuan

            <form action="/detail_mahasiswa" method="GET">
            
                @csrf
                <button type="submit" class="btn btn-primary"> Detail Mahasiswa [get]</button>
        </li>
    </ul>
</body>
</html>