<?php include ('userInfo.php')?>

<!DOCTYPE html>

<head>
    <link rel="stylesheet" type="text/css" href="public/css/settings.css">
    <?php include ('linkToPage.php')?>
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
        <button class="textButtonSettings"><a href="profile">Edytuj profil</a></button>
    </div>
    <form action="updateUserSetting" method="post">

        <?php if (isset($message)) { ?>
            <div class="messages" id="ErrorInfos">
                <?php foreach ($message as $info) {
                    echo $info;
                } ?>
            </div>
        <?php } ?>

        <p class="changePassword">Zmień hasło</p>
        <div class="oldPasswordSet">
            <div class="oldPassword-conteinerSetPage">
                <input name="oldPassword" class="oldPassword-conteiner-formSetPage" type="password" size="30" placeholder="Stare hasło">
            </div>
        </div>
        <div class="newPasswordSet">
            <div class="newPassword-conteinerSetPage">
                <input name="newPassword" class="newPassword-conteiner-formSetPage" type="password" size="30" placeholder="Nowe hasło">
            </div>
        </div>
        <div class="buttonChangePasswordSettings">
            <button class="textButtonChangePasswordSettings">Zmień</button>
        </div>
    </form>
    <form action="deleteUserProfile" method="get">
        <input name="delete" value="true" hidden>
        <div class="buttonDeleteProfileSettings">
            <button class="textButtonDeleteProfileSettings">Usuń profil</button>
        </div>
    </form>
</main>

<?php include ('footer.php')?>

</body>