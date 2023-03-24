<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Daftar Mahasiswa</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/my-style.css">
</head>
<body>
    <div class="container text-center mt-4">
    <h1>Daftar Mahasiswa</h1>
    <ol>
        <?php
        foreach ($mahasiswa as $nama) {
            echo "<li class=\"list-group-item\"> $nama </li>";
        }
        ?>
    </ol>

    <div>
        <img class="rounded-circle img-thumbnail m-2" width="150" height="150" src="/img/people1.jpg">
        <img class="rounded-circle img-thumbnail m-2" width="150" height="150" src="/img/people2.jpg">
        <img class="rounded-circle img-thumbnail m-2" width="150" height="150" src="/img/people3.jpg">
        <img class="rounded-circle img-thumbnail m-2" width="150" height="150" src="/img/people4.jpg">
    </div>

    <div nama>
    Dibuat oleh : Satria Jhoan Putra NIM : 216651036
    </div>
    </div>
    <script src="/js/bootstrap.bundle.min.js"></script>
</body>
</html>
