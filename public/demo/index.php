<?php
include "functions.php";
$title = 'Демо-страничка';
$message = '';
$menu = getMenu();
$lessons = getLessons();

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['name'])) {
    $name = $_POST['name'];
    $message = "Привет,{$name}";
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
          integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
            integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
            crossorigin="anonymous"></script>
    <title><?= $title ?></title>
</head>
<body>
<div class="row justify-content-center">
    <div class="col-md-6">
        <header>
            <ul class="nav justify-content-end">
                <?php foreach ($menu as $item): ?>
                    <li class="nav-item">
                        <a class="nav-link active" href="<?= $item['link'] ?>">
                            <?= $item['title'] ?>
                        </a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </header>
        <main>
            <h1>Эта страничка сделана при помощи PHP</h1>
            <p>Очень скоро здесь появятся еще</p>
            <?php if (!empty($message)): ?>
                <div class="alert alert-primary">
                    <?= $message ?>
                </div>
            <?php else: ?>
                <form method="post">
                    <div class="form-group">
                        <label>Пожалуйста, введите свое имя!</label>
                        <input name="name" type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-success">Отправить</button>
                    </div>
                </form>
            <?php endif; ?>
            <div class="row row-cols-1 row-cols-md-3">
                <?php foreach ($lessons as $lesson): ?>
                    <div class="card mb-3" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title"><?= $lesson['title'] ?></h5>
                            <p class="card-text"><?= $lesson['description'] ?></p>
                        </div>
                        <div class="card-footer">
                            <a href="#" class="btn btn-primary">Посмотреть</a>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </main>
        <footer>
        </footer>
    </div>
</div>
</body>
</html>


