<?php include "include/h5.php"; ?>
<br/><br/>
    <div class="container md-1 col-md-6 col-sm-12">
        <div class="row">
            <div class="card-body">
                <div class="card  col-md-12 text-center">
                    <div class="card-header text-primary font-weight-bold alert alert-info col-lg-auto">
                        Upload CSV File...
                    </div>
                    <div class="card-body font-italic col-md text-center">
                        <h5 class="card-title  text-warning">Please Click This Button & Selected Csv file</h5>
                        <br>
                        <div class="col ml-5">
                            <input type="file" id="csvFileInput" style="padding-bottom: 15x">
                        </div>
                        </br>
                        <div class="col-lg-12 mr-0 mb-3">
                            <a href="analysis.php" class="btn btn-outline-primary font-weight-bold">Test</a>
                        </div>
                        <br>
                        <div class="col-lg-12">
                            <table id="csvRoot"></table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="./lib/papaparse.min.js"></script>
    <script type="module" src="./js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
</body>
</html>