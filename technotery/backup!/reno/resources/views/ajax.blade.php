<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <title>Document</title>
    
</head>
<body>
    <p>Ajax</p>
    <div id = 'msg'>This message will be replaced using Ajax. 
         Click the button to replace the message.</div>
         <button class="getUser">Click and get users</button>
         <div class="showData"></div>
    <script>




        $(document).on('click','.getUser',function(){
            $.ajax({
                type:'GET',
                url:'{{route("ajaxGetUser")}}',

                success:function(response) {
                    console.log('response');
                    console.log(response.data[0].name);
                    $('.showData').append(response.data[0].name)
                   
                }
            });
        });

    
</script>
</body>
</html>