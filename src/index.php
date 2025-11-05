<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Simple PHP Calculator</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="calculator">
        <h2>PHP Calculator</h2>
        <form id="calcForm">
            <input type="number" id="num1" step="any" required placeholder="Enter first number">
            <input type="number" id="num2" step="any" required placeholder="Enter second number">
            <select id="operator" required>
                <option value="add">➕ Add</option>
                <option value="sub">➖ Subtract</option>
                <option value="mul">✖ Multiply</option>
                <option value="div">➗ Divide</option>
            </select>
            <button type="submit">Calculate</button>
        </form>

        <div id="result"></div>
    </div>

    <script src="script.js"></script>
</body>
</html>
