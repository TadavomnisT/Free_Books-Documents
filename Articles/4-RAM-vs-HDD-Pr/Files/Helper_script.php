<?php

define('NUMBER_OF_TESTS', '50');


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


$ctimes     = [];
$chronos    = [];
$mems       = [];
$reals      = [];
$users      = [];
$syses      = [];
$cpus       = [];

foreach (explode( PHP_EOL, trim( $string ) ) as $line) {
    if ( strpos( $line, "Execution Time (Based on ctime)" ) !== false )
        $ctimes[] = explode( ' ', trim($line) )[5];
    if ( strpos( $line, "Execution Time (Based on chrono)" ) !== false )
        $chronos[] = explode( ' ', trim($line) )[5];
    if ( strpos( $line, "Memory Usage" ) !== false )
        $mems[] = explode( ' ', trim($line) )[2];
    if ( strpos( $line, "real" ) !== false )
        $reals[] = explode( ' ', trim(preg_replace("/ {2,}/", " ", $line)) )[1];
    if ( strpos( $line, "user" ) !== false && strpos( $line, "dhcp" ) === false && strpos( $line, "$" ) === false )
        $users[] = explode( ' ', trim(preg_replace("/ {2,}/", " ", $line)) )[1];
    if ( strpos( $line, "sys" ) !== false )
        $syses[] = explode( ' ', trim(preg_replace("/ {2,}/", " ", $line)) )[1];
    if ( strpos( $line, "cpu" ) !== false )
        $cpus[] = explode( ' ', trim(preg_replace("/ {2,}/", " ", $line)) )[1];
}


$sum_ctime = 0;
$sum_chrono = 0;
$sum_mem = 0;
$sum_real = 0;
$sum_user = 0;
$sum_sys = 0;
$sum_cpu = 0;

error_reporting(E_ALL ^ E_WARNING); 
for ($i=0; $i < NUMBER_OF_TESTS ; $i++) { 
    $sum_ctime += $ctimes[$i];
    $sum_chrono += $chronos[$i];
    $sum_mem += $mems[$i];
    $sum_real += $reals[$i];
    $sum_user += $users[$i];
    $sum_sys += $syses[$i];
    $sum_cpu += $cpus[$i];
} 
error_reporting(E_ALL); 



echo "(" . implode( "+", $ctimes ) . ") / ". NUMBER_OF_TESTS ." = " . $sum_ctime . " / ". NUMBER_OF_TESTS ." = " . $sum_ctime/NUMBER_OF_TESTS . PHP_EOL;
echo "(" . implode( "+", $chronos ) . ") / ". NUMBER_OF_TESTS ." = " . $sum_chrono . " / ". NUMBER_OF_TESTS ." = " . $sum_chrono/NUMBER_OF_TESTS . PHP_EOL;
echo "(" . implode( "+", $mems ) . ") / ". NUMBER_OF_TESTS ." = " . $sum_mem . " / ". NUMBER_OF_TESTS ." = " . $sum_mem/NUMBER_OF_TESTS . PHP_EOL;
echo "(" . implode( "+", $reals ) . ") / ". NUMBER_OF_TESTS ." = " . $sum_real . " / ". NUMBER_OF_TESTS ." = " . $sum_real/NUMBER_OF_TESTS . PHP_EOL;
echo "(" . implode( "+", $users ) . ") / ". NUMBER_OF_TESTS ." = " . $sum_user . " / ". NUMBER_OF_TESTS ." = " . $sum_user/NUMBER_OF_TESTS . PHP_EOL;
echo "(" . implode( "+", $syses ) . ") / ". NUMBER_OF_TESTS ." = " . $sum_sys . " / ". NUMBER_OF_TESTS ." = " . $sum_sys/NUMBER_OF_TESTS . PHP_EOL;
echo "(" . implode( "+", $cpus ) . ") / ". NUMBER_OF_TESTS ." = " . $sum_cpu . " / ". NUMBER_OF_TESTS ." = " . $sum_cpu/NUMBER_OF_TESTS . PHP_EOL;

echo PHP_EOL;
echo PHP_EOL;
echo "Therefore:";
echo PHP_EOL;
echo PHP_EOL;

echo "* Average Execution Time(Based on ctime): " . $sum_ctime/NUMBER_OF_TESTS . " ms" . PHP_EOL;
echo "* Average Execution Time(Based on chrono): " . $sum_chrono/NUMBER_OF_TESTS . " ms" . PHP_EOL;
echo "* Average Memory Usage: " . $sum_mem/NUMBER_OF_TESTS . " KB" . PHP_EOL;
echo "* Average Real Time: " . $sum_real/NUMBER_OF_TESTS . " s" . PHP_EOL;
echo "* Average User Time: " . $sum_user/NUMBER_OF_TESTS . " s" . PHP_EOL;
echo "* Average Sys Time: " . $sum_sys/NUMBER_OF_TESTS . " s" . PHP_EOL;
echo "* Average CPU Usage: " . $sum_cpu/NUMBER_OF_TESTS . " %" . PHP_EOL;


?>