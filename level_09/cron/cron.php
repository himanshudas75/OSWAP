<?php
    while ( 1 ) {
        echo "Checking if db_level_09 is up";
	$con2=mysqli_connect("db_level_09","oswap_user","o5wap_u533333rr","cyberlabs");
	if ( !$con2 ) {
        sleep(5);
	}
    else{
        break;
    }
    }
    while ( 1 ) {
        echo "Checking if rovolang.ml is up";
	$con=mysqli_connect("rovolang.ml","cyberlabs","CYB3RL4BS_!!FLAgs!","flag_storage");
	if ( !$con ) {
        sleep(5);
		continue;
	}
        sleep(2);
        $query=mysqli_query($con,"SELECT flag FROM oswap WHERE chall=9");
        $row = mysqli_fetch_array($query);
        $flag=$row['flag'];
	if ( $flag && $flag !== '' ) {
		break;
	}
    }
    $flagfile=fopen("/var/www/html/flag.php","w");
    $txt="<?php\n\t\$flag=\"".$flag."\";\n?>\n";
    fwrite($flagfile,$txt);
    fclose($flagfile);
?>