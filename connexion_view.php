<!DOCTYPE html>
<html lang="en">
    <!-- START: Head-->
    <head>
        <meta charset="UTF-8">
        <title>Pick Admin</title>
        <link rel="shortcut icon" href="./asset/images/favicon.ico" />
        <meta name="viewport" content="width=device-width,initial-scale=1"> 

        <!-- START: Template CSS-->
        <link rel="stylesheet" href="./asset/vendors/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="./asset/vendors/jquery-ui/jquery-ui.min.css">
        <link rel="stylesheet" href="./asset/vendors/jquery-ui/jquery-ui.theme.min.css">
        <link rel="stylesheet" href="./asset/vendors/simple-line-icons/css/simple-line-icons.css">        
        <link rel="stylesheet" href="./asset/vendors/flags-icon/css/flag-icon.min.css">         
        <!-- END Template CSS-->

        <!-- START: Page CSS-->
        <link rel="stylesheet"  href="./asset/vendors/chartjs/Chart.min.css">
        <!-- END: Page CSS-->

        <!-- START: Page CSS-->   
        <link rel="stylesheet" href="./asset/vendors/morris/morris.css"> 
        <link rel="stylesheet" href="./asset/vendors/weather-icons/css/pe-icon-set-weather.min.css"> 
        <link rel="stylesheet" href="./asset/vendors/chartjs/Chart.min.css"> 
        <link rel="stylesheet" href="./asset/vendors/starrr/starrr.css"> 
        <link rel="stylesheet" href="./asset/vendors/fontawesome/css/all.min.css">
        <link rel="stylesheet" href="./asset/vendors/ionicons/css/ionicons.min.css"> 
        <link rel="stylesheet" href="./asset/vendors/themify-icons/themify-icons.css"> 
        <link rel="stylesheet" href="./asset/vendors/jquery-jvectormap/jquery-jvectormap-2.0.3.css">
        <!-- END: Page CSS-->
        <style>
            
            @import url(https://fonts.googleapis.com/css?family=Montserrat:700);
       
        .wall.container{
            background: url(./asset/images/voyage.jpg);
            
        }    
        .word {
            margin: auto;
            color: rgb(192, 201, 33);
            font: 700 normal 4em/1.5 "Montserrat", sans-serif;
            text-shadow: 1px 2px #1b1b1b, 2px 4px #1b1b1b, 3px 6px #1b1b1b, 4px 8px #1b1b1b,
            5px 10px #1b1b1b, 6px 12px #1b1b1b;
        }
        </style>
        <!-- START: Custom CSS-->
        <link rel="stylesheet" href="./asset/css/main.css">
    </head>
    <!-- END Head-->
    <!-- style custom -->
    <link rel="stylesheet" href="./asset/css/styleindex.css">
    <!-- START: Body-->
    <body id="main-container " class="default">
        <!-- START: Main Content-->
        <div class="container">
            <div class="wall">
                <div style="--i:1" class="block"></div>
                <div style="--i:2" class="block"></div>
                <div style="--i:.5" class="block"></div>
                <div style="--i:1.5" class="block"></div>
                <div style="--i:1.25" class="block"></div>
            </div>
           
            <div class="row vh-100 justify-content-between align-items-center">
                
                <div class="col-lg-8 d-lg-block d-none im word">
                    
                </div> 
                <div class="col-lg-4 ">
                    

                    <form action="#" method="post" autocomplete="off" data-parsley-validate class="row row-eq-height lockscreen  mt-5 mb-5">
                        
                        <div class="login-form col-12 ">
                            <div class="form-group mb-3">
                                <label for="emailaddress">Email address</label>
                                <input class="form-control" type="email" id="emailaddress" name="emailaddress" value="<?= getinput('emailaddress');  ?>" required placeholder="Enter your email">
                            </div>

                            <div class="form-group mb-3">
                                <label for="password">Password</label>
                                <input class="form-control" type="password" required id="password" name="password" placeholder="Enter your password">
                            </div>

                            <div class="form-group mb-3">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="checkbox-signin" checked="">
                                    <label class="custom-control-label" for="checkbox-signin">Remember me</label>
                                </div>
                            </div>

                            <div class="form-group mb-0">
                                <button class="btn btn-primary" type="submit" name="connexion"> Log In </button>
                            </div>
                           
                        </div>
                    </form>
                </div>

            </div>
        </div>
        <!-- END: Content-->

        
        <!-- START: Template JS-->
        <script src="./asset/vendors/jquery/jquery-3.3.1.min.js"></script>
        <script src="./asset/vendors/jquery-ui/jquery-ui.min.js"></script>
        <script src="./asset/vendors/moment/moment.js"></script>
        <script src="./asset/vendors/bootstrap/js/bootstrap.bundle.min.js"></script>    
        <script src="./asset/vendors/slimscroll/jquery.slimscroll.min.js"></script>
        <!-- END: Template JS-->

        <!-- START: APP JS-->
        <script src="./asset/js/app.js"></script>
        <!-- END: APP JS-->

        <!-- START: Page Vendor JS-->
        <script src="./asset/vendors/raphael/raphael.min.js"></script>
        <script src="./asset/vendors/morris/morris.min.js"></script>
        <script src="./asset/vendors/chartjs/Chart.min.js"></script>
        <script src="./asset/vendors/starrr/starrr.js"></script>
        <script src="./asset/vendors/jquery-flot/jquery.canvaswrapper.js"></script>
        <script src="./asset/vendors/jquery-flot/jquery.colorhelpers.js"></script>
        <script src="./asset/vendors/jquery-flot/jquery.flot.js"></script>
        <script src="./asset/vendors/jquery-flot/jquery.flot.saturated.js"></script>
        <script src="./asset/vendors/jquery-flot/jquery.flot.browser.js"></script>
        <script src="./asset/vendors/jquery-flot/jquery.flot.drawSeries.js"></script>
        <script src="./asset/vendors/jquery-flot/jquery.flot.uiConstants.js"></script>
        <script src="./asset/vendors/jquery-flot/jquery.flot.legend.js"></script>
        <script src="./asset/vendors/jquery-flot/jquery.flot.pie.js"></script>        
        <script src="./asset/vendors/chartjs/Chart.min.js"></script>  
        <script src="./asset/vendors/jquery-jvectormap/jquery-jvectormap-2.0.3.min.js"></script>
        <script src="./asset/vendors/jquery-jvectormap/jquery-jvectormap-world-mill.js"></script>
        <script src="./asset/vendors/jquery-jvectormap/jquery-jvectormap-de-merc.js"></script>
        <script src="./asset/vendors/jquery-jvectormap/jquery-jvectormap-us-aea.js"></script>
        <script src="./asset/vendors/apexcharts/apexcharts.min.js"></script>
        <!-- END: Page Vendor JS-->

        <!-- START: Page JS-->
        <script src="./asset/js/home.script.js"></script>
        <script>
            var
                words = ['Bonjour Mme , Mlle ,Mr','Veillez remplir le formulaire pour verifier vos droits dacces et vous connecter','I also heart Jade'],
                part,
                i = 0,
                offset = 0,
                len = words.length,
                forwards = true,
                skip_count = 0,
                skip_delay = 5,
                speed = 100;

                var wordflick = function(){
                setInterval(function(){
                    if (forwards) {
                        if(offset >= words[i].length){
                        ++skip_count;
                        if (skip_count == skip_delay) {
                            forwards = false;
                            skip_count = 0;
                        }
                        }
                    }
                    else {
                        if(offset == 0){
                            forwards = true;
                            i++;
                            offset = 0;
                            if(i >= len){
                            i=0;
                            } 
                        }
                    }
                    part = words[i].substr(0, offset);
                    if (skip_count == 0) {
                        if (forwards) {
                        offset++;
                        }
                        else {
                        offset--;
                        }
                    }
                    $('.word').text(part);
                },speed);
                };

                $(document).ready(function(){
                wordflick();
                });
        </script>
    </body>
    <!-- END: Body-->
</html>
