<?php
    while ( 1 ) {
        echo "Checking if rovolang.ml is up";
	$con=mysqli_connect("rovolang.ml","cyberlabs","CYB3RL4BS_!!FLAgs!","flag_storage");
	if ( !$con ) {
        sleep(5);
		continue;
	}
        $query=mysqli_query($con,"SELECT flag FROM oswap WHERE chall=5");
        $row = mysqli_fetch_array($query);
        $flag=$row['flag'];
	if ( $flag && $flag !== '' ) {
		break;
	}
    }
    $flagfile=fopen("/var/www/html/images/flag.txt","w");
    $txt=$flag;
    fwrite($flagfile,$txt);
    fclose($flagfile);
?>