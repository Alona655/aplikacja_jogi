<!DOCTYPE html>

<head>
    <link rel="stylesheet" type="text/css" href="public/css/settings.css">
    <title>Settings</title>
</head>

<body style="
    background-image: url(public/imgSettings/backgroundTopSettings.svg);
    background-repeat: no-repeat;
    background-position-x: right;
    background-size: 55%;
">
<main>
    <?php include ('header.php')?>

    <h1 class="titleSettings">Ustawienia</h1>
    <div class="buttonRegSettings">
        <button class="textButtonSettings">Edytuj profil</button>
    </div>
    <p class="changePassword">Zmień hasło</p>
    <div class="oldPasswordSet">
        <div class="oldPassword-conteinerSetPage">
            <input class="oldPassword-conteiner-formSetPage" type="password" size="30" placeholder="Stare hasło">
        </div>
    </div>
    <div class="newPasswordSet">
        <div class="newPassword-conteinerSetPage">
            <input class="newPassword-conteiner-formSetPage" type="password" size="30" placeholder="Nowe hasło">
        </div>
    </div>
    <div class="buttonChangePasswordSettings">
        <button class="textButtonChangePasswordSettings">Zmień</button>
    </div>
    <div class="buttonDeleteProfileSettings">
        <button class="textButtonDeleteProfileSettings">Usuń profil</button>
    </div>
</main>

<?php include ('footer.php')?>

</body>