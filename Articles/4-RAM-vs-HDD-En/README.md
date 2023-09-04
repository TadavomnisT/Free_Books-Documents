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

______________________________________