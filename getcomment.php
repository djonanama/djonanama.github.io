<?php
$page_id = 99;// Уникальный идентификатор страницы (статьи или поста)
$mysqli = new mysqli("localhost", "laba", "3Z4u6L0s", "laba");// Подключается к базе данных
$result_set = $mysqli->query("SELECT * FROM `comments` WHERE `page_id`='$page_id'"); //Вытаскиваем все комментарии для данной страницы
//$result_set = $mysqli->query("delete from `comments`  WHERE `page_id`='$page_id' or `page_id`='0'"); //Вытаскиваем все комментарии для данной страницы
//echo '<div id="profile_data">';
while ($row = $result_set->fetch_assoc()) {
  echo '<h4 style="font-size: 16px;color:#fff;">'.$row[name].': </h4>  <p>'.$row[text_comment].'<p><br>';
}
