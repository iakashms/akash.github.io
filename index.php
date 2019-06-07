
<!DOCTYPE html>
<html lang="en">
<title>The Intrepid</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<style>
body {font-family: "Lato", sans-serif}
.mySlides {display: none}
</style>
<body>

<!-- Navbar -->
<div class="w3-top">
  <div class="w3-bar w3-black w3-card" style="font-size:15pt">
    <a href="index.php" style="text-decoration: none;font-size:15pt" class="w3-padding-large w3-hide-small w3-left">The<span style="color:orange;">Intrepid</span></a>
    <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a href="#contact" class="w3-bar-item w3-button w3-padding-large w3-hide-small w3-right">Contact</a>
    <a href="#blog" class="w3-bar-item w3-button w3-padding-large w3-hide-small w3-right">Blogs</a>
    <!--<div class="w3-dropdown-hover w3-hide-small w3-right">-->
    <!--  <button class="w3-padding-large w3-button" title="More">Gallery <i class="fa fa-caret-down"></i></button>-->
    <!--  <div class="w3-dropdown-content w3-bar-block w3-card-4">-->
    <!--    <a href="#" class="w3-bar-item w3-button">Trekking</a>-->
    <!--    <a href="#" class="w3-bar-item w3-button">Ride</a>-->
    <!--  </div>-->
    <!--</div>-->
    <!--<div class="w3-dropdown-hover w3-hide-small w3-right">-->
    <!--  <button class="w3-padding-large w3-button" title="More">Upcoming <i class="fa fa-caret-down"></i></button>-->
    <!--  <div class="w3-dropdown-content w3-bar-block w3-card-4">-->
    <!--    <a href="#" class="w3-bar-item w3-button">Trekking</a>-->
    <!--    <a href="#" class="w3-bar-item w3-button">Ride</a>-->
    <!--  </div>-->
    <!--</div>-->
   <button onclick="document.getElementById('ticketModal').style.display='block'"class="w3-bar-item w3-button w3-padding-large w3-hide-small w3-right">Fuel Expense Calculator</button> 
    <a href="#trekk" class="w3-bar-item w3-button w3-padding-large w3-hide-small w3-right">Trekking</a>
    <a href="#" class="w3-bar-item w3-button w3-padding-large w3-right">Home</a>
  </div>
</div>

<!-- Navbar on small screens (remove the onclick attribute if you want the navbar to always show on top of the content when clicking on the links) -->
<div id="navDemo" class="w3-bar-block w3-black w3-hide w3-hide-large w3-hide-medium w3-top" style="margin-top:46px">
  <a href="#trekk" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">Trekking</a>
  <a href="#blog" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">Blogs</a>
  <a href="#contact" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">Contact</a>
</div>

