
<?php
        // capture input 

        $email = $_POST['email'] ?? '';
        $pass = $_POST['password'] ?? '';
        $phone = $_POST['phone_no'] ?? '';
 
        // Define Regex
        $emailPattern = "/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/";
        $phonePattern = "/^\+?[0-9]{1,4}?[-.\s]?\(?[0-9]{1,3}?\)?[-.\s]?[0-9]{3}[-.\s]?[0-9]{4}$/";
        $passwordPattern = "/^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/";


        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            // Email Validation
            if (!preg_match($emailPattern,$email)) {
                echo "<p class='text-danger'>Invalid email format.</p>";
            }



            // Password Validation
            elseif (!preg_match($passwordPattern,$pass)) {
                echo "<p class='text-danger'>Invalid password it must be at least 8 character small or long and mix</p>";
            }



            // Phone_no Validation
            elseif (!preg_match($phonePattern,$phone)) {
                echo "<p class='text-danger'>Invalid Phone number</p>";
            }

            else{
                // if all validation pass
                echo "<p class='text-success'>Form is Valid!</p>";
            }
        }


?>


<form action="index.php" method="post">
  <div class="mb-3">
    <label for="email" class="form-label">Email address</label>
    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" required>
  </div>
  <div class="mb-3">
    <label for="password" class="form-label">Password</label>
    <input type="password" class="form-control" id="password" name="password" required>
  </div>
  <div class="mb-3">
    <label for="phone_no" class="form-label">Phone_no</label>
    <input type="text" class="form-control" id="phone_no" name="phone_no">
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>