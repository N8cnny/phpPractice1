<?php
if($_POST)
{
$err=array();

if($_POST["first"]=="") {$err[]="First name is required";}
if (empty($_POST["last"])) {$err[]="Last name is required";}
if (!$_POST["address"]) {$err[]="Address is required";}
if (!$_POST["Btype"]) {$err[]="Blood type is required";}
if (!$_POST["subject"]) {$err[]="Check at least on class for the next term";}
if (!$_POST["payment"]) {$err[]="Specify the payment";}
if (!$_POST["comment"]) {$err[]="comment is required";}

if(count($err)>0)
{
echo "Error(s) deteceted: <ol>";
foreach ($err as $error)
{
echo "<li>$error";}
echo "</ol>";
}
else
{
echo "You have entered:<ol>";
echo "<li>First Name: " . $_POST["first"];
echo "<li>Last Name: " . $_POST["last"];
echo "<li>Address: " . $_POST["address"];
echo "<li>Blood Type: " . $_POST["Btype"];
echo "<li>Subject: <ul>";
foreach($_POST["subject"] as $subject)
{ echo "<li>$subject";}
echo"</ul>";
echo "<li>Payment: " . $_POST["payment"];
echo "<li>Comment: " . $_POST["comment"];
echo"</ol>";
}
}
else 
{
?>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
First Name: <input type="text" name="first"><br>
Last name: <input type="text" name="last"><br>
Address: <input ype="text" name="address" size=90><br>

<p>What is your blood type?
<input type="radio" name="Btype" value="A">A.
<input type="radio" name="Btype" value="B">B.
<input type="radio" name="Btype" value="O">O.
<input type="radio" name="Btype" value="AB">AB.

<p>What is/are class(es) you will take next term? (Check all that apply)<br>
<input type="checkbox" name="subject[]" value="CIS109">CIS109
<input type="checkbox" name="subject[]" value="CIS179">CIS179
<input type="checkbox" name="subject[]" value="CIS189">CIS189
<input type="checkbox" name="subject[]" value="CIS199">CIS199

<p>Payment Method:<select name="payment">
<option value="COD">COD
<option value="Check">Check
<option value="Credit Card" selected> Credit Card
</select>
<p>Comment<textarea name="comment" rows=5 cols=90></textarea>
<p><input type="submit" Value="Submit">
</form>
<?php
}
?>