<!-- Page content -->
<div class="w3-content" style="max-width:2000px;margin-top:46px">

  <!-- Automatic Slideshow Images -->
  <div class="mySlides w3-display-container w3-center">
    <img src="images/slider-images/image1.jpg" style="width:100%">
    <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">
      <h3><span style="color:orange;padding:10px;background-color: black;border-radius: 20px;">Huthridurga</span> Kunigal Taluk, Tumakuru District, Karnataka, India.</h3>
      <a href="https://www.google.co.in/maps/place/KEMPE+GOWDA+FORT/@12.9598792,77.1103152,15z/data=!4m13!1m7!3m6!1s0x3bafcc115ccfa525:0x8234ace12498373f!2sHuthridurga,+Karnataka+572126!3b1!8m2!3d12.9635229!4d77.1168753!3m4!1s0x3bafcc139a7afbed:0xb5a62380ee920f55!8m2!3d12.9600394!4d77.1219447" target="_blank" style="text-decoration: none;">View on Map <i class="fa fa-map-marker" style="width:30px;color: orange"></i></a>
      <p>One of the Best places to Trekk, 3708 feet above the sea level</p>   
      <p>Trekk Level : Medium, Average Time to Reach Top : 1 Hour</p>   
    </div>
  </div>
  <div class="mySlides w3-display-container w3-center">
    <img src="images/slider-images/image2.jpg" style="width:100%">
    <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">
      <h3><span style="color:orange;padding:10px;background-color: black;border-radius: 20px;">Savandurga</span> Magadi Taluk, Ramanagara District, Karnataka, India.</h3>
      <a href="https://www.google.co.in/maps/place/Savandurga+Hill/@12.899733,77.2656555,13z/data=!3m1!4b1!4m5!3m4!1s0x3bae3664f8d60951:0x7d23470068713f8f!8m2!3d12.9205893!4d77.2944334" target="_blank" style="text-decoration: none;">View on Map <i class="fa fa-map-marker" style="width:30px;color: orange"></i></a>
      <p>Largest monolith hills in Asia. 4022 feet above the sea level</p>    
      <p>Trekk Level : Hard, Average Time to Reach Top : 1 Hour</p>
    </div>
  </div>
  <div class="mySlides w3-display-container w3-center">
    <img src="images/slider-images/image3.jpg" style="width:100%">
    <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">
      <h3><span style="color:orange;padding:10px;background-color: black;border-radius: 20px;">Shivagange</span> Near Dobbaspet, Tumakuru District, Karnataka, India.</h3>
      <a href="https://www.google.co.in/maps/place/Shivagange/@13.1680765,77.2134672,15z/data=!3m1!4b1!4m5!3m4!1s0x3bae2b19422c3f7b:0xe5f685f3c253a490!8m2!3d13.168056!4d77.222222" target="_blank" style="text-decoration: none;">View on Map <i class="fa fa-map-marker" style="width:30px;color: orange"></i></a>
      <p>Known as Dakshina Kashi (Kashi of the South). 2640.3 feet above the sea level</p>    
      <p>Trekk Level : Medium, Average Time to Reach Top : 1 Hour</p>
    </div>
  </div>

  <!-- The Band Section -->
  <div class="w3-container w3-content w3-center w3-padding-64" style="max-width:800px;font-family: sans-serif;font-size: 12pt;" id="trekk">
    <h2 class="w3-wide">TREKKING</h2>
    <p class="w3-opacity"><i>Why i love to TREKK every week!</i></p>
    <p class="w3-justify">
    One of the major factor why i started to TREKK every week is "<span style="color:orange">fitness</span>". One of the major benefits of trekking is that it improves your physical health immensely. Spending multiple hours on the trail, climbing around boulders, rock hopping and ascending hills gives your whole body a workout, improving your strength, agility and cardio fitness. A week full of laziness and those extra junk that you ate around the week will be managed once you start to TREKK.
    </br></br></br>
    Eat <span style="color:orange">Healthy</span>, Stay <span style="color:orange">Fit</span>.
    </br></br>
    My All Time Records </br><span style="color:orange">Savandurga</span><b> : Uphill - 27:34 (mins : secs), Downhill - 11:45 (mins : secs).</b></br><span style="color:orange">Shivagange</span><b> : Uphill - 48:15 (mins : secs), Downhill - 25:45 (mins : secs).</b>
    </p>
  </div>

  <!-- The Tour Section -->
  <div class="w3-black" id="blog">
    <div class="w3-container w3-content w3-padding-64" style="max-width:800px">
      <h2 class="w3-wide w3-center" id="recent_blogs"></h2>
      <p class="w3-opacity w3-center"><i>Explore My Stories</i></p><br>

      <a href="blogs-list.html" style="text-decoration: none;padding: 10px;background-color: orange;color:black;">All Blogs</a><br>

      <div class="w3-row-padding w3-padding-32" style="margin:0 -16px;">
        <div class="w3-third w3-margin-bottom">
          <img src="images/blogs/blog-front-page/blog-2.jpg" alt="New York" style="width:100%" class="w3-hover-opacity">
          <div class="w3-container w3-white">
            <p><b>Coorg</b></p>
            <p class="w3-opacity">24 Nov 2018 - 25 Nov 2018</p>
            <p>An Unplanned Ride To Coorg</p>
             <a href="coorg.html"><button class="w3-button w3-black w3-margin-bottom">Read Blog</button></a>
          </div>
        </div>
        <div class="w3-third w3-margin-bottom">
          <img src="images/blogs/blog-front-page/blog-1.jpg" alt="New York" style="width:100%" class="w3-hover-opacity">
          <div class="w3-container w3-white">
            <p><b>Puducherry</b></p>
            <p class="w3-opacity">27 June 2018 - 30 June 2018</p>
            <p>Ride To Puducherry</p>
            <a href="blog-1.html"><button class="w3-button w3-black w3-margin-bottom">Read Blog</button></a>
          </div>
        </div>
         
      </div>
    </div>
  </div>

  <!-- Ticket Modal -->
  <div id="ticketModal" class="w3-modal">
    <div class="w3-modal-content w3-animate-top w3-card-4">
      <header class="w3-container w3-teal w3-center w3-padding-32"> 
        <span onclick="document.getElementById('ticketModal').style.display='none'" 
       class="w3-button w3-teal w3-xlarge w3-display-topright close">×</span>
        <h2 class="w3-wide"><i class="fa fa-calculator w3-margin-right"></i>Fuel Expense Calculator</h2>
      </header>
      <div class="w3-container">
        <p><label><i class="fa fa-exchange"></i> Distance to Cover (Estimate)</label></p>
        <input class="distance w3-input w3-border" type="text" placeholder="In kms">
        <p><label><i class="fa fa-bolt"></i> Mileage (Approx)</label></p>
        <input class="mileage w3-input w3-border" type="text" placeholder="In kms">
        <p><label><i class="fa fa-rupee"></i> Petrol Price Today (Approx)</label></p>
        <input class="petrol w3-input w3-border" type="text" placeholder="" value="75">
        <button class="w3-button w3-block w3-teal w3-padding-16 w3-section w3-right calculate">Calculate <i class="fa  fa-rupee"></i></button>
        <button class="w3-button w3-block w3-teal w3-padding-16 w3-section w3-right message" style="display: none;"></button>
      </div>
    </div>
  </div>

  <!-- The Contact Section -->
  <div class="w3-container w3-content w3-padding-64" style="max-width:800px" id="contact">
    <h2 class="w3-wide w3-center">CONTACT</h2>
    <p class="w3-opacity w3-center"><i>Want Updates about upcoming events? Drop a note!</i></p>
    <div class="w3-row w3-padding-32">
      <div class="w3-col m6 w3-large w3-margin-bottom">
       <a href="https://www.google.com/maps/place/Magadi,+Karnataka/@12.9569939,77.2084209,14z/data=!3m1!4b1!4m5!3m4!1s0x3bae335ff97c8137:0x84081a9b877515bb!8m2!3d12.9576756!4d77.2261452" target="_blank" style="text-decoration: none;"><i class="fa fa-map-marker" style="width:30px"></i> Magadi, Karnataka, India </a> <br>
        <i class="fa fa-phone" style="width:30px"></i> Phone: +91 7829760681<br>
        <i class="fa fa-envelope" style="width:30px"> </i> Email: akashms789@gmail.com<br>
      </div>
      <div class="w3-col m6">
          <div class="w3-row-padding" style="margin:0 -16px 8px -16px">
            <div class="w3-half">
              <input class="w3-input w3-border name_val" type="text" placeholder="Name" required name="Name">
            </div>
            <div class="w3-half">
              <input class="w3-input w3-border email_val" type="text" placeholder="Email" required name="Email">
            </div>
          </div>
          <input class="w3-input w3-border message_val" type="text" placeholder="Message" required name="Message">
          <button class="w3-button w3-black w3-section w3-right send_val">SEND</button>
      </div>
    </div>
  </div>
  
