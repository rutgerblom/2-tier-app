<!--
Update $host and $port to match your "simulated DB IP:Port".
This page will test this TCP connectivity and display its result"
-->

<html>

<head>
<style>
table, th, td {
  border: 2px solid black;
  border-collapse: collapse;
  padding: 10px;
  background-color: #eee;
  width: 90%;
  margin-left: auto;
  margin-right: auto;
}
</style>
</head>

<body>
<center><img src="finance.jpg" style="width:80%; height:auto; margin:0 auto;"  alt text="finance" ></center>

<br>
<br>

<p class="solid">

<?php
$host = '10.204.242.20';
$port = '3306';
$hostname = gethostname();

$connection = @fsockopen($host, $port, $errno, $errstr, 2);
if (is_resource($connection))
    {
        echo '<table>
                  <tr>
                    <th style="width:60%">';
                        echo '<h2> FrontEnd Web Server Name:<font color=green> ' . $hostname . '</h2>' . "\n";
                        echo '<h2> <font color=black> FrontEnd Web Server IP Address:<font color=green>  ' .  $_SERVER['SERVER_ADDR'] . '</h2>' . "\n";
                        echo '<h2> <font color=black> FrontEnd Web Server has access to backend DB:<font color=green> ' . $host . ':' . $port . '</h2><f                                                                                                         ont color=black>' . "\n";
                        fclose($connection);
                    echo '</th>
                    <th style="width:40%">';
                        echo '<center><img src="DB_Access.jpg" style="width:30%" alt text="DB_Access"></center>';
                    echo '</th>
                  </tr>
                </table>';
    }
    else
    {
        echo '<table>
                  <tr>
                    <th style="width:60%">';
                    echo '<h2> FrontEnd Web Server Name:<font color=green> ' . $hostname . '</h2>' . "\n";
                        echo '<h2> <font color=black> FrontEnd Web Server IP Address:<font color=green>  ' .  $_SERVER['SERVER_ADDR'] . '</h2>' . "\n";
                        echo '<h2> <font color=red> FrontEnd Web Server has NO ACCESS to backend DB: ' . $host . ':' . $port . '</h2><font                                                                                                          color=black> ' . "\n";
                    echo '</th>
                    <th style="width:40%">';
                        echo '<center><img src="DB_NOAccess.jpg" style="width:30%" alt text="DB_NOAccess"></center>';
                    echo '</th>
                  </tr>
                </table>';
    }
?>

<?php
$client = $_SERVER['REMOTE_ADDR'];
echo '<p style="color:red">'."LATENCY = ".'</p>';
ob_end_flush();
flush();
exec("ping -c 3 $client", $output, $status);
#print_r($output[7]);
#echo '<p style="color:red">'.$output[7].'</p>';
$parts = explode('/', $output[7]);
echo '<p style="color:red">'.$parts[4] ." ms" .'</p>';
?>

</body>

</html>