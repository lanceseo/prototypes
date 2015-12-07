<head>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script>
    $('document').ready(function() {
        $('button').on('click',function() {
            sendAjax();
       })
    });

    function sendAjax() {
        var tTitle = $('input[name="title"]').val();
        var tDetails = $('input[name="details"]').val();
        var tTimestamp = $('input[name="timestamp"]').val();
        var tLocation = $('input[name="location"]').val();

        $.ajax({
            //dataType: 'json',
            method: 'post',
            url: 'index_insert.php',
            data: {
                'title' : tTitle,
                'details' : tDetails,
                'timestamp' : tTimestamp,
                'location' : tLocation
            },
            success: function(result) {
                if (result.success) {
                    console.log(result);
                }
                else {
                    console.log('json issue');
                }
            },
            error: function(msg) {
                console.log('something wrong '+ msg);
            }
        })
    }

</script>
</head>

<body>

    <input type="text" name="title" placeholder="title"><br>
    <input type="text" name="details" placeholder="details"><br>
    <input type="text" name="timestamp" placeholder="timestamp"><br>
    <input type="text" name="location" placeholder="location"><br>
    <button type="button">Send to DB</button>

</body>