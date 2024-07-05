<?php

include 'config.php';
session_start();

// page redirect
$usermail="";
$usermail=$_SESSION['usermail'];
if($usermail == true){

}else{
  header("location: index.php");
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/home.css">
    <title>ASIATEL</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link rel="stylesheet" href="./admin/css/roombook.css">
    <style>
      #guestdetailpanel{
        display: none;
      }
      #guestdetailpanel .middle{
        height: 450px;
      }
    </style>
</head>

<body>
  <nav>
    <div class="logo">
      <img class="asiatellogo" src="image\asia-removebg-preview.png" alt="logo" href="#firstsection">
      <p>ASIATEL</p>
    </div>
    <ul>
      <li><a href="#firstsection">Home</a></li>
      <li><a href="#secondsection">Rooms</a></li>
      <li><a href="#thirdsection">Facilites</a></li>
      <li><a href="#testimonials">Reviews</a></li>
      <li><a href="#contactus">Contacts</a></li>

      <a href="./logout.php"><button class="btn btn-danger">Logout</button></a>

    </ul>
  </nav>

  <section id="firstsection" class="carousel slide carousel_section" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="carousel-image" src="https://travel.home.sndimg.com/content/dam/images/travel/fullset/2012/03/25/87/incredible-ocean-views_ss_002.rend.hgtvcom.966.725.suffix/1491580736906.jpeg">
        </div>
        <div class="carousel-item">
            <img class="carousel-image" src="https://www.timeoutdubai.com/cloud/timeoutdubai/2021/09/10/GkK8XarS-hotelbalconyviewsindubaiaddressbeachresort_1.jpg">
        </div>
        <div class="carousel-item">
            <img class="carousel-image" src="https://cdn2.paraty.es/parkroyal-corpo/images/50828207992ae59">
        </div>
        <div class="carousel-item">
            <img class="carousel-image" src="https://www.hilton.com/im/en/MNLPHHI/14934949/hilton-manila-vega-outdoor-pool-3-copy.jpg?impolicy=crop&cw=4447&ch=2489&gravity=NorthWest&xposition=0&yposition=255&rw=768&rh=430">
        </div>

        <div class="welcomeline">
          <h1 class="welcometag">Enjoy Wonderful Experience in Our Hotels</h1>
        </div>
      <div id="guestdetailpanel">
        <form action="" method="POST" class="guestdetailpanelform">
            <div class="head">
                <h3>RESERVATION</h3>
                <i class="fa-solid fa-circle-xmark" onclick="closebox()"></i>
            </div>
            <div class="middle">
                <div class="guestinfo">
                    <h4>Guest Information</h4>
                    <input type="text" name="Name" placeholder="Enter Full Name">
                    <input type="email" name="Email" placeholder="Enter Email">

                    <?php
                    $countries = array("Afghanistan", "Albania", "Algeria", "American Samoa", "Andorra", "Angola", "Anguilla", "Antarctica", "Antigua and Barbuda", "Argentina", "Armenia", "Aruba", "Australia", "Austria", "Azerbaijan", "Bahamas", "Bahrain", "Bangladesh", "Barbados", "Belarus", "Belgium", "Belize", "Benin", "Bermuda", "Bhutan", "Bolivia", "Bosnia and Herzegowina", "Botswana", "Bouvet Island", "Brazil", "British Indian Ocean Territory", "Brunei Darussalam", "Bulgaria", "Burkina Faso", "Burundi", "Cambodia", "Cameroon", "Canada", "Cape Verde", "Cayman Islands", "Central African Republic", "Chad", "Chile", "China", "Christmas Island", "Cocos (Keeling) Islands", "Colombia", "Comoros", "Congo", "Congo, the Democratic Republic of the", "Cook Islands", "Costa Rica", "Cote d'Ivoire", "Croatia (Hrvatska)", "Cuba", "Cyprus", "Czech Republic", "Denmark", "Djibouti", "Dominica", "Dominican Republic", "East Timor", "Ecuador", "Egypt", "El Salvador", "Equatorial Guinea", "Eritrea", "Estonia", "Ethiopia", "Falkland Islands (Malvinas)", "Faroe Islands", "Fiji", "Finland", "France", "France Metropolitan", "French Guiana", "French Polynesia", "French Southern Territories", "Gabon", "Gambia", "Georgia", "Germany", "Ghana", "Gibraltar", "Greece", "Greenland", "Grenada", "Guadeloupe", "Guam", "Guatemala", "Guinea", "Guinea-Bissau", "Guyana", "Haiti", "Heard and Mc Donald Islands", "Holy See (Vatican City State)", "Honduras", "Hong Kong", "Hungary", "Iceland", "India", "Indonesia", "Iran (Islamic Republic of)", "Iraq", "Ireland", "Israel", "Italy", "Jamaica", "Japan", "Jordan", "Kazakhstan", "Kenya", "Kiribati", "Korea, Democratic People's Republic of", "Korea, Republic of", "Kuwait", "Kyrgyzstan", "Lao, People's Democratic Republic", "Latvia", "Lebanon", "Lesotho", "Liberia", "Libyan Arab Jamahiriya", "Liechtenstein", "Lithuania", "Luxembourg", "Macau", "Macedonia, The Former Yugoslav Republic of", "Madagascar", "Malawi", "Malaysia", "Maldives", "Mali", "Malta", "Marshall Islands", "Martinique", "Mauritania", "Mauritius", "Mayotte", "Mexico", "Micronesia, Federated States of", "Moldova, Republic of", "Monaco", "Mongolia", "Montserrat", "Morocco", "Mozambique", "Myanmar", "Namibia", "Nauru", "Nepal", "Netherlands", "Netherlands Antilles", "New Caledonia", "New Zealand", "Nicaragua", "Niger", "Nigeria", "Niue", "Norfolk Island", "Northern Mariana Islands", "Norway", "Oman", "Pakistan", "Palau", "Panama", "Papua New Guinea", "Paraguay", "Peru", "Philippines", "Pitcairn", "Poland", "Portugal", "Puerto Rico", "Qatar", "Reunion", "Romania", "Russian Federation", "Rwanda", "Saint Kitts and Nevis", "Saint Lucia", "Saint Vincent and the Grenadines", "Samoa", "San Marino", "Sao Tome and Principe", "Saudi Arabia", "Senegal", "Seychelles", "Sierra Leone", "Singapore", "Slovakia (Slovak Republic)", "Slovenia", "Solomon Islands", "Somalia", "South Africa", "South Georgia and the South Sandwich Islands", "Spain", "Sri Lanka", "St. Helena", "St. Pierre and Miquelon", "Sudan", "Suriname", "Svalbard and Jan Mayen Islands", "Swaziland", "Sweden", "Switzerland", "Syrian Arab Republic", "Taiwan, Province of China", "Tajikistan", "Tanzania, United Republic of", "Thailand", "Togo", "Tokelau", "Tonga", "Trinidad and Tobago", "Tunisia", "Turkey", "Turkmenistan", "Turks and Caicos Islands", "Tuvalu", "Uganda", "Ukraine", "United Arab Emirates", "United Kingdom", "United States", "United States Minor Outlying Islands", "Uruguay", "Uzbekistan", "Vanuatu", "Venezuela", "Vietnam", "Virgin Islands (British)", "Virgin Islands (U.S.)", "Wallis and Futuna Islands", "Western Sahara", "Yemen", "Yugoslavia", "Zambia", "Zimbabwe");
                    ?>

                    <select name="Country" class="selectinput">
						<option value selected >Select your country</option>
                        <?php
							foreach($countries as $key => $value):
							echo '<option value="'.$value.'">'.$value.'</option>';
							endforeach;
						?>
                    </select>
                    <input type="text" name="Phone" placeholder="Enter Phone Number">
                </div>

                <div class="line"></div>

                <div class="reservationinfo">
                    <h4>Reservation Information</h4>
                    <select name="RoomType" class="selectinput">
						<option value selected >Type Of Room</option>
                        <option value="Superior Room">SUPERIOR ROOM</option>
                        <option value="Deluxe Room">DELUXE ROOM</option>
						<option value="Guest House">GUEST HOUSE</option>
						<option value="Single Room">SINGLE ROOM</option>
                    </select>
                    <select name="Bed" class="selectinput">
						<option value selected >Bedding Type</option>
                        <option value="Single">Single</option>
                        <option value="Double">Double</option>
						<option value="Triple">Triple</option>
                        <option value="Quad">Quad</option>
						<option value="None">None</option>
                    </select>
                    <select name="NoofRoom" class="selectinput">
						<option value selected >No. of Room</option>
                        <option value="1">1</option>
                    </select>
                    <select name="Meal" class="selectinput">
						<option value selected >Meal</option>
                        <option value="Room only">Room only</option>
                        <option value="Breakfast">Breakfast</option>
						<option value="Half Board">Half Board</option>
						<option value="Full Board">Full Board</option>
					</select>
                    <div class="datesection">
                        <span>
                            <label for="cin"> Check-In</label>
                            <input name="cin" type ="date">
                        </span>
                        <span>
                            <label for="cin"> Check-Out</label>
                            <input name="cout" type ="date">
                        </span>
                    </div>
                </div>
            </div>
            <div class="footer">
                <button class="btn btn-success" name="guestdetailsubmit">Submit</button>
            </div>
        </form>

        <?php       
            if (isset($_POST['guestdetailsubmit'])) {
                $Name = $_POST['Name'];
                $Email = $_POST['Email'];
                $Country = $_POST['Country'];
                $Phone = $_POST['Phone'];
                $RoomType = $_POST['RoomType'];
                $Bed = $_POST['Bed'];
                $NoofRoom = $_POST['NoofRoom'];
                $Meal = $_POST['Meal'];
                $cin = $_POST['cin'];
                $cout = $_POST['cout'];

                if($Name == "" || $Email == "" || $Country == ""){
                    echo "<script>swal({
                        title: 'Fill the proper details',
                        icon: 'error',
                    });
                    </script>";
                }
                else{
                    $sta = "NotConfirm";
                    $sql = "INSERT INTO roombook(Name,Email,Country,Phone,RoomType,Bed,NoofRoom,Meal,cin,cout,stat,nodays) VALUES ('$Name','$Email','$Country','$Phone','$RoomType','$Bed','$NoofRoom','$Meal','$cin','$cout','$sta',datediff('$cout','$cin'))";
                    $result = mysqli_query($conn, $sql);

                    
                        if ($result) {
                            echo "<script>swal({
                                title: 'Reservation successful',
                                icon: 'success',
                            });
                        </script>";
                        } else {
                            echo "<script>swal({
                                    title: 'Something went wrong',
                                    icon: 'error',
                                });
                        </script>";
                        }
                }
            }
            ?>
          </div>

    </div>
  </section>
 <style>
  .roombox {
  position: relative;
}

