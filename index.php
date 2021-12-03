<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>PHP Calculator</title>
</head>
<style>
* {
    font-family: sans-serif;
}

.container {
    display: flex;
    height: 550px;
    width: 100%;
    flex-direction: row;
    justify-content: center;
    align-items: center;
}

form input[type="text"] {
    height: 20px;
    border: none;
    display: block;
    border-bottom: 2px solid crimson;
    font-size: 20px;
    outline: none;
}

form input[type="text"]:hover {
    border-bottom: 2px solid green;
}

select {
    width: 250px;
    height: 40px;
    font-size: 20px;
}

button {
    width: 250px;
    height: 50px;
    font-size: 20px;
    background-color: crimson;
    border: none;
    outline: none;
    cursor: pointer;
    box-shadow: grey 12px;
}



.answer {
    color: green;
    font-size: 30px;
}



</style>

<body>
    <center>
        <h1 class="hero">Php Calculator🚀🚀🔥</h1>
    </center>

    <div class="container">
        <form method="GET">
            <div class="answer">
                <?php            
    if(isset($_GET['submit'])){
 
        $result1 = $_GET['num1'];
        $result2 = $_GET['num2'];
        $operator = $_GET['operator'];

        switch($operator){
            case "None":
                echo"you need to select a method!!❌";
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
    }?>
            </div>
            <br />
            <br />
            <input type="text" name="num1" placeholder="Enter first number" />
            <br />
            <br />
            <input type="text" name="num2" placeholder="Enter second number" />
            <br />
            <br />
            <select name="operator">
                <option>None</option>
                <option>Add</option>
                <option>Subtract</option>
                <option>Multiply</option>
                <option>Divide</option>
            </select>
            <br />
            <br />
            <br />

            <button type="submit" value="submit" name="submit">Calculate</button>
        </form>
    </div>
    <center>
        <h4 class="footer">Made with <span>💖</span> by Langat Fortune</h4>
    </center>

</body>

</html>