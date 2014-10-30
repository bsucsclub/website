
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
                        <a href="content/league.php">

                            <div class="col-xs-4">
                                <div class="panel panel-danger">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">League of Legends</h3>
                                    </div>
                                    <div class="panel-body">
                                        <img src="images/league.jpg" class="img-responsive"/>
                                        <p>Sign-up for the League of Legends tournament December, 6th</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <div class="col-xs-4">
                            <div class="panel panel-info">
                                <div class="panel-heading">
                                    <h3 class="panel-title">D3.js</h3>
                                </div>
                                <div class="panel-body">
                                    <div id="particles"></div>
                                    <p>Scroll over this box!</p>
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
                    <tr>
                        <td>Wednesday November 5th, 2014</td>
                        <td>4:00pm</td>
                        <td>Hagg Sauer 245</td>
                        <td>DigiKey is coming.  They will be giving an informational talk on DigiKey.  Pizza and pop will provided.</td>
                    </tr>
                    <tr><td>Wednesday November 12th 2014</td>
                        <td>4:00pm</td>
                        <td>Hagg Sauer 245</td>
                        <td>Federated Insurance <em>A Day in the Life of a Programmer</em></td>
                    </tr>
                </table>

                <!-- NEWS -->
                <div class="page-header">
                    <h1>News</h1>
                </div>

                <div class="row">
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
        <!--Particle Demonstration -->
        <script src="http://d3js.org/d3.v3.min.js"></script>
        <script>

            var width = 280,
            height = 90;

            var i = 0;

            var svg = d3.select("#particles").append("svg")
            .attr("width", width)
            .attr("height", height);

            svg.append("rect")
            .attr("width", width)
            .attr("height", height)
            .on("ontouchstart" in document ? "touchmove" : "mousemove", particle);

            function particle() {
                var m = d3.mouse(this);

                svg.insert("circle", "rect")
                .attr("cx", m[0])
                .attr("cy", m[1])
                .attr("r", 1e-6)
                .style("stroke", d3.hsl((i = (i + 1) % 360), 1, .5))
                .style("stroke-opacity", 1)
                .transition()
                .duration(2000)
                .ease(Math.sqrt)
                .attr("r", 100)
                .style("stroke-opacity", 1e-6)
                .remove();

                d3.event.preventDefault();
            }

        </script>
    </body>
</html>
