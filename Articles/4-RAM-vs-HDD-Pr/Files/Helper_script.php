<?php

define('NUMBER_OF_TESTS', '5');


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

$string = "
┌──(user㉿dhcppc4)-[~/Desktop/Articles/4-RAM-vs-HDD-Pr/Files]
└─$ g++ HDD_write_test.cpp
                                                                                            
┌──(user㉿dhcppc4)-[~/Desktop/Articles/4-RAM-vs-HDD-Pr/Files]
└─$ rm output.txt && time ./a.out 
Execution Time (Based on ctime): 9536.65 ms
Execution Time (Based on chrono): 9538.49 ms
Memory Usage: 0 KB

real    9.54s
user    8.85s
sys     0.68s
cpu     99%
                                                                                            
┌──(user㉿dhcppc4)-[~/Desktop/Articles/4-RAM-vs-HDD-Pr/Files]
└─$ rm output.txt && time ./a.out
Execution Time (Based on ctime): 9530.77 ms
Execution Time (Based on chrono): 10150.1 ms
Memory Usage: 0 KB

real    10.15s
user    8.82s
sys     0.72s
cpu     93%
                                                                                            
┌──(user㉿dhcppc4)-[~/Desktop/Articles/4-RAM-vs-HDD-Pr/Files]
└─$ rm output.txt && time ./a.out
Execution Time (Based on ctime): 9625.24 ms
Execution Time (Based on chrono): 10063.4 ms
Memory Usage: 0 KB

real    10.07s
user    8.99s
sys     0.64s
cpu     95%
                                                                                            
┌──(user㉿dhcppc4)-[~/Desktop/Articles/4-RAM-vs-HDD-Pr/Files]
└─$ rm output.txt && time ./a.out
Execution Time (Based on ctime): 9655.58 ms
Execution Time (Based on chrono): 9657.09 ms
Memory Usage: 0 KB

real    9.66s
user    8.96s
sys     0.70s
cpu     99%
                                                                                            
┌──(user㉿dhcppc4)-[~/Desktop/Articles/4-RAM-vs-HDD-Pr/Files]
└─$ rm output.txt && time ./a.out
Execution Time (Based on ctime): 9479.76 ms
Execution Time (Based on chrono): 9634.6 ms
Memory Usage: 0 KB

real    9.64s
user    8.89s
sys     0.60s
cpu     98%
                                                                                            
┌──(user㉿dhcppc4)-[~/Desktop/Articles/4-RAM-vs-HDD-Pr/Files]
└─$ rm output.txt && time ./a.out
Execution Time (Based on ctime): 9477.25 ms
Execution Time (Based on chrono): 9641.66 ms
Memory Usage: 0 KB

real    9.65s
user    8.92s
sys     0.56s
cpu     98%
                                                                                            
┌──(user㉿dhcppc4)-[~/Desktop/Articles/4-RAM-vs-HDD-Pr/Files]
└─$ rm output.txt && time ./a.out
Execution Time (Based on ctime): 9468.07 ms
Execution Time (Based on chrono): 9475.96 ms
Memory Usage: 0 KB

real    9.48s
user    8.70s
sys     0.77s
cpu     99%
                                                                                            
┌──(user㉿dhcppc4)-[~/Desktop/Articles/4-RAM-vs-HDD-Pr/Files]
└─$ rm output.txt && time ./a.out
Execution Time (Based on ctime): 9761.29 ms
Execution Time (Based on chrono): 10151.8 ms
Memory Usage: 0 KB

real    10.16s
user    9.05s
sys     0.72s
cpu     96%
                                                                                            
┌──(user㉿dhcppc4)-[~/Desktop/Articles/4-RAM-vs-HDD-Pr/Files]
└─$ rm output.txt && time ./a.out
Execution Time (Based on ctime): 9632.74 ms
Execution Time (Based on chrono): 10079 ms
Memory Usage: 0 KB

real    10.08s
user    8.92s
sys     0.72s
cpu     95%
                                                                                            
┌──(user㉿dhcppc4)-[~/Desktop/Articles/4-RAM-vs-HDD-Pr/Files]
└─$ rm output.txt && time ./a.out
Execution Time (Based on ctime): 9536.97 ms
Execution Time (Based on chrono): 9540.68 ms
Memory Usage: 0 KB

real    9.55s
user    8.89s
sys     0.65s
cpu     99%
";

$string = "
┌──(user㉿dhcppc4)-[~/Desktop/Articles/4-RAM-vs-HDD-Pr/Files]
└─$ g++ RAM_overwrite_test.cpp
                                                                                                                   
┌──(user㉿dhcppc4)-[~/Desktop/Articles/4-RAM-vs-HDD-Pr/Files]
└─$ time ./a.out              
Execution Time (Based on ctime): 2315.81 ms
Execution Time (Based on chrono): 2315.86 ms
Memory Usage: 0 KB

real    4.76s
user    4.61s
sys     0.14s
cpu     99%
                                                                                                                   
┌──(user㉿dhcppc4)-[~/Desktop/Articles/4-RAM-vs-HDD-Pr/Files]
└─$ time ./a.out
Execution Time (Based on ctime): 2321.07 ms
Execution Time (Based on chrono): 2321.15 ms
Memory Usage: 0 KB

real    4.80s
user    4.66s
sys     0.14s
cpu     99%
                                                                                                                   
┌──(user㉿dhcppc4)-[~/Desktop/Articles/4-RAM-vs-HDD-Pr/Files]
└─$ time ./a.out
Execution Time (Based on ctime): 2305.9 ms
Execution Time (Based on chrono): 2305.95 ms
Memory Usage: 0 KB

real    4.78s
user    4.67s
sys     0.11s
cpu     99%
                                                                                                                   
┌──(user㉿dhcppc4)-[~/Desktop/Articles/4-RAM-vs-HDD-Pr/Files]
└─$ time ./a.out
Execution Time (Based on ctime): 2331.96 ms
Execution Time (Based on chrono): 2332.03 ms
Memory Usage: 0 KB

real    4.79s
user    4.70s
sys     0.09s
cpu     99%
                                                                                                                   
┌──(user㉿dhcppc4)-[~/Desktop/Articles/4-RAM-vs-HDD-Pr/Files]
└─$ time ./a.out
Execution Time (Based on ctime): 2291.69 ms
Execution Time (Based on chrono): 2296.94 ms
Memory Usage: 0 KB

real    4.74s
user    4.57s
sys     0.16s
cpu     99%
                                                                                                                   
┌──(user㉿dhcppc4)-[~/Desktop/Articles/4-RAM-vs-HDD-Pr/Files]
└─$ time ./a.out
Execution Time (Based on ctime): 2336.1 ms
Execution Time (Based on chrono): 2339.92 ms
Memory Usage: 0 KB

real    4.85s
user    4.71s
sys     0.12s
cpu     99%
                                                                                                                   
┌──(user㉿dhcppc4)-[~/Desktop/Articles/4-RAM-vs-HDD-Pr/Files]
└─$ time ./a.out
Execution Time (Based on ctime): 2330.54 ms
Execution Time (Based on chrono): 2330.6 ms
Memory Usage: 0 KB

real    4.82s
user    4.70s
sys     0.12s
cpu     99%
                                                                                                                   
┌──(user㉿dhcppc4)-[~/Desktop/Articles/4-RAM-vs-HDD-Pr/Files]
└─$ time ./a.out
Execution Time (Based on ctime): 2283.55 ms
Execution Time (Based on chrono): 2283.58 ms
Memory Usage: 0 KB

real    4.72s
user    4.59s
sys     0.12s
cpu     99%
                                                                                                                   
┌──(user㉿dhcppc4)-[~/Desktop/Articles/4-RAM-vs-HDD-Pr/Files]
└─$ time ./a.out
Execution Time (Based on ctime): 2328.87 ms
Execution Time (Based on chrono): 2328.91 ms
Memory Usage: 0 KB

real    4.79s
user    4.67s
sys     0.12s
cpu     99%
                                                                                                                   
┌──(user㉿dhcppc4)-[~/Desktop/Articles/4-RAM-vs-HDD-Pr/Files]
└─$ time ./a.out
Execution Time (Based on ctime): 2295.38 ms
Execution Time (Based on chrono): 2296.14 ms
Memory Usage: 0 KB

real    4.75s
user    4.60s
sys     0.15s
cpu     99%
";

$string = "
┌──(user㉿dhcppc4)-[~/Desktop/Articles/4-RAM-vs-HDD-Pr/Files]
└─$ g++ HDD_write_test.cpp    
                                                                                                                   
┌──(user㉿dhcppc4)-[~/Desktop/Articles/4-RAM-vs-HDD-Pr/Files]
└─$ time ./a.out 
Execution Time (Based on ctime): 10162.1 ms
Execution Time (Based on chrono): 16532.7 ms
Memory Usage: 0 KB

real    16.54s
user    9.30s
sys     0.87s
cpu     61%
                                                                                                                   
┌──(user㉿dhcppc4)-[~/Desktop/Articles/4-RAM-vs-HDD-Pr/Files]
└─$ time ./a.out
Execution Time (Based on ctime): 9961.45 ms
Execution Time (Based on chrono): 19035.1 ms
Memory Usage: 0 KB

real    19.04s
user    9.10s
sys     0.86s
cpu     52%
                                                                                                                   
┌──(user㉿dhcppc4)-[~/Desktop/Articles/4-RAM-vs-HDD-Pr/Files]
└─$ time ./a.out
Execution Time (Based on ctime): 9925.02 ms
Execution Time (Based on chrono): 19885.7 ms
Memory Usage: 0 KB

real    19.89s
user    9.14s
sys     0.79s
cpu     49%
                                                                                                                   
┌──(user㉿dhcppc4)-[~/Desktop/Articles/4-RAM-vs-HDD-Pr/Files]
└─$ time ./a.out
Execution Time (Based on ctime): 9927.78 ms
Execution Time (Based on chrono): 20518.4 ms
Memory Usage: 0 KB

real    20.52s
user    9.04s
sys     0.89s
cpu     48%
                                                                                                                   
┌──(user㉿dhcppc4)-[~/Desktop/Articles/4-RAM-vs-HDD-Pr/Files]
└─$ time ./a.out
Execution Time (Based on ctime): 9996.59 ms
Execution Time (Based on chrono): 17915.4 ms
Memory Usage: 0 KB

real    17.92s
user    9.16s
sys     0.84s
cpu     55%
                                                                                                                   
┌──(user㉿dhcppc4)-[~/Desktop/Articles/4-RAM-vs-HDD-Pr/Files]
└─$ time ./a.out
Execution Time (Based on ctime): 9659.78 ms
Execution Time (Based on chrono): 19085.9 ms
Memory Usage: 0 KB

real    19.09s
user    8.91s
sys     0.76s
cpu     50%
                                                                                                                   
┌──(user㉿dhcppc4)-[~/Desktop/Articles/4-RAM-vs-HDD-Pr/Files]
└─$ time ./a.out
Execution Time (Based on ctime): 10051.7 ms
Execution Time (Based on chrono): 19261.9 ms
Memory Usage: 0 KB

real    19.27s
user    9.25s
sys     0.81s
cpu     52%
                                                                                                                   
┌──(user㉿dhcppc4)-[~/Desktop/Articles/4-RAM-vs-HDD-Pr/Files]
└─$ time ./a.out
Execution Time (Based on ctime): 10124.3 ms
Execution Time (Based on chrono): 19965.3 ms
Memory Usage: 0 KB

real    19.97s
user    9.31s
sys     0.82s
cpu     50%
                                                                                                                   
┌──(user㉿dhcppc4)-[~/Desktop/Articles/4-RAM-vs-HDD-Pr/Files]
└─$ time ./a.out
Execution Time (Based on ctime): 9867.27 ms
Execution Time (Based on chrono): 19433.7 ms
Memory Usage: 0 KB

real    19.44s
user    9.05s
sys     0.82s
cpu     50%
                                                                                                                   
┌──(user㉿dhcppc4)-[~/Desktop/Articles/4-RAM-vs-HDD-Pr/Files]
└─$ time ./a.out
Execution Time (Based on ctime): 9850.91 ms
Execution Time (Based on chrono): 18046 ms
Memory Usage: 0 KB

real    18.05s
user    8.96s
sys     0.89s
cpu     54%
";

$string = "
┌──(user㉿dhcppc4)-[~/Desktop/Articles/4-RAM-vs-HDD-Pr/Files]
└─$ g++ RAM_copy_test.cpp     
                                                                                                                   
┌──(user㉿dhcppc4)-[~/Desktop/Articles/4-RAM-vs-HDD-Pr/Files]
└─$ time ./a.out
Execution Time (Based on ctime): 2676.01 ms
Execution Time (Based on chrono): 2676.22 ms
Memory Usage: 1048824 KB

real    5.12s
user    4.89s
sys     0.23s
cpu     99%
                                                                                                                   
┌──(user㉿dhcppc4)-[~/Desktop/Articles/4-RAM-vs-HDD-Pr/Files]
└─$ time ./a.out
Execution Time (Based on ctime): 2616.64 ms
Execution Time (Based on chrono): 2616.71 ms
Memory Usage: 1048764 KB

real    5.06s
user    4.85s
sys     0.20s
cpu     99%
                                                                                                                   
┌──(user㉿dhcppc4)-[~/Desktop/Articles/4-RAM-vs-HDD-Pr/Files]
└─$ time ./a.out
Execution Time (Based on ctime): 2618.32 ms
Execution Time (Based on chrono): 2618.4 ms
Memory Usage: 1048712 KB

real    5.02s
user    4.81s
sys     0.20s
cpu     99%
                                                                                                                   
┌──(user㉿dhcppc4)-[~/Desktop/Articles/4-RAM-vs-HDD-Pr/Files]
└─$ time ./a.out
Execution Time (Based on ctime): 2616.12 ms
Execution Time (Based on chrono): 2616.2 ms
Memory Usage: 1048824 KB

real    5.05s
user    4.80s
sys     0.24s
cpu     99%
                                                                                                                   
┌──(user㉿dhcppc4)-[~/Desktop/Articles/4-RAM-vs-HDD-Pr/Files]
└─$ time ./a.out
Execution Time (Based on ctime): 2617.68 ms
Execution Time (Based on chrono): 2617.75 ms
Memory Usage: 1048824 KB

real    5.05s
user    4.88s
sys     0.17s
cpu     99%
                                                                                                                   
┌──(user㉿dhcppc4)-[~/Desktop/Articles/4-RAM-vs-HDD-Pr/Files]
└─$ time ./a.out
Execution Time (Based on ctime): 2620.01 ms
Execution Time (Based on chrono): 2620.11 ms
Memory Usage: 1048824 KB

real    5.06s
user    4.86s
sys     0.20s
cpu     99%
                                                                                                                   
┌──(user㉿dhcppc4)-[~/Desktop/Articles/4-RAM-vs-HDD-Pr/Files]
└─$ time ./a.out
Execution Time (Based on ctime): 2620.11 ms
Execution Time (Based on chrono): 2620.16 ms
Memory Usage: 1048824 KB

real    5.02s
user    4.79s
sys     0.23s
cpu     99%
                                                                                                                   
┌──(user㉿dhcppc4)-[~/Desktop/Articles/4-RAM-vs-HDD-Pr/Files]
└─$ time ./a.out
Execution Time (Based on ctime): 2615.65 ms
Execution Time (Based on chrono): 2615.84 ms
Memory Usage: 1048764 KB

real    5.03s
user    4.78s
sys     0.25s
cpu     99%
                                                                                                                   
┌──(user㉿dhcppc4)-[~/Desktop/Articles/4-RAM-vs-HDD-Pr/Files]
└─$ time ./a.out
Execution Time (Based on ctime): 2623.07 ms
Execution Time (Based on chrono): 2623.13 ms
Memory Usage: 1048780 KB

real    5.03s
user    4.86s
sys     0.17s
cpu     99%
                                                                                                                   
┌──(user㉿dhcppc4)-[~/Desktop/Articles/4-RAM-vs-HDD-Pr/Files]
└─$ time ./a.out
Execution Time (Based on ctime): 2616.85 ms
Execution Time (Based on chrono): 2616.94 ms
Memory Usage: 1048780 KB

real    5.07s
user    4.87s
sys     0.20s
cpu     99%
";

