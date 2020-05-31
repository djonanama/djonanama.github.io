<?php
  /* Принимаем данные из формы */
  $page_id = $_POST["page_id"];

  $name = $_POST["user_name"];
  $text_comment = $_POST["user_msg"];
  
  $name = htmlspecialchars($name);// Преобразуем спецсимволы в HTML-сущности
  $text_comment = htmlspecialchars($text_comment);// Преобразуем спецсимволы в HTML-сущности
  $mysqli = new mysqli("localhost", "laba", "3Z4u6L0s", "laba");// Подключается к базе данных
  $mysqli->query("INSERT INTO `comments` (`name`, `page_id`, `text_comment`) VALUES ('$name', '$page_id', '$text_comment')");// Добавляем комментарий в таблицу
  header("Location: ".$_SERVER["HTTP_REFERER"]);// Делаем реридект обратно
?>
