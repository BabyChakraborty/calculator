<?php
echo "Calculator Project"
?>
<html>
<head>
    <title>Basic Calculator</title>
</head>
<body>
<form action ="calpracjoin.php" method="POST">
    Enter first number: <input type="number" name="number1" />
    <br/>
    <select name = "operation">
        <option value = "+">+</option>
        <option value = "-">-</option>
        <option value = "x">x</option>
        <option value = "/">/</option>
        <option value = "%">%(mod)</option>
    </select>
    <br/>
    Enter second number: <input type="number" name="number2" />
    <br/>
    <button onclick="myFunction()">submit query</button>

    <script>
        function myFunction()
        {
            alert("No Alert");
        }
    </script>
    <input type="reset" name="resetbutton" value=" RESET " />


</form>
</body>
</html>