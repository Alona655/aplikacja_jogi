<!DOCTYPE html>

<head>
    <link rel="stylesheet" type="text/css" href="public/css/login.css">
    <title>LOGIN PAGE</title>
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
                        <div class="messages">
                            <?php if (isset($messages)) {
                                foreach ($messages as $message) {
                                    echo $message;
                                }
                            }
                            ?>
                        </div>
                        <div class="emailLoginPage">
                            <div class="login-conteinerLoginPage">
                                <input name="login-conteiner-formLoginPage" type="email" size="30" placeholder="email@email.pl">
                            </div>
                        </div>
                        <div class="passwordLoginPage">
                            <div class="password-conteinerLoginPage">
                                <input name="password-conteiner-formLoginPage" type="password" size="30" placeholder="Password">
                            </div>
                        </div>
                        <div class="buttonLoginPage">
                               <button class="textButtonLogin" type="submit">log in</button>
                        </div>
                    </form>
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