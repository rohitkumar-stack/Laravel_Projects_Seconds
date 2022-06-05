<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>create post</h1>
    <br> <br>
<!-- 
    <form method="POST" action="/profile">
    @csrf
    <label for="lname">post</label><br>
    <input type="text" id="lname" name="post" ><br><br>
</form> -->


 <form method="POST" action="/postCreate">
    
 <input type="hidden" name="_token" value="{{ csrf_token() }}" />

    <label for="fname">Title of Post</label><br>
    <input type="text" id="fname" name="title" ><br><br>

    <label for="lname">post</label><br>
    <input type="text" id="lname" name="post" ><br><br>

    <label for="lname">description</label><br>
    <input type="text" id="lname" name="description" ><br><br>

    <br>
    <input type="submit" value="Submit">
</form> 

</body>
</html>