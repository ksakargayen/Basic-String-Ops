<?php 
	echo "<p><strong>Page to check for Palindrome</strong></p>";
	echo "method="post">";
	echo "Enter the String <input type="text" name="firstString">";
	echo "<input type="submit" value="Submit">"; 
?>
</form>
<?php 
	$str = $_POST["firstString"];
	//echo "$str<br>";
	$rev = strrev($str);
	//echo "$rev<br>";
	$strArray = str_split($str);
	$revArray = str_split($rev);
	$result=True;
	for ($x=0;$x<strlen($str);$x++)
	{
		if($strArray[$x]!=$revArray[$x])
		{
			$result = False;
			break;
		} 
	}
	if($result==True)
	{
		echo "<br>It's a Palindrome";
	}
	else {
		echo "<br>Oops!! Not a Palindrome";
	}
?>