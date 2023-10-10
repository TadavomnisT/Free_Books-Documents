
# GNU Manifesto Persian Translation
# ترجمه فارسی بیانیه گنو GNU


## Abstract

The GNU Manifesto is a call-to-action by Richard Stallman encouraging participation and support of the GNU Project's goal in developing the GNU free computer operating system. The GNU Manifesto was published in March 1985 in Dr. Dobb's Journal of Software Tools. It is held in high regard within the free software movement as a fundamental philosophical source.
The full text is included with GNU software such as Emacs, and is publicly available.
* [GNU Manifesto, in Wikipedia, the free encyclopedia](https://en.wikipedia.org/wiki/GNU_Manifesto)

In this article, I provide a detailed and loyal-to-text Persian translation of the GNU Manifesto. A copy of the Original manifesto is also available at the following link:
* https://www.gnu.org/gnu/manifesto.html

The Translation will be presented in two different ways, one that is translated version of the whole GNU Manifesto, and one that is a paragraph-by-paragraph translation.

## چکیده

بیانیه گنو (به انگلیسی: GNU Manifesto) در مارس ۱۹۸۵ توسط ریچارد استالمن نوشته شد و در ژورنال ابزارهای نرم‌افزاری دکتر داب به چاپ رسید تا توضیح و تعریف پروژه گنو را ارائه دهد و دعوت به همکاری و پشتیبانی کند. این بیانیه در جنبش نرم‌افزار آزاد با احترام زیاد نگه‌داری می‌شود و یک منبع فلسفی بنیادی است. متن کامل آن در نرم‌افزارهای گنو مثل ایمکس گنجانده شده‌است و از طریق وب نیز در دسترس است.
* [بیانیه گنو، در ویکی‌پدیا داشنامه آزاد](https://fa.wikipedia.org/wiki/%D8%A8%DB%8C%D8%A7%D9%86%DB%8C%D9%87_%DA%AF%D9%86%D9%88)

در این مقاله، من یک ترجمه دقیق و وفادار-به-متن از بیانیه گنو را بصورت آزاد منتشر میکنم. همچنین یک کپی از متن اصلی و انگلیسی بیانیه در لینک زیر در دسترس است:
* https://www.gnu.org/gnu/manifesto.html

ترجمه این بیانیه در این مقاله در دو قسمت ارائه میشود، اولین قسمت ترجمه کل بیانه، و قسمت دوم ترجمه پاراگراف-به-پاراگراف این بیانیه است.

_____________________________________________________________________

## GNU Manifesto (English)

_The GNU Manifesto (which appears below) was written by [Richard Stallman](https://www.stallman.org/) in 1985 to ask for support in developing the GNU operating system. Part of the text was taken from the original announcement of 1983. Through 1987, it was updated in minor ways to account for developments; since then, it seems best to leave it unchanged._

_Since that time, we have learned about certain common misunderstandings that different wording could help avoid. Footnotes added since 1993 help clarify these points._

_If you want to install the GNU/Linux system, we recommend you use one of the [100% free software GNU/Linux distributions](https://www.gnu.org/distros). For how to contribute, see [gnu.org/help](https://www.gnu.org/help/help.html)._

_The GNU Project is part of the Free Software Movement, a campaign for [freedom for users of software](https://www.gnu.org/philosophy/free-sw.html). It is a mistake to associate GNU with the term “open source”—that term was coined in 1998 by people who disagree with the Free Software Movement's ethical values. They use it to promote an [amoral approach](https://www.gnu.org/philosophy/open-source-misses-the-point.html) to the same field._

### What's GNU? Gnu's Not Unix!

GNU, which stands for Gnu's Not Unix, is the name for the complete Unix-compatible software system which I am writing so that I can give it away free to everyone who can use it [1]. Several other volunteers are helping me. Contributions of time, money, programs and equipment are greatly needed.

So far we have an Emacs text editor with Lisp for writing editor commands, a source level debugger, a yacc-compatible parser generator, a linker, and around 35 utilities. A shell (command interpreter) is nearly completed. A new portable optimizing C compiler has compiled itself and may be released this year. An initial kernel exists but many more features are needed to emulate Unix. When the kernel and compiler are finished, it will be possible to distribute a GNU system suitable for program development. We will use TeX as our text formatter, but an nroff is being worked on. We will use the free, portable X Window System as well. After this we will add a portable Common Lisp, an Empire game, a spreadsheet, and hundreds of other things, plus online documentation. We hope to supply, eventually, everything useful that normally comes with a Unix system, and more.

GNU will be able to run Unix programs, but will not be identical to Unix. We will make all improvements that are convenient, based on our experience with other operating systems. In particular, we plan to have longer file names, file version numbers, a crashproof file system, file name completion perhaps, terminal-independent display support, and perhaps eventually a Lisp-based window system through which several Lisp programs and ordinary Unix programs can share a screen. Both C and Lisp will be available as system programming languages. We will try to support UUCP, MIT Chaosnet, and Internet protocols for communication.

GNU is aimed initially at machines in the 68000/16000 class with virtual memory, because they are the easiest machines to make it run on. The extra effort to make it run on smaller machines will be left to someone who wants to use it on them.

To avoid horrible confusion, please pronounce the g in the word “GNU” when it is the name of this project.

### Why I Must Write GNU

I consider that the Golden Rule requires that if I like a program I must share it with other people who like it. Software sellers want to divide the users and conquer them, making each user agree not to share with others. I refuse to break solidarity with other users in this way. I cannot in good conscience sign a nondisclosure agreement or a software license agreement. For years I worked within the Artificial Intelligence Lab to resist such tendencies and other inhospitalities, but eventually they had gone too far: I could not remain in an institution where such things are done for me against my will.

So that I can continue to use computers without dishonor, I have decided to put together a sufficient body of free software so that I will be able to get along without any software that is not free. I have resigned from the AI Lab to deny MIT any legal excuse to prevent me from giving GNU away [2].

### Why GNU Will Be Compatible with Unix

Unix is not my ideal system, but it is not too bad. The essential features of Unix seem to be good ones, and I think I can fill in what Unix lacks without spoiling them. And a system compatible with Unix would be convenient for many other people to adopt.

### How GNU Will Be Available

GNU is not in the public domain. Everyone will be permitted to modify and redistribute GNU, but no distributor will be allowed to restrict its further redistribution. That is to say, [proprietary](https://www.gnu.org/philosophy/categories.html#ProprietarySoftware) modifications will not be allowed. I want to make sure that all versions of GNU remain free.

### Why Many Other Programmers Want to Help

I have found many other programmers who are excited about GNU and want to help.

Many programmers are unhappy about the commercialization of system software. It may enable them to make more money, but it requires them to feel in conflict with other programmers in general rather than feel as comrades. The fundamental act of friendship among programmers is the sharing of programs; marketing arrangements now typically used essentially forbid programmers to treat others as friends. The purchaser of software must choose between friendship and obeying the law. Naturally, many decide that friendship is more important. But those who believe in law often do not feel at ease with either choice. They become cynical and think that programming is just a way of making money.

By working on and using GNU rather than proprietary programs, we can be hospitable to everyone and obey the law. In addition, GNU serves as an example to inspire and a banner to rally others to join us in sharing. This can give us a feeling of harmony which is impossible if we use software that is not free. For about half the programmers I talk to, this is an important happiness that money cannot replace.

### How You Can Contribute

(Nowadays, for software tasks to work on, see the [High Priority Projects](http://fsf.org/campaigns/priority-projects) list and the [GNU Help Wanted list](http://savannah.gnu.org/people/?type_id=1), the general task list for GNU software packages. For other ways to help, see the guide to helping the GNU operating system.)

I am asking computer manufacturers for donations of machines and money. I'm asking individuals for donations of programs and work.

One consequence you can expect if you donate machines is that GNU will run on them at an early date. The machines should be complete, ready to use systems, approved for use in a residential area, and not in need of sophisticated cooling or power.

I have found very many programmers eager to contribute part-time work for GNU. For most projects, such part-time distributed work would be very hard to coordinate; the independently written parts would not work together. But for the particular task of replacing Unix, this problem is absent. A complete Unix system contains hundreds of utility programs, each of which is documented separately. Most interface specifications are fixed by Unix compatibility. If each contributor can write a compatible replacement for a single Unix utility, and make it work properly in place of the original on a Unix system, then these utilities will work right when put together. Even allowing for Murphy to create a few unexpected problems, assembling these components will be a feasible task. (The kernel will require closer communication and will be worked on by a small, tight group.)

If I get donations of money, I may be able to hire a few people full or part time. The salary won't be high by programmers' standards, but I'm looking for people for whom building community spirit is as important as making money. I view this as a way of enabling dedicated people to devote their full energies to working on GNU by sparing them the need to make a living in another way.

### Why All Computer Users Will Benefit

 Once GNU is written, everyone will be able to obtain good system software free, just like air [3].

This means much more than just saving everyone the price of a Unix license. It means that much wasteful duplication of system programming effort will be avoided. This effort can go instead into advancing the state of the art.

Complete system sources will be available to everyone. As a result, a user who needs changes in the system will always be free to make them himself, or hire any available programmer or company to make them for him. Users will no longer be at the mercy of one programmer or company which owns the sources and is in sole position to make changes.

Schools will be able to provide a much more educational environment by encouraging all students to study and improve the system code. Harvard's computer lab used to have the policy that no program could be installed on the system if its sources were not on public display, and upheld it by actually refusing to install certain programs. I was very much inspired by this.

Finally, the overhead of considering who owns the system software and what one is or is not entitled to do with it will be lifted.

Arrangements to make people pay for using a program, including licensing of copies, always incur a tremendous cost to society through the cumbersome mechanisms necessary to figure out how much (that is, which programs) a person must pay for. And only a police state can force everyone to obey them. Consider a space station where air must be manufactured at great cost: charging each breather per liter of air may be fair, but wearing the metered gas mask all day and all night is intolerable even if everyone can afford to pay the air bill. And the TV cameras everywhere to see if you ever take the mask off are outrageous. It's better to support the air plant with a head tax and chuck the masks.

Copying all or parts of a program is as natural to a programmer as breathing, and as productive. It ought to be as free.

### Some Easily Rebutted Objections to GNU's Goals


**_“Nobody will use it if it is free, because that means they can't rely on any support.”_**
**_“You have to charge for the program to pay for providing the support.”_**

If people would rather pay for GNU plus service than get GNU free without service, a company to provide just service to people who have obtained GNU free ought to be profitable [4].

We must distinguish between support in the form of real programming work and mere handholding. The former is something one cannot rely on from a software vendor. If your problem is not shared by enough people, the vendor will tell you to get lost.

If your business needs to be able to rely on support, the only way is to have all the necessary sources and tools. Then you can hire any available person to fix your problem; you are not at the mercy of any individual. With Unix, the price of sources puts this out of consideration for most businesses. With GNU this will be easy. It is still possible for there to be no available competent person, but this problem cannot be blamed on distribution arrangements. GNU does not eliminate all the world's problems, only some of them.

Meanwhile, the users who know nothing about computers need handholding: doing things for them which they could easily do themselves but don't know how.

Such services could be provided by companies that sell just handholding and repair service. If it is true that users would rather spend money and get a product with service, they will also be willing to buy the service having got the product free. The service companies will compete in quality and price; users will not be tied to any particular one. Meanwhile, those of us who don't need the service should be able to use the program without paying for the service.

**_“You cannot reach many people without advertising, and you must charge for the program to support that.”_**
**_“It's no use advertising a program people can get free.”_**

There are various forms of free or very cheap publicity that can be used to inform numbers of computer users about something like GNU. But it may be true that one can reach more microcomputer users with advertising. If this is really so, a business which advertises the service of copying and mailing GNU for a fee ought to be successful enough to pay for its advertising and more. This way, only the users who benefit from the advertising pay for it.

On the other hand, if many people get GNU from their friends, and such companies don't succeed, this will show that advertising was not really necessary to spread GNU. Why is it that free market advocates don't want to let the free market decide this? [5]

**_“My company needs a proprietary operating system to get a competitive edge.”_**

GNU will remove operating system software from the realm of competition. You will not be able to get an edge in this area, but neither will your competitors be able to get an edge over you. You and they will compete in other areas, while benefiting mutually in this one. If your business is selling an operating system, you will not like GNU, but that's tough on you. If your business is something else, GNU can save you from being pushed into the expensive business of selling operating systems.

I would like to see GNU development supported by gifts from many manufacturers and users, reducing the cost to each [6].

**_“Don't programmers deserve a reward for their creativity?”_**

If anything deserves a reward, it is social contribution. Creativity can be a social contribution, but only in so far as society is free to use the results. If programmers deserve to be rewarded for creating innovative programs, by the same token they deserve to be punished if they restrict the use of these programs.

**_“Shouldn't a programmer be able to ask for a reward for his creativity?”_**

There is nothing wrong with wanting pay for work, or seeking to maximize one's income, as long as one does not use means that are destructive. But the means customary in the field of software today are based on destruction.

Extracting money from users of a program by restricting their use of it is destructive because the restrictions reduce the amount and the ways that the program can be used. This reduces the amount of wealth that humanity derives from the program. When there is a deliberate choice to restrict, the harmful consequences are deliberate destruction.

The reason a good citizen does not use such destructive means to become wealthier is that, if everyone did so, we would all become poorer from the mutual destructiveness. This is Kantian ethics; or, the Golden Rule. Since I do not like the consequences that result if everyone hoards information, I am required to consider it wrong for one to do so. Specifically, the desire to be rewarded for one's creativity does not justify depriving the world in general of all or part of that creativity.

**_“Won't programmers starve?”_**

I could answer that nobody is forced to be a programmer. Most of us cannot manage to get any money for standing on the street and making faces. But we are not, as a result, condemned to spend our lives standing on the street making faces, and starving. We do something else.

But that is the wrong answer because it accepts the questioner's implicit assumption: that without ownership of software, programmers cannot possibly be paid a cent. Supposedly it is all or nothing.

The real reason programmers will not starve is that it will still be possible for them to get paid for programming; just not paid as much as now.

Restricting copying is not the only basis for business in software. It is the most common basis [7] because it brings in the most money. If it were prohibited, or rejected by the customer, software business would move to other bases of organization which are now used less often. There are always numerous ways to organize any kind of business.

Probably programming will not be as lucrative on the new basis as it is now. But that is not an argument against the change. It is not considered an injustice that sales clerks make the salaries that they now do. If programmers made the same, that would not be an injustice either. (In practice they would still make considerably more than that.)

**_“Don't people have a right to control how their creativity is used?”_**

“Control over the use of one's ideas” really constitutes control over other people's lives; and it is usually used to make their lives more difficult.

People who have studied the issue of intellectual property rights [8] carefully (such as lawyers) say that there is no intrinsic right to intellectual property. The kinds of supposed intellectual property rights that the government recognizes were created by specific acts of legislation for specific purposes.

For example, the patent system was established to encourage inventors to disclose the details of their inventions. Its purpose was to help society rather than to help inventors. At the time, the life span of 17 years for a patent was short compared with the rate of advance of the state of the art. Since patents are an issue only among manufacturers, for whom the cost and effort of a license agreement are small compared with setting up production, the patents often do not do much harm. They do not obstruct most individuals who use patented products.

The idea of copyright did not exist in ancient times, when authors frequently copied other authors at length in works of nonfiction. This practice was useful, and is the only way many authors' works have survived even in part. The copyright system was created expressly for the purpose of encouraging authorship. In the domain for which it was invented—books, which could be copied economically only on a printing press—it did little harm, and did not obstruct most of the individuals who read the books.

All intellectual property rights are just licenses granted by society because it was thought, rightly or wrongly, that society as a whole would benefit by granting them. But in any particular situation, we have to ask: are we really better off granting such license? What kind of act are we licensing a person to do?

The case of programs today is very different from that of books a hundred years ago. The fact that the easiest way to copy a program is from one neighbor to another, the fact that a program has both source code and object code which are distinct, and the fact that a program is used rather than read and enjoyed, combine to create a situation in which a person who enforces a copyright is harming society as a whole both materially and spiritually; in which a person should not do so regardless of whether the law enables him to.

**_“Competition makes things get done better.”_**

The paradigm of competition is a race: by rewarding the winner, we encourage everyone to run faster. When capitalism really works this way, it does a good job; but its defenders are wrong in assuming it always works this way. If the runners forget why the reward is offered and become intent on winning, no matter how, they may find other strategies—such as, attacking other runners. If the runners get into a fist fight, they will all finish late.

Proprietary and secret software is the moral equivalent of runners in a fist fight. Sad to say, the only referee we've got does not seem to object to fights; he just regulates them (“For every ten yards you run, you can fire one shot”). He really ought to break them up, and penalize runners for even trying to fight.

**_“Won't everyone stop programming without a monetary incentive?”_**

Actually, many people will program with absolutely no monetary incentive. Programming has an irresistible fascination for some people, usually the people who are best at it. There is no shortage of professional musicians who keep at it even though they have no hope of making a living that way.

But really this question, though commonly asked, is not appropriate to the situation. Pay for programmers will not disappear, only become less. So the right question is, will anyone program with a reduced monetary incentive? My experience shows that they will.

For more than ten years, many of the world's best programmers worked at the Artificial Intelligence Lab for far less money than they could have had anywhere else. They got many kinds of nonmonetary rewards: fame and appreciation, for example. And creativity is also fun, a reward in itself.

Then most of them left when offered a chance to do the same interesting work for a lot of money.

What the facts show is that people will program for reasons other than riches; but if given a chance to make a lot of money as well, they will come to expect and demand it. Low-paying organizations do poorly in competition with high-paying ones, but they do not have to do badly if the high-paying ones are banned.

**_“We need the programmers desperately. If they demand that we stop helping our neighbors, we have to obey.”_**

You're never so desperate that you have to obey this sort of demand. Remember: millions for defense, but not a cent for tribute!

**_“Programmers need to make a living somehow.”_**

In the short run, this is true. However, there are plenty of ways that programmers could make a living without selling the right to use a program. This way is customary now because it brings programmers and businessmen the most money, not because it is the only way to make a living. It is easy to find other ways if you want to find them. Here are a number of examples.

A manufacturer introducing a new computer will pay for the porting of operating systems onto the new hardware.

The sale of teaching, handholding and maintenance services could also employ programmers.

People with new ideas could distribute programs as freeware [9], asking for donations from satisfied users, or selling handholding services. I have met people who are already working this way successfully.

Users with related needs can form users' groups, and pay dues. A group would contract with programming companies to write programs that the group's members would like to use.

All sorts of development can be funded with a Software Tax:

Suppose everyone who buys a computer has to pay x percent of the price as a software tax. The government gives this to an agency like the NSF to spend on software development.

But if the computer buyer makes a donation to software development himself, he can take a credit against the tax. He can donate to the project of his own choosing—often, chosen because he hopes to use the results when it is done. He can take a credit for any amount of donation up to the total tax he had to pay.

The total tax rate could be decided by a vote of the payers of the tax, weighted according to the amount they will be taxed on.

The consequences:

* The computer-using community supports software development.
* This community decides what level of support is needed.
* Users who care which projects their share is spent on can choose this for themselves.

In the long run, making programs free is a step toward the postscarcity world, where nobody will have to work very hard just to make a living. People will be free to devote themselves to activities that are fun, such as programming, after spending the necessary ten hours a week on required tasks such as legislation, family counseling, robot repair and asteroid prospecting. There will be no need to be able to make a living from programming.

We have already greatly reduced the amount of work that the whole society must do for its actual productivity, but only a little of this has translated itself into leisure for workers because much nonproductive activity is required to accompany productive activity. The main causes of this are bureaucracy and isometric struggles against competition. Free software will greatly reduce these drains in the area of software production. We must do this, in order for technical gains in productivity to translate into less work for us.

### Footnotes 

1- The wording here was careless. The intention was that nobody would have to pay for permission to use the GNU system. But the words don't make this clear, and people often interpret them as saying that copies of GNU should always be distributed at little or no charge. That was never the intent; later on, the manifesto mentions the possibility of companies providing the service of distribution for a profit. Subsequently I have learned to distinguish carefully between “free” in the sense of freedom and “free” in the sense of price. Free software is software that users have the freedom to distribute and change. Some users may obtain copies at no charge, while others pay to obtain copies—and if the funds help support improving the software, so much the better. The important thing is that everyone who has a copy has the freedom to cooperate with others in using it.

2- The expression “give away” is another indication that I had not yet clearly separated the issue of price from that of freedom. We now recommend avoiding this expression when talking about free software. See “[Confusing Words and Phrases](https://www.gnu.org/philosophy/words-to-avoid.html#GiveAwaySoftware)” for more explanation.

3- This is another place I failed to distinguish carefully between the two different meanings of “free.” The statement as it stands is not false—you can get copies of GNU software at no charge, from your friends or over the net. But it does suggest the wrong idea.

4- Several such companies now exist.

5- Although it is a charity rather than a company, the Free Software Foundation for 10 years raised most of its funds from its distribution service. You can [order things from the FSF](https://shop.fsf.org/) to support its work. 

6- A group of computer companies pooled funds around 1991 to support maintenance of the GNU C Compiler.

7- I think I was mistaken in saying that proprietary software was the most common basis for making money in software. It seems that actually the most common business model was and is development of custom software. That does not offer the possibility of collecting rents, so the business has to keep doing real work in order to keep getting income. The custom software business would continue to exist, more or less unchanged, in a free software world. Therefore, I no longer expect that most paid programmers would earn less in a free software world.

8- In the 1980s I had not yet realized how confusing it was to speak of “the issue” of “intellectual property.” That term is obviously biased; more subtle is the fact that it lumps together various disparate laws which raise very different issues. Nowadays I urge people to reject the term “intellectual property” entirely, lest it lead others to suppose that those laws form one coherent issue. The way to be clear is to discuss patents, copyrights, and trademarks separately. See [further explanation](https://www.gnu.org/philosophy/not-ipr.html) of how this term spreads confusion and bias.

9- Subsequently we learned to distinguish between “free software” and “freeware.” The term “freeware” means software you are free to redistribute, but usually you are not free to study and change the source code, so most of it is not free software. See “[Confusing Words and Phrases](https://www.gnu.org/philosophy/words-to-avoid.html#Freeware)” for more explanation.

_____________________________________________________________________


## بیانیه گنو GNU (ترجمه فارسی)

_بیانیه گنو (که در زیر آمده است) توسط [ریچارد استالمن](https://www.stallman.org/) در سال 1985 برای درخواست حمایت در توسعه سیستم عامل گنو نوشته شد. بخشی از متن از اعلامیه اصلی سال 1983 گرفته شده است. تا سال 1987، به دلیل تحولات، تغییرات جزئی در آن ایجاد شد. از آن زمان، به نظر می رسد که بهتر است بدون تغییر باقی بماند._

_از آن زمان، ما در مورد برخی سوء تفاهم های رایج که جمله‌بندی های مختلف می تواند از آنها جلوگیری کند، مباحثی را آموخته ایم. پاورقی هایی که از سال 1993 اضافه شده اند به شفاف سازی این نکات کمک می کنند._

اگر می خواهید سیستم GNU/Linux را نصب کنید، توصیه می کنیم از [یکی از توزیع های GNU/Linux که  100% نرم‌افزار آزاد هستند](https://www.gnu.org/distros) استفاده کنید. برای اطلاع از مشارکت، به [gnu.org/help](https://www.gnu.org/help/help.html) مراجعه کنید.

پروژه GNU بخشی از جنبش نرم‌افزار آزاد است، یک کمپین برای [آزادی کاربران نرم‌افزار](https://www.gnu.org/philosophy/free-sw.html). مرتبط کردن GNU با اصطلاح متن-باز یا “open source” اشتباه است - این اصطلاح در سال 1998 توسط افرادی ابداع شد که با ارزش‌های اخلاقی جنبش نرم‌افزار آزاد مخالف هستند. آنها از آن برای تبلیغ [رویکردی غیراخلاقی](https://www.gnu.org/philosophy/open-source-misses-the-point.html) در همان زمینه استفاده می‌کنند.

### گنو چیست؟ گنو یونیکس نیست!

عبارت GNU مخفف Gnu's Not Unix (گنو، یونیکس نیست) و نام یک سیستم نرم‌افزاری کامل سازگار با یونیکس است که من (ریچارد استالمن) در حال نوشتن آن هستم تا بتوانم آن را به صورت آزاد به همه کسانی که می‌توانند از آن استفاده کنند، هدیه بدهم. [1]چندین داوطلب دیگر نیز به من کمک می‌کنند. کمک‌های زمانی، مالی، برنامه‌ای و تجهیزاتی بسیار مورد نیاز است.

تاکنون ما یک ویرایشگر متن Emacs با Lisp برای نوشتن دستورات ویرایشگر، یک دیباگر سطح منبع، یک تولیدکننده پارسر سازگار با yacc، یک لینکر و حدود 35 ابزار داریم. یک شل (مفسر دستورات) نیز تقریباً تکمیل شده است. یک کامپایلر C بهینه‌ساز و قابل حمل جدید خود را کامپایل کرده است و ممکن است امسال منتشر شود. یک هسته [کرنل kernel] اولیه وجود دارد، اما ویژگی‌های [feature] بیشتری برای شبیه‌سازی یونیکس مورد نیاز است. هنگامی که توسعه کرنل و کامپایلر به پایان برسند، امکان توزیع یک سیستم GNU مناسب برای توسعه برنامه وجود خواهد داشت. ما از TeX به عنوان فرمت‌کننده [formatter] متن خود استفاده خواهیم کرد، اما روی یک nroff نیز کار می‌شود. ما همچنین از سیستم پنجره‌ای X قابل حمل آزاد استفاده خواهیم کرد. پس از این، یک Common Lisp قابل حمل، یک بازی Empire، یک صفحه گسترده و صدها چیز دیگر به علاوه مستندات آنلاین اضافه خواهیم کرد. ما امیدواریم که بتوانیم در نهایت همه چیزهای مفیدی که معمولاً با یک سیستم یونیکس ارائه می‌شود به علاوه چیزهای بیشتر را تهیه کنیم. 

گنو GNU قادر خواهد بود برنامه‌های یونیکس را اجرا کند، اما با یونیکس یکسان نخواهد بود. ما تمام بهبودهای ممکن را که بر اساس تجربه خود با سایر سیستم‌های عامل دیگر میشناسیم، انجام خواهیم داد. به طور خاص، ما قصد داریم نام‌های فایل بلندتر، شماره‌های نسخه فایل، یک سیستم-فایل ضد خرابی، احتمالاً تکمیل نام فایل، پشتیبانی از نمایش مستقل از ترمینال و شاید در نهایت یک سیستم پنجره‌ای مبتنی بر Lisp را داشته باشیم که از طریق آن چندین برنامه Lisp و برنامه‌های معمولی یونیکس بتوانند یک صفحه را به اشتراک بگذارند. هم C و هم Lisp به عنوان زبان‌های برنامه‌نویسی سیستمی در دسترس خواهند بود. ما سعی خواهیم کرد از پروتکل‌های UUCP، MIT Chaosnet و اینترنت برای ارتباطات پشتیبانی کنیم.

هدف ابتدایی طراحی گنو GNU برای ماشین‌هایی در کلاس 68000/16000 با حافظه مجازی است، زیرا اینها آسان‌ترین ماشین‌هایی هستند که می‌توانند آن را اجرا کنند. تلاش‌های بیشتر برای اجرای آن روی ماشین‌های کوچکتر بر عهده کسی گذاشته خواهد شد که می‌خواهد از آن روی آن‌ها استفاده کند.

برای جلوگیری از سردرگمی وحشتناک، لطفاً حرف g در کلمه “GNU” را زمانی که صحبت از نام این پروژه است تلفظ کنید.

### چرا من باید GNU را بنویسم

من معتقدم که قاعده طلایی ایجاب می‌کند که اگر برنامه‌ای را دوست دارم، باید آن را با دیگران که دوستش دارند به اشتراک بگذارم. فروشندگان نرم‌افزار می‌خواهند کاربران را تقسیم و تسخیر کنند و از هر کاربر بخواهند که موافقت کند که آن [نرم‌افزار] را با دیگران به اشتراک نگذارد. من از شکستن همبستگی با سایر کاربران به این طریق امتناع می‌کنم. من نمی‌توانم با وجدان راحت یک توافق نامه عدم افشای اطلاعات یا یک توافق نامه مجوز نرم‌افزار را امضا کنم.
سال‌هاست که در آزمایشگاه هوش مصنوعی کار می‌کنم تا در برابر چنین تمایلاتی و چنین حرکات ضدِ نوع‌دوستانه‌ای مقاومت کنم، اما در نهایت آنها از حد گذشته بودند: من نمی‌توانستم در مؤسسه‌ای بمانم که چنین کارهایی برای من بر خلاف میل من انجام می‌شود.

برای اینکه بتوانم به استفاده از کامپیوترها بدون بی‌شرافتی ادامه دهم، تصمیم گرفته‌ام مجموعه‌ای کافی از نرم‌افزارهای آزاد را گرد هم بیاورم تا بتوانم با نرم‌افزاری که آزاد نیست، کنار بیایم. من از آزمایشگاه هوش مصنوعی استعفا داده‌ام تا به MIT هیچ بهانه قانونی برای جلوگیری از هدیه دادن GNU ندهم.[2]

### چرا GNU با Unix سازگار خواهد بود

یونیکس Unix سیستم ایده آل من نیست، اما خیلی هم بد نیست. به نظر می رسد ویژگی های اساسی Unix خوب باشد، و فکر می کنم می توانم کمبودهای Unix را بدون خراب کردن آنها جبران کنم. و یک سیستم سازگار با Unix برای بسیاری از افراد دیگر برای پذیرش راحت خواهد بود.

### گنو GNU چگونه در دسترس خواهد بود

گنو GNU در مالکیت عمومی نیست. به همه اجازه داده می شود که GNU را اصلاح و توزیع کنند، اما به هیچ توزیع کننده ای اجازه داده نمی شود که توزیع مجدد آن را محدود کند. به این معنا که تغییرات [اختصاصی [proprietary]](https://www.gnu.org/philosophy/categories.html#ProprietarySoftware) مجاز نیستند. من می خواهم مطمئن شوم که همه نسخه های GNU آزاد باقی می مانند.

### چرا بسیاری از برنامه‌نویسان دیگر می خواهند کمک کنند

من بسیاری از برنامه نویسان دیگر را پیدا کرده‌ام که از GNU هیجان زده هستند و می‌خواهند کمک کنند.

بسیاری از برنامه‌نویسان از تجاری‌سازی نرم‌افزار سیستمی ناراضی هستند. ممکن است به آنها امکان دهد پول بیشتری به دست آورند، اما آنها را ملزم می کند که به طور کلی، بجای اینکه احساس رفاقت با دیگر برنامه‌نویسان کنند، احساس درگیری با سایر برنامه‌نویسان داشته باشند. رفتار اساسی دوستی در میان برنامه‌نویسان به اشتراک گذاشتن برنامه ها است؛ مقدمات بازاریابی که اکنون به طور معمول استفاده می‌شود اساساً برنامه‌نویسان ممنوع می‌کند که با دیگران به عنوان دوست رفتار کنند. خریدار نرم‌افزار باید بین دوستی و اطاعت از قانون یکی را انتخاب کند. به طور طبیعی، بسیاری تصمیم می گیرند که دوستی مهمتر است. اما کسانی که به قانون اعتقاد دارند اغلب با هیچ یک از این دو گزینه احساس راحتی نمی‌کنند. آنها بدبین می‌شوند و فکر می کنند برنامه‌نویسی فقط راهی برای کسب درآمد است.

با کار بر روی GNU و استفاده از آن به جای برنامه‌های اختصاصی، می‌توانیم پذیرای همه باشیم و از قانون اطاعت کنیم. علاوه بر این، GNU به عنوان الگویی برای الهام بخشیدن و پرچمی برای ترغیب دیگران به پیوستن به ما در به-اشتراک‌گذاری عمل می‌کند. این می تواند به ما احساس هماهنگی بدهد، که با استفاده از نرم‌افزاری غیر آزاد، غیرممکن است. برای حدود نیمی از برنامه نویسان که با آنها صحبت کرده‌ام، این شادی مهمی است که پول نمی‌تواند جایگزین آن شود.

### چگونه می توانید مشارکت کنید

(امروزه، برای پیدا کردن تسکهای نرم‌افزاری و کار کردن روی آنها، لیست پروژه‌های [با اولویت بالا](http://fsf.org/campaigns/priority-projects) و [لیست درخواست کمک GNU](http://savannah.gnu.org/people/?type_id=1) را ببینید. این لیست‌ها تسکهای عمومی برای بسته‌های نرم‌افزاری GNU را ارائه می‌دهند. برای راه‌های دیگر کمک، [راهنمای کمک به سیستم عامل GNU](https://www.gnu.org/help/help.html) را ببینید.)

من از تولیدکنندگان کامپیوتر برای اهدای ماشین و پول درخواست کمک می‌کنم. من از افراد نیز برای اهدای برنامه‌ها و کارهایشان درخواست می‌کنم.

یکی از نتایجی که می‌توانید در صورت اهدای ماشین انتظار داشته باشید این است که GNU زودتر روی آنها اجرا شود. ماشین ها باید سیستم های کامل و آماده استفاده باشند که برای استفاده در مناطق مسکونی تأیید شده‌اند و به خنک کننده یا برق پیچیده نیاز ندارند.

من برنامه‌نویسان زیادی را پیدا کرده‌ام که مایلند به صورت پاره‌وقت برای GNU کار کنند. برای اکثر پروژه ها، هماهنگی چنین کار توزیع شده پاره وقتی بسیار سخت خواهد بود. قطعات نوشته شده مستقل با هم کار نمی کنند. اما برای کار خاص جایگزینی Unix، این مشکل وجود ندارد. یک سیستم کامل Unix شامل صدها برنامه کاربردی است که هر یک از آنها به طور جداگانه مستند شده‌اند. اکثر مشخصه‌های رابط [interface] برای سازگاری با Unix طراحی شده‌اند. اگر هر مشارکت کننده بتواند یک جایگزین سازگار برای یک ابزار Unix بنویسد و آن را به نحوی بنویسد که درست به جای نسخه اصلی در یک سیستم Unix کار کند، آنگاه این ابزارها هنگام قرار گرفتن در کنار هم به درستی کار خواهند کرد. حتی با در نظر گرفتن قانون مورفی [Murphy] برای ایجاد چند مشکل غیرمنتظره، مونتاژ این اجزا یک کار قابل انجام خواهد بود. (هسته نیاز به ارتباط نزدیک‌تر دارد و توسط یک گروه کوچک و فشرده کار خواهد شد.)

اگر کمک مالی دریافت کنم، ممکن است بتوانم چند نفر را به صورت تمام وقت یا پاره وقت استخدام کنم. حقوق و دستمزد با توجه به استانداردهای برنامه نویسان بالا نخواهد بود، اما من به دنبال افرادی هستم که برای آنها ایجاد روحیه جامعه به اندازه کسب درآمد مهم است. من این را به عنوان راهی برای توانمندسازی افراد متعهد که تمام انرژی خود را به کار بر روی GNU اختصاص میدهند، با نجات دادن آنها از نیاز به امرار معاش به روشی دیگر می‌بینم.

### چرا همهٔ کاربران کامپیوتر سود خواهند برد

هنگامی که GNU نوشته شود، همه قادر خواهند بود سیستم های نرم‌افزاری خوب را به صورت آزاد دریافت کنند، درست مانند هوا[3].

معنی این امر بسیار بیشتر از صرفاً صرفه جویی در هزینه‌های مجوز Unix برای همه است. این بدان معناست که از بسیاری از تلاشهای تکراری بیهوده در برنامه نویسی سیستمی اجتناب خواهد شد. این تلاش می تواند به جای آن به پیشبرد مرزهای دانش استفاده شود.

منابع سیستمی کامل برای همه در دسترس خواهد بود. در نتیجه، کاربری که به تغییرات در سیستم نیاز دارد، همیشه آزاد خواهد بود که آنها را خودش اعمال کند یا هر برنامه‌نویس یا شرکتی را که در دسترس است برای ایجاد آن تغییرات برای خود استخدام کند. کاربران دیگر تحت منت یک برنامه نویس یا شرکتی که مالک منابع است و انحصار ایجاد تغییرات را داراست، نخواهند بود.

مدارس خواهند توانست با تشویق همه دانش آموزان به مطالعه و بهبود کد سیستم، محیط آموزشی بسیار بهتری را فراهم کنند. آزمایشگاه کامپیوتر هاروارد قبلاً سیاستی داشت که هیچ برنامه‌ای که منابع آن در دسترس و دید عموم قرار نداشت نمی‌توانست روی سیستم نصب شود، و این را واقعا در عمل با جلوگیری از نصب برخی برنامه‌ها حفظ می‌کرد. من خیلی تحت تأثیر این قرار گرفتم.

در نهایت، بار اضافی در نظر گرفتن اینکه چه کسی مالک سیستم نرم‌افزاری است و چه چیزهایی مجاز به انجام آنها هستید یا خیر، از دوش برداشته می‌شود.

سازماندهی‌هایی که مردم را برای استفاده از یک برنامه مجبور به پرداخت هزینه می‌کنند، از جمله مجوز کپی‌ها، همیشه به دلیل مکانیزم‌های دست و پاگیری که برای محاسبه مبلغی که یک شخص باید (برای کدام برنامه‌ها) بپردازد، هزینه هنگفتی را به جامعه تحمیل می‌کنند. و تنها یک دولت پلیسی می تواند همه را مجبور به رعایت آنها کند. یک ایستگاه فضایی را در نظر بگیرید که در آن هوا باید با هزینه زیادی تولید شود: صدور قبض هوا به ازای هر نفس بر لیتر ممکن است عادلانه باشد، اما پوشیدن ماسک گاز محدود کننده [که میزان تنفس را اندازه‌گیری کند] تمام روز و تمام شب حتی اگر همه بتوانند هزینه قبض هوا را بپردازند، غیرقابل تحمل است. و وجود دوربین‌های تلوزیونی مستقر در همه جا برای دیدن اینکه آیا شما لحظه‌ای ماسک را بر می‌دارید یا نه، وحشتناک هستند. بهتر است کارخانه هوا را با مالیات سرانه حمایت کنید و ماسک‌ها را دور بیندازید.

کپی کردن تمام یا بخشی از یک برنامه برای یک برنامه نویس به اندازه تنفس طبیعی و کارا است. پس باید به همان اندازه آزاد باشد.

### برخی از مخالفت‌هایی با اهداف GNU که به راحتی قابل رد هستند

**_«اگر آزاد باشد، کسی از آن استفاده نمی‌کند، زیرا به این معنی است که کاربران نمی‌توانند روی هیچ حمایتی حساب باز کنند.»_**
**_«شما باید برای برنامه هزینه تعریف و دریافت کنید تا هزینه ارائه پشتیبانی را بپردازید.»_**

اگر مردم ترجیح دهند برای "گنو GNU به‌علاوه خدمات" بجای "گنو GNU آزاد بدون خدمات" هزینه کنند، شرکتی که فقط خدمات را به افرادی که GNU را بصورت آزاد دریافت کرده‌اند ارائه می‌دهد، باید سودآور باشد[4].

ما باید بین حمایت به شکل "کار برنامه نویسی واقعی" و "کمک و پشتیبانی [در ترجمهٔ گرفتن دست]" تمایز قائل شویم. مورد اول چیزی است که نمی‌توان از یک فروشنده نرم‌افزار انتظار داشت. اگر مشکل شما توسط افراد کافی به اشتراک گذاشته نشود، فروشنده به شما می‌گوید که بروید گم شوید.

اگر کسب و کار شما نیاز به اتکا بر پشتیبانی را دارد، تنها راه این است که همه منابع و ابزارهای لازم را در اختیار داشته باشید. سپس می‌توانید هر فردی را که در دسترس است برای رفع مشکل خود استخدام کنید. شما تحت منت هیچ فردی نیستید. در Unix، قیمت منابع باعث میشود این امر از گذینه های در دسترس خارج شود. با GNU این کار آسان خواهد بود. هنوز ممکن است هیچ فرد شایسته‌ای در دسترس نباشد، اما این مشکل را نمی‌توان به سازماندهی‌های توزیع نسبت داد. GNU همه مشکلات جهان را از بین نمی‌برد، فقط برخی از آنها را.

در همین حال، کاربرانی که هیچ چیز در مورد کامپیوتر نمی‌دانند نیازمند این هستند که کسی دست آنها را بگیرد: انجام کارهایی برای آنها که به راحتی می‌توانند خودشان انجام دهند، اما نمی دانند چگونه.

چنین خدماتی را می توان توسط شرکت هایی ارائه کرد که فقط خدمات کمک و پشتیبانی [در ترجمهٔ گرفتن دست] و تعمیر می فروشند. اگر این امر درست باشد که کاربران ترجیح می دهند هزینه کنند و محصولی با خدمات دریافت کنند، آنها همچنین مایل به خرید خدمات پس از دریافت رایگان محصول خواهند بود. شرکت های خدماتی در کیفیت و قیمت رقابت خواهند کرد؛ کاربران به هیچ شرکت خاصی وابسته نخواهند بود. در همین حال، کسانی از ما که به خدمات نیاز نداریم باید بتوانیم بدون پرداخت هزینه خدمات، از برنامه استفاده کنیم.

**_«شما بدون تبلیغات نمی‌توانید به تعداد زیادی از افراد دسترسی پیدا کنید و شما باید برنامه را با هزینه ارائه دهید تا پشتیبانی حاصل شود.»_**
**_«این که برنامه‌ای را که مردم می‌توانند به صورت آزاد دریافت کنند تبلیغ کنید، به هیچ دردی نمی‌خورد.»_**

روش‌های مختلفی از تبلیغات رایگان یا بسیار ارزان قیمت وجود دارد که می‌تواند برای آگاه‌سازی تعدادی از کاربران کامپیوتر درباره مواردی مانند GNU استفاده شود. اما ممکن است درست باشد که با تبلیغات، می‌توان به تعداد بیشتری از کاربران میکروکامپیوتر دسترسی یافت. اگر واقعاً اینچنین باشد، یک شرکت که خدمات کپی و ارسال GNU را با هزینه‌ای ارائه می‌دهد، باید موفقیت کافی داشته باشد تا هزینه تبلیغات خود و موارد بیشتر را پرداخت کند. به این ترتیب، فقط کاربرانی که از تبلیغات سود می‌برند، برای آن هزینه پرداخت می‌کنند.

از سوی دیگر، اگر بسیاری از افراد GNU را از دوستان خود دریافت کنند و شرکت‌های مذکور موفق نشوند، این نشان می‌دهد که تبلیغات واقعاً برای گسترش GNU ضروری نبوده است. چرا مدافعان بازار آزاد نمی‌خواهند اجازه دهند خود بازار آزاد این را تصمیم بگیرد؟" [5]

**_«شرکت من به سیستم عاملی مالکیتی برای کسب مزیت رقابتی نیاز دارد.»_**

گنو GNU سیستم عامل نرم‌افزاری را از حوزه رقابت خارج می‌کند. شما نمی‌توانید در این حوزه مزیتی کسب کنید اما رقبای شما هم نخواهند توانست بر شما مزیتی داشته باشند. شما و رقبایتان در سایر حوزه‌ها رقابت می‌کنید در حالی که در این حوزه همدیگر را تقویت می‌کنید. اگر تجارت شما فروش سیستم عامل است، GNU برایتان خوشایند نخواهد بود اما این وضعیت برای شما سخت است. اگر تجارت شما چیز دیگری است، GNU می‌تواند شما را از ورود به کسب و کار گران‌قیمت فروش سیستم‌عامل‌ها نجات دهد.

من دوست دارم که ببینم توسعهٔ GNU توسط ارائهٔ هدایای بسیاری از تولیدکنندگان و کاربران حمایت شود و کاهش هزینه برای هر کدام را به ارمغان بیاورد.[6]

**_«آیا برنامه‌نویسان سزاوار دریافت پاداش برای خلاقیت‌شان نیستند؟»_**

تنها چیزی که می‌تواند سزاوار پاداش باشد، همکاری اجتماعی است. خلاقیت می‌تواند همکاری اجتماعی باشد، اما فقط در حدی که جامعه قادر به استفاده از نتایج آن باشد. اگر برنامه‌نویسان برای ایجاد برنامه‌های نوآورانه سزاوار پاداش باشند، در عین حال آن‌ها اگر استفاده از این برنامه‌ها را محدود کنند سزاوار مجازات هستند.

**_«آیا نباید برنامه‌نویس بتواند به خاطر خلاقیتش درخواست پاداش کند؟»_**

هیچ چیز اشتباهی در دریافت حقوق برای انجام کار یا در پی افزایش درآمد بودن وجود ندارد، بشرطی که از روش‌های مخرب استفاده نشود. اما روش‌های معمول در حوزه نرم‌افزار امروزه بر مبنای تخریب است.

بهره‌کشی مالی از کاربران یک برنامه با محدود کردن استفاده آنها، امری نابودکننده تلقی میشود، زیرا محدودیت‌ها میزان و روش‌های استفاده از برنامه را کاهش می‌دهند. این باعث کاهش میزان سرمایه می‌شود که انسانیت از برنامه بدست می‌آورد. هنگامی که یک انتخاب عمدی برای محدود کردن وجود دارد، پیامدهای مخرب نیز عمدی است.

دلیل این امر که یک شهروند خوب از استفاده از این روش‌های نابودکننده برای ثروتمند شدن استفاده نمی‌کند این است که اگر همه این کار را کنند، ما همه از نابودی متقابل فقیرتر خواهیم شد. این اخلاق کانتی (Kantian) است؛ یا قانون طلایی. از آنجایی که من پیامدهایی که از این کار که هرکسی اطلاعات را برای تنها خودش نگاه دارد نتیجه می‌شود را دوست ندارم، مجبورم آن را اشتباه بدانم. به طور خاص، اینکه شخصی برای خلاقیت خود پاداشی بخواهد، توجیهی برای محروم کردن جهان به طور کلی از آن خلاقیت نیست. 

**_«آیا برنامه‌نویس‌ها از گرسنگی نمی‌میرند؟»_**

من می‌توانم جواب دهم که کسی مجبور نیست برنامه‌نویس باشد. بیشتر ماها نمی‌توانیم پولی برای ایستادن در خیابان و شکلک درآوردن بگیریم. اما به همین دلیل محکوم نیستیم که تمام عمرمان را به این کار بگذرانیم و از گرسنگی بمیریم. کار دیگری می‌کنیم.

اما این پاسخ غلط است چون فرض اصلی شخص سوال کننده را قبول می‌کند که بدون مالکیت نرم‌افزار، برنامه‌نویس‌ها بطور کلی نمی‌توانند پولی دربیاورند. این فرض بیان شده است که یا کل یا هیچ چیز [درباره پول].  

دلیل واقعی این که برنامه‌نویس‌ها از گرسنگی نمی‌میرند این است که همچنان می‌توانند برای برنامه‌نویسی پول دریافت کنند؛ البته نه به اندازه فعلی. 

محدود کردن کپی، تنها پایه تجارت نرم‌افزار نیست. در حال حاضر پایه معمول [7] حساب میشود زیرا بیشترین درآمد را دارد. اگر ممنوع شود یا توسط مشتری پذیرفته نشود، تجارت نرم‌افزار به پایه‌های دیگری متکی خواهد شد که اکنون کمتر مورد استفاده قرار می‌گیرند. معمولا همیشه راه‌های زیادی برای سازماندهی تجارتها وجود دارد.

احتمالا برنامه‌نویسی به شکلی متکی بر پایه جدید به اندازه کنونی سودآور نخواهد بود. اما این دلیل و بحثی بر علیه تغییر نیست. اکنون کسی حقوق فروشندگان فروشگاهی را بی‌عدالتی نمیپندارد. اگر برنامه‌نویس هم چنین حقوقی داشته باشد، بی‌عدالتی نخواهد بود. (به طور عملی  باز هم بیشتر از آن درآمد خواهند داشت.)

**_«آیا مردم حق کنترل اینکه از خلاقیتشان چه استفاده‌ای میشود را ندارند؟»_**

"کنترل استفاده از ایده‌ها"، در واقع کنترل زندگی مردم دیگر است؛ و معمولاً برای دشوار کردن زندگی آنها مورد استفاده قرار می‌گیرد.

افرادی که به طور دقیق به مسئله حقوق مالکیت معنوی [8] پرداخته‌اند (مانند وکلا) می‌گویند حق مالکیت معنوی ذاتی وجود ندارد. انواع حقوق ادعا شده در باب مالکیت معنوی که دولت به رسمیت می‌شناسد، با اهدافی خاص از طریق قوانین خاص ایجاد شده‌اند.

برای مثال، سیستم ثبت اختراعات [پتنت patent] برای تشویق مخترعان به افشای جزئیات اختراعاتشان ایجاد شد. هدف آن، بیشتر از کمک به مخترعان، کمک به جامعه بود. در آن زمان طول عمر 17 ساله یک پتنت نسبت به سرعت پیشروی مرزهای دانش بازه‌ای کوتاه بود. از آنجایی که مساله پتنت‌ها فقط میان تولیدکنندگان مطرح است و هزینه و زحمت ایجاد یک قرارداد مجوز [لایسنس اگریمنت] نسبت به هزینه تولید بسیار کمتر است، پتنت‌ها معمولاً خسارت زیادی وارد نمی‌کنند. آنها بیشتر افرادی را که از محصولات پتنت شده استفاده می‌کنند نیز محدود نمی‌کنند.

مفهوم حق تکثیر [copyright] در دوران باستان وجود نداشت و نویسندگان مکرراً از آثار دیگر نویسندگان به طور مفصل در آثار غیرداستانی خود استفاده می‌کردند که این کار مفید بود و تنها راه بقای بخشی از آثار برخی نویسندگان بوده است. سیستم حق تکثیر به طور صریح برای ترویج نویسندگی ایجاد شد. در حوزه‌ای که ابداع شد - یعنی کتاب که فقط از طریق ماشین چاپ قابل تکثیر بود - آسیب اندکی وارد می‌کرد و اکثر افرادی که کتاب می‌خواندند را محدود نمی‌کرد.

تمام حقوق مالکیت معنوی فقط مجوزهایی هستند که توسط جامعه اعطا شده است زیرا فکر می‌شد، به درستی یا نادرستی، که جامعه به طور کلی از داشتن آن حقوق مالکیت معنوی منفعت خواهد برد. اما در هر موقعیت خاص، باید بپرسیم: آیا واقعاً با اعطای چنین مجوزی وضعیت بهتری خواهیم داشت؟ اجازهٔ چه نوع عملی را با صدور مجوز به یک فرد می‌دهیم؟

در مورد وضعیت برنامه‌های امروز داستان بسیار متفاوت از کتاب‌های صد سال پیش است. واقعیت این است که آسان‌ترین روش برای کپی کردن یک برنامه، انتقال آن از یک همسایه به یک همسایه دیگر است. این امر را در نظر بگیرید که یک برنامه دارای هر دو نوع کد منبع و کد شی [object code] می‌باشد که از هم متمایز هستند، و این امر که یک برنامه برای استفاده طراحی شده است بیشتر از اینکه مورد خواندن و لذت‌بردن قرار گیرد. موارد مذکور با هم ترکیب شده و یک وضعیت را ایجاد می‌کند که در آن فردی که حق تکثیر را اجرا می‌کند، در حقیقت جامعه را در سطوح مادی و معنوی آسیب می‌رساند؛ درصورتی که فرد بدون توجه به اینکه آیا قانون به او اجازه می‌دهد یا خیر نباید این کار را انجام دهد.

**_«رقابت باعث میشود کارها بهتر انجام شوند.»_**

الگوی رقابت مانند مسابقه است: با تقدیر از برنده، ما همه را تشویق می‌کنیم تا سریعتر بدوند. هنگامی که سرمایه‌داری واقعاً به این صورت عمل می‌کند، کارش را به خوبی انجام می‌دهد.؛ اما مدافعان آن اشتباه می‌کنند که فرض می‌کنند همیشه بدین شکل کارا خواهد بود. اگر دوندگان فراموش کنند که پاداش به چه منظوری ارائه می‌شود و تنها مشتاق پیروزی باشند، ممکن است راهبردهای دیگری مانند حمله به دیگران را پیش بگیرند. اگر دوندگان دیگر به درگیری جسمی بپردازند، دیرتر به خط پایان خواهند رسید. 

نرم‌افزارهای مالکیتی و محرمانه معادل اخلاقی دوندگانی هستند که درگیر دعوا مشت‌زنی هستند. متاسفانه تنها داوری که داریم، ظاهراً به مبارزات اعتراض ندارد؛ فقط آنها را منظم می‌کند("با شلیک صدای یک گلوله پس از هر ده راند مسابقه"). او واقعاً باید آنها را متوقف کند و مابین دوندگان برای حتی تلاش به منظور درگیری هم مجازات در نظر بگیرد.

**_«آیا بدون انگیزه مالی همه برنامه‌نویسی را رها نمیکنند؟»_**

در واقع، بسیاری از مردم بدون هرگونه انگیزه مالی هم برنامه‌نویسی می‌کنند. برای برخی افراد، معمولاً افراد بااستعداد، برنامه‌نویسی چنان جذابیتی دارد که در برابر آن نمیتوان مقاومت کرد. موسیقی‌دانان حرفه‌ای زیادی وجود دارند که با وجود اینکه امیدی به تامین امرار معاش از این راه ندارند، باز هم موسیقی را ادامه می‌دهند.

اما واقعاً این سؤال که معمولاً نیز مطرح می‌شود، مناسب این شرایط نیست. حقوق برنامه‌نویسان از بین نخواهد رفت، بلکه کاهش خواهد یافت. پس سؤال صحیح این است که آیا با کاهش انگیزه مالی کسی باز هم برنامه‌نویسی می‌کند؟ تجربه من نشان می‌دهد که می‌کنند.

برای بیش از ده سال، بسیاری از بهترین برنامه‌نویسان جهان در آزمایشگاه تحقیقات هوش مصنوعی با درآمد کمتر از جاهای دیگر کار می‌کردند. آنها جوایز غیرمادی مانند شهرت و احترام به دست آوردند. و خلاقیت که امری سرگرم کننده و جالب است، درون خودش پاداشی به همراه دارد.

سپس بیشتر آنها زمانی که فرصت همان کار جذاب با دستمزد خیلی بیشتر را پیدا کردند آنجا را ترک کردند.

واقعیت نشان می‌دهد که مردم برای دلایلی غیر از ثروت‌اندوزی هم برنامه‌نویسی می‌کنند؛ اما اگر فرصتی برای کسب درآمد زیاد هم به آنها داده شود، آنها انتظار و تقاضای آن را خواهند داشت.  سازمان‌های با حقوق پایین در رقابت با سازمان‌های با حقوق بالا عملکرد ضعیفی دارند، اما اگر سازمان‌های با حقوق بالا ممنوع شوند، آنها نیز نیازی به عملکرد ضعیف ندارند.

**_«ما به برنامه‌نویسان به شدت نیاز داریم. اگر آنها از ما بخواهند که کمک به همسایه‌هایمان را متوقف کنیم، ما مجبوریم اطاعت کنیم.»_**

هرگز به گونه‌ای به آنها نیاز ندارید که از این نوع تقاضاها اطاعت کنید. به خاطر داشته باشید: میلیون‌ها دلار برای دفاع، اما نه حتی یک سِنت برای باج و خراج! [tribute]

**_«برنامه‌نویسان باید از طریقی کسب درآمد کرده و زندگی خود را بگذرانند.»_**

در کوتاه مدت، این درست است. با این حال، راه‌های زیادی برای کسب درآمد برای برنامه‌نویسان وجود دارد که بدون فروش حق استفاده از یک برنامه، می‌توانند از آن استفاده کنند. این روش در حال حاضر به دلیل اینکه بیشترین درآمد را برای برنامه‌نویسان و تاجران به همراه دارد، رایج است، نه به دلیل اینکه تنها راهی برای کسب درآمد است. اگر می‌خواهید، راه‌های دیگری را نیز می‌توانید پیدا کنید. اینجا چند مثال آورده شده است:

یک تولید کننده کامپیوتر جدید، که برای پورت کردن سیستم عامل بر روی سخت‌افزار جدید، پول می‌دهد.

فروش خدمات آموزش، سرویسهای نگهداری و پشتیبانی نیز میتوانند برنامه‌نویسان را به کار گیرند.

افرادی که ایده‌های جدیدی دارند می‌توانند برنامه‌ها را به صورت آزادافزار یا فری‌وِر  [فری‌وِر freeware]  ارائه دهند و از کاربران رضایت‌مند خواستار کمک‌های مالی شوند یا خدمات پشتیبانی را به فروش برسانند. من افرادی را ملاقات کرده‌ام که به این روش با موفقیت کار می‌کنند.

کاربرانی که نیازهای مشابهی دارند، می‌توانند گروه‌های کاربری تشکیل دهند و عضویت پرداخت کنند. یک گروه با شرکت‌های برنامه‌نویسی قرارداد می‌بندد تا برنامه‌هایی را که اعضای گروه می‌خواهند استفاده کنند، بنویسند.

هر نوع توسعه‌ای می‌تواند با مالیات نرم‌افزاری تامین شود:

فرض کنید هر کسی که یک کامپیوتر می‌خرد، باید x درصد از قیمت را به عنوان مالیات نرم‌افزاری پرداخت کند. دولت این پول را به یک سازمان مانند NSF می‌دهد تا برای توسعه نرم‌افزارها هزینه کند.

اما اگر خریدار کامپیوتر خود به توسعه نرم‌افزار کمک مالی کند، می‌تواند اعتباری در برابر مالیات بگیرد. او می‌تواند به پروژه‌ای که خودش انتخاب کرده است کمک کند - اغلب به دلیل اینکه امیدوار است پس از اتمام از نتایج آن استفاده کند. او می‌تواند برای هر میزان کمک مالی تا حداکثر مالیاتی که باید پرداخت کند، اعتبار بگیرد.

میزان کل مالیات می‌تواند با رأی پرداخت‌کنندگان مالیات تعیین شود، درست به ترتیب وزن مالیاتی که بر آنها تعلق می‌گیرد.

پیامدها:

* جامعه کاربران کامپیوتری توسعه نرم‌افزار را حمایت می‌کند.
* این جامعه تصمیم می‌گیرد که چه میزان حمایت لازم است.
* کاربرانی که به این امر اهمیت میدهند که سهام آنان در کدام پروژه‌ها استفاده شده است، میتوانند این امر را خودشان تصمیم بگیرند.

در طولانی مدت، آزاد کردن برنامه‌ها یک قدم به سوی جهان پساکمیابی [postscarcity] است، جایی که هیچ کس نیازی به کار سخت برای تأمین معاش ندارد. افراد آزاد خواهند بود که پس از اینکه ده ساعت هفته را برای وظایف لازم مانند تشریح قوانین، مشاوره خانوادگی، تعمیر ربات و بررسی سیارک‌ها صرف کرده‌اند، وقت خود را برای فعالیت‌هایی که خودشان را شاد می‌کند، مانند برنامه‌نویسی، بگذارند. نیازی به کسب درآمد از برنامه‌نویسی نخواهد بود.

در طولانی مدت، آزاد کردن برنامه‌ها یک قدم به سوی جهان پساکمیابی [postscarcity] است، جایی که هیچ کس نیازی به کار سخت برای تأمین معاش ندارد. افراد آزاد خواهند بود که پس از اینکه ده ساعت هفته را برای وظایف لازم مانند تشریح قوانین، مشاوره خانوادگی، تعمیر ربات و بررسی سیارک‌ها صرف کرده‌اند، وقت خود را برای فعالیت‌هایی که خودشان را شاد می‌کند، مانند برنامه‌نویسی، بگذارند. نیازی به کسب درآمد از برنامه‌نویسی نخواهد بود.

### پاورقی‌ها 

1- در اینجا بی‌توجهی در استفاده از عبارت‌ها وجود دارد. هدف این بود که هیچ کس نباید برای کسب اجازه استفاده از سیستم GNU پول بپردازد. اما این عبارت‌ها واضح نیستند و مردم آن‌ها را به این معنا می‌پندارند که کپی‌های GNU همیشه با هزینه کم یا بدون هزینه توزیع شوند. این هیچوقت هدف ما نبود؛ در ادامه بیانیه [manifesto] احتمال اینکه شرکت‌ها خدمات توزیع را برای کسب سود ارائه دهند، ذکر شده است. در نتیجه، من یاد گرفته‌ام که بین "آزادی" و "رایگانی" به دقت تفکیک کنم. نرم‌افزار آزاد، نرم‌افزاری است که کاربران حق توزیع و تغییر آن را دارند. برخی کاربران ممکن است کپی هایی را بدون هزینه دریافت کنند، در حالی که دیگران برای دریافت کپی ها پرداخت می کنند - و اگر این پول‌ها به بهبود نرم‌افزار کمک کنند، خیلی هم بهتر است. مهم این است که هر کسی که یک کپی دارد، آزادی همکاری با دیگران در استفاده از آن را دارد.

2- عبارت "هدیه دادن" نشان دهنده این بود که من هنوز به طور واضح مسئله قیمت را از مسئله آزادی تفکیک نکرده بودم. ما در حال حاضر توصیه می کنیم که این عبارت را در صحبت درباره نرم‌افزار آزاد اجتناب کنید. برای توضیحات بیشتر به "[عبارات گیج کننده](https://www.gnu.org/philosophy/words-to-avoid.html#GiveAwaySoftware)" مراجعه کنید.

3- اینجا یک جایی دیگری است که من به دقت بین دو معنای مختلف "free" تمایز قائل نشدم. عبارت به شکل فعلی غلط نیست - شما می توانید کپی های نرم‌افزار GNU را از دوستان خود یا از طریق اینترنت بدون هزینه دریافت کنید. اما این عبارت ایده اشتباهی را نشان می‌دهد.

4- چندین شرکت مشابه این حال حاضر وجود دارند.

5- اگرچه بنیاد نرم‌افزار آزاد به جای یک شرکت، یک خیریه است، اما برای 10 سال از خدمات توزیع خود برای جمع آوری بیشترین بخش از منابع خود استفاده کرده است. شما می توانید از فروشگاه FSF (https://shop.fsf.org/) برای حمایت از کار آنها، محصولاتی را سفارش دهید.

6- یک گروه از شرکت‌های کامپیوتری در حدود سال 1991 برای حمایت از نگهداری کامپایلر C GNU، منابع خود را تجمیع کردند.

7- فکر می کنم در بیان اینکه نرم‌افزار مالکیتی، پایه شایع ترین روش کسب درآمد در نرم‌افزار است، اشتباه کرده‌ام. به نظر می رسد که در واقع شایع ترین مدل کسب و کار، و توسعه نرم‌افزار سفارشی بوده و همچان نیز هست. این امکان جمع آوری اجاره‌ها را ندارد، بنابراین کسب و کار باید برای کسب درآمد، کار واقعی را انجام دهد. کسب و کار نرم‌افزار سفارشی، در یک دنیای نرم‌افزار آزاد، بیشتر یا کمتر بدون تغییر، وجود خواهد داشت. بنابراین، من دیگر انتظار ندارم که برنامه‌نویسانی که بیشترین حقوق را میگیرند، در یک دنیای نرم‌افزار آزاد، کمتر از قبل درآمد کسب کنند.

8- در دهه 1980 من هنوز متوجه نشده بودم که صحبت از "مشکل" "مالکیت فکری" چقدر گیج کننده است. این عبارت بدون شک جهت‌دار و سوگیر [bias شده] است؛ اما نکته ابهام برانگیز دیگر این است که این عبارت، قوانین مختلف و متفاوتی را که مسائل بسیار متفاوتی را ایجاد می‌کنند، با هم ترکیب می‌کند. امروزه، من به مردم توصیه می کنم که به طور کامل از عبارت "مالکیت فکری" اجتناب کنند، مگر اینکه بخواهند دیگران را به این نتیجه برسانند که این قوانین یک مسئله یکپارچه را شکل می‌دهند. راه درست برای روشن شدن بحث این است که در مورد پتنت‌ها، کپی‌رایت و علامتهای تجاری [trademarks] به طور جداگانه بحث کنیم. برای اینکه متوجه شوید چگونه این عبارت باعث ایجاد ابهام و سردرگمی میشود به [توضیحات بیشتر](https://www.gnu.org/philosophy/not-ipr.html) مراجعه کنید.

9- در ادامه، ما یاد گرفتیم که بین "نرم‌افزار آزاد" [free software] و "آزادافزار" [فری‌وِر freeware] تفکیک قائل شویم. عبارت "فری‌وِر" به معنای نرم‌افزاری است که شما مجوز توزیع آن را دارید، اما معمولاً شما مجوز مطالعه و تغییر کد منبع را ندارید، بنابراین بیشتر آن نرم‌افزارها "نرم‌افزار آزاد" نیستند. برای توضیحات بیشتر به "[کلمات و عبارات گیج کننده](https://www.gnu.org/philosophy/words-to-avoid.html#Freeware)" مراجعه کنید.

### سخن مترجم:

به علت تخصصی بودن متن بیانیه، این ترجمه بخصوص با رعایت اصول بسیار ظریفی صورت گرفته است که ترجمه را با دقتی در لول کلمات، منطبق و وفادار به متن بسازد. در صورت دیدن هر گونه اشکالی در ترجمه، چه معنوی و چه نگارشی، میتوانید آنرا از راه‌های زیر گزارش نمائید:
* https://github.com/TadavomnisT/Free_Books-Documents/issues
* behroora@yahoo.com

همچنین چند نکته در ترجمه شایان ذکر است:

* عبارت "Public Domain" به عنوان "مالکیت عمومی" ترجمه شده است، برای اطلاعات بیشتر "[Public Domain](https://en.wikipedia.org/wiki/Public_domain)" و "[مالکیت عمومی](https://fa.wikipedia.org/wiki/%D9%85%D8%A7%D9%84%DA%A9%DB%8C%D8%AA_%D8%B9%D9%85%D9%88%D9%85%DB%8C)" را در ویکی‌پدیا مطالعه بفرمائید.

* عبارت "Murphy" به عنوان "قانون مورفی" ترجمه شده است، این قانون به صراحت بیان میکند که:
[Anything that can go wrong will go wrong.](https://en.wikipedia.org/wiki/Murphy's_law)
[هر خطای ممکن رخ خواهد داد.](https://fa.wikipedia.org/wiki/%D9%82%D9%88%D8%A7%D9%86%DB%8C%D9%86_%D9%85%D9%88%D8%B1%D9%81%DB%8C)

برای اطلاعات بیشتر مقالات مرتبط در ویکی‌پدیا را مطالعه بفرمائید.

* عبارت "state-of-the-art" به عنوان "لبه دانش" یا "مرزهای دانش" ترجمه شده است که عبارتی آکادمیک است که بعدا در مقالات دیگر به آن میپردازیم.

* عبارت "nroff" نام یک برنامه فرمت‌دهنده در یونیکس است، برای اطلاعات بیشتر [ویکی‌پدیا](https://en.wikipedia.org/wiki/Nroff) را مطالعه بفرمائید.

* عبارات فلسفی مانند "postscarcity" و "bureaucracy" و عبارات علمی/ریاضیاتی مانند "isometric" بصورت انگلیسی و به همراه معادل فارسی ترجمه شده‌اند که برای درک مفهوم جمله، باید قبلتر معنی آنها را مطالعه بفرمائيد.

مترجم:
بهراد.ب
behroora@yahoo.com
github.com/TadavomnisT

_____________________________________________________________________
_____________________________________________________________________
_____________________________________________________________________


## GNU Manifesto
## بیانیه گنو GNU

_The GNU Manifesto (which appears below) was written by [Richard Stallman](https://www.stallman.org/) in 1985 to ask for support in developing the GNU operating system. Part of the text was taken from the original announcement of 1983. Through 1987, it was updated in minor ways to account for developments; since then, it seems best to leave it unchanged._

_بیانیه گنو (که در زیر آمده است) توسط [ریچارد استالمن](https://www.stallman.org/) در سال 1985 برای درخواست حمایت در توسعه سیستم عامل گنو نوشته شد. بخشی از متن از اعلامیه اصلی سال 1983 گرفته شده است. تا سال 1987، به دلیل تحولات، تغییرات جزئی در آن ایجاد شد. از آن زمان، به نظر می رسد که بهتر است بدون تغییر باقی بماند._

_Since that time, we have learned about certain common misunderstandings that different wording could help avoid. Footnotes added since 1993 help clarify these points._

_از آن زمان، ما در مورد برخی سوء تفاهم های رایج که جمله‌بندی های مختلف می تواند از آنها جلوگیری کند، مباحثی را آموخته ایم. پاورقی هایی که از سال 1993 اضافه شده اند به شفاف سازی این نکات کمک می کنند._

_If you want to install the GNU/Linux system, we recommend you use one of the [100% free software GNU/Linux distributions](https://www.gnu.org/distros). For how to contribute, see [gnu.org/help](https://www.gnu.org/help/help.html)._

اگر می خواهید سیستم GNU/Linux را نصب کنید، توصیه می کنیم از [یکی از توزیع های GNU/Linux که  100% نرم‌افزار آزاد هستند](https://www.gnu.org/distros) استفاده کنید. برای اطلاع از مشارکت، به [gnu.org/help](https://www.gnu.org/help/help.html) مراجعه کنید.

_The GNU Project is part of the Free Software Movement, a campaign for [freedom for users of software](https://www.gnu.org/philosophy/free-sw.html). It is a mistake to associate GNU with the term “open source”—that term was coined in 1998 by people who disagree with the Free Software Movement's ethical values. They use it to promote an [amoral approach](https://www.gnu.org/philosophy/open-source-misses-the-point.html) to the same field._

پروژه GNU بخشی از جنبش نرم‌افزار آزاد است، یک کمپین برای [آزادی کاربران نرم‌افزار](https://www.gnu.org/philosophy/free-sw.html). مرتبط کردن GNU با اصطلاح متن-باز یا “open source” اشتباه است - این اصطلاح در سال 1998 توسط افرادی ابداع شد که با ارزش‌های اخلاقی جنبش نرم‌افزار آزاد مخالف هستند. آنها از آن برای تبلیغ [رویکردی غیراخلاقی](https://www.gnu.org/philosophy/open-source-misses-the-point.html) در همان زمینه استفاده می‌کنند.

### What's GNU? Gnu's Not Unix!
### گنو چیست؟ گنو یونیکس نیست!

GNU, which stands for Gnu's Not Unix, is the name for the complete Unix-compatible software system which I am writing so that I can give it away free to everyone who can use it [1]. Several other volunteers are helping me. Contributions of time, money, programs and equipment are greatly needed.

عبارت GNU مخفف Gnu's Not Unix (گنو، یونیکس نیست) و نام یک سیستم نرم‌افزاری کامل سازگار با یونیکس است که من (ریچارد استالمن) در حال نوشتن آن هستم تا بتوانم آن را به صورت آزاد به همه کسانی که می‌توانند از آن استفاده کنند، هدیه بدهم. [1]چندین داوطلب دیگر نیز به من کمک می‌کنند. کمک‌های زمانی، مالی، برنامه‌ای و تجهیزاتی بسیار مورد نیاز است.

So far we have an Emacs text editor with Lisp for writing editor commands, a source level debugger, a yacc-compatible parser generator, a linker, and around 35 utilities. A shell (command interpreter) is nearly completed. A new portable optimizing C compiler has compiled itself and may be released this year. An initial kernel exists but many more features are needed to emulate Unix. When the kernel and compiler are finished, it will be possible to distribute a GNU system suitable for program development. We will use TeX as our text formatter, but an nroff is being worked on. We will use the free, portable X Window System as well. After this we will add a portable Common Lisp, an Empire game, a spreadsheet, and hundreds of other things, plus online documentation. We hope to supply, eventually, everything useful that normally comes with a Unix system, and more.

تاکنون ما یک ویرایشگر متن Emacs با Lisp برای نوشتن دستورات ویرایشگر، یک دیباگر سطح منبع، یک تولیدکننده پارسر سازگار با yacc، یک لینکر و حدود 35 ابزار داریم. یک شل (مفسر دستورات) نیز تقریباً تکمیل شده است. یک کامپایلر C بهینه‌ساز و قابل حمل جدید خود را کامپایل کرده است و ممکن است امسال منتشر شود. یک هسته [کرنل kernel] اولیه وجود دارد، اما ویژگی‌های [feature] بیشتری برای شبیه‌سازی یونیکس مورد نیاز است. هنگامی که توسعه کرنل و کامپایلر به پایان برسند، امکان توزیع یک سیستم GNU مناسب برای توسعه برنامه وجود خواهد داشت. ما از TeX به عنوان فرمت‌کننده [formatter] متن خود استفاده خواهیم کرد، اما روی یک nroff نیز کار می‌شود. ما همچنین از سیستم پنجره‌ای X قابل حمل آزاد استفاده خواهیم کرد. پس از این، یک Common Lisp قابل حمل، یک بازی Empire، یک صفحه گسترده و صدها چیز دیگر به علاوه مستندات آنلاین اضافه خواهیم کرد. ما امیدواریم که بتوانیم در نهایت همه چیزهای مفیدی که معمولاً با یک سیستم یونیکس ارائه می‌شود به علاوه چیزهای بیشتر را تهیه کنیم. 

GNU will be able to run Unix programs, but will not be identical to Unix. We will make all improvements that are convenient, based on our experience with other operating systems. In particular, we plan to have longer file names, file version numbers, a crashproof file system, file name completion perhaps, terminal-independent display support, and perhaps eventually a Lisp-based window system through which several Lisp programs and ordinary Unix programs can share a screen. Both C and Lisp will be available as system programming languages. We will try to support UUCP, MIT Chaosnet, and Internet protocols for communication.

گنو GNU قادر خواهد بود برنامه‌های یونیکس را اجرا کند، اما با یونیکس یکسان نخواهد بود. ما تمام بهبودهای ممکن را که بر اساس تجربه خود با سایر سیستم‌های عامل دیگر میشناسیم، انجام خواهیم داد. به طور خاص، ما قصد داریم نام‌های فایل بلندتر، شماره‌های نسخه فایل، یک سیستم-فایل ضد خرابی، احتمالاً تکمیل نام فایل، پشتیبانی از نمایش مستقل از ترمینال و شاید در نهایت یک سیستم پنجره‌ای مبتنی بر Lisp را داشته باشیم که از طریق آن چندین برنامه Lisp و برنامه‌های معمولی یونیکس بتوانند یک صفحه را به اشتراک بگذارند. هم C و هم Lisp به عنوان زبان‌های برنامه‌نویسی سیستمی در دسترس خواهند بود. ما سعی خواهیم کرد از پروتکل‌های UUCP، MIT Chaosnet و اینترنت برای ارتباطات پشتیبانی کنیم.

GNU is aimed initially at machines in the 68000/16000 class with virtual memory, because they are the easiest machines to make it run on. The extra effort to make it run on smaller machines will be left to someone who wants to use it on them.

هدف ابتدایی طراحی گنو GNU برای ماشین‌هایی در کلاس 68000/16000 با حافظه مجازی است، زیرا اینها آسان‌ترین ماشین‌هایی هستند که می‌توانند آن را اجرا کنند. تلاش‌های بیشتر برای اجرای آن روی ماشین‌های کوچکتر بر عهده کسی گذاشته خواهد شد که می‌خواهد از آن روی آن‌ها استفاده کند.

To avoid horrible confusion, please pronounce the g in the word “GNU” when it is the name of this project.

برای جلوگیری از سردرگمی وحشتناک، لطفاً حرف g در کلمه “GNU” را زمانی که صحبت از نام این پروژه است تلفظ کنید.

### Why I Must Write GNU
### چرا من باید GNU را بنویسم

I consider that the Golden Rule requires that if I like a program I must share it with other people who like it. Software sellers want to divide the users and conquer them, making each user agree not to share with others. I refuse to break solidarity with other users in this way. I cannot in good conscience sign a nondisclosure agreement or a software license agreement. For years I worked within the Artificial Intelligence Lab to resist such tendencies and other inhospitalities, but eventually they had gone too far: I could not remain in an institution where such things are done for me against my will.

من معتقدم که قاعده طلایی ایجاب می‌کند که اگر برنامه‌ای را دوست دارم، باید آن را با دیگران که دوستش دارند به اشتراک بگذارم. فروشندگان نرم‌افزار می‌خواهند کاربران را تقسیم و تسخیر کنند و از هر کاربر بخواهند که موافقت کند که آن [نرم‌افزار] را با دیگران به اشتراک نگذارد. من از شکستن همبستگی با سایر کاربران به این طریق امتناع می‌کنم. من نمی‌توانم با وجدان راحت یک توافق نامه عدم افشای اطلاعات یا یک توافق نامه مجوز نرم‌افزار را امضا کنم.
سال‌هاست که در آزمایشگاه هوش مصنوعی کار می‌کنم تا در برابر چنین تمایلاتی و چنین حرکات ضدِ نوع‌دوستانه‌ای مقاومت کنم، اما در نهایت آنها از حد گذشته بودند: من نمی‌توانستم در مؤسسه‌ای بمانم که چنین کارهایی برای من بر خلاف میل من انجام می‌شود.

So that I can continue to use computers without dishonor, I have decided to put together a sufficient body of free software so that I will be able to get along without any software that is not free. I have resigned from the AI Lab to deny MIT any legal excuse to prevent me from giving GNU away [2].

برای اینکه بتوانم به استفاده از کامپیوترها بدون بی‌شرافتی ادامه دهم، تصمیم گرفته‌ام مجموعه‌ای کافی از نرم‌افزارهای آزاد را گرد هم بیاورم تا بتوانم با نرم‌افزاری که آزاد نیست، کنار بیایم. من از آزمایشگاه هوش مصنوعی استعفا داده‌ام تا به MIT هیچ بهانه قانونی برای جلوگیری از هدیه دادن GNU ندهم.[2]

### Why GNU Will Be Compatible with Unix
### چرا GNU با Unix سازگار خواهد بود

Unix is not my ideal system, but it is not too bad. The essential features of Unix seem to be good ones, and I think I can fill in what Unix lacks without spoiling them. And a system compatible with Unix would be convenient for many other people to adopt.

یونیکس Unix سیستم ایده آل من نیست، اما خیلی هم بد نیست. به نظر می رسد ویژگی های اساسی Unix خوب باشد، و فکر می کنم می توانم کمبودهای Unix را بدون خراب کردن آنها جبران کنم. و یک سیستم سازگار با Unix برای بسیاری از افراد دیگر برای پذیرش راحت خواهد بود.

### How GNU Will Be Available
### گنو GNU چگونه در دسترس خواهد بود

GNU is not in the public domain. Everyone will be permitted to modify and redistribute GNU, but no distributor will be allowed to restrict its further redistribution. That is to say, [proprietary](https://www.gnu.org/philosophy/categories.html#ProprietarySoftware) modifications will not be allowed. I want to make sure that all versions of GNU remain free.

گنو GNU در مالکیت عمومی نیست. به همه اجازه داده می شود که GNU را اصلاح و توزیع کنند، اما به هیچ توزیع کننده ای اجازه داده نمی شود که توزیع مجدد آن را محدود کند. به این معنا که تغییرات [اختصاصی [proprietary]](https://www.gnu.org/philosophy/categories.html#ProprietarySoftware) مجاز نیستند. من می خواهم مطمئن شوم که همه نسخه های GNU آزاد باقی می مانند.

### Why Many Other Programmers Want to Help
### چرا بسیاری از برنامه‌نویسان دیگر می خواهند کمک کنند

I have found many other programmers who are excited about GNU and want to help.

من بسیاری از برنامه نویسان دیگر را پیدا کرده‌ام که از GNU هیجان زده هستند و می‌خواهند کمک کنند.

Many programmers are unhappy about the commercialization of system software. It may enable them to make more money, but it requires them to feel in conflict with other programmers in general rather than feel as comrades. The fundamental act of friendship among programmers is the sharing of programs; marketing arrangements now typically used essentially forbid programmers to treat others as friends. The purchaser of software must choose between friendship and obeying the law. Naturally, many decide that friendship is more important. But those who believe in law often do not feel at ease with either choice. They become cynical and think that programming is just a way of making money.

بسیاری از برنامه‌نویسان از تجاری‌سازی نرم‌افزار سیستمی ناراضی هستند. ممکن است به آنها امکان دهد پول بیشتری به دست آورند، اما آنها را ملزم می کند که به طور کلی، بجای اینکه احساس رفاقت با دیگر برنامه‌نویسان کنند، احساس درگیری با سایر برنامه‌نویسان داشته باشند. رفتار اساسی دوستی در میان برنامه‌نویسان به اشتراک گذاشتن برنامه ها است؛ مقدمات بازاریابی که اکنون به طور معمول استفاده می‌شود اساساً برنامه‌نویسان ممنوع می‌کند که با دیگران به عنوان دوست رفتار کنند. خریدار نرم‌افزار باید بین دوستی و اطاعت از قانون یکی را انتخاب کند. به طور طبیعی، بسیاری تصمیم می گیرند که دوستی مهمتر است. اما کسانی که به قانون اعتقاد دارند اغلب با هیچ یک از این دو گزینه احساس راحتی نمی‌کنند. آنها بدبین می‌شوند و فکر می کنند برنامه‌نویسی فقط راهی برای کسب درآمد است.

By working on and using GNU rather than proprietary programs, we can be hospitable to everyone and obey the law. In addition, GNU serves as an example to inspire and a banner to rally others to join us in sharing. This can give us a feeling of harmony which is impossible if we use software that is not free. For about half the programmers I talk to, this is an important happiness that money cannot replace.

با کار بر روی GNU و استفاده از آن به جای برنامه‌های اختصاصی، می‌توانیم پذیرای همه باشیم و از قانون اطاعت کنیم. علاوه بر این، GNU به عنوان الگویی برای الهام بخشیدن و پرچمی برای ترغیب دیگران به پیوستن به ما در به-اشتراک‌گذاری عمل می‌کند. این می تواند به ما احساس هماهنگی بدهد، که با استفاده از نرم‌افزاری غیر آزاد، غیرممکن است. برای حدود نیمی از برنامه نویسان که با آنها صحبت کرده‌ام، این شادی مهمی است که پول نمی‌تواند جایگزین آن شود.

### How You Can Contribute
### چگونه می توانید مشارکت کنید

(Nowadays, for software tasks to work on, see the [High Priority Projects](http://fsf.org/campaigns/priority-projects) list and the [GNU Help Wanted list](http://savannah.gnu.org/people/?type_id=1), the general task list for GNU software packages. For other ways to help, see the guide to helping the GNU operating system.)

(امروزه، برای پیدا کردن تسکهای نرم‌افزاری و کار کردن روی آنها، لیست پروژه‌های [با اولویت بالا](http://fsf.org/campaigns/priority-projects) و [لیست درخواست کمک GNU](http://savannah.gnu.org/people/?type_id=1) را ببینید. این لیست‌ها تسکهای عمومی برای بسته‌های نرم‌افزاری GNU را ارائه می‌دهند. برای راه‌های دیگر کمک، [راهنمای کمک به سیستم عامل GNU](https://www.gnu.org/help/help.html) را ببینید.)

I am asking computer manufacturers for donations of machines and money. I'm asking individuals for donations of programs and work.

من از تولیدکنندگان کامپیوتر برای اهدای ماشین و پول درخواست کمک می‌کنم. من از افراد نیز برای اهدای برنامه‌ها و کارهایشان درخواست می‌کنم.

One consequence you can expect if you donate machines is that GNU will run on them at an early date. The machines should be complete, ready to use systems, approved for use in a residential area, and not in need of sophisticated cooling or power.

یکی از نتایجی که می‌توانید در صورت اهدای ماشین انتظار داشته باشید این است که GNU زودتر روی آنها اجرا شود. ماشین ها باید سیستم های کامل و آماده استفاده باشند که برای استفاده در مناطق مسکونی تأیید شده‌اند و به خنک کننده یا برق پیچیده نیاز ندارند.

I have found very many programmers eager to contribute part-time work for GNU. For most projects, such part-time distributed work would be very hard to coordinate; the independently written parts would not work together. But for the particular task of replacing Unix, this problem is absent. A complete Unix system contains hundreds of utility programs, each of which is documented separately. Most interface specifications are fixed by Unix compatibility. If each contributor can write a compatible replacement for a single Unix utility, and make it work properly in place of the original on a Unix system, then these utilities will work right when put together. Even allowing for Murphy to create a few unexpected problems, assembling these components will be a feasible task. (The kernel will require closer communication and will be worked on by a small, tight group.)

من برنامه‌نویسان زیادی را پیدا کرده‌ام که مایلند به صورت پاره‌وقت برای GNU کار کنند. برای اکثر پروژه ها، هماهنگی چنین کار توزیع شده پاره وقتی بسیار سخت خواهد بود. قطعات نوشته شده مستقل با هم کار نمی کنند. اما برای کار خاص جایگزینی Unix، این مشکل وجود ندارد. یک سیستم کامل Unix شامل صدها برنامه کاربردی است که هر یک از آنها به طور جداگانه مستند شده‌اند. اکثر مشخصه‌های رابط [interface] برای سازگاری با Unix طراحی شده‌اند. اگر هر مشارکت کننده بتواند یک جایگزین سازگار برای یک ابزار Unix بنویسد و آن را به نحوی بنویسد که درست به جای نسخه اصلی در یک سیستم Unix کار کند، آنگاه این ابزارها هنگام قرار گرفتن در کنار هم به درستی کار خواهند کرد. حتی با در نظر گرفتن قانون مورفی [Murphy] برای ایجاد چند مشکل غیرمنتظره، مونتاژ این اجزا یک کار قابل انجام خواهد بود. (هسته نیاز به ارتباط نزدیک‌تر دارد و توسط یک گروه کوچک و فشرده کار خواهد شد.)

If I get donations of money, I may be able to hire a few people full or part time. The salary won't be high by programmers' standards, but I'm looking for people for whom building community spirit is as important as making money. I view this as a way of enabling dedicated people to devote their full energies to working on GNU by sparing them the need to make a living in another way.

اگر کمک مالی دریافت کنم، ممکن است بتوانم چند نفر را به صورت تمام وقت یا پاره وقت استخدام کنم. حقوق و دستمزد با توجه به استانداردهای برنامه نویسان بالا نخواهد بود، اما من به دنبال افرادی هستم که برای آنها ایجاد روحیه جامعه به اندازه کسب درآمد مهم است. من این را به عنوان راهی برای توانمندسازی افراد متعهد که تمام انرژی خود را به کار بر روی GNU اختصاص میدهند، با نجات دادن آنها از نیاز به امرار معاش به روشی دیگر می‌بینم.

### Why All Computer Users Will Benefit
### چرا همهٔ کاربران کامپیوتر سود خواهند برد

Once GNU is written, everyone will be able to obtain good system software free, just like air [3].

هنگامی که GNU نوشته شود، همه قادر خواهند بود سیستم های نرم‌افزاری خوب را به صورت آزاد دریافت کنند، درست مانند هوا[3].

This means much more than just saving everyone the price of a Unix license. It means that much wasteful duplication of system programming effort will be avoided. This effort can go instead into advancing the state of the art.

معنی این امر بسیار بیشتر از صرفاً صرفه جویی در هزینه‌های مجوز Unix برای همه است. این بدان معناست که از بسیاری از تلاشهای تکراری بیهوده در برنامه نویسی سیستمی اجتناب خواهد شد. این تلاش می تواند به جای آن به پیشبرد مرزهای دانش استفاده شود.

Complete system sources will be available to everyone. As a result, a user who needs changes in the system will always be free to make them himself, or hire any available programmer or company to make them for him. Users will no longer be at the mercy of one programmer or company which owns the sources and is in sole position to make changes.

منابع سیستمی کامل برای همه در دسترس خواهد بود. در نتیجه، کاربری که به تغییرات در سیستم نیاز دارد، همیشه آزاد خواهد بود که آنها را خودش اعمال کند یا هر برنامه‌نویس یا شرکتی را که در دسترس است برای ایجاد آن تغییرات برای خود استخدام کند. کاربران دیگر تحت منت یک برنامه نویس یا شرکتی که مالک منابع است و انحصار ایجاد تغییرات را داراست، نخواهند بود.

Schools will be able to provide a much more educational environment by encouraging all students to study and improve the system code. Harvard's computer lab used to have the policy that no program could be installed on the system if its sources were not on public display, and upheld it by actually refusing to install certain programs. I was very much inspired by this.

مدارس خواهند توانست با تشویق همه دانش آموزان به مطالعه و بهبود کد سیستم، محیط آموزشی بسیار بهتری را فراهم کنند. آزمایشگاه کامپیوتر هاروارد قبلاً سیاستی داشت که هیچ برنامه‌ای که منابع آن در دسترس و دید عموم قرار نداشت نمی‌توانست روی سیستم نصب شود، و این را واقعا در عمل با جلوگیری از نصب برخی برنامه‌ها حفظ می‌کرد. من خیلی تحت تأثیر این قرار گرفتم.

Finally, the overhead of considering who owns the system software and what one is or is not entitled to do with it will be lifted.

در نهایت، بار اضافی در نظر گرفتن اینکه چه کسی مالک سیستم نرم‌افزاری است و چه چیزهایی مجاز به انجام آنها هستید یا خیر، از دوش برداشته می‌شود.

Arrangements to make people pay for using a program, including licensing of copies, always incur a tremendous cost to society through the cumbersome mechanisms necessary to figure out how much (that is, which programs) a person must pay for. And only a police state can force everyone to obey them. Consider a space station where air must be manufactured at great cost: charging each breather per liter of air may be fair, but wearing the metered gas mask all day and all night is intolerable even if everyone can afford to pay the air bill. And the TV cameras everywhere to see if you ever take the mask off are outrageous. It's better to support the air plant with a head tax and chuck the masks.

سازماندهی‌هایی که مردم را برای استفاده از یک برنامه مجبور به پرداخت هزینه می‌کنند، از جمله مجوز کپی‌ها، همیشه به دلیل مکانیزم‌های دست و پاگیری که برای محاسبه مبلغی که یک شخص باید (برای کدام برنامه‌ها) بپردازد، هزینه هنگفتی را به جامعه تحمیل می‌کنند. و تنها یک دولت پلیسی می تواند همه را مجبور به رعایت آنها کند. یک ایستگاه فضایی را در نظر بگیرید که در آن هوا باید با هزینه زیادی تولید شود: صدور قبض هوا به ازای هر نفس بر لیتر ممکن است عادلانه باشد، اما پوشیدن ماسک گاز محدود کننده [که میزان تنفس را اندازه‌گیری کند] تمام روز و تمام شب حتی اگر همه بتوانند هزینه قبض هوا را بپردازند، غیرقابل تحمل است. و وجود دوربین‌های تلوزیونی مستقر در همه جا برای دیدن اینکه آیا شما لحظه‌ای ماسک را بر می‌دارید یا نه، وحشتناک هستند. بهتر است کارخانه هوا را با مالیات سرانه حمایت کنید و ماسک‌ها را دور بیندازید.

Copying all or parts of a program is as natural to a programmer as breathing, and as productive. It ought to be as free.

کپی کردن تمام یا بخشی از یک برنامه برای یک برنامه نویس به اندازه تنفس طبیعی و کارا است. پس باید به همان اندازه آزاد باشد.

### Some Easily Rebutted Objections to GNU's Goals
### برخی از مخالفت‌هایی با اهداف GNU که به راحتی قابل رد هستند


**_“Nobody will use it if it is free, because that means they can't rely on any support.”_**
**_«اگر آزاد باشد، کسی از آن استفاده نمی‌کند، زیرا به این معنی است که کاربران نمی‌توانند روی هیچ حمایتی حساب باز کنند.»_**

**_“You have to charge for the program to pay for providing the support.”_**
**_«شما باید برای برنامه هزینه تعریف و دریافت کنید تا هزینه ارائه پشتیبانی را بپردازید.»_**

If people would rather pay for GNU plus service than get GNU free without service, a company to provide just service to people who have obtained GNU free ought to be profitable [4].

اگر مردم ترجیح دهند برای "گنو GNU به‌علاوه خدمات" بجای "گنو GNU آزاد بدون خدمات" هزینه کنند، شرکتی که فقط خدمات را به افرادی که GNU را بصورت آزاد دریافت کرده‌اند ارائه می‌دهد، باید سودآور باشد[4].

We must distinguish between support in the form of real programming work and mere handholding. The former is something one cannot rely on from a software vendor. If your problem is not shared by enough people, the vendor will tell you to get lost.

ما باید بین حمایت به شکل "کار برنامه نویسی واقعی" و "کمک و پشتیبانی [در ترجمهٔ گرفتن دست]" تمایز قائل شویم. مورد اول چیزی است که نمی‌توان از یک فروشنده نرم‌افزار انتظار داشت. اگر مشکل شما توسط افراد کافی به اشتراک گذاشته نشود، فروشنده به شما می‌گوید که بروید گم شوید.

If your business needs to be able to rely on support, the only way is to have all the necessary sources and tools. Then you can hire any available person to fix your problem; you are not at the mercy of any individual. With Unix, the price of sources puts this out of consideration for most businesses. With GNU this will be easy. It is still possible for there to be no available competent person, but this problem cannot be blamed on distribution arrangements. GNU does not eliminate all the world's problems, only some of them.

اگر کسب و کار شما نیاز به اتکا بر پشتیبانی را دارد، تنها راه این است که همه منابع و ابزارهای لازم را در اختیار داشته باشید. سپس می‌توانید هر فردی را که در دسترس است برای رفع مشکل خود استخدام کنید. شما تحت منت هیچ فردی نیستید. در Unix، قیمت منابع باعث میشود این امر از گذینه های در دسترس خارج شود. با GNU این کار آسان خواهد بود. هنوز ممکن است هیچ فرد شایسته‌ای در دسترس نباشد، اما این مشکل را نمی‌توان به سازماندهی‌های توزیع نسبت داد. GNU همه مشکلات جهان را از بین نمی‌برد، فقط برخی از آنها را.

Meanwhile, the users who know nothing about computers need handholding: doing things for them which they could easily do themselves but don't know how.

در همین حال، کاربرانی که هیچ چیز در مورد کامپیوتر نمی‌دانند نیازمند این هستند که کسی دست آنها را بگیرد: انجام کارهایی برای آنها که به راحتی می‌توانند خودشان انجام دهند، اما نمی دانند چگونه.

Such services could be provided by companies that sell just handholding and repair service. If it is true that users would rather spend money and get a product with service, they will also be willing to buy the service having got the product free. The service companies will compete in quality and price; users will not be tied to any particular one. Meanwhile, those of us who don't need the service should be able to use the program without paying for the service.

چنین خدماتی را می توان توسط شرکت هایی ارائه کرد که فقط خدمات کمک و پشتیبانی [در ترجمهٔ گرفتن دست] و تعمیر می فروشند. اگر این امر درست باشد که کاربران ترجیح می دهند هزینه کنند و محصولی با خدمات دریافت کنند، آنها همچنین مایل به خرید خدمات پس از دریافت رایگان محصول خواهند بود. شرکت های خدماتی در کیفیت و قیمت رقابت خواهند کرد؛ کاربران به هیچ شرکت خاصی وابسته نخواهند بود. در همین حال، کسانی از ما که به خدمات نیاز نداریم باید بتوانیم بدون پرداخت هزینه خدمات، از برنامه استفاده کنیم.


**_“You cannot reach many people without advertising, and you must charge for the program to support that.”_**
**_«شما بدون تبلیغات نمی‌توانید به تعداد زیادی از افراد دسترسی پیدا کنید و شما باید برنامه را با هزینه ارائه دهید تا پشتیبانی حاصل شود.»_**

**_“It's no use advertising a program people can get free.”_**
**_«این که برنامه‌ای را که مردم می‌توانند به صورت آزاد دریافت کنند تبلیغ کنید، به هیچ دردی نمی‌خورد.»_**

There are various forms of free or very cheap publicity that can be used to inform numbers of computer users about something like GNU. But it may be true that one can reach more microcomputer users with advertising. If this is really so, a business which advertises the service of copying and mailing GNU for a fee ought to be successful enough to pay for its advertising and more. This way, only the users who benefit from the advertising pay for it.

روش‌های مختلفی از تبلیغات رایگان یا بسیار ارزان قیمت وجود دارد که می‌تواند برای آگاه‌سازی تعدادی از کاربران کامپیوتر درباره مواردی مانند GNU استفاده شود. اما ممکن است درست باشد که با تبلیغات، می‌توان به تعداد بیشتری از کاربران میکروکامپیوتر دسترسی یافت. اگر واقعاً اینچنین باشد، یک شرکت که خدمات کپی و ارسال GNU را با هزینه‌ای ارائه می‌دهد، باید موفقیت کافی داشته باشد تا هزینه تبلیغات خود و موارد بیشتر را پرداخت کند. به این ترتیب، فقط کاربرانی که از تبلیغات سود می‌برند، برای آن هزینه پرداخت می‌کنند.

On the other hand, if many people get GNU from their friends, and such companies don't succeed, this will show that advertising was not really necessary to spread GNU. Why is it that free market advocates don't want to let the free market decide this? [5]

از سوی دیگر، اگر بسیاری از افراد GNU را از دوستان خود دریافت کنند و شرکت‌های مذکور موفق نشوند، این نشان می‌دهد که تبلیغات واقعاً برای گسترش GNU ضروری نبوده است. چرا مدافعان بازار آزاد نمی‌خواهند اجازه دهند خود بازار آزاد این را تصمیم بگیرد؟" [5]

**_“My company needs a proprietary operating system to get a competitive edge.”_**
**_«شرکت من به سیستم عاملی مالکیتی برای کسب مزیت رقابتی نیاز دارد.»_**

GNU will remove operating system software from the realm of competition. You will not be able to get an edge in this area, but neither will your competitors be able to get an edge over you. You and they will compete in other areas, while benefiting mutually in this one. If your business is selling an operating system, you will not like GNU, but that's tough on you. If your business is something else, GNU can save you from being pushed into the expensive business of selling operating systems.

گنو GNU سیستم عامل نرم‌افزاری را از حوزه رقابت خارج می‌کند. شما نمی‌توانید در این حوزه مزیتی کسب کنید اما رقبای شما هم نخواهند توانست بر شما مزیتی داشته باشند. شما و رقبایتان در سایر حوزه‌ها رقابت می‌کنید در حالی که در این حوزه همدیگر را تقویت می‌کنید. اگر تجارت شما فروش سیستم عامل است، GNU برایتان خوشایند نخواهد بود اما این وضعیت برای شما سخت است. اگر تجارت شما چیز دیگری است، GNU می‌تواند شما را از ورود به کسب و کار گران‌قیمت فروش سیستم‌عامل‌ها نجات دهد.

I would like to see GNU development supported by gifts from many manufacturers and users, reducing the cost to each [6].

من دوست دارم که ببینم توسعهٔ GNU توسط ارائهٔ هدایای بسیاری از تولیدکنندگان و کاربران حمایت شود و کاهش هزینه برای هر کدام را به ارمغان بیاورد.[6]

**_“Don't programmers deserve a reward for their creativity?”_**
**_«آیا برنامه‌نویسان سزاوار دریافت پاداش برای خلاقیت‌شان نیستند؟»_**

If anything deserves a reward, it is social contribution. Creativity can be a social contribution, but only in so far as society is free to use the results. If programmers deserve to be rewarded for creating innovative programs, by the same token they deserve to be punished if they restrict the use of these programs.

تنها چیزی که می‌تواند سزاوار پاداش باشد، همکاری اجتماعی است. خلاقیت می‌تواند همکاری اجتماعی باشد، اما فقط در حدی که جامعه قادر به استفاده از نتایج آن باشد. اگر برنامه‌نویسان برای ایجاد برنامه‌های نوآورانه سزاوار پاداش باشند، در عین حال آن‌ها اگر استفاده از این برنامه‌ها را محدود کنند سزاوار مجازات هستند.

**_“Shouldn't a programmer be able to ask for a reward for his creativity?”_**
**_«آیا نباید برنامه‌نویس بتواند به خاطر خلاقیتش درخواست پاداش کند؟»_**

There is nothing wrong with wanting pay for work, or seeking to maximize one's income, as long as one does not use means that are destructive. But the means customary in the field of software today are based on destruction.

هیچ چیز اشتباهی در دریافت حقوق برای انجام کار یا در پی افزایش درآمد بودن وجود ندارد، بشرطی که از روش‌های مخرب استفاده نشود. اما روش‌های معمول در حوزه نرم‌افزار امروزه بر مبنای تخریب است.

Extracting money from users of a program by restricting their use of it is destructive because the restrictions reduce the amount and the ways that the program can be used. This reduces the amount of wealth that humanity derives from the program. When there is a deliberate choice to restrict, the harmful consequences are deliberate destruction.

بهره‌کشی مالی از کاربران یک برنامه با محدود کردن استفاده آنها، امری نابودکننده تلقی میشود، زیرا محدودیت‌ها میزان و روش‌های استفاده از برنامه را کاهش می‌دهند. این باعث کاهش میزان سرمایه می‌شود که انسانیت از برنامه بدست می‌آورد. هنگامی که یک انتخاب عمدی برای محدود کردن وجود دارد، پیامدهای مخرب نیز عمدی است.

The reason a good citizen does not use such destructive means to become wealthier is that, if everyone did so, we would all become poorer from the mutual destructiveness. This is Kantian ethics; or, the Golden Rule. Since I do not like the consequences that result if everyone hoards information, I am required to consider it wrong for one to do so. Specifically, the desire to be rewarded for one's creativity does not justify depriving the world in general of all or part of that creativity.

دلیل این امر که یک شهروند خوب از استفاده از این روش‌های نابودکننده برای ثروتمند شدن استفاده نمی‌کند این است که اگر همه این کار را کنند، ما همه از نابودی متقابل فقیرتر خواهیم شد. این اخلاق کانتی (Kantian) است؛ یا قانون طلایی. از آنجایی که من پیامدهایی که از این کار که هرکسی اطلاعات را برای تنها خودش نگاه دارد نتیجه می‌شود را دوست ندارم، مجبورم آن را اشتباه بدانم. به طور خاص، اینکه شخصی برای خلاقیت خود پاداشی بخواهد، توجیهی برای محروم کردن جهان به طور کلی از آن خلاقیت نیست. 

**_“Won't programmers starve?”_**
**_«آیا برنامه‌نویس‌ها از گرسنگی نمی‌میرند؟»_**

I could answer that nobody is forced to be a programmer. Most of us cannot manage to get any money for standing on the street and making faces. But we are not, as a result, condemned to spend our lives standing on the street making faces, and starving. We do something else.

من می‌توانم جواب دهم که کسی مجبور نیست برنامه‌نویس باشد. بیشتر ماها نمی‌توانیم پولی برای ایستادن در خیابان و شکلک درآوردن بگیریم. اما به همین دلیل محکوم نیستیم که تمام عمرمان را به این کار بگذرانیم و از گرسنگی بمیریم. کار دیگری می‌کنیم.

But that is the wrong answer because it accepts the questioner's implicit assumption: that without ownership of software, programmers cannot possibly be paid a cent. Supposedly it is all or nothing.

اما این پاسخ غلط است چون فرض اصلی شخص سوال کننده را قبول می‌کند که بدون مالکیت نرم‌افزار، برنامه‌نویس‌ها بطور کلی نمی‌توانند پولی دربیاورند. این فرض بیان شده است که یا کل یا هیچ چیز [درباره پول].  

The real reason programmers will not starve is that it will still be possible for them to get paid for programming; just not paid as much as now.

دلیل واقعی این که برنامه‌نویس‌ها از گرسنگی نمی‌میرند این است که همچنان می‌توانند برای برنامه‌نویسی پول دریافت کنند؛ البته نه به اندازه فعلی. 

Restricting copying is not the only basis for business in software. It is the most common basis [7] because it brings in the most money. If it were prohibited, or rejected by the customer, software business would move to other bases of organization which are now used less often. There are always numerous ways to organize any kind of business.

محدود کردن کپی، تنها پایه تجارت نرم‌افزار نیست. در حال حاضر پایه معمول [7] حساب میشود زیرا بیشترین درآمد را دارد. اگر ممنوع شود یا توسط مشتری پذیرفته نشود، تجارت نرم‌افزار به پایه‌های دیگری متکی خواهد شد که اکنون کمتر مورد استفاده قرار می‌گیرند. معمولا همیشه راه‌های زیادی برای سازماندهی تجارتها وجود دارد.

Probably programming will not be as lucrative on the new basis as it is now. But that is not an argument against the change. It is not considered an injustice that sales clerks make the salaries that they now do. If programmers made the same, that would not be an injustice either. (In practice they would still make considerably more than that.)

احتمالا برنامه‌نویسی به شکلی متکی بر پایه جدید به اندازه کنونی سودآور نخواهد بود. اما این دلیل و بحثی بر علیه تغییر نیست. اکنون کسی حقوق فروشندگان فروشگاهی را بی‌عدالتی نمیپندارد. اگر برنامه‌نویس هم چنین حقوقی داشته باشد، بی‌عدالتی نخواهد بود. (به طور عملی  باز هم بیشتر از آن درآمد خواهند داشت.)

**_“Don't people have a right to control how their creativity is used?”_**
**_«آیا مردم حق کنترل اینکه از خلاقیتشان چه استفاده‌ای میشود را ندارند؟»_**

“Control over the use of one's ideas” really constitutes control over other people's lives; and it is usually used to make their lives more difficult.

"کنترل استفاده از ایده‌ها"، در واقع کنترل زندگی مردم دیگر است؛ و معمولاً برای دشوار کردن زندگی آنها مورد استفاده قرار می‌گیرد.

People who have studied the issue of intellectual property rights [8] carefully (such as lawyers) say that there is no intrinsic right to intellectual property. The kinds of supposed intellectual property rights that the government recognizes were created by specific acts of legislation for specific purposes.

افرادی که به طور دقیق به مسئله حقوق مالکیت معنوی [8] پرداخته‌اند (مانند وکلا) می‌گویند حق مالکیت معنوی ذاتی وجود ندارد. انواع حقوق ادعا شده در باب مالکیت معنوی که دولت به رسمیت می‌شناسد، با اهدافی خاص از طریق قوانین خاص ایجاد شده‌اند.

For example, the patent system was established to encourage inventors to disclose the details of their inventions. Its purpose was to help society rather than to help inventors. At the time, the life span of 17 years for a patent was short compared with the rate of advance of the state of the art. Since patents are an issue only among manufacturers, for whom the cost and effort of a license agreement are small compared with setting up production, the patents often do not do much harm. They do not obstruct most individuals who use patented products.

برای مثال، سیستم ثبت اختراعات [پتنت patent] برای تشویق مخترعان به افشای جزئیات اختراعاتشان ایجاد شد. هدف آن، بیشتر از کمک به مخترعان، کمک به جامعه بود. در آن زمان طول عمر 17 ساله یک پتنت نسبت به سرعت پیشروی مرزهای دانش بازه‌ای کوتاه بود. از آنجایی که مساله پتنت‌ها فقط میان تولیدکنندگان مطرح است و هزینه و زحمت ایجاد یک قرارداد مجوز [لایسنس اگریمنت] نسبت به هزینه تولید بسیار کمتر است، پتنت‌ها معمولاً خسارت زیادی وارد نمی‌کنند. آنها بیشتر افرادی را که از محصولات پتنت شده استفاده می‌کنند نیز محدود نمی‌کنند.

The idea of copyright did not exist in ancient times, when authors frequently copied other authors at length in works of nonfiction. This practice was useful, and is the only way many authors' works have survived even in part. The copyright system was created expressly for the purpose of encouraging authorship. In the domain for which it was invented—books, which could be copied economically only on a printing press—it did little harm, and did not obstruct most of the individuals who read the books.

مفهوم حق تکثیر [copyright] در دوران باستان وجود نداشت و نویسندگان مکرراً از آثار دیگر نویسندگان به طور مفصل در آثار غیرداستانی خود استفاده می‌کردند که این کار مفید بود و تنها راه بقای بخشی از آثار برخی نویسندگان بوده است. سیستم حق تکثیر به طور صریح برای ترویج نویسندگی ایجاد شد. در حوزه‌ای که ابداع شد - یعنی کتاب که فقط از طریق ماشین چاپ قابل تکثیر بود - آسیب اندکی وارد می‌کرد و اکثر افرادی که کتاب می‌خواندند را محدود نمی‌کرد.

All intellectual property rights are just licenses granted by society because it was thought, rightly or wrongly, that society as a whole would benefit by granting them. But in any particular situation, we have to ask: are we really better off granting such license? What kind of act are we licensing a person to do?

تمام حقوق مالکیت معنوی فقط مجوزهایی هستند که توسط جامعه اعطا شده است زیرا فکر می‌شد، به درستی یا نادرستی، که جامعه به طور کلی از داشتن آن حقوق مالکیت معنوی منفعت خواهد برد. اما در هر موقعیت خاص، باید بپرسیم: آیا واقعاً با اعطای چنین مجوزی وضعیت بهتری خواهیم داشت؟ اجازهٔ چه نوع عملی را با صدور مجوز به یک فرد می‌دهیم؟

The case of programs today is very different from that of books a hundred years ago. The fact that the easiest way to copy a program is from one neighbor to another, the fact that a program has both source code and object code which are distinct, and the fact that a program is used rather than read and enjoyed, combine to create a situation in which a person who enforces a copyright is harming society as a whole both materially and spiritually; in which a person should not do so regardless of whether the law enables him to.

در مورد وضعیت برنامه‌های امروز داستان بسیار متفاوت از کتاب‌های صد سال پیش است. واقعیت این است که آسان‌ترین روش برای کپی کردن یک برنامه، انتقال آن از یک همسایه به یک همسایه دیگر است. این امر را در نظر بگیرید که یک برنامه دارای هر دو نوع کد منبع و کد شی [object code] می‌باشد که از هم متمایز هستند، و این امر که یک برنامه برای استفاده طراحی شده است بیشتر از اینکه مورد خواندن و لذت‌بردن قرار گیرد. موارد مذکور با هم ترکیب شده و یک وضعیت را ایجاد می‌کند که در آن فردی که حق تکثیر را اجرا می‌کند، در حقیقت جامعه را در سطوح مادی و معنوی آسیب می‌رساند؛ درصورتی که فرد بدون توجه به اینکه آیا قانون به او اجازه می‌دهد یا خیر نباید این کار را انجام دهد.

**_“Competition makes things get done better.”_**
**_«رقابت باعث میشود کارها بهتر انجام شوند.»_**

The paradigm of competition is a race: by rewarding the winner, we encourage everyone to run faster. When capitalism really works this way, it does a good job; but its defenders are wrong in assuming it always works this way. If the runners forget why the reward is offered and become intent on winning, no matter how, they may find other strategies—such as, attacking other runners. If the runners get into a fist fight, they will all finish late.

الگوی رقابت مانند مسابقه است: با تقدیر از برنده، ما همه را تشویق می‌کنیم تا سریعتر بدوند. هنگامی که سرمایه‌داری واقعاً به این صورت عمل می‌کند، کارش را به خوبی انجام می‌دهد.؛ اما مدافعان آن اشتباه می‌کنند که فرض می‌کنند همیشه بدین شکل کارا خواهد بود. اگر دوندگان فراموش کنند که پاداش به چه منظوری ارائه می‌شود و تنها مشتاق پیروزی باشند، ممکن است راهبردهای دیگری مانند حمله به دیگران را پیش بگیرند. اگر دوندگان دیگر به درگیری جسمی بپردازند، دیرتر به خط پایان خواهند رسید. 

Proprietary and secret software is the moral equivalent of runners in a fist fight. Sad to say, the only referee we've got does not seem to object to fights; he just regulates them (“For every ten yards you run, you can fire one shot”). He really ought to break them up, and penalize runners for even trying to fight.

نرم‌افزارهای مالکیتی و محرمانه معادل اخلاقی دوندگانی هستند که درگیر دعوا مشت‌زنی هستند. متاسفانه تنها داوری که داریم، ظاهراً به مبارزات اعتراض ندارد؛ فقط آنها را منظم می‌کند("با شلیک صدای یک گلوله پس از هر ده راند مسابقه"). او واقعاً باید آنها را متوقف کند و مابین دوندگان برای حتی تلاش به منظور درگیری هم مجازات در نظر بگیرد.

**_“Won't everyone stop programming without a monetary incentive?”_**
**_«آیا بدون انگیزه مالی همه برنامه‌نویسی را رها نمیکنند؟»_**

Actually, many people will program with absolutely no monetary incentive. Programming has an irresistible fascination for some people, usually the people who are best at it. There is no shortage of professional musicians who keep at it even though they have no hope of making a living that way.

در واقع، بسیاری از مردم بدون هرگونه انگیزه مالی هم برنامه‌نویسی می‌کنند. برای برخی افراد، معمولاً افراد بااستعداد، برنامه‌نویسی چنان جذابیتی دارد که در برابر آن نمیتوان مقاومت کرد. موسیقی‌دانان حرفه‌ای زیادی وجود دارند که با وجود اینکه امیدی به تامین امرار معاش از این راه ندارند، باز هم موسیقی را ادامه می‌دهند.

But really this question, though commonly asked, is not appropriate to the situation. Pay for programmers will not disappear, only become less. So the right question is, will anyone program with a reduced monetary incentive? My experience shows that they will.

اما واقعاً این سؤال که معمولاً نیز مطرح می‌شود، مناسب این شرایط نیست. حقوق برنامه‌نویسان از بین نخواهد رفت، بلکه کاهش خواهد یافت. پس سؤال صحیح این است که آیا با کاهش انگیزه مالی کسی باز هم برنامه‌نویسی می‌کند؟ تجربه من نشان می‌دهد که می‌کنند.

For more than ten years, many of the world's best programmers worked at the Artificial Intelligence Lab for far less money than they could have had anywhere else. They got many kinds of nonmonetary rewards: fame and appreciation, for example. And creativity is also fun, a reward in itself.

برای بیش از ده سال، بسیاری از بهترین برنامه‌نویسان جهان در آزمایشگاه تحقیقات هوش مصنوعی با درآمد کمتر از جاهای دیگر کار می‌کردند. آنها جوایز غیرمادی مانند شهرت و احترام به دست آوردند. و خلاقیت که امری سرگرم کننده و جالب است، درون خودش پاداشی به همراه دارد.

Then most of them left when offered a chance to do the same interesting work for a lot of money.

سپس بیشتر آنها زمانی که فرصت همان کار جذاب با دستمزد خیلی بیشتر را پیدا کردند آنجا را ترک کردند.

What the facts show is that people will program for reasons other than riches; but if given a chance to make a lot of money as well, they will come to expect and demand it. Low-paying organizations do poorly in competition with high-paying ones, but they do not have to do badly if the high-paying ones are banned.

واقعیت نشان می‌دهد که مردم برای دلایلی غیر از ثروت‌اندوزی هم برنامه‌نویسی می‌کنند؛ اما اگر فرصتی برای کسب درآمد زیاد هم به آنها داده شود، آنها انتظار و تقاضای آن را خواهند داشت.  سازمان‌های با حقوق پایین در رقابت با سازمان‌های با حقوق بالا عملکرد ضعیفی دارند، اما اگر سازمان‌های با حقوق بالا ممنوع شوند، آنها نیز نیازی به عملکرد ضعیف ندارند.

**_“We need the programmers desperately. If they demand that we stop helping our neighbors, we have to obey.”_**
**_«ما به برنامه‌نویسان به شدت نیاز داریم. اگر آنها از ما بخواهند که کمک به همسایه‌هایمان را متوقف کنیم، ما مجبوریم اطاعت کنیم.»_**

You're never so desperate that you have to obey this sort of demand. Remember: millions for defense, but not a cent for tribute!

هرگز به گونه‌ای به آنها نیاز ندارید که از این نوع تقاضاها اطاعت کنید. به خاطر داشته باشید: میلیون‌ها دلار برای دفاع، اما نه حتی یک سِنت برای باج و خراج! [tribute]

**_“Programmers need to make a living somehow.”_**
**_«برنامه‌نویسان باید از طریقی کسب درآمد کرده و زندگی خود را بگذرانند.»_**

In the short run, this is true. However, there are plenty of ways that programmers could make a living without selling the right to use a program. This way is customary now because it brings programmers and businessmen the most money, not because it is the only way to make a living. It is easy to find other ways if you want to find them. Here are a number of examples.

در کوتاه مدت، این درست است. با این حال، راه‌های زیادی برای کسب درآمد برای برنامه‌نویسان وجود دارد که بدون فروش حق استفاده از یک برنامه، می‌توانند از آن استفاده کنند. این روش در حال حاضر به دلیل اینکه بیشترین درآمد را برای برنامه‌نویسان و تاجران به همراه دارد، رایج است، نه به دلیل اینکه تنها راهی برای کسب درآمد است. اگر می‌خواهید، راه‌های دیگری را نیز می‌توانید پیدا کنید. اینجا چند مثال آورده شده است:

A manufacturer introducing a new computer will pay for the porting of operating systems onto the new hardware.

یک تولید کننده کامپیوتر جدید، که برای پورت کردن سیستم عامل بر روی سخت‌افزار جدید، پول می‌دهد.

The sale of teaching, handholding and maintenance services could also employ programmers.

فروش خدمات آموزش، سرویسهای نگهداری و پشتیبانی نیز میتوانند برنامه‌نویسان را به کار گیرند.

People with new ideas could distribute programs as freeware [9], asking for donations from satisfied users, or selling handholding services. I have met people who are already working this way successfully.

افرادی که ایده‌های جدیدی دارند می‌توانند برنامه‌ها را به صورت آزادافزار یا فری‌وِر  [فری‌وِر freeware]  ارائه دهند و از کاربران رضایت‌مند خواستار کمک‌های مالی شوند یا خدمات پشتیبانی را به فروش برسانند. من افرادی را ملاقات کرده‌ام که به این روش با موفقیت کار می‌کنند.

Users with related needs can form users' groups, and pay dues. A group would contract with programming companies to write programs that the group's members would like to use.

کاربرانی که نیازهای مشابهی دارند، می‌توانند گروه‌های کاربری تشکیل دهند و عضویت پرداخت کنند. یک گروه با شرکت‌های برنامه‌نویسی قرارداد می‌بندد تا برنامه‌هایی را که اعضای گروه می‌خواهند استفاده کنند، بنویسند.

All sorts of development can be funded with a Software Tax:

هر نوع توسعه‌ای می‌تواند با مالیات نرم‌افزاری تامین شود:

Suppose everyone who buys a computer has to pay x percent of the price as a software tax. The government gives this to an agency like the NSF to spend on software development.

فرض کنید هر کسی که یک کامپیوتر می‌خرد، باید x درصد از قیمت را به عنوان مالیات نرم‌افزاری پرداخت کند. دولت این پول را به یک سازمان مانند NSF می‌دهد تا برای توسعه نرم‌افزارها هزینه کند.

But if the computer buyer makes a donation to software development himself, he can take a credit against the tax. He can donate to the project of his own choosing—often, chosen because he hopes to use the results when it is done. He can take a credit for any amount of donation up to the total tax he had to pay.

اما اگر خریدار کامپیوتر خود به توسعه نرم‌افزار کمک مالی کند، می‌تواند اعتباری در برابر مالیات بگیرد. او می‌تواند به پروژه‌ای که خودش انتخاب کرده است کمک کند - اغلب به دلیل اینکه امیدوار است پس از اتمام از نتایج آن استفاده کند. او می‌تواند برای هر میزان کمک مالی تا حداکثر مالیاتی که باید پرداخت کند، اعتبار بگیرد.

The total tax rate could be decided by a vote of the payers of the tax, weighted according to the amount they will be taxed on.

میزان کل مالیات می‌تواند با رأی پرداخت‌کنندگان مالیات تعیین شود، درست به ترتیب وزن مالیاتی که بر آنها تعلق می‌گیرد.

The consequences:

پیامدها:

* The computer-using community supports software development.
* This community decides what level of support is needed.
* Users who care which projects their share is spent on can choose this for themselves.

* جامعه کاربران کامپیوتری توسعه نرم‌افزار را حمایت می‌کند.
* این جامعه تصمیم می‌گیرد که چه میزان حمایت لازم است.
* کاربرانی که به این امر اهمیت میدهند که سهام آنان در کدام پروژه‌ها استفاده شده است، میتوانند این امر را خودشان تصمیم بگیرند.

In the long run, making programs free is a step toward the postscarcity world, where nobody will have to work very hard just to make a living. People will be free to devote themselves to activities that are fun, such as programming, after spending the necessary ten hours a week on required tasks such as legislation, family counseling, robot repair and asteroid prospecting. There will be no need to be able to make a living from programming.

در طولانی مدت، آزاد کردن برنامه‌ها یک قدم به سوی جهان پساکمیابی [postscarcity] است، جایی که هیچ کس نیازی به کار سخت برای تأمین معاش ندارد. افراد آزاد خواهند بود که پس از اینکه ده ساعت هفته را برای وظایف لازم مانند تشریح قوانین، مشاوره خانوادگی، تعمیر ربات و بررسی سیارک‌ها صرف کرده‌اند، وقت خود را برای فعالیت‌هایی که خودشان را شاد می‌کند، مانند برنامه‌نویسی، بگذارند. نیازی به کسب درآمد از برنامه‌نویسی نخواهد بود.

We have already greatly reduced the amount of work that the whole society must do for its actual productivity, but only a little of this has translated itself into leisure for workers because much nonproductive activity is required to accompany productive activity. The main causes of this are bureaucracy and isometric struggles against competition. Free software will greatly reduce these drains in the area of software production. We must do this, in order for technical gains in productivity to translate into less work for us.

در طولانی مدت، آزاد کردن برنامه‌ها یک قدم به سوی جهان پساکمیابی [postscarcity] است، جایی که هیچ کس نیازی به کار سخت برای تأمین معاش ندارد. افراد آزاد خواهند بود که پس از اینکه ده ساعت هفته را برای وظایف لازم مانند تشریح قوانین، مشاوره خانوادگی، تعمیر ربات و بررسی سیارک‌ها صرف کرده‌اند، وقت خود را برای فعالیت‌هایی که خودشان را شاد می‌کند، مانند برنامه‌نویسی، بگذارند. نیازی به کسب درآمد از برنامه‌نویسی نخواهد بود.

### Footnotes 
### پاورقی‌ها 

1- The wording here was careless. The intention was that nobody would have to pay for permission to use the GNU system. But the words don't make this clear, and people often interpret them as saying that copies of GNU should always be distributed at little or no charge. That was never the intent; later on, the manifesto mentions the possibility of companies providing the service of distribution for a profit. Subsequently I have learned to distinguish carefully between “free” in the sense of freedom and “free” in the sense of price. Free software is software that users have the freedom to distribute and change. Some users may obtain copies at no charge, while others pay to obtain copies—and if the funds help support improving the software, so much the better. The important thing is that everyone who has a copy has the freedom to cooperate with others in using it.

1- در اینجا بی‌توجهی در استفاده از عبارت‌ها وجود دارد. هدف این بود که هیچ کس نباید برای کسب اجازه استفاده از سیستم GNU پول بپردازد. اما این عبارت‌ها واضح نیستند و مردم آن‌ها را به این معنا می‌پندارند که کپی‌های GNU همیشه با هزینه کم یا بدون هزینه توزیع شوند. این هیچوقت هدف ما نبود؛ در ادامه بیانیه [manifesto] احتمال اینکه شرکت‌ها خدمات توزیع را برای کسب سود ارائه دهند، ذکر شده است. در نتیجه، من یاد گرفته‌ام که بین "آزادی" و "رایگانی" به دقت تفکیک کنم. نرم‌افزار آزاد، نرم‌افزاری است که کاربران حق توزیع و تغییر آن را دارند. برخی کاربران ممکن است کپی هایی را بدون هزینه دریافت کنند، در حالی که دیگران برای دریافت کپی ها پرداخت می کنند - و اگر این پول‌ها به بهبود نرم‌افزار کمک کنند، خیلی هم بهتر است. مهم این است که هر کسی که یک کپی دارد، آزادی همکاری با دیگران در استفاده از آن را دارد.

2- The expression “give away” is another indication that I had not yet clearly separated the issue of price from that of freedom. We now recommend avoiding this expression when talking about free software. See “[Confusing Words and Phrases](https://www.gnu.org/philosophy/words-to-avoid.html#GiveAwaySoftware)” for more explanation.

2- عبارت "هدیه دادن" نشان دهنده این بود که من هنوز به طور واضح مسئله قیمت را از مسئله آزادی تفکیک نکرده بودم. ما در حال حاضر توصیه می کنیم که این عبارت را در صحبت درباره نرم‌افزار آزاد اجتناب کنید. برای توضیحات بیشتر به "[عبارات گیج کننده](https://www.gnu.org/philosophy/words-to-avoid.html#GiveAwaySoftware)" مراجعه کنید.

3- This is another place I failed to distinguish carefully between the two different meanings of “free.” The statement as it stands is not false—you can get copies of GNU software at no charge, from your friends or over the net. But it does suggest the wrong idea.

3- اینجا یک جایی دیگری است که من به دقت بین دو معنای مختلف "free" تمایز قائل نشدم. عبارت به شکل فعلی غلط نیست - شما می توانید کپی های نرم‌افزار GNU را از دوستان خود یا از طریق اینترنت بدون هزینه دریافت کنید. اما این عبارت ایده اشتباهی را نشان می‌دهد.

4- Several such companies now exist.

4- چندین شرکت مشابه این حال حاضر وجود دارند.

5- Although it is a charity rather than a company, the Free Software Foundation for 10 years raised most of its funds from its distribution service. You can [order things from the FSF](https://shop.fsf.org/) to support its work. 

5- اگرچه بنیاد نرم‌افزار آزاد به جای یک شرکت، یک خیریه است، اما برای 10 سال از خدمات توزیع خود برای جمع آوری بیشترین بخش از منابع خود استفاده کرده است. شما می توانید از فروشگاه FSF (https://shop.fsf.org/) برای حمایت از کار آنها، محصولاتی را سفارش دهید.

6- A group of computer companies pooled funds around 1991 to support maintenance of the GNU C Compiler.

6- یک گروه از شرکت‌های کامپیوتری در حدود سال 1991 برای حمایت از نگهداری کامپایلر C GNU، منابع خود را تجمیع کردند.

7- I think I was mistaken in saying that proprietary software was the most common basis for making money in software. It seems that actually the most common business model was and is development of custom software. That does not offer the possibility of collecting rents, so the business has to keep doing real work in order to keep getting income. The custom software business would continue to exist, more or less unchanged, in a free software world. Therefore, I no longer expect that most paid programmers would earn less in a free software world.

7- فکر می کنم در بیان اینکه نرم‌افزار مالکیتی، پایه شایع ترین روش کسب درآمد در نرم‌افزار است، اشتباه کرده‌ام. به نظر می رسد که در واقع شایع ترین مدل کسب و کار، و توسعه نرم‌افزار سفارشی بوده و همچان نیز هست. این امکان جمع آوری اجاره‌ها را ندارد، بنابراین کسب و کار باید برای کسب درآمد، کار واقعی را انجام دهد. کسب و کار نرم‌افزار سفارشی، در یک دنیای نرم‌افزار آزاد، بیشتر یا کمتر بدون تغییر، وجود خواهد داشت. بنابراین، من دیگر انتظار ندارم که برنامه‌نویسانی که بیشترین حقوق را میگیرند، در یک دنیای نرم‌افزار آزاد، کمتر از قبل درآمد کسب کنند.

8- In the 1980s I had not yet realized how confusing it was to speak of “the issue” of “intellectual property.” That term is obviously biased; more subtle is the fact that it lumps together various disparate laws which raise very different issues. Nowadays I urge people to reject the term “intellectual property” entirely, lest it lead others to suppose that those laws form one coherent issue. The way to be clear is to discuss patents, copyrights, and trademarks separately. See [further explanation](https://www.gnu.org/philosophy/not-ipr.html) of how this term spreads confusion and bias.

8- در دهه 1980 من هنوز متوجه نشده بودم که صحبت از "مشکل" "مالکیت فکری" چقدر گیج کننده است. این عبارت بدون شک جهت‌دار و سوگیر [bias شده] است؛ اما نکته ابهام برانگیز دیگر این است که این عبارت، قوانین مختلف و متفاوتی را که مسائل بسیار متفاوتی را ایجاد می‌کنند، با هم ترکیب می‌کند. امروزه، من به مردم توصیه می کنم که به طور کامل از عبارت "مالکیت فکری" اجتناب کنند، مگر اینکه بخواهند دیگران را به این نتیجه برسانند که این قوانین یک مسئله یکپارچه را شکل می‌دهند. راه درست برای روشن شدن بحث این است که در مورد پتنت‌ها، کپی‌رایت و علامتهای تجاری [trademarks] به طور جداگانه بحث کنیم. برای اینکه متوجه شوید چگونه این عبارت باعث ایجاد ابهام و سردرگمی میشود به [توضیحات بیشتر](https://www.gnu.org/philosophy/not-ipr.html) مراجعه کنید.

9- Subsequently we learned to distinguish between “free software” and “freeware.” The term “freeware” means software you are free to redistribute, but usually you are not free to study and change the source code, so most of it is not free software. See “[Confusing Words and Phrases](https://www.gnu.org/philosophy/words-to-avoid.html#Freeware)” for more explanation.

9- در ادامه، ما یاد گرفتیم که بین "نرم‌افزار آزاد" [free software] و "آزادافزار" [فری‌وِر freeware] تفکیک قائل شویم. عبارت "فری‌وِر" به معنای نرم‌افزاری است که شما مجوز توزیع آن را دارید، اما معمولاً شما مجوز مطالعه و تغییر کد منبع را ندارید، بنابراین بیشتر آن نرم‌افزارها "نرم‌افزار آزاد" نیستند. برای توضیحات بیشتر به "[کلمات و عبارات گیج کننده](https://www.gnu.org/philosophy/words-to-avoid.html#Freeware)" مراجعه کنید.

### سخن مترجم:

به علت تخصصی بودن متن بیانیه، این ترجمه بخصوص با رعایت اصول بسیار ظریفی صورت گرفته است که ترجمه را با دقتی در لول کلمات، منطبق و وفادار به متن بسازد. در صورت دیدن هر گونه اشکالی در ترجمه، چه معنوی و چه نگارشی، میتوانید آنرا از راه‌های زیر گزارش نمائید:
* https://github.com/TadavomnisT/Free_Books-Documents/issues
* behroora@yahoo.com

همچنین چند نکته در ترجمه شایان ذکر است:

* عبارت "Public Domain" به عنوان "مالکیت عمومی" ترجمه شده است، برای اطلاعات بیشتر "[Public Domain](https://en.wikipedia.org/wiki/Public_domain)" و "[مالکیت عمومی](https://fa.wikipedia.org/wiki/%D9%85%D8%A7%D9%84%DA%A9%DB%8C%D8%AA_%D8%B9%D9%85%D9%88%D9%85%DB%8C)" را در ویکی‌پدیا مطالعه بفرمائید.

* عبارت "Murphy" به عنوان "قانون مورفی" ترجمه شده است، این قانون به صراحت بیان میکند که:
[Anything that can go wrong will go wrong.](https://en.wikipedia.org/wiki/Murphy's_law)
[هر خطای ممکن رخ خواهد داد.](https://fa.wikipedia.org/wiki/%D9%82%D9%88%D8%A7%D9%86%DB%8C%D9%86_%D9%85%D9%88%D8%B1%D9%81%DB%8C)

برای اطلاعات بیشتر مقالات مرتبط در ویکی‌پدیا را مطالعه بفرمائید.

* عبارت "state-of-the-art" به عنوان "لبه دانش" یا "مرزهای دانش" ترجمه شده است که عبارتی آکادمیک است که بعدا در مقالات دیگر به آن میپردازیم.

* عبارت "nroff" نام یک برنامه فرمت‌دهنده در یونیکس است، برای اطلاعات بیشتر [ویکی‌پدیا](https://en.wikipedia.org/wiki/Nroff) را مطالعه بفرمائید.

* عبارات فلسفی مانند "postscarcity" و "bureaucracy" و عبارات علمی/ریاضیاتی مانند "isometric" بصورت انگلیسی و به همراه معادل فارسی ترجمه شده‌اند که برای درک مفهوم جمله، باید قبلتر معنی آنها را مطالعه بفرمائيد.

مترجم:
بهراد.ب
behroora@yahoo.com
github.com/TadavomnisT

_____________________________________________________________________
_____________________________________________________________________
_____________________________________________________________________


## Copyright:

This is a free and open-source article under the license of GFDL1-3, so permission is granted to copy, distribute and/or modify this document under the terms of the GNU Free Documentation License.

## کپی رایت

این یک مقاله آزاد و متن‌باز تحت مجوز GFDL1-3 می‌باشد، بنابراین اجازه کپی، توزیع و/یا تغییر این سند با شرایط مجوز GNU Free Documentation License داده شده است.

## Author

+ Behrad B. (behroora@yahoo.com)

## نویسنده

+ بهراد.ب (behroora@yahoo.com)

## Refrences

* https://www.gnu.org/gnu/manifesto.html
* https://en.wikipedia.org/wiki/GNU_Manifesto
* https://t.me/la5tknight

## منابع

* https://www.gnu.org/gnu/manifesto.html
* https://en.wikipedia.org/wiki/GNU_Manifesto
* https://t.me/la5tknight

## Special Thanks to

* https://t.me/la5tknight
For helping me in translation.

## تشکر ویژه از

* https://t.me/la5tknight
برای کمک در فرایند ترجمه.

## Issues related to this Article


This free and open-source article is available at [Free Books/Documents](https://github.com/TadavomnisT/Free_Books-Documents) repository with the following link:

https://github.com/TadavomnisT/Free_Books-Documents/tree/main/Articles/6-GNU-manifesto-persian-translation
* [GNU Manifesto Persian Translation](https://github.com/TadavomnisT/Free_Books-Documents/tree/main/Articles/6-GNU-manifesto-persian-translation)


**Any scientific mistakes, issues, questions, or discussions related to this article can be posted through Issues section of repository or sent by email:**

* https://github.com/TadavomnisT/Free_Books-Documents/issues
* behroora@yahoo.com

## مسائل مرتبط با این مقاله


این مقاله بصورت آزاد و اپن‌سورس در مخزن [کتابها/مقالات آزاد](https://github.com/TadavomnisT/Free_Books-Documents) در لینک زیر در دسترس است:

https://github.com/TadavomnisT/Free_Books-Documents/tree/main/Articles/6-GNU-manifesto-persian-translation
* [ترجمه فارسی بیانیه گنو GNU](https://github.com/TadavomnisT/Free_Books-Documents/tree/main/Articles/6-GNU-manifesto-persian-translation)


**هر نوع اشکال علمی، مساله یا بحث مربوط با این مقاله را میتوانید از طریق Issue در ریپازیتوری یا ایمیل مطرح نمایید:**

* https://github.com/TadavomnisT/Free_Books-Documents/issues
* behroora@yahoo.com