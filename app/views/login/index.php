<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Login</title>
     <style>
          * {
               margin: 0;
               padding: 0;
               box-sizing: border-box;
               font-family: 'Poppins', Arial, sans-serif;
          }

          body {
               background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('https://source.unsplash.com/1600x900/?nature,water');
               background-size: cover;
               background-position: center;
               display: flex;
               justify-content: center;
               align-items: center;
               height: 100vh;
          }

          .login-container {
               background-color: rgba(255, 255, 255, 0.85);
               padding: 40px;
               border-radius: 12px;
               box-shadow: 0px 10px 30px rgba(0, 0, 0, 0.2);
               width: 100%;
               max-width: 400px;
               text-align: center;
               transition: transform 0.3s ease-in-out;
          }

          .login-container:hover {
               transform: scale(1.02);
          }

          h2 {
               margin-bottom: 20px;
               font-size: 26px;
               color: #333;
          }

          .login-container input[type="email"],
          .login-container input[type="password"] {
               width: 100%;
               padding: 12px 15px;
               margin: 15px 0;
               border: 1px solid #ddd;
               border-radius: 6px;
               font-size: 16px;
               transition: border-color 0.3s ease-in-out;
          }

          .login-container input[type="email"]:focus,
          .login-container input[type="password"]:focus {
               border-color: #5cb85c;
               outline: none;
          }

          .login-container input[type="submit"] {
               width: 100%;
               padding: 12px;
               background-color: #5cb85c;
               color: white;
               border: none;
               border-radius: 6px;
               font-size: 18px;
               cursor: pointer;
               transition: background-color 0.3s ease;
               margin-top: 20px;
          }

          .login-container input[type="submit"]:hover {
               background-color: #4cae4c;
          }

          .login-container .error {
               margin-top: 15px;
               color: red;
               font-size: 14px;
               background-color: #f8d7da;
               padding: 10px;
               border-radius: 5px;
          }

          .login-container table {
               width: 100%;
          }

          .login-container td {
               padding: 10px;
               text-align: left;
          }

          .login-container label {
               font-weight: 500;
               color: #555;
          }

          .login-container .form-footer {
               margin-top: 20px;
               font-size: 14px;
               color: #777;
          }

          .login-container .form-footer a {
               color: #5cb85c;
               text-decoration: none;
               transition: color 0.3s ease;
          }

          .login-container .form-footer a:hover {
               color: #4cae4c;
          }
     </style>
</head>

<body>

     <div class="login-container">
          <h2>Login</h2>

          <form action="<?php echo URL; ?>/login/proses" method="post">
               <table>
                    <tr>
                         <td><label for="email">Email</label></td>
                         <td><input type="email" id="email" name="email" placeholder="Enter your email" required></td>
                    </tr>
                    <tr>
                         <td><label for="password">Password</label></td>
                         <td><input type="password" id="password" name="password" placeholder="Enter your password" required></td>
                    </tr>
                    <tr>
                         <td></td>
                         <td><input type="submit" name="submit" value="Login"></td>
                    </tr>
               </table>
          </form>

          <?php if (isset($_SESSION['login']) && $_SESSION['login'] == false) { ?>
               <div class="error">
                    Login tidak ditemukan
               </div>
          <?php } ?>

          <div class="form-footer">
               <p>Belum punya akun? <a href="#">Daftar sekarang</a></p>
          </div>
     </div>

</body>

</html>