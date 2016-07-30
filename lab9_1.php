<?php
if($_POST)
{
$grade=$_POST["quiz"];
if ($grade >= 90){echo "A";}
 elseif ($grade >=80){echo "B";}
  elseif ($grade >=70){echo "C";}
   elseif ($grade >=60){echo "D";}
else {echo "F";}
}

else {

?>
<form method ="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
Grade: <input type="text" name="quiz" size=3> (i.e 59)
<input type="submit" value="Submit">
</form>

<?php }
?>