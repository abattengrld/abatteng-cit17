<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['exercise'])) {
    $exercise = $_POST['exercise'];

    switch ($exercise) {
        case "ex1":
            echo "1. Introduce Yourself<br>";
            $name = $_POST["name"];
            $age = $_POST["age"];
            $fav_color = $_POST["fav_color"];
            echo "My name is $name, I am $age years old, and my favorite color is $fav_color.<br><hr>";
            break;

        case "ex2":
            echo "2. Simple Math<br>";
            $a = $_POST["a"];
            $b = $_POST["b"];
            echo "Sum: " . ($a + $b) . "<br>";
            echo "Difference: " . ($a - $b) . "<br>";
            echo "Product: " . ($a * $b) . "<br>";
            echo "Quotient: " . ($b != 0 ? ($a / $b) : "Undefined (division by zero)") . "<br><hr>";
            break;

        case "ex3":
            echo "3. Area and Perimeter of a Rectangle<br>";
            $length = $_POST["length"];
            $width = $_POST["width"];
            $perimeter = 2 * ($length + $width);
            $area = $length * $width;
            echo "Perimeter: $perimeter<br>";
            echo "Area: $area<br><hr>";
            break;

        case "ex4":
            echo "4. Temperature Converter<br>";
            $temp_celsius = $_POST["celsius"];
            $fahrenheit = ($temp_celsius * 1.8) + 32;
            echo "$temp_celsius °C is $fahrenheit °F<br><hr>";
            break;

        case "ex5":
            echo "5. Swapping Variables<br>";
            $val1 = $_POST["val1"];
            $val2 = $_POST["val2"];
            echo "Before: val1 = $val1, val2 = $val2<br>";
            $temp = $val1;
            $val1 = $val2;
            $val2 = $temp;
            echo "After: val1 = $val1, val2 = $val2<br><hr>";
            break;

        case "ex6":
            echo "6. Salary Calculator<br>";
            $basic = $_POST["basic_salary"];
            $allowance = $_POST["allowance"];
            $deduction = $_POST["deduction"];
            $net_salary = ($basic + $allowance) - $deduction;
            echo "Net Salary: $net_salary<br><hr>";
            break;

        case "ex7":
            echo "7. BMI Calculator<br>";
            $weight = $_POST["weight"];
            $height = $_POST["height"];
            if ($height != 0) {
                $bmi = $weight / ($height ** 2);
                echo "Your BMI is " . number_format($bmi, 2) . "<br><hr>";
            } else {
                echo "Height cannot be zero.<br><hr>";
            }
            break;

        case "ex8":
            echo "8. String Manipulation<br>";
            $sentence = $_POST["sentence"];
            echo "Characters: " . strlen($sentence) . "<br>";
            echo "Words: " . str_word_count($sentence) . "<br>";
            echo "Uppercase: " . strtoupper($sentence) . "<br>";
            echo "Lowercase: " . strtolower($sentence) . "<br><hr>";
            break;

        case "ex9":
            echo "9. Bank Account Simulation<br>";
            $deposit = $_POST["deposit"] ?? 0;
            $withdraw = $_POST["withdraw"] ?? 0;
            $balance = 100000.00 + $deposit - $withdraw;
            echo "Deposit: $deposit<br>";
            echo "Withdraw: $withdraw<br>";
            echo "New Balance: $balance<br><hr>";
            break;

        case "ex10":
            echo "10. Simple Grading System<br>";
            $math = $_POST["math"];
            $english = $_POST["english"];
            $science = $_POST["science"];
            $average = ($math + $english + $science) / 3;
            echo "Average: " . number_format($average, 2);
            if ($average >= 90) echo " - Grade A";
            elseif ($average >= 85) echo " - Grade B";
            elseif ($average >= 80) echo " - Grade C";
            elseif ($average >= 75) echo " - Grade D";
            else echo " - Failing Grade";
            echo "<br><hr>";
            break;

        case "ex11":
            echo "11. Currency Converter<br>";
            $php = $_POST["ph_peso"];
            echo "$php PHP = " . ($php * 0.017) . " USD, " . ($php * 0.015) . " EUR, " . ($php * 2.68) . " JPY<br><hr>";
            break;

        case "ex12":
            echo "12. Travel Cost Estimator<br>";
            $distance = $_POST["distance"];
            $fuel_price = $_POST["fuel_price"];
            $fuel_consumption = $_POST["fuel_consumption"];
            $fuel_needed = $distance / $fuel_consumption;
            $cost = $fuel_needed * $fuel_price;
            echo "Estimated travel cost: $cost<br><hr>";
            break;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>PHP Exercises</title>
    <style>
        body { font-family: Arial; }
        form { margin-bottom: 20px; padding: 10px; border: 1px solid #ccc; }
        input[type="text"], input[type="number"] { margin: 5px; }
        hr { margin: 20px 0; }
    </style>
</head>
<body>

<h2>PHP Exercise Forms</h2>

<form method="POST">
    <input type="hidden" name="exercise" value="ex1">
    Name: <input type="text" name="name"><br>
    Age: <input type="number" name="age"><br>
    Favorite Color: <input type="text" name="fav_color"><br>
    <input type="submit" value="Submit ex1">
</form>

<form method="POST">
    <input type="hidden" name="exercise" value="ex2">
    Number 1: <input type="number" name="a"><br>
    Number 2: <input type="number" name="b"><br>
    <input type="submit" value="Submit ex2">
</form>

<form method="POST">
    <input type="hidden" name="exercise" value="ex3">
    Length: <input type="number" name="length"><br>
    Width: <input type="number" name="width"><br>
    <input type="submit" value="Submit ex3">
</form>

<form method="POST">
    <input type="hidden" name="exercise" value="ex4">
    Celsius: <input type="number" name="celsius"><br>
    <input type="submit" value="Submit ex4">
</form>

<form method="POST">
    <input type="hidden" name="exercise" value="ex5">
    Value 1: <input type="number" name="val1"><br>
    Value 2: <input type="number" name="val2"><br>
    <input type="submit" value="Submit ex5">
</form>

<form method="POST">
    <input type="hidden" name="exercise" value="ex6">
    Basic Salary: <input type="number" name="basic_salary"><br>
    Allowance: <input type="number" name="allowance"><br>
    Deduction: <input type="number" name="deduction"><br>
    <input type="submit" value="Submit ex6">
</form>

<form method="POST">
    <input type="hidden" name="exercise" value="ex7">
    Weight (kg): <input type="number" name="weight"><br>
    Height (m): <input type="number" step="0.01" name="height"><br>
    <input type="submit" value="Submit ex7">
</form>

<form method="POST">
    <input type="hidden" name="exercise" value="ex8">
    Sentence: <input type="text" name="sentence"><br>
    <input type="submit" value="Submit ex8">
</form>

<form method="POST">
    <input type="hidden" name="exercise" value="ex9">
    Deposit: <input type="number" name="deposit"><br>
    Withdraw: <input type="number" name="withdraw"><br>
    <input type="submit" value="Submit ex9">
</form>

<form method="POST">
    <input type="hidden" name="exercise" value="ex10">
    Math Grade: <input type="number" name="math"><br>
    English Grade: <input type="number" name="english"><br>
    Science Grade: <input type="number" name="science"><br>
    <input type="submit" value="Submit ex10">
</form>

<form method="POST">
    <input type="hidden" name="exercise" value="ex11">
    Amount in PHP: <input type="number" name="ph_peso"><br>
    <input type="submit" value="Submit ex11">
</form>

<form method="POST">
    <input type="hidden" name="exercise" value="ex12">
    Distance (km): <input type="number" name="distance"><br>
    Fuel Price per Liter: <input type="number" step="0.01" name="fuel_price"><br>
    Fuel Consumption (km per liter): <input type="number" step="0.01" name="fuel_consumption"><br>
    <input type="submit" value="Submit ex12">
</form>

</body>
</html>
