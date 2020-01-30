<?php
require_once 'src/Dog.php';
$dog = new Dog();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="assets/bootstrap.min.css">
    <link rel="stylesheet" href="assets/style.css">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Doggy cut</title>
</head>
<body class="container-fluid" >
<h1 class="text-danger text-center">Doggy Cut 🐶</h1>
<div>
    <img class="dog-img img-responsive center-block" src="<?=$dog->image()?>" alt="">
</div>
<button class="refresh-btn center-block" onclick="window.location.reload(false)">🐹</button>
<script !src="">
    console.log(window.location)
</script>
</body>
</html>
