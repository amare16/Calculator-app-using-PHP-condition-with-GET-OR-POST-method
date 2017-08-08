<!DOCTYPE html>
<html>
    <head>
        <title>Calculator app using PHP condition with GET and POST method</title>
    </head>
    <body>

        <form method="get">
            <input type="number" name="num1" placeholder="Number1">
            <input type="number" name="num2" placeholder="Number2">
            <select name="operator">
                <option>None</option>
                <option>Add</option>
                <option>Subtract</option>
                <option>Multiply</option>
                <option>Divide</option>
            </select><br><br>
            <button type="submit" name="submit" value="submit">Calculate</button>
        </form>

        <p>The answer is :</p>


        <?php

            if (isset($_GET['submit'])) {

                $num1 = $_GET['num1'];
                $num2 = $_GET['num2'];
                $operator = $_GET['operator'];

                switch ($operator) {

                    case "None":
                        echo "You need to select an operator";
                        break;
                    case "Add":
                       echo $num1 + $num2;
                        break;
                    case "Subtract":
                       echo $num1 - $num2;
                        break;
                    case "Multiply":
                        echo $num1 * $num2;
                        break;
                    case "Divide":
                        echo $num1 / $num2;
                        break;
                }

            }
        ?>

    </body>
</html>