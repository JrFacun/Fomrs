<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
</head>

<body>
    <div class="container">
        <div class="row col-md-6 col-md-offset-3">
            <div class="panel panel-primary">
                <div class="panel-heading text-center">
                    <h1>FORMS</h1>
                </div>
                <div class="panel-body">
                    <form action="index.php" method="post">
                        <div class="form-group">
                            <label for="firstName"> First Name</label>
                            <input type="text" class="form-control" id="firstName" name="firstName">
                        </div>
                        <div class="form-group">
                            <label for="lastName">Last Name</label>
                            <input type="text" class="form-control" id="lastName" name="lastName">
                        </div>
                        <div class="form-group">
                            <label for="gender">Gender</label>
                        </div>
                        <label for="male" class="radio-inline"><input type="radio" name="gender" value="male" id="male">Male</label>
                        <label for="female" class="radio-inline"><input type="radio" name="gender" value="female" id="female">Female</label>
                        <label for="other" class="radio-inline"><input type="radio" name="gender" value="other" id="male">Other</label>
                </div>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" class="form-control" id="email" name="email" />
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password" />
            </div>
            <div class="form-group">
                <label for="number">Phone Number</label>
                <input type="text" class="form-control" id="number" name="number">
            </div>
            <input type="submit" class="btn btn primary">
            </form>
        </div>
    </div>
</body>

</html>