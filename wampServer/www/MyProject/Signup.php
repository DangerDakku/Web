<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/jquery-3.3.1.min.js"></script>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-xs-4">
                    <h1>Enter your Details</h1>
                    <form action="Signupsql.php" method="POST">
            FirstName: <input type="text" class="form-control" name="firstname"><br><br>
            Lastname: <input type="text" class="form-control" name="lastname"><br><br>
            Emailid:  <input type="text" class="form-control" name="emailid"><br><br>
            Password: <input type="password" class="form-control" name="password"><br><br>
             <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </form>
                </div>
            </div>
        </div>
        
    </body>
</html>