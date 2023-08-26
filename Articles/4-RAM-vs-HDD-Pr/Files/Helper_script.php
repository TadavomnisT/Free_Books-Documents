<?php

$string = "
┌──(user㉿dhcppc4)-[~/Desktop/Articles/4-RAM-vs-HDD-Pr/Files]
└─$ g++ RAM_write_test.cpp 
                                                                                                                   
┌──(user㉿dhcppc4)-[~/Desktop/Articles/4-RAM-vs-HDD-Pr/Files]
└─$ time ./a.out 
Execution Time (Based on ctime): 2501.88 ms
Execution Time (Based on chrono): 2501.97 ms
Memory Usage: 1046800 KB

real    2.51s
user    2.36s
sys     0.14s
cpu     99%
                                                                                                                   
┌──(user㉿dhcppc4)-[~/Desktop/Articles/4-RAM-vs-HDD-Pr/Files]
└─$ time ./a.out
Execution Time (Based on ctime): 2440.13 ms
Execution Time (Based on chrono): 2440.23 ms
Memory Usage: 1046864 KB

real    2.45s
user    2.32s
sys     0.13s
cpu     99%
                                                                                                                   
┌──(user㉿dhcppc4)-[~/Desktop/Articles/4-RAM-vs-HDD-Pr/Files]
└─$ time ./a.out
Execution Time (Based on ctime): 2446.16 ms
Execution Time (Based on chrono): 2446.23 ms
Memory Usage: 1046772 KB

real    2.45s
user    2.32s
sys     0.13s
cpu     99%
                                                                                                                   
┌──(user㉿dhcppc4)-[~/Desktop/Articles/4-RAM-vs-HDD-Pr/Files]
└─$ time ./a.out
Execution Time (Based on ctime): 2444.35 ms
Execution Time (Based on chrono): 2444.5 ms
Memory Usage: 1046848 KB

real    2.45s
user    2.29s
sys     0.16s
cpu     99%
                                                                                                                   
┌──(user㉿dhcppc4)-[~/Desktop/Articles/4-RAM-vs-HDD-Pr/Files]
└─$ time ./a.out
Execution Time (Based on ctime): 2515.03 ms
Execution Time (Based on chrono): 2515.09 ms
Memory Usage: 1046832 KB

real    2.52s
user    2.39s
sys     0.13s
cpu     99%
                                                                                                                   
┌──(user㉿dhcppc4)-[~/Desktop/Articles/4-RAM-vs-HDD-Pr/Files]
└─$ time ./a.out
Execution Time (Based on ctime): 2438.22 ms
Execution Time (Based on chrono): 2438.28 ms
Memory Usage: 1046844 KB

real    2.45s
user    2.32s
sys     0.12s
cpu     99%
                                                                                                                   
┌──(user㉿dhcppc4)-[~/Desktop/Articles/4-RAM-vs-HDD-Pr/Files]
└─$ time ./a.out
Execution Time (Based on ctime): 2493.81 ms
Execution Time (Based on chrono): 2493.94 ms
Memory Usage: 1046784 KB

real    2.50s
user    2.35s
sys     0.15s
cpu     99%
                                                                                                                   
┌──(user㉿dhcppc4)-[~/Desktop/Articles/4-RAM-vs-HDD-Pr/Files]
└─$ time ./a.out
Execution Time (Based on ctime): 2501.99 ms
Execution Time (Based on chrono): 2502.09 ms
Memory Usage: 1046852 KB

real    2.51s
user    2.37s
sys     0.14s
cpu     99%
                                                                                                                   
┌──(user㉿dhcppc4)-[~/Desktop/Articles/4-RAM-vs-HDD-Pr/Files]
└─$ time ./a.out
Execution Time (Based on ctime): 2459.47 ms
Execution Time (Based on chrono): 2460.05 ms
Memory Usage: 1046872 KB

