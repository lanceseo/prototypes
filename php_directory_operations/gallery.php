<head>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script>
    $("document").ready(function(){
        function load_files() {
            $.ajax({
                dataType:'json',
                url: 'get_images.php',
                success: function(result) {
                    console.log(result);
                }
            });
        }
        load_files();
    });

</script>
</head>

<?php


?>