.price-box {
  position: absolute;
  top: 10px;
  left: 10px;
  background-color: rgba(255, 255, 255, 0.8);
  padding: 6px 10px;
  font-weight: bold;
  border-radius: 4px;
}
 </style>
  <section id="secondsection"> 
  <img src="./image/homeanimatebg.svg">
  <div class="ourroom">
    <h1 class="head">≼ Our Rooms≽</h1>
    <div class="roomselect">
      <div class="roombox">
        <div class="price-box">₱3000</div>
        <div class="hotelphoto h1"></div>
        <div class="roomdata">     
          <h2>Superior Room</h2>
          <div class="services">
            <i class="fa-solid fa-wifi"></i>
            <i class="fa-solid fa-burger"></i>
            <i class="fa-solid fa-spa"></i>
            <i class="fa-solid fa-dumbbell"></i>
            <i class="fa-solid fa-person-swimming"></i>
          </div>
          <button class="btn btn-primary bookbtn" onclick="openbookbox()">Book</button>
        </div>
      </div>
      <div class="roombox">
        <div class="price-box">₱2000</div>
        <div class="hotelphoto h2"></div>
        <div class="roomdata">
          <h2>Deluxe Room</h2>
          <div class="services">
            <i class="fa-solid fa-wifi"></i>
            <i class="fa-solid fa-burger"></i>
            <i class="fa-solid fa-spa"></i>
            <i class="fa-solid fa-dumbbell"></i>
          </div>
          <button class="btn btn-primary bookbtn" onclick="openbookbox()">Book</button>
        </div>
      </div>
      <div class="roombox">
        <div class="price-box">₱1000</div>
        <div class="hotelphoto h3"></div>
        <div class="roomdata">
          <h2>Guest Room</h2>
          <div class="services">
            <i class="fa-solid fa-wifi"></i>
            <i class="fa-solid fa-burger"></i>
            <i class="fa-solid fa-spa"></i>
          </div>
          <button class="btn btn-primary bookbtn" onclick="openbookbox()">Book</button>
        </div>
      </div>
      <div class="roombox">
        <div class="price-box">₱500</div>
        <div class="hotelphoto h4"></div>
        <div class="roomdata">
          <h2>Single Room </h2>
          <div class="services">
            <i class="fa-solid fa-wifi"></i>
            <i class="fa-solid fa-burger"></i>
          </div>
          <button class="btn btn-primary bookbtn" onclick="openbookbox()">Book</button>
        </div>
      </div>
    </div>
  </div>
