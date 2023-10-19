<!DOCTYPE html>
<html>
	<head>
		<style>
			#footer {
				position: fixed;
				padding: 10px 10px 0px 10px;
				bottom: 0;
				width: 100%;
				/* Height of the footer*/
				height: 40px;
				background: #7be0b5;
			}
		</style>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js">
		</script>
		<script>
			$(document).ready(function()
			{
				$("#hide").click(function()
				{
					$("p").hide();
				});
				$("#show").click(function()
				{
					$("p").show();
				});
			});
		</script>
	</head>
	<body>
		<h2>jQuery show and hide example</h2>
		<p>jQuery hide() method hides the selected html element. In the following example, we are hiding the selected h2 element.
		We are calling $(this).hide(); inside this $("h2").click(function(), the $("h2").click(function() method runs when we click an h2 element because we have passed h2 in the jQuery selector $(“h2”). The method $(this).hide(); runs inside the click method and it hides the currently clicked element.
		Since this code will only run when an h2 element is clicked, this is why in the following example when you click on an h2 heading, it gets hidden but nothing happens when you click other elements such as paragraphs and button.</p>
		<button id="hide">hide</button>
		<button id="show">show</button>
		<div id="footer">
			<p align='center'>&copy; N.Ushasree all rights -- reserved </p>				
		</div>
	</body>