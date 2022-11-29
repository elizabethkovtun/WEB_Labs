<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Lab 2</title>
  <link rel="stylesheet" href="style.css">
</head>

<table>
  <thead>
    <tr>
      <th scope='col'>N</th>
      <th scope='col' style="width: 450px;">Область</th>
      <th scope='col'>Населення (в тис.)</th>
      <th scope='col'>Кількість вузів</th>
      <th scope='col'>Кількість вузів на 100 тис. населення</th>
    </tr>
  </thead>

  <?php
  $f = fopen("oblinfo.txt", "r");
  $to = fgets($f);
  for ($i = 1; $i <= $to; $i++) {
    $number = fgets($f);
    $region = fgets($f);
    $count_schools = fgets($f);
    $count_people = round($count_schools / $region * 100, 2);
    echo "<tr>
          <th scope='row' style='padding: 2px'>$i</th>
          <td>$number</td>
          <td>$region</td>
          <td>$count_schools</td>
          <td>$count_people</td>
        </tr>";
  }
  fclose($f);
  ?>
</table>

</html>