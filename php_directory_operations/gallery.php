<!DOCTYPE>
<html>
<head>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

    <script>
        $("document").ready(function(){
            load_files();
        });

        function load_files() {
            $.ajax({
            dataType:'json',
            url: 'get_images.php',
            success: function(result) {
                console.log(result);
                add_to_container(result);
                create_modals(result);
            }
            });
        }

        function add_to_container(picData) {
            for (var i=0; i<picData.images.length; i++) {
                var img = $("<img>").attr({
                    src: picData.images[i],
                    width: "25%",
                    "data-toggle": "modal",
                    "data-target": "#myModal"+i
                });
                $(".container").append(img);
            }
        }

        function create_modals(picData) {
            for (var i=0; i<picData.images.length; i++) {
                var img = $("<img>").attr({
                    src: picData.images[i]
                });
                var mContent = $("<div>").attr("class","modal-content");
                var mDialog = $("<div>").attr("class","modal-dialog");
                var mID = $("<div>").attr({
                    "id": "myModal"+i,
                    "class": "modal fade"
                });
                mContent.append(img);
                mDialog.append(mContent);
                mID.append(mDialog);
                $(".modals").append(mID);
            }
        }

    </script>
</head>

<?php

?>
<body>

    <div class="container" style="border:1px solid blue">
    </div>

    <div class="modals">
    </div>

</body>
</html>