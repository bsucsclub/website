<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="images/favicon.ico">

        <title>BSU CS Club League of Legends Tournament</title>

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

        <link rel='stylesheet' type='text/css' href='../css/csclub.css' /> 
        <style>
            #pdf {
                width: 80%;
                height: 500px;
                margin: 2em auto;
                border: 10px solid #6699FF;
            }
            #pdf p {
                padding: 1em;
            }
            #pdf object {
                display: block;
                border: solid 1px #666;
            }
        </style>


    </head>

    <body role="document">


        <!-- Header Nav bar here -->
        <?php include('../header.php'); ?>


        <div class="container theme-showcase" id="main-content" role="main">
            <div id="guts">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h3 class="panel-title">Sign-Up</h3>
                    </div>
                    <div class="panel-body">
<iframe src="https://docs.google.com/forms/d/1P2joAo8h9jAmEAVVxbWFkrju2VNQ03ThTHz9b1souM0/viewform?embedded=true" width="760" height="500" frameborder="0" marginheight="0" marginwidth="0">Loading...</iframe>
                    </div>
                </div>
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h3 class="panel-title">Rules</h3>
                    </div>
                    <div class="panel-body">
                        <div class="embed-responsive embed-responsive-16by9">
                            <div id="pdf">
                                <object    data="rule.pdf" 
                                    type="application/pdf" 
                                    width="100%" 
                                    height="100%">
                                    <p>It appears you don't have a PDF plugin for this browser, you can <a href="rule.pdf">click here to download the PDF file.</a></p>
                                </object>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h3 class="panel-title">Final Bracket Results</h3>
                    </div>
                    <div class="panel-body">
                        <div class="embed-responsive embed-responsive-16by9">
                            <div id="pdf">
                                <object    data="8-consolation.pdf" 
                                    type="application/pdf" 
                                    width="100%" 
                                    height="100%">
                                    <p>It appears you don't have a PDF plugin for this browser, you can <a href="8-consolation.pdf">click here to download the PDF file.</a></p>
                                </object>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script src="http://getbootstrap.com/dist/js/bootstrap.min.js"></script>
        <script src="http://getbootstrap.com/assets/js/docs.min.js"></script>
        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <script src="http://getbootstrap.com/assets/js/ie10-viewport-bug-workaround.js"></script>
        <script type='text/javascript' src='../js/modernizr.js'></script>
        <script type='text/javascript' src='../js/dynamicpage.js'></script>
    </body>
</html>
