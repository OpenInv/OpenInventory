<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up</title>

    <style>
        .input-wrapper {
            width: 10%; margin: 0 auto;
        }

    </style>
</head>
<body>
    <div style="width: 100%; position: absolute; top: 0%;">
        <div class="input-wrapper">
            <p style="font-size: 30px; text-align: center;">OpenInventory Account Setup</p>
        </div>
        <div class="input-wrapper">
            <img style="width: 100%;" src="assets/images/chest.png"></img>
        </div>
        <div class="input-wrapper input-field">
            <input name="username" id="username" type="text" class="validate">
            <label for="username">Username</label>
        </div>
        <div class="input-wrapper input-field">
            <input name="password" id="password" type="password" class="validate">
            <label for="password">Password</label>
        </div>
        <div class="input-wrapper">
            <button class="btn waves-effect waves-light">Create Account
                <i class="material-icons right">account_circle</i>
            </button>
        </div>
    </div>
    <link rel="stylesheet" href="appCss.css">
    <script src="materialize/js/materialize.min.js"></script>
</body>
</html>