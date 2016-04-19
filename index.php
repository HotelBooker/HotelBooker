<!DOCTYPE <!DOCTYPE html>

<html>
<head>
	<title>Hotel Booker</title>
  <meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style/stylesearch.css">
   <link rel="stylesheet" href="http://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="http://code.jquery.com/jquery-1.10.2.js"></script>
  <script src="http://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  <link rel="stylesheet" href="http://jqueryui.com/resources/demos/style.css">
  <script>
  $(function() {
    $("#datepicker1,#datepicker2").datepicker();
  });
  </script>
</head>
  <body>

<?php include "assets/header.php"; ?>

<div class="logo">
	<img src="img/logo2.png" alt="HotelBooker" width="275px">
</div>


<div class="list">
<form action="assets/search.php" method="post">
 	<ul>
	 	<div class ="column">
	 		<li><p>CHECK IN DATE</p></li>	
			<li><input type="text" id="datepicker1"></li>
		</div>

		<div class ="column">
			<li><p>CHECK OUT DATE</p></li>
			<li><input type="text" id="datepicker2"></li>
		</div>

		<div class ="column column75">
			<li><p>ADULTS</p></li>
			<li>
			<select name="adults">
			<option value="1">1</option>
			<option value="2">2</option>
			<option value="3">3</option>
			<option value="4">4</option>
			<option value="5">5</option>
			<option value="6">6</option>
			<option value="7">7</option>
			<option value="8">8</option>
			<option value="9">9</option>
			<option value="10">10</option>
			<option value="11">11</option>
			<option value="12">12</option>
			<option value="13">13</option>
			<option value="14">14</option>
			<option value="15">15</option>
			<option value="16">16</option>
			<option value="17">17</option>
			<option value="18">18</option>
			<option value="19">19</option>
			<option value="20">20</option>
			<option value="21">21</option>
			<option value="22">22</option>
			<option value="23">23</option>
			<option value="24">24</option>
			<option value="25">25</option>
			<option value="26">26</option>
			<option value="27">27</option>
			<option value="28">28</option>
			<option value="29">29</option>
			<option value="30">30</option>
			</select>
			</li>			
		</div>

		<div class ="column column75">
			<li><p>CHILDREN</p></li>
			<li>
			<select name="children">
			<option value="0">0</option>
			<option value="1">1</option>
			<option value="2">2</option>
			<option value="3">3</option>
			<option value="4">4</option>
			<option value="5">5</option>
			<option value="6">6</option>
			<option value="7">7</option>
			<option value="8">8</option>
			<option value="9">9</option>
			<option value="10">10</option>
			</select>
			</li>
		</div>

		<div class ="column column75">
			<li><p>ROOMS</p></li>
			<li>
			<select name="rooms">
			<option value="1">1</option>
			<option value="2">2</option>
			<option value="3">3</option>
			<option value="4">4</option>
			<option value="5">5</option>
			<option value="6">6</option>
			<option value="7">7</option>
			<option value="8">8</option>
			<option value="9">9</option>
			<option value="10">10</option>
			<option value="11">11</option>
			<option value="12">12</option>
			<option value="13">13</option>
			<option value="14">14</option>
			<option value="15">15</option>
			<option value="16">16</option>
			<option value="17">17</option>
			<option value="18">18</option>
			<option value="19">19</option>
			<option value="20">20</option>
			<option value="21">21</option>
			<option value="22">22</option>
			<option value="23">23</option>
			<option value="24">24</option>
			<option value="25">25</option>
			<option value="26">26</option>
			<option value="27">27</option>
			<option value="28">28</option>
			<option value="29">29</option>
			<option value="30">30</option>
			</select>
			</li>	
		</div>
	</ul>

	<div class="myButton">
		<button type="submit" name="search" href="assets/search.php" class="myButtonStyle">SEARCH NOW</button>
	</div>
</form> 
</div>



  </body>
</html>