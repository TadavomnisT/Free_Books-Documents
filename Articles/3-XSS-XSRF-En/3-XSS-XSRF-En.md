
# What is the Difference Between XSS and XSRF?

## Overview

There are two concepts that are often confused:

* XSS: Cross-Site Scripting
* CSRF/XSRF: Cross-Site Request Forgery

Let's break down each concept separately to understand what they are.

__________________________________

Before explaining these things(Attacks), it's important to understand an associated concept called:

+ SOP: Same Origin Policy

### What is SOP?

SOP is a policy followed on the web that requires clients/servers to consider a request valid and trustworthy only if it originates from the correct source (i.e., the previous source).

This validation is done by checking three specific things:

1. The protocol must be the same (e.g., HTTP).

2. The host address (domain) must be the same.

3. The port number must also be the same.

_____________________________________________

To give an example, imagine someone alters a request toward your browser and claiming to be Google, "Hia, I'm Google with the given URL as follows":

```
https://hacker.com:80
```

However, your browser remembers the correct URL for Google as:

```
https://google.com:80
```

Now, your browser compares both URLs:

```
https://hacker.com:80
https://google.com:80
\____/  \______/  \__/
Protocol  Host    Port
```

According to SOP, Here are the results:

- The protocol is the same✅
- The host is not the same❌
- The port is the same✅

Since one of the conditions is not true, an error occurs, the Same Origin Policy Error. As a result, the request is dropped😬

Although this policy helps prevent many attacks, there are still other attacks that can bypass this policy, such as:

- XSS
- XSRF/CSRF

We will discuss these attacks later✅

## What is XSS Attack?

XSS stands for Cross Site Scripting. In general, it means injecting JavaScript code into a website. It is a way to somehow insert JavaScript code into the body of a website, so that the code gets executed.

There are different scenarios for XSS attacks. For example, in the early days of Persian web (as I recall), when everyone was creating their own blogs on weblog platforsm, performing XSS attacks was relatively simple.

All you had to do was to put a JavaScript code in the comment section instead of an actual comment, and since 90% of the websites did not validate it, when your comment was displayed, your code would be executed for other people too!!!

As a result, significant damage could be caused.

However, executing XSS attacks has become more challenging nowadays.

Any form of JavaScript injection in a website is categorized as an XSS attack.

_____________________________________________

XSS (Cross-Site Scripting) comes in different forms:

+ ✅Reflected:

Reflected XSS occurs when a website has a form section and whatever you write in thr form is sent to the server and it comes back as part of the HTML content of the page.

For example, imagine a simple page with a form that has a field like this:

`name : ————————————`

Whatever content is entered into the form and submitted, the request is sent and returned, displaying the content written in the "name" field:

```Your name is: "behrad"```

In the case that instead of writing a valid name like "behrad," a piece of JavaScript code is inputted, it might be executed. This is known as reflected XSS.

+ ✅Stored:

Stored XSS occurs when malicious code is stored in a database and retrieved from there later. From then on, every time it is accessed, it can potentially gets executed for everyone who sees it.

+ ✅DOM:

DOM XSS is a type of XSS that happens when XSS is injected into the client-side DOM (Document Object Model). When the DOM becomes manipulated by a malicious script, it compromises everything on the page.

+ ✅Mutation:

I qoute from: https://en.wikipedia.org/wiki/Cross-site_scripting


*Mutated XSS happens when the attacker injects something that is seemingly safe but is rewritten and modified by the browser while parsing the markup. This makes it extremely hard to detect or sanitize within the website's application logic. An example is rebalancing unclosed quotation marks or even adding quotation marks to unquoted parameters on parameters to CSS font-family.* 


_____________________________________________


There are other types of XSS as well, but they exceed the scope of this article. 🙂


So after all, XSS means injecting JavaScript code into a website!

## What is a CSRF/XSRF Attack?

CSRF/XSRF (Cross Site Request Forgery) attack is a type of attack where a domain forges a request that belongs to another domain and ultimately changes the values, in other words, one domain pretends to be another domain in order to carry out unauthorized actions and modify data.

Check out following picture for a visual representation of a CSRF attack👇

![CSRF Schema](Files/1.jpg)

Note: I took this image from a video, and I will provide the link in the resources section.

To explain this attack, let's consider an example.

_____________________________________________

CSRF attacks are quite common and there are numerous instances of such attacks:

Example:

