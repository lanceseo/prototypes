<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<body>
<?php
$pics = (glob('images/*.jpg'));
print_r($pics);

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

<div id="myCarousel" class="carousel slide" data-ride="carousel" style="display:inline-block">
<?


?>
</div>


<!--
<div id="myCarousel" class="carousel slide" data-ride="carousel" style="display:inline-block">
    <!-- Wrapper for slides -->
    <div class="carousel-inner center" role="listbox">
        <div class="item active">
            <img src="images/beagle_.jpg" width="400px">
        </div>

        <div class="item">
            <img src="images/nature1.jpg" width="400px">
        </div>
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
-->


</body>