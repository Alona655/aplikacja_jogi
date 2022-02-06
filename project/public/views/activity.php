<?php include ('userInfo.php')?>
<!DOCTYPE html>

<head>
    <?php include ('linkToPage.php')?>
    <link rel="stylesheet" type="text/css" href="public/css/activity.css">
    <link rel="stylesheet" type="text/css" href="public/css/header.css">
    <link rel="stylesheet" type="text/css" href="public/css/footer.css">
    <title>Activity</title>
</head>

<body style="
    background-image: url(&quot;public/imgActivity/backgroundTop.svg&quot;);
    background-repeat: no-repeat;
    background-size: contain;
">
<?php include ('header.php')?>
<main>
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
