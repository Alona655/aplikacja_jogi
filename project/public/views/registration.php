<!DOCTYPE html>

<head>
    <link rel="stylesheet" type="text/css" href="public/css/registration.css">
    <link rel="stylesheet" type="text/css" href="public/css/footer.css">
    <title>Registration page</title>
</head>

<body>
<main>
    <header>
        <div class="logoRegistrationPage">
            <p>yoga</p>
        </div>
    </header>
    <div class="girlReg"><img src="public/imgRegistration/girlRegPage.svg"></div>
    <div class="tableRegPage">
        <p class="titleTable">Zarejestruj się</p>
        <form  action="registrationUser" method="POST">

            <?php if (isset($message)) {?>
                <div class="messages" id="ErrorInfos">
                    <?php foreach ($message as $info) {
                        echo $info;
                    }?>
                </div>
            <?php   }?>
            <div class="formTable">
                <div class="firstLine">
                    <div class="nameRegPage">
                        <div class="name-conteinerRegPage">
                            <input name="name"  class="conteinerNameRegPage" type="text" size="30" placeholder="Imię">
                        </div>
                    </div>

                    <select name="sex">
                        <option value="female">Kobieta</option>
                        <option value="mel">Mężczyzna</option>
                    </select>

                </div>
                <div class="surnameRegPage">
                    <div class="surname-conteinerRegPage">
                        <input name="surname" class="conteinerSurRegPage" type="text" size="30" placeholder="Nazwisko">
                    </div>
                </div>
                <div class="birthdayRegPage">
                    <div class="birthday-conteinerRegPage">
                        <input name="birthday" class="conteinerbirthdayRegPage" type="date" size="30" placeholder="Data urodzenia">
                    </div>
                </div>
                <div class="forthLine">
                    <div class="weight">
                        <div class="weight-conteinerRegPage">
                            <input name="weight" class="conteinerWeightRegPage" type="text" size="30" placeholder="Waga">
                        </div>
                    </div>
                    <div class="height">
                        <div class="height-conteinerRegPage">
                            <input name="growth" class="conteinerHeightRegPage" type="text" size="30" placeholder="Wzrost">
                        </div>
                    </div>
                </div>
                <div class="surnameRegPage">
                    <div class="surname-conteinerRegPage">
                        <input name="exercises" class="conteinerSurRegPage" type="text" size="30" placeholder="Cel ćwiczeń">
                    </div>
                </div>
                <div class="emailRegPage">
                    <div class="login-conteinerRegPage">
                        <input name="email" class="login-conteiner-formRegPage" type="email" size="30" placeholder="email@email.pl">
                    </div>
                </div>
                <div class="passwordRegPage">
                    <div class="password-conteinerRegPage">
                        <input name="password" class="password-conteiner-formRegPage" type="password" size="30" placeholder="Password">
                    </div>
                </div>
                <div class="buttonRegLogin">
                    <button class="textButtonRegLogin" type="submit">Zarejestrować</button>
                </div>
        </form>
        <button class="textButtonRegLogin toRegister"><a href="login">Log in</a></button>

        <div class="infoAndLinksRegpage">
            <div class="textUnderButtonRegPage">
                <p>Albo wejdż za pomocą</p>
            </div>
            <div class="imgsReg">
                <img src="public/imgLoginPage/google.svg">
                <img src="public/imgLoginPage/facebook.svg">
            </div>
        </div>


    </div>
    </div>
</main>

<?php include('footer.php') ?>
</body>