<?php

session_start();
if(empty($_SESSION['user'])){
    header('Location: /login1.php?error=login please!');
}



  ?>
<!DOCTYPE html>
<html>
<head>
    <title>Grateful Giving</title>
    <meta charset="utf-8">
    <link rel="shortcut icon" type="image" href="./img/icon.jpg">
    <link rel="stylesheet" type="text/css" href="./css/grateful.css">
    <link rel="stylesheet" type="text/css" href="./css/swiper.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    




</head>
<body>
    <header>

        <div class="leftarea">
            <h3>Grateful <span>giving</span></h3>   
            <p>Welcome: <?php echo $_SESSION['user']; ?> </p>   

        </div>

        <div class="rightarea">
            <a href="/logout.php" class="sign">LOG OUT</a>
        </div>
    </header>



<div class="sidebar">
    <center>
        <img class="profile-img" src="./img/icon.jpg">
        
    </center>
    <a href="#top">HOME</a>

    <?php
    $con = mysqli_connect('localhost','id14971852_root','86!uLBs7+YE73[77');
    mysqli_select_db($con, 'id14971852_registration');
    $query = "SELECT * FROM  categories";
    $result = $con->query($query);
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
          echo "<a href=#". $row['categoryName'].">". $row['categoryName']."</a>";
        }
      } else {
        echo "0 results";
      }
      $con->close();
    ?>
   
    <a href="#footer">ABOUT US </a>
    <a href="#footer">CONTACT</a>
</div>



<div class="content">
    <div class="description" id="top">
        <div class="desc1"><p>Grateful Giving charity is made by Oumnia and Hanine in order embody the culture of giving in a modern  and easy way, it's something new in our country and we want to make for all around Algeria and why not all around the world</p></div>
        <div class="desc2"></div>
        
    </div>
     

    <!--kiiiiiiiiiiiiiiiiiiiiiiiiiids----------------------------------------->
    <div class="kids" id="KIDS">
        <div class="heading">
              <h1>K I D S </h1>
        </div>
      
        <!--swiper slider---------------------------------------->
    <div class="swiper-container">
      <div class="swiper-wrapper">
          
      <!--slide add item----------->
       <div class="swiper-slide">
          <form class="add_item" method="post" action="/addItem.php" enctype="multipart/form-data">
         <label for="KidsItem">Choose Picture</label>
            <input type="file" name="fileToUpload" id="KidsItem" value="ADD ITEM" hidden> 
              <input type="text" name="category" disable hidden value="KIDS">
                      <input type="submit" value="Add Item" class="save_item">
             </form>


    
        </div>
        
            <?php
    $con = mysqli_connect('localhost','id14971852_root','86!uLBs7+YE73[77');
    mysqli_select_db($con, 'id14971852_registration');
    $query = "SELECT * FROM  products WHERE category ='KIDS'";
    $result = $con->query($query);
    if ($result->num_rows > 0) {
        // output data of each row
            while($row = $result->fetch_assoc()) {
                echo"<div class='swiper-slide'>";
                echo"<div class='slider-box1'>";
                echo"<p class='time'>DISPONIBLE</p> ";
                echo" <div class='img-box1'>";
                echo "<tr><td><img src=./upload/$row[picture] > </td></tr>";
                echo"</div>";
                echo"<div class='cart'>";
                echo"<a href='#' class='ShowModal' id='$row[userID]'>SEE MORE </a>";
                echo"</div>";
                echo"</div>";
                echo"</div>";
              }
        
      } else {
        echo "0 results";

      }
      $con->close();
    ?>
    </div>
     <div class="swiper-button-next"></div>
     <div class="swiper-button-prev"></div>
        </div>

        <!--swiper slider end----------->
    </div>
    <!--meeeeeeeeeeeeeeeeeeeen-------------------------------------------->
    <div class="Men" id="MEN">
       <div class="heading">
            <h1> M E N  </h1>
        </div>
        <!--swiper slider---------------------------------------->
    <div class="swiper-container">
      <div class="swiper-wrapper">
      <!--slide add item----------->
<div class="swiper-slide">
<form class="add_item" method="post" action="/addItem.php" enctype="multipart/form-data">
<label for="MenItem">Choose Picture</label>
<input type="file" name="fileToUpload" id="MenItem" value="ADD ITEM" hidden> 
<input type="text" name="category" disable hidden value="MEN">
<input type="submit" value="Add Item" class="save_item">
    </form>
</div>

<?php
    $con = mysqli_connect('localhost','id14971852_root','86!uLBs7+YE73[77');
    mysqli_select_db($con, 'id14971852_registration');
    $query = "SELECT * FROM  products WHERE category ='MEN'";
    $result = $con->query($query);
    if ($result->num_rows > 0) {
        // output data of each row
            while($row = $result->fetch_assoc()) {
                echo"<div class='swiper-slide'>";
                echo"<div class='slider-box1'>";
                echo"<p class='time'>DISPONIBLE</p> ";
                echo" <div class='img-box1'>";
                echo "<tr><td><img src=./upload/$row[picture] > </td></tr>";
                echo"</div>";
                echo"<div class='cart'>";
                echo"<a href='#' class='ShowModal' id='$row[userID]'>SEE MORE </a>";
                echo"</div>";
                echo"</div>";
                echo"</div>";
              }
        
      } else {
        echo "0 results";
      }
      $con->close();
    ?>
       


      </div>

     <div class="swiper-button-next"></div>
     <div class="swiper-button-prev"></div>
    </div>

<!--swiper slider end----------->



    </div>

