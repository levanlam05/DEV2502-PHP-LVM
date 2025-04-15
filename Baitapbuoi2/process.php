<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $month = $_POST["month"];

  switch ($month) {
    case 1:
      $monthName = "Tháng Một";
      break;
    case 2:
      $monthName = "Tháng Hai";
      break;
    case 3:
      $monthName = "Tháng Ba";
      break;
    case 4:
      $monthName = "Tháng Tư";
      break;
    case 5:
      $monthName = "Tháng Năm";
      break;
    case 6:
      $monthName = "Tháng Sáu";
      break;
    case 7:
      $monthName = "Tháng Bảy";
      break;
    case 8:
      $monthName = "Tháng Tám";
      break;
    case 9:
      $monthName = "Tháng Chín";
      break;
    case 10:
      $monthName = "Tháng Mười";
      break;
    case 11:
      $monthName = "Tháng Mười Một";
      break;
    case 12:
      $monthName = "Tháng Mười Hai";
      break;
    default:
      $monthName = "Tháng không hợp lệ";
  }

  echo "<p>Tháng $month là: $monthName</p>";
}
?>
</body>
</html>