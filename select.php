<html>
<body>
<?php
    if (empty($_COOKIE["lang"])){
        setcookie("lang",0,time()+3600*24);
    }
    if (!isset($_COOKIE["lang"])){
        echo "Welcome to my website! Click here for a tour";
    }else{
        $language=$_GET["language"];
        setcookie("lang", $language, time() + 3600 * 24);
       
    }
?>
</body>
</html>