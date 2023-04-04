<?php
  // URL, откуда нужно получить данные
  $url = "https://occul.ticketers.club/status";

  // Получаем данные
  $data = file_get_contents($url);

  // Создаем объект DOM из полученных данных
  $dom = new DOMDocument();
  @$dom->loadHTML($data);

  // Находим таблицу на странице
  $table = $dom->getElementsByTagName("table")->item(0);

  // Получаем заголовки столбцов
  $headers = $table->getElementsByTagName("th");
  echo "<tr>";
  foreach ($headers as $header) {
    echo "<th>" . $header->nodeValue . "</th>";
  }
  echo "</tr>";

  // Получаем данные строк таблицы
  $rows = $table->getElementsByTagName("tr");
  foreach ($rows as $row) {
    $cells = $row->getElementsByTagName("td");
    if ($cells->length > 0) {
      echo "<tr>";
      foreach ($cells as $cell) {
        echo "<td>" . $cell->nodeValue . "</td>";
      }
      echo "</tr>";
    }
  }
?>
