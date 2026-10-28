<?php
session_start();
require 'function.php';



// proses login
if(isset($_POST['login'])){
    $email = $_POST['email'];
    $password = $_POST['password'];

    // ambil berdasarkan email saja
    $query = mysqli_query($conn, "SELECT * FROM login WHERE email='$email'");

    if(mysqli_num_rows($query) > 0){
        $data = mysqli_fetch_assoc($query);

        // cek password biasa (BIAR PASTI BISA LOGIN DULU)
        if($password == $data['password']){
            $_SESSION['log'] = true;
            $_SESSION['email'] = $email;

            header('Location: stokbarang.php');
            exit;
        } else {
            $error = "Password salah!";
        }
    } else {
        $error = "Email tidak ditemukan!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <!-- CSS -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
</head>

<body class="bg-white-primary">   

<div class="card-body p-5">
    <div class="text-center mb-4">
        <img src="img/PT-PLN-Icon-Plus.jpg" alt="PT-PLN-icon-plus.jpg" style="width: 200px;" class="mb-3">
               <h1 class="h5 text-gray-900 font-weight-bold"></h1>
        <p class="text-muted big"></p>
    </div>
           <div class="container">
    <div class="row justify-content-center">
        <div class="col-xl-6 col-lg-7 col-md-9">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-5">

                    <div class="text-center">
                        <h1 class="h4 text-gray-900 mb-4">Login</h1>
                    </div>
      
    
   

                    <!-- NOTIF ERROR -->
                    <?php if(isset($error)): ?>
                        <div class="alert alert-danger text-center">
                            <?= $error; ?>
                        </div>
                    <?php endif; ?>

                    <!-- FORM -->
                    <form method="post" class="user">

                        <div class="form-group">
                            <input type="email" class="form-control form-control-user"
                                name="email" placeholder="Enter Email..." required>
                        </div>

                        <div class="form-group">
                            <input type="password" class="form-control form-control-user"
                                name="password" placeholder="Password" required>
                        </div>

                        <button type="submit" name="login"
                            class="btn btn-primary btn-user btn-block">
                            Login
                        </button>

                    </form>

                </div>
            </div>

        </div>
    </div>
</div>

</body>
</html>