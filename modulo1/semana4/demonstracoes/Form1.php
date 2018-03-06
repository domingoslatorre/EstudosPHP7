<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <style>
        form * {
            display: block;
        }
    </style>
    <title>Document</title>
</head>
<body>
    <form action="Dm13.php" method="post" enctype="multipart/form-data">
        <label for="">Input Text</label>
        <input type="text" name="input-text" id="">
        <label for="">Input Color</label>
        <input type="color" name="input-color" id="">
        <!-- precisa do enctype="multipart/form-data" -->
        <input type="file" name="input-file" id="">


        <input type="submit" value="Enviar" />
    </form>
</body>
</html>
