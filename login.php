
<?php
    require_once "config.php";
    $redirectURL = "http://localhost:8888/loginF/fb-callback.php";
    $permissions = ['email'];
    $loginURL = $helper->getLoginUrl($redirectURL, $permissions);

?>

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">

    <title>loginF</title>
</head>
<body>
    <div class="container">
        <div class="alert alert-info py-5 mt-5 text-center" role="alert">
            <button type="button" onclick="window.location = '<?php echo $loginURL; ?>'" class="btn btn-lg btn-outline-primary">LOGIN USING FACEBOOK</button>
        </div>
    </div>

</body>
</html>
