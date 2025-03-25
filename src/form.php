<!doctype html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./css/style.css">
    <title>Добавить автомобиль</title>
</head>

<body>
    <div class="container mt-5">
        <h1 class="text-center">Добавить автомобиль</h1>
        <form action="process.php" method="POST" class="mt-4">
            <div class="mb-3">
                <label for="brand" class="form-label">Марка</label>
                <input type="text" class="form-control" id="brand" name="brand" required>
            </div>
            <div class="mb-3">
                <label for="model" class="form-label">Модель</label>
                <input type="text" class="form-control" id="model" name="model" required>
            </div>
            <div class="mb-3">
                <label for="year" class="form-label">Год выпуска</label>
                <input type="number" class="form-control" id="year" name="year" min="1900" max="2025" required>
            </div>
            <div class="mb-3">
                <label for="color" class="form-label">Цвет</label>
                <input type="text" class="form-control" id="color" name="color" required>
            </div>
            <button type="submit" class="btn btn-primary">Сохранить</button>
        </form>
    </div>
</body>

</html>