<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  </head>
  <body>
      <input type="text" name="keyword" id="paieska" placeholder= "ivesti paieska"value="<?php if (isset($_POST['keyword'])) echo $_POST['keyword']; ?>">
      <button type="submit" id="mygtukasieskoti">ieskoti</button>
<div id= "data"> cia rasysiu rezultatus</div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  
    <script>
        $("#mygtukasieskoti").click(function(){

            var author = $("#paieska").val();
            console.log(author);

            var req = $.ajax({
                url: 'kitas.php',
                method: 'POST',
                data: {
                    paieska: author
                }
            })
            //cia kai grazina duomenis des i div ?
            .done(function(data) {
                $.each(data, function(key, val){
                var block = `<div class='alert alert-info'>${val.paieska} </div>`;
                    $("#data").append(block);
                  
                })
            })
            .fail(function() {
                
            })
            .always(function() {
                
            }); 

        });

    </script>
  </body>
</html>

<?php

