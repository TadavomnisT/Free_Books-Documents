# Comparison of RAM and HDD Read/Write Speeds

## Abstract

This article provides a detailed comparison of the speed at which data is read and written on RAM and a hard disk drive (HDD). The underlying technology of both RAM and HDD is explained, followed by a comparison of their average read/write speeds considering technological complexities.

## Purpose of Comparing RAM and HDD Speed

RAM vs HDD

A few years ago, during a discussion on a programming forum, I mentioned that the average read/write speed of a hard disk drive is approximately 100,000 times slower than RAM. This statement seemed strange to many programmers, and not everyone accepted it. To justify my claim, I had to explain the technical aspects of RAM and HDD. 

In this article, I will discuss why the average speed of a HDD is, on average, a hundred thousand times slower than RAM.

First of all, it is important to note that an accurate statement cannot be made regarding the speed comparison between HDD and RAM. Claiming that HDD is exactly that much slower than RAM shows a lack of understanding of the subject in a person.

Secondly, Comparing hard disk drives and RAM cannot be accomplished in a single article :) One can write a multi-volume book about RAM and another multi-volume book about HDD, and then compare them in a multi-volume book together! The depth of the subject is vast, and it extends beyond a simple comparison based on internet speed mentions.

It's not as simple as saying, "Hey, the internet states that HDD speed is X, and RAM speed is Y, so let's just do the math and divide." Nope, this topic is way more complex! It's the kind of thing that could be explored in a doctoral thesis, with someone dedicating their entire PhD research to it and writing a lengthy paper. Yet, even then, the subject would still not be fully covered.

I said these stuff to highlight the complexity of the topic... 😬❤️

Most of the information presented here regarding hard disk drives is sourced from Professor Abraham Silberschatz's book, "Database System Concepts, 6th Edition."


Now let's move on to the main story.


## What is a RAM?

RAM stands for Random Access Memory, which is a type of memory with random access. The name itself explains all the necessary information about RAM that we need to know. Imagine you have a large piece of memory that has relatively high speed (compared to technologies like disks and even things like EEPROMs) and its abstract representation is something like this: 


![Abstract RAM schema](Files/Abstract_RAM_schema.png)

_An Abstract RAM Model_

Imagine each cell as a byte. You can store information in a continuous sequence of n bytes with a decently fast speed. This level of speed allows the operating system to quickly store its current computation data (Look up for **Memory address register**).

But why is it so fast?

From a hardware implementation perspective, this memory is structured like a two-dimensional array, similar to a matrix. The "Random Access" structure allows us to access all different cells of memory simultaneously at the same time, but how?

Let's examine the logical block structure of RAM:

![RAM Logical structure](Files/RAM_Logical_structure.png)

