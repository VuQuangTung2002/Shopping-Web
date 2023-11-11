<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang-Dang-Nhap</title>
    <!-- Core CSS - Include with every page -->
    <link href="public/assets/plugins/bootstrap/bootstrap.css" rel="stylesheet" />
    <link href="public/assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="public/assets/plugins/pace/pace-theme-big-counter.css" rel="stylesheet" />
   <link href="public/assets/css/style.css" rel="stylesheet" />
      <link href="public/assets/css/main-style.css" rel="stylesheet" />

</head>

<body class="body-Login-back">

    <div class="container">
       
        <div class="row">
            <div class="col-md-4 col-md-offset-4 text-center logo-margin ">
              <!--<img src="public/assets/img/logo.png" alt=""/>-->
                </div>
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">                  
                    <div class="panel-heading">
                        <h3 class="panel-title">Vui Lòng Đăng Nhập</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form" method="post" action="index.php?controller=login">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Username" name="c_username" type="text">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="c_password" type="password" value="">
                                </div>
                                <!--<div class="checkbox">
                                    <label>
                                        <input name="remember" type="checkbox" value="Remember Me">Remember Me
                                    </label>
                                </div>-->
                               
                                    <input type="submit" class="btn btn-lg btn-success btn-block"  value="Đăng Nhập">
                               
                                <!-- Change this to a button or input when using this as a form -->
                                
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

     <!-- Core Scripts - Include with every page -->
    <script src="public/assets/plugins/jquery-1.10.2.js"></script>
    <script src="public/assets/plugins/bootstrap/bootstrap.min.js"></script>
    <script src="public/assets/plugins/metisMenu/jquery.metisMenu.js"></script>

</body>

</html>
