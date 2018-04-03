<!DOCTYPE html>
<!--
<style>
	.box {
		border:2px solid red;
		padding:20px;
		background-color: #f7f9f9; 
		box-shadow: 10px 10px grey;
	}
	#block {
		display: inline-block;
	}
	.menu {
		text-align: left;
		margin:20px 0px 20px 0px;
		padding: 5px 20px 15px 20px;
		font-family: monospace;
		height: 20px ;
		background-color: #aed6f1; 
		
		
	}
	.button{
		height: 30px;
		width: 120px;
		font-size: 20px;
		background-color: #aed6f1; 
		cursor: pointer;
		transition-duration: 0.4s;
		-webkit-transition-duration: 0.4s;
	}
	.home {
		float: left;
    	color: black; 
    	border: 2px; 
	}
	.home:hover {
    	box-shadow: 10px 10px 10px grey;
	}
	.pages {
		float: right;		
	}
	.palindrome{
		color: black; 
    	border: 2px;
	}
	.palindrome:hover {
    	box-shadow: 10px 10px 10px grey;
	}
	.pyramid{
		color: black; 
    	border: 2px;
	}
	.pyramid:hover {
    	box-shadow: 10px 10px 10px grey;
	}
</style>	
-->
<html>
	<div class="box">
		<head>
			<h1>Basic String Operations</h1>
		</head>
		<!--<div class="menu">
			<form action="redirect.php" method="post">
				<button class="button home" id="block">Home</button> 
				<div id="block" class="pages">
					<button name = "Palindrome" class="button palindrome" value="palin">Palindrome</button>
					<button class="button pyramid">Pyramid</button>
				</div>
			</form>			
		</div>-->

		<body>
			<h4>Palindrome</h4>
			<p> Palindrome is a word which has a same set of letters in the beginning as well as on the end</p>
			<p><strong>Page to check for Palindrome</strong></p>
			<form action="pali.php" method="post">
				Enter the String <input type="text" name="firstString">
				<input type="submit" value="Submit"> 
			</form>
			<br>
			<form action="arrays.php" method="post">
				Enter your car <input type="text" name="Cars" value="">
				<input type="submit" value="Submit"> 
			</form>
		</body>
	</div>	
</html>