_An 8bit RAM - image source: [ETSU](https://faculty.etsu.edu/tarnoff/ntes2150/memory/memory.htm)_

Nowadays, Random Access Memories (RAMs) consist of small cells arranged in a two-dimensional grid. Each RAM contains an `Address Decoder` unit that takes in a binary encoded address and decodes it to determine which memory cell should be accessed for reading or writing. Additionally, there is a `Read/Write` unit that determines whether data should be written to or read from the selected cell. When using multiple memory chips (So as real world RAMs), a unit called `Cheap-Select` is employed to facilitate the selection process. The RAM chip cells also have a data input/output component known as the `databus`. It uses low voltage to represent 0 and high voltage to represent 1. To understand the schema of RAM, you can assume that each row of the RAM is 8 bits long, which is equivalent to 1 byte.

Suppose you want to write in the 1000th (1000) memory cell. To do so, you need a 10-bit address-decoder (By using a 10-bit address-decoder, you can access memory locations up to 1024. This is because 2 raised to the power of 10 equals 1024). So, you convert the decimal number 1000 to binary, which is `1111101000`. This binary address is sent to the address decoder. The address decoder uses internal logic gates to interpret the binary address and select the corresponding memory row for read/write operations. This is where it differs from technology like a disk. In a disk, you would need to iterate and pass through a sequence of cells to reach the desired location. But here, there's an address-decoder that activates a special circuit for direct access to the desired memory location. In this way we not only avoid physical movement (compared to a disk), but we also eliminate the need for moving from one memory location to another (compared to other technologies), so the speed rises up.

The figure below shows a 3-bit address-decoder. With 3 bits, you can have 8 different states or combinations. So, a 3-bit address-decoder can address and select 8 memory locations with the same speed.

![3-bit Address-Decoder](Files/3bit_Address_Decoder.png)

_A 3-bit Decoder with 8 Outputs - Image Source: [Codestall](https://codestall.wordpress.com/2017/09/02/532-decoder-design-using-4-38-decoders-and-1-24-decoder-in-verilog/)_

A 10-bit address decoder is just like this, and it can select up to 1024 different rows. But hey, you can't fit an image of a 10-bit address decoder in this article! 😄

So that's the meaning of the "Random Access" structure, which refers to a hardware design where the access time to each memory cell is the same. We can achieve that by implementing a logical gate called an address decoder.

If access time is very fast, why don't we replace slow things like HDDs with RAMs and use "Random Access" instead? Well, because of how RAM is designed (logical and electronic structure), it loses all its data, and cells are reset to zeros when the power is turned off. So it can't be used as a stable memory for long-term storage. It's only suitable for storing the information needed for ongoing computations.

These days, memory devices like SSDs, which have no physical movement, are being used in some places instead of things like HDDs. They are much faster because they don't have physical activities, but they also have their own issues. Maybe in the future, we'll discuss those technologies in a separate article.


Let's get back to RAM, When it comes to designing hardware technologies, RAM can be categorized into two types:  Static RAM (SRAM) and Dynamic RAM (DRAM).



* Static RAMs (SRAM):

Static random-access memory (SRAM) stores data in transistor-based circuits similar to D-flip flops. The data remains there as long as the RAM has power and will not be lost. SRAMs are smaller and faster and have simpler decoders compared to dynamic random-access memory (DRAM). They are commonly used in high-speed processes such as caching and very fast applications. In some cases where important data needs to be stored in RAM, SRAM is used, and a backup battery is added to the circuit. This way, even if the circuit loses power for some reason, the system's battery will supply power and prevent data loss.



* Dynamic RAMs (DRAM):

Dynamic random access memory (DRAM) stores information on capacitors. These capacitors have a small structure, which increases the overall memory capacity. However, they have a significant problem: Each capacitor naturally loses its internal current and de-charges after a certain period of time due to its natural structure, resulting in the loss of stored information. This process is called "leakage current". To prevent data loss, the contents of all capacitors need to be rapidly read and written back, so that the capacitors remain charged and the information is not lost. This process is referred to as "refreshing circuit". Therefore, in DRAMs, there must be a circuit that continuously reads and writes the information on all capacitors quickly. Furthermore, dynamic RAMs are often cheaper than static RAMs. And of course, the RAMs currently used on your computer are likely to be dynamic.

I suggest you read the interview with Steve Wozniak from [here](http://www.foundersatwork.com/steve-wozniak.html). Despite it being a personal and ordinary interview, it contains a lot of professional electronic explanations! In one part of the interview, Wozniak talks about RAM technologies, which is very interesting:


_«So I searched around. My thinking was always, in making something possible, you've got to get it down to a reasonable cost, but I needed 4K bytes of RAM minimum. The first dynamic RAMs got introduced that year, 1975, the first 4K dynamic RAMs. That was the first time ever that RAMs were lower in price than magnetic core memories, which every computer up to that day had used. So all of a sudden, the world was going to change to RAMs. Silicon was going to be our memory. Everybody else in the world, the Altair, the Sphere computers, the Polymorphic computers, the Insight computers, every one was designed by basically insufficient engineers, not top quality engineers. They were designed by technicians who knew how to look at the datasheets for some RAM, look at the datasheets for a microprocessor and see if the microprocessor had some lines called "address," and the RAMs had lines called "address" and they would hook a wire from one to the other. It's a very simple job. If your RAMs are static RAMs. The dynamic RAMs were going to be 1/4 the price. The dynamic RAMs meant that instead of 32 chips to have enough memory for a computer to have a language, you only needed 8 chips of RAMs. But dynamic RAM needs all this circuitry to get into every single address in the RAM every 2000th of a second, read what was there and write it back, or it forgets it. Dynamic RAM (this is what we have in our computers today) will forget every single bit in a 2000th of a second unless something reads it and writes it back the way it was to hold its state. It's like little electrons stored on a plate and they'll leak off in a 2000th of a second.»_


The interview link:
http://www.foundersatwork.com/steve-wozniak.html


And I have almost covered all the technical issues I wanted to discuss regarding RAM. The operating system is responsible for managing RAM. The computer's CPU works with Virtual Addressing, while RAM works with Logical Addressing. In future, I will write a separate article on how the operating system allocates RAM to processes, and another article on how we can access the entire system RAM with it's current cell values.


## What is a Hard Disk?

Hard disks are circular plates that store information based on their structure. The first type of disks can be seen in gramophones, where sound vibrations create a spiral groove on a rotating disk. A softer needle moves within the groove to reproduce the sound using vibrations.

Later, magnetic hard disks and optical disks like CDs and DVDs were developed. Magnetic hard disks use magnetization to write information in binary form on round disks. Optical disks use lasers to burn information.

In general, a disk refers to a rotating, circular plate where information is written in different parts of it.

A hard disk consists of magnetic round disks on which information is written by magnetizing each tiny particle in binary form. It typically has multiple layers called platters, with the number of platters usually ranging from 1 to 5.

A cross-sectional view of a hard disk would look like this:

![HDD Platters](Files/HDD_Platters.jpg)

_Image source: [compuclever](https://www.compuclever.com/posts/hard-disk-drive-basics/ic306536/)_

An abstract representation of the cross-sectional view:

![HDD Abstract Platters](Files/HDD_Abstract_Platters.jpg)

_Image source: The Book: Database System Concepts, 6th Edition_


The platters of a hard-disk are magnetic surfaces that can store 0s and 1s by being magnetized. These platters are logically divided into different sets of concentric circles, which are composed of circular tracks that form the disk. Each of these concentric circles is referred to as a "track".


In the image below, you can observe several abstract tracks:

![HDD Tracks](Files/HDD_Tracks.jpg)

_Image source: [schoolcoders](https://www.schoolcoders.com/memory-storage/secondary-storage/hdd/)_

The track itself is divided into smaller parts called "sectors". You can see the sector portion in the image below:

![HDD Sectors](Files/HDD_Sectors.jpg)

_Image source: [slideplayer](https://slideplayer.com/slide/1517076/)_

A sector is also the smallest unit on a disk that is written/read. Usually, a sector has a size of 512 bytes.

There is also a component in a hard-disk called the "arm", which has a "head" that moves back and forth. The arm itself rotates and reads/writes these sectors.

Naturally, outer tracks (those with larger radius) have more sectors than inner tracks (smaller radii)...

Any type of information that needs to be written on a disk must be written in the form of 0s and 1s, (say true or flase, magnetized or not not-magnetized) encoded in binary format, and given to the arm to be written by the head. The same process applies for reading.

Depending on the different software formats used to format hard disks, there are various software technologies related to data storage, such as inode and MFT, which we will discuss in other articles later on.




## Comparison of Hard Disk and RAM Speed

Let's ignore all the complexities of implementation, operational details, and stuff related to the operating system and RAM, and focus on the hard-disk for now:

When considering the speed of a hard-disk, we need to take into account the average speed of I/O operations, which means the input/output activities of the hard disk:
* I/O = Input/Output

Calculating this speed is a highly complex task, and there are thousands of factors involved. Each factor requires an extensive explanation, and ultimately, if we manage to accurately model all of these factors (which is very difficult),  the performance of the hard disk drive (HDD) can vary significantly across various scenarios. It can be as much as 10,000 times slower or even up to 500,000 times slower than RAM. To provide a statistical representation, we often present an average, such as 100,000 times slower.


Generally, hard disk drives (HDDs) are slower compared to many other technologies because they involve physical and mechanical movements to store data. To give a real-world example, computer experts often observe that using a mouse for interacting with a computer significantly slows down the speed of interaction. If you can accomplish a task using a keyboard, it can be much, much faster than using a mouse. This is a well-known principle. The reason behind this is that the mouse requires a lot of physical movements. For instance, you need to scroll multiple times to perform a task. The keyboard, on the other hand, minimizes physical movements, which makes it faster. The hard disk drive operates in a similar way to a mouse, we will discuss it further.

A hard disk drive consists of one or multiple rotating disks (similar to CDs) and a head (like the needle on a gramaphone) that can move up and down on a circuit placed on the disk's radius. This way, it can process the entire disk.

Take a look at the animation below, showing the phisical movement of an HDD head:

![HDD head move](Files/HDD_head_move.gif)

_I don't remember the source of the GIF - if you know it, let me know!_

______________________________________

We measure the speed of a hard disk by **"Transfer time"**, which is a combination of several factors, including:

1. Read/Write speed of the head: This speed itself depends on various factors, and it's quite complex to explain in detail here.
2. Arm movement speed: Refers to the speed at which the arm moves up and down.
3. Disk rotation speed: Different hard disks have different rotation speeds.
4. Track capacity: Represents the size of each track on the disk.
5. Sector capacity: The capacity of each sector on the disk.
6. Amount of data requested: The size of the data that needs to be accessed.
7. Rotational latency:  Refers to the delay caused by disk rotation speed. A brief explanation will be provided here, but for more details, please refer to the introduced book.
8. Seek time: Represents the delay in positioning the head for accessing specific data.
9. Hard-disk interleaving: I will provide an explanation for this interesting concept and discuss its difference compared to RAM interleaving.
10. Read ahead technique: I will provide an explanation for this as well.
11. Buffer sizes: The capacity of the buffer used in the buffering technique.
12. Disk scheduling algorithms: This topic could fill an entire 12-volume book! It is challenging to explain it briefly. It covers algorithms such as the "Elevator algorithm" or SCAN and more stuff. Without these scheduling algorithms, the hard disk's performance would be significantly slower.
13. Storage of the Files (Data Placement): This requires a very detailed explanation. You might have heard of disk fragmentation, which slows down disk speed. I will explain it further.
14. Storing logs on the hard disk - This aspect will not be discussed in this article.
15. Caching of requests by the operating system, which goes beyond the scope of our discussion.
16. Device management, or as Windows folks call it, drive management, is a highly specialized topic that I won't discuss.
17. ... There are so many factors affecting disk speed that if I were to mention all of them, I might never be able to finish this article. To be honest, I'm not familiar with all the details as it is a highly professional field. Experts in file systems can provide better explanations..

Now, transfer time, as mentioned earlier, is the sum of all these delays and timings mentioned above.

______________________________________

Now let's move on to the explanation of the factors I mentioned. Let's start with the explanation of the first two ones, which are really cool and important:

RAM is independent of physical movements, but hard disks consume time/energy in physical movement.

Two important physical time consumptions in hard disks:

1- **Rotational latency time**
Hard disks have a time consumption when they rotate disks💿.
Suppose a piece of data that you want to read or write is not in that specific position/degree of the disk where the arm is currenty positioned, and the disk needs to rotate like 260 degrees to reach that specific position of the data! The time spent on rotating is called rotational latency time.


2- **Seek time**
Disks have another time consumption, which is when the arm of HDD needs to move up and down and precisely position on the corresponding radius to find the sector. It's called seek time.

Just these two physical movements are enough to make the hard disk very slow and prevent it from being used for storing current computing data like RAM. But the good thing is that the data is not lost when power is gone:3

See the image below:

![seek-time vs rotational-latency-time](Files/seektime_vs_rotationallatencytime.jpg)


_I don't remember the source of image too - let me know if you do!_

The right one is rotational latency time,
the time when the disk has to wait and do nothing, while the disk rotates and reaches the desired sector.

On the left is seek time,
the time when the arm has to move and go to the radius where the desired sector is.


______________________________________


**Block Interleaving in Hard Disk:**

We have several types of interleaving which are data handling architectures, including:

* **Bit-interleaved** architecture:
Means that data is read/written bit by bit in some memory/storage.

* **Byte-interleaved** architecture:
Means that data is read/written byte by byte in some memory/storage.

* **Block-interleaved** architecture:
Means that data is read/written in chunks or in other word blocks, in some memory/storage - the block size is determined by the operating systems.

So, what's the difference?

Back in the early days of computers, data used to be read/written bit by bit, which is quite inefficient since most data we work with requires at least one byte. That's why byte-interleaved architecture was introduced and used...

Today, It is safe to say that you can't read/write just a single bit of information from/to a disk or any memory like RAM; you have to read/write at least one byte. For example, a Boolean variable (TRUE/FALSE) only requires one bit to represent TRUE or FALSE, but it is allocated with 8 bits because the memory is byte-interleaved :)

Now, in hard disks, block-interleaving has been introduced. When you request a specific byte from the hard disk, it would be inefficient to make the disk rotate and move the arm and head up and down just for one byte! And what if you ask for the next byte afterward? Should the HDD make the disk rotate again to find the next byte?
The HDD is smarter than that! It retrieves a block of data and give it to you and tells you to fetch as much data as you need from that block. If you need more, just ask!
For example, it provides 1024 bytes to the operating system, and if the operating system only needs the first byte, it retrieves first byte and drops the rest...
This concept is not arbitrary; it has been developed for years and tested by thousands of people, who have found out that block-interleaving brings better performance for HDDs compared to byte-interleaving.

Now, let's assume that RAM is byte-interleaved, and the hard disk is block-interleaved.

This difference significantly slows down the HDD compared to RAM.

______________________________________

**Read Ahead Technique for Hard Disk:**

This is a concept similar to what I explained earlier but quite different!

The read-ahead technique in hard disks is a strategy used to optimize data retrieval and loading times. It involves reading data ahead of time into a buffer or cache before it is actually requested by the system or application.

When the system or application requests the next set of data, it is already available in the cache, eliminating the need for the hard disk to seek and retrieve it from the disk platters. This significantly reduces the access time and improves overall performance, especially in cases where consecutive data blocks are accessed sequentially.

For instance, a hard disk has understanded through years of system's behavior that consecutive sectors may be needed by the user (operating system or application). So, even though the operating system doesn't explicitly request a specific block count, the hard disk provides it in the cache. This means that if those fetched sectors (cached) are needed and used, the OS or application doesn't have to make another system-call, and wait for the request to be directed to the hardware driver, and then wait for disk's motor to be turned on, the storage table to be read again, the sector number to be determined, the head to be moved up and down, and the data to be read magnetically and returned and... 🥴

______________________________________


**Buffering Capacity in Computer Science:**

Buffering, in computer science, refers to a temporary storage area. The buffering capacity represents the amount of temporary storage allocated for buffering data in a computer system.
When it comes to HDD buffering, a portion of the computer's RAM is utilized to store data that is fetched from the hard disk. This data is held in the buffer temporarily, allowing it to be processed or accessed more efficiently before being transferred to other parts of the system.
The buffering capacity differs among different operating systems, and it plays a crucial role in determining the overall speed and efficiency of data processing. Operating system experts should provide better detailed explanation and discussion about buffering and its impact on system performance :3


______________________________________


**Hard-Disk Scheduling Algorithms:**

There is a common misconception that only one I/O operation can occur on a hard disk at a time. However, in reality, numerous read and write requests are submitted simultaneously when interacting with a hard disk. Thousands of requests are being sent and received. To efficiently handle these requests, sophisticated scheduling algorithms are needed.

Let's consider a scenario where hard-disks have a single arm, head, and disk (we won't focus on multiplatters). When there is only one head and one disk, it becomes necessary to implement optimized scheduling algorithms to efficiently satisfy the given requests. These algorithms can be bloody sophisticated!

Disk scheduling is a highly complex topic. Apart from discussions about the operating system and its software, powerful hardware algorithms are also needed to optimize disk performance.

For example, there is an algorithm called Elevator or SCAN. This algorithm prioritizes certain requests based on the current position of the disk head and the direction of rotation. It aims to minimize head movement and prioritize requests that follow the current path. In the Elevator or SCAN algorithm, when the disk is rotating and the head is on specific sectors, it takes into consideration upcoming requests (let's say three I/O requests after the current one) and performs read/write operations on these sectors. This allows the algorithm to efficiently utilize the current position and avoid ignoring relevant requests. Additionally, while the head is moving in a particular direction, the algorithm does not change the direction of the head and performs read operations on the next request. This may require significant effort and time for HDD. It helps to seamlessly continue processing another request (say the fifth one) on the same track without unnecessary head movements, and then return for another request (say the first one).

It's like an elevator that goes up and is on floor 16, but if someone presses the button on the first floor, it won't go down and pick them up and then go to the 20th floor. Instead, it will pick up the person on the 20th floor and then go to the first floor. In between, if someone else presses the button on the second floor, the elevator will pick them up before the person on the first floor. This algorithm itself can be explained in detail, but let's move on... :))

There are thousands of other algorithms! This is a very extensive optimization topic. ^_^

If these algorithms were not implemented, we would have to wait for 70 years to perform an I/O operation on a disk.

______________________________________

**Storage of the Files (Data Placement):**

This is perhaps the most important discussion...

You can never use a disk as a processing memory (like RAM) because of its sophisticated data placement...

*I'm also writing an article about recovery where I explain disk fragmentation.*

Fragmented Disk:

![Fragmented HDD](Files/Fragmented_HDD.jpg)


File fragmentation occurs when the available disk space is not large enough to fit the entire file in a contiguous manner. As a result, the file is split into fragments (gets scattered) and stored in non-adjacent sectors on the disk. This can lead to inefficient disk usage and slower file access times.

When a fragmented file is accessed, the disk's read/write head needs to move between different locations on the disk to retrieve all the fragments. This physical movement of the read/write head increases the access time, resulting in slower file operations. Fragmentation can significantly impact system performance, especially for larger files or when there are numerous fragmented files on the disk.

A fragmented disk, is a disk full of fragmented files. Over the time most of disks get fragmented due to centain amounts of altering/rewriting/deleting files.

In truth, the speeds that you refer as transfer-time, must always be based on a fragmented disk, which itself slows down the process thousands of times.
In RAM, we don't have fragmentation, or rather, we do have it, but it doesn't affect speed - A RAM is designed to be fragmented. RAM, as I explained, allows simultaneous access to all its cells ("Random Access").

Reading/Writing data and working with tables on a hard disk (things like inode or MFT) are also highly resource-intensive and time-consuming.

So, in short, the transfer time of the hard disk, which is affected by everything I mentioned along with thousands of other factors, is very slow.
The physical movement of the disk is so bloody slow that it can be watched by the human eye!

In RAM, the architecture is implemented with logical gates, and its speed depends on the flow of electrons (free electrons).

I found a video that demonstrates a simple representation of how a "Copy and Paste" process works on a hard disk in slow motion.


The physical movements of the hard disk, which can be observed when the HDD box is opened and carefully observed 😬:

https://www.youtube.com/watch?v=3owqvmMf6No

The movement that is visible to the naked eye and can be captured by a camera is definitely much slower than the speed of electron movement :)
In general, being 100,000 times slower is completely logical, but let's use our programming knowledge and test for ourselves to see how the theory in practice!



## Speed Comparison between RAM and HDD

Our goal is to run some scripts and programs that can test the claim we made about the hard disk being 100,000 times slower than RAM.

We will divide our test and experiment into two different phases, and I'll explain why: Before we proceed, let's understand the unique characteristics of RAM and the hard disk. As I mentioned earlier, RAMs are higly fast and are ideal for real-time calculations. They are suitable for computations with a high allocation rate and also for small, frequent datas. Hard-disks on the other hand, are suitable for storing large amounts of data, usually files, and retaining it for a long period. A RAM cannot store very large data because its capacity is limited and usually lower than things like disks and additionally, all its contents are lost when the power supply is cut off. The speed limitations of a hard disk prevent it from efficiently storing small, intricate data at a rapid rate and achieving optimal allocation for such data. So, as they both have different mechanisms they also have different functions, and Therefore we perform our experiment in two phases.

In the first phase, we will compare the speed of working with large datas, which are typically handled by the hard disk, in both RAM and the hard disk itself.

In the second phase, we perform a comparison experiment with small and computational data that require fast storage, usually RAM, in both RAM and HDD.

Regarding the comparison tools, my favorite programming language is `PHP`. But when it comes to measuring time complexity/resource usage of algorithms and we want to perform experiments comparing the time/resource consumption of different methods, my opinion is that we should always use languages closer to a lower-level machine codes. Compiler-based languages like `C` and `C++` always give us much more access, proximity, and efficiency to resources such as RAM and disk. Also, because of their compiler structure, they translate code into machine language, which is solely responsible for executing the algorithm and is less involved in overhead computations like interpreting. By using these languages, the results of our experiments are less affected by the time/resource waste caused by code interpretation or the execution of interpreter, translator, and compiler processes. That's why we use the `C++` language in this experiment.


______________________________________


### Phase 1: Comparing the Speed of RAM and Hard Disk in Handling Large Data

Consider the following code:

```cpp
#include <iostream>
#include <sys/resource.h>
#include <chrono>

using namespace std;

int main() {

    // Start execution time
    clock_t start_1 = clock();
    auto start_2 = chrono::high_resolution_clock::now();

    // Start memory usage
    struct rusage usage;
    getrusage(RUSAGE_SELF, &usage);
    long memory_usage_start = usage.ru_maxrss; // in kilobytes
    
    // Code ----------------------------------------------------------
    char* arr = new char[1073741824];
    for(int i = 0; i < 1073741824 ; i++)
	    arr[i] = 'A';
    
    // ---------------------------------------------------------------
    
    // Stop measuring memory usage
    getrusage(RUSAGE_SELF, &usage);
    long memory_usage_end = usage.ru_maxrss; // in kilobytes

    // Stop measuring execution time
    clock_t end_1 = clock();
    auto end_2 = chrono::high_resolution_clock::now();
    double execution_time_1 = double(end_1 - start_1) / CLOCKS_PER_SEC;
    chrono::duration<double, milli> execution_time_2 = end_2 - start_2;

    // Printing result
    cout << "Execution Time (Based on ctime): " << execution_time_1 * 1000.0 << " ms" << endl;
    cout << "Execution Time (Based on chrono): " << execution_time_2.count() << " ms" << endl;
    cout << "Memory Usage: " << memory_usage_end - memory_usage_start << " KB" << endl;

    return 0;
}
```

[Source code](./Files/RAM_write_test.cpp)

This code measures the execution time and the amount of RAM consumed by a specific piece of code. The specific piece of code is the segment below, which allocates exactly 1 gigabyte (1073741824 bytes) of RAM to an array of characters. In simple terms, this code, exactly allocates 1 gigabyte of data in the RAM:

```cpp
char* arr = new char[1073741824];
for(int i = 0; i < 1073741824 ; i++)
    arr[i] = 'A';
```

When you run this code, you can get a good estimate of how long it takes to store 1 gigabyte of data in memory in "Random Access" method and how much memory (RAM) is used (which should use exactly 1 gigabyte). This code measures the execution time of that specific segment, once using the clocks in the ctime library and again using the chrono library. This way, we can get a relatively accurate output time. Remember that including iostream (at least in my compiler `g++`) also links the ctime library to the code. If that didn't happen in your compiler, make sure to manually include the library:

`#include <ctime>`

Let's run the code to see the output. I'm using a Linux machine, so I compile the code with `g++ RAM_test.cpp` and run it using `./a.out`.

Note: Always remember to repeat the experiment (running the code) at least 3 times in different conditions and consider the overall average as the answer. At any given moment, there are thousands of other processes running on a computer that interact with resources. The behavior of these processes may affect your experiment's results at different times.

Note 2: There is a famous Unix command called `time` that allows you to have some extra information about the command you are running. I'm using this package to monitor the times and CPU consumption during program execution. I will explain the meaning of this information exactly after the execution.

Running the code:

```bash
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

```

I ran this code on my system in 10 different time intervals when the system was engaged in different computations each time, and the output was as mentioned above. As you can see, the execution time varies within a certain range, but there are slight changes each time. These are the results of the parallel processing capabilities of our operating system. I will write an article later about parallel computations in the operating system. Another interesting matter is that the amount of memory consumed is different in each execution, which seems a bit strange. However, it can be explained in detail, and then we will see that it is completely decent. Explaining the matter in a detailed manner is beyond the scope of this article, but in short, we can say that the performance of the code depends on the behavior of the libraries and functions we have included from the system. These functions, when called, each time bring different data to the system cache, causing the amount of data stored in RAM to vary. However, overall, it is about a range of 1 gigabyte consumed by our mentioned segment.

Now let's move on to the detailed explanations of the `time` command, which includes reports such as real, user, sys, and CPU, and see what they mean.

**Real Time**

It is the total time it took for the process to start and complete, as if we measured it with a stopwatch (or folks say with a wall clock). In technical terms, this time includes all the times spent, and represents the real time of a proccess from start to the end, including: the computation time, the times the process was waiting (blocked), and the times it was waiting for I/O.

**User Time**

It is the time that the CPU spent on this specific program calculations. In technical terms, it is the time when the process is sitting on the CPU and being executed (referred to as user mode).

**Sys Time**

It is the time the CPU spends on tasks performed by the operating system kernel realated the process, such as memory allocation and I/O operations (referred to as kernel mode).



**cpu**

And finally, this one is about how much of the CPU is allocated to this process. It might go beyond 100% (e.g. 650%) if you are running multi-threading, where multiple CPU cores are involved.



I mentioned the two execution modes of processes, user mode and kernel mode. These are modes of executing programs in Unix-like systems or any other memory-protected systems. There are differences between user mode and kernel mode, which I will try to explain briefly, and then I will provide a source for more detailed and specialized explanations:

**Kernel Mode**

If code is executed in this mode, that piece of code has complete and unrestricted access to the hardware. It can execute any system-call, such as any instruction for the CPU or interaction with any part of the memory. This is the highest level of access and happens at the lowest layer. It is risky if there is any misbehavior or issues in code running at this layer, as it can jeopardize the whole system. Therefore, the trusted system functions and APIs are executed in this mode.

**User Mode**

In contrast to the previous mode, in user mode, the program executor does not have direct access to the hardware and cannot interact directly with entities such as RAM and disks. Instead, it relies on an API provided by the operating system to interact and perform operations on its behalf. I will write an article later explaining the concept of an API. Therefore, this mode is more secure, and the code is isolated from the hardware, making it recoverable if any issues arise. Most of the codes executed in the system run in this mode.

References for this section:

* _https://blog.codinghorror.com/understanding-user-and-kernel-mode_
* _https://askubuntu.com/questions/920920/how-to-interpret-time-real-user-and-sys_
* _https://stackoverflow.com/questions/1311402/what-is-the-difference-between-user-and-kernel-modes-in-operating-systems_
* _https://unix.stackexchange.com/questions/53302/why-would-the-real-time-be-much-higher-than-the-user-and-sys-times-combine_
* _https://stackoverflow.com/questions/556405/what-do-real-user-and-sys-mean-in-the-output-of-time1_



Now we can have an estimate of the average time:

```md
(2501.88+2440.13+2446.16+2444.35+2515.03+2438.22+2493.81+2501.99+2459.47+2429.63) / 10 = 24670.67 / 10 = 2467.067
(2501.97+2440.23+2446.23+2444.5+2515.09+2438.28+2493.94+2502.09+2460.05+2429.75) / 10 = 24672.13 / 10 = 2467.213
(1046800+1046864+1046772+1046848+1046832+1046844+1046784+1046852+1046872+1046772) / 10 = 10468240 / 10 = 1046824
(2.51s+2.45s+2.45s+2.45s+2.52s+2.45s+2.50s+2.51s+2.47s+2.43s) / 10 = 24.74 / 10 = 2.474
(2.36s+2.32s+2.32s+2.29s+2.39s+2.32s+2.35s+2.37s+2.32s+2.32s) / 10 = 23.36 / 10 = 2.336
(0.14s+0.13s+0.13s+0.16s+0.13s+0.12s+0.15s+0.14s+0.15s+0.12s) / 10 = 1.37 / 10 = 0.137
(99%+99%+99%+99%+99%+99%+99%+99%+99%+99%) / 10 = 990 / 10 = 99


Therefore:

* Average Execution Time(Based on ctime): 2467.067 ms
* Average Execution Time(Based on chrono): 2467.213 ms
* Average Memory Usage: 1046824 KB
* Average Real Time: 2.474 s
* Average User Time: 2.336 s
* Average Sys Time: 0.137 s
* Average CPU Usage: 99 %
```


Keep these results in mind for later comparison. This time order of storing data in random access memory (RAM) gives us the speed we need for comparison. In practice, this speed is marely equivalent to reading something from RAM in random access.

______________________________________

Now let's move on to the hard disk and see how much time/resources it takes to read/write one gigabyte of data on an HDD. However, in this comparison, we are no longer concerned about other resources like the amount of RAM it consumes, but rather its time is important to us. When we compare RAM to a disk, we no longer need to measure the RAM that undergoes I/O operations.

Consider the following code:

```cpp
#include <iostream>
#include <fstream>
#include <sys/resource.h>
#include <chrono>

using namespace std;

int main() {

    ofstream outfile;
    char character = 'A';

    // Start execution time
    clock_t start_1 = clock();
    auto start_2 = chrono::high_resolution_clock::now();

    // Start memory usage
    struct rusage usage;
    getrusage(RUSAGE_SELF, &usage);
    long memory_usage_start = usage.ru_maxrss; // in kilobytes
    
    // Code ----------------------------------------------------------
    outfile.open("output.txt");
    if (!outfile.is_open()) {
        cout << "Error opening file!" << endl;
        return 1;
    }
    for (int i = 0; i < 1073741824; i++) {
        outfile << character;
    }
    outfile.close();
    // ---------------------------------------------------------------
    
    // Stop measuring memory usage
    getrusage(RUSAGE_SELF, &usage);
    long memory_usage_end = usage.ru_maxrss; // in kilobytes

    // Stop measuring execution time
    clock_t end_1 = clock();
    auto end_2 = chrono::high_resolution_clock::now();
    double execution_time_1 = double(end_1 - start_1) / CLOCKS_PER_SEC;
    chrono::duration<double, milli> execution_time_2 = end_2 - start_2;

    // Printing result
    cout << "Execution Time (Based on ctime): " << execution_time_1 * 1000.0 << " ms" << endl;
    cout << "Execution Time (Based on chrono): " << execution_time_2.count() << " ms" << endl;
    cout << "Memory Usage: " << memory_usage_end - memory_usage_start << " KB" << endl;

    return 0;
}
```

[Source code](./Files/HDD_write_test.cpp)


This code opens a file named `output.txt` (creates it if it doesn't exist and overwrites it if it does {I'll return to the overwriting part later}) and writes 1 gigabyte of data into it. I will run it 10 times for the sake of experimentation:


```bash
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
```

And the average result of the experiment is:

```md
(9536.65+9530.77+9625.24+9655.58+9479.76+9477.25+9468.07+9761.29+9632.74+9536.97) / 10 = 95704.32 / 10 = 9570.432
(9538.49+10150.1+10063.4+9657.09+9634.6+9641.66+9475.96+10151.8+10079+9540.68) / 10 = 97932.78 / 10 = 9793.278
(0+0+0+0+0+0+0+0+0+0) / 10 = 0 / 10 = 0
(9.54s+10.15s+10.07s+9.66s+9.64s+9.65s+9.48s+10.16s+10.08s+9.55s) / 10 = 97.98 / 10 = 9.798
(8.85s+8.82s+8.99s+8.96s+8.89s+8.92s+8.70s+9.05s+8.92s+8.89s) / 10 = 88.99 / 10 = 8.899
(0.68s+0.72s+0.64s+0.70s+0.60s+0.56s+0.77s+0.72s+0.72s+0.65s) / 10 = 6.76 / 10 = 0.676
(99%+93%+95%+99%+98%+98%+99%+96%+95%+99%) / 10 = 971 / 10 = 97.1


Therefore:

* Average Execution Time(Based on ctime): 9570.432 ms
* Average Execution Time(Based on chrono): 9793.278 ms
* Average Memory Usage: 0 KB
* Average Real Time: 9.798 s
* Average User Time: 8.899 s
* Average Sys Time: 0.676 s
* Average CPU Usage: 97.1 %
```

Well, according to this HDD almost 5 times slower than RAM, isn't it?! So what was all that stuff about HDD being 10,000 times slower than RAM on average?! Don't rush, let's slowly add the factors involved in the experiment.
Let's assume we want to overwrite existing 1 gigabyte of data.

______________________________________

To measure this operation time on RAM, I will modify the code as follows:

```cpp
#include <iostream>
#include <sys/resource.h>
#include <chrono>

using namespace std;

int main() {

    char* arr = new char[1073741824];
    for(int i = 0; i < 1073741824 ; i++)
	    arr[i] = 'A';

    // Start execution time
    clock_t start_1 = clock();
    auto start_2 = chrono::high_resolution_clock::now();

    // Start memory usage
    struct rusage usage;
    getrusage(RUSAGE_SELF, &usage);
    long memory_usage_start = usage.ru_maxrss; // in kilobytes
    
    // Code ----------------------------------------------------------
    for(int i = 0; i < 1073741824 ; i++)
	    arr[i] = 'B';    
    // ---------------------------------------------------------------
    
    // Stop measuring memory usage
    getrusage(RUSAGE_SELF, &usage);
    long memory_usage_end = usage.ru_maxrss; // in kilobytes

    // Stop measuring execution time
    clock_t end_1 = clock();
    auto end_2 = chrono::high_resolution_clock::now();
    double execution_time_1 = double(end_1 - start_1) / CLOCKS_PER_SEC;
    chrono::duration<double, milli> execution_time_2 = end_2 - start_2;

    // Printing result
    cout << "Execution Time (Based on ctime): " << execution_time_1 * 1000.0 << " ms" << endl;
    cout << "Execution Time (Based on chrono): " << execution_time_2.count() << " ms" << endl;
    cout << "Memory Usage: " << memory_usage_end - memory_usage_start << " KB" << endl;

    return 0;
}
```

[Source code](./Files/RAM_overwrite_test.cpp)

And we run the code:

```bash
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
```

And the average result:

```md
(2315.81+2321.07+2305.9+2331.96+2291.69+2336.1+2330.54+2283.55+2328.87+2295.38) / 10 = 23140.87 / 10 = 2314.087
(2315.86+2321.15+2305.95+2332.03+2296.94+2339.92+2330.6+2283.58+2328.91+2296.14) / 10 = 23151.08 / 10 = 2315.108
(0+0+0+0+0+0+0+0+0+0) / 10 = 0 / 10 = 0
(4.76s+4.80s+4.78s+4.79s+4.74s+4.85s+4.82s+4.72s+4.79s+4.75s) / 10 = 47.8 / 10 = 4.78
(4.61s+4.66s+4.67s+4.70s+4.57s+4.71s+4.70s+4.59s+4.67s+4.60s) / 10 = 46.48 / 10 = 4.648
(0.14s+0.14s+0.11s+0.09s+0.16s+0.12s+0.12s+0.12s+0.12s+0.15s) / 10 = 1.27 / 10 = 0.127
(99%+99%+99%+99%+99%+99%+99%+99%+99%+99%) / 10 = 990 / 10 = 99


Therefore:

* Average Execution Time(Based on ctime): 2314.087 ms
* Average Execution Time(Based on chrono): 2315.108 ms
* Average Memory Usage: 0 KB
* Average Real Time: 4.78 s
* Average User Time: 4.648 s
* Average Sys Time: 0.127 s
* Average CPU Usage: 99 %
```

As you can see, the overwriting time is equal to the writing time.

Note 1: The specific part of the code we are measuring its time, is this specific segment of the code:

```cpp
for(int i = 0; i < 1073741824 ; i++)
	    arr[i] = 'B'; 
```

And the time is:

```md
* Average Execution Time(Based on ctime): 2314.087 ms
* Average Execution Time(Based on chrono): 2315.108 ms
```

Note 2: The amount of memory consumed by this code block is reported as 0 because we did not allocate any new memory (although we had, for example, a loop counter for 'i', but it is so small that it is not noticeable in kilobytes) - when we did not create new memory and only overwritten the previous one, no new memory usage was reported. But in reality, we worked with 1 gigabyte of memory.

Now let's move on to the hard disk. I will use the same previous code, but this time I will not delete (rm) the previously created 1-gigabyte files so that they can be overwritten.

```bash
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
```

The average:

```md
(10162.1+9961.45+9925.02+9927.78+9996.59+9659.78+10051.7+10124.3+9867.27+9850.91) / 10 = 99526.9 / 10 = 9952.69
(16532.7+19035.1+19885.7+20518.4+17915.4+19085.9+19261.9+19965.3+19433.7+18046) / 10 = 189680.1 / 10 = 18968.01
(0+0+0+0+0+0+0+0+0+0) / 10 = 0 / 10 = 0
(16.54s+19.04s+19.89s+20.52s+17.92s+19.09s+19.27s+19.97s+19.44s+18.05s) / 10 = 189.73 / 10 = 18.973
(9.30s+9.10s+9.14s+9.04s+9.16s+8.91s+9.25s+9.31s+9.05s+8.96s) / 10 = 91.22 / 10 = 9.122
(0.87s+0.86s+0.79s+0.89s+0.84s+0.76s+0.81s+0.82s+0.82s+0.89s) / 10 = 8.35 / 10 = 0.835
(61%+52%+49%+48%+55%+50%+52%+50%+50%+54%) / 10 = 521 / 10 = 52.1


Therefore:

* Average Execution Time(Based on ctime): 9952.69 ms
* Average Execution Time(Based on chrono): 18968.01 ms
* Average Memory Usage: 0 KB
* Average Real Time: 18.973 s
* Average User Time: 9.122 s
* Average Sys Time: 0.835 s
* Average CPU Usage: 52.1 %
```

Awwwww! The result became 10 times slower. But wait, there's more to the story...

Note 1: Look at the execution time of the first HDD overwrite and compare it to the calculated average time. You will understand why I said each experiment should be repeated multiple times.

Note 2: As you can see, the time measured by "chrono" is much higher (almost twice) than the time measured by "ctime", and it represents the actual execution time of that code block. But why? It's similar to the real, user, and sys times I mentioned when discussing the `time` command. Scientifically, these two libraries calculate time using different methods. "ctime" is a library specific to the C language, and here it calculates time using the `clock()` function, but it's not the real time. it's the time the CPU spends on executing the current process. But that statement is not entirely accurate. Let me explain in a more technical language. ctime logs the number of clocks the CPU has executed for this specific program during its computations, and then converts these clocks into seconds. Simply put, it means it doesn't include the times like when we were performing I/O operations, or waiting for resources or I/O blocking, or waiting for other processes. Bui measuring the amount of I/O time is actually a significant part of our computations! "chrono" on the other hand, has a completely different story...
The chrono library, when called on resolution methods (such as `high_resolution_clock`), calculates what is called the precise wall clock time, from the start point to the end point. This time includes interrupts and I/O operations. So this is the precise time that we use for comparing.

______________________________________


Now let's extend the scope of comparison a bit. Let's say we want to compare a simple copy-paste in RAM and in HDD. For RAM, consider the following code:

```cpp
#include <iostream>
#include <sys/resource.h>
#include <chrono>

using namespace std;

int main() {

    char* arr = new char[1073741824];
    for(int i = 0; i < 1073741824 ; i++)
	    arr[i] = 'A';

    // Start execution time
    clock_t start_1 = clock();
    auto start_2 = chrono::high_resolution_clock::now();

    // Start memory usage
    struct rusage usage;
    getrusage(RUSAGE_SELF, &usage);
    long memory_usage_start = usage.ru_maxrss; // in kilobytes
    
    // Code ----------------------------------------------------------
    char* arr_2 = new char[1073741824];
    for(int i = 0; i < 1073741824 ; i++)
	    arr_2[i] = arr[i];    
    // ---------------------------------------------------------------
    
    // Stop measuring memory usage
    getrusage(RUSAGE_SELF, &usage);
    long memory_usage_end = usage.ru_maxrss; // in kilobytes

    // Stop measuring execution time
    clock_t end_1 = clock();
    auto end_2 = chrono::high_resolution_clock::now();
    double execution_time_1 = double(end_1 - start_1) / CLOCKS_PER_SEC;
    chrono::duration<double, milli> execution_time_2 = end_2 - start_2;

    // Printing result
    cout << "Execution Time (Based on ctime): " << execution_time_1 * 1000.0 << " ms" << endl;
    cout << "Execution Time (Based on chrono): " << execution_time_2.count() << " ms" << endl;
    cout << "Memory Usage: " << memory_usage_end - memory_usage_start << " KB" << endl;

    return 0;
}
```

[Source code](./Files/RAM_copy_test.cpp)

And let's jump right into execution:

```bash
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
```

And the average:

```md
(2676.01+2616.64+2618.32+2616.12+2617.68+2620.01+2620.11+2615.65+2623.07+2616.85) / 10 = 26240.46 / 10 = 2624.046
(2676.22+2616.71+2618.4+2616.2+2617.75+2620.11+2620.16+2615.84+2623.13+2616.94) / 10 = 26241.46 / 10 = 2624.146
(1048824+1048764+1048712+1048824+1048824+1048824+1048824+1048764+1048780+1048780) / 10 = 10487920 / 10 = 1048792
(5.12s+5.06s+5.02s+5.05s+5.05s+5.06s+5.02s+5.03s+5.03s+5.07s) / 10 = 50.51 / 10 = 5.051
(4.89s+4.85s+4.81s+4.80s+4.88s+4.86s+4.79s+4.78s+4.86s+4.87s) / 10 = 48.39 / 10 = 4.839
(0.23s+0.20s+0.20s+0.24s+0.17s+0.20s+0.23s+0.25s+0.17s+0.20s) / 10 = 2.09 / 10 = 0.209
(99%+99%+99%+99%+99%+99%+99%+99%+99%+99%) / 10 = 990 / 10 = 99


Therefore:

* Average Execution Time(Based on ctime): 2624.046 ms
* Average Execution Time(Based on chrono): 2624.146 ms
* Average Memory Usage: 1048792 KB
* Average Real Time: 5.051 s
* Average User Time: 4.839 s
* Average Sys Time: 0.209 s
* Average CPU Usage: 99 %
```

______________________________________

Now let's copy that same 1 gigabyte of data from the disk, but to a different location on the same disk, let's say in another partition ^_^:

```cpp
#include <iostream>
#include <fstream>
#include <sys/resource.h>
#include <chrono>

using namespace std;

int main() {

    char chunk;
    ifstream infile;
    ofstream outfile;

    // Start execution time
    clock_t start_1 = clock();
    auto start_2 = chrono::high_resolution_clock::now();

    // Start memory usage
    struct rusage usage;
    getrusage(RUSAGE_SELF, &usage);
    long memory_usage_start = usage.ru_maxrss; // in kilobytes
    
    // Code ----------------------------------------------------------
    infile.open("output.txt");
    outfile.open("/media/user/MyDrive1/output_copy.txt");
    if (!outfile.is_open()) {
        cout << "Error opening file!" << endl;
        return 1;
    }
    while (infile.get(chunk))
        outfile.put(chunk);
    infile.close();
    outfile.close();
    // ---------------------------------------------------------------
    
    // Stop measuring memory usage
    getrusage(RUSAGE_SELF, &usage);
    long memory_usage_end = usage.ru_maxrss; // in kilobytes

    // Stop measuring execution time
    clock_t end_1 = clock();
    auto end_2 = chrono::high_resolution_clock::now();
    double execution_time_1 = double(end_1 - start_1) / CLOCKS_PER_SEC;
    chrono::duration<double, milli> execution_time_2 = end_2 - start_2;

    // Printing result
    cout << "Execution Time (Based on ctime): " << execution_time_1 * 1000.0 << " ms" << endl;
    cout << "Execution Time (Based on chrono): " << execution_time_2.count() << " ms" << endl;
    cout << "Memory Usage: " << memory_usage_end - memory_usage_start << " KB" << endl;

    return 0;
}
```

[Source code](./Files/HDD_copy_test.cpp)

Execution:

```bash
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
```

Average time:

```md
(18386.5+17681.3+17245.1+19407.6+20163.5+20450.9+20228.9+20001.4+19954.7+21618.5) / 10 = 195138.4 / 10 = 19513.84
(25923.6+23741.9+24897.7+33033.6+36565.9+38170.3+33791.1+35478+34560.4+39370.6) / 10 = 325533.1 / 10 = 32553.31
(0+0+0+0+0+0+0+0+0+0) / 10 = 0 / 10 = 0
(25.93s+23.74s+24.90s+33.04s+36.57s+38.17s+33.79s+35.48s+34.56s+39.37s) / 10 = 325.55 / 10 = 32.555
(16.58s+15.98s+15.49s+17.42s+18.03s+18.30s+18.12s+17.79s+17.55s+19.18s) / 10 = 174.44 / 10 = 17.444
(1.81s+1.70s+1.76s+1.99s+2.13s+2.15s+2.11s+2.21s+2.41s+2.44s) / 10 = 20.71 / 10 = 2.071
(70%+74%+69%+58%+55%+53%+59%+56%+57%+54%) / 10 = 605 / 10 = 60.5


Therefore:

* Average Execution Time(Based on ctime): 19513.84 ms
* Average Execution Time(Based on chrono): 32553.31 ms
* Average Memory Usage: 0 KB
* Average Real Time: 32.555 s
* Average User Time: 17.444 s
* Average Sys Time: 2.071 s
* Average CPU Usage: 60.5 %
```

Here, I performed a subtle trick:))

I'll explain it in technical language only. By ovserving files getting copied quickly within a range of 20 seconds, I realized that an optimization is goin on under the hood. It's possible that the file has been cached by an entity - the operating system or I/O-related API modules - (and we can see how practical concepts are approving theoretical ones). And since the file entropy is very low (because it's all full of ASCII bytes of "A" character), our experiment may be influenced by the optimizations I explained earlier theoretically. Therefore, for this purpose, I obtained 1 gigabyte of random data from the system entropy instead of our low-entropy file and observed that the time became much longer (up to 20 times longer).

```bash
rm output.txt && dd if=/dev/random bs=1024 count=1048576 > output.txt
```

______________________________________

