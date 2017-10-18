 <?php
session_start();
$_SESSION['auth'] = 'true';
?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>neubox form</title>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <!-- Website Font style -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/themes/blitzer/jquery-ui.css" />
        <!-- Google Fonts -->
        <link href='https://fonts.googleapis.com/css?family=Passion+One' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Oxygen' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="./assets/index.css">
</head>
    <body>
 <nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="actions/getUsers.php">List all users <span class="sr-only">(current)</span></a></li>
      </ul>
      <form action="actions/delete.php" method="POST" id="delete" class="navbar-form navbar-left">

          <input type="text" class="form-control"  name="email" placeholder="Delete user by email" required>
        <button type="submit" class="btn btn-default">Delete</button>
    </form>

    </div>
      </div>
      </nav>
        <div class="container">
            <div class="row main">
                <div class="main-login main-center">
                <h5>Sign up</h5>
                <form action="actions/create.php" id="form" method="POST">

                        <div class="form-group">
                            <label for="email" class="cols-sm-2 control-label">Email</label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                                    <input type="text" class="form-control" name="email" id="email"  placeholder="Enter your Email" required/>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="phone" class="cols-sm-2 control-label">Your Phone</label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
                                    <input type="text" class="form-control" name="phone" id="phone"  placeholder="Enter your Phone" required/>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="company" class="cols-sm-2 control-label">Company</label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
                                    <input type="text" class="form-control" name="company" id="company"  placeholder="Enter your Company Name"/>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password" class="cols-sm-2 control-label">Password</label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                                    <input type="password" class="form-control" name="password" id="password"  placeholder="Enter your Password" required/>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="datepicker" class="cols-sm-2 control-label">Birthdate</label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                                   <div class="form-group">
                            <input type="text" id="datepicker" class="form-control" name="datepicker" value="Date" required />
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group ">
                        <input type="submit" id="enviar" value="create" class="btn btn-primary btn-lg btn-block login-button">


                    </form>
                </div>
            </div>
        </div>

         <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script
              src="https://code.jquery.com/jquery-3.2.1.js"
              integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
              crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script src="./assets/index.js">  </script>
    </body>
</html>



