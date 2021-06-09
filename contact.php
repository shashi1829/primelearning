<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="contact.css">
    <link rel="shortcut icon" href="prime learning-favicon.ico">
    
</head>
<body>
<?php
    echo "<br>";
    include 'nav.php';

  ?>
    
      <div class="container">
        
        <big><big><h1 style="text-align: center; background-color: aliceblue;">Contact Us</h1></big></big><br style="background-color: aliceblue;">
        <section><br>
            
            <div class="container">
              
              <form action="" method="POST" id="my-form">
          
                <div class="form-group">
                  <label for="firstName"> First Name</label>
                  <input type="text" id="firstName" name="firstName">
                </div>
          
                <div class="form-group">
                  <label for="latsName">Last Name</label>
                  <input type="text" id="lastName" name="lastName">
                </div>
          
                <div class="form-group">
                  <label for="email">Email</label>
                  <input type="email" id="email" name="email">
                </div>
          
                <div class="form-group">
                  <label for="massage">Massage</label>
                  <textarea name="massage" id="massage" cols="30" rows="10"></textarea>
                </div>
          
                <button type="submit">Submit</button>
              </form>
            </div>
            <div id="status"></div>
          </section>
</script>
</div>
</script>
</div>
<script>
  const scriptURL = 'https://script.google.com/macros/s/AKfycbx50tmjfNcUHHsR3hmTSHFDL9SNuu_wIAw-lHhuCQ922hqvJxGr/exec'
  const form = document.forms['google-sheet']

  form.addEventListener('submit', e => {
    e.preventDefault()
    fetch(scriptURL, { method: 'POST', body: new FormData(form) })
      .then(response => alert("Thanks for Contacting us..! We Will Contact You Soon..."))
      .catch(error => console.error('Error!', error.message))
  })
</script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</body>
</html>