Imagine we have a website with a specific URL in it that does a particular action, such as deleting an account, when a specific value is sent through a HTTP POST request.

It is a common practice to design a simple type of API like this.

The website programmer designed the forum in a way that to delete an account, the user must click on a specific button that redirects them to:

```mywesite.com/delete_my_acc.php```

If I post a parameter named "delete" with a value of 1 to the mentioned URL, my account will be deleted. This is how most websites are designed.

Now, let's say I do **not** want to delete my account! I am browsing the website and come across a picture, a beautiful sexy picture for the sake of the argument and it's linked to a sexy website. I am tottaly seduced and I click on the picture!

I get redirected to a sexy website where I see an even more sexy stuff, and I enjoy myself.

Then I go back to the forum to read more discussions...

But I receive an error saying that my account has been deleted! And I no longer have an account!

What happened?

I unintentionally became a victim of a CSRF attack and I don't know about it!

Let's examin the attack,

Here is the source-code of the malicious sexy website :

```html
<img source="sexy.png" >
<form
action="mywesite.com/delete_my_acc.php"
method="POST"
id="sexy"
>
<input type="hidden" name="delete" value="1" />
</form>
<script>
document.getElementById("sexy").submit()
</script>
```

Analyze what it does for yourselves...

Here is a summary:

ُThe page sends a request to that account-deleting URL using JavaScript and claims that *I am Behrad... I want to delete my account!! Don't you believe it That I am Behrad? Here are my cookies!!!!🍪🍪🍪🍪🍪🍪*

(How did it get my cookies?! It didn't! The browser itself encapsulates the cookies it has cached for each URL and always sends them as an HTTP header... That's exactly how you can log-in and stay logged-in  in a website!)

In short, I got deceived by a CSRF attack and my account got deleted...:)

Same Origin Policy (SOP), as I explained before, only prevents the malicious site (hacker) from receiving the response of the request, It means the request is sent successfuly (Account is deleted) and when the response came back, its dropped... Well, what's the point...? My account is deleted :) The hacker didn't see any results... just took a blind shot, and it worked!

This was a very simple scenario...

_____________________________________________

CSRF Attacks, 

+ can be executed on the URL...✅
+ can be executed on GET parameters...✅
+ can be executed on files...✅
+ can be executed on images...✅
+ can be executed on iframes...✅
+ can be executed on POST...✅
+ can be executed on links...✅
+ can be executed on JS...✅
+ can be executed on many things 🥴

I will settle for this point...

So, CSRF/XSRF is a technique that involves forging a request related to another domain and ultimately altering values.


## Summary

CSRF/XSRF is a technique that involves forging a request related to another domain and ultimately altering values and XSS means injecting JavaScript code into a website.

## Copyright:

This is a free and open-source article under the license of GFDL1-3, so permission is granted to copy, distribute and/or modify this document under the terms of the GNU Free Documentation License.

## Author

+ Behrad B. (behroora@yahoo.com)

## Resources

* https://en.wikipedia.org/wiki/Cross-site_scripting
* https://en.wikipedia.org/wiki/Cross-site_request_forgery
* https://www.youtube.com/watch?v=EoaDgUgS6QA
* https://www.youtube.com/watch?v=eWEgUcHPle0

The last two videos are brilliant.


## Issues related to this Article


This free and open-source article is available at [Free Books/Documents](https://github.com/TadavomnisT/Free_Books-Documents) repository with the following link:

https://github.com/TadavomnisT/Free_Books-Documents/tree/main/Articles/3-XSS-XSRF-En
* [What is the Difference Between XSS and XSRF?](https://github.com/TadavomnisT/Free_Books-Documents/tree/main/Articles/3-XSS-XSRF-En)
    * [What is XSS attack?](https://github.com/TadavomnisT/Free_Books-Documents/tree/main/Articles/3-XSS-XSRF-En#what-is-xss-attack)
    * [What is XSRF attack?](https://github.com/TadavomnisT/Free_Books-Documents/tree/main/Articles/3-XSS-XSRF-En#what-is-a-csrfxsrf-attack)


The Persian version of this article:

https://github.com/TadavomnisT/Free_Books-Documents/tree/main/Articles/3-XSS-XSRF-Pr

**Any scientific mistakes, issues, questions, or discussions related to this article can be posted through Issues section of repository or sent by email:**

* https://github.com/TadavomnisT/Free_Books-Documents/issues
* behroora@yahoo.com