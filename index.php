<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search here</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

</head>
<body>

<div class="container">
<div class="text-center mt-5 mb-4">
<h1>PHP Live Search</h1>
</div>
<input type="text" placeholder="Search ... " id = "live_search" autocomplete="off" class="form-control" >
</div>

 <div id="searchresult"></div>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

<script type="text/javascript">

    $(document).ready(function(){

        $("#live_search").keyup(function(){
            var input = $(this).val();
            
            if(input != ""){
                $.ajax({
                    url: "livesearch.php",
                    method:"POST",
                    data:{input:input},

                    success:function(data){
                        $("#searchresult").html(data);

                    }

                });

            }
            else{
                $("#searchresult").css("display", "none");
            }
        })
    })

</script>
</body>
</html>