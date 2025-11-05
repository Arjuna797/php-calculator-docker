<?php
if (isset($_POST['calculate'])) {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operator = $_POST['operator'];
    $result = 0;

    switch ($operator) {
        case 'add': $result = $num1 + $num2; break;
        case 'sub': $result = $num1 - $num2; break;
        case 'mul': $result = $num1 * $num2; break;
        case 'div':
            if ($num2 == 0) {
                echo "<p>❌ Cannot divide by zero!</p>";
                exit;
            } else {
                $result = $num1 / $num2;
            }
            break;
    }

    echo "<p>✅ Result: <strong>$result</strong></p>";
}
?>
