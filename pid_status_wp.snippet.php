<?php
//##########################################
// desc: Diese PHP Script zeig euch ob ein Prozess läuft oder nicht
// autor: seevenup
// version: 0.1
//##########################################

function server_status($string,$name) {
        $pid=exec("pidof $name");
        exec("ps -p $pid", $output);

        if (count($output) > 1) {
                echo "$string: <font color='green'><b>RUNNING</b></font><br>";
        }
        else {
                echo "$string: <font color='red'><b>DOWN</b></font><br>";
        }
}

//Beispiel "Text zum anzeigen", "Prozess Name auf dem Server"
server_status("Running With Rifles","rwr_server");
?>
