<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $brand = $_POST['brand'];
    $model = $_POST['model'];
    $year = intval($_POST['year']);
    $color = $_POST['color'];

    if (!empty($brand) && !empty($model) && !empty($year) && !empty($color)) {
        $filePath = 'data/cars.csv';

        $file = fopen($filePath, 'a');
        if ($file === false) {
            die("Не удалось открыть файл для записи.");
        }

        fputcsv($file, [$brand, $model, $year, $color]);

        fclose($file);

        header('Location: index.php?status=success');
    } else {
        header('Location: index.php?status=error');
    }
} else {
    header('Location: index.php');
}
exit();
