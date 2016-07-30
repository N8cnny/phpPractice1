<?php
if ($_POST)
{
$address=$_POST['urls'];
header ("Location: $address ");
exit;
}
else
{
?>

<form action="<?php echo $_SERVER['PHP_SELF']; ?> " method="post">
<select name="urls">
<option value="http://www.apple.com">Apple</option>
<option value="http://www.reddit.com">Reddit</option>
<option value="http://www.fedex.com">Fedex</option>
<option value="http://www.google.com">Google</option>
<option value="http://www.samsung.com">Samsung</option>
</select>
<p> <input type="submit" Value="Submit">
</form>
<?php
}
?>
