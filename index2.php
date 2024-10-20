<?php
//Задание 3: Добавление и отображение отзывов (фиктивные данные)
//Создайте форму для добавления отзыва.
//Создайте массив для хранения фиктивных отзывов.При добавлении нового отзыва обновляйте массив и выводите все отзывы на
//странице.
//Подсказка:
//Для хранения фиктивных данных используйте массив:
//$reviews = [
//['name' => 'Иван', 'review' => 'Отличный товар!', 'rating' => 5],
//// Добавляйте новые отзывы в массив
//];
//После отправки формы добавляйте отзыв в массив:
//$reviews[] = ['name' => $name, 'review' => $review, 'rating' => $rating];
$reviews = [
['name' => 'Иван', 'review' => 'Отличный товар!', 'rating' => 5],
['name' => 'Иван1', 'review' => 'Отличный товар!', 'rating' => 4],
['name' => 'Иван2', 'review' => 'Отличный товар!', 'rating' => 3],
['name' => 'Иван3', 'review' => 'Отличный товар!', 'rating' => 2],
// Добавляйте новые отзывы в массив
];
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $review = $_POST['review'];
    $rating = $_POST['rating'];
    $reviews[] = ['name' => $name, 'review' => $review, 'rating' => $rating];
    echo "Отзыв добавлен!<br>";
    echo "Имя: {$name}<br>";
    echo "Отзыв: {$review}<br>";
    echo "Рейтинг: {$rating}<br>";
    echo "<br>Отзывы:<br>";
    foreach ($reviews as $review) {
        echo "Имя: {$review['name']}<br>";
        echo "Отзыв: {$review['review']}<br>";
        echo "Рейтинг: {$review['rating']}<br>";
        echo "<br>";
    }}
?>