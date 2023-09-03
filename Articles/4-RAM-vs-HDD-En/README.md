# Comparison of RAM and HDD Read/Write Speeds

## Abstract

This article provides a detailed comparison of the speed at which data is read and written on RAM and a hard disk drive (HDD). The underlying technology of both RAM and HDD is explained, followed by a comparison of their average read/write speeds considering technological complexities.

In this article, I will discuss in detail the speed of reading/writing data on RAM and on a hard disk drive (HDD). To do so, I will first explain the underlying technology of both RAM and HDD, and then compare their average read/write speeds due to technological complexities.

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

