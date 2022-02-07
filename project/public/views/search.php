<?php include ('userInfo.php')?>
<!DOCTYPE html>
<head>
    <link rel="stylesheet" type="text/css" href="public/css/search.css">
    <script src="public/js/search.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <?php include ('linkToPage.php')?>
    <script src="https://code.jquery.com/jquery-3.6.0.js"
            integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
            crossorigin="anonymous"></script>
</head>
<body style="
    background-image: url(public/imgMyCourses/backgroundMyCourses.svg);
    background-repeat: no-repeat;
    background-position-x: right;
    background-size: contain;
">
<main>
    <?php include ('header.php');?>
    <h1 class="titleCourse">Moje kursy</h1>
    <script>
        var url = document.URL;
        if (url === 'http://hello.loc:8085/search') {
            onload();
        }
    </script>
    <div class="contentSearch">
        <form  id="formSearch">
        </form>

        <div>
            <div class="contentCourse">
            </div>
        </div>
    </div>
</main>
<?php include ('footer.php')?>
</body>
