<?php
if(!$_POST)
{
?>

<form action="<?=$_SERVER['PHP_SELF']; ?>" method="post">
<p>Email Address:<input type="text" name="email" size="40">
<p>Telephone: <input type= "text" name="phone" size="30"> {i.e 714-555-4545)
<p><input type="submit" value="Submit">
</form>

<?php
}
else
{

if(preg_match("/^[a-zA-Z0-9._]+@[a-zA-Z0-9._-]+\.([a-zA-Z]{2,4})$/i",$_POST["email"]))
{
echo "Valid email address<br>";
}
else
{
echo "Invalid email address<br>";
}

if (preg_match("/^[[:digit:]]{3}-[[:digit:]]{3}-[[:digit:]]{4}$/i",$_POST["phone"]))
{
echo "valid phone number<br>";
} 
else
{
echo "Invalid phone number<br>";
}






}
?>