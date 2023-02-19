<?php

  include ("connection.php");
  error_reporting(0);

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
    <h1 class="text-center my-5">Donate for <span class="badge bg-dark text-white">#ZeroHunger</span></h1>
    
    <div class="container w-50 border border-dark rounded my-5">
        
        <form class="row g-3" method="GET" action=""> 
            <div class="col-md-6">
              <label for="inputName4" class="form-label">Donor Name</label>
              <input type="text" class="form-control" id="inputName4" name="dname" required>
            </div>
            <div class="col-md-6">
              <label for="inputMoNo4" class="form-label">Mobile No</label>
              <input type="tel" pattern=".{10}" class="form-control" id="inputMoNo4" name="dmono" oninput="check(this)" required>
            </div>
            <div class="col-12">
              <label for="inputAddress" class="form-label">Address</label>
              <input type="text" class="form-control" name="daddress" id="inputAddress" placeholder="Enter your Address ..." required>
            </div>
            <div class="col-12">
              <label for="inputAddress2" class="form-label">Locality</label>
              <input type="text" class="form-control" name="dlocality" id="inputAddress2" placeholder="Enter Locality ..." required>
            </div>
            <div class="col-md-6">
              <label for="inputCity" class="form-label">City</label>
              <input type="text" class="form-control" name="dcity" id="inputCity" required>
            </div>
            <div class="col-md-2">
              <label for="inputZip" class="form-label">Zip</label>
              <input type="text" pattern=".{6}" name="dzip" class="form-control" id="inputZip" required>
            </div>
            <div class="col-md-6">
                <label for="inputFood4" class="form-label">Food Catagory</label>
                <input type="text" class="form-control" name="dcatagory" id="inputFood4" placeholder="Enter Food catagory that you want to donate ..." required>
              </div>
            
            <div class="col-12 my-4">
              <button type="submit" name="submit" class="btn btn-primary">Donate</button>
              <!-- <input type="submit" name="sub" class="btn btn-primary"> -->
            </div>
          </form>
</div>

<?php



if(isset($_GET['submit']))
{
  $DNAME = $_GET['dname'];
  $DMONO = $_GET['dmono'];
  $DADDRESS = $_GET['daddress'];
  $DLOCALITY = $_GET['dlocality'];
  $DCITY = $_GET['dcity'];
  $DZIP = $_GET['dzip'];
  $DDCATAGORY = $_GET['dcatagory'];


  $q = "INSERT INTO `donor details` (`name`, `mono`, `address`, `locality`, `city`, `zip`, `fcatagory`) VALUES ('$DNAME', '$DMONO', '$DADDRESS', '$DLOCALITY', '$DCITY', '$DZIP', '$DDCATAGORY')";
  $res = mysqli_query($conn,$q);
 
}

?>
    


  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script>
    (function () {
			'use strict';
			window.addEventListener('load', function () {
				
				var forms = document.getElementsByClassName('needs-validation');
        var tel = document.querySelector('input[type="tel"]');
        
				
				var validation = Array.prototype.filter.call(forms, function (form) {
					form.addEventListener('submit', function (event) {
						if (form.checkValidity() === false) {
							event.preventDefault();
							event.stopPropagation();
						}
            if(!check(tel.value)){
              event.preventDefault();
							event.stopPropagation();
              alert('error on phone')
            }
						form.classList.add('was-validated');
					}, false);
				});
			}, false);


		})();

function check(input) {
  if(input.length != 10)
    return false;
  return true;
}
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


