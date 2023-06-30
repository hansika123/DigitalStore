<!DOCTYPE html>
<html>
<head>
<link href="{{ asset('import/assets/img/bg.png') }}" rel="icon">
    <title>Welcome to Digital Store</title>
    <style>
        body {
        
            font-family: Arial, sans-serif;
            text-align: center;
            margin-top:550px;
           
        }

        .navbar {
            background-color: #333; 
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            padding: 20px 0;
           
        }

        .navbar a {
            color: #fff;
            text-decoration: none;
            margin: 0 20px;
            float:right;
            margin-right:50px;
        }

        .navbar a:hover {
            color: blue; 
        }

     

        h1 {

            font-size: 48px; 
            margin-bottom: 40px;
            color:white;
            font-weight:bold;
        }

        p.button {
            cursor: pointer;
            background-color: black;
            color: white;
            padding: 20px 30px;
            border-radius: 10px;
            display: inline-block;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
        }

        p.button:hover {
            background-color: blue;
        }

       
    </style>
</head>
<body style="background-image: url('{{ asset('import/assets/img/bg.png') }}'); 
background-size: cover; background-repeat: no-repeat; background-position: center;
 ">
    <div class="navbar">
        <a href="{{ route('signup') }}">Sign Up</a>
        <a href="{{ route('showLoginForm') }}">Log In</a>
    </div>

    <h1>Digital Store</h1>
    <p class="button" onclick="window.location.href='{{ route('signup') }}'">
        Get started 
    </p>
    
</body>
</html>