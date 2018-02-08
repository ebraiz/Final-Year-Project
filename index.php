<!DOCTYPE html>
<html lang="en">

<head>
<title>Welcome To Edwardes College</title>
<?php include("includes/bootstrap-header.inc"); ?>
<?php include("login.php"); ?>
<?php include("registration.php") ?>
</head>

<body>
<div id="section1" class="container-fluid"></div>

<header>
<div  class="row" style="padding-top:20px;">
  <div class="col-sm-7">
  <h2 class='h2'>Edwardes College</h2>
  </div>

  
<div class="col-sm-5">
<!-- Write anything at front of Edwardes Logo-->
</div>

</div>
</header>

<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">

	    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>                        
        </button>
       <a class="navbar-brand" href="#section1">Edwardes Official</a>
    </div>
    <div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
          <li><a href="#section1">Home</a></li>
          <li><a href="#section2">Notice Board</a></li>
		  <li><a href="#" data-toggle="modal" data-target="#registration">Apply Online</a></li>
		  <li><a href="#section3">Mission & Vision</a></li>
		  <li><a href="#section4">About Us</a></li>
          <li><a href="#section5">Contact Us</a></li>
        </ul>
		<ul class="nav navbar-nav navbar-right">
        
		<li><a href="#" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
        <li><a href="#" onclick="location.href='https://www.facebook.com/EdwardesCPeshawar?fref=ts';"><i class="fa fa-facebook-square fa-lg"></i></a></li>
		<li><a href="#" onclick="location.href='https://www.linkedin.com/grp/home?gid=6545982';"><i class="fa fa-linkedin-square fa-lg"></i></a></li>
      </ul>
      </div>
    </div>
  </div>
</nav>    


<div id="section6" style="padding:0;margin:0;" class="container-fluid">
<?php include("includes/imageslide.inc") ?>
</div>


<div id="section2" class="container-fluid">
<heading>Notice Board</heading>

<div  class="row">
<div class="col-sm-6">

<table class='table1'>
<tr><td><subtitle>NO.</subtitle></td><td><subtitle>TITLE</subtitle></td></tr>

<?php
include ("includes/db.php");
$query = "select * from notice_board ORDER BY noticeID DESC LIMIT 0,5";
$run = mysql_query($query);
while ($row=mysql_fetch_array($run)) {

$noticeID = $row['noticeID'];
$title = $row['title'];
$desc = $row['description'];
	
echo "<tr><td><text>"; echo $noticeID; echo "</text></td><td><text>"; echo $title; echo "</text></td><td><button class='btn btn-default btn-sm' onclick='clickMe($noticeID)'><subtitle>View</subtitle></button></td></tr>";

}
?>
</table>
</div>

<div class="col-sm-6">
<table class='table2'></table>
</div>

</div>
</div>


<div id="section3" class="container-fluid">

<heading>Mission & Vision</heading>
</br></br>
<text>
The mission of Edwardes College is to educate and develop professionals who will be the servant leaders in meeting the challanges and oppertunities of Pakistan today.
</br></br>Goals: Edwardes will fulfill its mission as it:
<ul>
</br><li>Responds to the need of diverse society.</li></br>
<li>Privides education at the highest possible standard.</li></br>
<li>Prepares students for rewarding careers in the challenging environment.</li></br>
<li>Cultivates a community that develop diverse talents.</li></br>
<li>Nurtures integrity, responsibility and creativity in personal character.</li></br>
</ul>
</text>
</div>

<div id="section4" class="container-fluid">

