<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <nav>
        <a href="/profil">Profil</a>
        <a href="/kontak">Kontak</a>
        <a href="/blog">Blog</a>
    </nav>

    @yield('konten')
    @yield('var')

    <footer><center>SMK Assalaam</center></footer>
</body>
</html>