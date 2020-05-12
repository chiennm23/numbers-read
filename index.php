<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="POST">
    <h1>Đọc số thành chữ</h1>
    <input type='number' name="number" placeholder="Nhập số cần đọc">
    <button type="submit">Read</button>
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == 'POST') {
    $number = $_POST['number'];
    $ones = $number % 10;
    $tens = floor(($number % 100)/10);
    $hundred = floor ($number/100);
    if ($number > 0 && $number <= 10) {
        switch ($number) {
            case 0:
                echo "Zero";
                break;
            case 1:
                echo "one";
                break;
            case 2:
                echo "Two";
                break;
            case 3:
                echo "Three";
                break;
            case 4:
                echo "Four";
                break;
            case 5:
                echo "Five";
                break;
            case 6:
                echo "Six";
                break;
            case 7:
                echo "Seven";
                break;
            case 8:
                echo "Eight";
                break;
            case 9:
                echo "Nine";
                break;
            case 10:
                echo "Ten";
                break;
            default:
                echo "out of ability";
        }
    }
    if ($number > 10 && $number <= 20) {
        switch ($ones) {
            case 1:
                echo "Eleven";
                break;
            case 2:
                echo "Twelve";
                break;
            case 3:
                echo "Thirteen";
                break;
            case 4:
                echo "Fourteen";
                break;
            case 5:
                echo "Fifteen";
                break;
            case 6:
                echo "Sixteen";
                break;
            case 7:
                echo "Seventeen";
                break;
            case 8:
                echo "Eighteen";
                break;
            case 9:
                echo "Nineteen";
                break;
            case 0:
                echo "Twenty";
                break;
        }
    }
    if ($number > 20 && $number < 100) {
        switch ($tens) {
            case 2:
                echo "Twenty" ;
                break;
            case 3:
                echo "Thirty" ;
                break;
            case 4:
                echo "Forty" ;
                break;
            case 5:
                echo "Fifty" ;
                break;
            case 6:
                echo "Sixty" ;
                break;
            case 7:
                echo "Seventy" ;
                break;
            case 8:
                echo "Eighty" ;
                break;
            case 9:
                echo "Ninety" ;
                break;
        }
        switch ($ones) {
            case 1:
                echo " one";
                break;
            case 2:
                echo " two";
                break;
            case 3:
                echo " three";
                break;
            case 4:
                echo " four";
                break;
            case 5:
                echo " five";
                break;
            case 6:
                echo " six";
                break;
            case 7:
                echo " seven";
                break;
            case 8:
                echo " eight";
                break;
            case 9:
                echo " nine";
                break;
        }
    }
    if ($number >= 100) {
        switch ($hundred){
            case 1:
                echo "0ne hundred ";
                break;
            case 2:
                echo "Two hundred ";
                break;
            case 3:
                echo "Three hundred ";
                break;
            case 4:
                echo "Four hundred ";
                break;
            case 5:
                echo "Five hundred ";
                break;
            case 6:
                echo "Six hundred ";
                break;
            case 7:
                echo "Seven hundred ";
                break;
            case 8:
                echo "Eight hundred ";
                break;
            case 9:
                echo "Nine hundred ";
                break;
        }
        switch ($tens) {
            case 2:
                echo " and Twenty" ;
                break;
            case 3:
                echo " and Thirty" ;
                break;
            case 4:
                echo " and Forty" ;
                break;
            case 5:
                echo " and Fifty" ;
                break;
            case 6:
                echo " and Sixty" ;
                break;
            case 7:
                echo " and Seventy" ;
                break;
            case 8:
                echo " and Eighty" ;
                break;
            case 9:
                echo " and Ninety" ;
                break;
        }
        switch ($ones) {
            case 1:
                echo " one";
                break;
            case 2:
                echo " two";
                break;
            case 3:
                echo " three";
                break;
            case 4:
                echo " four";
                break;
            case 5:
                echo " five";
                break;
            case 6:
                echo " six";
                break;
            case 7:
                echo " seven";
                break;
            case 8:
                echo " eight";
                break;
            case 9:
                echo " nine";
                break;
        }
    }
}
?>
</body>
</html>