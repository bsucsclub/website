<?php
        if (!isset($_COOKIE['submitted']))
        {
                setcookie("submitted", "yes");
		$set = "no";
        }
        else
        {
   		$set = "yes"; 
        }
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--
        event.php
        
        SITE DESCRIPTION:
        	
        	A page that will thank a person for responding to an event.
        	
        MODIFICATION HISTORY:
        	
        	05-JAN-2009	Shawn Rakowski		New Webpage.   
        
-->
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<title>BSU Computer Science Club</title>
    <meta http-equiv="pragma" content="no-cache" />
    <meta http-equiv="Refresh" content="10; URL=index.html">
	<link href="./css/csclub.css" rel="stylesheet" type="text/css" /> 
	<script src="js/base.js" type="text/javascript" language="JavaScript">
	</script>
</head>
<body>
<div id="body">
	<div id="globalheader">
		<a name="top"></a>
		<div id='globalheadernav'>
		<ul>
			<li><a href='http://www.bemidjistate.edu/' accesskey='b' >BSU Home</a></li>
			<li><a href='http://www.bemidjistate.edu/students/' accesskey='t' >Students</a></li>
			<li><a href='http://www.bemidjistate.edu/faculty_staff/' accesskey='e'>Faculty/Staff</a></li>
			<li><a href='http://portal.bemidjistate.edu' accesskey='m'><span class='boldhighlight'>my</span><span class='boldblack'>BSU</span></a></li>
			<li><a id='globalheadernav_search_trigger' href='http://www.bemidjistate.edu/search/' accesskey='s'>Search</a></li>
			<li><a href='http://www.bemidjistate.edu/directory/' accesskey='d'>Directory</a></li>
			<li><a href='http://www.bemidjistate.edu/contact/' accesskey='c'>Contact</a></li>
			</ul>
		</div>
		<div id="globalhomelogo">
			<a accesskey="h" href="http://www.bemidjistate.edu">
				<span class="noscreen">Home</span>
			</a>	
		</div>
	</div>
	<div id="page">
		<div id="banner">
			<img id="win_laptop" src="images/win_laptop_button.png" 
			onmouseover="laptopMouse(true)" onmouseout="laptopMouse(false)"
			onclick="getContent('content/laptop.html','content', 'DRAWING DETAILS')" />
		</div>
		<div id="right_col">
			<div id="nav">
				<ul>
					<li class="link"><a href="index.html">Home</a></li>
					<li class="link"><a href="javascript:getContent('content/officers.html','content', 'OFFICERS')">Officers</a></li>
					<li class="link"><a href="javascript:getContent('content/documents.html','content', 'DOCUMENTS')">Documents</a></li>
					<li class="link"><a href="javascript:getContent('content/history.html','content', 'HISTORY')">History</a></li>
					<li class="link"><a href="javascript:getContent('content/links.html','content', 'LINKS')">Links</a></li>
					<li>&nbsp;</li>
					<li class="link"><a href="http://cs.bemidjistate.edu">CS Program</a></li>
				</ul>
			</div>
		</div>
		<div id="left_col_title">
			<div id="title">
				Thank you!
			</div>
		</div>
		<div id="left_col">
			<div id="content">
				<?php
				if ($set == "no")
				{	
					/* event confirmation/rejection script */

					$msg = 0;
					$msg = $_GET['msg_exists'];
					if ($msg != 0)
					{
						$fname = $_GET['fname'];
						$lname = $_GET['lname'];
						$name = $fname . " " . $lname;
						$event = $_GET['event'];
						$attend = $_GET['attend'];

						$msg = "CS Club Event Attendance Notice:\n";
						$msg .= "----------------------------------------------\n";
						$msg .= "Name: $fname $lname\n";
						$msg .= "Event: $event\n";
						$msg .= "Attending: $attend\n";
						$msg .= "----------------------------------------------\n";

						$to = "turn1she@cs.bemidjistate.edu";
						$subject = "CS Club: $name:$attend:$event";
						$mailheaders = "From: CS Club Website\n";
						/*$mailheaders .= "Reply-To: <no-reply>\n\n";*/
						
						echo "$name, thank you for responding!<br /><br />";
						if (mail($to, $subject, $msg, $mailheaders))
						{
							if ($attend == "yes")
							{
								echo "\t\tYour intent to attend this event has been recorded. \n";
								echo "\t\tWe look forward to seeing you at the $event.\n";
							}
							else
							{
								echo "\t\tIt has been recorded that you plan NOT to attend the $event. \n";
								echo "\t\tIf you change your mind, please contact an officer and let them know.\n";
							}
						}
						else
						{
							echo "\t\tUnfortunately your response failed to be recorded. \n";
							echo "\t\tPlease contact an officer and inform them of your decision.\n";
						}
						echo "\t\t<br /><br />\n\t\tThanks again!\n";
					}
					else
					{
						echo "\t\tNo message received!\n";
					}
				}
				else
				{
					echo "\t\tYou have already submitted your response.<br />\n";
					echo "\t\tIf you have changed your mind please contact an officer.\n";
				}
				?>
				<br />
				<p>
					You will be redirected to the CS Club home page in 10 seconds...
				</p>
			</div>
		</div>
		<div id="page_end"></div>
	</div>
	<div id="footer">
		<div id="copyright">
		&copy; 2009 BSU Computer Science Club<br />
		<a href="#top">Goto Top of Page</a>
		</div>
	</div>
</div>
</body>
</html>
