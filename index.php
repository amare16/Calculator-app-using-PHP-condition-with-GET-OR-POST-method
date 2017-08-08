<!DOCTYPE html>
<html>
    <head>
        <title>Calculator app using PHP condition with GET and POST method</title>
    </head>
    <body>

        <form method="post">
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
            
            }
        ?>

    </body>
</html>