$string = "
┌──(user㉿dhcppc4)-[~/Desktop/Articles/4-RAM-vs-HDD-Pr/Files]
└─$ g++ HDD_copy_test.cpp
                                                                                                                   
┌──(user㉿dhcppc4)-[~/Desktop/Articles/4-RAM-vs-HDD-Pr/Files]
└─$ time ./a.out
Execution Time (Based on ctime): 18386.5 ms
Execution Time (Based on chrono): 25923.6 ms
Memory Usage: 0 KB

real    25.93s
user    16.58s
sys     1.81s
cpu     70%
                                                                                                                   
┌──(user㉿dhcppc4)-[~/Desktop/Articles/4-RAM-vs-HDD-Pr/Files]
└─$ rm /media/user/MyDrive1/output_copy.txt && !!
                                                                                                                   
┌──(user㉿dhcppc4)-[~/Desktop/Articles/4-RAM-vs-HDD-Pr/Files]
└─$ rm /media/user/MyDrive1/output_copy.txt && time ./a.out
Execution Time (Based on ctime): 17681.3 ms
Execution Time (Based on chrono): 23741.9 ms
Memory Usage: 0 KB

real    23.74s
user    15.98s
sys     1.70s
cpu     74%
                                                                                                                   
┌──(user㉿dhcppc4)-[~/Desktop/Articles/4-RAM-vs-HDD-Pr/Files]
└─$ rm /media/user/MyDrive1/output_copy.txt && time ./a.out
Execution Time (Based on ctime): 17245.1 ms
Execution Time (Based on chrono): 24897.7 ms
Memory Usage: 0 KB

real    24.90s
user    15.49s
sys     1.76s
cpu     69%


┌──(user㉿dhcppc4)-[~/Desktop/Articles/4-RAM-vs-HDD-Pr/Files]
└─$ rm output.txt && dd if=/dev/random bs=1024 count=1048576 > output.txt      
1048576+0 records in
1048576+0 records out
1073741824 bytes (1.1 GB, 1.0 GiB) copied, 10.1874 s, 105 MB/s
                                                                                                                   
┌──(user㉿dhcppc4)-[~/Desktop/Articles/4-RAM-vs-HDD-Pr/Files]
└─$ rm /media/user/MyDrive1/output_copy.txt && time ./a.out              
Execution Time (Based on ctime): 19407.6 ms
Execution Time (Based on chrono): 33033.6 ms
Memory Usage: 0 KB

real    33.04s
user    17.42s
sys     1.99s
cpu     58%
                                                                                                                   
┌──(user㉿dhcppc4)-[~/Desktop/Articles/4-RAM-vs-HDD-Pr/Files]
└─$ rm output.txt && dd if=/dev/random bs=1024 count=1048576 > output.txt
1048576+0 records in
1048576+0 records out
1073741824 bytes (1.1 GB, 1.0 GiB) copied, 10.4907 s, 102 MB/s
                                                                                                                   
┌──(user㉿dhcppc4)-[~/Desktop/Articles/4-RAM-vs-HDD-Pr/Files]
└─$ rm /media/user/MyDrive1/output_copy.txt && time ./a.out              
Execution Time (Based on ctime): 20163.5 ms
Execution Time (Based on chrono): 36565.9 ms
Memory Usage: 0 KB

real    36.57s
user    18.03s
sys     2.13s
cpu     55%
                                                                                                                   
┌──(user㉿dhcppc4)-[~/Desktop/Articles/4-RAM-vs-HDD-Pr/Files]
└─$ rm output.txt && dd if=/dev/random bs=1024 count=1048576 > output.txt
1048576+0 records in
1048576+0 records out
1073741824 bytes (1.1 GB, 1.0 GiB) copied, 10.1993 s, 105 MB/s
                                                                                                                   
┌──(user㉿dhcppc4)-[~/Desktop/Articles/4-RAM-vs-HDD-Pr/Files]
└─$ rm /media/user/MyDrive1/output_copy.txt && time ./a.out              
Execution Time (Based on ctime): 20450.9 ms
Execution Time (Based on chrono): 38170.3 ms
Memory Usage: 0 KB

real    38.17s
user    18.30s
sys     2.15s
cpu     53%
                                                                                                                   
┌──(user㉿dhcppc4)-[~/Desktop/Articles/4-RAM-vs-HDD-Pr/Files]
└─$ rm output.txt && dd if=/dev/random bs=1024 count=1048576 > output.txt
1048576+0 records in
1048576+0 records out
1073741824 bytes (1.1 GB, 1.0 GiB) copied, 10.1726 s, 106 MB/s
                                                                                                                   
┌──(user㉿dhcppc4)-[~/Desktop/Articles/4-RAM-vs-HDD-Pr/Files]
└─$ rm /media/user/MyDrive1/output_copy.txt && time ./a.out              
Execution Time (Based on ctime): 20228.9 ms
Execution Time (Based on chrono): 33791.1 ms
Memory Usage: 0 KB

real    33.79s
user    18.12s
sys     2.11s
cpu     59%
                                                                                                                   
┌──(user㉿dhcppc4)-[~/Desktop/Articles/4-RAM-vs-HDD-Pr/Files]
└─$ rm output.txt && dd if=/dev/random bs=1024 count=1048576 > output.txt
1048576+0 records in
1048576+0 records out
1073741824 bytes (1.1 GB, 1.0 GiB) copied, 10.2377 s, 105 MB/s
                                                                                                                   
┌──(user㉿dhcppc4)-[~/Desktop/Articles/4-RAM-vs-HDD-Pr/Files]
└─$ rm /media/user/MyDrive1/output_copy.txt && time ./a.out              
Execution Time (Based on ctime): 20001.4 ms
Execution Time (Based on chrono): 35478 ms
Memory Usage: 0 KB

real    35.48s
user    17.79s
sys     2.21s
cpu     56%
                                                                                                                   
┌──(user㉿dhcppc4)-[~/Desktop/Articles/4-RAM-vs-HDD-Pr/Files]
└─$ rm output.txt && dd if=/dev/random bs=1024 count=1048576 > output.txt
1048576+0 records in
1048576+0 records out
1073741824 bytes (1.1 GB, 1.0 GiB) copied, 10.5428 s, 102 MB/s
                                                                                                                   
┌──(user㉿dhcppc4)-[~/Desktop/Articles/4-RAM-vs-HDD-Pr/Files]
└─$ rm /media/user/MyDrive1/output_copy.txt && time ./a.out              
Execution Time (Based on ctime): 19954.7 ms
Execution Time (Based on chrono): 34560.4 ms
Memory Usage: 0 KB

real    34.56s
user    17.55s
sys     2.41s
cpu     57%
                                                                                                                   
┌──(user㉿dhcppc4)-[~/Desktop/Articles/4-RAM-vs-HDD-Pr/Files]
└─$ rm output.txt && dd if=/dev/random bs=1024 count=1048576 > output.txt
1048576+0 records in
1048576+0 records out
1073741824 bytes (1.1 GB, 1.0 GiB) copied, 10.1674 s, 106 MB/s
                                                                                                                   
┌──(user㉿dhcppc4)-[~/Desktop/Articles/4-RAM-vs-HDD-Pr/Files]
└─$ rm /media/user/MyDrive1/output_copy.txt && time ./a.out              
Execution Time (Based on ctime): 21618.5 ms
Execution Time (Based on chrono): 39370.6 ms
Memory Usage: 0 KB

real    39.37s
user    19.18s
sys     2.44s
cpu     54%
";

$string = "
┌──(user㉿dhcppc4)-[~/Desktop/Articles/4-RAM-vs-HDD-Pr/Files]
└─$ g++ RAM_write_test.cpp -o test.out
                                                                                                                   
┌──(user㉿dhcppc4)-[~/Desktop/Articles/4-RAM-vs-HDD-Pr/Files]
└─$ time ./test.out                   
Execution Time (Based on ctime): 3638.12 ms
Execution Time (Based on chrono): 3638.24 ms
Memory Usage: 1047004 KB

real    3.67s
user    3.45s
sys     0.22s
cpu     99%
                                                                                                                   
┌──(user㉿dhcppc4)-[~/Desktop/Articles/4-RAM-vs-HDD-Pr/Files]
└─$ time ./test.out
Execution Time (Based on ctime): 3539.23 ms
Execution Time (Based on chrono): 3539.71 ms
Memory Usage: 1046948 KB

real    3.56s
user    3.36s
sys     0.20s
cpu     99%
                                                                                                                   
┌──(user㉿dhcppc4)-[~/Desktop/Articles/4-RAM-vs-HDD-Pr/Files]
└─$ time ./test.out
Execution Time (Based on ctime): 3587.88 ms
Execution Time (Based on chrono): 3588.17 ms
Memory Usage: 1046956 KB

real    3.63s
user    3.43s
sys     0.20s
cpu     99%
                                                                                                                   
┌──(user㉿dhcppc4)-[~/Desktop/Articles/4-RAM-vs-HDD-Pr/Files]
└─$ time ./test.out
Execution Time (Based on ctime): 3629.68 ms
Execution Time (Based on chrono): 3630.07 ms
Memory Usage: 1046968 KB

real    3.67s
user    3.43s
sys     0.24s
cpu     99%
                                                                                                                   
┌──(user㉿dhcppc4)-[~/Desktop/Articles/4-RAM-vs-HDD-Pr/Files]
└─$ time ./test.out
Execution Time (Based on ctime): 3568.61 ms
Execution Time (Based on chrono): 3568.84 ms
Memory Usage: 1046920 KB

real    3.59s
user    3.39s
sys     0.21s
cpu     99%
                                                                                                                   
┌──(user㉿dhcppc4)-[~/Desktop/Articles/4-RAM-vs-HDD-Pr/Files]
└─$ time ./test.out
Execution Time (Based on ctime): 3578.81 ms
Execution Time (Based on chrono): 3578.97 ms
Memory Usage: 1046828 KB

real    3.61s
user    3.39s
sys     0.22s
cpu     99%
                                                                                                                   
┌──(user㉿dhcppc4)-[~/Desktop/Articles/4-RAM-vs-HDD-Pr/Files]
└─$ time ./test.out
Execution Time (Based on ctime): 3585.52 ms
Execution Time (Based on chrono): 3585.62 ms
Memory Usage: 1046760 KB

real    3.61s
user    3.33s
sys     0.28s
cpu     99%
                                                                                                                   
┌──(user㉿dhcppc4)-[~/Desktop/Articles/4-RAM-vs-HDD-Pr/Files]
└─$ time ./test.out
Execution Time (Based on ctime): 3566.91 ms
Execution Time (Based on chrono): 3567.07 ms
Memory Usage: 1046944 KB

real    3.60s
user    3.37s
sys     0.22s
cpu     99%
                                                                                                                   
┌──(user㉿dhcppc4)-[~/Desktop/Articles/4-RAM-vs-HDD-Pr/Files]
└─$ time ./test.out
Execution Time (Based on ctime): 3594.36 ms
Execution Time (Based on chrono): 3594.45 ms
Memory Usage: 1046972 KB

real    3.63s
user    3.39s
sys     0.24s
cpu     99%
                                                                                                                   
┌──(user㉿dhcppc4)-[~/Desktop/Articles/4-RAM-vs-HDD-Pr/Files]
└─$ time ./test.out
Execution Time (Based on ctime): 3584.68 ms
Execution Time (Based on chrono): 3588.76 ms
Memory Usage: 1046840 KB

real    3.62s
user    3.35s
sys     0.27s
cpu     99%
";

$string = 
"
┌──(user㉿dhcppc4)-[~/Desktop/Articles/4-RAM-vs-HDD-Pr/Files]
└─$ g++ HDD_write_test.cpp -o HDD_write.out
                                                                                                                   
┌──(user㉿dhcppc4)-[~/Desktop/Articles/4-RAM-vs-HDD-Pr/Files]
└─$ time ./HDD_write.out 
Execution Time (Based on ctime): 11230.8 ms
Execution Time (Based on chrono): 25468.1 ms
Memory Usage: 0 KB

real    25.48s
user    10.30s
sys     0.93s
cpu     44%
                                                                                                                   
┌──(user㉿dhcppc4)-[~/Desktop/Articles/4-RAM-vs-HDD-Pr/Files]
└─$ time ./HDD_write.out
Execution Time (Based on ctime): 11096.1 ms
Execution Time (Based on chrono): 20764 ms
Memory Usage: 0 KB

real    20.77s
user    10.16s
sys     0.94s
cpu     53%
                                                                                                                   
┌──(user㉿dhcppc4)-[~/Desktop/Articles/4-RAM-vs-HDD-Pr/Files]
└─$ time ./HDD_write.out
Execution Time (Based on ctime): 13815.2 ms
Execution Time (Based on chrono): 32682 ms
Memory Usage: 0 KB

real    32.68s
user    12.63s
sys     1.18s
cpu     42%
                                                                                                                   
┌──(user㉿dhcppc4)-[~/Desktop/Articles/4-RAM-vs-HDD-Pr/Files]
└─$ time ./HDD_write.out
Execution Time (Based on ctime): 15544.6 ms
Execution Time (Based on chrono): 47560 ms
Memory Usage: 0 KB

real    47.57s
user    13.91s
sys     1.64s
cpu     32%
                                                                                                                   
┌──(user㉿dhcppc4)-[~/Desktop/Articles/4-RAM-vs-HDD-Pr/Files]
└─$ time ./HDD_write.out
Execution Time (Based on ctime): 16873.7 ms
Execution Time (Based on chrono): 45354.9 ms
Memory Usage: 0 KB

real    45.36s
user    15.25s
sys     1.63s
cpu     37%
                                                                                                                   
┌──(user㉿dhcppc4)-[~/Desktop/Articles/4-RAM-vs-HDD-Pr/Files]
└─$ time ./HDD_write.out
Execution Time (Based on ctime): 15391.3 ms
Execution Time (Based on chrono): 39712.6 ms
Memory Usage: 0 KB

real    39.92s
user    13.94s
sys     1.46s
cpu     38%
                                                                                                                   
┌──(user㉿dhcppc4)-[~/Desktop/Articles/4-RAM-vs-HDD-Pr/Files]
└─$ time ./HDD_write.out
Execution Time (Based on ctime): 14051.7 ms
Execution Time (Based on chrono): 29361.3 ms
Memory Usage: 0 KB

real    29.36s
user    12.61s
sys     1.44s
cpu     47%
                                                                                                                   
┌──(user㉿dhcppc4)-[~/Desktop/Articles/4-RAM-vs-HDD-Pr/Files]
└─$ time ./HDD_write.out
Execution Time (Based on ctime): 13137.5 ms
Execution Time (Based on chrono): 35374 ms
Memory Usage: 0 KB

real    35.64s
user    11.94s
sys     1.21s
cpu     36%
                                                                                                                   
┌──(user㉿dhcppc4)-[~/Desktop/Articles/4-RAM-vs-HDD-Pr/Files]
└─$ time ./HDD_write.out
Execution Time (Based on ctime): 13510.7 ms
Execution Time (Based on chrono): 28392.7 ms
Memory Usage: 0 KB

real    28.40s
user    12.42s
sys     1.10s
cpu     47%
                                                                                                                   
┌──(user㉿dhcppc4)-[~/Desktop/Articles/4-RAM-vs-HDD-Pr/Files]
└─$ time ./HDD_write.out
Execution Time (Based on ctime): 13595 ms
Execution Time (Based on chrono): 44944.2 ms
Memory Usage: 0 KB

real    44.95s
user    12.24s
sys     1.35s
cpu     30%
                                                                                                                   
┌──(user㉿dhcppc4)-[~/Desktop/Articles/4-RAM-vs-HDD-Pr/Files]
└─$ time ./HDD_write.out
Execution Time (Based on ctime): 18275.6 ms
Execution Time (Based on chrono): 70660.9 ms
Memory Usage: 0 KB

real    70.66s
user    16.16s
sys     2.11s
cpu     25%
                                                                                                                   
┌──(user㉿dhcppc4)-[~/Desktop/Articles/4-RAM-vs-HDD-Pr/Files]
└─$ time ./HDD_write.out
Execution Time (Based on ctime): 17255 ms
Execution Time (Based on chrono): 49479.4 ms
Memory Usage: 0 KB

real    49.48s
user    15.43s
sys     1.82s
cpu     34%
                                                                                                                   
