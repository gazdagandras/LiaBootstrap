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

        <script src="lightbox/js/lightbox.min.js"></script>
        <link href="lightbox/css/lightbox.css" rel="stylesheet" />
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
                        <li role="presentation"><a href="index.php">Kezdőlap</a></li>
                        <li role="presentation"><a href="terkep.php">Google térkép</a></li>
                        <li role="presentation" class="active"><a href="galeria.php">Képgaléria</a></li>
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
                            <a href="images/Minion_dave.jpg" data-lightbox="image-1"  data-title="My caption">
                                <img src="images/Minion_dave.jpg" class="mini">
                            </a>
                        </div>
                        <div class="col-sm-4">
                            <a href="images/Minion_dave.jpg" data-lightbox="image-1">
                                <img src="images/Minion_dave.jpg" class="mini">
                            </a>
                        </div>
                        <div class="col-sm-4">
                            <a href="images/Minion_dave.jpg" data-lightbox="image-1">
                                <img src="images/Minion_dave.jpg" class="mini">
                            </a>
                        </div>
                        <div class="col-sm-4">
                            <a href="images/Minion_dave.jpg" data-lightbox="image-1">
                                <img src="images/Minion_dave.jpg" class="mini">
                            </a>
                        </div>

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
