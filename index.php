
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="images/favicon.ico">

        <title>BSU CS Club</title>

        <!-- Bootstrap core CSS -->
        <link href="http://getbootstrap.com/dist/css/bootstrap.min.css" rel="stylesheet">
        <!-- Bootstrap theme -->
        <link href="http://getbootstrap.com/dist/css/bootstrap-theme.min.css" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="http://getbootstrap.com/examples/theme/theme.css" rel="stylesheet">
        <script src="http://getbootstrap.com/assets/js/ie-emulation-modes-warning.js"></script>
        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- csclub css -->
        <link rel='stylesheet' type='text/css' href='css/csclub.css' />

    </head>

    <body role="document">

        <!-- Header Nav bar here -->
        <?php include('header.php'); ?>

        <div class="container theme-showcase"  id="main-content" role="main">
            <div id="guts">
                <!-- Main jumbotron for a primary marketing message or call to action -->
                <div class="jumbotron backgrounded" >
                    <h1>&nbsp; </h1>
                </div>

                <!-- EVENTS -->
                <div class="page-header">
                    <h1>Events</h1>
                </div>		
                <div class="well" style="background: #e6daa6;">
                    <div class="row">
                        <table class="table table-responsive table-bordered" style="background-color: white;">
                            <tr>
                                <th scope="col">Date</th>
                                <th scope="col">Time</th>
                                <th scope="col">Location</th>
                                <th scope="col">Event</th>
                            </tr> 
                            <tr><td>March 19th</td>
                                <td>4:00 PM</td>
                                <td>HAGG SAUER 104</td>
                                <td>Building a computer from pieces.  DIY construction.</td>
                            </tr>
                            <tr><td>April 10-11</td>
                                <td>Both days</td>
                                <td>University of North Dakota</td>
                                <td><a href="http://www.micsymposium.org/mics2015">MICS</a></td>
                            </tr>
                        </table>
                    </div>
                </div>

                <!-- HIGHLIGHTS -->
                <div class="page-header">
                    <h1>Highlights</h1>
                </div>
                <div class="well" style="background: #e6daa6;">
                    <div class="row">

                        <div class="col-sm-4">
                            <div class="panel panel-info">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Online resources</h3>
                                </div>
                                <div class="panel-body">

                                    <ul class="list-unstyled">
                                        <li><a href="http://hackerrank.com">hackerrank</a></li>
                                        <li><a href="http://udacity.com">udacity</a></li>
                                        <li><a href="http://codingame.com">codingame</a></li>
                                        <li><a href="http://codecademy.com">codecademy</a></li>
                                        <li><a href="http://rosalind.info">Rosalind.info</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <a href="content/league.php">
                            <div class="col-sm-4">
                                <div class="panel panel-info">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">League Tournament</h3>
                                    </div>
                                    <div class="panel-body">
                                        <h2>April 25th</h2>
                                        <img class="img-responsive" src="images/league.jpg"/>
                                    </div>
                                </div>
                            </div>
                        </a>

                        <div class="col-sm-4">
                            <div class="panel panel-info">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Practice for MICS programming competition.</h3>
                                </div>
                                <div class="panel-body">
                                    <a href="Solutions/all_problems.pdf">Come compete at MICS!</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="panel panel-info">
                                <div class="panel-heading">
                                    <h3 class="panel-title">How to Vote</h3>
                                </div>
                                <div class="panel-body">
                                    <h3>Log into the cs server</h3>
                                    <p>type: vote</p>
                                    <p>Last day to vote March 23rd</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- OTHER  -->
                <div class="page-header">
                    <h1>Other</h1>
                </div>
                <div class="well" style="background: #e6daa6;">
                    <div class="row">

                        <div class="col-sm-4">
                            <div class="panel panel-warning">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Sign up</h3>
                                </div>
                                <div class="panel-body">
                                    <a href="https://docs.google.com/forms/d/1q-N_LMSw05PjY1C2lLa6O6KcNCOIeHaQraVI7Mp_WzY/viewform?usp=send_form">Sign up here to receive our emails</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="panel panel-warning">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Suggest a person for the ballot</h3>
                                </div>
                                <div class="panel-body">
                                    <a href="http://goo.gl/forms/y1OMRMJhBe">Suggest a person for the 2015-2016 ballot.</a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div> <!-- /container -->

            <!-- Bootstrap core JavaScript
            ================================================== -->
            <!-- Placed at the end of the document so the pages load faster -->
            <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
            <script src="http://getbootstrap.com/dist/js/bootstrap.min.js"></script>
            <script src="http://getbootstrap.com/assets/js/docs.min.js"></script>
            <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
            <script src="http://getbootstrap.com/assets/js/ie10-viewport-bug-workaround.js"></script>
            <script type='text/javascript' src='js/modernizr.js'></script>
            <script type='text/javascript' src='js/dynamicpage.js'></script>
        </body>
    </html>