┌──(user㉿dhcppc4)-[~/Desktop/Articles/4-RAM-vs-HDD-Pr/Files]
└─$ time ./HDD_write.out
Execution Time (Based on ctime): 15195.9 ms
Execution Time (Based on chrono): 52613.5 ms
Memory Usage: 0 KB

real    52.62s
user    13.64s
sys     1.56s
cpu     28%
                                                                                                                   
┌──(user㉿dhcppc4)-[~/Desktop/Articles/4-RAM-vs-HDD-Pr/Files]
└─$ time ./HDD_write.out
Execution Time (Based on ctime): 14688.6 ms
Execution Time (Based on chrono): 54965.7 ms
Memory Usage: 0 KB

real    54.97s
user    13.33s
sys     1.36s
cpu     26%
                                                                                                                   
┌──(user㉿dhcppc4)-[~/Desktop/Articles/4-RAM-vs-HDD-Pr/Files]
└─$ time ./HDD_write.out
Execution Time (Based on ctime): 18287.1 ms
Execution Time (Based on chrono): 61944 ms
Memory Usage: 0 KB

real    61.95s
user    16.30s
sys     1.98s
cpu     29%
                                                                                                                   
┌──(user㉿dhcppc4)-[~/Desktop/Articles/4-RAM-vs-HDD-Pr/Files]
└─$ time ./HDD_write.out
Execution Time (Based on ctime): 21118.9 ms
Execution Time (Based on chrono): 70709.4 ms
Memory Usage: 0 KB

real    70.71s
user    19.07s
sys     2.05s
cpu     29%
                                                                                                                   
┌──(user㉿dhcppc4)-[~/Desktop/Articles/4-RAM-vs-HDD-Pr/Files]
└─$ time ./HDD_write.out
Execution Time (Based on ctime): 24345 ms
Execution Time (Based on chrono): 82900.9 ms
Memory Usage: 0 KB

real    82.90s
user    21.94s
sys     2.41s
cpu     29%
                                                                                                                   
┌──(user㉿dhcppc4)-[~/Desktop/Articles/4-RAM-vs-HDD-Pr/Files]
└─$ time ./HDD_write.out
Execution Time (Based on ctime): 18640.5 ms
Execution Time (Based on chrono): 56225.7 ms
Memory Usage: 0 KB

real    56.23s
user    16.70s
sys     1.94s
cpu     33%
                                                                                                                   
┌──(user㉿dhcppc4)-[~/Desktop/Articles/4-RAM-vs-HDD-Pr/Files]
└─$ time ./HDD_write.out
Execution Time (Based on ctime): 17671.1 ms
Execution Time (Based on chrono): 68766 ms
Memory Usage: 0 KB

real    68.77s
user    16.09s
sys     1.58s
cpu     25%
                                                                                                                   
┌──(user㉿dhcppc4)-[~/Desktop/Articles/4-RAM-vs-HDD-Pr/Files]
└─$ time ./HDD_write.out
Execution Time (Based on ctime): 22847.9 ms
Execution Time (Based on chrono): 88525.2 ms
Memory Usage: 0 KB

real    88.53s
user    20.43s
sys     2.42s
cpu     25%
";

$string =
"
┌──(user㉿dhcppc4)-[~/Desktop/Articles/4-RAM-vs-HDD-Pr/Files]
└─$ g++ Fibo_RAM.cpp
                                                                                                                                                             
┌──(user㉿dhcppc4)-[~/Desktop/Articles/4-RAM-vs-HDD-Pr/Files]
└─$ time ./a.out    
12200160415121876738
Execution Time (Based on ctime): 0.066 ms
Execution Time (Based on chrono): 0.035751 ms
Memory Usage: 0 KB

real    0.00s
user    0.00s
sys     0.00s
cpu     87%
                                                                                                                                                             
┌──(user㉿dhcppc4)-[~/Desktop/Articles/4-RAM-vs-HDD-Pr/Files]
└─$ time ./a.out
12200160415121876738
Execution Time (Based on ctime): 0.127 ms
Execution Time (Based on chrono): 0.094721 ms
Memory Usage: 0 KB

real    0.01s
user    0.00s
sys     0.01s
cpu     88%
                                                                                                                                                             
┌──(user㉿dhcppc4)-[~/Desktop/Articles/4-RAM-vs-HDD-Pr/Files]
└─$ time ./a.out
12200160415121876738
Execution Time (Based on ctime): 0.122 ms
Execution Time (Based on chrono): 0.08808 ms
Memory Usage: 0 KB

real    0.01s
user    0.00s
sys     0.00s
cpu     88%
                                                                                                                                                             
┌──(user㉿dhcppc4)-[~/Desktop/Articles/4-RAM-vs-HDD-Pr/Files]
└─$ time ./a.out
12200160415121876738
Execution Time (Based on ctime): 0.05 ms
Execution Time (Based on chrono): 0.034632 ms
Memory Usage: 0 KB

real    0.00s
user    0.00s
sys     0.00s
cpu     89%
                                                                                                                                                             
┌──(user㉿dhcppc4)-[~/Desktop/Articles/4-RAM-vs-HDD-Pr/Files]
└─$ time ./a.out
12200160415121876738
Execution Time (Based on ctime): 0.15 ms
Execution Time (Based on chrono): 0.111781 ms
Memory Usage: 0 KB

real    0.01s
user    0.01s
sys     0.00s
cpu     88%
                                                                                                                                                             
┌──(user㉿dhcppc4)-[~/Desktop/Articles/4-RAM-vs-HDD-Pr/Files]
└─$ time ./a.out
12200160415121876738
Execution Time (Based on ctime): 0.14 ms
Execution Time (Based on chrono): 0.101224 ms
Memory Usage: 0 KB

real    0.01s
user    0.01s
sys     0.00s
cpu     88%
                                                                                                                                                             
┌──(user㉿dhcppc4)-[~/Desktop/Articles/4-RAM-vs-HDD-Pr/Files]
└─$ time ./a.out
12200160415121876738
Execution Time (Based on ctime): 0.15 ms
Execution Time (Based on chrono): 0.111455 ms
Memory Usage: 0 KB

real    0.01s
user    0.00s
sys     0.00s
cpu     89%
                                                                                                                                                             
┌──(user㉿dhcppc4)-[~/Desktop/Articles/4-RAM-vs-HDD-Pr/Files]
└─$ time ./a.out
12200160415121876738
Execution Time (Based on ctime): 0.048 ms
Execution Time (Based on chrono): 0.032223 ms
Memory Usage: 0 KB

real    0.00s
user    0.00s
sys     0.00s
cpu     86%
                                                                                                                                                             
┌──(user㉿dhcppc4)-[~/Desktop/Articles/4-RAM-vs-HDD-Pr/Files]
└─$ time ./a.out
12200160415121876738
Execution Time (Based on ctime): 0.053 ms
Execution Time (Based on chrono): 0.037364 ms
Memory Usage: 0 KB

real    0.00s
user    0.00s
sys     0.00s
cpu     88%
                                                                                                                                                             
┌──(user㉿dhcppc4)-[~/Desktop/Articles/4-RAM-vs-HDD-Pr/Files]
└─$ time ./a.out
12200160415121876738
Execution Time (Based on ctime): 0.046 ms
Execution Time (Based on chrono): 0.030818 ms
Memory Usage: 0 KB

real    0.00s
user    0.00s
sys     0.00s
cpu     87%
                                                                                                                                                             
┌──(user㉿dhcppc4)-[~/Desktop/Articles/4-RAM-vs-HDD-Pr/Files]
└─$ time ./a.out
12200160415121876738
Execution Time (Based on ctime): 0.125 ms
Execution Time (Based on chrono): 0.09257 ms
Memory Usage: 0 KB

real    0.01s
user    0.01s
sys     0.00s
cpu     87%
                                                                                                                                                             
┌──(user㉿dhcppc4)-[~/Desktop/Articles/4-RAM-vs-HDD-Pr/Files]
└─$ time ./a.out
12200160415121876738
Execution Time (Based on ctime): 0.12 ms
Execution Time (Based on chrono): 0.088397 ms
Memory Usage: 0 KB

real    0.01s
user    0.01s
sys     0.00s
cpu     88%
                                                                                                                                                             
┌──(user㉿dhcppc4)-[~/Desktop/Articles/4-RAM-vs-HDD-Pr/Files]
└─$ time ./a.out
12200160415121876738
Execution Time (Based on ctime): 0.121 ms
Execution Time (Based on chrono): 0.089428 ms
Memory Usage: 0 KB

real    0.01s
user    0.00s
sys     0.00s
cpu     87%
                                                                                                                                                             
┌──(user㉿dhcppc4)-[~/Desktop/Articles/4-RAM-vs-HDD-Pr/Files]
└─$ time ./a.out
12200160415121876738
Execution Time (Based on ctime): 0.159 ms
Execution Time (Based on chrono): 0.111137 ms
Memory Usage: 0 KB

real    0.01s
user    0.00s
sys     0.01s
cpu     88%
                                                                                                                                                             
┌──(user㉿dhcppc4)-[~/Desktop/Articles/4-RAM-vs-HDD-Pr/Files]
└─$ time ./a.out
12200160415121876738
Execution Time (Based on ctime): 0.148 ms
Execution Time (Based on chrono): 0.110892 ms
Memory Usage: 0 KB

real    0.01s
user    0.01s
sys     0.00s
cpu     88%
                                                                                                                                                             
┌──(user㉿dhcppc4)-[~/Desktop/Articles/4-RAM-vs-HDD-Pr/Files]
└─$ time ./a.out
12200160415121876738
Execution Time (Based on ctime): 0.053 ms
Execution Time (Based on chrono): 0.03688 ms
Memory Usage: 0 KB

real    0.00s
user    0.00s
sys     0.00s
cpu     89%
                                                                                                                                                             
┌──(user㉿dhcppc4)-[~/Desktop/Articles/4-RAM-vs-HDD-Pr/Files]
└─$ time ./a.out
12200160415121876738
Execution Time (Based on ctime): 0.129 ms
Execution Time (Based on chrono): 0.096686 ms
Memory Usage: 0 KB

real    0.01s
user    0.00s
sys     0.01s
cpu     88%
                                                                                                                                                             
┌──(user㉿dhcppc4)-[~/Desktop/Articles/4-RAM-vs-HDD-Pr/Files]
└─$ time ./a.out
12200160415121876738
Execution Time (Based on ctime): 0.044 ms
Execution Time (Based on chrono): 0.029967 ms
Memory Usage: 0 KB

real    0.00s
user    0.00s
sys     0.00s
cpu     86%
                                                                                                                                                             
┌──(user㉿dhcppc4)-[~/Desktop/Articles/4-RAM-vs-HDD-Pr/Files]
└─$ time ./a.out
12200160415121876738
Execution Time (Based on ctime): 0.045 ms
Execution Time (Based on chrono): 0.029736 ms
Memory Usage: 0 KB

real    0.00s
user    0.00s
sys     0.00s
cpu     86%
                                                                                                                                                             
┌──(user㉿dhcppc4)-[~/Desktop/Articles/4-RAM-vs-HDD-Pr/Files]
└─$ time ./a.out
12200160415121876738
Execution Time (Based on ctime): 0.128 ms
Execution Time (Based on chrono): 0.094682 ms
Memory Usage: 0 KB

real    0.01s
user    0.00s
sys     0.00s
cpu     89%
                                                                                                                                                             
┌──(user㉿dhcppc4)-[~/Desktop/Articles/4-RAM-vs-HDD-Pr/Files]
└─$ time ./a.out
12200160415121876738
Execution Time (Based on ctime): 0.121 ms
Execution Time (Based on chrono): 0.088579 ms
Memory Usage: 0 KB

real    0.01s
user    0.00s
sys     0.00s
cpu     86%
                                                                                                                                                             
┌──(user㉿dhcppc4)-[~/Desktop/Articles/4-RAM-vs-HDD-Pr/Files]
└─$ time ./a.out
12200160415121876738
Execution Time (Based on ctime): 0.103 ms
Execution Time (Based on chrono): 0.051734 ms
Memory Usage: 0 KB

real    0.00s
user    0.00s
sys     0.00s
cpu     89%
                                                                                                                                                             
┌──(user㉿dhcppc4)-[~/Desktop/Articles/4-RAM-vs-HDD-Pr/Files]
└─$ time ./a.out
12200160415121876738
Execution Time (Based on ctime): 0.047 ms
Execution Time (Based on chrono): 0.030919 ms
Memory Usage: 0 KB

real    0.00s
user    0.00s
sys     0.00s
cpu     88%
                                                                                                                                                             
┌──(user㉿dhcppc4)-[~/Desktop/Articles/4-RAM-vs-HDD-Pr/Files]
└─$ time ./a.out
12200160415121876738
Execution Time (Based on ctime): 0.145 ms
Execution Time (Based on chrono): 0.106697 ms
Memory Usage: 0 KB

real    0.01s
user    0.00s
sys     0.00s
cpu     89%
                                                                                                                                                             
┌──(user㉿dhcppc4)-[~/Desktop/Articles/4-RAM-vs-HDD-Pr/Files]
└─$ time ./a.out
12200160415121876738
Execution Time (Based on ctime): 0.051 ms
Execution Time (Based on chrono): 0.034342 ms
Memory Usage: 0 KB

real    0.00s
user    0.00s
sys     0.00s
cpu     88%
                                                                                                                                                             
┌──(user㉿dhcppc4)-[~/Desktop/Articles/4-RAM-vs-HDD-Pr/Files]
└─$ time ./a.out
12200160415121876738
Execution Time (Based on ctime): 0.148 ms
Execution Time (Based on chrono): 0.110057 ms
Memory Usage: 0 KB

real    0.01s
user    0.01s
sys     0.00s
cpu     89%
                                                                                                                                                             
┌──(user㉿dhcppc4)-[~/Desktop/Articles/4-RAM-vs-HDD-Pr/Files]
└─$ time ./a.out
12200160415121876738
Execution Time (Based on ctime): 0.126 ms
Execution Time (Based on chrono): 0.094865 ms
Memory Usage: 0 KB

real    0.01s
user    0.00s
sys     0.01s
cpu     88%
                                                                                                                                                             
┌──(user㉿dhcppc4)-[~/Desktop/Articles/4-RAM-vs-HDD-Pr/Files]
└─$ time ./a.out
12200160415121876738
Execution Time (Based on ctime): 0.051 ms
Execution Time (Based on chrono): 0.035199 ms
Memory Usage: 0 KB

real    0.00s
user    0.00s
sys     0.00s
cpu     89%
                                                                                                                                                             
┌──(user㉿dhcppc4)-[~/Desktop/Articles/4-RAM-vs-HDD-Pr/Files]
└─$ time ./a.out
12200160415121876738
Execution Time (Based on ctime): 0.14 ms
Execution Time (Based on chrono): 0.102388 ms
Memory Usage: 0 KB

real    0.01s
user    0.00s
sys     0.01s
cpu     89%
                                                                                                                                                             
┌──(user㉿dhcppc4)-[~/Desktop/Articles/4-RAM-vs-HDD-Pr/Files]
└─$ time ./a.out
12200160415121876738
Execution Time (Based on ctime): 0.045 ms
Execution Time (Based on chrono): 0.030435 ms
Memory Usage: 0 KB

real    0.00s
user    0.00s
sys     0.00s
cpu     85%
                                                                                                                                                             
┌──(user㉿dhcppc4)-[~/Desktop/Articles/4-RAM-vs-HDD-Pr/Files]
└─$ time ./a.out
12200160415121876738
Execution Time (Based on ctime): 0.048 ms
Execution Time (Based on chrono): 0.034097 ms
Memory Usage: 0 KB

real    0.00s
user    0.00s
sys     0.00s
cpu     85%
                                                                                                                                                             
┌──(user㉿dhcppc4)-[~/Desktop/Articles/4-RAM-vs-HDD-Pr/Files]
└─$ time ./a.out
12200160415121876738
Execution Time (Based on ctime): 0.124 ms
Execution Time (Based on chrono): 0.092128 ms
Memory Usage: 0 KB

real    0.01s
user    0.00s
sys     0.00s
cpu     87%
                                                                                                                                                             
┌──(user㉿dhcppc4)-[~/Desktop/Articles/4-RAM-vs-HDD-Pr/Files]
└─$ time ./a.out
12200160415121876738
Execution Time (Based on ctime): 0.046 ms
Execution Time (Based on chrono): 0.031791 ms
Memory Usage: 0 KB

