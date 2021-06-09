<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prime Learning</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="shortcut icon" href="prime learning-favicon.ico">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">


</head>



<?php require_once "controllerUserData.php"; ?>
<?php 
$email = $_SESSION['email'];
$password = $_SESSION['password'];
if($email != false && $password != false){
    $sql = "SELECT * FROM usertable WHERE email = '$email'";
    $run_Sql = mysqli_query($con, $sql);
    if($run_Sql){
        $fetch_info = mysqli_fetch_assoc($run_Sql);
        $status = $fetch_info['status'];
        $code = $fetch_info['code'];
        if($status == "verified"){
            if($code != 0){
                header('Location: reset-code.php');
            }
        }else{
            header('Location: user-otp.php');
        }
    }
}else{
    header('Location: index.php');
}
?>

</head>
    
  
    <?php
    echo "<br>";
    include 'nav.php';

  ?>

  <script data-ad-client="ca-pub-9168873386203522" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
  

  <section class="jumbotron text-center">
    <a href="main.php"></a><img src="prime.png" alt="logo" width="120" style="border-radius: 100%;"></a>
        <br><h1 class="jumbotron-heading"><span id="typed"></span></h1>
        <b><p class="lead text-muted" >We Have The Best Courses planned for you<br>This website will end your search for best tutor for class 3-8</p></b>
        <p>
            
            <a href="about.php" class="btn btn-success" target="_main">About Me</a>
            <a href="contact.php" target="_main" class="btn btn-danger">Contact Me</a>
            <a href="https://forms.gle/Gep6jofk3UyxsEHN6" target="_main" class="btn btn-primary">Enrol Now</a>
        </p>
</section>


<script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.9/typed.min.js" async defer></script>
<script>
window.onload = function () {
    console.log("loaded")
    var typed = new Typed('#typed', {
        strings:["Welcome to Prime Learning", "Confused Which Course to take", "Learn Any subject", "Maths", "Science", "and other subjects with us"],
        backSpeed:40,
        smartBackspace: true,
        backDelay: 2000,
        startDelay: 1200,
        typeSpeed: 30,
        loop: true,
    });
};
</script>



<div _ngcontent-xuv-c26="" class="row"><div _ngcontent-xuv-c26="" class="card mx-auto my-2 p-2 align-items-center" style="width: 18rem;"><img _ngcontent-xuv-c26="" src="enrol.png" style="height: 40vh;"  alt="..." class="padded card-img-top">
<div _ngcontent-xuv-c26="" class="card-body"><h5 _ngcontent-xuv-c26="" class="card-title text-center" t>Enrol Now</h5><p _ngcontent-xuv-c26="" class="card-text text-center">Enrol Now For Online classes by our teacher and these classes will help you to learn up subjects quickly</p><a _ngcontent-xuv-c26="" routerlink="/videos" class="btn btn-primary d-block" href="https://docs.google.com/forms/d/e/1FAIpQLSe6uBG88LflHUIWrqKQOsJdNwODEnjNjlf3suLoxyBctPpUbQ/viewform?usp=sf_link" target="_main">Enrol Now</a></div></div>
<div _ngcontent-xuv-c26="" class="card mx-auto my-2 p-2 align-items-center" style="width: 18rem;"><img _ngcontent-xuv-c26="" style="height: 40vh;"src="contact.png" alt="..." class="padded card-img-top"><div _ngcontent-xuv-c26="" class="card-body"><h5 _ngcontent-xuv-c26="" class="card-title text-center">Contact Me</h5><p _ngcontent-xuv-c26="" class="card-text text-center"> You can contact me for any doubt and I will get back to you!<br><br><br></p><a _ngcontent-xuv-c26="" routerlink="/contact" class="btn btn-primary d-block" href="contact.html" target="_main">Contact Me</a></div></div></div>

<script data-ad-client="ca-pub-9168873386203522" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>