<heading>About Edwardes</heading>
</br></br>
<text>
The Church Missionary Society (CMS) with the assistance of Sir Herbert Edwardes, the British commissioner of Peshawar, established Edwardes College in 1900 in the most beautiful part of the Peshawar Cantonment. The institution was named Edwardes in recognition of the commissioner's meritorious contribution. Symmetrical and balanced, the Mughal-style buildings amidst sprawled lush green lawns symbolizing rich cultural heritage of the region were designed by its first Principal, the Reverend J. H. Hoare. The Principal's bungalow remarkable for its unadorned beauty in style is the oldest building that was bought in 1885, long before founding of the college, by the CMS as the centre for its local work.</br></br>
The college started its educational services in 1900 in the Province. Since then it has been a worthy seat of learning and has produced icons and idols in different walks of life. Its efforts never went unappreciated and is graced with visits and commendations from dignitaries of their times. Flanked by Principal, Rev. Dalaya and Khan Abdul Ghaffar Khan  (Bacha Khan), Mahatma Gandhi visited Edwardes college on May 18, 1933. During the same era, distinguished visitors to the college included Liaquat Ali Khan (First Prime Minister to Pakistan), Pundit Jawaharlal Nehru (First Prime Minister to India), Khawaja Nazimuddin (Second Governor General and later second Prime Minister to Pakistan), and Dr. Khan Sahib (First Chief Minister to the then N.W.F.P now Khyber Pukhtunkhwa Province). Quaid-e-Azam Muhammad Ali Jinnah, founder of the nation, visited this institution thrice specifically asking students ?to keep your heads up as citizens of a free and independent sovereign state? in his visit on April 18, 1948.</br></br>
During early days, the college was affiliated with the University of Punjab. In late 1950s, the College associated itself with the University of Peshawar for various courses. The nationalization of the college in 1970s was questioned and the then provincial Governor in collaboration with all the respective stakeholders constituted a Board of Governors for this prestigious college. The existing Board of Governors, is a resourceful body that is chaired by the Governor of the Province.</br></br> 
Edwardes College is the oldest institution of higher education in Khyber Pakhtunkhwa. It has been encouraging students? talents in drama, debates, sports and writing. Apart from contribution to higher education in the most impoverished and troubled region of Pakistan, its greatest service and pride is imparting the much required message of our challenging times?human life and reason are sacred. With this understanding, it lifts every bar of distinction and discrimination against class, caste and creed. Edwardes College promotes interfaith harmony and peaceful co-existence as people of different faiths are teaching and studying here since its establishment. It has evolved a culture that resists ignorance and extremism and inculcates love for humanity through service to humanity. Edwardes College welcomes respects and nourishes eclectic ideas and beliefs with an understanding that diversity is the design of God and beauty of the universe.
</text>

</div>


<div id="section5" class="container-fluid">
  
<div  class="row">

<div class="col-sm-7">
<heading>Contact Us</heading>

</br></br><subtitle>ADDRESS:</subtitle>

<text>The Mall Peshawar Cantonment, Khyber Pakhtunkhwa Pakistan.</text>

</br></br><subtitle>NORMAL OFFICE HOURS:</subtitle>
<text>Monday to Friday: 8:00am to 5:00pm.</text>

</br></br><subtitle>RAMDAN TIMINGS:</subtitle>

<text>Monday to Friday: 8:00am to 1:00pm.</text>

</br></br><subtitle>PHONE NUMBERS:</subtitle>

<text>
</br>-Edwardes College Office(inquiry): 091-5275154 Ext 0, 091-5275211 Ext 0.
</br>-Secretary to the Principal: 091-5275154 Ext 103, 091-5275211 Ext 103, 091-5276765.
</br>-Admin Office: 091-5275154 Ext 109, 0915275211 Ext 109, 5276268.
</br>-Finance Department: 091-5275154 Ext 115-120, 0915275211 Ext 115-120, 091-5275236, 091-5273021.
</br>-Estate Department: 091-5275154 Ext 136, 091-5272233.
</br>-College Fax: 091-5274172.
</text>

</br></br><subtitle>ADMISSION INQUIRY:</subtitle>

<text>
</br>-Inter Year Head (FSc / FA) : 091-5275154 Ext 333 / 133 , 091-5275211 Ext 333 / 133, 091-5285803.
</br>-Degree Year Head (BA / BSc) : 091-5275154 Ext 141, 091-5275211 Ext 141, 091-5274488.
</br>-Head Department of Computer Science (BS-CS): 091-5275154  Ext 123, 091-5275211 Ext 123, 091-5284033.
</br>-Director A Levels:  091-5275154  Ext 122 / 124, 091-5275211 Ext 122 / 124, 091-5274673.
</br>-HoD Professional Studies (HND / MBA): 091-5275154  Ext 125 / 127, 091-5275211 Ext 125 / 127, 091-5274653.
</text>

</br></br><subtitle>WEBSITE:</subtitle><text>Incharge College Website / HoD Computer Sc: 5284033.</text>

</div>

<div class="col-sm-5">
<?php include('contact.php'); ?>

</div>

</div></div>

<script>
$(document).ready(function(){
  // Add scrollspy to <body>
  $('body').scrollspy({target: ".navbar", offset: 50});   

  // Add smooth scrolling on all links inside the navbar
  $("#myNavbar a").on('click', function(event) {

    // Prevent default anchor click behavior
    event.preventDefault();

    // Store hash
    var hash = this.hash;

    // Using jQuery's animate() method to add smooth page scroll
    // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
    $('html, body').animate({
      scrollTop: $(hash).offset().top
    }, 800, function(){
   
      // Add hash (#) to URL when done scrolling (default click behavior)
      window.location.hash = hash;
    });
  });
});
</script>

<footer><subtitle>Copyright 2016 | All Right Reserved | By Edwardes College</subtitle></footer>

</body>
</html>