real    0.00s
user    0.00s
sys     0.00s
cpu     88%
                                                                                                                                                             
┌──(user㉿dhcppc4)-[~/Desktop/Articles/4-RAM-vs-HDD-Pr/Files]
└─$ time ./a.out
12200160415121876738
Execution Time (Based on ctime): 0.045 ms
Execution Time (Based on chrono): 0.030651 ms
Memory Usage: 0 KB

real    0.00s
user    0.00s
sys     0.00s
cpu     86%
                                                                                                                                                             
┌──(user㉿dhcppc4)-[~/Desktop/Articles/4-RAM-vs-HDD-Pr/Files]
└─$ time ./a.out
12200160415121876738
Execution Time (Based on ctime): 0.046 ms
Execution Time (Based on chrono): 0.031053 ms
Memory Usage: 0 KB

real    0.00s
user    0.00s
sys     0.00s
cpu     86%
                                                                                                                                                             
┌──(user㉿dhcppc4)-[~/Desktop/Articles/4-RAM-vs-HDD-Pr/Files]
└─$ time ./a.out
12200160415121876738
Execution Time (Based on ctime): 0.06 ms
Execution Time (Based on chrono): 0.045026 ms
Memory Usage: 0 KB

real    0.00s
user    0.00s
sys     0.00s
cpu     87%
                                                                                                                                                             
┌──(user㉿dhcppc4)-[~/Desktop/Articles/4-RAM-vs-HDD-Pr/Files]
└─$ time ./a.out
12200160415121876738
Execution Time (Based on ctime): 0.047 ms
Execution Time (Based on chrono): 0.031791 ms
Memory Usage: 0 KB

real    0.00s
user    0.00s
sys     0.00s
cpu     88%
                                                                                                                                                             
┌──(user㉿dhcppc4)-[~/Desktop/Articles/4-RAM-vs-HDD-Pr/Files]
└─$ time ./a.out
12200160415121876738
Execution Time (Based on ctime): 0.129 ms
Execution Time (Based on chrono): 0.095468 ms
Memory Usage: 0 KB

real    0.01s
user    0.00s
sys     0.00s
cpu     89%
                                                                                                                                                             
┌──(user㉿dhcppc4)-[~/Desktop/Articles/4-RAM-vs-HDD-Pr/Files]
└─$ time ./a.out
12200160415121876738
Execution Time (Based on ctime): 0.122 ms
Execution Time (Based on chrono): 0.087091 ms
Memory Usage: 0 KB

real    0.01s
user    0.00s
sys     0.00s
cpu     89%
                                                                                                                                                             
┌──(user㉿dhcppc4)-[~/Desktop/Articles/4-RAM-vs-HDD-Pr/Files]
└─$ time ./a.out
12200160415121876738
Execution Time (Based on ctime): 0.044 ms
Execution Time (Based on chrono): 0.029332 ms
Memory Usage: 0 KB

real    0.00s
user    0.00s
sys     0.00s
cpu     86%

┌──(user㉿dhcppc4)-[~/Desktop/Articles/4-RAM-vs-HDD-Pr/Files]
└─$ time ./a.out         
12200160415121876738
Execution Time (Based on ctime): 0.13 ms
Execution Time (Based on chrono): 0.096376 ms
Memory Usage: 0 KB

real    0.01s
user    0.00s
sys     0.00s
cpu     88%
                                                                                                                                                             
┌──(user㉿dhcppc4)-[~/Desktop/Articles/4-RAM-vs-HDD-Pr/Files]
└─$ time ./a.out
12200160415121876738
Execution Time (Based on ctime): 0.125 ms
Execution Time (Based on chrono): 0.091047 ms
Memory Usage: 0 KB

real    0.01s
user    0.00s
sys     0.00s
cpu     89%
                                                                                                                                                             
┌──(user㉿dhcppc4)-[~/Desktop/Articles/4-RAM-vs-HDD-Pr/Files]
└─$ time ./a.out
12200160415121876738
Execution Time (Based on ctime): 0.124 ms
Execution Time (Based on chrono): 0.090338 ms
Memory Usage: 0 KB

real    0.01s
user    0.00s
sys     0.00s
cpu     87%
                                                                                                                                                             
┌──(user㉿dhcppc4)-[~/Desktop/Articles/4-RAM-vs-HDD-Pr/Files]
└─$ time ./a.out
12200160415121876738
Execution Time (Based on ctime): 0.124 ms
Execution Time (Based on chrono): 0.090225 ms
Memory Usage: 0 KB

real    0.01s
user    0.00s
sys     0.00s
cpu     88%
                                                                                                                                                             
┌──(user㉿dhcppc4)-[~/Desktop/Articles/4-RAM-vs-HDD-Pr/Files]
└─$ time ./a.out
12200160415121876738
Execution Time (Based on ctime): 0.121 ms
Execution Time (Based on chrono): 0.0879 ms
Memory Usage: 0 KB

real    0.01s
user    0.00s
sys     0.00s
cpu     88%
                                                                                                                                                             
┌──(user㉿dhcppc4)-[~/Desktop/Articles/4-RAM-vs-HDD-Pr/Files]
└─$ time ./a.out
12200160415121876738
Execution Time (Based on ctime): 0.124 ms
Execution Time (Based on chrono): 0.091002 ms
Memory Usage: 0 KB

real    0.01s
user    0.00s
sys     0.00s
cpu     89%
                                                                                                                                                             
┌──(user㉿dhcppc4)-[~/Desktop/Articles/4-RAM-vs-HDD-Pr/Files]
└─$ time ./a.out
12200160415121876738
Execution Time (Based on ctime): 0.127 ms
Execution Time (Based on chrono): 0.093424 ms
Memory Usage: 0 KB

real    0.01s
user    0.01s
sys     0.00s
cpu     87%
                                                                                                                                                             
┌──(user㉿dhcppc4)-[~/Desktop/Articles/4-RAM-vs-HDD-Pr/Files]
└─$ time ./a.out
12200160415121876738
Execution Time (Based on ctime): 0.123 ms
Execution Time (Based on chrono): 0.090351 ms
Memory Usage: 0 KB

real    0.01s
user    0.00s
sys     0.01s
cpu     88%
                                                                                                                                                             
┌──(user㉿dhcppc4)-[~/Desktop/Articles/4-RAM-vs-HDD-Pr/Files]
└─$ time ./a.out
12200160415121876738
Execution Time (Based on ctime): 0.136 ms
Execution Time (Based on chrono): 0.103215 ms
Memory Usage: 0 KB

real    0.01s
user    0.00s
sys     0.00s
cpu     88%
                                                                                                                                                             
┌──(user㉿dhcppc4)-[~/Desktop/Articles/4-RAM-vs-HDD-Pr/Files]
└─$ time ./a.out
12200160415121876738
Execution Time (Based on ctime): 0.118 ms
Execution Time (Based on chrono): 0.085639 ms
Memory Usage: 0 KB

real    0.01s
user    0.00s
sys     0.00s
cpu     88%
";

$string = "
┌──(user㉿dhcppc4)-[~/Desktop/Articles/4-RAM-vs-HDD-Pr/Files]
└─$ g++ Fibo_HDD.cpp
                                                                                                                                                             
┌──(user㉿dhcppc4)-[~/Desktop/Articles/4-RAM-vs-HDD-Pr/Files]
└─$ time ./a.out
12200160415121876738
Execution Time (Based on ctime): 27.961 ms
Execution Time (Based on chrono): 44.9589 ms
Memory Usage: 0 KB

real    0.05s
user    0.00s
sys     0.03s
cpu     63%
                                                                                                                                                             
┌──(user㉿dhcppc4)-[~/Desktop/Articles/4-RAM-vs-HDD-Pr/Files]
└─$ time ./a.out
12200160415121876738
Execution Time (Based on ctime): 31.508 ms
Execution Time (Based on chrono): 31.4675 ms
Memory Usage: 0 KB

real    0.04s
user    0.00s
sys     0.03s
cpu     98%
                                                                                                                                                             
┌──(user㉿dhcppc4)-[~/Desktop/Articles/4-RAM-vs-HDD-Pr/Files]
└─$ time ./a.out
12200160415121876738
Execution Time (Based on ctime): 33.407 ms
Execution Time (Based on chrono): 173.327 ms
Memory Usage: 0 KB

real    0.18s
user    0.01s
sys     0.03s
cpu     21%
                                                                                                                                                             
┌──(user㉿dhcppc4)-[~/Desktop/Articles/4-RAM-vs-HDD-Pr/Files]
└─$ time ./a.out
12200160415121876738
Execution Time (Based on ctime): 37.039 ms
Execution Time (Based on chrono): 60.1359 ms
Memory Usage: 0 KB

real    0.07s
user    0.00s
sys     0.04s
cpu     63%
                                                                                                                                                             
┌──(user㉿dhcppc4)-[~/Desktop/Articles/4-RAM-vs-HDD-Pr/Files]
└─$ time ./a.out
12200160415121876738
Execution Time (Based on ctime): 26.895 ms
Execution Time (Based on chrono): 53.0744 ms
Memory Usage: 0 KB

real    0.06s
user    0.00s
sys     0.03s
cpu     53%
                                                                                                                                                             
┌──(user㉿dhcppc4)-[~/Desktop/Articles/4-RAM-vs-HDD-Pr/Files]
└─$ time ./a.out
12200160415121876738
Execution Time (Based on ctime): 30.281 ms
Execution Time (Based on chrono): 30.9933 ms
Memory Usage: 0 KB

real    0.03s
user    0.00s
sys     0.03s
cpu     97%
                                                                                                                                                             
┌──(user㉿dhcppc4)-[~/Desktop/Articles/4-RAM-vs-HDD-Pr/Files]
└─$ time ./a.out
12200160415121876738
Execution Time (Based on ctime): 26.92 ms
Execution Time (Based on chrono): 27.194 ms
Memory Usage: 0 KB

real    0.03s
user    0.00s
sys     0.03s
cpu     97%
                                                                                                                                                             
┌──(user㉿dhcppc4)-[~/Desktop/Articles/4-RAM-vs-HDD-Pr/Files]
└─$ time ./a.out
12200160415121876738
Execution Time (Based on ctime): 28.805 ms
Execution Time (Based on chrono): 45.9833 ms
Memory Usage: 0 KB

real    0.05s
user    0.00s
sys     0.03s
cpu     63%
                                                                                                                                                             
┌──(user㉿dhcppc4)-[~/Desktop/Articles/4-RAM-vs-HDD-Pr/Files]
└─$ time ./a.out
12200160415121876738
Execution Time (Based on ctime): 35.667 ms
Execution Time (Based on chrono): 94.1039 ms
Memory Usage: 0 KB

real    0.10s
user    0.01s
sys     0.03s
cpu     40%
                                                                                                                                                             
┌──(user㉿dhcppc4)-[~/Desktop/Articles/4-RAM-vs-HDD-Pr/Files]
└─$ time ./a.out
12200160415121876738
Execution Time (Based on ctime): 28.217 ms
Execution Time (Based on chrono): 40.1542 ms
Memory Usage: 0 KB

real    0.04s
user    0.00s
sys     0.03s
cpu     71%
                                                                                                                                                             
┌──(user㉿dhcppc4)-[~/Desktop/Articles/4-RAM-vs-HDD-Pr/Files]
└─$ time ./a.out
12200160415121876738
Execution Time (Based on ctime): 52.593 ms
Execution Time (Based on chrono): 68.8812 ms
Memory Usage: 0 KB

real    0.07s
user    0.01s
sys     0.05s
cpu     77%
                                                                                                                                                             
┌──(user㉿dhcppc4)-[~/Desktop/Articles/4-RAM-vs-HDD-Pr/Files]
└─$ time ./a.out
12200160415121876738
Execution Time (Based on ctime): 74.053 ms
Execution Time (Based on chrono): 335.553 ms
Memory Usage: 0 KB

real    0.34s
user    0.02s
sys     0.06s
cpu     23%
                                                                                                                                                             
┌──(user㉿dhcppc4)-[~/Desktop/Articles/4-RAM-vs-HDD-Pr/Files]
└─$ time ./a.out
12200160415121876738
Execution Time (Based on ctime): 29.317 ms
Execution Time (Based on chrono): 42.8699 ms
Memory Usage: 0 KB

real    0.05s
user    0.01s
sys     0.02s
cpu     70%
                                                                                                                                                             
┌──(user㉿dhcppc4)-[~/Desktop/Articles/4-RAM-vs-HDD-Pr/Files]
└─$ time ./a.out
12200160415121876738
Execution Time (Based on ctime): 50.748 ms
Execution Time (Based on chrono): 83.1821 ms
Memory Usage: 0 KB

real    0.09s
user    0.01s
sys     0.05s
cpu     62%
                                                                                                                                                             
┌──(user㉿dhcppc4)-[~/Desktop/Articles/4-RAM-vs-HDD-Pr/Files]
└─$ time ./a.out
12200160415121876738
Execution Time (Based on ctime): 50.086 ms
Execution Time (Based on chrono): 59.5969 ms
Memory Usage: 0 KB

real    0.06s
user    0.00s
sys     0.05s
cpu     84%
                                                                                                                                                             
┌──(user㉿dhcppc4)-[~/Desktop/Articles/4-RAM-vs-HDD-Pr/Files]
└─$ time ./a.out
12200160415121876738
Execution Time (Based on ctime): 26.691 ms
Execution Time (Based on chrono): 66.4044 ms
Memory Usage: 0 KB

real    0.07s
user    0.01s
sys     0.02s
cpu     43%
                                                                                                                                                             
┌──(user㉿dhcppc4)-[~/Desktop/Articles/4-RAM-vs-HDD-Pr/Files]
└─$ time ./a.out
12200160415121876738
Execution Time (Based on ctime): 27.622 ms
Execution Time (Based on chrono): 42.9472 ms
Memory Usage: 0 KB

real    0.05s
user    0.00s
sys     0.03s
cpu     66%
                                                                                                                                                             
┌──(user㉿dhcppc4)-[~/Desktop/Articles/4-RAM-vs-HDD-Pr/Files]
└─$ time ./a.out
12200160415121876738
Execution Time (Based on ctime): 26.011 ms
Execution Time (Based on chrono): 42.8584 ms
Memory Usage: 0 KB

real    0.05s
user    0.00s
sys     0.03s
cpu     63%
                                                                                                                                                             
┌──(user㉿dhcppc4)-[~/Desktop/Articles/4-RAM-vs-HDD-Pr/Files]
└─$ time ./a.out
12200160415121876738
Execution Time (Based on ctime): 46.855 ms
Execution Time (Based on chrono): 59.3697 ms
Memory Usage: 0 KB

real    0.06s
user    0.01s
sys     0.04s
cpu     79%
                                                                                                                                                             
┌──(user㉿dhcppc4)-[~/Desktop/Articles/4-RAM-vs-HDD-Pr/Files]
└─$ time ./a.out
12200160415121876738
Execution Time (Based on ctime): 43.295 ms
Execution Time (Based on chrono): 55.3742 ms
Memory Usage: 0 KB

real    0.06s
user    0.00s
sys     0.04s
cpu     79%
                                                                                                                                                             
┌──(user㉿dhcppc4)-[~/Desktop/Articles/4-RAM-vs-HDD-Pr/Files]
└─$ time ./a.out
12200160415121876738
Execution Time (Based on ctime): 56.283 ms
Execution Time (Based on chrono): 56.3353 ms
Memory Usage: 0 KB

real    0.06s
user    0.02s
sys     0.04s
cpu     98%
                                                                                                                                                             
┌──(user㉿dhcppc4)-[~/Desktop/Articles/4-RAM-vs-HDD-Pr/Files]
└─$ time ./a.out
12200160415121876738
Execution Time (Based on ctime): 55.732 ms
Execution Time (Based on chrono): 153.311 ms
Memory Usage: 0 KB

real    0.16s
user    0.02s
sys     0.04s
cpu     37%
                                                                                                                                                             
┌──(user㉿dhcppc4)-[~/Desktop/Articles/4-RAM-vs-HDD-Pr/Files]
└─$ time ./a.out
12200160415121876738
Execution Time (Based on ctime): 36.473 ms
Execution Time (Based on chrono): 90.0586 ms
Memory Usage: 0 KB

