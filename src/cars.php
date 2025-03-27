<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./css/style.css">
    <title>Список автомобилей</title>
</head>

<body>
    <div class="container mt-5">
        <h1 class="text-center">Список автомобилей</h1>
        <div class="text-center">
            <a href="index.php" class="btn btn-secondary mb-3">На главную</a>
            <a href="cars.php?action=get_cars" class="btn btn-primary mb-3">Получить список автомобилей</a>
        </div>

        <?php
        if (isset($_GET['action']) && $_GET['action'] === 'get_cars') {
            $filePath = 'data/cars.csv';

            if (file_exists($filePath)) {
                $file = fopen($filePath, 'r');

                if ($file) {
                    echo '<table class="table table-bordered table-striped">';
                    echo '<thead class="table-dark">';
                    echo '<tr>';
                    echo '<th>Марка</th>';
                    echo '<th>Модель</th>';
                    echo '<th>Год выпуска</th>';
                    echo '<th>Цвет</th>';
                    echo '</tr>';
                    echo '</thead>';
                    echo '<tbody>';

                    $isHeader = true;
                    while (($row = fgetcsv($file, null, ',')) !== false) {
                        if ($isHeader) {
                            $isHeader = false;
                            continue;
                        }

                        echo '<tr>';
                        echo '<td>' . $row[0] . '</td>';
                        echo '<td>' . $row[1] . '</td>';
                        echo '<td>' . $row[2] . '</td>';
                        echo '<td>' . $row[3] . '</td>';
                        echo '</tr>';
                    }

                    echo '</tbody>';
                    echo '</table>';

                    fclose($file);
                } else {
                    echo '<div class="alert alert-danger">Не удалось открыть файл.</div>';
                }
            } else {
                echo '<div class="alert alert-warning">Файл с данными не найден.</div>';
            }
        }
        ?>
    </div>
</body>

</html>