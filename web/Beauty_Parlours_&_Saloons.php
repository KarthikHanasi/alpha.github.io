<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="themes/assets/ico/favicon.ico">
    <title></title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="include/css/theme.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="include/js/common.js"></script>

    <script type="text/javascript">
    $( document ).ready(function() {
      $("#txtSearch").click(function() {
        // alert("Hello");
        var lclTextSearch = $("#txtSearchText").val();

        window.location.href = "/web/category_details.php?id="+lclTextSearch;

      });

    });
    </script>
    
  </head>

  <body>
      <div class="header">
        <h2 class="companyName">InfyNow</h2>
	     <button type="button" class="pull-right btnMenu" data-toggle="modal" data-target="#myModal" style="outline:none;">
	     	<i class="fa fa-bars" style="font-size:40px; color: white;"></i>
        
		    </button>
        
      </div>

      <!-- The Modal -->
<div class="modal fade" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal body -->
      <div class="modal-body">
        <div class="row">
          <div class="col-sm-4"></div>

            <div class="col-sm-6">
            <!-- Modal body.. -->
                  <p><a href="#"><i class="fa fa-home"></i>&nbsp;&nbsp;Home</a></p>
                  <p><a href="about.php"><i class="fa fa-user"></i>&nbsp;&nbsp;&nbsp;About us</a></p>
                  <p><a href="advertising.php"><i class="fa fa-buysellads"></i>&nbsp;&nbsp;Advertising with us</a></p>
                  <p><a href="list_your_business.php"><i class="fa fa-briefcase"></i>&nbsp;&nbsp;List your Business</a></p>
                  <p><a href="contact_us.php"><i class="fa fa-address-book"></i>&nbsp;&nbsp;Contact us</a></p>
            </div>

          <div class="col-sm-2"></div>
        </div>
      </div>

    </div>
  </div>
</div>

