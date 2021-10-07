<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title></title>
    <link rel="stylesheet" href="css/main.css" />
    <link rel="icon" href="images/favicon.png" />
</head>

<body>
    <form action="profile" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="file" name="photo">

        <input type="submit" value="Enviar">
    </form>
</body>
</html>
