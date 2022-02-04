<?php include ('userInfo.php')?>
<!DOCTYPE html>

<head>
    <link rel="stylesheet" type="text/css" href="public/css/myCourse.css">
    <?php include ('linkToPage.php')?>
</head>

<body style="
    background-image: url(public/imgMyCourses/backgroundMyCourses.svg);
    background-repeat: no-repeat;
    background-position-x: right;
    background-size: contain;
">
<main>
    <?php include ('header.php')?>
    <h1 class="titleCourse">Moje kursy</h1>
    <div class="contentCourse">

        <div class="video1">
            <iframe width="476" height="267.75" src="https://www.youtube.com/embed/tt6efl4ISvA?rel=0"
                    srcdoc="<style>*{padding:0;margin:0;overflow:hidden}
    html,body{height:100%}
    img,span{position:absolute;width:100%;top:0;bottom:0;margin:auto}
    span{height:1.5em;text-align:center;font:48px/1.5 sans-serif;color:white;text-shadow:0 0 0.5em black}
    </style>
     <a href=https://www.youtube.com/embed/tt6efl4ISvA?rel=0>
    <img src=https://img.youtube.com/vi/tt6efl4ISvA/hqdefault.jpg alt='Demo video'>
    <span>▶</span>
    </a>"
                    frameborder="0"
                    allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen
                    title="Demo video"
            >
            </iframe>
            <p class="titleVide1">Morning Yoga - 10 min Full Body Yoga at Home Yoga Flow for Beginners</p>
        </div>

        <div class="video2">
            <iframe width="476" height="267.75" src="https://www.youtube.com/embed/VaoV1PrYft4?rel=0"
                    srcdoc="<style>*{padding:0;margin:0;overflow:hidden}
    html,body{height:100%}
    img,span{position:absolute;width:100%;top:0;bottom:0;margin:auto}
    span{height:1.5em;text-align:center;font:48px/1.5 sans-serif;color:white;text-shadow:0 0 0.5em black}
    </style>
     <a href=https://www.youtube.com/embed/VaoV1PrYft4?rel=0>
    <img src=https://img.youtube.com/vi/VaoV1PrYft4/hqdefault.jpg alt='Demo video'>
    <span>▶</span>
    </a>"
                    title="YouTube video player" frameborder="0" allow="accelerometer;
                    autoplay;
                    clipboard-write;
                    encrypted-media;
                    gyroscope;
                    picture-in-picture" allowfullscreen></iframe>

            <p class="titleVide2">10 minute Morning Yoga for Beginners</p>
        </div>

        <div class="video3">
            <iframe width="476" height="267.75" src="https://www.youtube.com/embed/gXuq4M5rU9E?rel=0"
                    srcdoc="<style>*{padding:0;margin:0;overflow:hidden}
    html,body{height:100%}
    img,span{position:absolute;width:100%;top:0;bottom:0;margin:auto}
    span{height:1.5em;text-align:center;font:48px/1.5 sans-serif;color:white;text-shadow:0 0 0.5em black}
    </style>
     <a href=https://www.youtube.com/embed/gXuq4M5rU9E?rel=0>
    <img src=https://img.youtube.com/vi/gXuq4M5rU9E/hqdefault.jpg alt='Demo video'>
    <span>▶</span>
    </a>"
                    title="YouTube video player" frameborder="0" allow="accelerometer;
                    autoplay;
                    clipboard-write;
                    encrypted-media;
                    gyroscope;
                    picture-in-picture" allowfullscreen></iframe>

            <p class="titleVide3">20 Minute Evening Yoga Flow</p>

        </div>
    </div>

</main>

<?php include ('footer.php')?>

</body>
