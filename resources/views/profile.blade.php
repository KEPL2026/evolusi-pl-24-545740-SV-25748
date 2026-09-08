<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Profil Mahasiswa</title>
</head>
<body>
    <h1>{{ $name }}</h1>
    <p>NIM: {{ $nim }}</p>
    <p>Program: {{ $program }}</p>
    <p>Universitas: {{ $university }}</p>
</body>
<style>
    body { font-family: sans-serif; max-width: 600px; margin: 40px auto; padding: 0 20px; }
    h1 { color: #2d3748; }
    p { color: #4a5568; line-height: 1.6; }
</style>
</html>