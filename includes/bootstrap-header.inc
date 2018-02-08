
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="includes/lib/font-awesome/css/font-awesome.min.css">
  
  <link rel="stylesheet" href="includes/lib/bootstrap/css/bootstrap.min.css">
  <script src="includes/lib/jquery-2.1.3.min.js"></script> 
  <script src="includes/lib/bootstrap/js/bootstrap.min.js"></script>
 
  <script type="text/javascript" src="includes/lib/validator.min.js"></script>

  <!-- This is what you need -->
  <script src="includes/lib/sweetalert-dev.js"></script>
  <link rel="stylesheet" href="includes/lib/sweetalert.css">

  
  <!--//Index.php Page Section Slider Code-->
  <style>
  body {
      position: relative; 
  }
  <!--//#signup {padding:50px;color: #fff; background-color: #1E88E5;}-->
  #section1 {height:0;}
  #section2 {padding:50px;color: #fff; background-color: #00FFFF;}
  #section3 {padding:50px;color: #fff; background-color: #ff9800;}
  #section4 {padding:50px;color: #fff; background-color: #ADFF2F;}
  #section5 {padding:50px;color: #fff; background-color: #F08080;}
  </style>
  

<!--//Header Code for Image Slider--> 
  <style>
  .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
      width: 100%;
      margin:0;
	  height:500px;
  }
  </style>


<!--//Code for Linking CSS style with Index.php-->
<link rel="stylesheet" href="includes/style.css" >


<!--//Script for including Table 2 in Notice Board Section from ajax.php-->
<script>
    function clickMe(x)
	{
        $.get("ajax.php?notice=" + x, function(data, status)
		{
            //alert("Data: " + data + "\nStatus: " + status);
			$(".table2").html(data);
        }
		);
    }
	
	
</script>