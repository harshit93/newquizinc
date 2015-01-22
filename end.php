
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Online Quiz | Quizzitch Cup 2014</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Camping in the woods.">
        <meta name="author" content="aaghran" >

        <!--[if lt IE 9]>
          <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->

        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/main.css" rel="stylesheet">


    </head>
    <body>

        <nav class="navbar navbar-default" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <a class="navbar-brand" href="#">Online Quiz</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                </ul>
                <ul class="nav navbar-nav navbar-right">

                                      <li><a href="http://quizzitch.quizinc.in">Back to Quizzitch Cup</a></li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>  
        <div class="sidebar ">


        </div>

        <div class="row" style="margin-top: 40px">
            <div class="col-md-8 col-md-offset-1 well well-lg">
                <?php if ($_GET['p'] == 'over') { ?>
                    <center>Sorry, you have only one chance for one day. Come back tomorrow to play the next round.</center>
                <?php } else { ?>
                    <center>Congratulations you have scored <?php echo $_GET['p'] ?> points.<br />To play more come back tomorrow same time at 9pm, we will be having more questions for you, same pattern, same rules.</center>
                <?php } ?>  
                    <center><br /><br /><br /> <a href="http://quizzitch.quizimc.in">Back to Quizzitch Cup</a></center>
            </div>
        </div>
    </body>
</html>

<script>
alert("Quizzitch Cup events tomorrow : \n Linquizzitor (Tech Quiz) at 4:30pm \n Quizzitch Cup (General Quiz) at 9pm \n Venue : Lord's NIT Durgapur ");

</script>