<html lang="en"><head>
    <meta charset="utf-8">
    <title>PYM Admin Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <style type="text/css">
        @CHARSET "UTF-8";
        /*
        over-ride "Weak" message, show font in dark grey
        */

        * {
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
            outline: none;
        }

        .label.label-error {
            color: #df050c;
        }

        .form-control {
            position: relative;
            font-size: 16px;
            height: auto;
            padding: 10px;
        {{ "@" . "include box-sizing(border-box);" }}

        &:focus {
             z-index: 2;
         }
        }

        body {
            background: url('/images/pw_maze_black.png') no-repeat center center fixed;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
        }

        .login-form {
            margin-top: 60px;
        }

        form[role=login] {
            color: #5d5d5d;
            background: #f2f2f2;
            padding: 26px;
        }
        form[role=login] img {
            display: block;
            margin: 0 auto;
            margin-bottom: 35px;
        }
        form[role=login] input,
        form[role=login] button {
            font-size: 18px;
            margin: 16px 0;
        }
        form[role=login] > div {
            text-align: center;
        }

        .form-links {
            text-align: center;
            margin-top: 1em;
            margin-bottom: 50px;
        }
        .form-links a {
            color: #fff;
        }
    </style>
    <script src="//code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
</head>
<body style="">
<div class="container">
    <div class="row" id="pwd-container">
        <div class="col-md-4 col-md-offset-4">
            <section class="login-form">
                <form method="POST" action="{{{ route("doadminlogin") }}}" role="login">
                    <h1>Viderent Admin Login</h1>
                    @if (Session::has('message'))
                        <div class="label label-error">{{{ Session::get('message') }}}</div>
                    @endif
                    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                    <input name="inputUserName" type="text" placeholder="User Name" required="" class="form-control input-lg">
                    <input name="inputPassword" type="password" class="form-control input-lg" id="password" placeholder="Password" required=""><ul class="error-list"></ul>
                    <button type="submit" name="go" class="btn btn-lg btn-primary btn-block">Sign in</button>
                </form>

                <div class="form-links">
                    <a href="{{ route("index") }}">Back to site</a>
                </div>
            </section>
        </div>
    </div>
</div>
</body>
</html>