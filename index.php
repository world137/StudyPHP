<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="">
        <label for="">name</label>
        <input type="text" name="" id="" value="<?php echo 'world' ?>">

        <label for="">last name</label>
        <input type="text" name="" id="" value="<?php echo 'Rubisco' ?>">
    </form>
    <?php
        $name = '123';
        echo gettype($name);
        settype($name,"integer");
        echo gettype($name);
    ?>
</body>
</html>