real    0.09s
user    0.01s
sys     0.03s
cpu     42%
                                                                                                                                                             
┌──(user㉿dhcppc4)-[~/Desktop/Articles/4-RAM-vs-HDD-Pr/Files]
└─$ time ./a.out
12200160415121876738
Execution Time (Based on ctime): 35.634 ms
Execution Time (Based on chrono): 60.2903 ms
Memory Usage: 0 KB

real    0.07s
user    0.01s
sys     0.03s
cpu     61%
                                                                                                                                                             
┌──(user㉿dhcppc4)-[~/Desktop/Articles/4-RAM-vs-HDD-Pr/Files]
└─$ time ./a.out
12200160415121876738
Execution Time (Based on ctime): 37.919 ms
Execution Time (Based on chrono): 41.4295 ms
Memory Usage: 0 KB

real    0.05s
user    0.00s
sys     0.04s
cpu     90%
                                                                                                                                                             
┌──(user㉿dhcppc4)-[~/Desktop/Articles/4-RAM-vs-HDD-Pr/Files]
└─$ time ./a.out
12200160415121876738
Execution Time (Based on ctime): 53.446 ms
Execution Time (Based on chrono): 55.0082 ms
Memory Usage: 0 KB

real    0.06s
user    0.02s
sys     0.04s
cpu     96%
                                                                                                                                                             
┌──(user㉿dhcppc4)-[~/Desktop/Articles/4-RAM-vs-HDD-Pr/Files]
└─$ time ./a.out
12200160415121876738
Execution Time (Based on ctime): 57.878 ms
Execution Time (Based on chrono): 215.491 ms
Memory Usage: 0 KB

real    0.22s
user    0.02s
sys     0.04s
cpu     28%
                                                                                                                                                             
┌──(user㉿dhcppc4)-[~/Desktop/Articles/4-RAM-vs-HDD-Pr/Files]
└─$ time ./a.out
12200160415121876738
Execution Time (Based on ctime): 51.583 ms
Execution Time (Based on chrono): 79.8935 ms
Memory Usage: 0 KB

real    0.08s
user    0.02s
sys     0.04s
cpu     65%
                                                                                                                                                             
┌──(user㉿dhcppc4)-[~/Desktop/Articles/4-RAM-vs-HDD-Pr/Files]
└─$ time ./a.out
12200160415121876738
Execution Time (Based on ctime): 66.857 ms
Execution Time (Based on chrono): 318.953 ms
Memory Usage: 0 KB

real    0.32s
user    0.01s
sys     0.06s
cpu     22%
                                                                                                                                                             
┌──(user㉿dhcppc4)-[~/Desktop/Articles/4-RAM-vs-HDD-Pr/Files]
└─$ time ./a.out
12200160415121876738
Execution Time (Based on ctime): 44.318 ms
Execution Time (Based on chrono): 44.4082 ms
Memory Usage: 0 KB

real    0.05s
user    0.01s
sys     0.04s
cpu     98%
                                                                                                                                                             
┌──(user㉿dhcppc4)-[~/Desktop/Articles/4-RAM-vs-HDD-Pr/Files]
└─$ time ./a.out
12200160415121876738
Execution Time (Based on ctime): 68.406 ms
Execution Time (Based on chrono): 391.37 ms
Memory Usage: 0 KB

real    0.40s
user    0.00s
sys     0.07s
cpu     18%
                                                                                                                                                             
┌──(user㉿dhcppc4)-[~/Desktop/Articles/4-RAM-vs-HDD-Pr/Files]
└─$ time ./a.out
12200160415121876738
Execution Time (Based on ctime): 64.93 ms
Execution Time (Based on chrono): 266.554 ms
Memory Usage: 0 KB

real    0.27s
user    0.01s
sys     0.06s
cpu     25%
                                                                                                                                                             
┌──(user㉿dhcppc4)-[~/Desktop/Articles/4-RAM-vs-HDD-Pr/Files]
└─$ time ./a.out
12200160415121876738
Execution Time (Based on ctime): 53.075 ms
Execution Time (Based on chrono): 95.7015 ms
Memory Usage: 0 KB

real    0.10s
user    0.01s
sys     0.05s
cpu     57%
                                                                                                                                                             
┌──(user㉿dhcppc4)-[~/Desktop/Articles/4-RAM-vs-HDD-Pr/Files]
└─$ time ./a.out
12200160415121876738
Execution Time (Based on ctime): 48.386 ms
Execution Time (Based on chrono): 51.8912 ms
Memory Usage: 0 KB

real    0.06s
user    0.00s
sys     0.05s
cpu     92%
                                                                                                                                                             
┌──(user㉿dhcppc4)-[~/Desktop/Articles/4-RAM-vs-HDD-Pr/Files]
└─$ time ./a.out
12200160415121876738
Execution Time (Based on ctime): 64.722 ms
Execution Time (Based on chrono): 282.728 ms
Memory Usage: 0 KB

real    0.29s
user    0.00s
sys     0.06s
cpu     24%
                                                                                                                                                             
┌──(user㉿dhcppc4)-[~/Desktop/Articles/4-RAM-vs-HDD-Pr/Files]
└─$ time ./a.out
12200160415121876738
Execution Time (Based on ctime): 30.692 ms
Execution Time (Based on chrono): 51.0716 ms
Memory Usage: 0 KB

real    0.05s
user    0.01s
sys     0.03s
cpu     61%
                                                                                                                                                             
┌──(user㉿dhcppc4)-[~/Desktop/Articles/4-RAM-vs-HDD-Pr/Files]
└─$ time ./a.out
12200160415121876738
Execution Time (Based on ctime): 42.179 ms
Execution Time (Based on chrono): 71.7145 ms
Memory Usage: 0 KB

real    0.08s
user    0.00s
sys     0.04s
cpu     60%
                                                                                                                                                             
┌──(user㉿dhcppc4)-[~/Desktop/Articles/4-RAM-vs-HDD-Pr/Files]
└─$ time ./a.out
12200160415121876738
Execution Time (Based on ctime): 27.902 ms
Execution Time (Based on chrono): 49.6614 ms
Memory Usage: 0 KB

real    0.05s
user    0.01s
sys     0.02s
cpu     57%
                                                                                                                                                             
┌──(user㉿dhcppc4)-[~/Desktop/Articles/4-RAM-vs-HDD-Pr/Files]
└─$ time ./a.out
12200160415121876738
Execution Time (Based on ctime): 50.868 ms
Execution Time (Based on chrono): 65.8676 ms
Memory Usage: 0 KB

real    0.07s
user    0.00s
sys     0.06s
cpu     77%
                                                                                                                                                             
┌──(user㉿dhcppc4)-[~/Desktop/Articles/4-RAM-vs-HDD-Pr/Files]
└─$ time ./a.out
12200160415121876738
Execution Time (Based on ctime): 38.906 ms
Execution Time (Based on chrono): 229.074 ms
Memory Usage: 0 KB

real    0.23s
user    0.01s
sys     0.04s
cpu     18%
                                                                                                                                                             
┌──(user㉿dhcppc4)-[~/Desktop/Articles/4-RAM-vs-HDD-Pr/Files]
└─$ time ./a.out
12200160415121876738
Execution Time (Based on ctime): 45.282 ms
Execution Time (Based on chrono): 95.5347 ms
Memory Usage: 0 KB

real    0.10s
user    0.01s
sys     0.04s
cpu     49%
                                                                                                                                                             
┌──(user㉿dhcppc4)-[~/Desktop/Articles/4-RAM-vs-HDD-Pr/Files]
└─$ time ./a.out
12200160415121876738
Execution Time (Based on ctime): 32.539 ms
Execution Time (Based on chrono): 37.7129 ms
Memory Usage: 0 KB

real    0.04s
user    0.00s
sys     0.03s
cpu     86%
                                                                                                                                                             
┌──(user㉿dhcppc4)-[~/Desktop/Articles/4-RAM-vs-HDD-Pr/Files]
└─$ time ./a.out
12200160415121876738
Execution Time (Based on ctime): 47.754 ms
Execution Time (Based on chrono): 60.9285 ms
Memory Usage: 0 KB

real    0.07s
user    0.01s
sys     0.04s
cpu     79%
                                                                                                                                                             
┌──(user㉿dhcppc4)-[~/Desktop/Articles/4-RAM-vs-HDD-Pr/Files]
└─$ time ./a.out
12200160415121876738
Execution Time (Based on ctime): 34.381 ms
Execution Time (Based on chrono): 41.1787 ms
Memory Usage: 0 KB

real    0.05s
user    0.00s
sys     0.04s
cpu     84%
                                                                                                                                                             
┌──(user㉿dhcppc4)-[~/Desktop/Articles/4-RAM-vs-HDD-Pr/Files]
└─$ time ./a.out
12200160415121876738
Execution Time (Based on ctime): 52.619 ms
Execution Time (Based on chrono): 291.559 ms
Memory Usage: 0 KB

real    0.30s
user    0.01s
sys     0.05s
cpu     19%
                                                                                                                                                             
┌──(user㉿dhcppc4)-[~/Desktop/Articles/4-RAM-vs-HDD-Pr/Files]
└─$ time ./a.out
12200160415121876738
Execution Time (Based on ctime): 24.712 ms
Execution Time (Based on chrono): 85.2908 ms
Memory Usage: 0 KB

real    0.09s
user    0.00s
sys     0.02s
cpu     30%
                                                                                                                                                             
┌──(user㉿dhcppc4)-[~/Desktop/Articles/4-RAM-vs-HDD-Pr/Files]
└─$ time ./a.out
12200160415121876738
Execution Time (Based on ctime): 54.553 ms
Execution Time (Based on chrono): 72.2719 ms
Memory Usage: 0 KB

real    0.08s
user    0.02s
sys     0.04s
cpu     76%
                                                                                                                                                             
┌──(user㉿dhcppc4)-[~/Desktop/Articles/4-RAM-vs-HDD-Pr/Files]
└─$ time ./a.out
12200160415121876738
Execution Time (Based on ctime): 61.797 ms
Execution Time (Based on chrono): 396.595 ms
Memory Usage: 0 KB

real    0.40s
user    0.01s
sys     0.06s
cpu     16%
                                                                                                                                                             
┌──(user㉿dhcppc4)-[~/Desktop/Articles/4-RAM-vs-HDD-Pr/Files]
└─$ time ./a.out
12200160415121876738
Execution Time (Based on ctime): 24.581 ms
Execution Time (Based on chrono): 44.3478 ms
Memory Usage: 0 KB

real    0.05s
user    0.00s
sys     0.03s
cpu     58%
                                                                                                                                                             
┌──(user㉿dhcppc4)-[~/Desktop/Articles/4-RAM-vs-HDD-Pr/Files]
└─$ time ./a.out
12200160415121876738
Execution Time (Based on ctime): 41.316 ms
Execution Time (Based on chrono): 74.7477 ms
Memory Usage: 0 KB

real    0.08s
user    0.00s
sys     0.04s
cpu     57%
";

$string = "
┌──(user㉿dhcppc4)-[~/Desktop/Articles/4-RAM-vs-HDD-Pr/Files]
└─$ g++ Iteration_RAM.cpp
                                                                                            
┌──(user㉿dhcppc4)-[~/Desktop/Articles/4-RAM-vs-HDD-Pr/Files]
└─$ time ./a.out
36
Execution Time (Based on ctime): 1.288 ms
Execution Time (Based on chrono): 1.27333 ms
Memory Usage: 0 KB

real    0.00s
user    0.00s
sys     0.00s
cpu     93%
                                                                                            
┌──(user㉿dhcppc4)-[~/Desktop/Articles/4-RAM-vs-HDD-Pr/Files]
└─$ time ./a.out
36
Execution Time (Based on ctime): 1.196 ms
Execution Time (Based on chrono): 1.18127 ms
Memory Usage: 0 KB

real    0.00s
user    0.00s
sys     0.00s
cpu     92%
                                                                                            
┌──(user㉿dhcppc4)-[~/Desktop/Articles/4-RAM-vs-HDD-Pr/Files]
└─$ time ./a.out
36
Execution Time (Based on ctime): 1.101 ms
Execution Time (Based on chrono): 1.08655 ms
Memory Usage: 0 KB

real    0.00s
user    0.00s
sys     0.00s
cpu     93%
                                                                                            
┌──(user㉿dhcppc4)-[~/Desktop/Articles/4-RAM-vs-HDD-Pr/Files]
└─$ time ./a.out
36
Execution Time (Based on ctime): 2 ms
Execution Time (Based on chrono): 1.96631 ms
Memory Usage: 0 KB

real    0.01s
user    0.00s
sys     0.01s
cpu     92%
                                                                                            
┌──(user㉿dhcppc4)-[~/Desktop/Articles/4-RAM-vs-HDD-Pr/Files]
└─$ time ./a.out
36
Execution Time (Based on ctime): 2.147 ms
Execution Time (Based on chrono): 2.11425 ms
Memory Usage: 0 KB

real    0.01s
user    0.00s
sys     0.00s
cpu     92%
                                                                                            
┌──(user㉿dhcppc4)-[~/Desktop/Articles/4-RAM-vs-HDD-Pr/Files]
└─$ time ./a.out
36
Execution Time (Based on ctime): 1.894 ms
Execution Time (Based on chrono): 1.86002 ms
Memory Usage: 0 KB

real    0.01s
user    0.00s
sys     0.00s
cpu     92%
                                                                                            
┌──(user㉿dhcppc4)-[~/Desktop/Articles/4-RAM-vs-HDD-Pr/Files]
└─$ time ./a.out
36
Execution Time (Based on ctime): 2.371 ms
Execution Time (Based on chrono): 2.33654 ms
Memory Usage: 0 KB

real    0.01s
user    0.01s
sys     0.00s
cpu     92%
                                                                                            
┌──(user㉿dhcppc4)-[~/Desktop/Articles/4-RAM-vs-HDD-Pr/Files]
└─$ time ./a.out
36
Execution Time (Based on ctime): 2.297 ms
Execution Time (Based on chrono): 2.26285 ms
Memory Usage: 0 KB

real    0.01s
user    0.00s
sys     0.00s
cpu     92%
                                                                                            
┌──(user㉿dhcppc4)-[~/Desktop/Articles/4-RAM-vs-HDD-Pr/Files]
└─$ time ./a.out
36
Execution Time (Based on ctime): 1.832 ms
Execution Time (Based on chrono): 1.79954 ms
Memory Usage: 0 KB

real    0.01s
user    0.00s
sys     0.00s
cpu     91%
                                                                                            
┌──(user㉿dhcppc4)-[~/Desktop/Articles/4-RAM-vs-HDD-Pr/Files]
└─$ time ./a.out
36
Execution Time (Based on ctime): 2.074 ms
Execution Time (Based on chrono): 2.03888 ms
Memory Usage: 0 KB

real    0.01s
user    0.00s
sys     0.00s
cpu     92%
                                                                                            
┌──(user㉿dhcppc4)-[~/Desktop/Articles/4-RAM-vs-HDD-Pr/Files]
└─$ time ./a.out
36
Execution Time (Based on ctime): 2.393 ms
Execution Time (Based on chrono): 2.36894 ms
Memory Usage: 0 KB

real    0.01s
user    0.00s
sys     0.00s
cpu     93%
                                                                                            
┌──(user㉿dhcppc4)-[~/Desktop/Articles/4-RAM-vs-HDD-Pr/Files]
└─$ time ./a.out
36
Execution Time (Based on ctime): 2.423 ms
Execution Time (Based on chrono): 2.38987 ms
Memory Usage: 0 KB

real    0.01s
user    0.01s
sys     0.00s
cpu     92%
                                                                                            
┌──(user㉿dhcppc4)-[~/Desktop/Articles/4-RAM-vs-HDD-Pr/Files]
└─$ time ./a.out
36
Execution Time (Based on ctime): 2.164 ms
Execution Time (Based on chrono): 2.13099 ms
Memory Usage: 0 KB

real    0.01s
user    0.01s
sys     0.00s
cpu     92%
                                                                                            
┌──(user㉿dhcppc4)-[~/Desktop/Articles/4-RAM-vs-HDD-Pr/Files]
└─$ time ./a.out
36
Execution Time (Based on ctime): 2.153 ms
Execution Time (Based on chrono): 2.12008 ms
Memory Usage: 0 KB

