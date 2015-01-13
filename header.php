
<!-- Fixed navbar -->
<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
			
            <button type="button" class="navbar-toggle collapsed" id="ClossThis" data-toggle="collapse" data-target=".navbar-collapse">
				
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <a class="navbar-brand" href="http://cs.bemidjistate.edu">CS Program</a>
        </div>
        <div class="navbar-collapse collapse" id="ClossThis2">
			<nav>
            <ul class="nav navbar-nav">
                <li class="active" ><a onclick="clossNav()" href="/csclub/index.php">Home</a></li>
                <li><a onclick="clossNav()" href="/csclub/content/history.php">History</a></li>
                <li><a onclick="clossNav()" href="/csclub/content/calendar.php">Calendar</a></li>
                <li><a onclick="clossNav()" href="/csclub/content/documents.php">Documents</a></li>
                <li><a onclick="clossNav()" href="/csclub/content/officers.php">Officers</a></li>
                <li><a onclick="clossNav()" href="/csclub/content/links.php">Links</a></li>
                <li><a onclick="clossNav()" href="mailto:bemidjistatecsclub@gmail.com">Email Us</a></li>
            </ul>
            <script>
			function clossNav() {
				document.getElementById("ClossThis").className = "navbar-toggle collapsed";
				document.getElementById("ClossThis2").className = "navbar-collapse collapse";
				
			}
			</script>
            </nav>
        </div><!--/.nav-collapse -->
    </div>
</div>
