<!DOCTYPE html>

<head>
    <link rel="stylesheet" type="text/css" href="public/css/registration.css">
    <title>Registration page</title>
</head>

<body>
<main>
    <header>
        <div class="logoRegistrationPage">
            <p>yoga</p>
        </div>
    </header>
    <div class="tableRegPage">
        <p class="titleTable">Zarejestruj się</p>
        <div class="formTable">
            <div class="firstLine">
                <div class="nameRegPage">
                    <div class="name-conteinerRegPage">
                        <input class="conteinerNameRegPage" type="text" size="30" placeholder="Imię">
                    </div>
                </div>
                    <form class="plecList">
                        <p class="conteinerPlecList">
                            <select name="plec" multiple>
                                <option value="s1">Kobieta</option>
                                <option value="s2">Mężczyzna</option>
                            </select>
                        </p>
                    </form>
            </div>
            <div class="surnameRegPage">
                <div class="surname-conteinerRegPage">
                    <input class="conteinerSurRegPage" type="text" size="30" placeholder="Nazwisko">
                </div>
            </div>
            <div class="birthdayRegPage">
                <div class="birthday-conteinerRegPage">
                    <input class="conteinerbirthdayRegPage" type="date" size="30" placeholder="Data urodzenia">
                </div>
            </div>
            <div class="forthLine">
                <div class="weight">
                    <div class="weight-conteinerRegPage">
                        <input class="conteinerWeightRegPage" type="text" size="30" placeholder="Waga">
                    </div>
                </div>
                <div class="height">
                    <div class="height-conteinerRegPage">
                        <input class="conteinerHeightRegPage" type="text" size="30" placeholder="Wzrost">
                    </div>
                </div>
            </div>
            <div class="emailRegPage">
                <div class="login-conteinerRegPage">
                    <input class="login-conteiner-formRegPage" type="email" size="30" placeholder="email@email.pl">
                </div>
            </div>
            <div class="passwordRegPage">
                <div class="password-conteinerRegPage">
                    <input class="password-conteiner-formRegPage" type="password" size="30" placeholder="Password">
                </div>
            </div>
            <div class="buttonRegLogin">
                <button class="textButtonRegLogin">log in</button>
            </div>
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

<footer>
    <div class="titleFooterReg">
        <p>yoga</p>
    </div>
    <div class="contactsReg">
        <div class="profileReg">
            <a>Mój profil</a>
        </div>
        <div class="aboutUsReg">
            <a>O nas</a>
        </div>
        <div class="contactsReg_1">
            <a>Kontakty</a>
        </div>
    </div>
    <div class="mediaReg">
        <img src="facebookBlock7.svg">
        <img src="instagramBlock7.svg">
        <img src="viberBlock7.svg">
        <img src="twitterBlock7.svg">
    </div>
    <div class="termAndPrivacyReg">
        <p class="termReg">Terms & Conditions</p>
        <p class="privacyReg">Privacy Policy</p>
    </div>
    <p class="copyrigthReg">Copyrigth © 2020 Flaunter, Ltd. All rights reserved. Site credit.</p>
</footer>
</body>