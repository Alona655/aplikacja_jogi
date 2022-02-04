<?php include('userInfo.php'); ?>
<!DOCTYPE html>

<head>
    <link rel="stylesheet" type="text/css" href="public/css/profile.css">
    <?php include ('linkToPage.php')?>
</head>

<body>
<main>
    <?php include ('header.php')?>
    <h1 class="titleProfile">Mój Profil</h1>
    <form action="updateProfile" method="POST">
        <div class="contentProfile">
            <div class=""></div>
            <?php
            $i = 0;
            foreach ($user as $key => $field): ?>
            <div class="parametrsProfile">
                <div class="nameProfilePage">
                    <div class="name-conteinerProfilePage">
                        <p class="titleNameProfile"><?= $title[$i] ?></p>
                        <input name="<?= $key ?>" type="<?= ($key=='birthday') ? "date" : 'text' ?>" size="150px" value="<?= $field ?>" required>
                    </div>
                </div>
                <?php $i++;
                endforeach; ?>
            </div>
        </div>
        <div class="buttonLoginPage">
            <button class="textButtonLogin" type="submit">Zaktualizować profil</button>
        </div>
    </form>

    <button class="textButtonLogin toSettings"><a href="settings">Ustawienia</a> </button>

</main>
<?php include('footer.php') ?>
</body>