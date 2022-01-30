<!DOCTYPE html>

<head>
    <link rel="stylesheet" type="text/css" href="public/css/activity.css">
    <title>Activity</title>
</head>

<body style="
    background-image: url(&quot;public/imgActivity/backgroundTop.svg&quot;);
    background-repeat: no-repeat;
    background-size: contain;
">
<main>
    <header>
    <div class="logoActivity">
        <p>yoga</p>
    </div>
    <div class="menuActivity">
        <nav class="navActivity">
            <a class="findingCourseActivity" href="">Poszuk kursu</a>
            <a class="aboutUsActivity" href="">O nas</a>
            <a class="myProfileInActivity" href="">Mój Profil</a>
            <a class="burgerActivity" href=""><img src="public/img/burger.svg"></a>
        </nav>
    </div>
    </header>
    <h1 class="titleActivity">Moja aktywność</h1>
    <div class="contentActivity">
        <div class="perWeek" style="
        background-image: url(&quot;public/imgActivity/activity.svg&quot;);
        background-repeat: no-repeat;
        background-position-x: right;">
            <div class="conteinerActivityPage">
                <p class="countPerWeek"><span class="titlePerWeek">5 </span>Zajęć za tydzień</p>
            </div>
        </div>

        <div class="perMonth" style="
        background-image: url(&quot;public/imgActivity/activity.svg&quot;);
        background-repeat: no-repeat;
        background-position-x: right;">
                <div class="conteinerActivityPage">
                    <p class="countPerMonth"><span class="titlePerMonth">20 </span>Zajęć za miesiąc</p>
                </div>
        </div>

        <div class="calendarActivity">
            <form class="calendarActivity"></form>
        </div>
    </div>

</main>

<?php include ('footer.php')?>

</body>
