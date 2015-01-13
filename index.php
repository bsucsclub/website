
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


        <style>

            rect {
                fill: none;
                pointer-events: all;
            }

            circle {
                fill: none;
                stroke-width: 2.5px;
            }
        </style>

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
                <div class="page-header">
                    <h1>Highlights</h1>
                </div>
                <div class="well" style="background: #e6daa6;">
                    <div class="row">

                        <div class="col-sm-4">
                            <div class="panel panel-info">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Tron Cats 2nd place</h3>
                                </div>
                                <div class="panel-body">
                                    <img src="images/tron_cats.jpg" class="img-responsive"/>
                                    <p>We tied for first at the Digi-Key competition.  It will be held again next year.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="panel panel-info">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Digi-Key</h3>
                                </div>
                                <div class="panel-body">
                                    <img src="images/team2.jpg" class="img-responsive"/>
                                    <p>Bemidji State University had two teams.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <!-- EVENTS -->
                <div class="page-header">
                    <h1>Events</h1>
                </div>		
                <table class="table table-responsive table-bordered" style="background-color: white;">
                    <tr>
                        <th scope="col">Date</th>
                        <th scope="col">Time</th>
                        <th scope="col">Location</th>
                        <th scope="col">Event</th>
                    </tr>
                    <!--[new event]-->
                    <!--<tr><td>December 3rd</td>
                        <td>4:00 PM</td>
                        <td>Hagg Sauer 104 THE CS LAB</td>
                        <td>C and C++ languages, a taste of pointers, structs, memory management, and compiling with makefiles. </td>
                    </tr>-->
                </table>

                <!-- NEWS -->
                <div class="page-header">
                    <h1></h1>
                </div>



                <!--
                <div class="col-sm-4">
                    <div class="panel panel-warning">
                        <div class="panel-heading">
                            <h3 class="panel-title">Github</h3>
                        </div>
                        <div class="panel-body">
                            <h5>check out the github site</h2> <a href="http://www.github.com/bsucsclub">BSU CSCLUB</a>
                        </div>
                    </div>
                </div>
                -->
                <div class="col-sm-4">
                    <div class="panel panel-warning">
                        <div class="panel-heading">
                            <h3 class="panel-title">Sign up</h3>
                        </div>
                        <div class="panel-body">
                            <a href="https://docs.google.com/forms/d/1q-N_LMSw05PjY1C2lLa6O6KcNCOIeHaQraVI7Mp_WzY/viewform?usp=send_form">Sign up here to receive our emails</a>
                        </div>
                    </div>

                </div><!-- /.col-sm-4 -->
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
    <!--Particle Demonstration -->
</body>
</html>
