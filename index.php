
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
                <div class="page-header">
                    <h1>Highlights</h1>
                </div>
                <div class="well" style="background: #e6daa6;">
                    <div class="row">
                        <div class="col-xs-4">
                            <p> 
                                <a href="http://vim-adventures.com/">Learn Vim Editor With a Game<img src="http://joelhooks.com/images/vim_adventures.jpg" class="img-responsive" />
                            </a>
                            </p>
                        </div>
                        <div class="col-xs-4">
                            <img src="https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcTrt3uV0lfdtb4CeOG9vp-kfOViyP8uorKXOdOmGYHnndk28ijn6Q" class="img-responsive"/>
                            <p>Keep an eye out for the upcoming League of Legends tournament</p>
                        </div>
                        <div class="col-xs-4">
                            <a href="http://www.bemidjistate.edu/news/news-updates/2012/04/30/high-altitude-balloon-team">
                                High Altitude Air Balloon Project
                                <img src="http://www.weber.edu/WSUImages/WSUToday/balloon%20photo%201.jpg" class="img-responsive"/>
                            </a>
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
                    <tr>
                        <td>Monday October 6th, 2014</td>
                        <td>3:00pm</td>
                        <td>A.C. Clark Library</td>
                        <td>Programming Competition Practice (all invited)</td>
                    </tr>
                    <tr><td>Wed. Oct. 8</td>
                        <td>4:00pm</td>
                        <td>Hagg Sauer</td>
                        <td>Allianz is coming to talk about career opportunities</td>
                    </tr>
                    <tr><td>Wed. Oct. 29</td>
                        <td>4:00pm</td>
                        <td>Hagg Sauer</td>
                        <td>Ascensus is coming to talk about career opportunities</td>
                    </tr>
                </table>

                <!-- NEWS -->
                <div class="page-header">
                    <h1>News</h1>
                </div>

                <div class="row">
                    <div class="col-sm-4">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h3 class="panel-title">AIC/ACS</h3>
                            </div>
                            <div class="panel-body" style="overflow:auto;">
                                <h5>AIC/ACS Contact</h5>
                                <p>Skip Fogus talked to the Data and Networking class Monday Sept. 8th.
                                <table class="table table-bordered">
                                    <tr><td>name</td><td>Skip Fogus</td></tr>
                                    <tr><td>email</td><td>skip.fogus@analysts.com</td></tr>
                                    <tr><td>phone</td><td>952-838-3023</td></tr>
                                    <tr><td>website</td><td><a href="https://www.analysts.com">analysts.com</a></td></tr>
                                </table>
                            </div>
                        </div>
                    </div><!-- /.col-sm-4 -->

                    <div class="col-sm-4">
                        <div class="panel panel-info">
                            <div class="panel-heading">
                                <h3 class="panel-title">Digikey</h3>
                            </div>
                            <div class="panel-body">
                                <div class="news-story">
                                    <h5>Digikey Competition Problems</h5>
                                    <a href="https://drive.google.com/folderview?id=0B4GipPSd31cuZWFyMVRucm13SU0&usp=sharing">Digikey Contest</a>
                                </div>
                            </div>
                        </div>
                    </div><!-- /.col-sm-4 -->

                    <div class="col-sm-4">
                        <div class="panel panel-info">
                            <div class="panel-heading">
                                <h3 class="panel-title">CS Club Competition</h3>
                            </div>
                            <div class="panel-body">
                                <div class="news-story">
                                    <h5>Our very own Programming Competition</h5>
                                    <a href="competition">Problems and Solutions</a>
                                </div>
                            </div>
                        </div>
                    </div><!-- /.col-sm-4 -->

                    <div class="col-sm-4">
                        <div class="panel panel-warning">
                            <div class="panel-heading">
                                <h3 class="panel-title">Github</h3>
                            </div>
                            <div class="panel-body">
                                <h5>check out the github site</h2> <a href="http://www.github.com/bsucsclub">BSU CSCLUB</a>
                            </div>
                        </div>

                    </div><!-- /.col-sm-4 -->
                    <div class="col-sm-4">
                        <div class="panel panel-warning">
                            <div class="panel-heading">
                                <h3 class="panel-title">Math Club Problem of the Month</h3>
                            </div>
                            <div class="panel-body">
                                <h5>Take part in Math Club's challenge!</h2> <a href="https://bemidjistate.collegiatelink.net/organization/mathclub/news/details/53458?fromCampus=False">BSU Math Club</a>
                            </div>
                        </div>

                    </div><!-- /.col-sm-4 -->
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
    </body>
</html>
