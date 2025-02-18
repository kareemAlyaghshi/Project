<?php
$host  ="localhost";
$user  ="root";
$password ="";
$dbNAME   ="reservation";

$con =mysqli_connect($host,$user,$password,$dbNAME);
if(isset($con)){
    echo "yes";

}
else{
        echo "database not connected ";
    
}


