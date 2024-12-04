<?php
session_start(); // Move to the top for better session handling

$server = "localhost";
$username = "root";
$password = "";
$dbname = "aietclub";

// Create connection
$conn = mysqli_connect($server, $username, $password, $dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['login'])) {
  $username = trim($_POST['username']);
  $password = trim($_POST['password']);

  // Use prepared statements to prevent SQL injection
  $stmt = $conn->prepare("SELECT * FROM admin WHERE username = ? AND password = ?");
  $stmt->bind_param("ss", $username, $password);
  $stmt->execute();
  $result = $stmt->get_result();

  if ($result->num_rows == 1) {
    // Login success
    $_SESSION['loggedin'] = true;
    header('Location: ../home/home.php');
    exit();
  } else {
    // Login failed
    $error = "Invalid username or password";
  }
  $stmt->close(); // Close the statement
}

if (isset($_POST['createacc'])) {
  header('Location: ../create_account/create_account.php');
  exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Login</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
</head>
<body class="bg-[url('../images/mitwpu-college.jpg')]">
  <form action="" method="post">
    <div class="flex justify-center animate__animated animate__jello" id="container">
      <div class="flex flex-col justify-center">
        <div class="flex flex-col md:flex-row max-w-7xl justify-center items-center ">
          <div class="overflow-hidden w-full m-4 flex justify-center bg-gray-50 rounded-lg shadow-xl">
            <div class="flex flex-col md:flex-row items-center shadow-md h-full">
              <div class="md:w-1/2 overflow-hidden">
                <div class="flex flex-col items-center justify-center text-stone-400">
                  <div class="md:w-1/6 overflow-hidden">
                    <img src="../images/clubconnect-logo.png" alt="Club Connect Logo" />
                  </div>
                  <div class="flex flex-col">
                    <label for="username" class="m-2">USERNAME</label>
                    <input class="border-b m-2 bg-gray-50 focus:outline-none" required autofocus type="text" id="username" name="username" />

                    <label for="password" class="m-2">PASSWORD</label>
                    <input class="border-b m-2 bg-gray-50 focus:outline-none" required type="password" id="password" name="password"/>
                    
                    <?php if (isset($error)) { echo "<div class='text-red-500 m-2'>$error</div>"; } ?>
                    
                    <div class="flex m-2">
                      <input class="bg-gradient-to-l from-fuchsia-600 to-cyan-400 rounded-2xl px-6 py-1 text-white font-medium" type="submit" name="login" value="Login" />
                    </div>
                  </div>
                </div>
              </div>
              <div class="md:w-1/2 overflow-hidden">
                <img src="../images/college.jpeg" alt="College" />
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
  </form>
</body>
</html>
