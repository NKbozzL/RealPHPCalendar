<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>N Boesel Lab 2</title>
		<link rel="stylesheet"  href="../webstyle.css" type="text/css" />
		<link rel="stylesheet"  href="kaylender.css" type="text/css" />
	</head>
	<body>
		<?php include "../menu.inc";?>
		
		<div id="topside">
		<?php include "../school.inc";?>
		
		<?php include "../meinfo.php";?>
		</div>
		
		<div id="calendario">
			<h2>Office Hours Setup Form<br /></h2>
			
			<div class="pickdays">
				<div class="sunday">Day:</div>
				<div class="monday">Monday</div>
				<div class="tuesday">Tuesday</div>
				<div class="wednesday">Wednesday</div>
				<div class="thursday">Thursday</div>
				<div class="friday">Friday</div>
			</div>
			
			<form action="calender.php"id="appdates" method="post">
				<div class="timepickers">
					<div class="Psunday">Time:</div>
					<div class="Pmonday"> 
						<select name="mondates[]" size="15" multiple="multiple">
							<option value="7:00am">7:00am</option>
							<option value="7:30am">7:30am</option>
							<option value="8:00am">8:00am</option>
							<option value="8:30am">8:30am</option>
							<option value="9:00am">9:00am</option>
							<option value="9:30am">9:30am</option>
							<option value="10:00am">10:00am</option>
							<option value="10:30am">10:30am</option>
							<option value="11:00am">11:00am</option>
							<option value="11:30am">11:30am</option>
							<option value="12:00pm">12:00pm</option>
							<option value="12:30pm">12:30pm</option>
							<option value="1:00pm">1:00pm</option>
							<option value="1:30pm">1:30pm</option>
							<option value="2:00pm">2:00pm</option>
							<option value="2:30pm">2:30pm</option>
							<option value="3:00pm">3:00pm</option>
							<option value="3:30pm">3:30pm</option>
							<option value="4:00pm">4:00pm</option>
							<option value="4:30pm">4:30pm</option>
							<option value="5:00pm">5:00pm</option>
							<option value="5:30pm">5:30pm</option>
							<option value="6:00pm">6:00pm</option>
							<option value="6:30pm">6:30pm</option>
							<option value="7:00pm">7:00pm</option>
							<option value="7:30pm">7:30pm</option>
							<option value="8:00pm">8:00pm</option>
							<option value="8:30pm">8:30pm</option>
							<option value="9:00pm">9:00pm</option>
							<option value="9:30pm">9:30pm</option>
							<option value="10:00pm">10:00pm</option>
						</select>
					</div>
					<div class="Ptuesday">
						<select name="tuesdates[]" size="15" multiple="multiple">
							<option value="7:00am">7:00am</option>
							<option value="7:30am">7:30am</option>
							<option value="8:00am">8:00am</option>
							<option value="8:30am">8:30am</option>
							<option value="9:00am">9:00am</option>
							<option value="9:30am">9:30am</option>
							<option value="10:00am">10:00am</option>
							<option value="10:30am">10:30am</option>
							<option value="11:00am">11:00am</option>
							<option value="11:30am">11:30am</option>
							<option value="12:00pm">12:00pm</option>
							<option value="12:30pm">12:30pm</option>
							<option value="1:00pm">1:00pm</option>
							<option value="1:30pm">1:30pm</option>
							<option value="2:00pm">2:00pm</option>
							<option value="2:30pm">2:30pm</option>
							<option value="3:00pm">3:00pm</option>
							<option value="3:30pm">3:30pm</option>
							<option value="4:00pm">4:00pm</option>
							<option value="4:30pm">4:30pm</option>
							<option value="5:00pm">5:00pm</option>
							<option value="5:30pm">5:30pm</option>
							<option value="6:00pm">6:00pm</option>
							<option value="6:30pm">6:30pm</option>
							<option value="7:00pm">7:00pm</option>
							<option value="7:30pm">7:30pm</option>
							<option value="8:00pm">8:00pm</option>
							<option value="8:30pm">8:30pm</option>
							<option value="9:00pm">9:00pm</option>
							<option value="9:30pm">9:30pm</option>
							<option value="10:00pm">10:00pm</option>
						</select>
					</div>
					<div class="Pwednesday">
						<select name="wednesdates[]" size="15" multiple="multiple">
							<option value="7:00am">7:00am</option>
							<option value="7:30am">7:30am</option>
							<option value="8:00am">8:00am</option>
							<option value="8:30am">8:30am</option>
							<option value="9:00am">9:00am</option>
							<option value="9:30am">9:30am</option>
							<option value="10:00am">10:00am</option>
							<option value="10:30am">10:30am</option>
							<option value="11:00am">11:00am</option>
							<option value="11:30am">11:30am</option>
							<option value="12:00pm">12:00pm</option>
							<option value="12:30pm">12:30pm</option>
							<option value="1:00pm">1:00pm</option>
							<option value="1:30pm">1:30pm</option>
							<option value="2:00pm">2:00pm</option>
							<option value="2:30pm">2:30pm</option>
							<option value="3:00pm">3:00pm</option>
							<option value="3:30pm">3:30pm</option>
							<option value="4:00pm">4:00pm</option>
							<option value="4:30pm">4:30pm</option>
							<option value="5:00pm">5:00pm</option>
							<option value="5:30pm">5:30pm</option>
							<option value="6:00pm">6:00pm</option>
							<option value="6:30pm">6:30pm</option>
							<option value="7:00pm">7:00pm</option>
							<option value="7:30pm">7:30pm</option>
							<option value="8:00pm">8:00pm</option>
							<option value="8:30pm">8:30pm</option>
							<option value="9:00pm">9:00pm</option>
							<option value="9:30pm">9:30pm</option>
							<option value="10:00pm">10:00pm</option>
						</select>
					</div>
					<div class="Pthursday">
						<select name="thursdates[]" size="15" multiple="multiple">
							<option value="7:00am">7:00am</option>
							<option value="7:30am">7:30am</option>
							<option value="8:00am">8:00am</option>
							<option value="8:30am">8:30am</option>
							<option value="9:00am">9:00am</option>
							<option value="9:30am">9:30am</option>
							<option value="10:00am">10:00am</option>
							<option value="10:30am">10:30am</option>
							<option value="11:00am">11:00am</option>
							<option value="11:30am">11:30am</option>
							<option value="12:00pm">12:00pm</option>
							<option value="12:30pm">12:30pm</option>
							<option value="1:00pm">1:00pm</option>
							<option value="1:30pm">1:30pm</option>
							<option value="2:00pm">2:00pm</option>
							<option value="2:30pm">2:30pm</option>
							<option value="3:00pm">3:00pm</option>
							<option value="3:30pm">3:30pm</option>
							<option value="4:00pm">4:00pm</option>
							<option value="4:30pm">4:30pm</option>
							<option value="5:00pm">5:00pm</option>
							<option value="5:30pm">5:30pm</option>
							<option value="6:00pm">6:00pm</option>
							<option value="6:30pm">6:30pm</option>
							<option value="7:00pm">7:00pm</option>
							<option value="7:30pm">7:30pm</option>
							<option value="8:00pm">8:00pm</option>
							<option value="8:30pm">8:30pm</option>
							<option value="9:00pm">9:00pm</option>
							<option value="9:30pm">9:30pm</option>
							<option value="10:00pm">10:00pm</option>
						</select>
					</div>
					<div class="Pfriday">
						<select name="fridates[]" size="15" multiple="multiple">
							<option value="7:00am">7:00am</option>
							<option value="7:30am">7:30am</option>
							<option value="8:00am">8:00am</option>
							<option value="8:30am">8:30am</option>
							<option value="9:00am">9:00am</option>
							<option value="9:30am">9:30am</option>
							<option value="10:00am">10:00am</option>
							<option value="10:30am">10:30am</option>
							<option value="11:00am">11:00am</option>
							<option value="11:30am">11:30am</option>
							<option value="12:00pm">12:00pm</option>
							<option value="12:30pm">12:30pm</option>
							<option value="1:00pm">1:00pm</option>
							<option value="1:30pm">1:30pm</option>
							<option value="2:00pm">2:00pm</option>
							<option value="2:30pm">2:30pm</option>
							<option value="3:00pm">3:00pm</option>
							<option value="3:30pm">3:30pm</option>
							<option value="4:00pm">4:00pm</option>
							<option value="4:30pm">4:30pm</option>
							<option value="5:00pm">5:00pm</option>
							<option value="5:30pm">5:30pm</option>
							<option value="6:00pm">6:00pm</option>
							<option value="6:30pm">6:30pm</option>
							<option value="7:00pm">7:00pm</option>
							<option value="7:30pm">7:30pm</option>
							<option value="8:00pm">8:00pm</option>
							<option value="8:30pm">8:30pm</option>
							<option value="9:00pm">9:00pm</option>
							<option value="9:30pm">9:30pm</option>
							<option value="10:00pm">10:00pm</option>
						</select>
					</div>
				</div>
				<div id="buttonz"><p><input type="submit"/><input type="reset" value="Clear"/></p></div>
			</form>
		</div>
		
		<div id="copyright">
			<p>This web site is entirely original work and full academic copyright is retained. This web site complies with the Mason Honor Code (<a href="http://catalog.gmu.edu/content.php?catoid=5&amp;navoid=410#Honor">http://catalog.gmu.edu/content.php?catoid=5&amp;navoid=410#Honor</a>).</p>
		</div>
	</body>
</html>