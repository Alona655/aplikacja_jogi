<!DOCTYPE html>

<head>
    <link rel="stylesheet" type="text/css" href="public/css/login.css">
    <title>Yoga</title>
    <link rel="icon" href="public/img/yoga.ico" type="image/x-icon">
</head>

<body>
<main>
    <section>
        <header>
            <div class="logoLoginPage">
                <p>yoga</p>
            </div>
        </header>
        <div class="contentLoginPage">
            <div class="table">
                <div class="titleLoginPage">
                    <p>Zaloguj się</p>
                </div>
                <form class="login" action="login" method="POST">
                    <?php if (isset($message)) { ?>
                        <div class="messages" id="ErrorInfos">
                            <?php foreach ($message as $info) {
                                echo $info;
                            } ?>
                        </div>
                    <?php } ?>
                    <div class="emailLoginPage">
                        <div class="login-conteinerLoginPage">
                            <input name="email" type="email" size="30" placeholder="email@email.pl" required>
                        </div>
                    </div>
                    <div class="passwordLoginPage">
                        <div class="password-conteinerLoginPage">
                            <input name="password" type="password" size="30" placeholder="Password" required>
                        </div>
                    </div>
                    <div class="buttonLoginPage">
                        <button class="textButtonLogin" type="submit">log in</button>
                    </div>
                </form>
                <button class="textButtonLogin toRegister" ><a href="registration">Zarejestrować</a></button>
                <div class="infoAndLinks">
                    <div class="textUnderButtonLoginPage">
                        <p>Albo wejdż za pomocą</p>
                    </div>
                    <div class="imgsLogins">
                        <img src="public/imgLoginPage/google.svg">
                        <img src="public/imgLoginPage/facebook.svg">
                    </div>
                    <div class="registrationLoginPage">
                        <a class="konto"><span class="registration">Nie masz konta? </span>Zarejestruj się</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
</body>