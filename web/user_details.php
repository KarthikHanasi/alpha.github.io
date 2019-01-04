<?php

      include_once("api/connClass.php");
      $db = new Database();
      $con = $db->getConnection();

     if(isset($_GET['id'])) {
          $lclID = $_GET['id'];
        } else {
          $lclID = "Hello";
        }

        $lclQuery = "SELECT * FROM user_details WHERE us_id = '$lclID'";
        $lclResult = $con->query($lclQuery);

            if($lclResult->rowCount() > 0){
            if($row = $lclResult->fetch(PDO::FETCH_ASSOC)) {
            # code...

            $lclAddress = $row['us_flat_name']." ".$row['us_street']." ".$row['us_area']." ".$row['us_city']."-".$row['us_pincode']." ".$row['us_state'];

            $lclMonOpen = ($row['us_mon_open']) == "" ? "Closed" : date("g:i a", strtotime($row['us_mon_open']));
            $lclMonClose = ($row['us_mon_close']) == "" ? "" : date("g:i a", strtotime($row['us_mon_close']));

            $lclTueOpen = ($row['us_tue_open']) == "" ? "Closed" : date("g:i a", strtotime($row['us_tue_open']));
            $lclTueClose = ($row['us_tue_close']) == "" ? "" : date("g:i a", strtotime($row['us_tue_close']));

            $lclWedOpen = ($row['us_wed_open']) == "" ? "Closed" : date("g:i a", strtotime($row['us_wed_open']));
            $lclWedClose = ($row['us_wed_close']) == "" ? "" : date("g:i a", strtotime($row['us_wed_close']));

            $lclThuOpen = ($row['us_thu_open']) == "" ? "Closed" : date("g:i a", strtotime($row['us_thu_open']));
            $lclThuClose = ($row['us_thu_close']) == "" ? "" : date("g:i a", strtotime($row['us_thu_close']));

            $lclFriOpen = ($row['us_fri_open']) == "" ? "Closed" : date("g:i a", strtotime($row['us_fri_open']));
            $lclFriClose = ($row['us_fri_close']) == "" ? "" : date("g:i a", strtotime($row['us_fri_close']));

            $lclSatOpen = ($row['us_sat_open']) == "" ? "Closed" : date("g:i a", strtotime($row['us_sat_open']));
            $lclSatClose = ($row['us_sat_close']) == "" ? "" : date("g:i a", strtotime($row['us_sat_close']));

            $lclSunOpen = ($row['us_sun_open']) == "" ? "Closed" : date("g:i a", strtotime($row['us_sun_open']));
            $lclSunClose = ($row['us_sun_close']) == "" ? "" : date("g:i a", strtotime($row['us_sun_close']));


          }
        }

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="themes/assets/ico/favicon.ico">
    <title></title>

<!-- =================================================================================================================== -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<!-- =================================================================================================================== -->
    <link rel="stylesheet" href="include/css/theme.css">
<!-- =================================================================================================================== -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- =================================================================================================================== -->
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
<!-- =================================================================================================================== -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!-- =================================================================================================================== -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<!-- =================================================================================================================== -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<!-- =================================================================================================================== -->
    <script src="include/js/common.js"></script>
<!-- =================================================================================================================== -->

<style type="text/css">
.pp{
  position:relative;
 margin-left:30%;
 margin-right:30%;
 top:-20px;
 height:50px;
 text-align:center;
 font-size:30px;
 }
 .w-print-block2{
  text-align:center;
   background:#007bff;
  float:left;
  width:100%;
  padding-bottom:15px;
  height:70px;
  margin-top:30px;
  margin-bottom:20px;
}
 .w-print-block{
  text-align:center;
 
  float:left;
  width:100%;
  padding-bottom:15px;
  min-height:30px;
  margin-top:30px;
}
 .print-icon {
  display:inline-block;
  border-radius: 50%;
  -o-border-radius: 50%;
  -moz-border-radius: 50%;
  -webkit-border-radius: 50%;
  background:#007bff;
  width:80px;
  height:80px;
  position:relative;
  cursor:pointer;
  border:7px solid transparent;
  transition: all 0.3s ease-out 0s;
  -webkit-transition: all 0.3s ease-out 0s;
  -moz-transition: all 0.3s ease-out 0s;
  -o-transition: all 0.3s ease-out 0s;
  margin-top:0px;
  padding-bottom:10px;
}
.p-t{
  margin-left:20%;
}
 .print-icon2 {

  display:inline-block;
  border-radius: 50%;
  -o-border-radius: 50%;
  -moz-border-radius: 50%;
  -webkit-border-radius: 50%;
  
  background:#007bff;
  width:80px;
  height:80px;
  position:relative;
  cursor:pointer;
  border:3px solid white;
  transition: all 0.3s ease-out 0s;
  -webkit-transition: all 0.3s ease-out 0s;
  -moz-transition: all 0.3s ease-out 0s;
  -o-transition: all 0.3s ease-out 0s;
  margin-top:0px;
  padding-bottom:10px;
}
.ff{
  color:white;
  text-align:center;
  
  margin-top:10px;
}
.f-size{
  font-size:30px;
 
}
@media screen and (max-width:400px){
  

.pp
{
  margin-left:5%;
  margin-right:5%;
}
.f-size{
  
  font-size:20px;

  text-align:center !important;
 
  
}
.w-print-block2 .print-icon2 {
 margin-left: 100%;
    width: 60px;
    height: 60px;
    font-size: 35px;
}
}
 