real    0.01s
user    0.01s
sys     0.00s
cpu     92%
                                                                                            
┌──(user㉿dhcppc4)-[~/Desktop/Articles/4-RAM-vs-HDD-Pr/Files]
└─$ time ./a.out
36
Execution Time (Based on ctime): 2.221 ms
Execution Time (Based on chrono): 2.18724 ms
Memory Usage: 0 KB

real    0.01s
user    0.01s
sys     0.00s
cpu     92%
                                                                                            
┌──(user㉿dhcppc4)-[~/Desktop/Articles/4-RAM-vs-HDD-Pr/Files]
└─$ time ./a.out
36
Execution Time (Based on ctime): 1.274 ms
Execution Time (Based on chrono): 1.25876 ms
Memory Usage: 0 KB

real    0.00s
user    0.00s
sys     0.00s
cpu     92%
                                                                                            
┌──(user㉿dhcppc4)-[~/Desktop/Articles/4-RAM-vs-HDD-Pr/Files]
└─$ time ./a.out
36
Execution Time (Based on ctime): 2.239 ms
Execution Time (Based on chrono): 2.20461 ms
Memory Usage: 0 KB

real    0.01s
user    0.00s
sys     0.00s
cpu     92%
                                                                                            
┌──(user㉿dhcppc4)-[~/Desktop/Articles/4-RAM-vs-HDD-Pr/Files]
└─$ time ./a.out
36
Execution Time (Based on ctime): 1.031 ms
Execution Time (Based on chrono): 1.01659 ms
Memory Usage: 0 KB

real    0.00s
user    0.00s
sys     0.00s
cpu     92%
                                                                                            
┌──(user㉿dhcppc4)-[~/Desktop/Articles/4-RAM-vs-HDD-Pr/Files]
└─$ time ./a.out
36
Execution Time (Based on ctime): 2.485 ms
Execution Time (Based on chrono): 2.45185 ms
Memory Usage: 0 KB

real    0.01s
user    0.00s
sys     0.00s
cpu     92%
                                                                                            
┌──(user㉿dhcppc4)-[~/Desktop/Articles/4-RAM-vs-HDD-Pr/Files]
└─$ time ./a.out
36
Execution Time (Based on ctime): 1.276 ms
Execution Time (Based on chrono): 1.26014 ms
Memory Usage: 0 KB

real    0.00s
user    0.00s
sys     0.00s
cpu     92%
";

$string = "
┌──(user㉿dhcppc4)-[~/Desktop/Articles/4-RAM-vs-HDD-Pr/Files]
└─$ g++ Iteration_HDD.cpp 
                                                                                            
┌──(user㉿dhcppc4)-[~/Desktop/Articles/4-RAM-vs-HDD-Pr/Files]
└─$ time ./a.out
36
Execution Time (Based on ctime): 8134.59 ms
Execution Time (Based on chrono): 22359.2 ms
Memory Usage: 0 KB

real    22.36s
user    1.38s
sys     6.75s
cpu     36%
                                                                                            
┌──(user㉿dhcppc4)-[~/Desktop/Articles/4-RAM-vs-HDD-Pr/Files]
└─$ time ./a.out
36
Execution Time (Based on ctime): 8427.09 ms
Execution Time (Based on chrono): 22312.2 ms
Memory Usage: 0 KB

real    22.31s
user    1.49s
sys     6.94s
cpu     37%
                                                                                            
┌──(user㉿dhcppc4)-[~/Desktop/Articles/4-RAM-vs-HDD-Pr/Files]
└─$ time ./a.out
36
Execution Time (Based on ctime): 8167.64 ms
Execution Time (Based on chrono): 22296.8 ms
Memory Usage: 0 KB

real    22.30s
user    1.45s
sys     6.72s
cpu     36%
                                                                                            
┌──(user㉿dhcppc4)-[~/Desktop/Articles/4-RAM-vs-HDD-Pr/Files]
└─$ time ./a.out
36
Execution Time (Based on ctime): 8040.17 ms
Execution Time (Based on chrono): 22315.6 ms
Memory Usage: 0 KB

real    22.32s
user    1.43s
sys     6.61s
cpu     36%
                                                                                            
┌──(user㉿dhcppc4)-[~/Desktop/Articles/4-RAM-vs-HDD-Pr/Files]
└─$ time ./a.out
36
Execution Time (Based on ctime): 8921.16 ms
Execution Time (Based on chrono): 30141.7 ms
Memory Usage: 0 KB

real    30.14s
user    1.43s
sys     7.49s
cpu     29%
                                                                                            
┌──(user㉿dhcppc4)-[~/Desktop/Articles/4-RAM-vs-HDD-Pr/Files]
└─$ time ./a.out
36
Execution Time (Based on ctime): 7915.38 ms
Execution Time (Based on chrono): 22112.7 ms
Memory Usage: 0 KB

real    22.12s
user    1.35s
sys     6.57s
cpu     35%
                                                                                            
┌──(user㉿dhcppc4)-[~/Desktop/Articles/4-RAM-vs-HDD-Pr/Files]
└─$ time ./a.out
36
Execution Time (Based on ctime): 8791.03 ms
Execution Time (Based on chrono): 26041.5 ms
Memory Usage: 0 KB

real    26.04s
user    1.41s
sys     7.38s
cpu     33%
                                                                                            
┌──(user㉿dhcppc4)-[~/Desktop/Articles/4-RAM-vs-HDD-Pr/Files]
└─$ time ./a.out
36
Execution Time (Based on ctime): 9897.57 ms
Execution Time (Based on chrono): 29009.1 ms
Memory Usage: 0 KB

real    29.01s
user    1.70s
sys     8.20s
cpu     34%
                                                                                            
┌──(user㉿dhcppc4)-[~/Desktop/Articles/4-RAM-vs-HDD-Pr/Files]
└─$ time ./a.out
36
Execution Time (Based on ctime): 8693.6 ms
Execution Time (Based on chrono): 23570.2 ms
Memory Usage: 0 KB

real    23.57s
user    1.43s
sys     7.27s
cpu     36%
                                                                                            
┌──(user㉿dhcppc4)-[~/Desktop/Articles/4-RAM-vs-HDD-Pr/Files]
└─$ time ./a.out
36
Execution Time (Based on ctime): 9362.56 ms
Execution Time (Based on chrono): 28498.6 ms
Memory Usage: 0 KB

real    28.50s
user    1.74s
sys     7.62s
cpu     32%
";



// $ctimes     = [];
// $chronos    = [];
// $mems       = [];
// $reals      = [];
// $users      = [];
// $syses      = [];
// $cpus       = [];

// foreach (explode( PHP_EOL, trim( $string ) ) as $line) {
//     if ( strpos( $line, "Execution Time (Based on ctime)" ) !== false )
//         $ctimes[] = explode( ' ', trim($line) )[5];
//     if ( strpos( $line, "Execution Time (Based on chrono)" ) !== false )
//         $chronos[] = explode( ' ', trim($line) )[5];
//     if ( strpos( $line, "Memory Usage" ) !== false )
//         $mems[] = explode( ' ', trim($line) )[2];
//     if ( strpos( $line, "real" ) !== false )
//         $reals[] = explode( ' ', trim(preg_replace("/ {2,}/", " ", $line)) )[1];
//     if ( strpos( $line, "user" ) !== false && strpos( $line, "dhcp" ) === false && strpos( $line, "$" ) === false )
//         $users[] = explode( ' ', trim(preg_replace("/ {2,}/", " ", $line)) )[1];
//     if ( strpos( $line, "sys" ) !== false )
//         $syses[] = explode( ' ', trim(preg_replace("/ {2,}/", " ", $line)) )[1];
//     if ( strpos( $line, "cpu" ) !== false )
//         $cpus[] = explode( ' ', trim(preg_replace("/ {2,}/", " ", $line)) )[1];
// }


// $sum_ctime = 0;
// $sum_chrono = 0;
// $sum_mem = 0;
// $sum_real = 0;
// $sum_user = 0;
// $sum_sys = 0;
// $sum_cpu = 0;

// error_reporting(E_ALL ^ E_WARNING); 
// for ($i=0; $i < NUMBER_OF_TESTS ; $i++) { 
//     $sum_ctime += $ctimes[$i];
//     $sum_chrono += $chronos[$i];
//     $sum_mem += $mems[$i];
//     $sum_real += $reals[$i];
//     $sum_user += $users[$i];
//     $sum_sys += $syses[$i];
//     $sum_cpu += $cpus[$i];
// } 
// error_reporting(E_ALL); 



// echo "(" . implode( "+", $ctimes ) . ") / ". NUMBER_OF_TESTS ." = " . $sum_ctime . " / ". NUMBER_OF_TESTS ." = " . $sum_ctime/NUMBER_OF_TESTS . PHP_EOL;
// echo "(" . implode( "+", $chronos ) . ") / ". NUMBER_OF_TESTS ." = " . $sum_chrono . " / ". NUMBER_OF_TESTS ." = " . $sum_chrono/NUMBER_OF_TESTS . PHP_EOL;
// echo "(" . implode( "+", $mems ) . ") / ". NUMBER_OF_TESTS ." = " . $sum_mem . " / ". NUMBER_OF_TESTS ." = " . $sum_mem/NUMBER_OF_TESTS . PHP_EOL;
// echo "(" . implode( "+", $reals ) . ") / ". NUMBER_OF_TESTS ." = " . $sum_real . " / ". NUMBER_OF_TESTS ." = " . $sum_real/NUMBER_OF_TESTS . PHP_EOL;
// echo "(" . implode( "+", $users ) . ") / ". NUMBER_OF_TESTS ." = " . $sum_user . " / ". NUMBER_OF_TESTS ." = " . $sum_user/NUMBER_OF_TESTS . PHP_EOL;
// echo "(" . implode( "+", $syses ) . ") / ". NUMBER_OF_TESTS ." = " . $sum_sys . " / ". NUMBER_OF_TESTS ." = " . $sum_sys/NUMBER_OF_TESTS . PHP_EOL;
// echo "(" . implode( "+", $cpus ) . ") / ". NUMBER_OF_TESTS ." = " . $sum_cpu . " / ". NUMBER_OF_TESTS ." = " . $sum_cpu/NUMBER_OF_TESTS . PHP_EOL;

// echo PHP_EOL;
// echo PHP_EOL;
// echo "Therefore:";
// echo PHP_EOL;
// echo PHP_EOL;

// echo "* Average Execution Time(Based on ctime): " . $sum_ctime/NUMBER_OF_TESTS . " ms" . PHP_EOL;
// echo "* Average Execution Time(Based on chrono): " . $sum_chrono/NUMBER_OF_TESTS . " ms" . PHP_EOL;
// echo "* Average Memory Usage: " . $sum_mem/NUMBER_OF_TESTS . " KB" . PHP_EOL;
// echo "* Average Real Time: " . $sum_real/NUMBER_OF_TESTS . " s" . PHP_EOL;
// echo "* Average User Time: " . $sum_user/NUMBER_OF_TESTS . " s" . PHP_EOL;
// echo "* Average Sys Time: " . $sum_sys/NUMBER_OF_TESTS . " s" . PHP_EOL;
// echo "* Average CPU Usage: " . $sum_cpu/NUMBER_OF_TESTS . " %" . PHP_EOL;

$string = "


4
Execution Time (Based on chrono): 0.05557 ms

4
Execution Time (Based on chrono): 0.04354 ms

4
Execution Time (Based on chrono): 0.037682 ms

4
Execution Time (Based on chrono): 0.055058 ms

4
Execution Time (Based on chrono): 0.059299 ms

4
Execution Time (Based on chrono): 0.040107 ms

4
Execution Time (Based on chrono): 0.044795 ms

4
Execution Time (Based on chrono): 0.033862 ms

4
Execution Time (Based on chrono): 0.03316 ms

4
Execution Time (Based on chrono): 0.030346 ms

4
Execution Time (Based on chrono): 0.031631 ms

4
Execution Time (Based on chrono): 0.039248 ms

4
Execution Time (Based on chrono): 0.031442 ms

4
Execution Time (Based on chrono): 0.030144 ms

4
Execution Time (Based on chrono): 0.031636 ms

4
Execution Time (Based on chrono): 0.030273 ms

4
Execution Time (Based on chrono): 0.044436 ms

4
Execution Time (Based on chrono): 0.035037 ms

4
Execution Time (Based on chrono): 0.032099 ms

4
Execution Time (Based on chrono): 0.032844 ms

4
Execution Time (Based on chrono): 0.029726 ms

4
Execution Time (Based on chrono): 0.031982 ms

4
Execution Time (Based on chrono): 0.03101 ms

4
Execution Time (Based on chrono): 0.034369 ms

4
Execution Time (Based on chrono): 0.033597 ms

4
Execution Time (Based on chrono): 0.042123 ms

4
Execution Time (Based on chrono): 0.03926 ms

4
Execution Time (Based on chrono): 0.037468 ms

4
Execution Time (Based on chrono): 0.03927 ms

4
Execution Time (Based on chrono): 0.042095 ms

4
Execution Time (Based on chrono): 0.039197 ms

4
Execution Time (Based on chrono): 0.04276 ms

4
Execution Time (Based on chrono): 0.043037 ms

4
Execution Time (Based on chrono): 0.058996 ms

4
Execution Time (Based on chrono): 0.032882 ms

4
Execution Time (Based on chrono): 0.034359 ms

4
Execution Time (Based on chrono): 0.032656 ms

4
Execution Time (Based on chrono): 0.034285 ms

4
Execution Time (Based on chrono): 0.031125 ms

4
Execution Time (Based on chrono): 0.029796 ms

4
Execution Time (Based on chrono): 0.035702 ms

4
Execution Time (Based on chrono): 0.030816 ms

4
Execution Time (Based on chrono): 0.03118 ms

4
Execution Time (Based on chrono): 0.036636 ms

4
Execution Time (Based on chrono): 0.029955 ms

4
Execution Time (Based on chrono): 0.029841 ms

4
Execution Time (Based on chrono): 0.029912 ms

4
Execution Time (Based on chrono): 0.047903 ms

4
Execution Time (Based on chrono): 0.038854 ms

4
Execution Time (Based on chrono): 0.033695 ms
";

$string = "


9
Execution Time (Based on chrono): 0.056729 ms

9
Execution Time (Based on chrono): 1.59152 ms

9
Execution Time (Based on chrono): 0.048881 ms

9
Execution Time (Based on chrono): 0.049231 ms

9
Execution Time (Based on chrono): 0.04922 ms

9
Execution Time (Based on chrono): 0.043113 ms

9
Execution Time (Based on chrono): 0.050367 ms

9
Execution Time (Based on chrono): 0.044923 ms

9
Execution Time (Based on chrono): 0.042751 ms

9
Execution Time (Based on chrono): 0.043592 ms

9
Execution Time (Based on chrono): 0.041487 ms

9
Execution Time (Based on chrono): 0.039294 ms

9
Execution Time (Based on chrono): 0.043805 ms

9
Execution Time (Based on chrono): 0.047856 ms

9
Execution Time (Based on chrono): 0.040708 ms

9
Execution Time (Based on chrono): 0.044756 ms

9
Execution Time (Based on chrono): 0.041053 ms

9
Execution Time (Based on chrono): 0.040405 ms

9
Execution Time (Based on chrono): 0.047841 ms

9
Execution Time (Based on chrono): 0.049873 ms

9
Execution Time (Based on chrono): 0.040557 ms

9
Execution Time (Based on chrono): 0.039935 ms

9
Execution Time (Based on chrono): 0.040469 ms

9
Execution Time (Based on chrono): 0.042405 ms

9
Execution Time (Based on chrono): 0.043633 ms

9
Execution Time (Based on chrono): 0.042428 ms

9
Execution Time (Based on chrono): 0.040278 ms

9
Execution Time (Based on chrono): 0.064401 ms

9
Execution Time (Based on chrono): 0.042753 ms

9
Execution Time (Based on chrono): 0.049396 ms

9
Execution Time (Based on chrono): 0.059291 ms

9
Execution Time (Based on chrono): 0.050488 ms

9
Execution Time (Based on chrono): 0.045674 ms

9
Execution Time (Based on chrono): 0.047207 ms

9
Execution Time (Based on chrono): 0.043165 ms

9
Execution Time (Based on chrono): 0.041103 ms

9
Execution Time (Based on chrono): 0.041197 ms

