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
		
		<?php
		$nameBad = $emailBad = $timeBad = "";
		$name = "";
		$email = "";
		$pickedtime = "";
		$pickedday = "";
		
					
					
		if (isset($_POST["doit"]))
		{	

			if (empty($_POST["name"])) {$nameBad = "Please enter name";} 
			else {$name = $_POST["name"];}
			
			if (empty($_POST["email"])) {$emailBad = "Please enter Email";}
			else{$email = $_POST["email"];
					if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {$emailBad = "Bad E-mail formatting"; }}
					
			if (empty($_POST["picktime"])) {$timeBad = "Please pick a time";}
			else {$pickedtime = ($_POST["picktime"]);}
			
			
		}
		?>
		<div id="calendario">
			<h2>Office Hours Sign Up<br /></h2>
			<form action="calender.php" id="emailentry" method="post">
				<p>Student Name:<input type="text" name="name" value="<?php echo $name;?>"/>
				Student Email:<input type="text" name="email" value="<?php echo $email;?>"/>
				<input type="hidden" value="Submit" name="doit"/>
				<input type="submit" value="Submit"/><input type="reset" value="Clear"/>
				<?php 
				if (isset($_POST["doit"]))
				{
					if (empty($_POST["name"])){echo $nameBad;}
					elseif (empty($_POST["email"]) || !filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)){echo $emailBad;}
					elseif (empty($_POST["picktime"])) {echo $timeBad;}
					else 
					{
						mail($email,"Meeting Booked!","Meeting booked with N Boesel for ".$pickedtime." of ".date('M'));
						echo "Meeting Booked!";
					}
				}
				?>
				</p>
			
			<?php
				echo"<div id='monthbar'>";
					
						echo date("F Y");
					
				echo"</div>";

				echo"<div class='weekdays'>";
						echo"<div id='sun'>Sunday</div>";
						echo"<div id='mon'>Monday</div>";
						echo"<div id='tue'>Tuesday</div>";
						echo"<div id='wed'>Wednesday</div>";
						echo"<div id='thu'>Thursday</div>";
						echo"<div id='fri'>Friday</div>";
						echo"<div id='sat'>Saturday</div>";
				echo"</div>";
				
					$mdates=isset($_POST["mondates"]) ? $_POST["mondates"]: '';
					$tudates=isset($_POST["tuesdates"]) ? $_POST["tuesdates"]: '';
					$wdates=isset($_POST["wednesdates"]) ? $_POST["wednesdates"]: '';
					$thdates=isset($_POST["thursdates"]) ? $_POST["thursdates"]: '';
					$fdates=isset($_POST["fridates"]) ? $_POST["fridates"]: '';
					
					if (isset($_POST["doit"]))
					{
						$mdates=isset($_POST["datesm"]) ? $_POST["datesm"]: '';
						$tudates=isset($_POST["datestu"]) ? $_POST["datestu"]: '';
						$wdates=isset($_POST["datesw"]) ? $_POST["datesw"]: '';
						$thdates=isset($_POST["datesth"]) ? $_POST["datesth"]: '';
						$fdates=isset($_POST["datesf"]) ? $_POST["datesf"]: '';
					}
					$days_in_month=date("t");
					$first_day=date("w",mktime(0,0,0,date("n"),1,date("Y")));
					$i=0;
					$week=1;
					while($i<$first_day)
						{	
							switch($i%7)
							{
							case 0:
								echo "<div class='sunday week".$week."' id='empty".$i."'></div>";
								break;
							case 1:
								echo "<div class='monday week".$week."' id='empty".$i."'></div>";
								break;
							case 2:
								echo "<div class='tuesday week".$week."' id='empty".$i."'></div>";
								break;
							case 3:
								echo "<div class='wednesday week".$week."' id='empty".$i."'></div>";
								break;
							case 4:
								echo "<div class='thursday week".$week."' id='empty".$i."'></div>";
								break;
							case 5:
								echo "<div class='friday week".$week."' id='empty".$i."'></div>";
								break;
							case 6:
								echo "<div class='saturday week".$week."' id='empty".$i."'></div>";
								break;
							default:
								break;
							}
							$i++;
						}
						$i++;
					while(($i>$first_day) &&($i<($days_in_month+$first_day+1)))
						{
							$realday=($i-$first_day);
							switch($i%7)
							{
							case 0:
								echo "<div class='Bsaturday week".$week."' id='day".$i."'>$realday</div>";
								break;
							case 1:
								$week++;
								echo "<div class='Bsunday week".$week."' id='day".$i."'>$realday</div>";
								break;
							case 2:
								echo "<div class='Bmonday week".$week."' id='day".$i."'>$realday";
								if(is_array($mdates))
								{
									foreach ($mdates as $time)
									{
											if($pickedtime==($time.$realday))
											{echo" <strong>$time -- $name</strong><br />";}
											else
											{echo "<input type='radio' name='picktime' value='".$time.$realday."'/><strong>".$time."</strong><br />";}
											if($week==2)
											{echo "<input type='hidden' name='datesm[]' value='".$time."'/>";}
									}
								}
								else
								{echo "";}
								echo "</div>";
								break;
							case 3:
								echo "<div class='Btuesday week".$week."' id='day".$i."'>$realday";
								if(is_array($tudates))
								{
									foreach ($tudates as $time)
									{	
										if($pickedtime==($time.$realday))
										{echo" <strong>$time -- $name</strong><br />";}
										else
										{echo "<input type='radio' name='picktime' value='".$time.$realday."'/><strong>".$time."</strong><br />";}
										if($week==2)
										{echo "<input type='hidden' name='datestu[]' value='".$time."'/>";}
									}
									
								}
								else
								{echo "";}
								echo "</div>";
								break;
							case 4:
								echo "<div class='Bwednesday week".$week."' id='day".$i."'>$realday";
								if(is_array($wdates))
								{
									foreach ($wdates as $time)
									{	
										if($pickedtime==($time.$realday))
										{echo" <strong>$time -- $name</strong><br />";}
										else
										{echo "<input type='radio' name='picktime' value='".$time.$realday."'/><strong>".$time."</strong><br />";}
										if($week==2)
											{echo "<input type='hidden' name='datesw[]' value='".$time."'/>";}
									}
									
								}
								else
								{echo "";}
								echo "</div>";
								break;
							case 5:
								echo "<div class='Bthursday week".$week."' id='day".$i."'>$realday";
								if(is_array($thdates))
								{
									foreach ($thdates as $time)
									{
											if($pickedtime==($time.$realday))
											{echo" <strong>$time -- $name</strong><br />";}
											else
											{echo "<input type='radio' name='picktime' value='".$time.$realday."'/><strong>".$time."</strong><br />";}
											if($week==2)
											{echo "<input type='hidden' name='datesth[]' value='".$time."'/>";}
									}
								}
								else
								{echo "";}
								echo "</div>";
								break;
							case 6:
								echo "<div class='Bfriday week".$week."' id='day".$i."'>$realday";
								if(is_array($fdates))
								{
									foreach ($fdates as $time)
									{
											if($pickedtime==($time.$realday))
											{echo" <strong>$time -- $name</strong><br />";}
											else
											{echo "<input type='radio' name='picktime' value='".$time.$realday."'/><strong>".$time."</strong><br />";}
											if($week==2)
											{echo "<input type='hidden' name='datesf[]' value='".$time."'/>";}
									}
								}
								else
								{echo "";}
								echo "</div>";
								break;
							default:
								break;
							}
							$i++;
						}
			?>
			</form>
		</div>
		
		<div id="copyright">
			<p>This web site is entirely original work and full academic copyright is retained. This web site complies with the Mason Honor Code (<a href="http://catalog.gmu.edu/content.php?catoid=5&amp;navoid=410#Honor">http://catalog.gmu.edu/content.php?catoid=5&amp;navoid=410#Honor</a>).</p>
		</div>
	</body>
</html>