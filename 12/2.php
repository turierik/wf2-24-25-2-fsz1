<?php
    session_start();
    $hash = password_hash("almafa123", PASSWORD_DEFAULT);
    echo $hash."<br>";

    if(password_verify("almafa123", $hash)){
        echo "Jó a jelszó!";
        $_SESSION["user_id"] = 400;
    } else {
        echo "Rossz a jelszó!";
    }
?>