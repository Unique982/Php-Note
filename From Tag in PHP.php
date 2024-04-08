<!-- From Tag in PHP 
-> HTML froms are used to collection some data from the sie visitor.
The HTMl <form>..</form> tag is used to create an html form
<input> -> tag prompts the user to enter data and aslo request for the information from the web server after submitting the web form.

 <textarea> <button> <option> <select> <optgroup> <fiedset> <label>

 <- action attributes ->
 It contais a url that defines where to send the data after submitting the form.
 it specifies the physical address of the server to which the user data should be redirected at the click of the submit button
action= http://www.example.com/something.html
action="same.html"
if the action attributes is omitted the action is set to the current page.

 <-- enctype attribute ->
 it specifies how the browser encodes the data before it sends it to server.
 <form enctype="multipart/form-data">

  <- method attribute ->
  it specifies how to send the form data to a web server. the data can be sent as url Variable, by using the get method 
  or HTTP post by using the post method.
  > GET(default)
  > POST

  <-- name attribute ->
  specifies  a name used to identify the form
  It is used t given a name to the control which is sent to the server to recognized and get the value
  name ="username"
-->
<!-- Some example form  -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Example</title>
</head>
<body>
    <form action="From Tag in PHP.php" method="GET">
        username : <input type="text" name="username">
        pasword : <input type="password" name="password">
        <input type="submit" name="submit">
    </form>
</body>
</html>

