<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Right Now Air Solutions</title>

  <?php include("includes/head.php"); ?>

  <style>
    .bg-transparent {
      background: black !important;
    }
  </style>

</head>
<body>
  <?php include("includes/navigation.php"); ?>
  <div style="background-color: black; height: 75px;"></div>

  <!-- <div class="jumbotron jumbotron-fluid mb-0">
    <div class="container text-center">
      <h1 class="display-4 text-muted" style="">Contact Us</h1>
    </div>
  </div> -->

  <h1 class="display-4 text-center my-5">Contact Us</h1>

  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3360.5974766139793!2d-80.31884752186023!3d25.82297032059964!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88d9ba2deff40871%3A0x497b070fd7b0eef2!2s7327%20NW%2054th%20St%2C%20Miami%2C%20FL%2033166!5e0!3m2!1sen!2sus!4v1577383164195!5m2!1sen!2sus" width="100%" height="400" frameborder="0" style="border:0;" allowfullscreen=""></iframe>

<div class="row">
  <div class="col">
    <form class="ml-3 my-5">
      <div class="form-group col">
        <h4 class="mb-4 text-secondary">Request a Complimentary Walkthrough</h4>
        <label for="inputName">Name</label>
        <input type="text" class="form-control" id="inputCity">
      </div>
      <div class="form-group col">
        <label for="inputEmail4">Email</label>
        <input type="email" class="form-control" id="inputEmail4">
      </div>
      <div class="form-group col">
       <label for="exampleFormControlTextarea1">Message</label>
       <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
     </div>
     <button type="submit" class="ml-3 btn btn-primary">Send Message</button>
  </form>
  </div>
  <div class="col">
    <div class="mx-3 my-5">
      <h4 class="mb-4 text-secondary">Contact Information</h4>
      <h5 class="card-title">Address</h5>
      <p class="card-text">5220 NW 72nd Ave, #23A<br>
      Miami, Florida 33166</p>
      <h5 class="card-title">Phone Number</h5>
      <p class="card-text">(305) 409-4443</p>
      <h5 class="card-title">Email</h5>
      <p class="card-text">service@rightnow-air.com</p>
    </div>
  </div>
</div>

  <?php include("includes/footer.php"); ?>
  <?php include("includes/scripts.php"); ?>
</body>
</html>
