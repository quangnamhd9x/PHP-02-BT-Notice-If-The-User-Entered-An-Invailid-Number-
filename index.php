<form method="post">
    Tim phan tu: <input type="number" name="find"><br>
    <input type="submit" value="Result">
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $a = $_POST['find'];
}
$array = [14, 36, 56, 30, 11, 69, 43, 81, 11, 92, 27, 61, 26, 82, 12, 92, 68, 86, 91, 61, 12, 13, 9, 22, 44, 17, 52, 29, 18, 19, 51, 3, 70, 22, 34, 49, 28, 35, 8, 83, 46, 40, 12, 66, 11, 57, 20, 1, 3, 93, 60, 35, 99, 77, 36, 40, 6, 51, 73, 32, 90, 20, 81, 66, 78, 82, 7, 51, 72, 24, 29, 22, 57, 14, 94, 43, 65, 76, 48, 83, 88, 11, 78, 78, 73, 40, 80, 50, 83, 26, 28, 56, 22, 15, 73, 94, 93, 38, 95, 40];
for ($i = 0; $i < count($array); $i++) {
    if ($a == $array[$i]) {
        echo 'vi tri cua phan tu gia tri ' . $a . ' la ' . $i . '<br>';
    }
}