</style>
  </head>
  <body>
    <div class="header">
        <h2 class="companyName">InfyNow</h2>
          <button type="button" class="pull-right btnMenu" data-toggle="modal" data-target="#myModal" style="outline:none;">
        <i class="fa fa-bars" style="font-size:40px; color: white;"></i>
        
        </button>
        
      </div>
       

       <?php include_once("include/nav/modal_lines.php");?>
       
      <div id="demo" class="carousel slide" data-ride="carousel">

            <!-- The slideshow -->
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="<?php echo $row['us_image1']?>" class="img-fluid" alt="First Photo" id="img-main">
              </div>
              <div class="carousel-item">
                <img src="<?php echo $row['us_image2']?>" class="img-fluid" alt="Second Photo" id="img-main">
              </div>
              <div class="carousel-item">
                <img src="<?php echo $row['us_image3']?>" class="img-fluid" alt="Third Photo" id="img-main">
              </div>
              <div class="carousel-item">
                <img src="<?php echo $row['us_image4']?>" class="img-fluid" alt="Fourth Photo" id="img-main">
              </div>
              <div class="carousel-item">
                <img src="<?php echo $row['us_image5']?>" class="img-fluid" alt="Fifth Photo" id="img-main">
              </div>
              <div class="carousel-item">
                <img src="<?php echo $row['us_image6']?>" class="img-fluid" alt="Sixth Photo" id="img-main">
              </div>
            </div>

            <!-- Left and right controls -->
            <a class="carousel-control-prev" href="#demo" data-slide="prev">
              <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#demo" data-slide="next">
              <span class="carousel-control-next-icon"></span>
            </a>

      </div>
      <section>
      <div class="container-fluid">
        <div class="row content">
          <div class="col-md-12">
            <p class="bg-primary text-white pp"> <?php echo $row["us_business_name"]; ?></p>
          </div>
        </div>
      </div>
      </section>

        <section>
          <div class="container-fluid">
            <div class="row">
              <div class="col">
                <div class="w-print-block">
                  <div class="print-icon fa-3x">
                    <a href=""><i class="fa fa-phone ff" aria-hidden="true"></i></a>
                  </div>
                 <h5 class="f-size">Call</h5>
                </div>
              </div>
             <div class="col"><div class="w-print-block"><div class="print-icon fa-3x">
              <a href=""><i class="fa fa-map-marker ff" aria-hidden="true"></i></a>
             </div>
            <h5 class="f-size">Location</h5></div></div>
               <div class="col"><div class="w-print-block"><div class="print-icon fa-3x"><a href=""><i class="fa fa-globe ff" aria-hidden="true"></i></a>
             </div>
              <h5 class="f-size">Website</h5></div></div>

          </div>
        </div>
        </section>
          <section>
            <div class="container-fluid">
              <div class="row content">
                <div class="col-sm-12">
                    <div class="w-print-block2">
                      <div class="row">
                        <div class="offset-sm-2 offset-xs-2 col-2 col-sm-2"><img src="icons/gmail.jpg"></div></div>
                        <div class="col-2 col-sm-2"><div class="print-icon2 fa-3x"><i class="fa fa-facebook-official ff" ></i></div></div>
                      <div class="col-2 col-sm-2"><div class="print-icon2 fa-3x"><i class="fa fa-youtube-play ff" ></i></div></div>
                     <div class="col-2 col-sm-2"><div class="print-icon2 fa-3x"><i class="fa fa-share-alt ff" aria-hidden="true"></i></div></div>
                    </div>
                </div>
              </div>
            </div>
        </section>

      <!--   <section>
          <div class="container-fluid">
            <div class="row content">
              <div class="col-xs-4">
                <div class="w-print-block">
                  <div class="print-icon fa-3x">
                    <a href=""><i class="fa fa-phone ff" aria-hidden="true"></i></a>
                   
                  </div>
                   <h5 class="f-size">call</h5>
                </div>
              </div>
               <div class="col-xs-4"><div class="w-print-block"><div class="print-icon  fa-3x">
                <a href=""><i class="fa fa-map-marker ff" aria-hidden="true"></i></a>
               </div>
              <h5 class="f-size">Location</h5></div></div>
                 <div class="col-xs-4"><div class="w-print-block"><div class="print-icon fa-3x"><a href=""><i class="fa fa-globe ff" aria-hidden="true"></i></a>
               </div>
                <h5 class="f-size">Website</h5></div></div>
            </div>
        </div>
        </section>
      <section>
            <div class="container-fluid">
              <div class="row content">
                <div class="col-sm-12">
                    <div class="w-print-block2">
                      <div class="row">
                        <div class=" offset-sm-2  col-sm-2 col-xs-2"><div class="print-icon2 fa-3x"><i class="fa fa-envelope ff"   aria-hidden="true"></i></div></div>
                        <div class="col-sm-2 offset-xs-1 col-xs-2 "><div class="print-icon2 fa-3x"><i class="fa fa-facebook-official ff" ></i></div></div>
                        <div class=" col-sm-2 col-xs-2"><div class="print-icon2 fa-3x"><i class="fa fa-youtube-play ff" ></i></div></div>
                       <div class="col-sm-2 col-xs-2"><div class="print-icon2 fa-3x"><i class="fa fa-share-alt ff" aria-hidden="true"></i></div></div>
                      </div>
                    </div>
                </div>
              </div>
            </div>
  </section> -->
      <section>
          <div class="container-fluid">
                  <div class="row">
                    <div class="col-sm-6">
                    <div class="row">
                    <div class="col-sm-12">

                     <!--  <div>
                           <div class="card"><h1>Contact Details:</h1></div>
                            
                      </div> -->
                      <div class="card">
                            <div class="card-header"><b>Contact Number:</b></div>
                            <div class="card-body"><?php echo $row['us_mobile_no']?></div>
                      </div>
                    </div>
                    <div class="col-sm-12">
                      <div class="card">
                      <div class="card-header"><b>Address</b></div>
                      <div class="card-body"><?php echo $lclAddress?></div>
                    </div>
                   </div>
                  <div class="col-sm-12">
                     <div class="card">
                         <div class="card-header"><b>Description</b></div>
                         <div class="card-body"><?php echo $row['us_description']?></div>
                     </div>
                  </div>
                  <div class="col-sm-12">
                      <div class="card">
                        <div class="card-header"><b>Specialization</b></div>
                        <div class="card-body"><?php echo $row['us_specialization']?></div>
                      </div>
                  </div>
            </div>
        </div>
              <div class="offset-sm-1 col-sm-5">
                <div class="card">
                  <div class="card-header"><b>Working Hours</b></div>
                  <div class="card-body">
                    <p class="">Monday &emsp;&emsp; <?php echo $lclMonOpen ?>-<?php echo $lclMonClose ?><p>
                    <p class="">Tuesday &emsp;&emsp; <?php echo $lclTueOpen ?>-<?php echo $lclTueClose ?><p>
                    <p class="">Wednesday &nbsp;&nbsp; <?php echo $lclWedOpen ?>-<?php echo $lclWedClose ?><p>
                    <p class="">Thursday &emsp;&nbsp;&nbsp; <?php echo $lclThuOpen ?>-<?php echo $lclThuClose ?><p>
                    <p class="">Friday &emsp;&emsp;&emsp; <?php echo $lclFriOpen ?>-<?php echo $lclFriClose ?><p>
                    <p class="">Saturday &emsp;&nbsp;&nbsp;&nbsp; <?php echo $lclSatOpen ?>-<?php echo $lclSatClose ?><p>
                    <p class="">Sunday  &emsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <?php echo $lclSunOpen ?>-<?php echo $lclSunClose ?><p>

                  </div>
                </div>
              </div>
    
         </div>
      </div>
  </section>
              <?php include_once("include/nav/footer.php")?>
  </body>
  </html>