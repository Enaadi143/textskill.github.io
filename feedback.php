<html>
    <head>
         <?php include'code/link.php'?>
         <style>
              #services
{
    font-size: 40px;
    border-bottom-style: ridge;
    font-weight: bold;
    border-bottom-color: #ff4f81;
    padding: 0px;
}
.inputboxstyle
{
    height:50px;
    font-size:18px;
    font-family: century;
    border:1px solid black;
    border-radius: 0px ;
}
.font
{
    font-size:18px;
}
 .errorbox1
            {
                position:absolute;left:230px;padding:10px;
            }
             .errorbox2
            {
                position:absolute;left:500px;padding:10px;
            }
         </style>
    </head>
    <body>

    <div class="container-fluid "style="background-attachment:fixed;">
       
        <!-- menu  stop -->
         <!-- header  start -->
      
        <!-- header  stop -->
  <div class="container" style="background:white;" >
            <div class="row">
                <div class="col-sm-12 " >
                     <center><strong id="services" class="hvr-underline-from-center">Feedback</strong></center><br/></div>
                   
                </div>
            </div>
        
        <div class="container" style="background: white;">
            <div class="row">
                <div class="col-sm-6">
                    <h2 style="color: #ff4f81;"> &#9743; Contact Info</h2><br/>
                    <div class="row">
                        <div class="col-sm-2 hvr-buzz" style="font-size:120px;">&#9991;</div>
                        <div class="col-sm-10 wow animated fadeInUp" data-wow-duration="2s">
                    <h3 style="color: #ff4f81; "> Address</h3>
                    <p class="font" style="line-height:30px"><b>Main Office :</b> Govt. Polytechnic, Madhogarh (Jalaun) - 285126, Jalaun, Madhogarh, Uttar Pradesh, 285126
                        <br/>49, Rampura Jagammanpur road, Madhogarh, JalaunUttar Pradesh, 285126
                    </p>
                        </div>
                </div>
                    <div class="row">
                        <div class="col-sm-2 hvr-buzz" style="font-size:120px;">&#9991;</div>
                        <div class="col-sm-10 wow animated fadeInUp"  data-wow-duration="4s">
                    <h3 style="color: #ff4f81; "> Phone Number</h3>
                    <p class="font" style="line-height:30px"><b>Call Us: </b>5162 - 238603
                    </p>
                    <p class="font" style="line-height:30px"><b>Support:  </b> (+91) 7355304387
                    </p>
                        </div>
                </div>
                     <div class="row">
                        <div class="col-sm-2 hvr-buzz" style="font-size:120px;">&#9991;</div>
                        <div class="col-sm-10 wow animated fadeInUp" data-wow-duration="6s">
                    <h3 style="color: #ff4f81; "> Email Address</h3>
                    <p class="font" style="line-height:30px">govt.polytechnic.madhogarh@gmail.com
                    </p>
                    <p class="font" style="line-height:30px">7355304387am@gmail.com
                    </p>
                        </div>
                </div>
                     <div class="row">
                        <div class="col-sm-2 hvr-buzz" style="font-size:120px;">&#9991;</div>
                        <div class="col-sm-10">
                            <h3 style="color: #ff4f81; "> Other Details</h3>
                            <p class="font" style="line-height:30px"><b>Site Name:</b>gpmadhogarh.com
                    </p>
                        </div>
                </div>
                </div>
                <div class="col-sm-6">
                      <h2 style="color: #ff4f81;"> &#9993; Send us a Message</h2>
                     <!--  <form role="form"  method="post" action="feed.php"> -->
          <?php if(@$_GET['q'])echo '<span style="font-size:18px;"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span>&nbsp;'.@$_GET['q'].'</span>';
else
{echo' 
<form role="form"  method="post" action="feed.php?q=feedback.php">

                          <div class="form-group wow animated fadeInUp" data-wow-duration="2s">
                              
                              <label class="font">Name <sup style="color:red;">*</sup></label>
                              <input type="text"  name="name" class="form-control inputboxstyle hvr-box-shadow-outset" required placeholder="Enter Name"
                                     onkeyup="namecheck()" id="t1"/><span id="t1error" class="errorbox1"></span><span id="t1errorpp"></span>
                             
                             
                                
                          </div>
                              <div class="form-group wow animated fadeInUp" data-wow-duration="4s">
                               <label class="font">Email <sup style="color:red;">*</sup></label>
                              <input type="text" name="email" class="form-control inputboxstyle hvr-box-shadow-outset" required placeholder="Enter Email ID"
                                     onkeyup="emailcheck()" id="t2"/><span id="t2error" class="errorbox2"></span><span id="t2errorpp"></span>
                              </div>
                          

 <div class=" wow animated fadeInUp" data-wow-duration="3s">
                                  <label class="font">Subject<sup style="color:red;">*</sup></label>
                                  <input type="text"  name="subject" class="form-control inputboxstyle hvr-box-shadow-outset" required placeholder="Enter Subject"
                                         onkeyup="numbercheck()" id="t4"/><span id="t4error" class="errorbox1"></span><span id="t4errorpp"></span>
                              </div>

                          <div class="form-group wow animated fadeInUp" data-wow-duration="5s">
                               <label class="font" >Your Message<sup style="color:red;">*</sup></label>
                               <textarea name="message" maxlength="200" minlength="5" style="height:150px;"class="form-control inputboxstyle hvr-box-shadow-outset" required placeholder="Enter Your Message"></textarea>
                              </div>
                          <div class="form-group">
                              <button  type="Submit" class="btn btn-danger navbar-right inputboxstyle hvr-box-shadow-outset wow animated fadeInUp form-control" data-wow-duration="10s"  style="border-radius: 8px;margin-right: 10px;">Send Message</button>
                              </div>
                      </form>
                      ';}
?>

                </div>
            </div>
        </div>
    
         
    </body>
</html>

