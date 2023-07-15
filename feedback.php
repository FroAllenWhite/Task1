<html lang="ru">

<head>
    <title>Обратная связь</title>
    <style>
        <?php include 'style.css'; ?>
    </style>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
<?php session_start(); if(isset($_SESSION['email']) && !empty($_SESSION['email']))
    print('
    <div class="container bg-light text-dark rounded" id="form1">
        <div class="container">
            <br>
            <div class="row">
                <form action="receive.php" method="post" class="col">
                    <div class="form-group">
                        <label for="title"><h5>Заголовок</h5></label>
                        <input type="text" name="title" class="form-control-plaintext col rounded" id="text" required>
                    </div>
                    <div class="form-group">
                        <label for="editor1"><h5>Отзыв</h5></label>
                        <textarea class="form-control-plaintext col rounded" rows="5" name="text" id="text"></textarea>
                    </div>
                    <hr>
                    <div class="form-group">
                        <h5>Столкнулись ли вы с проблемами?</h5>
                        <input type="radio" name="problem" value="yes" checked> Да<br>
                        <input type="radio" name="problem" value="no"> Нет
                    </div>
                    <hr>
                    <div class="form-group">
                        <h5>Типичные проблемы:</h5>
                        <input type="checkbox" name="problems[]" value="1">Лаги<br>
                        <input type="checkbox" name="problems[]" value="2">Баги<br>
                        <input type="checkbox" name="problems[]" value="3">Зависания<br>
                        <input type="checkbox" name="problems[]" value="4">Проблема с соединением<br>
                    </div>
                    <hr>
                    <div class="form-group">
                        <h5>Выберите вариант:</h5>
                        <select name="select" size="1">
                            <option selected value="s1">AWESOME</option>
                            <option value="s2">COOL</option>
                            <option value="s3">BAD</option>
                            <option value="s4">AWFULLY</option>
                        </select>
                    </div>
                    <div style="text-align: center">
                        <button type="submit" class="button rounded">Отправить</button>
                        <button type="reset" class="button rounded">Сброс</button>
                    </div>
                </form>
            </div>
        </div>
    </div>');
else {
    print('<h1 id="denied"> Access denied! </h1>');
    header("Location: index.php");
}
?>
</body>
</html>