</section>
  <section id="thirdsection">
    <h1 class="head">≼ Our Facilities ≽</h1>
    <div class="facility">
      <div class="box">
        <h2>Swimming Pool</h2>
      </div>
      <div class="box">
        <h2>Spa</h2>
      </div>
      <div class="box">
        <h2>24/7 Restaurants</h2>
      </div>
      <div class="box">
        <h2>Gym</h2>
      </div>
      <div class="box">
        <h2>Air service</h2>
      </div>
    </div>
  </section>
<style>
  #testimonials {
  text-align: center;
  padding: 50px 0;
}

.testimonial-container {
  display: flex;
  justify-content: center;
  margin-top: 30px;
}

.testimonial {
  width: 300px;
  margin: 0 20px;
  padding: 20px;
  background-color: #d4d4d5;
  border-radius: 5px;
  box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
}

.testimonial img {
  width: 80px;
  height: 80px;
  border-radius: 50%;
  margin-bottom: 10px;
}

.testimonial h3 {
  margin-bottom: 10px;
}

.testimonial-text {
  font-style: bold;
  margin-bottom: 10px;
}

.testimonial-rating {
  color: #ffa500;
  font-weight: bold;
}

.prev-btn, .next-btn {
  margin-top: 20px;
  padding: 10px 20px;
  background-color: #007bff;
  color: #fff;
  border: none;
  border-radius: 5px;
  cursor: pointer;
}
</style>
  <section id="testimonials">
  <h2>≼ Our Reviews ≽</h2>
  <div class="testimonial-container">
    <div class="testimonial">
      <img src="https://scontent.fcrk4-1.fna.fbcdn.net/v/t39.30808-6/306838666_931571154489420_7134446072758398292_n.jpg?_nc_cat=106&ccb=1-7&_nc_sid=a5f93a&_nc_eui2=AeFDx5v_GXAi4vqTbRWygDlSpdYu53ularWl1i7ne6VqtR4rTvB9baEkdCdTJ6Kg8_gBt_-DgkSWfb8llzBzcsEH&_nc_ohc=tFbHFurZsPcQ7kNvgHIvgxd&_nc_ht=scontent.fcrk4-1.fna&oh=00_AYCeZPWfDkwL68zlujlbZpfL5-D_P_x4A9d90cBuhOzexg&oe=668AB8CD" alt="Guest 1">
      <h3>Kim Vincent Salangsang</h3>
      <p class="testimonial-text">The hotel was amazing! The staff was friendly and the room was clean and comfortable.</p>
      <span style="color:orange;font-size:40px;">&starf;</span>
      <span style="color:orange;font-size:40px;">&starf;</span>
      <span style="color:orange;font-size:40px;">&starf;</span>
      <span style="color:orange;font-size:40px;">&starf;</span>

    </div>
    <div class="testimonial">
      <img src="https://scontent.fcrk4-1.fna.fbcdn.net/v/t39.30808-1/447897780_1844222689400235_6838000727861708724_n.jpg?stp=dst-jpg_s200x200&_nc_cat=108&ccb=1-7&_nc_sid=0ecb9b&_nc_eui2=AeE-wHzmkQJEPdxhZnIcdqay7HWeblAcj_TsdZ5uUByP9KihbXmdZsxotWxhBJ-_tj3i8QIdniLN0BixXkcaY0mM&_nc_ohc=TDoKEQuOG44Q7kNvgFITi9R&_nc_ht=scontent.fcrk4-1.fna&oh=00_AYC_MmocoSvwFqAZC5hoTFAzkw-SAegWbKyGIRj7LfqEJg&oe=668ACBF4" alt="Guest 2">
      <h3>Allen Sanchez</h3>
      <p class="testimonial-text">I highly recommend this hotel. The location was perfect and the amenities were top-notch. I'll definitely be back!</p>
      <span style="color:orange;font-size:40px;">&starf;</span>
      <span style="color:orange;font-size:40px;">&starf;</span>
      <span style="color:orange;font-size:40px;">&starf;</span>
      <span style="color:orange;font-size:40px;">&starf;</span>
      <span style="color:orange;font-size:40px;">&starf;</span>

    </div>
    <div class="testimonial">
      <img src="https://scontent.fcrk4-2.fna.fbcdn.net/v/t39.30808-1/407691341_2690421931136159_5744509492128718863_n.jpg?stp=dst-jpg_p200x200&_nc_cat=111&ccb=1-7&_nc_sid=0ecb9b&_nc_eui2=AeGzyJ80_4c5mKYFJGjwLtN6TyQHnnGUIlVPJAeecZQiVekhVfr30lftX44sHYA7zsb-wY7E0BGBaFk-BWyzsnwb&_nc_ohc=Ts3mBNLd498Q7kNvgH9UgLt&_nc_ht=scontent.fcrk4-2.fna&oh=00_AYCwRQcsxA4ANZxxdTmSkOz-l3nb7Zqf3vuuKvoD7utW5w&oe=668AA3DF" alt="Guest 3">
      <h3>Christian Miguel Paran</h3>
      <p class="testimonial-text">The hotel exceeded my expectations. The staff went above and beyond to make my stay enjoyable.</p>
      <span style="color:orange;font-size:40px;">&starf;</span>
      <span style="color:orange;font-size:40px;">&starf;</span>
      <span style="color:orange;font-size:40px;">&starf;</span>
      <span style="color:orange;font-size:40px;">&starf;</span>
      <span style="color:orange;font-size:40px;">&starf;</span>

    </div>
    <div class="testimonial">
      <img src="https://scontent.fcrk4-1.fna.fbcdn.net/v/t39.30808-1/449699634_3698503040418214_4320437305812435410_n.jpg?stp=dst-jpg_s200x200&_nc_cat=108&ccb=1-7&_nc_sid=0ecb9b&_nc_eui2=AeEE2b9JvOhnL9_deR3UNzZPhSjAchWNX9SFKMByFY1f1BJnxyfrHVMW1g4oti4v53ItzGnrX9qn4NK77s3q5XrC&_nc_ohc=exoeUNkUUQYQ7kNvgETqo5B&_nc_ht=scontent.fcrk4-1.fna&oh=00_AYCtSHD7Qi17SSEk863mP3QaqRXh5w_mj4XA6sd9prOu8Q&oe=668AB74F" alt="Guest 2">
      <h3>Mica M. Sangil</h3>
      <p class="testimonial-text">I highly recommend this hotel. The location was perfect and the amenities were top-notch. I'll definitely be back!</p>
      <span style="color:orange;font-size:40px;">&starf;</span>
      <span style="color:orange;font-size:40px;">&starf;</span>
      <span style="color:orange;font-size:40px;">&starf;</span>
      <span style="color:orange;font-size:40px;">&starf;</span>
      <span style="color:orange;font-size:40px;">&starf;</span>
  
    </div>
  <div class="testimonial">
      <img src="https://scontent.fcrk4-1.fna.fbcdn.net/v/t39.30808-1/414369590_3638761299776421_6645530578426799891_n.jpg?stp=dst-jpg_p200x200&_nc_cat=105&ccb=1-7&_nc_sid=50d2ac&_nc_eui2=AeE73K6u9NHRuLfZLC99scgyfHJkyPUCyo18cmTI9QLKjUI5LdXWxbWrBVzy9VW0KNHzqSxPXvATg7vEdfehtTTB&_nc_ohc=53DeUTseDZgQ7kNvgFrVCfn&_nc_ht=scontent.fcrk4-1.fna&oh=00_AYCR2Is6wzVyKrcveiOpNyFBqlK_1_mqAG_Hm2AgGzRQ6g&oe=668AB833" alt="Guest 2">
      <h3>Jeremy Sanchez</h3>
      <p class="testimonial-text">I highly recommend this hotel. The location was perfect and the amenities were top-notch.</p>
      <span style="color:orange;font-size:40px;">&starf;</span>
      <span style="color:orange;font-size:40px;">&starf;</span>
      <span style="color:orange;font-size:40px;">&starf;</span>
      <span style="color:orange;font-size:40px;">&starf;</span>
      <span style="color:orange;font-size:40px;">&starf;</span>

    </section>
  <style>
