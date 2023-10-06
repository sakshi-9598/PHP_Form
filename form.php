<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>User Form</title>

    <link rel="stylesheet" href="style.css">

  </head>
  <body>
    <div class="container">
    <h1>Enter User Information</h1>
    <form action="config.php" method="POST">

      <label for="first_name">First Name:</label>
      <input type="text" name="first_name" required /><br /><br />

      <label for="last_name">Last Name:</label>
      <input type="text" name="last_name" required /><br /><br />

      <label for="email">Email:</label>
      <input type="email" name="email" required /><br /><br />

      <label for="contact">Contact:</label>
      <input type="text" name="contact" required /><br /><br />

      <label for="city">City:</label>
      <input type="text" name="city" required /><br /><br />

      <button> Submit </button>
      <!-- <input type="submit" value="Submit"> -->

    </form>

    </div>

  </body>
</html>



