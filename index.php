<?php 

    require "user_validator.php";


    if(isset($_POST['submit'])){
        //validate enteries
        /*create a new instance of the user_validation class 
          and pass in the post data the user entered as an 
          argument.
        */
        $validation = new UserValidator($_POST);

        //we store the values of the errors inside this array
        $errors =  $validation->validateForm(); 

        /*if there are errors we are going to output them to
          the form 
         */

        /* if there are no errors this is where we continue to 
            save our data into the database
        */

        /*check if the errors array doesn't consist of any 
          errors and redirect if there are no errors
          do nothing if there are no errors */ 
        // if(array_filter($errors)){
        //     //echo errors in forms
        // }  else {
        //     //override the values and make insertion of values into the database secure
        //     $email = mysqli_real_escape_string($conn, $_POST['email']);
        //     $title = mysqli_real_escape_string($conn, $_POST['title']);
        //     $ingredients = mysqli_real_escape_string($conn, $_POST['ingredients']);

        //     //create sql query variable
        //     $sql ="INSERT INTO pizzas (email,title,ingredients) VALUES('$email','$title','$ingredients')";

        //     //save to db and check
        //     if(mysqli_query($conn,$sql)){
        //         //success
        //         //Redirect to the index page
        //         header("Location: index.php");
        //     } else {
        //         //error
        //         echo "Query error: " . mysqli_error($conn);
        //     }
        // }      
    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Form validation</title>
</head>
<body>
    <div class="new-user">
        <h2>Create new user</h2>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <label for="username"> Username:
                <input type="text" name="username" value="<?php echo $_POST['username'] ?? '' ?>">
                <div class="error">
                    <?php echo $errors['username'] ?? ''; ?>
                </div>
            </label>
            <label for="email">Email:
                <input type="text" name="email" value="<?php echo $_POST['email'] ?? '' ?>">
                <div class="error">
                    <?php echo $errors['email'] ?? ''; ?>
                </div>
            </label>

            <input type="submit" value="submit" name="submit">

        </form>
    </div>
    
</body>
</html>