<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Admin Login | Hyundai</title>

    <style>

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Arial, sans-serif;
        }


        body {

            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;

            background:
            linear-gradient(
                135deg,
                #06152b,
                #0b1f3a,
                #16345f
            );

            background-size: 300% 300%;
            animation: backgroundMove 12s ease infinite;

        }


        @keyframes backgroundMove {

            0% {
                background-position: 0% 50%;
            }

            50% {
                background-position: 100% 50%;
            }

            100% {
                background-position: 0% 50%;
            }

        }



        .background-circle {

            position: absolute;
            border-radius: 50%;
            filter: blur(10px);
            opacity: .35;
            animation: floating 8s ease-in-out infinite;

        }


        .circle-one {

            width: 300px;
            height: 300px;
            background:#ffffff;
            top:-120px;
            left:-100px;

        }


        .circle-two {

            width: 350px;
            height:350px;
            background:#38bdf8;
            bottom:-150px;
            right:-100px;
            animation-delay:2s;

        }


        @keyframes floating {

            0%,100% {

                transform:translateY(0px);

            }

            50% {

                transform:translateY(-40px);

            }

        }



        .login-box {

            width:420px;
            padding:45px;

            background:
            rgba(255,255,255,.12);

            backdrop-filter:blur(20px);

            border:
            1px solid rgba(255,255,255,.25);

            border-radius:25px;

            box-shadow:
            0 25px 60px rgba(0,0,0,.35);

            animation:
            fadeUp .8s ease forwards;

            position:relative;
            z-index:10;

        }


        @keyframes fadeUp {

            from {

                opacity:0;
                transform:translateY(50px);

            }


            to {

                opacity:1;
                transform:translateY(0);

            }

        }



        .logo {

            width:80px;
            height:80px;

            margin:auto;
            margin-bottom:20px;

            border-radius:50%;

            display:flex;
            align-items:center;
            justify-content:center;

            background:white;

            color:#0b1f3a;

            font-size:35px;
            font-weight:800;

            box-shadow:
            0 10px 30px rgba(0,0,0,.25);

            animation:pulse 3s infinite;

        }


        @keyframes pulse {

            0% {

                transform:scale(1);

            }

            50% {

                transform:scale(1.08);

            }

            100% {

                transform:scale(1);

            }

        }



        h2 {

            text-align:center;

            color:white;

            font-size:28px;

            margin-bottom:8px;

            letter-spacing:.5px;

        }


        .subtitle {

            text-align:center;

            color:#dbeafe;

            font-size:14px;

            margin-bottom:35px;

        }



        .input-group {

            position:relative;
            margin-bottom:20px;

        }



        .input-group input {

            width:100%;

            padding:15px 18px;

            border:none;

            outline:none;

            border-radius:14px;

            background:
            rgba(255,255,255,.9);

            font-size:15px;

            transition:.3s;

        }



        .input-group input:focus {

            transform:translateY(-3px);

            box-shadow:
            0 10px 25px rgba(0,0,0,.15);

        }



        button {

            width:100%;

            padding:15px;

            border:none;

            border-radius:14px;

            background:#ffffff;

            color:#0b1f3a;

            font-size:16px;

            font-weight:700;

            cursor:pointer;

            transition:.3s;

            position:relative;

            overflow:hidden;

        }



        button:hover {

            transform:translateY(-4px);

            box-shadow:
            0 15px 30px rgba(0,0,0,.25);

        }



        button:active {

            transform:scale(.97);

        }



        button.loading {

            pointer-events:none;

            color:transparent;

        }


        button.loading::after {

            content:"";

            position:absolute;

            width:20px;
            height:20px;

            border:3px solid #0b1f3a;

            border-top-color:transparent;

            border-radius:50%;

            top:50%;
            left:50%;

            transform:
            translate(-50%,-50%);

            animation:spin .8s linear infinite;

        }


        @keyframes spin {

            from {

                transform:
                translate(-50%,-50%)
                rotate(0deg);

            }

            to {

                transform:
                translate(-50%,-50%)
                rotate(360deg);

            }

        }



        .footer {

            text-align:center;

            margin-top:25px;

            color:#cbd5e1;

            font-size:13px;

        }



        .error {

            background:#fee2e2;

            color:#991b1b;

            padding:10px;

            border-radius:10px;

            margin-bottom:15px;

            font-size:14px;

        }



        @media(max-width:500px){

            .login-box {

                width:90%;

                padding:30px;

            }

        }


    </style>

</head>


<body>


<div class="background-circle circle-one"></div>

<div class="background-circle circle-two"></div>



<div class="login-box">


    <div class="logo">

        H

    </div>


    <h2>
        Hyundai Admin
    </h2>


    <p class="subtitle">
        Vehicle Management System
    </p>



    @if($errors->any())

        <div class="error">

            {{ $errors->first() }}

        </div>

    @endif



    <form method="POST" action="/login" id="loginForm">

        @csrf


        <div class="input-group">

            <input
                type="email"
                name="email"
                placeholder="Email Address"
                required>

        </div>



        <div class="input-group">

            <input
                type="password"
                name="password"
                placeholder="Password"
                required>

        </div>



        <button type="submit" id="loginButton">

            Login Admin

        </button>


    </form>



    <div class="footer">

        © Hyundai Vehicle Management System

    </div>


</div>



<script>

    const form = document.getElementById('loginForm');

    const button = document.getElementById('loginButton');


    form.addEventListener('submit', function(){

        button.classList.add('loading');

        button.innerHTML = "Loading";

    });


</script>


</body>

</html>