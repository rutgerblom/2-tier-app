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
$host = '192.168.225.10';
$port = '3306';
$hostname = gethostname();

$connection = @fsockopen($host, $port, $errno, $errstr, 2);
if (is_resource($connection))
    {
        echo '<table>
                  <tr>
                    <th style="width:60%">';
                        echo '<h2> Frontend web server name:<font color=green> ' . $hostname . '</h2>' . "\n";
                        echo '<h2> <font color=black> Frontend web server IP Address:<font color=green>  ' .  $_SERVER['SERVER_ADDR'] . '</h2>' . "\n";
                        echo '<h2> <font color=black> Frontend web server has access to backend DB:<font color=green> ' . $host . ':' . $port . '</h2><f                                                                                                         ont color=black>' . "\n";
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
                    echo '<h2> Frontend web server name:<font color=green> ' . $hostname . '</h2>' . "\n";
                        echo '<h2> <font color=black> Frontend web server IP Address:<font color=green>  ' .  $_SERVER['SERVER_ADDR'] . '</h2>' . "\n";
                        echo '<h2> <font color=red> Frontend web server has NO ACCESS to backend DB: ' . $host . ':' . $port . '</h2><font                                                                                                          color=black> ' . "\n";
                    echo '</th>
                    <th style="width:40%">';
                        echo '<center><img src="DB_NOAccess.jpg" style="width:30%" alt text="DB_NOAccess"></center>';
                    echo '</th>
                  </tr>
                </table>';
    }
?>

<?php
function ping($host, $port, $timeout) {
  $tB = microtime(true);
  $fP = fSockOpen($host, $port, $errno, $errstr, $timeout);
  if (!$fP) { return "down"; }
  $tA = microtime(true);
  return round((($tA - $tB) * 1000), 0)." ms";
}

$output = ping("192.168.225.10", 3306, 10);
echo '<h3 style="color:blue">'."Latency between front-end and back-end:  ". $output . '</h3>';
?>

</body>

</html>
