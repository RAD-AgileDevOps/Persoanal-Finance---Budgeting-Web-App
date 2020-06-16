<!doctype html lang="eng-TT">
<html>

<!--
		Developer: Roger De Four
		Email: radfinancialsystem@gmail.com // cell: +1-868-342-8587
		Date: 2020-06-04 17:00
		Description: Personal Finance App - Budgetary control

-->


	<head>
		<title>SG - Personal Finance Reporting</title>
		
		<meta charset="UTF-8">
		<meta name="author" content="Roger De Four - RAD Financial Systems">
		<meta name="description" content="Personal Finance Web App">
		<meta name="keywords" content="Personal Finace, budget, Net worth">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<!-- Bootstrap 4 -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
		
		<!-- PURE CSS -->
		
		<link rel="stylesheet" href="https://unpkg.com/purecss@2.0.3/build/pure-min.css" integrity="sha384-cg6SkqEOCV1NbJoCu11+bm0NvBRc8IYLRGXkmNrqUBfTjmMYwNKPWBTIKyw9mHNJ" crossorigin="anonymous">
		
		
		<!-- W3 CSS library-->
		
		<link rel="stylesheet" type="text/css"  href="https://www.w3schools.com/w3css/4/w3.css">
		
		
			
		<link rel="icon" type="image/icon" href="">
		
		
		
		<style>
		
			#radfs0001{
				
				text-align: center;
				
			}
		
			#radfs0002{
				
				text-align: right;
				
			}
		
		
		/*
			code segment for creation of a atationary heaser on the UI
		
		*/
		
		.sticky {
		  position: fixed;
		  top: 0;
		  width: 100%;
		}

      </style> 
		
		
		
		
		
		
		
		
		
		
		
		
		
	</head>
	
	
	<body  onload="what_date()"  class="w3-khaki">
		<div class="w3-container">
		
			<div id="myHeader" class="w3-container w3-teal">
				<h1 id="radfs0001">Personal Finance Reports</h2>	
			</div>
			
			<div  class=" w3-bar w3-black">
		
				<a href="sg_personal_finance_app_1_data_entry.php" class="w3-bar-item w3-button ">Home</a>
				<a href="sg_personal_finance_app_2_data_entryv2.php" class="w3-bar-item w3-button ">Expenses - Data Entry</a>
				<a href="#" class="w3-bar-item w3-button ">Expense Reporting</a>
				
					
			</div>
			
			<p onclick="what_date()" id="radfs0002"></p>
		
		
		
							
							
					<?php
							include_once 'report_finances.php';
					?>

	
	

			<script type="text/javascript">

				function what_date(){
					
					document.getElementById("radfs0002").innerHTML = Date();
				}

			</script> 


		</div>
					
					
			<script>
				window.onscroll = function() {myFunction()};

				var header = document.getElementById("myHeader");
				var sticky = header.offsetTop;

				function myFunction() {
				  if (window.pageYOffset > sticky) {
					header.classList.add("sticky");
				  } else {
					header.classList.remove("sticky");
				  }
				}
			</script>
	</body>
</html>