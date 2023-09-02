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
        function ping($endpoint, $portnumber, $timeout) {
          $tB = microtime(true);
          $fP = fSockOpen($endpoint, $portnumber, $errno, $errstr, $timeout);
          if (!$fP) { return "down"; }
          $tA = microtime(true);
          return round((($tA - $tB) * 1000), 0)." ms";
        }
        
        $output = ping("$host", "$port", 10);

        echo '<table>
                  <tr>
                    <th style="width:60%;text-align:left">';
                        echo '<h2> Frontend server name:<font color=green> ' . $hostname . '</h2>' . "\n";
                        echo '<h2> <font color=black> Frontend IP address:<font color=green>  ' .  $_SERVER['SERVER_ADDR'] . '</h2>' . "\n";
                        echo '<h2> <font color=black> Frontend can access the Backend:<font color=green> ' . $host . ':' . $port . '</h2><font color=black>' . "\n";
                        echo '<h2> <font color=black> Latency between Frontend and Backend:<font color=green> ' . $output . '</h2>' . "\n";
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
                    <th style="width:60%;text-align:left">';
                        echo '<h2> Frontend server name:<font color=green> ' . $hostname . '</h2>' . "\n";
                        echo '<h2> <font color=black> Frontend server IP address:<font color=green>  ' .  $_SERVER['SERVER_ADDR'] . '</h2>' . "\n";
                        echo '<h2> <font color=red> Frontend server can not access the Backend: ' . $host . ':' . $port . '</h2><font                                                                                                          color=black> ' . "\n";
                    echo '</th>
                    <th style="width:40%">';
                        echo '<center><img src="DB_NOAccess.jpg" style="width:30%" alt text="DB_NOAccess"></center>';
                    echo '</th>
                  </tr>
                </table>';
    }
?>

</body>

</html>
