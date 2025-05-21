<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <script src="https://kit.fontawesome.com/6abd824075.js" crossorigin="anonymous"></script>

  <title>Registration</title>

</head>

<body>

  <div class="container-fluid R-form">
    <div class="row">
      <div class="col-lg-12 text-center">
        <form class="" action="index.html" method="post">
          <h1>DONATE BLOOD</h1>
          <h6>It's never late to save a life!</h6>

          <table>
            <h5>Email :</h5>
            <input type="text" name="email" value="" size="35px">

            <h5>Name :</h5>
            <input type="text" name="name" value="" size="35px">

            <h5>Gender :</h5>
            <input type="text" name="gender" value="" size="25">

            <div class="check_eligiblity">
              <h1>CHECK ELIGIBLITY</h1>
              <h6>Check wether you fit into the minimum required criteria for donating blood.</h6>

              <h5>Age :</h5>

              <input type="text" name="age" value="" size="25px">

              <h5>weight :</h5>

              <input type="text" name="weight" value="" size="25px">

              <h5>Any blood donated in past 3 months :</h5>
              <p>Yes <br> No</p>
              <input type="text" name="past_donation" value="" size="25px">
            </div>

            <div class="second-div">
              <h5>Infection (if any) :</h5>
              <ul class="list">
                <li class="">Hepatitis B</li>
                <li class="">Hepatitis c</li>
                <li class="">Tuberculosis</li>
                <li class="">Leprosy</li>
                <li class="">HIV</li>
                <li class="">None</li>
              </ul>
              <input type="text" name="infection" value="" size="30px">
            </div>

            <div class="second-div">
              <h5>Vaccination (in past 30 days) :</h5>
              <ul class="list">
                <li class="">Covid 19</li>
                  <li class="">None</li>

              </ul>
              <input type="text" name="Vaccination" value="" size="30px">
            </div>

            <div class="second-div">
              <h5>Disease :</h5>
              <ul class="list">
                <li class="">Epilepsy</li>
                <li class="">Asthama on steroid</li>
                <li class="">CBleeding disorder</li>
                <li class="">Thalassemia</li>
                <li class="">Sickle cell anemia</li>
                <li class="">None</li>

              </ul>
              <input type="text" name="Vaccination" value="" size="30px">
            </div>

            <div class="second-div">
              <h5>Tattoos and Scars :</h5>

              <input type="text" name="Vaccination" value="" size="30px">
            </div>

            <div class="second-div">
              <h5>Blood Group :</h5>
              <ul class="list-bgrp">
                <li class="">A+</li>
                <li class="">A-</li>
                <li class="">B+</li>
                <li class="">B-</li>
                <li class="">O+</li>
                <li class="">O-</li>
                <li class="">AB+</li>
                <li class="">AB-</li>
              </ul>
              <input type="text" name="Vaccination" value="" size="30px">
              <input type="submit">
            </div>

          </table>
        </form>

      </div>

    </div>
  </div>


</body>

</html>