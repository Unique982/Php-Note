<!-- GEt and POST in PHP
$GEt -> GEt sends the data as part of the url
 .-> appends form-data into the URL in name/value pairs
 .-> the lenght of a URl is limited 2048 characters
 .-> Never use GET method if you have password or other sensitive information to be sent to the server
 -> Useful for form submission where a user want to bookmark the result
 -> Get is better for non-secure data lie query string in google
 -> Get can't be used to send binary data ex: images or word document
<form action="some.php" method="GET">
    <\form>
    if we use an invalid value for the method attributes of the <form> tag, the browser will use the default value GET

    <- POST -> 
    -> HTTP POST requets supply additional data form the client (browser) to the server in the message body
    -> Appends form data inside the body of the HTTP request (data is not shown is in url)
    ->The post method soes not have any restriction or data size to be sent
    -> Form submissions with POST cannot be bookmarked
    -> The POSt method can  be used to sent ASCII as well as binary data EX: image and word documents etc.
    -> The data sent by POST method goes through HTTP header so security depends on HTTP protocol.
    By using secure HTTP you can make sure that your information is secure.
    -> Post is a littkle safer than GET because the parameters are not stored in browser history or in web server logs.
    <form action ="save.php" method="POST"> 

-->