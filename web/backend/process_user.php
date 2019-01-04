<?php
      header('location:../list_your_business.php');

      include_once("../api/connClass.php");
      $db = new Database();
      $con = $db->getConnection();

      if(isset($_POST['signup'])) {

      $lclBusiName = $_POST["txtBusiName"];
      $lclMobileNo = $_POST["txtMobileNo"];
      $lclEmailID = $_POST["txtEmailID"];
      $lclWebsite = $_POST["txtWebsite"];
      $lclCategory = $_POST["selCategory"];
      $lclSubCategory = $_POST["selSubCategory"];
      $lclFlat = $_POST["txtFlat"];
      $lclStreet = $_POST["txtStreet"];
      $lclArea = $_POST["selArea"];
      $lclCity = $_POST["selCity"];
      $lclPinCode = $_POST["txtPincode"];
      $lclState = $_POST["selState"];
      $lclDescription = $_POST["txtDescription"];
      $lclSpecialization = $_POST["txtSpecilization"];
      $lclMonOpen = $_POST["txtMonOpen"];
      $lclMonClose = $_POST["txtMonClose"];
      // $lclMonClosed = $_POST["txtMonClosed"];

      if(isset($_POST["txtMonClosed"])) {
            $lclMonClosed = $_POST["txtMonClosed"];
      } else {
            $lclMonClosed = "";
      }
      $lclTueOpen = $_POST["txtTueOpen"];
      $lclTueClose = $_POST["txtTueClose"];
      // $lclTueClosed = $_POST["txtTueClosed"];

      if(isset($_POST["txtTueClosed"])) {
            $lclTueClosed = $_POST["txtTueClosed"];
      } else {
            $lclTueClosed = "";
      }

      $lclWedOpen = $_POST["txtWedOpen"];
      $lclWedClose = $_POST["txtWedClose"];
      // $lclWedClosed = $_POST["txtWedClosed"];

      if(isset($_POST["txtWedClosed"])) {
            $lclWedClosed = $_POST["txtWedClosed"];
      } else {
            $lclWedClosed = "";
      }

      $lclThuOpen = $_POST["txtThuOpen"];
      $lclThuClose = $_POST["txtThuClose"];
      // $lclWedClosed = $_POST["txtWedClosed"];

      if(isset($_POST["txtThuClosed"])) {
            $lclThuClosed = $_POST["txtThuClosed"];
      } else {
            $lclThuClosed = "";
      }

      $lclFriOpen = $_POST["txtFriOpen"];
      $lclFriClose = $_POST["txtFriClose"];
      // $lclFriClosed = $_POST["txtFriClosed"];

      if(isset($_POST["txtFriClosed"])) {
            $lclFriClosed = $_POST["txtFriClosed"];
      } else {
            $lclFriClosed = "";
      }

      $lclSatOpen = $_POST["txtSatOpen"];
      $lclSatClose = $_POST["txtSatClose"];
      // $lclSatClosed = $_POST["txtSatClosed"];

      if(isset($_POST["txtSatClosed"])) {
            $lclSatClosed = $_POST["txtSatClosed"];
      } else {
            $lclSatClosed = "";
      }

      $lclSunOpen = $_POST["txtSunOpen"];
      $lclSunClose = $_POST["txtSunClose"];
      // $lclSunClosed = $_POST["txtSunClosed"];

      if(isset($_POST["txtSunClosed"])) {
            $lclSunClosed = $_POST["txtSunClosed"];
      } else {
            $lclSunClosed = "";
      }

     
      $lclGmail = $_POST["txtGmail"];
      $lclFacebook = $_POST["txtFacebook"];
      $lclYouTube = $_POST["txtYouTube"];

      move_uploaded_file($_FILES["firstPhoto1"]["tmp_name"],"../images/" . $_FILES["firstPhoto1"]["name"]);     
      $lclLocation1 = "http://$_SERVER[HTTP_HOST]/web/images/".$_FILES["firstPhoto1"]["name"];
      // $lclLocation11 = "http://$_SERVER[HTTP_HOST]

      move_uploaded_file($_FILES["firstPhoto2"]["tmp_name"],"../images/" . $_FILES["firstPhoto2"]["name"]);     
      $lclLocation2 = "http://$_SERVER[HTTP_HOST]/web/images/".$_FILES["firstPhoto2"]["name"];
      // $lclLocation

      move_uploaded_file($_FILES["firstPhoto3"]["tmp_name"],"../images/" . $_FILES["firstPhoto3"]["name"]);     
      $lclLocation3 = "http://$_SERVER[HTTP_HOST]/web/images/".$_FILES["firstPhoto3"]["name"];

      move_uploaded_file($_FILES["firstPhoto4"]["tmp_name"],"../images/" . $_FILES["firstPhoto4"]["name"]);     
      $lclLocation4 = "http://$_SERVER[HTTP_HOST]/web/images/".$_FILES["firstPhoto4"]["name"];

      move_uploaded_file($_FILES["firstPhoto5"]["tmp_name"],"../images/" . $_FILES["firstPhoto5"]["name"]);     
      $lclLocation5 = "http://$_SERVER[HTTP_HOST]/web/images/".$_FILES["firstPhoto5"]["name"];

      move_uploaded_file($_FILES["firstPhoto6"]["tmp_name"],"../images/" . $_FILES["firstPhoto6"]["name"]);     
      $lclLocation6 = "http://$_SERVER[HTTP_HOST]/web/images/".$_FILES["firstPhoto6"]["name"];

      $sql = $con->prepare("INSERT INTO user_details(us_business_name, us_mobile_no, us_email, us_website, us_category, us_sub_category, us_flat_name, us_street, us_area, us_city, us_pincode, us_state, us_description, us_specialization, us_mon_open, us_mon_close, us_mon_closed, us_tue_open, us_tue_close, us_tue_closed, us_wed_open, us_wed_close, us_wed_closed, us_thu_open, us_thu_close, us_thu_closed, us_fri_open, us_fri_close, us_fri_closed, us_sat_open, us_sat_close, us_sat_closed, us_sun_open, us_sun_close, us_sun_closed, us_image1, us_image2, us_image3, us_image4, us_image5, us_image6, us_gmail, us_facebook, us_youtube, us_status)
      VALUES(:us_business_name, :us_mobile_no, :us_email, :us_website, :us_category, :us_sub_category, :us_flat_name, :us_street, :us_area, :us_city, :us_pincode, :us_state, :us_description, :us_specialization, :us_mon_open, :us_mon_close, :us_mon_closed, :us_tue_open, :us_tue_close, :us_tue_closed, :us_wed_open, :us_wed_close, :us_wed_closed, :us_thu_open, :us_thu_close, :us_thu_closed, :us_fri_open, :us_fri_close, :us_fri_closed, :us_sat_open, :us_sat_close, :us_sat_closed, :us_sun_open, :us_sun_close, :us_sun_closed, :us_image1, :us_image2, :us_image3, :us_image4, :us_image5, :us_image6, :us_gmail, :us_facebook, :us_youtube, :us_status)");

            $sql->bindParam(':us_business_name', $lclBusiName);
            $sql->bindParam(':us_mobile_no', $lclMobileNo);
            $sql->bindParam(':us_email', $lclEmailID);
            $sql->bindParam(':us_website', $lclWebsite);
            $sql->bindParam(':us_category', $lclCategory);
            $sql->bindParam(':us_sub_category', $lclSubCategory);
            $sql->bindParam(':us_flat_name', $lclFlat);
            $sql->bindParam(':us_street', $lclStreet);
            $sql->bindParam(':us_area', $lclArea);
            $sql->bindParam(':us_city', $lclCity);
            $sql->bindParam(':us_pincode', $lclPinCode);
            $sql->bindParam(':us_state', $lclState);
            $sql->bindParam(':us_description', $lclDescription);
            $sql->bindParam(':us_specialization', $lclSpecialization);
            $sql->bindParam(':us_mon_open', $lclMonOpen);
            $sql->bindParam(':us_mon_close', $lclMonClose);
            $sql->bindParam(':us_mon_closed', $lclMonClosed);
            $sql->bindParam(':us_tue_open', $lclTueOpen);
            $sql->bindParam(':us_tue_close', $lclTueClose);
            $sql->bindParam(':us_tue_closed', $lclTueClosed);
            $sql->bindParam(':us_wed_open', $lclWedOpen);
            $sql->bindParam(':us_wed_close', $lclWedClose);
            $sql->bindParam(':us_wed_closed', $lclWedClosed);
            $sql->bindParam(':us_thu_open', $lclThuOpen);
            $sql->bindParam(':us_thu_close', $lclThuClose);
            $sql->bindParam(':us_thu_closed', $lclThuClosed);
            $sql->bindParam(':us_fri_open', $lclFriOpen);
            $sql->bindParam(':us_fri_close', $lclFriClose);
            $sql->bindParam(':us_fri_closed', $lclFriClosed);
            $sql->bindParam(':us_sat_open', $lclSatOpen);
            $sql->bindParam(':us_sat_close', $lclSatOpen);
            $sql->bindParam(':us_sat_closed', $lclSatClose);
            $sql->bindParam(':us_sun_open', $lclSunOpen);
            $sql->bindParam(':us_sun_close', $lclSunClose);
            $sql->bindParam(':us_sun_closed', $lclSunClosed);
            $sql->bindParam(':us_image1', $lclLocation1);
            $sql->bindParam(':us_image2', $lclLocation2);
            $sql->bindParam(':us_image3', $lclLocation3);
            $sql->bindParam(':us_image4', $lclLocation4);
            $sql->bindParam(':us_image5', $lclLocation5);
            $sql->bindParam(':us_image6', $lclLocation6);
            $sql->bindParam(':us_gmail', $lclGmail);
            $sql->bindParam(':us_facebook', $lclFacebook);
            $sql->bindParam(':us_youtube', $lclYouTube);
            $sql->bindParam(':us_status', $lclStauts);
            $lclStauts = 0;

            $query = $sql->execute();
            echo "<script>alert('Your Registeration successful. Thank You!!!');</script>";

            // header('Location :web/home.php');

    }


?>