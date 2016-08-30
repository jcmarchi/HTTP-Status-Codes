# HTTP Status Codes List

#### Based on IETF Review Reference [RFC 7231] and (lots of) private research.

A single PHP page with the most comprehensive list of **HTTP Status Codes**, organized in an *Array* format, ready to be added to any PHP application.

The **`$HTTP_Status_Code`** *Array* comprises all the **HTTP Status Codes** known to date, _official_ and _unofficial_ ones.

The _official_ codes are referenced to their RFC document, while the _unofficial_ ones are disclosed using the most accurate information found, preceded by the "**UNOFFICIAL**" keyword.

The reason why I put together this *Array* was because, more than once, I found myself needing to review HTTP responses in my programs, thus this file was created. 

During the process of collecting information to compose this file I realized that most of the lists I was checking didn't exactly match. Some had more or less codes, while others differ in the *labels* and *definitions* presented. However, what I found specially peculiar was the fact that _unnoficial_ codes were commonly present in _official_ reference lists, while in many cases a handfull of _official_ codes were simply ignored. Because of that, and because my research also showed me that some _unnoficial_ codes were still present in current products, I decided to include **all of them** in my final *Array*. Afterall, _official_ or not, it is always good to have the most accurate and complete data to fall back to.

The **HTTP Status Codes** (also commonly referenced as "*Response Codes*") are divided in:

* **1xx: Informational**: Request received, continuing process.
* **2xx: Success**: The action was successfully received, understood, and accepted.
* **3xx: Redirection**: Further action must be taken in order to complete the request.
* **4xx: Client Error**: The request contains bad syntax or cannot be fulfilled.
* **5xx: Server Error**: The server failed to fulfill an apparently valid request.


### Important Remarks:

 1. If a **Status Code** is not listed in the *Array*, then it can be understood as "*Unassigned*".
 2. In the commented lines, where it reads "**UNOFFICIAL**" it means the code is not specified by any RFC document, but may be used (or is available to be used) by third-party services to provide semantic or `RESTful` error responses. More at: <a href="https://en.wikipedia.org/wiki/Representational_state_transfer" target="_blank">Wikipedia</a>.


### References:

* [HTTP Status Codes Reference](http://www.iana.org/assignments/http-status-codes/http-status-codes.xhtml) at Wikipedia.
* [More about Status Codes](http://getstatuscode.com/) in a private own site.
* [Tests a Status Code](http://getstatuscode.com/) on-line, direct on the browser, to find our how your browser would respond to it.
