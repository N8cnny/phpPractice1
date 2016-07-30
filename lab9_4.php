<?php
if (!$_POST)
{
?>

A web form for submitting user comments thru email
<form action="<?=$_SERVER['PHP_SELF']; ?>" method="post">
<table width=90% align="center" style="font-size:12px">
<tr>
<td>Your name:</td>
<td><input type="text" name="name" size="30"</td>
</tr>
<tr>
<td>Your Email:</td>
<td><input type="text" name="email" size=30></tD>
</tr>
<tr>
<td> Your gender:</td>
<td>
<input type="radio" name="gender" value="male"> Male
<input type="radio" name="gender" value="female"> Female
<input type="radio" name="gender" value="no given"> Not Given</td>
</tr>
<tr>
<td>How you found us</td>
<td>
<select name="referrer">
<option value="Newspaper">Newspaper</option>
<option value="Magazine">Magazine</option>
<option value="Website">Website</option>
<option value="other">Other</option>
</select>
</td>
</tr>
<tr>
<td>Mat we email you</td>
<td><input type="checkbox" name="contact" value="Y" CHECKED></td>
</tr>
<tr>
<td>Comments</td>
<td><textarea rows=4 cols=50 name="comments"></textarea></td>
</tr>
<table>
<input type="submit" value="Submit">
</form>

<?php
}
else
{
if (!$_POST["name"]) {echo "Name is required<br>";}

if(!preg_match("/^[_a-z0-9]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*$/i",$_POST['email']))
{echo "invalid email address<br>";}

else
{
echo "You have entered:\n
<form action='mailto:user@cis246.com?subject=user comments' method='post' enctype='text/plain'>\n
<textarea name='Topic' rows=15 cols=90>";
echo "User comments\n";
echo"Name:". $_POST["name"] . "\n";
echo "Email:". $_POST["email"] . "\n";
echo "Gender:". $_POST["gender"] . "\n";
echo "Referrer:". $_POST["referrer"] . "\n";
echo "Contact:". $_POST["contact"] . "\n";
echo "Comments:". $_POST["comments"] . "\n";

echo"</textarea>\n
<input type='submit' value='Send thru Email'>\n
</form>";
}
}
?>