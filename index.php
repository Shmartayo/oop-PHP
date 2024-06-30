<?php 

    if(isset($_POST['submit'])){
        //validate enteries
        echo 'form submitted';
    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Document</title>
</head>
<body>
    <div class="new-user">
        <h2>Create new user</h2>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <label for="username"> Username:
                <input type="text" name="username">
            </label>
            <label for="email">Email:
                <input type="text" name="email">
            </label>

            <input type="submit" value="submit" name="submit">

        </form>
    </div>
    
</body>
</html>