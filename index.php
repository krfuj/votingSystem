<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" 
      integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" 
      crossorigin="anonymous">
      <title>Voting System</title>

</head>
<body class="bg-dark">
      <h1 class="text-info text-center p-3">Voting System</h1>
      <div class="bg-info">
            <h2 class="text-center">Login</h2>
            <div class="container text-center">
                  <form action="">
                        <div class="mb-3">
                              <input type="text" name="username" class="form-control w-50 m-auto"
                              placeholder="Enter your username" require="required">
                        </div>

                        <div class="mb-3">
                              <input type="text" name="mobile" class="form-control w-50 m-auto"
                              placeholder="Enter your mobile number" require="required" 
                              maxlength="10" minlength="10">
                        </div>

                        <div class="mb-3">
                              <input type="password" name="password" class="form-control w-50 m-auto"
                              placeholder="Enter your password" require="required">
                        </div>
                        <div class="mb-3">
                              <select name="std" class="form-control w-50 m-auto">
                                    <option value="group">group</option>
                                    <option value="voter">voter</option>
                              </select>
                        </div>

                        <button type="submit" class="btn btn-dark my-4">Submit</button>
                        <p>Don't have an account?<a href="../voting/partials/registration.php" class="text-white" id="">Register Here</a></p>
                  </form>
            </div>
      </div>
      <script 
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" 
      integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
      crossorigin="anonymous">
      </script>
</body>
</html>