real    2.47s
user    2.32s
sys     0.15s
cpu     99%
                                                                                                                   
┌──(user㉿dhcppc4)-[~/Desktop/Articles/4-RAM-vs-HDD-Pr/Files]
└─$ time ./a.out
Execution Time (Based on ctime): 2429.63 ms
Execution Time (Based on chrono): 2429.75 ms
Memory Usage: 1046772 KB

real    2.43s
user    2.32s
sys     0.12s
cpu     99%

";

$ctimes     = [];
$chronos    = [];
$reals      = [];
$users      = [];
$syses      = [];
$cpus       = [];

foreach (explode( PHP_EOL, trim( $string ) ) as $line) {
    if ( strpos( $line, "Execution Time (Based on ctime)" ) !== false )
        $ctimes[] = explode( ' ', trim($line) )[5];
    if ( strpos( $line, "Execution Time (Based on chrono)" ) !== false )
        $chronos[] = explode( ' ', trim($line) )[5];
    if ( strpos( $line, "real" ) !== false )
        $reals[] = explode( ' ', trim(preg_replace("/ {2,}/", " ", $line)) )[1];
    if ( strpos( $line, "user" ) !== false && strpos( $line, "dhcp" ) === false )
        $users[] = explode( ' ', trim(preg_replace("/ {2,}/", " ", $line)) )[1];
    if ( strpos( $line, "sys" ) !== false )
        $syses[] = explode( ' ', trim(preg_replace("/ {2,}/", " ", $line)) )[1];
    if ( strpos( $line, "cpu" ) !== false )
        $cpus[] = explode( ' ', trim(preg_replace("/ {2,}/", " ", $line)) )[1];
}


$sum_ctime = 0;
$sum_chrono = 0;
$sum_real = 0;
$sum_user = 0;
$sum_sys = 0;
$sum_cpu = 0;

error_reporting(E_ALL ^ E_WARNING); 
for ($i=0; $i < 10 ; $i++) { 
    $sum_ctime += $ctimes[$i];
    $sum_chrono += $chronos[$i];
    $sum_real += $reals[$i];
    $sum_user += $users[$i];
    $sum_sys += $syses[$i];
    $sum_cpu += $cpus[$i];
} 
error_reporting(E_ALL); 



echo "(" . implode( "+", $ctimes ) . ") / 10 = " . $sum_ctime . " / 10 = " . $sum_ctime/10 . PHP_EOL;
echo "(" . implode( "+", $chronos ) . ") / 10 = " . $sum_chrono . " / 10 = " . $sum_chrono/10 . PHP_EOL;
echo "(" . implode( "+", $reals ) . ") / 10 = " . $sum_real . " / 10 = " . $sum_real/10 . PHP_EOL;
echo "(" . implode( "+", $users ) . ") / 10 = " . $sum_user . " / 10 = " . $sum_user/10 . PHP_EOL;
echo "(" . implode( "+", $syses ) . ") / 10 = " . $sum_sys . " / 10 = " . $sum_sys/10 . PHP_EOL;
echo "(" . implode( "+", $cpus ) . ") / 10 = " . $sum_cpu . " / 10 = " . $sum_cpu/10 . PHP_EOL;

echo PHP_EOL;
echo PHP_EOL;
echo "Therefore:";
echo PHP_EOL;
echo PHP_EOL;

echo "* Average Execution Time(Based on ctime): " . $sum_ctime/10 . " ms" . PHP_EOL;
echo "* Average Execution Time(Based on chrono): " . $sum_chrono/10 . " ms" . PHP_EOL;
echo "* Average Real Time: " . $sum_real/10 . " s" . PHP_EOL;
echo "* Average User Time: " . $sum_user/10 . " s" . PHP_EOL;
echo "* Average Sys Time: " . $sum_sys/10 . " s" . PHP_EOL;
echo "* Average CPU Usage: " . $sum_cpu/10 . " %" . PHP_EOL;


?>