<?php
/**
* HTTP Status Codes - Array List - Complete with Extras
* @since      File available since August 2016.
* @category   Extension/Addon/DataHandler
* @version    0.00.28a
* PHP version: Any
*
* @copyright  2016 MOODFIRED.ORG - A Global COMPEL Company (globalcompel.com).
* @link       http://moodfired.org/HTTP-Status-Codes
* @author     Julio Marchi <jmarchi@moodfired.org> - Twitter: @MrMarchi
*
* -----------------------------------------------------------------------------
* This is the most comprehensive list of reference of "HTTP Status Codes" to
* date, ready to be used in any PHP application.
*-----------------------------------------------------------------------------
* 
* MIT License
* Permission is hereby granted, free of charge, to any person obtaining a copy
* of this software and associated documentation files (the "Software"), to deal
* in the Software without restriction, including without limitation the rights
* to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
* copies of the Software, and to permit persons to whom the Software is
* furnished to do so, subject to the following conditions:
* 
* The above copyright notice and this permission notice shall be included in all
* copies or substantial portions of the Software.
* 
* THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
* IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
* FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
* AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
* LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
* OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
* SOFTWARE.
*/

/**
 *  The HTTP Status Code Array
 */
if (! isset($HTTP_Status_Code)):
    $HTTP_Status_Code = array(
       /**
        * 1×× Informational
        */
       '100' => "Continue",                      // RFC 7231
       '101' => "Switching Protocols",           // RFC 7231
       '102' => "Processing in Progress",        // RFC 2518, WebDAV
       '103' => "Access denied while creating Web Service", // UNOFFICIAL (also "Checkpoint")
       '104' => "File Format or Program Error",  // UNOFFICIAL, Microsoft (returned by Windows to indicate system files damaged)
       '122' => "Request-URI too long",          // UNOFFICIAL (This code means that the URL requested exceeds the maximum 2083 characters)

       /**
        * 2×× Success
        */
       '200' => "OK",                              // RFC 7231
       '201' => "Created",                         // RFC 7231
       '202' => "Accepted",                        // RFC 7231
       '203' => "Non-Authoritative Information",   // RFC 7231 (since HTTP/1.1)
       '204' => "No Content",                      // RFC 7231
       '205' => "Reset Content",                   // RFC 7231
       '206' => "Partial Content",                 // RFC 7233
       '207' => "Multi-Status",                    // RFC 4918, WebDAV
       '208' => "Already Reported",                // RFC 5842, WebDAV
       '210' => "OK, Direct Access Granted",       // UNOFFICIAL, MOODFIRED
       '226' => "IM Used",                         // RFC 3229

       /**
        * 3×× Redirection
        */
       '300' => "Multiple Choices",                // RFC 7231
       '301' => "Moved Permanently",               // RFC 7231
       '302' => "Found",                           // RFC 7231
       '303' => "See Other",                       // RFC 7231 (since HTTP/1.1)
       '304' => "Not Modified",                    // RFC 7232
       '305' => "Use Proxy",                       // RFC 7231 (since HTTP/1.1)
       '306' => "Switch Proxy",                    // RFC 7231 (No longer used. Originally meant "Subsequent requests should use the specified proxy")
       '307' => "Temporary Redirect",              // RFC 7231 (since HTTP/1.1)
       '308' => "Permanent Redirect",              // RFC 7538
       '310' => "OK, Redirected Access Granted",   // UNOFFICIAL, MOODFIRED

       /**
        * 4×× Client Error
        */
       '400' => "Bad Request",                     // RFC 7231
       '401' => "Unauthorized",                    // RFC 7235
       '402' => "Payment Required",                // RFC 7231
       '403' => "Forbidden",                       // RFC 7231
       '404' => "Not Found",                       // RFC 7231
       '405' => "Method Not Allowed",              // RFC 7231
       '406' => "Not Acceptable",                  // RFC 7231
       '407' => "Proxy Authentication Required",   // RFC 7235
       '408' => "Request Timeout",                 // RFC 7231
       '409' => "Conflict",                        // RFC 7231
       '410' => "Gone",                            // RFC 7231
       '411' => "Length Required",                 // RFC 7231
       '412' => "Precondition Failed",             // RFC 7232
       '413' => "Payload Too Large",               // RFC 7231
       '414' => "URI Too Long",                    // RFC 7231
       '415' => "Unsupported Media Type",          // RFC 7231
       '416' => "Range Not Satisfiable",           // RFC 7233
       '417' => "Expectation Failed",              // RFC 7231
       '418' => "I'm a teapot",                    // RFC 2324
       '419' => "Authentication Timeout",          // UNOFFICIAL
       '420' => "Enhance Your Calm",               // UNOFFICIAL, Twitter (also as "Method Failure" by Spring Framework)
       '421' => "Misdirected Request",             // RFC 7540
       '422' => "Unprocessable Entity",            // RFC 4918, WebDAV
       '423' => "Locked",                          // RFC 4918, WebDAV
       '424' => "Failed Dependency",               // RFC 4918, WebDAV
       '425' => "Unordered Collection",            // UNOFFICIAL (Defined in drafts of "WebDAV Advanced Collections Protocol")
       '426' => "Upgrade Required",                // RFC 7231
       '427' => "SOAPAction - Required by the server application", // UNOFFICIAL (Undocumented)
       '428' => "Precondition Required",           // RFC 6585
       '429' => "Too Many Requests",               // RFC 6585
       '430' => "RESTAction - Required by the server application", // UNOFFICIAL (Undocumented)
       '431' => "Request Header Fields Too Large", // RFC 6585
       '440' => "Login Timeout",                   // UNOFFICIAL, IIS
       '441' => "Invalid Route Requested",         // UNOFFICIAL, MOODFIRED
       '442' => "Unauthorized Route Requested",    // UNOFFICIAL, MOODFIRED
       '443' => "Route Access Error",              // UNOFFICIAL, MOODFIRED
       '444' => "No Response",                     // UNOFFICIAL, NGINX
       '449' => "Retry With",                      // UNOFFICIAL, IIS
       '450' => "Blocked by Windows Parental Controls", // UNOFFICIAL, Microsoft
       '451' => "Unavailable For Legal Reasons",   // RFC 7725 (code chosen as a reference to the 1953 dystopian novel "Fahrenheit 451")
       '494' => "Request Header Too Large",        // UNOFFICIAL, NGINX
       '495' => "SSL Certificate Error",           // UNOFFICIAL, NGINX
       '496' => "SSL Certificate Required",        // UNOFFICIAL, NGINX
       '497' => "HTTP Request Sent to HTTPS Port", // UNOFFICIAL, NGINX
       '498' => "Invalid Token",                   // UNOFFICIAL, Esri
       '499' => "Client Closed Request",           // UNOFFICIAL, NGINX, WGET (also "Token Required" by Esri, or "Request has been forbidden by antivirus")

       /**
        * 5×× Server Error
        */
       '500' => "Internal Server Error",           // RFC 7231
       '501' => "Not Implemented",                 // RFC 7231
       '502' => "Bad Gateway",                     // RFC 7231
       '503' => "Service Unavailable",             // RFC 7231
       '504' => "Gateway Timeout",                 // RFC 7231
       '505' => "HTTP Version Not Supported",      // RFC 7231
       '506' => "Variant Also Negotiates",         // RFC 2295
       '507' => "Insufficient Storage",            // RFC 4918, WebDAV
       '508' => "Loop Detected",                   // RFC 5842, WebDAV
       '509' => "Bandwidth Limit Exceeded",        // UNOFFICIAL, Apache Web Server, cPanel
       '510' => "Not Extended",                    // RFC 2274
       '511' => "Network Authentication Required", // RFC 6585
       '520' => "Unknown Error",                   // UNOFFICIAL, CloudFlare
       '521' => "Web Server Is Down",              // UNOFFICIAL, CloudFlare
       '522' => "Connection Timed Out",            // UNOFFICIAL, CloudFlare
       '523' => "Origin Is Unreachable",           // UNOFFICIAL, CloudFlare
       '524' => "A Timeout Occurred",              // UNOFFICIAL, CloudFlare
       '525' => "SSL Handshake Failed",            // UNOFFICIAL, CloudFlare
       '526' => "Invalid SSL Certificate",         // UNOFFICIAL, CloudFlare
       '527' => "Invalid Route Mapping",           // UNOFFICIAL, MOODFIRED
       '528' => "Unauthorized Access To Route",    // UNOFFICIAL, MOODFIRED
       '529' => "Route Resolution Error",          // UNOFFICIAL, MOODFIRED
       '530' => "Site Is Frozen",                  // UNOFFICIAL, Pantheon
       '598' => "Network Read Timeout Error",      // UNOFFICIAL, Microsoft HTTP proxy
       '599' => "Network Connect Timeout Error"    // UNOFFICIAL, Microsoft HTTP proxy
       
    );
endif;
