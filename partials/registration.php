<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" 
      integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" 
      crossorigin="anonymous">
      <title>Voting System - Registration Page</title>
</head>
<body class="bg-dark">
      <h1 class="text-center text-info p-3">Voting System</h1>
      <div class="bg-info  py-4">
            <h2 class="text-center">Register Account</h2>
            <div class="container text-center">
                  <form action="">
                        <div class="mb-3">
                              <input type="text" class="form-control w-50 m-auto" 
                              placeholder="Enter your username" 
                              required='required' name="username">
                        </div>

                        <div class="mb-3">
                              <input type="password" class="form-control w-50 m-auto" 
                              placeholder="Enter your mobile number" 
                              required='required' name="mobile">
                        </div>

                        <div class="mb-3">
                              <input type="password" class="form-control w-50 m-auto" 
                              placeholder="Enter your password" 
                              required='required' name="password">
                        </div>

                        <div class="mb-3">
                              <input type="password" class="form-control w-50 m-auto" 
                              placeholder="Confirm your password" 
                              required='required' name="cpassword">

                        </div>

                        <div class="mb-3">
                              <input type="file" class="form-control w-50 m-auto" name="photo">
                        </div>

                        <div class="mb-3">
                              
                              <select name="std" class="form-select w-50 m-auto">
                                    <option value="group">group</option>
                                    <option value="voter">voter</option>
                              </select>
                        </div>

                        <button type="submit" class="btn btn-dark my-4">Register</button>
                        <p>Already have an account?<a href="../index.php" class="text-white" id="">Login Here</a></p>
                  </form>
            </div>
      </div>
      


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>