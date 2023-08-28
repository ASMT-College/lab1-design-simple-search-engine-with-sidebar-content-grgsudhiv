<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <?php
        echo "<h1 style='color:blue'> My Form </h1>"; 
        if(isset($_POST['submit'])){
            echo 'Username is :'.$_POST['Username']; 
            echo 'Password is :'.$_POST['pwd'];
            // echo 'Date is :'.$_POST['date'];
        }
    ?>
    <form action="" method="post">
        <fieldset>
            <legend>login</legend>
            <div>
                <label for="">Username : </label> <br>
                <input type="text" name="Username" id="">
            </div>
            <div>
                <label for="">Password : </label> <br>
                <input type="password" name="pwd" id="">
            </div>
            <div>
                <label for="">Select : </label>
                <select name="country" id="">
                    <option value="Nepal">Nepal</option>
                    <option value="China">China</option>
                    <option value="India">India</option>
                    <option value="Pakistan">Pakistan</option>
                </select>
                <br>
                <br>
            </div>
            <br>
            <input type="submit" value="login" name="submit">
            <!-- <input type="date" name="date" id=""> 
            <input type="color" name="color" id=""> <br> -->
        </fieldset>
    </form>
</body>
</html>



<!-- 
Assignment :    
    1. what are different form / elements / attributes ?
    2. write difference between get and push ?




    day 2 :

    datalist in select
    range
    
 -->