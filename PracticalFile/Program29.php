<!DOCTYPE html>
<html lang="en">
<head>
    <title>HTML FORM CONTROL</title>
</head>
<body>
    <h1>FORM SUBMIT</h1>
    <form action="Program30.php" method="POST">
Name: <input type="text" name="name"><br>
Hobbies: <input type="checkbox" name="hb1" value="play"> Play
<input type="checkbox" name="hb2" value="study"> Study
<input type="checkbox" name="hb3" value="draw"> Draw <br>

Gender : <input type="radio" name="gender" value="male">male
<input type="radio" name="gender" value="female">female
<input type="radio" name="gender" value="other">other<br>

Country : <select name="country">
    <option>India</option>
    <option>Australia</option>
    <option>Pakistan</option>
    <option>Sri Lanka</option>
</select>
<br>
Address: <textarea name="address" cols="40" rows="5"></textarea>
<br>
Password: <input type="password" name="password"><br>
<input type="submit" value="submit">
<input type="reset" value="reset">
    </form>
</body>
</html>