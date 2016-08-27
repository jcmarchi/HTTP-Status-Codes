# HTTP Status Codes List

#### Based on IETF Review Reference [RFC 7231] and (lots of) private research.

A single PHP page with the most comprehensive list of **HTTP Status Codes**, organized in an *Array* format, ready to be added to any PHP application.

The **`$HTTP_Status_Code`** *Array* comprises all the **HTTP Status Codes** known to date, official and unofficial ones.

The official codes have a reference to their RFC document while the unofficial ones are disclosed using the most accurate reference found, preceded by the "**UNOFFICIAL**" keyword.

The reason why I put together this *Array* was because, more than once, I found myself needing to review HTTP responses in my programs, thus this file was created. 

During the processing of collecting information to compose this file I realized most of the lists I was reviewing didn't exactly match. Some had more or less codes, while others differed in the *labels* and *definitions* presented. However, what I found specially peculiar was that unnoficial codes were commonly present in reference lists, while in some cases  a handfull of official codes were simply ignored. Because of that, and because my reseach also showed me that some of those *unnoficial* codes were still present in current products, I decided to include all of them in my final *Array*. Afterall, official or not, it is always good to have the most accurate and complete data.

The **HTTP Status Codes** (also commonly referenced as "*Response Codes*") are divided in:

* **1xx: Informational**: Request received, continuing process.
* **2xx: Success**: The action was successfully received, understood, and accepted.
* **3xx: Redirection**: Further action must be taken in order to complete the request.
* **4xx: Client Error**: The request contains bad syntax or cannot be fulfilled.
* **5xx: Server Error**: The server failed to fulfill an apparently valid request.


### Important Remarks:

 1. If a **Status Code** is not listed in the *Array*, then it can be understood as "*Unassigned*".
 2. In the commented lines, where it reads "**UNOFFICIAL**" it means the code is not specified by any RFC document, but may be used (or is available to be used) by third-party services to provide semantic or RESTful error responses. More at: https://en.wikipedia.org/wiki/Representational_state_transfer


### Important Remarks:

* [HTTP Status Codes Reference](http://www.iana.org/assignments/http-status-codes/http-status-codes.xhtml) at Wikipedia.
* [More about Status Codes](http://getstatuscode.com/) in a private own site.
* [Tests a Status Code](http://getstatuscode.com/) on-line, direct on the browser, to find our how your browser would respond to it.