<!-- End Page Content -->
</div>

<!-- Footer -->
<footer class="w3-container w3-padding-64 w3-center w3-opacity w3-grey w3-xlarge">
  <a href="https://www.facebook.com/akashms92" target="_blank"><i class="fa fa-facebook-official w3-hover-opacity"></i></a>
  <a href="https://www.instagram.com/the_interpid/" target="_blank"><i class="fa fa-instagram w3-hover-opacity"></i></a>
  <a href="https://www.linkedin.com/in/akash-m-s-40266b133" target="_blank"><i  class="fa fa-linkedin w3-hover-opacity"></i></a>
</footer>

<script>
// Automatic Slideshow - change image every 4 seconds
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 4000);    
}

// Used to toggle the menu on small screens when clicking on the menu button
function myFunction() {
  var x = document.getElementById("navDemo");
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else { 
    x.className = x.className.replace(" w3-show", "");
  }
}

// When the user clicks anywhere outside of the modal, close it
var modal = document.getElementById('ticketModal');
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
    $('.distance').val('');
    $('.mileage').val('');
    $('.message').hide();
  }
}

var i = 0;
var txt = 'Recent Blogs';
var speed = 250;

function typeWriter() {
  if (i < txt.length) {
    document.getElementById("recent_blogs").innerHTML += txt.charAt(i);
    i++;
    setTimeout(typeWriter, speed);
  }else{
    document.getElementById("recent_blogs").innerHTML = '';
    i=0;
    typeWriter();
  }
}
// setTimeout(typeWriter, 3000);
typeWriter();
</script>
<script type="text/javascript">
  $(document).ready(function(){
    $('.message').hide();
    console.log('akash');
    $(document).on('click','.send_val',function(){
      var name = $('.name_val').val();
      var email = $('.email_val').val();
      var message = $('.message_val').val();

    if(name!='' && email!='' && message!=''){
      var url = 'insert.php';

      $.ajax({
        url, type: 'POST', data : {'name':name,'email':email,'message':message,'type':'1'},
        success: function(result){
            $('.name_val').val('');
            $('.email_val').val('');
            $('.message_val').val('');
          console.log(result);
      }});
    }else{
      alert('Please Fill all Fields');
    }

    });

    $(document).on('click','.calculate',function(){
      var distance=$('.distance').val();
      var mileage=$('.mileage').val();
      var petrol=$('.petrol').val();
     
      var ltrs = parseInt(distance)/parseInt(mileage);
      var money = parseInt(ltrs) * parseInt(petrol) ;

      var message = 'You Need '+ltrs.toFixed(2)+' liters of Petrol, It costs Approx '+money.toFixed()+' Rs.';
      $('.message').html(message);
      $('.message').show();

    });
    
    $(document).on('click','.close',function(){
        $('.distance').val('');
        $('.mileage').val('');
        $('.message').hide();
    });
    
    


  });
</script>

</body>
</html>
