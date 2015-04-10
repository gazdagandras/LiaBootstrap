<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Boostrap próbaoldal</title>

        <script src="//code.jquery.com/jquery-1.11.2.min.js"></script>

        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="css/base.css" type="text/css">

    </head>
    <body>

        <div class="container">

            <div class="row">
                <div class="col-md-12" id="header">
                    <h1>Boostrap próbaoldal</h1>    
                </div>
            </div>

            <div class="row">
                <div class="col-md-12" id="navigation">
                    <ul class="nav nav-pills nav-justified">
                        <li role="presentation" class="active"><a href="#">Home</a></li>
                        <li role="presentation"><a href="#">Profile</a></li>
                        <li role="presentation"><a href="#">Messages</a></li>
                        <li role="presentation"><a href="#">Profile</a></li>
                        <li role="presentation" class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-expanded="false">
                                Dropdown <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu" role="menu">
                                <li role="presentation"><a href="#">Messages</a></li>
                                <li role="presentation"><a href="#">Profile</a></li>
                            </ul>
                        </li>
                    </ul>   
                </div>
            </div>

            <div class="row">
                <div class="col-md-8 col-sm-7 col-xs-12" id="content">
                    Tartalom  

                    <h3>Képek:</h3>

                    <div class="row">
                        <div class="col-sm-4">
                            <img src="images/Minion_dave.jpg" class="mini">
                        </div>
                        <div class="col-sm-4">
                            <img src="images/Minion_dave.jpg" class="mini img-circle">
                        </div>
                        <div class="col-sm-4">
                            <img src="images/Minion_dave.jpg" class="mini">
                        </div>
                        <div class="col-sm-4">
                            <img src="images/Minion_dave.jpg" class="mini">
                        </div>
                        <div class="col-sm-4">
                            <img src="images/Minion_dave.jpg" class="mini">
                        </div>
                    </div>

                    <br>
                    <p>
                        <a class="btn btn-primary btn-xs" href="http://google.com">Google</a>

                    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                        </ol>

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner" role="listbox">
                            <div class="item active">
                                <img src="images/kep1.jpeg" alt="Kép 1">
                                <div class="carousel-caption">
                                    Első
                                </div>
                            </div>
                            <div class="item">
                                <img src="images/kep2.jpeg" alt="Kép 2">
                                <div class="carousel-caption">
                                    Második
                                </div>
                            </div>
                            <div class="item">
                                <img src="images/kep3.jpeg" alt="Kép 3">
                                <div class="carousel-caption">
                                    Harmadik
                                </div>
                            </div>
                        </div>

                        <!-- Controls -->
                        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>


                </div>
                <div class="col-md-4 col-sm-5 col-xs-12" id="sidebar">
                    Oldalsáv  

                    <table class="table table-striped">
                        <tr>
                            <th>Név:</th>
                            <th>Telefon:</th>
                        </tr>
                        <tr>
                            <td>Géza</td>
                            <td>70/1111-111</td>
                        </tr>
                        <tr>
                            <td>Géza</td>
                            <td>70/1111-111</td>
                        </tr>
                        <tr>
                            <td>Géza</td>
                            <td>70/1111-111</td>
                        </tr>
                        <tr>
                            <td>Géza</td>
                            <td>70/1111-111</td>
                        </tr>
                        <tr>
                            <td>Géza</td>
                            <td>70/1111-111</td>
                        </tr>
                    </table>

                    <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>

                </div>
            </div>

            <div class="row">
                <div class="col-md-12" id="footer">
                    Lábléc    
                </div>
            </div>

        </div>
    </body>
</html>
