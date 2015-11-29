<head>
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
</head>

<!---------------- Feature Set 1 ------------------>
<?php
$pics = (glob('images/*.jpg'));
print_r($pics);
//print('<br><br>');
//
//for ($i=0; $i<count($pics); $i++){
//    print("<div class='image_container'><img src='$pics[$i]'></div>");
//}
//print('<br><br>');
//
//foreach ($pics as $values) {
//    print("<div class='image_container'><img src='$values'></div>");
//}
?>
<br><br>
<div class="image_container">
  <?
  foreach ($pics as $values) {
    print("<img src='$values' width='300px'>");
  }
  ?>
</div>
<br><br>

<!-- Carousel -->
<div id="myCarousel" class="carousel" data-ride="carousel" style="display:inline-block">
  <!-- Wrapper for slides -->
  <div class="carousel-inner center" role="listbox">
    <?
    for ($i=0; $i<count($pics); $i++){
      if ($i===0) {
        print("<div class='item active'>");
        print("<img src='$pics[$i]' width='500px'>");
        print("</div>");
      }
      else {
        print("<div class='item'>");
        print("<img src='$pics[$i]' width='500px'>");
        print("</div>");
      }
    }
    ?>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>