<!--womaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaan---------------->
<div class="Woman" id="WOMEN">
   <div class="heading">
      <h1>W O M E N </h1>
    </div>

        <!--swiper slider---------------------------------------->
    <div class="swiper-container">
      <div class="swiper-wrapper">
      <!--slide add item----------->
<div class="swiper-slide">
<form class="add_item" method="post" action="/addItem.php" enctype="multipart/form-data">
<label for="WomenItem">Choose Picture</label>
<input type="file" name="fileToUpload" id="WomenItem" value="ADD ITEM" hidden> 
<input type="text" name="category" disable hidden value="WOMEN">
<input type="submit" value="Add Item" class="save_item">
    </form>
</div>


<?php
    $con = mysqli_connect('localhost','id14971852_root','86!uLBs7+YE73[77');
    mysqli_select_db($con, 'id14971852_registration');
    $query = "SELECT * FROM  products WHERE category ='WOMEN'";
    $result = $con->query($query);
    if ($result->num_rows > 0) {
        // output data of each row
            while($row = $result->fetch_assoc()) {
                echo"<div class='swiper-slide'>";
                echo"<div class='slider-box1'>";
                echo"<p class='time'>DISPONIBLE</p> ";
                echo" <div class='img-box1'>";
                echo "<tr><td><img src=./upload/$row[picture] > </td></tr>";
                echo"</div>";
                echo"<div class='cart'>";
                echo"<a href='#' class='ShowModal' id='$row[userID]'>SEE MORE </a>";
                echo"</div>";
                echo"</div>";
                echo"</div>";
              }
        
      } else {
        echo "0 results";
      }
      $con->close();
    ?>
       


</div>

     <div class="swiper-button-next"></div>
     <div class="swiper-button-prev"></div>
    </div>

<!--swiper slider end----------->



    </div>



</div>



<footer id="footer">
      <div class="main-content">
   <div class="left box">
          <h2>About us</h2>
    <div class="content">
          
        <div class="social">
              <a href="https://facebook.com"><span class="fab fa-facebook-f"></span></a>
              <a href="#"><span class="fab fa-twitter"></span></a>
              <a href="https://instagram.com"><span class="fab fa-instagram"></span></a>
              <a href="https://youtube.com"><span class="fab fa-youtube"></span></a>
        </div>
    </div>
    </div>


<div class="center box">
          <h2>Address</h2>
    <div class="content">
            <div class="place">
              <span class="fas fa-map-marker-alt"></span>
              <span class="text">Algeria,Batna</span>
            </div>
    <div class="phone">
              <span class="fas fa-phone-alt"></span>
              <span class="text">+213775222089</span>
            </div>
    <div class="email">
              <span class="fas fa-envelope"></span>
              <span class="email">merzouguihanine4@gmail.com</span>

    </div>
    <div class="email">
              <span class="fas fa-envelope"></span>
              <span class="email">oumnia.bdr05@gmail.com</span>

    </div>
    </div>
</div>


<div class="right box">
          <h2>Contact us</h2>
<div class="content">
            <form action="#">
              <div class="email">
                
<div class="msg">
                <div class="text">
Leave a Message *</div>

<textarea id=".msgForm" rows="2" cols="25" required></textarea> 
              
              <br />
              <br />
              <div class="rightarea">
            <a href="#" class="ftr-send">SEND</a>
        </div>
              


</div>
                        </form>
</div>
</div>
            </div>
            </div>
            <div class="bottom">
        <center>
          <span class="credit">Created By Oumnia&Hanine |</span>
          <span class="far fa-copyright"></span> 2020 All rights reserved.
        </center>
</div>
            
</footer>
<!--modal claaaaaaaaaaaaaaaaaaaaaaaasseeeeeeeeeeeeeeeeeeeee-->
<div id="myModal" class="modal">
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>

    <img src="./img/user.png" class="avatar">
    <h1>Contact</h1>
    <form>
        <p>Username: <span type="text" id="ownerName">Loading...</span></p>
        
        <p>Phone Number: <span type="text" id="ownerPhone">Loading...</span></p>
        <p>Email: <span type="text" id="ownerEmail">Loading...</span></p>
        <p>Wilaya: <span type="text" id="ownerWilaya">Loading...</span></p>
    </form>
</div>

<!--eeeeeeeeeeeeeeeend-->

    <script type="text/javascript" src="./js/swiper.min.js"></script>
    <script src="./js/kit.font.js"></script>

    <script type="text/javascript" src="./js/grateful.js"></script>

<script>
window.addEventListener("click", function (event) {
  const thisElement = event.target;
  var ownerName = document.getElementById("ownerName");
  var ownerPhone = document.getElementById("ownerPhone");
  var ownerEmail = document.getElementById("ownerEmail");
  var ownerWilaya = document.getElementById("ownerWilaya");
  if (thisElement.className == "ShowModal") {
    var http = new XMLHttpRequest();
    var url = "/getuser.php";
    var params = `id=${thisElement.id}`;
    http.open("POST", url, true);

    //Send the proper header information along with the request
    http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

    http.onreadystatechange = function () {
      //Call a function when the state changes.
      if (http.readyState == 4 && http.status == 200) {
        const result = JSON.parse(http.response);
        ownerName.innerText = result.fullName;
        ownerPhone.innerText = result.numberPhone;
        ownerEmail.innerText = result.email;
        ownerWilaya.innerText = result.wilaya;
      }
    };
    http.send(params);
    modal.style.display = "block";
    modal.style.position = "fixed";
  }
});
</script>



   


  

</body>
</html>