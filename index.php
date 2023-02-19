<?php
  
  if(isset($_POST['sub']))
  {
    $eId = "abc@gmail.com";
    $pword = "abc";
  
    if($eId == $_POST['email'] and $pword == $_POST['password'])
    {
      header('Location: display.php');
    }
  }

  ?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <title>FoodAvail</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
    integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <a class="navbar-brand" href="index.php">FoodAvail</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          
          <a href="display.php" class="nav-link" data-toggle="modal" data-target="#Modal">VIEW DONOR INFO</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            ABOUT
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">MY STORY</a>
            <a class="dropdown-item" href="foodwaste.php">FOOD WASTE</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="donate.php">DONATE</a>
        </li>
      </ul>
    </div>
    </div>
</nav>




  <div class="container w-55 my-5">
    <div class="bd-example py-4">
      <div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="4.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h1>To Stop The Food Waste</h1>
            </div>
          </div>
          <div class="carousel-item">
            <img src="6.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
            <h1>To Stop The Food Waste</h1>
            </div>
          </div>
          <div class="carousel-item">
            <img src="7.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
            <h1>To Stop The Food Waste</h1>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
  </div>

  <div class="card text-center bg-dark" style="color:white">
    <div class="card-body">
      <h3 class="card-title">Join us in the fight for a Food Waste and a Save Money</h3>
      <h4 class="card-text">we need your help</h4>
      <p>Stop food waste and Remove the hungerness of needy people</p>
      <a href="donate.php" class="btn btn-primary">Donate Food Now</a>
      <a href="display.php" class="btn btn-primary" data-toggle="modal" data-target="#Modal">View Donor Info</a>

    </div>
  </div>

  <!-- Login Modal -->
  <div class="modal fade" id="Modal" tabindex="-1" role="dialog" aria-labelledby="ModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">To Get a Donor Info</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="" method="POST">
            <div class="form-group">
              <label for="exampleInputEmail1">Email address</label>
              <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp">
              <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Password</label>
              <input type="password" class="form-control" name="password" id="exampleInputPassword1">
            </div>
            <button type="submit" class="btn btn-primary" name="sub">Get Info</button>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>






  <div class="container my-5">
    <div class="row featurette d-flex justify-content-center align-items-center">
      <div class="col-md-7 order-md-2">
        <h2 class="featurette-heading fw-normal lh-1">Problem</h2>
        <p class="lead">When food ends up in the landfill, It gets covered by other garbage and rots in an anaerobic
          state - meaning it doesn’t get any oxygen while it decomposes. This creates methane gas, which is a leading
          cause of greenhouse gases that are making a noticeable gaping hole in the ozone layer and significantly
          contributing to climate change.</p>
        <p class="lead">now the main concern is this :  According to several types of research, approximately 40 percent of the food prepared at a wedding venue is wasted and thrown away after the wedding ends. India’s estimated 10 million weddings a year contribute to food wastage. </p>

      </div>
      <div class="col-md-5 img-fluid">
        <img src="9.jpg" alt="" height="250" weight="250">
      </div>
    </div>
    <div class="row featurette d-flex justify-content-center align-items-center my-4">
      <div class="col-md-7">
        <h2 class="featurette-heading fw-normal lh-1">Diversion efforts</h2>
        <p class="lead">These days, many caterers have tie-ups with NGOs. Once the wedding is complete and guests have eaten, NGOs are given a call and they come with their trucks to pick up leftover food which is immediately sent to places where underprivileged or poor community resides. This way, good use of food is assured and food wastage at weddings avoided. 
        </p>
        <p class="lead">With all their efforts, to make a small change and every small change in this direction give us big result One day</p>
      </div>
      <div class="col-md-5 img-fluid d-flex">
        <img src="12.jpg" alt="" height="250" weight="250">
      </div>
    </div>
    <div class="row featurette d-flex justify-content-center align-items-center my-5">
      <div class="col-md-7 order-md-2">
        <h2 class="featurette-heading fw-normal lh-1">Our solution</h2>
        <p class="lead">we are a non-profit organization that collects and distributes food to hunger-relief charities. we act as food storage and distribution depots for smaller front line agencies; and usually do not themselves give out food directly to people struggling with hunger.</p>
      </div>
      <div class="col-md-5 img-fluid">
        <img src="10.jpg" alt="" height="250" weight="250">
      </div>
    </div>
  </div>

  <div class="container-fluid bg-dark" style="color:white">
    <footer class="py-3 my-4">
      <ul class="nav justify-content-center border-bottom pb-3 mb-3">
        <li class="nav-item"><a href="#" class="nav-link px-2 text-white"><b>Home</b></a></li>
        <li class="nav-item"><a href="#" class="nav-link px-2 text-white"><b>Features</b></a></li>
        <li class="nav-item"><a href="#" class="nav-link px-2 text-white"><b>View Donor Info</b></a></li>
        <li class="nav-item"><a href="#" class="nav-link px-2 text-white"><b>FAQs</b></a></li>
        <li class="nav-item"><a href="#" class="nav-link px-2 text-white"><b>About</b></a></li>
      </ul>
      <p class="text-center text-white">© 2022 FoodAvail, Inc</p>
    </footer>
  </div>



  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  </script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>
</body>

</html>