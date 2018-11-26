<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Calculator</title>
    <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
    <link rel="stylesheet" href="main.css">
</head>
<body>

    <div class="container">

        <form method="POST" action="calculator.php">

               <h1>A Simple PHP Calculator</h1>



        <input type="text" class="form-control" name="num1" placeholder="Number 1"><br>
        <input type="text" class="form-control" name="num2" placeholder="Number 2"><br>
    
        <select name="operator">
            <option>None</option>
            <option>Add</option>
            <option>Subtract</option>
            <option>Multiply</option>
            <option>Divide</option>
        </select>
            <br>

    <button name="submit" value="submit" type="submit">Calculate</button>




    </form>

</div>

 <p>The answer is:</p>







    <?php
        
        if (isset($_POST['submit'])) {
            $result1 = $_POST['num1'];
            $result2 = $_POST['num2'];
            $operator = $_POST['operator'];
            

          


            switch ($operator) {
                case "None":
                echo "You need to select a method!";
                break;

                case "Add":
                echo $result1 + $result2;
                break;

                case "Subtract":
                echo $result1 - $result2;
                break;

                case "Multiply":
                echo $result1 * $result2;
                break;

                case "Divide":
                echo $result1 / $result2;
                break;

            }

        }
    
    
    ?>


</body>
</html>