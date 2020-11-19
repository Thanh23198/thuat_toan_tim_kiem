<form method="post">
    <input type="text" name="number">
    <input type="submit" value="Submit">
</form>
<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    if( $number = $_POST["number"]) {
        $rand = mt_rand(1, 1);
        if ($number == $rand) {
            echo "so ban chon la " . $number . "<br/>" . "So cua may la " . $rand . "<br/>" . "Ban chon dung";
        } else {
            echo "so ban chon la " . $number . "<br/>" . "So cua may la " . $rand . "<br/>" . "Ban chon sai";
        }
    }
    else{
        echo "ban chua nhap gi";
    }
}