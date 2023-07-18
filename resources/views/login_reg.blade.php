<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <style>
        .container{
         /* height:500px; */
         display:flex;
         background-color:pink;
        }
        .btn{
            margin-top:20px;
            display:flex;
            justify-content:space-between;

        }
        form{
            background-color:#6e7173;
            border:1px solid black;
            width:450px;
            margin-left:450px;
            margin-top:100px;        }
        .login_container{
            width:400px;
        }
        input{
            width:370px;
            padding:15px;
            
            
        }
        button{
            height:40px;
            width:90px;
            margin-top:20px;
        }
        .submit{
            margin-left:130px;
            background-color:#baf5d8;
        }
        .psw{
            margin-top:30px;
        }
        .form_container{
            margin:20px;
        }
        .cancelbtn{
            background-color:#f5424e;
        }
        #login,#register{
            display:none;
        }
        #register{
            display:block;
        }

    </style>
    <script>
           
    </script>
</head>
<body>
<div class="login_container">

<form action="" id="login"method="post">
<h2>Login now</h2>
    <div class="form_container">
    <label for="uname"><b>Username</b></label><br>
    <input type="text" placeholder="Enter Username" name="uname" required><br>

    <label for="uname"><b>Email</b></label><br>
    <input type="text" placeholder="Enter Email" name="email" required><br>

    <label for="psw"><b>Password</b></label><br>
    <input type="password" placeholder="Enter Password" name="psw" required><br><br>

    <div class="btn">
    <button type="button" class="cancelbtn">Cancel</button>
    <span class="psw">Forgot <a href="#">register</a></span>
  </div>

  <button class="submit"type="submit">Login</button>
    </form>
    </div>
</div>
</form>


<!-- <form action="" id="register"method="post">
<h2>Register Now</h2>
    <div class="form_container">
    <label for="uname"><b>Username</b></label><br>
    <input type="text" placeholder="Enter Username" name="uname" required><br>

    <label for="uname"><b>Email</b></label><br>
    <input type="text" placeholder="Enter Email" name="email" required><br>

    <label for="psw"><b>Password</b></label><br>
    <input type="password" placeholder="Enter Password" name="psw" required><br><br>

    <div class="btn">
    <button type="button" class="cancelbtn">Cancel</button>
    <span class="psw">Forgot <a href="#">register</a></span>
  </div>

  <button class="submit"type="submit">Login</button>
    </form>
    </div>
</div>
</form> -->
</body>
</html>