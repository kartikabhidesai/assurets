<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Registration</title>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="font-awesome/css/font-awesome.css" rel="stylesheet">
        <link href="css/plugins/iCheck/custom.css" rel="stylesheet">
        <link href="css/animate.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
    </head>

    <body class="gray-bg">

        <div class="middle-box text-center loginscreen   animated fadeInDown">
            <div>
                <div>


                </div>
                <h3>Register</h3>
                <p>Create account to see it in action.</p>
                 @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                <form class="m-t" role="form" action="" method="post">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <script type="text/javascript">
                        // $(document).ready(function(){ //newly added 
                        // $('#Submit').click(function() {alert('in');
                        //     var emailVal = $('#email').val(); // assuming this is a input text field
                        //    //$.post('checkemail.php', {'email' : emailVal}, function(data) {
                        //         if(data=='exist') return false;
                        //         else $('#form1').submit();
                        //     });
                        // });});
                    </script>
                    <div class="form-group">
                        <input type="text" class="form-control" name="firstname" placeholder="FirstName" >
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="lastname" placeholder="LastName" >
                    </div>
                    <div class="form-group">
                        <input type="email" id class="form-control" name="email" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <input type="text" id class="form-control" name="username" placeholder="Username">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" name="password" placeholder="Password">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="mobile" placeholder="Mobile">
                    </div>
                    <div class="form-group">
                        <div class="checkbox i-checks"><label> <input type="checkbox"><i></i> Agree the terms and policy </label></div>
                    </div>
                    <button type="submit" class="btn btn-primary block full-width m-b" name="submit" value="submit">Register</button>

                    <p class="text-muted text-center"><small>Already have an account?</small></p>
                    <a class="btn btn-sm btn-white btn-block" href="login.php">Login</a>
                </form>
                <p class="m-t"> <small>Inspinia we app framework base on Bootstrap 3 &copy; 2014</small> </p>
            </div>
        </div>

        <!-- Mainly scripts -->
        <script src="js/jquery-3.1.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <!-- iCheck -->
        <script src="js/plugins/iCheck/icheck.min.js"></script>
        <script>
                    $(document).ready(function () {
                        $('.i-checks').iCheck({
                            checkboxClass: 'icheckbox_square-green',
                            radioClass: 'iradio_square-green',
                        });
                    });
        </script>
    </body>

</html>
