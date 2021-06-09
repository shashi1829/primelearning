<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="/"><img class="photo"src="prime learning.png" alt="My image" style="border-radius: 100%;"></a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">

        <li class="nav-item font-weight-bold">
          <a class="nav-link" href="main.html">Home</a>
        </li>


        <li class="nav-item font-weight-bold">
          <a class="nav-link" href="about.html" target="_main">About Me</a>
        </li>

        <li class="nav-item font-weight-bold">
          <a class="nav-link" href="contact.html" target="_main">Contact Me</a>
        </li>
        <li class="nav-item font-weight-bold">
          <a class="nav-link" href="https://forms.gle/nnL1Gzi37KpbJt1T7" target="_main">Enrol Now</a>
        </li>

      </ul>
      <h4 style="margin-left: 600px; color: white;"><?php echo $fetch_info['name'] ?></h4>
      <p align="right"><button type="button" class="btn btn-light" style="margin-left: 20px;"><a href="logout-user.php">Logout</a></button></p>

      </form>
      
    </div>
  </nav>