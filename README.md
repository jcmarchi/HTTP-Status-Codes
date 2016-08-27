# HTTP Status Codes List

#### Based on IETF Review Reference [RFC 7231]

A single PHP page with the most comprehensive list of "**HTTP Status Codes**", organized in an Array format, ready to be added to any PHP application.

The `$HTTP_Status_Code` Array comprises all the HTTP Status Codes known to date, official and unofficial ones.

The official codes have a reference to their RFC document while the unofficial codes will disclose the most accurate reference found, preceded by an "UNOFFICIAL" keyword.

The reason why I put together this Array was because, more than once, I found myself in the needed to review HTTP responses in my programs, thus this file was created. Then, after a little while reviwing online documentations I realized most of the list didn't match, some in the amount of codes listed, other in the labels and definitions presented. While looking deeper I found this "gray area" where unnoficial Status Codes appeared in general lists, while others were incomplete. Because of that, because I realized it was not uncommon to find references to those unnoficial Status Codes in existing products, I decided to include allof them in final Array because. Afterall, official or not, it is always good to have the most accurate data handy.

The HTTP Status Codes (also commonly referenced as "Response Codes") are divided in:

* 1xx: Informational - Request received, continuing process.
* 2xx: Success - The action was successfully received, understood, and accepted.
* 3xx: Redirection - Further action must be taken in order to complete the request.
* 4xx: Client Error - The request contains bad syntax or cannot be fulfilled.
* 5xx: Server Error - The server failed to fulfill an apparently valid request.


### Important Remarks:

 1. If a Status Code is not listed, then it is "Unassigned".
 2. Where reads "UNOFFICIAL" in the list below it means the code is not specified by any RFC, but may be used (or is available to be used) by third-party services to provide semantic or RESTful error responses. More at: https://en.wikipedia.org/wiki/Representational_state_transfer


### Important Remarks:

* [HTTP Status Codes Reference](http://www.iana.org/assignments/http-status-codes/http-status-codes.xhtml) at Wikipedia.
* [More about Status Codes](http://getstatuscode.com/) in a private own site.
* [Tests a Status Code](http://getstatuscode.com/) on-line, direct on the browser, to find our how your browser would respond to it.
