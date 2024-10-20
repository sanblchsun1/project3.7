<?php
//2. Задание 2: Форма для отмены заказа
//Создайте форму с полями: номер заказа, причина отмены (textarea).
//Отправка данных методом POST .
//Обрабатывайте данные, выводя номер заказа и причину отмены.
//Подсказка:
//Используйте htmlspecialchars() для защиты данных от XSS-атак:
//$order_id = htmlspecialchars($_POST['order_id']);
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
$order_id = htmlspecialchars($_POST['order_id']);
$cancel_reason = htmlspecialchars($_POST['cancel_reason']);
echo "Номер заказа: {$order_id}<br>";
echo "Причина отмены: {$cancel_reason}<br>";
}
?>