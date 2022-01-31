<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Crime Prediction and Analysis </title>
    <link rel="icon" type="image/png" href="img/logo.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="./css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection" />
    <link href="./css/style.css" type="text/css" rel="stylesheet" media="screen,projection" />
</head>
    <style>
        body {
            /* The image used */ 
            background-color: #545352;
            /* Full height */
            height: 100vh;
            /* Center and scale the image nicely */
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }
        
        table {
            border-collapse: collapse;
            border-radius: 5px;
            box-shadow: 0 0 4px rgba(0, 0, 0, 0.25);
            overflow: hidden;
            font-family: "Quicksand", sans-serif;
            font-weight: bold;
            font-size: 14px;
        }
        
        th {
            background: #009578;
            color: #ffffff;
            text-align: left;
        }
        
        th,
        td {
            padding: 10px 20px;
        }
        
        tr:nth-child(even) {
            background: #eeeeee;
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a href="#">
            <img src="img/logo.png" class="mb-0 col" alt="" width="30px;" height="30px;">
        </a>
        <a class="navbar-brand text-warning font-italic font-weight-bold" href="">
            Crime Rate Analysis
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
         </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto ">
            <li class="nav-item">
          <a class="nav-link" href="analysis.php"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bar-chart-line text-primary" viewBox="0 0 16 16">
                            <path d="M11 2a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v12h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1v-3a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3h1V7a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v7h1V2zm1 12h2V2h-2v12zm-3 0V7H7v7h2zm-5 0v-3H2v3h2z"/>
                          </svg>Analysis</a>
        </li>
                <li class="nav-item">
                    <a class="nav-link font-italic text-info" href="index.php">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-in-right" viewBox="0 0 16 16">
			  <path fill-rule="evenodd" d="M6 3.5a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 0-1 0v2A1.5 1.5 0 0 0 6.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-8A1.5 1.5 0 0 0 5 3.5v2a.5.5 0 0 0 1 0v-2z"/>
			  <path fill-rule="evenodd" d="M11.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H1.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/>
			</svg> Logout
                    </a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="section no-pad-bot" id="index-banner">
        <div class="container">
        <div class="card-body">
                <div class="card  text-center">
                    <div class="card-header text-primary font-weight-bold font-italic alert alert-info col-lg-auto">
                    Prediction of Crimes
                    </div>
            <br><br>
            <h1 class="header center orange-text">Crime Rate Prediction</h1>
            <div class="row">
                <form action="/predict" method="post" class="col s12">
                    <div class="row">
                        <div class="input-field col s4">
                            <label for="first_name"><b>year</b></label>
                            <br>
                            <input placeholder="year" name="Year" id="first_name" type="text" class="validate">
                        </div>
                        <div class="input-field col s4">

                            <label for="last_name"><b>time</b></label>
                            <br>
                            <input id="last_name" name="time" placeholder="time" type="text" class="validate">

                        </div>

                        <div class="input-field col s4">
                            <label for="_name"><b>Month</b></label>
                            <br>
                            <input id="_name" name="Month" placeholder="month" type="text" class="validate">

                        </div>

                        <div class="input-field col s4">
                            <label for="_name"><b>Crime</b></label>
                            <br>
                            <input id="_name" name="Crime" placeholder="crime" type="text" class="validate">
                        </div>
                    </div>
                </br>
                    <div class="row">
                        <div class="col-sm-12 text-center">
                             <button type="submit" class="btn btn-outline-primary font-italic font-weight-bold" href="prediction.php">Predict...</button>
                        </div>
                    </div>
                </form>
            </div>
            <br> {{pred}}
            <br>
        </div>
    </div>
    </div>
    </div>



    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="./js/materialize.js"></script>
    <script src="./js/init.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
</body>

</html>