.contact-us {
  padding: 80px 0;
  background-color: #d4d4d5;
}

.contact-info h2,
.contact-form h2 {
  font-size: 32px;
  font-weight: 700;
  margin-bottom: 20px;
}

.contact-info p {
  font-size: 16px;
  margin-bottom: 30px;
}

.contact-info ul {
  list-style-type: none;
  padding: 0;
}

.contact-info li {
  display: flex;
  align-items: center;
  margin-bottom: 15px;
}

.contact-info li i {
  font-size: 20px;
  color: #007bff;
  margin-right: 15px;
}

.contact-form .form-control {
  border: 1px solid #ced4da;
  border-radius: 4px;
  padding: 12px 15px;
  font-size: 16px;
}

.contact-form .form-group {
  margin-bottom: 20px;
}

.contact-form button {
  background-color: #007bff;
  border-color: #007bff;
  font-size: 16px;
  padding: 12px 30px;
}

.contact-form button:hover {
  background-color: #0056b3;
  border-color: #004a99;
}

.contact-image img {
  width: 100%;
  height: auto;
  border-radius: 4px;
}
  </style>
    <section class="contact-us">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <div class="contact-info">
          <h2>Contact Us</h2>
          <p>Feel free to reach out to us for any inquiries or feedback.</p>
          <ul>
            <li>
              <i class="fas fa-map-marker-alt"></i>
              <span> 654 Rizal Street, Dolores Mabalacat</span>
            </li>
            <li>
              <i class="fas fa-phone"></i>
              <span>+63 977-6894-232</span>
            </li>
            <li>
              <i class="fas fa-envelope"></i>
              <span>Group5@gmail.com</span>
            </li>
          </ul>
        </div>
      </div>
      <div class="col-md-6">
        <div class="contact-form">
          <h2>Get in Touch</h2>
          <form action="submit-form.php" method="post">
            <div class="form-group">
              <label for="name">Name</label>
              <input type="text" id="name" name="name" class="form-control" required>
            </div>
            <div class="form-group">
              <label for="email">Email</label>
              <input type="email" id="email" name="email" class="form-control" required>
            </div>
            <div class="form-group">
              <label for="message">Message</label>
              <textarea id="message" name="message" class="form-control" rows="5" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
    <section id="contactus">
    <div class="social">
      <i class="fa-brands fa-facebook"></i>
      <i class="fa-brands fa-instagram"></i>
      <i class="fa-solid fa-envelope"></i>
    </div>
    <div class="createdby">
      <h5>Created By: Group 5</h5>
    </div>
  </section>
</body>
<script>

    var bookbox = document.getElementById("guestdetailpanel");

    openbookbox = () =>{
      bookbox.style.display = "flex";
    }
    closebox = () =>{
      bookbox.style.display = "none";
    }
</script>
</html>