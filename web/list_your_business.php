

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="themes/assets/ico/favicon.ico">
    <title>List Your Business</title>

<!-- =================================================================================================================== -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<!-- =================================================================================================================== -->
    <link rel="stylesheet" href="include/css/theme.css">
<!-- =================================================================================================================== -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- =================================================================================================================== -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!-- =================================================================================================================== -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<!-- =================================================================================================================== -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<!-- =================================================================================================================== -->
    <script src="include/js/common.js"></script>
<!-- =================================================================================================================== -->

    <script type="text/javascript">
      
    </script>

  </head>

  <body style="background-color: #f1e5e5;">
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
                                  <p><a href="home.php"><i class="fa fa-home"></i>&nbsp;&nbsp;Home</a></p>
                                  <p><a href="about.php"><i class="fa fa-user"></i>&nbsp;&nbsp;&nbsp;About us</a></p>
                                  <p><a href="advertising.php"><i class="fa fa-buysellads"></i>&nbsp;&nbsp;Advertising with us</a></p>
                                  <p><a href="#"><i class="fa fa-briefcase"></i>&nbsp;&nbsp;List your Business</a></p>
                                  <p><a href="web/contact_us.php"><i class="fa fa-address-book"></i>&nbsp;&nbsp;Contact us</a></p>
                            </div>

                          <div class="col-sm-2"></div>
                        </div>
                      </div>

                    </div>
                  </div>
                </div>

                <div class="container">
                    <h1 class="col text-center">List Your Business</h1>

                <form method="POST" action="backend/process_user.php" enctype="multipart/form-data">
                  <div class="row">
                    <div class="col-sm-3"></div>
                        <div class="form-group col-sm-6">
                          <label>Business Name:*</label>
                          <input type="text" class="form-control" id="txtBusiName" name="txtBusiName" required>
                        </div>
                    <div class="col-sm-3"></div>
                  </div>

                  <div class="row">
                    <div class="col-sm-3"></div>
                        <div class="form-group col-sm-6">
                          <label>Mobile No:*</label>
                          <input type="text" class="form-control" id="txtMobileNo" name="txtMobileNo" maxlength="10" required>
                        </div>
                    <div class="col-sm-3"></div>
                  </div>

                  <div class="row">
                    <div class="col-sm-3"></div>
                        <div class="form-group col-sm-6">
                          <label>Email ID:*</label>
                          <input type="email" class="form-control" id="txtEmailID" name="txtEmailID" required>
                        </div>
                    <div class="col-sm-3"></div>
                  </div>

                  <div class="row">
                    <div class="col-sm-3"></div>
                        <div class="form-group col-sm-6">
                          <label>Website:</label>
                          <input type="text" class="form-control" id="txtWebsite" name="txtWebsite" required>
                        </div>
                    <div class="col-sm-3"></div>
                  </div>

                  <div class="row">
                    <div class="col-sm-3"></div>
                        <div class="form-group col-sm-6">
                          <label>Category:*</label>
                          <select class="form-control" id="selCategory" name="selCategory" required>
                            <option disabled="" hidden="" id="-1">Select Category</option>
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
                          </select>
                        </div>
                    <div class="col-sm-3"></div>
                  </div>

                  <div class="row">
                    <div class="col-sm-3"></div>
                        <div class="form-group col-sm-6">
                          <label>Sub Category:</label>
                          <!-- <input type="text" class="form-control" id="selSubCategory" name="selSubCategory"> -->
                          <select class="form-control" id="selCategory" name="selCategory">
                            <option id="1"></option>
                            <option id="2"></option>
                            <option id="3"></option>
                            <option id="4"></option>
                            <option id="5"></option>
                            <option id="6"></option>
                            <option id="7"></option>
                            <option id="8"></option>
                            <option id="9"></option>
                            <option id="10"></option>
                            <option id="11"></option>
                            <option id="12"></option>
                            <option id="13"></option>
                            <option id="14"></option>
                            <option id="15"></option>
                            <option id="16"></option>
                            <option id="17"></option>
                            <option id="18"></option>
                            <option id="19"></option>
                            <option id="20"></option>
                            <option id="21"></option>
                            <option id="22"></option>
                            <option id="23"></option>
                            <option id="24"></option>
                            <option id="25"></option>
                            <option id="26"></option>
                            <option id="27"></option>
                            <option id="28"></option>
                            <option id="29"></option>
                            <option id="30"></option>

                          </select>
                        </div>
                    <div class="col-sm-3"></div>
                  </div>

                  <div class="row">
                    <div class="col-sm-3"></div>
                        <div class="form-group col-sm-6">
                          <label>Address:</label>
                          <table>
                            <tr>
                              <td>
                                <input type="text" class="form-control" id="txtFlat" name="txtFlat" placeholder="Flat/building" required>
                              </td>
                              <td><input type="text" class="form-control" id="txtStreet" name="txtStreet" placeholder="Street" required></td>
                              <td>
                                <select class="form-control" id="selArea" name="selArea" required>
                                  <option value="Kulas Light">Kulas Light</option>
                                  <option value="Victor Plains">Victor Plains</option>
                                  <option value="Douglas Extension">Douglas Extension</option>
                                  <option value="Hoeger Mall">Hoeger Mall</option>
                                  <option value="Skiles Walks">Skiles Walks</option>
                                  <option value="Norberto Crossing">Norberto Crossing</option>
                                  <option value="Rex Trail">Rex Trail</option>
                                  <option value="Ellsworth Summit">Ellsworth Summit</option>
                                  <option value="Dayna Park">Dayna Park</option>
                                  <option value="Kattie Turnpike">Kattie Turnpike</option>
                                </select>
                              </td>
                            </tr>

                            <tr>
                              <td>
                                <select class="form-control" id="selCity" name="selCity" required>
                                  <option value="city">Belagavi</option>
                                </select>
                              </td>
                              <td>
                                <input type="text" class="form-control" id="txtPincode" name="txtPincode" placeholder="Pincode" required>
                              </td>
                              <td>
                                <select class="form-control" id="selState" name="selState" required>
                                  <option value="state">Karnataka</option>
                                </select>
                              </td>
                            </tr>
                          </table>
                        </div>
                    <div class="col-sm-3"></div>
                  </div>

                  <div class="row">
                    <div class="col-sm-3"></div>
                      <div class="form-group col-sm-6">
                        <label>Description:*</label>
                         <textarea type="text" id="txtDescription" name="txtDescription" class="form-control" rows="3" required="" data-gramm="true" data-txt_gramm_id="596ffebe-ced6-2644-8b0c-209eeb6cc7b2" maxlength="200" data-gramm_id="596ffebe-ced6-2644-8b0c-209eeb6cc7b2" spellcheck="false" data-gramm_editor="true" style="z-index: auto; position: relative; line-height: 24px; font-size: 16px; transition: none 0s ease 0s; background: white" required></textarea>
                      </div>
                    <div class="col-sm-3"></div>
                  </div>

                  <div class="row">
                    <div class="col-sm-3"></div>
                      <div class="form-group col-sm-6">
                        <label>Specialization:*</label>
                         <textarea type="text" id="txtSpecilization" name="txtSpecilization" class="form-control" rows="3" required="" data-gramm="true" data-txt_gramm_id="596ffebe-ced6-2644-8b0c-209eeb6cc7b2" data-gramm_id="596ffebe-ced6-2644-8b0c-209eeb6cc7b2" maxlength="200" spellcheck="false" data-gramm_editor="true" style="z-index: auto; position: relative; line-height: 24px; font-size: 16px; transition: none 0s ease 0s; background: white" required></textarea>
                      </div>
                    <div class="col-sm-3"></div>
                  </div>
                
                  <div class="row">
                    <div class="col-sm-3"></div>
                      <div class="form-group col-sm-6">
                          <table>
                            <tbody>
                              <tr>
                                <td>
                                  <label for="mon-open" class="black-text">Monday</label>
                                </td>
                                <td>
                                  <input type="time" class="form-control" id="txtMonOpen" name="txtMonOpen">
                                </td>
                                <td>
                                  <p>to</p>
                                </td>
                                <td>
                                  <input type="time" class="form-control" id="txtMonClose" name="txtMonClose">
                                </td>
                                <td>
                                  <input type="checkbox" class="form-control" id="txtMonClosed" name="txtMonClosed" value="Closed">Closed
                                </td>
                              </tr>
                              <tr>
                                <td>
                                  <label for="tue-open" class="black-text">Tuesday</label>
                                </td>
                                <td>
                                  <input type="time" class="form-control" id="txtTueOpen" name="txtTueOpen">
                                </td>
                                <td>
                                  <p>to</p>
                                </td>
                                <td>
                                  <input type="time" class="form-control" id="txtTueClose" name="txtTueClose">
                                </td>
                                <td>
                                  <input type="checkbox" class="form-control" id="txtTueClosed" name="txtTueClosed" value="Closed">Closed
                                </td>
                              </tr>
                              <tr>
                                <td>
                                  <label for="wed-open" class="black-text">Wednesday</label>
                                </td>
                                <td>
                                  <input type="time" class="form-control" id="txtWedOpen" name="txtWedOpen">
                                </td>
                                <td>
                                  <p>to</p>
                                </td>
                                <td>
                                  <input type="time" class="form-control" id="txtWedClose" name="txtWedClose">
                                </td>
                                <td>
                                  <input type="checkbox" class="form-control" id="txtWedClosed" name="txtWedClosed" value="Closed">Closed
                                </td>
                              </tr>
                              <tr>
                                <td>
                                  <label for="thu-open" class="black-text">Thursday</label>
                                </td>
                                <td>
                                  <input type="time" class="form-control" id="txtThuOpen" name="txtThuOpen">
                                </td>
                                <td>
                                  <p>to</p>
                                </td>
                                <td>
                                  <input type="time" class="form-control" id="txtThuClose" name="txtThuClose">
                                </td>
                                <td>
                                  <input type="checkbox" class="form-control" id="txtThuClosed" name="txtThuClosed" value="Closed">Closed
                                </td>
                              </tr>
                              <tr>
                                <td>
                                  <label for="fri-open" class="black-text">Friday</label>
                                </td>
                                <td>
                                  <input type="time" class="form-control" id="txtFriOpen" name="txtFriOpen">
                                </td>
                                <td><p>to</p>
                                </td>
                                <td>
                                  <input type="time" class="form-control" id="txtFriClose" name="txtFriClose">
                                </td>
                                <td>
                                  <input type="checkbox" class="form-control" id="txtFriClosed" name="txtFriClosed" value="Closed">Closed
                                </td>
                              </tr>
                              <tr>
                                <td>
                                  <label for="sat-open" class="black-text">Saturday</label>
                                </td>
                                <td>
                                  <input type="time" class="form-control" id="txtSatOpen" name="txtSatOpen">
                                </td>
                                <td>
                                  <p>to</p>
                                </td>
                                <td>
                                  <input type="time" class="form-control" id="txtSatClose" name="txtSatClose">
                                </td>
                                <td>
                                  <input type="checkbox" class="form-control" id="txtSatClosed" name="txtSatClosed" value="Closed">Closed
                                </td>
                              </tr>
                              <tr>
                                <td>
                                  <label for="sun-open" class="black-text">Sunday</label>
                                </td>
                                <td>
                                  <input type="time" class="form-control" id="txtSunOpen" name="txtSunOpen">
                                </td>
                                <td>
                                  <p>to</p>
                                </td>
                                <td>
                                  <input type="time" class="form-control" id="txtSunClose" name="txtSunClose">
                                </td>
                                <td>
                                  <input type="checkbox" class="form-control" id="txtSunClose" name="txtSunClosed" value="Closed">Closed
                                </td>
                              </tr>
                            </tbody>
                          </table>
                      </div>
                    <div class="col-sm-3"></div>
                  </div>

                  <div class="row">
                      <div class="col-sm-3"></div>
                          <div class="col-sm-6">
                            <h4>Upload Photos:</h4>
                          </div>
                      <div class="col-sm-3"></div>
                  </div>

                  <div class="row">
                    <div class="col-sm-3"></div>
                    
                          <div class="form-group col-sm-3">
                              <input type="file" name="firstPhoto1" id="firstPhoto1" required>
                          </div>
                         
                          <div class="form-group col-sm-3">
                              <input type="file" name="firstPhoto2" id="firstPhoto2" required>
                          </div>
                    <div class="col-sm-3"></div>
                  </div>
                      
                  <div class="row">
                    <div class="col-sm-3"></div>
                          <div class="form-group col-sm-3">
                              <input type="file" name="firstPhoto3" id="firstPhoto3" required>
                          </div>
                           
                          <div class="form-group col-sm-3">
                              <input type="file" name="firstPhoto4" id="firstPhoto4" required>
                          </div>
                    <div class="col-sm-3"></div>
                  </div>

                  <div class="row">
                    <div class="col-sm-3"></div>
                          <div class="form-group col-sm-3">
                              <input type="file" name="firstPhoto5" id="firstPhoto5" required>
                          </div>
                         
                          <div class="form-group col-sm-3">
                              <input type="file" name="firstPhoto6" id="firstPhoto6" required>
                          </div>
                    <div class="col-sm-3"></div>
                  </div>
                    

                  <div class="row">
                      <div class="col-sm-3"></div>
                          <div class="col-sm-6">
                            <h4>Connect Social Links:</h4>
                          </div>
                      <div class="col-sm-3"></div>
                  </div>

                  <div class="row">
                      <div class="col-sm-3"></div>
                          <div class="form-group col-sm-6">
                            <label>Gmail:</label>
                            <input type="text" class="form-control" id="txtGmail" name="txtGmail">
                          </div>
                      <div class="col-sm-3"></div>
                  </div>

                  <div class="row">
                    <div class="col-sm-3"></div>
                        <div class="form-group col-sm-6">
                          <label>Facebook:</label>
                          <input type="text" class="form-control" id="txtFacebook" name="txtFacebook">
                        </div>
                    <div class="col-sm-3"></div>
                  </div>

                  <div class="row">
                    <div class="col-sm-3"></div>
                        <div class="form-group col-sm-6">
                          <label>YouTube:</label>
                          <input type="text" class="form-control" id="txtYouTube" name="txtYouTube">
                        </div>
                    <div class="col-sm-3"></div>
                  </div>

                  <div class="row">
                    <div class="col-sm-3"></div>
                        <div class="form-group col-sm-6">
                         <button type="submit" class="btn btn-primary col text-center" name="signup">SUBMIT</button>
                        </div>
                    <div class="col-sm-3"></div>
                  </div>

                </form>

                </div>

               <?php include_once("include/nav/footer.php")?>

    </body>
</html>