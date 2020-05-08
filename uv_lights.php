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
    .badge-secondary {
      background: rgb(57,178,97) !important;
    }
    .card, .card-header {
      background: rgba(0,0,0,0) !important;
    }
  </style>

</head>
<body>
  <?php include("includes/navigation.php"); ?>
  <div style="background-color: black; height: 75px;"></div>

  <h1 class="display-4 text-center my-5">UV Lights <span class="badge badge-secondary">NEW</span></h1>

  <div class="container text-center my-5">
    <p class="lead">
      We are your energy management experts. Our highly-skilled team delivers innovative solutions by finding opportunities to improve energy consumption and air quality. We also rebuild and repair your current system to prevent frequent system failures. From improving circulation by increasing the height of exhaust stacks to sterilizing your air by adding UV lights in your system, we build unique system enhancements for each of our clients.
    </p>
  </div>

  <div class="container marketing mx-auto mt-5 mb-5 text-center">
    <div class="row mx">
      <div class="col-lg-6">
        <div class="card mb-3">
          <img src="assets/lightning-bolt.png" class="mx-auto mt-3 card-img-top" style="height: 92px; width: 92px;" alt="...">
          <div class="card-body">
            <h5 class="card-title">A/C Cleaner</h5>
            <p class="card-text">A UV air conditioner cleaner is shaped like a stick, always turned on, and placed in the AC’s return air duct to keep the coil free of microbes.</p>
          </div>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="card mb-3" >
          <img src="assets/air-quality.png" class="mx-auto mt-3 card-img-top" style="height: 92px; width: 120px;" alt="...">
          <div class="card-body">
            <h5 class="card-title">Air Purifier</h5>
            <p class="card-text">A UV air purifier is also installed in the return air duct, but it turns on whenever the AC blower turns on and cleans moving air as it passes by.</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="container text-center">
    <h2 style="color: #39B261;">How Does It Work?</h2>
    <p class="lead my-4" style="font-size: 1.1em">
      UV light destroy microbes in air conditioners. The lights are installed in your ductwork or near the AC coil, and they destroy microbes like mold, bacteria, fungi, mildew, mold spores and viruses in the line-of-sight of the UV bulb. According to a study published in the <a href="https://www.ncbi.nlm.nih.gov/pmc/articles/PMC93076/" style="color: #39B261;">Journal of Applied and Environmental Microbiology</a> found that after using UV lights in a commercial HVAC air handler for four months, fungal levels in the UV test units were significantly lower than in control units.
    </p>

    <img src="assets/uv-light-diagram.jpg" height="400px">
  </div>

  <div class="container mb-5">
    <h2 class="text-center mt-5 mb-3" style="color: #39B261;">Frequently Asked Questions</h2>

    <div class="accordion" id="accordionExample">
      <div class="card">
        <div class="card-header" id="headingOne">
          <h2 class="mb-0">
            <button class="btn" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
              <span class="lead my-4" style="font-weight: 600px;">What Are the Advantages of UV Lights?</span>
            </button>
          </h2>
        </div>

        <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
          <div class="card-body">
            Because UV lights kill microbes, mold spores and viruses, your family will be less prone to colds and flu, and anecdotal reports indicate that allergy symptoms can be greatly reduced. UV lights may also be helpful for those with respiratory problems, pulmonary disease, COPD and asthma because they neutralize VOCs that can irritate the throat and lungs. The lights also keep your air conditioner clean, so the unit will be more effective and efficient.
          </div>
        </div>
      </div>
      <div class="card">
        <div class="card-header" id="headingTwo">
          <h2 class="mb-0">
            <button class="btn collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
              <span class="lead my-4" style="font-weight: 600px;">What Are the Disadvantages of UV Lights?</span>
            </button>
          </h2>
        </div>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
          <div class="card-body">
            For the lights to be effective, ductwork must be sealed, and you must use air filters with a high MERV rating. You must change the filters monthly and tune up your air conditioner annually. UV lights only kill organic contaminants; they do not remove inorganic particles like pet dander or dust, and they do not kill dust mites.
          </div>
        </div>
      </div>
      <div class="card">
        <div class="card-header" id="headingThree">
          <h2 class="mb-0">
            <button class="btn collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
              <span class="lead my-4" style="font-weight: 600px;">Is the installation and maintenance expensive?</span>
            </button>
          </h2>
        </div>
        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
          <div class="card-body">
            The bulbs are easy to install: a Right Now Air Solutions technician will typically mount one near the AC coil with a magnet. Maintenance is also easy: We'll simply replace the bulb when it burns out. Bulbs can typically last for up to 12 months, and the additional energy usage costs about $2 per month.
          </div>
        </div>
      </div>
    </div>
  </div>

  <?php include("includes/footer.php"); ?>
  <?php include("includes/scripts.php"); ?>
</body>

</html>