<div class="modal fade" id="location">
  <div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-header">
        <h4 class="modal-title">Select City</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

          <!-- Modal body -->
          <div class="modal-body">
                  <div class="row">
                    <div class="col-sm-1"></div>
                        <div class="form-group col-sm-10">
                          <label>City:</label>
                          <!-- <input type="text" > -->
                          <select class="form-control" id="txtCity" name="txtCity">
                            <option id="1">BELAGAVI</option>
                            <option id="2">HUBBLLI</option>
                            <option id="3">BAGALKOT</option>

                          </select>
                        </div>
                    <div class="col-sm-1"></div>
                  </div>

                  <div class="row">
                    <div class="col-sm-1"></div>
                        <div class="form-group col-sm-10">
                          <label>Area:</label>
                          <!-- <input type="text" > -->
                          <select class="form-control" id="txtArea" name="txtArea">
                            <option id="1">REX</option>
                            <option id="2">HANUMAN NAGAR</option>
                            <option id="3">RAM NAGAR</option>

                          </select>
                        </div>
                    <div class="col-sm-1"></div>
                  </div>

                  <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal" id="txtSelect">Select</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                  </div>


              </div>

            </div>
          </div>
        </div>

      <div id="demo" class="carousel slide" data-ride="carousel">

            <!-- The slideshow -->
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="la.jpg" class="img-fluid" alt="Los Angeles" id="img-main">
              </div>
              <div class="carousel-item">
                <img src="chicago.jpg" class="img-fluid" alt="Chicago" id="img-main">
              </div>
              <div class="carousel-item">
                <img src="ny.jpg" class="img-fluid" alt="New York" id="img-main">
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

      <div class="row text-center">
        <div class="col-sm-1">
        </div>
      <!-- <div class="container location"> -->
        <div class="col-sm-3">
          <button class="btn-location" id="location" data-toggle="modal" data-target="#location"><i class="fa fa-map-marker"><span>&emsp;</span>BELAGAVI</i></button>
        </div>
         <div class="col-sm-4">
          <input type="text" name="txtSearchText" id="txtSearchText" class="search-input" placeholder="Search here..." list="txtSearchCategory">
          <!-- <span class="fa fa-search" aria-hidden="true"></span> -->
          <datalist id="txtSearchCategory">
                            <option id="1">Advertising Agencies</option>
                            <option id="2">Advocates</option>
                            <option id="3">Agriculture</option>
                            <option id="4">Architects</option>
                            <option id="5">Astrologers</option>
                            <option id="6">Automobiles</option>
                            <option id="7">Bag shops</option>
                            <option id="8">Bakeries & Sweetmarts</option>
                            <option id="9">Beauty Parlours & Saloons</option>
                            <option id="10">Blood Banks</option>
                            <option id="11">Book Shops</option>
                            <option id="12">Boutiques</option>
                            <option id="13">Building & Construction</option>
                            <option id="14">Cafe</option>
                            <option id="15">Caterers</option>
                            <option id="16">Chartered Accountants</option>
                            <option id="17">Chemical & Solvents</option>
                            <option id="18">Clothing stores</option>
                            <option id="19">Coaching Classes</option>
                            <option id="20">Computer Education & Training Centre</option>
                            <option id="21">Co-Operative Societies</option>
                            <option id="22">Courier Services</option>
                            <option id="23">Dance Classes</option>
                            <option id="24">Doctors</option>
                            <option id="25">Driving Classes</option>
                            <option id="26">Education</option>
                            <option id="27">Electrical Shops</option>
                            <option id="28">Electronics & Accessories</option>
                            <option id="29">Engineering Consultants</option>
                            <option id="30">Event Organizers</option>
                            <option id="31">Finance Companies</option>
                            <option id="32">Fitness centres</option>
                            <option id="33">Flower Shops</option>
                            <option id="34">Foot Wears</option>
                            <option id="35">Fruit Shops</option>
                            <option id="36">Gift Shops</option>
                            <option id="37">Home Appliances</option>
                            <option id="38">Hospitals</option>
                            <option id="39">Hotels</option>
                            <option id="40">Ice Cream Parlours</option>
                            <option id="41">Industrial Machinary</option>
                            <option id="42">IT Solutions</option>
                            <option id="43">Jewellery Shops</option>
                            <option id="44">Job consultants</option>
                            <option id="45">Karate Classes</option>
                            <option id="46">Language Classes</option>
                            <option id="47">Lodges</option>
                            <option id="48">Manufacturers</option>
                            <option id="49">Marriage Bureaus</option>
                            <option id="50">Marriage Halls</option>
                            <option id="51">Medical Shops</option>
                            <option id="52">Milk Dairy</option>
                            <option id="53">Music Classes & Instruments</option>
                            <option id="54">NGO</option>
                            <option id="55">Opticals</option>
                            <option id="56">Party Halls</option>
                            <option id="57">Pets</option>
                            <option id="58">Photo Studios</option>
                            <option id="59">Pizza & Burger Centers</option>
                            <option id="60">Printers Offset</option>
                            <option id="61">Real Estate</option>
                            <option id="62">Rentals</option>
                            <option id="63">Repairs & Services</option>
                            <option id="64">Restaurants</option>
                            <option id="65">Super Markets</option>
                            <option id="66">Tattoo</option>
                            <option id="67">Taxi services</option>
                            <option id="68">Tours & Travel Agencies</option>
                            <option id="69">X-Ray</option>
                            <option id="70">Zerox centers</option>
          </datalist>
        </div>
         <div class="col-sm-3">
          <button class="btn-location-search" id="txtSearch">SEARCH</button>
        </div>
      <!-- </div> -->
       <div class="col-sm-1">
        </div>
      </div>
      <br>

      <div class="container shadow">
      <div class="row text-center">
    
        <div class="col-4 col-sm-2 col-md-2">
        	<a href="category_details.php?id=Mens">
          		<img src="icons/Beauty Parlours & Saloons/Mens.jpg" height="70" width="70">
          		<p class="text-para">Mens</p>
      		</a>
        </div>

        <div class="col-4 col-sm-2 col-md-2">
          <a href="category_details.php?id=Womens">
          <img src="icons/Beauty Parlours & Saloons/Womens.jpg" height="70" width="70">
          <p class="text-para">Womens</p>
        </a>
        </div>

      </div>

	</div>    

</div>
<br>
<br>
      <?php include_once("include/nav/footer.php")?>
   
  </body>
</html>