9
Execution Time (Based on chrono): 0.037907 ms

9
Execution Time (Based on chrono): 0.0587 ms

9
Execution Time (Based on chrono): 0.043548 ms

9
Execution Time (Based on chrono): 0.04071 ms

9
Execution Time (Based on chrono): 0.04312 ms

9
Execution Time (Based on chrono): 0.041312 ms

9
Execution Time (Based on chrono): 0.040731 ms

9
Execution Time (Based on chrono): 0.041073 ms

9
Execution Time (Based on chrono): 0.047526 ms

9
Execution Time (Based on chrono): 0.066859 ms

9
Execution Time (Based on chrono): 0.057422 ms

9
Execution Time (Based on chrono): 0.042882 ms

9
Execution Time (Based on chrono): 0.043553 ms
";

$string = "

16
Execution Time (Based on chrono): 0.068803 ms

16
Execution Time (Based on chrono): 0.059274 ms

16
Execution Time (Based on chrono): 3.0206 ms

16
Execution Time (Based on chrono): 0.053834 ms

16
Execution Time (Based on chrono): 0.051958 ms

16
Execution Time (Based on chrono): 0.051055 ms

16
Execution Time (Based on chrono): 0.057953 ms

16
Execution Time (Based on chrono): 0.059117 ms

16
Execution Time (Based on chrono): 0.042785 ms

16
Execution Time (Based on chrono): 0.048859 ms

16
Execution Time (Based on chrono): 0.045849 ms

16
Execution Time (Based on chrono): 0.042131 ms

16
Execution Time (Based on chrono): 0.05188 ms

16
Execution Time (Based on chrono): 0.042523 ms

16
Execution Time (Based on chrono): 0.049469 ms

16
Execution Time (Based on chrono): 0.038819 ms

16
Execution Time (Based on chrono): 0.0395 ms

16
Execution Time (Based on chrono): 0.041249 ms

16
Execution Time (Based on chrono): 0.040282 ms

16
Execution Time (Based on chrono): 0.040635 ms

16
Execution Time (Based on chrono): 0.037002 ms

16
Execution Time (Based on chrono): 0.044957 ms

16
Execution Time (Based on chrono): 0.040858 ms

16
Execution Time (Based on chrono): 0.038883 ms

16
Execution Time (Based on chrono): 0.04276 ms

16
Execution Time (Based on chrono): 0.061451 ms

16
Execution Time (Based on chrono): 0.042524 ms

16
Execution Time (Based on chrono): 0.040479 ms

16
Execution Time (Based on chrono): 0.05396 ms

16
Execution Time (Based on chrono): 0.041289 ms

16
Execution Time (Based on chrono): 0.039723 ms

16
Execution Time (Based on chrono): 0.049896 ms

16
Execution Time (Based on chrono): 0.041293 ms

16
Execution Time (Based on chrono): 0.039501 ms

16
Execution Time (Based on chrono): 0.040528 ms

16
Execution Time (Based on chrono): 0.049634 ms

16
Execution Time (Based on chrono): 0.053361 ms

16
Execution Time (Based on chrono): 0.041704 ms

16
Execution Time (Based on chrono): 0.044657 ms

16
Execution Time (Based on chrono): 0.041357 ms

16
Execution Time (Based on chrono): 0.040148 ms

16
Execution Time (Based on chrono): 0.045694 ms

16
Execution Time (Based on chrono): 0.058381 ms

16
Execution Time (Based on chrono): 0.041357 ms

16
Execution Time (Based on chrono): 0.040849 ms

16
Execution Time (Based on chrono): 0.036245 ms

16
Execution Time (Based on chrono): 0.044352 ms

16
Execution Time (Based on chrono): 0.043624 ms

16
Execution Time (Based on chrono): 0.040995 ms

16
Execution Time (Based on chrono): 0.036902 ms
";

$string = "


25
Execution Time (Based on chrono): 0.185036 ms

25
Execution Time (Based on chrono): 0.154471 ms

25
Execution Time (Based on chrono): 0.165113 ms

25
Execution Time (Based on chrono): 0.157347 ms

25
Execution Time (Based on chrono): 0.18171 ms

25
Execution Time (Based on chrono): 0.132968 ms

25
Execution Time (Based on chrono): 0.115558 ms

25
Execution Time (Based on chrono): 0.121692 ms

25
Execution Time (Based on chrono): 0.121769 ms

25
Execution Time (Based on chrono): 0.113374 ms

25
Execution Time (Based on chrono): 0.116244 ms

25
Execution Time (Based on chrono): 0.149405 ms

25
Execution Time (Based on chrono): 0.150177 ms

25
Execution Time (Based on chrono): 0.125981 ms

25
Execution Time (Based on chrono): 0.123877 ms

25
Execution Time (Based on chrono): 0.128397 ms

25
Execution Time (Based on chrono): 0.132772 ms

25
Execution Time (Based on chrono): 0.172368 ms

25
Execution Time (Based on chrono): 0.127196 ms

25
Execution Time (Based on chrono): 0.126897 ms

25
Execution Time (Based on chrono): 0.12715 ms

25
Execution Time (Based on chrono): 0.115237 ms

25
Execution Time (Based on chrono): 0.126738 ms

25
Execution Time (Based on chrono): 0.133597 ms

25
Execution Time (Based on chrono): 0.123583 ms

25
Execution Time (Based on chrono): 0.124886 ms

25
Execution Time (Based on chrono): 0.118664 ms

25
Execution Time (Based on chrono): 0.125119 ms

25
Execution Time (Based on chrono): 0.129162 ms

25
Execution Time (Based on chrono): 0.115475 ms

25
Execution Time (Based on chrono): 0.15031 ms

25
Execution Time (Based on chrono): 0.15324 ms

25
Execution Time (Based on chrono): 0.128633 ms

25
Execution Time (Based on chrono): 0.158191 ms

25
Execution Time (Based on chrono): 0.209703 ms

25
Execution Time (Based on chrono): 0.123722 ms

25
Execution Time (Based on chrono): 0.128189 ms

25
Execution Time (Based on chrono): 0.135494 ms

25
Execution Time (Based on chrono): 0.127625 ms

25
Execution Time (Based on chrono): 0.167394 ms

25
Execution Time (Based on chrono): 0.126804 ms

25
Execution Time (Based on chrono): 0.124159 ms

25
Execution Time (Based on chrono): 0.154155 ms

25
Execution Time (Based on chrono): 0.116885 ms

25
Execution Time (Based on chrono): 0.14578 ms

25
Execution Time (Based on chrono): 0.119057 ms

25
Execution Time (Based on chrono): 0.123312 ms

25
Execution Time (Based on chrono): 0.11629 ms

25
Execution Time (Based on chrono): 0.143316 ms

25
Execution Time (Based on chrono): 0.114863 ms
";

$string = "


36
Execution Time (Based on chrono): 2.8513 ms

36
Execution Time (Based on chrono): 1.01647 ms

36
Execution Time (Based on chrono): 0.976667 ms

36
Execution Time (Based on chrono): 0.970932 ms

36
Execution Time (Based on chrono): 0.97964 ms

36
Execution Time (Based on chrono): 0.995396 ms

36
Execution Time (Based on chrono): 0.982495 ms

36
Execution Time (Based on chrono): 0.97912 ms

36
Execution Time (Based on chrono): 0.966483 ms

36
Execution Time (Based on chrono): 0.970715 ms

36
Execution Time (Based on chrono): 0.934009 ms

36
Execution Time (Based on chrono): 0.950327 ms

36
Execution Time (Based on chrono): 0.974002 ms

36
Execution Time (Based on chrono): 0.975446 ms

36
Execution Time (Based on chrono): 0.986908 ms

36
Execution Time (Based on chrono): 0.980763 ms

36
Execution Time (Based on chrono): 1.1284 ms

36
Execution Time (Based on chrono): 0.982268 ms

36
Execution Time (Based on chrono): 0.983068 ms

36
Execution Time (Based on chrono): 0.987813 ms

36
Execution Time (Based on chrono): 0.993953 ms

36
Execution Time (Based on chrono): 1.02334 ms

36
Execution Time (Based on chrono): 1.01758 ms

36
Execution Time (Based on chrono): 1.11104 ms

36
Execution Time (Based on chrono): 0.987194 ms

36
Execution Time (Based on chrono): 1.04501 ms

36
Execution Time (Based on chrono): 0.979295 ms

36
Execution Time (Based on chrono): 0.995212 ms

36
Execution Time (Based on chrono): 0.987408 ms

36
Execution Time (Based on chrono): 1.01927 ms

36
Execution Time (Based on chrono): 1.01664 ms

36
Execution Time (Based on chrono): 0.987328 ms

36
Execution Time (Based on chrono): 0.973787 ms

36
Execution Time (Based on chrono): 0.975659 ms

36
Execution Time (Based on chrono): 0.973153 ms

36
Execution Time (Based on chrono): 0.978747 ms

36
Execution Time (Based on chrono): 0.952589 ms

36
Execution Time (Based on chrono): 1.09384 ms

36
Execution Time (Based on chrono): 1.37752 ms

36
Execution Time (Based on chrono): 1.01558 ms

36
Execution Time (Based on chrono): 0.982577 ms

36
Execution Time (Based on chrono): 1.0207 ms

36
Execution Time (Based on chrono): 0.974533 ms

36
Execution Time (Based on chrono): 1.11337 ms

36
Execution Time (Based on chrono): 0.985381 ms

36
Execution Time (Based on chrono): 1.01944 ms

36
Execution Time (Based on chrono): 1.04177 ms

36
Execution Time (Based on chrono): 1.0397 ms

36
Execution Time (Based on chrono): 1.02442 ms

36
Execution Time (Based on chrono): 1.04134 ms
";

$string = "


49
Execution Time (Based on chrono): 11.7602 ms

49
Execution Time (Based on chrono): 11.6177 ms

49
Execution Time (Based on chrono): 11.6259 ms

49
Execution Time (Based on chrono): 9.55161 ms

49
Execution Time (Based on chrono): 9.84909 ms

49
Execution Time (Based on chrono): 9.6777 ms

49
Execution Time (Based on chrono): 9.83686 ms

49
Execution Time (Based on chrono): 9.87394 ms

49
Execution Time (Based on chrono): 10.1924 ms

49
Execution Time (Based on chrono): 9.75504 ms

49
Execution Time (Based on chrono): 9.56854 ms

49
Execution Time (Based on chrono): 9.53915 ms

49
Execution Time (Based on chrono): 10.2645 ms

49
Execution Time (Based on chrono): 9.75044 ms

49
Execution Time (Based on chrono): 9.52632 ms

49
Execution Time (Based on chrono): 9.57528 ms

49
Execution Time (Based on chrono): 10.5565 ms

49
Execution Time (Based on chrono): 9.7492 ms

49
Execution Time (Based on chrono): 9.98362 ms

49
Execution Time (Based on chrono): 13.526 ms

49
Execution Time (Based on chrono): 11.1387 ms

49
Execution Time (Based on chrono): 11.8642 ms

49
Execution Time (Based on chrono): 11.5241 ms

49
Execution Time (Based on chrono): 12.129 ms

49
Execution Time (Based on chrono): 13.6267 ms

49
Execution Time (Based on chrono): 11.4817 ms

49
Execution Time (Based on chrono): 10.573 ms

49
Execution Time (Based on chrono): 11.2104 ms

49
Execution Time (Based on chrono): 11.0466 ms

49
Execution Time (Based on chrono): 11.0755 ms

49
Execution Time (Based on chrono): 10.6779 ms

49
Execution Time (Based on chrono): 12.0456 ms

49
Execution Time (Based on chrono): 10.9347 ms

49
Execution Time (Based on chrono): 11.2068 ms

49
Execution Time (Based on chrono): 11.2398 ms

49
Execution Time (Based on chrono): 11.4614 ms

49
Execution Time (Based on chrono): 11.3066 ms

49
Execution Time (Based on chrono): 10.9896 ms

49
Execution Time (Based on chrono): 11.3568 ms

49
Execution Time (Based on chrono): 10.9231 ms

49
Execution Time (Based on chrono): 10.6759 ms

49
Execution Time (Based on chrono): 16.8868 ms

49
Execution Time (Based on chrono): 14.999 ms

49
Execution Time (Based on chrono): 16.2878 ms

49
Execution Time (Based on chrono): 12.3337 ms

49
Execution Time (Based on chrono): 12.8563 ms

49
Execution Time (Based on chrono): 12.1443 ms

49
Execution Time (Based on chrono): 10.4334 ms

49
Execution Time (Based on chrono): 10.7875 ms

49
Execution Time (Based on chrono): 10.6904 ms
";

$string = "


64
Execution Time (Based on chrono): 122.437 ms

64
Execution Time (Based on chrono): 111.11 ms

64
Execution Time (Based on chrono): 116.911 ms

64
Execution Time (Based on chrono): 111.118 ms

64
Execution Time (Based on chrono): 114.321 ms

64
Execution Time (Based on chrono): 112.377 ms

64
Execution Time (Based on chrono): 117.222 ms

64
Execution Time (Based on chrono): 110.622 ms

64
Execution Time (Based on chrono): 110.967 ms

64
Execution Time (Based on chrono): 107.209 ms

64
Execution Time (Based on chrono): 119.983 ms

64
Execution Time (Based on chrono): 117.109 ms

64
Execution Time (Based on chrono): 113.132 ms

64
Execution Time (Based on chrono): 112.927 ms

64
Execution Time (Based on chrono): 117.166 ms

64
Execution Time (Based on chrono): 112.409 ms

64
Execution Time (Based on chrono): 110.612 ms

64
Execution Time (Based on chrono): 121.124 ms

64
Execution Time (Based on chrono): 115.648 ms

64
Execution Time (Based on chrono): 99.2176 ms

64
Execution Time (Based on chrono): 100.546 ms

64
Execution Time (Based on chrono): 96.6624 ms

64
Execution Time (Based on chrono): 97.9584 ms

64
Execution Time (Based on chrono): 95.4014 ms

64
Execution Time (Based on chrono): 98.3823 ms

64
Execution Time (Based on chrono): 98.5019 ms

64
Execution Time (Based on chrono): 98.32 ms

64
Execution Time (Based on chrono): 98.3984 ms

64
Execution Time (Based on chrono): 95.9734 ms

64
Execution Time (Based on chrono): 96.6039 ms

64
Execution Time (Based on chrono): 97.2092 ms

64
Execution Time (Based on chrono): 98.2006 ms

64
Execution Time (Based on chrono): 96.5731 ms

64
Execution Time (Based on chrono): 92.4531 ms

64
Execution Time (Based on chrono): 93.6754 ms

64
Execution Time (Based on chrono): 96.8256 ms

64
Execution Time (Based on chrono): 97.0719 ms

64
Execution Time (Based on chrono): 92.4971 ms

64
Execution Time (Based on chrono): 93.3109 ms

64
Execution Time (Based on chrono): 93.8384 ms

64
Execution Time (Based on chrono): 92.9399 ms

64
Execution Time (Based on chrono): 99.6457 ms

64
Execution Time (Based on chrono): 96.2368 ms

64
Execution Time (Based on chrono): 90.9912 ms

64
Execution Time (Based on chrono): 90.5309 ms

64
Execution Time (Based on chrono): 94.4321 ms

64
Execution Time (Based on chrono): 97.6597 ms

64
Execution Time (Based on chrono): 93.3925 ms

64
Execution Time (Based on chrono): 94.4273 ms

64
Execution Time (Based on chrono): 97.0904 ms


";

$string = "


81
Execution Time (Based on chrono): 1153.99 ms

81
Execution Time (Based on chrono): 1090 ms

81
Execution Time (Based on chrono): 927.97 ms

81
Execution Time (Based on chrono): 950.748 ms

81
Execution Time (Based on chrono): 952.153 ms

81
Execution Time (Based on chrono): 934.874 ms

81
Execution Time (Based on chrono): 951.585 ms

81
Execution Time (Based on chrono): 934.285 ms

81
Execution Time (Based on chrono): 931.199 ms

81
Execution Time (Based on chrono): 935.237 ms

81
Execution Time (Based on chrono): 951.123 ms

81
Execution Time (Based on chrono): 946.343 ms

81
Execution Time (Based on chrono): 1044.16 ms

81
Execution Time (Based on chrono): 1104.66 ms

