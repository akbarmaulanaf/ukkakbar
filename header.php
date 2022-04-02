
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table{
            margin-left: 120px;
            margin-top: 120px;
        }
    </style>
</head>
<body>
    <table border="1" height="400px" width="50%">
        <td align="center" class="text"> Selamat datang <?php echo $_SESSION['username'] ?> di aplikasi STAR TRAVEL.</td>
    </table>
</body>
</html>