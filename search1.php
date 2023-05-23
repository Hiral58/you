<?php include('conn.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
   
</head>
<body>
    <h2>HIII</h2>
    <div class="container" style="max-width:50%;">
        <input type="text" class="form-control" id="live_search" autocomplete="off" placeholder="search...">

    </div>

    <div id="searchres"></div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script type="text/javascript">
    $(document).ready(function(){
        $("#live_search").keyup(function(){
            var input=$(this).val();
            //alert(input);
            if(input!=""){
                $.ajax({
                    url:"livesearch.php",
                    method:"POST",
                    data:{input:input},
                    success:function(data){
                        $("#searchres").html(data);
                    }
                });
            }else{
                $("#searchres").css("display","none");
            }
        });
    });
    </script>
</body>
</html>