81
Execution Time (Based on chrono): 1060.29 ms

81
Execution Time (Based on chrono): 933.39 ms

81
Execution Time (Based on chrono): 932.839 ms

81
Execution Time (Based on chrono): 943.719 ms

81
Execution Time (Based on chrono): 944.238 ms

81
Execution Time (Based on chrono): 936.994 ms

81
Execution Time (Based on chrono): 952.082 ms

81
Execution Time (Based on chrono): 938.932 ms

81
Execution Time (Based on chrono): 921.093 ms

81
Execution Time (Based on chrono): 929.203 ms

81
Execution Time (Based on chrono): 930.171 ms

81
Execution Time (Based on chrono): 1018.32 ms

81
Execution Time (Based on chrono): 1079.7 ms

81
Execution Time (Based on chrono): 1059.41 ms

81
Execution Time (Based on chrono): 936.524 ms

81
Execution Time (Based on chrono): 948.65 ms

81
Execution Time (Based on chrono): 950.927 ms

81
Execution Time (Based on chrono): 956.4 ms

81
Execution Time (Based on chrono): 955.033 ms

81
Execution Time (Based on chrono): 944.512 ms

81
Execution Time (Based on chrono): 943.176 ms

81
Execution Time (Based on chrono): 933.907 ms

81
Execution Time (Based on chrono): 939.347 ms

81
Execution Time (Based on chrono): 950.281 ms

81
Execution Time (Based on chrono): 1052.11 ms

81
Execution Time (Based on chrono): 1087.17 ms

81
Execution Time (Based on chrono): 1069.19 ms

81
Execution Time (Based on chrono): 952.72 ms

81
Execution Time (Based on chrono): 921.658 ms

81
Execution Time (Based on chrono): 921.936 ms

81
Execution Time (Based on chrono): 932.571 ms

81
Execution Time (Based on chrono): 954.542 ms

81
Execution Time (Based on chrono): 931.82 ms

81
Execution Time (Based on chrono): 944.327 ms

81
Execution Time (Based on chrono): 943.054 ms

81
Execution Time (Based on chrono): 937.911 ms


";

$string = "
100
Execution Time (Based on chrono): 9929.45 ms

100
Execution Time (Based on chrono): 9894.97 ms

100
Execution Time (Based on chrono): 9401.29 ms

100
Execution Time (Based on chrono): 9779.2 ms

100
Execution Time (Based on chrono): 9740.14 ms

100
Execution Time (Based on chrono): 9711.45 ms

100
Execution Time (Based on chrono): 9411.57 ms

100
Execution Time (Based on chrono): 9575.79 ms

100
Execution Time (Based on chrono): 9740.8 ms

100
Execution Time (Based on chrono): 9762.82 ms

100
Execution Time (Based on chrono): 10157.3 ms

100
Execution Time (Based on chrono): 9470.99 ms

100
Execution Time (Based on chrono): 9807.61 ms

100
Execution Time (Based on chrono): 9827.57 ms

100
Execution Time (Based on chrono): 9903.24 ms

100
Execution Time (Based on chrono): 9546.48 ms

100
Execution Time (Based on chrono): 9817.56 ms

100
Execution Time (Based on chrono): 9914.88 ms

100
Execution Time (Based on chrono): 9835.63 ms

100
Execution Time (Based on chrono): 9757.12 ms

100
Execution Time (Based on chrono): 9494.87 ms

100
Execution Time (Based on chrono): 9768.5 ms

100
Execution Time (Based on chrono): 9804.84 ms

100
Execution Time (Based on chrono): 9879.44 ms

100
Execution Time (Based on chrono): 9978.79 ms

100
Execution Time (Based on chrono): 10010.1 ms

100
Execution Time (Based on chrono): 9716.13 ms

100
Execution Time (Based on chrono): 9654.43 ms

100
Execution Time (Based on chrono): 9452.93 ms

100
Execution Time (Based on chrono): 9741.28 ms

100
Execution Time (Based on chrono): 9716.39 ms

100
Execution Time (Based on chrono): 9671.29 ms

100
Execution Time (Based on chrono): 9534.45 ms

100
Execution Time (Based on chrono): 9422.55 ms

100
Execution Time (Based on chrono): 9740.14 ms

100
Execution Time (Based on chrono): 9631.31 ms

100
Execution Time (Based on chrono): 9571.77 ms

100
Execution Time (Based on chrono): 9396.79 ms

100
Execution Time (Based on chrono): 9789.33 ms

100
Execution Time (Based on chrono): 10178.4 ms

100
Execution Time (Based on chrono): 9683.12 ms

100
Execution Time (Based on chrono): 9338.5 ms

100
Execution Time (Based on chrono): 9541.9 ms

100
Execution Time (Based on chrono): 9655.58 ms

100
Execution Time (Based on chrono): 9713.08 ms

100
Execution Time (Based on chrono): 9510.57 ms

100
Execution Time (Based on chrono): 9530.52 ms

100
Execution Time (Based on chrono): 9780.9 ms

100
Execution Time (Based on chrono): 9780.28 ms

100
Execution Time (Based on chrono): 9769.28 ms
";

$string = "
121
Execution Time (Based on chrono): 98059.1 ms

121
Execution Time (Based on chrono): 98639.7 ms

121
Execution Time (Based on chrono): 99670.5 ms

121
Execution Time (Based on chrono): 99134.6 ms

121
Execution Time (Based on chrono): 99792.6 ms
";

$string = "


4
Execution Time (Based on chrono): 3.84055 ms

4
Execution Time (Based on chrono): 1.47793 ms

4
Execution Time (Based on chrono): 1.36111 ms

4
Execution Time (Based on chrono): 1.18943 ms

4
Execution Time (Based on chrono): 1.25027 ms

4
Execution Time (Based on chrono): 1.06003 ms

4
Execution Time (Based on chrono): 1.15582 ms

4
Execution Time (Based on chrono): 1.31169 ms

4
Execution Time (Based on chrono): 0.988887 ms

4
Execution Time (Based on chrono): 1.08511 ms

4
Execution Time (Based on chrono): 0.996868 ms

4
Execution Time (Based on chrono): 1.02288 ms

4
Execution Time (Based on chrono): 1.15027 ms

4
Execution Time (Based on chrono): 0.970606 ms

4
Execution Time (Based on chrono): 1.30461 ms

4
Execution Time (Based on chrono): 1.24018 ms

4
Execution Time (Based on chrono): 1.30114 ms

4
Execution Time (Based on chrono): 1.01147 ms

4
Execution Time (Based on chrono): 1.1003 ms

4
Execution Time (Based on chrono): 1.16134 ms

4
Execution Time (Based on chrono): 1.05386 ms

4
Execution Time (Based on chrono): 1.00953 ms

4
Execution Time (Based on chrono): 1.08559 ms

4
Execution Time (Based on chrono): 1.09392 ms

4
Execution Time (Based on chrono): 1.02795 ms

4
Execution Time (Based on chrono): 1.04478 ms

4
Execution Time (Based on chrono): 1.11548 ms

4
Execution Time (Based on chrono): 1.02791 ms

4
Execution Time (Based on chrono): 1.13904 ms

4
Execution Time (Based on chrono): 1.43361 ms

4
Execution Time (Based on chrono): 1.41642 ms

4
Execution Time (Based on chrono): 1.34454 ms

4
Execution Time (Based on chrono): 1.04273 ms

4
Execution Time (Based on chrono): 1.10764 ms

4
Execution Time (Based on chrono): 3.06246 ms

4
Execution Time (Based on chrono): 1.34444 ms

4
Execution Time (Based on chrono): 1.09299 ms

4
Execution Time (Based on chrono): 1.02791 ms

4
Execution Time (Based on chrono): 0.98998 ms

4
Execution Time (Based on chrono): 1.40493 ms

4
Execution Time (Based on chrono): 1.2629 ms

4
Execution Time (Based on chrono): 1.37666 ms

4
Execution Time (Based on chrono): 1.1086 ms

4
Execution Time (Based on chrono): 1.0706 ms

4
Execution Time (Based on chrono): 1.67073 ms

4
Execution Time (Based on chrono): 1.05198 ms

4
Execution Time (Based on chrono): 1.37261 ms

4
Execution Time (Based on chrono): 1.31193 ms

4
Execution Time (Based on chrono): 1.34244 ms

4
Execution Time (Based on chrono): 1.18202 ms


";


$string = "
9
Execution Time (Based on chrono): 10.1258 ms

9
Execution Time (Based on chrono): 8.54431 ms

9
Execution Time (Based on chrono): 8.57312 ms

9
Execution Time (Based on chrono): 9.30554 ms

9
Execution Time (Based on chrono): 7.19626 ms

9
Execution Time (Based on chrono): 8.57967 ms

9
Execution Time (Based on chrono): 7.81807 ms

9
Execution Time (Based on chrono): 6.76671 ms

9
Execution Time (Based on chrono): 8.19687 ms

9
Execution Time (Based on chrono): 11.3563 ms

9
Execution Time (Based on chrono): 8.76072 ms

9
Execution Time (Based on chrono): 8.89945 ms

9
Execution Time (Based on chrono): 7.93218 ms

9
Execution Time (Based on chrono): 7.15151 ms

9
Execution Time (Based on chrono): 9.06521 ms

9
Execution Time (Based on chrono): 8.95591 ms

9
Execution Time (Based on chrono): 9.04594 ms

9
Execution Time (Based on chrono): 8.77245 ms

9
Execution Time (Based on chrono): 9.37136 ms

9
Execution Time (Based on chrono): 7.49228 ms

9
Execution Time (Based on chrono): 8.1699 ms

9
Execution Time (Based on chrono): 7.5217 ms

9
Execution Time (Based on chrono): 8.37757 ms

9
Execution Time (Based on chrono): 8.27919 ms

9
Execution Time (Based on chrono): 9.53812 ms

9
Execution Time (Based on chrono): 9.14541 ms

9
Execution Time (Based on chrono): 8.06788 ms

9
Execution Time (Based on chrono): 7.49188 ms

9
Execution Time (Based on chrono): 8.24989 ms

9
Execution Time (Based on chrono): 10.9161 ms

9
Execution Time (Based on chrono): 8.53771 ms

9
Execution Time (Based on chrono): 8.61268 ms

9
Execution Time (Based on chrono): 6.91477 ms

9
Execution Time (Based on chrono): 8.33953 ms

9
Execution Time (Based on chrono): 8.44163 ms

9
Execution Time (Based on chrono): 6.35417 ms

9
Execution Time (Based on chrono): 6.49716 ms

9
Execution Time (Based on chrono): 8.86702 ms

9
Execution Time (Based on chrono): 8.77506 ms

9
Execution Time (Based on chrono): 9.01159 ms

9
Execution Time (Based on chrono): 8.56295 ms

9
Execution Time (Based on chrono): 6.69499 ms

9
Execution Time (Based on chrono): 8.88008 ms

9
Execution Time (Based on chrono): 8.89771 ms

9
Execution Time (Based on chrono): 9.1845 ms

9
Execution Time (Based on chrono): 8.44426 ms

9
Execution Time (Based on chrono): 9.3007 ms

9
Execution Time (Based on chrono): 9.81496 ms

9
Execution Time (Based on chrono): 8.01047 ms

9
Execution Time (Based on chrono): 8.43163 ms


";

$string = "
16
Execution Time (Based on chrono): 83.7239 ms

16
Execution Time (Based on chrono): 89.2962 ms

16
Execution Time (Based on chrono): 87.393 ms

16
Execution Time (Based on chrono): 86.0499 ms

16
Execution Time (Based on chrono): 82.4329 ms

16
Execution Time (Based on chrono): 92.4111 ms

16
Execution Time (Based on chrono): 83.0183 ms

16
Execution Time (Based on chrono): 93.2184 ms

16
Execution Time (Based on chrono): 98.6888 ms

16
Execution Time (Based on chrono): 88.1423 ms

16
Execution Time (Based on chrono): 93.149 ms

16
Execution Time (Based on chrono): 104.383 ms

16
Execution Time (Based on chrono): 94.8324 ms

16
Execution Time (Based on chrono): 95.2283 ms

16
Execution Time (Based on chrono): 104.694 ms

16
Execution Time (Based on chrono): 98.6493 ms

16
Execution Time (Based on chrono): 92.5682 ms

16
Execution Time (Based on chrono): 91.8928 ms

16
Execution Time (Based on chrono): 101.478 ms

16
Execution Time (Based on chrono): 95.2763 ms

16
Execution Time (Based on chrono): 96.7348 ms

16
Execution Time (Based on chrono): 96.7451 ms

16
Execution Time (Based on chrono): 95.3717 ms

16
Execution Time (Based on chrono): 96.2584 ms

16
Execution Time (Based on chrono): 95.0568 ms

16
Execution Time (Based on chrono): 104.564 ms

16
Execution Time (Based on chrono): 94.3572 ms

16
Execution Time (Based on chrono): 92.9837 ms

16
Execution Time (Based on chrono): 94.5809 ms

16
Execution Time (Based on chrono): 96.7802 ms

16
Execution Time (Based on chrono): 95.193 ms

16
Execution Time (Based on chrono): 94.719 ms

16
Execution Time (Based on chrono): 94.5504 ms

16
Execution Time (Based on chrono): 98.0115 ms

16
Execution Time (Based on chrono): 104.346 ms

16
Execution Time (Based on chrono): 90.0224 ms

16
Execution Time (Based on chrono): 89.8571 ms

16
Execution Time (Based on chrono): 84.6048 ms

16
Execution Time (Based on chrono): 90.1275 ms

16
Execution Time (Based on chrono): 89.0622 ms

16
Execution Time (Based on chrono): 92.2847 ms

16
Execution Time (Based on chrono): 91.2552 ms

16
Execution Time (Based on chrono): 89.7745 ms

16
Execution Time (Based on chrono): 91.942 ms

16
Execution Time (Based on chrono): 90.7563 ms

16
Execution Time (Based on chrono): 89.0043 ms

16
Execution Time (Based on chrono): 94.7468 ms

16
Execution Time (Based on chrono): 89.3705 ms

16
Execution Time (Based on chrono): 85.9757 ms

16
Execution Time (Based on chrono): 95.2816 ms


";

$string = "


25
Execution Time (Based on chrono): 878.908 ms

25
Execution Time (Based on chrono): 868.796 ms

25
Execution Time (Based on chrono): 868.818 ms

25
Execution Time (Based on chrono): 868.208 ms

25
Execution Time (Based on chrono): 921.707 ms

25
Execution Time (Based on chrono): 945.511 ms

25
Execution Time (Based on chrono): 940.521 ms

25
Execution Time (Based on chrono): 901.627 ms

25
Execution Time (Based on chrono): 872.928 ms

25
Execution Time (Based on chrono): 876.26 ms


";

$string = "


36
Execution Time (Based on chrono): 8944.41 ms

36
Execution Time (Based on chrono): 9181.89 ms

36
Execution Time (Based on chrono): 9291.08 ms

36
Execution Time (Based on chrono): 9176.2 ms

36
Execution Time (Based on chrono): 9019.04 ms


";

$string = "


49
Execution Time (Based on chrono): 93730 ms

49
Execution Time (Based on chrono): 92787 ms

49
Execution Time (Based on chrono): 91645.4 ms

49
Execution Time (Based on chrono): 92535.1 ms

49
Execution Time (Based on chrono): 94361.4 ms


";


$chronos    = [];
foreach (explode( PHP_EOL, trim( $string ) ) as $line) {
    if ( strpos( $line, "Execution Time (Based on chrono)" ) !== false )
        $chronos[] = explode( ' ', trim($line) )[5];
}
$sum_chrono = 0;
error_reporting(E_ALL ^ E_WARNING); 
for ($i=0; $i < NUMBER_OF_TESTS ; $i++) { 
    $sum_chrono += $chronos[$i];
} 
error_reporting(E_ALL); 
echo "(" . implode( "+", $chronos ) . ") / ". NUMBER_OF_TESTS ." = " . $sum_chrono . " / ". NUMBER_OF_TESTS ." = " . $sum_chrono/NUMBER_OF_TESTS . PHP_EOL;
echo PHP_EOL;
echo "Therefore:";
echo PHP_EOL;
echo "* Average Execution Time(Based on chrono): " . $sum_chrono/NUMBER_OF_TESTS . " ms" . PHP_EOL;

?>