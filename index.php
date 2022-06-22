<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Physio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light static-top">
        <div class="container">
            <a class="navbar-brand" href="index.php">
                <img src="images/logo.png" alt="..." style="width:70px;height:40px;margin-top:-10px;">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent" style="margin-left: 40%;">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php" style="margin-left: 90px;">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#aboutus" style="margin-left:15px;">ABOUT US</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#treatment" style="margin-left:15px;">TREATMENTS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#appointment" style="margin-left:15px;">BOOK AN APPOINTMENT</a>
                    </li>
            </div>
        </div>
    </nav>
    <div class="container">
        <div class="row">
            <div class="col-sm-8">
            <img  src="images/headimage.png" alt="" width="100%" style="margin-left: -175px;">
            </div>
            <div class="col-sm-4">
            <form action="thanks.php" method="POST" style="margin-top: 60px;">
  <div class="mb-3">
    <label for="name" class="form-label">Name</label>
    <input type="name" class="form-control" id="name" name="name" aria-describedby="name" required>
  </div>
  <div class="mb-3">
    <label for="email" class="form-label">Email</label>
    <input type="email" class="form-control" id="email" name="email" aria-describedby="email" required>
  </div>
  <div class="mb-3">
    <label for="phone" class="form-label">Phone</label>
    <input type="number" class="form-control" id="phone" name="phone" aria-describedby="phone" required>
  </div>
  <div class="mb-3">
    <label for="message" class="form-label">Message</label>
    <input type="text" class="form-control" id="message" name="message" aria-describedby="message" required>
  </div>
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>
            </div>
        </div>
    </div>
    <br>
    <h2 style="margin-left: 200px;color:orange;font-size:40px;" id="aboutus">OUR DIRECTOR</h2>
    <hr>
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <img src="images/image.jpeg" alt="" width="100%">
            </div>
            <div class="col-sm-6">
                <h2 style="font-size: 35px;font-weight:bold;">DR. ATUL SINGH</h2><br>
                <h2>QUALIFICATIONS:-</h2><br>
                <ul>
                    <li style="font-size: 25px;">MPT (Orthopaedics & Sports)</li>
                    <li style="font-size: 25px;">MHA, MIAFT, CNDT, CKTT, COMT</li>
                    <li style="font-size: 25px;">Diploma in Sports Medicine</li>
                    <li style="font-size: 25px;">Certified Orthopaedic Manual Therapist</li>
                    <li style="font-size: 25px;">Chiropractic & Osteopathy Certified Practitioner Director-MY PHYSIO</li>
                    <li style="font-size: 25px;">Assistant Director & HOD Physiotherapy JNU Medical College & Hospital Ex. Senior Physiotherapist, Fortis Hospital Bangalore.</li>
                </ul>
            </div>
        </div>
    </div>
    <br>
    <h2 style="text-align: center;font-size:40px;" id="treatment">TREATMENTS WE OFFER</h2>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-sm-4" style="background-color: orange;padding:12px;">
                <img src="images/sportsinjury.webp" class="img-circle" alt="sports injury" style="margin-left: 100px;">
                <h3 style="text-align: center;">Sports Injury & Muscular Pain</h3>
                <p style="text-align: left;margin-left: 20px;">Physical Exertion can lead to muscle pain. Don’t neglect the symptoms and visit our Sports Rehabilitation Center</p>
                <button style="margin-left: 90px;" type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">REQUEST A CALLBACK</button>
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel" style="margin-left:100px;">REQUEST A CALLBACK</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="thanks.php" method="POST" style="margin-top: 60px;">
  <div class="mb-3">
    <label for="name" class="form-label">Name</label>
    <input type="name" class="form-control" id="name" name="name" aria-describedby="name" required>
  </div>
  <div class="mb-3">
    <label for="email" class="form-label">Email</label>
    <input type="email" class="form-control" id="email" name="email" aria-describedby="email" required>
  </div>
  <div class="mb-3">
    <label for="phone" class="form-label">Phone</label>
    <input type="number" class="form-control" id="phone" name="phone" aria-describedby="phone" required>
  </div>
  <div class="mb-3">
    <label for="message" class="form-label">Message</label>
    <input type="text" class="form-control" id="message" name="message" aria-describedby="message" required>
  </div>
  <button type="submit" class="btn btn-primary" name="submit" style="margin-left: 225px;">Submit</button>
</form>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
            </div>
            <div class="col-sm-4" style="background-color: orange;">
                <img src="images/slipdisc.jpeg" class="img-circle" alt="" style="margin-left: 100px;">
                <h3 style="text-align: center;">Slip Disc & Cervical Spine</h3>
                <p style="text-align: left;margin-left: 40px;">Suffering from slip disc? We are trained and experienced doctors specialising in slip disc treatments.</p>
                <!-- Button trigger modal -->
<button type="button" style="margin-left: 90px;" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">REQUEST A CALLBACK</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel" style="margin-left: 100px;">REQUEST A CALLBACK</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="thanks.php" method="POST" style="margin-top: 60px;">
  <div class="mb-3">
    <label for="name" class="form-label">Name</label>
    <input type="name" class="form-control" id="name" name="name" aria-describedby="name" required>
  </div>
  <div class="mb-3">
    <label for="email" class="form-label">Email</label>
    <input type="email" class="form-control" id="email" name="email" aria-describedby="email" required>
  </div>
  <div class="mb-3">
    <label for="phone" class="form-label">Phone</label>
    <input type="number" class="form-control" id="phone" name="phone" aria-describedby="phone" required>
  </div>
  <div class="mb-3">
    <label for="message" class="form-label">Message</label>
    <input type="text" class="form-control" id="message" name="message" aria-describedby="message" required>
  </div>
  <button type="submit" class="btn btn-primary" name="submit" style="margin-left: 225px;">Submit</button>
</form>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
            </div>
            <div class="col-sm-4" style="background-color: orange;">
                <img src="images/jointpain.webp" class="img-circle" alt="" style="margin-left: 100px;">
                <h3 style="text-align: center;">Joint Pain</h3>
                <p style="text-align: left;margin-left: 20px;">Osteoarthritis, rheumatoid arthritis, bursitis, gout, strains or sprain could be the reason. We can help.</p>
                <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" style="margin-left: 90px;">REQUEST A CALLBACK</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
            </div>
        </div>
    </div>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-sm-4" style="background-color: orange;padding:15px;">
                <img src="images/chiropracticdoctors.jpeg" class="img-circle" alt="" style="margin-left: 100px;">
                <h3 style="text-align: center;">Chiropractic Doctors</h3>
                <p style="text-align: left;margin-left: 20px;">Get healed up by using hands on spinal manipulation which is the best alternative to surgery and medication.</p>
                <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" style="margin-left: 90px;">REQUEST A CALLBACK</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
            </div>
            <div class="col-sm-4" style="background-color: orange;">
        <img src="images/paralysis.webp" class="img-circle" alt="" style="margin-left: 100px;">
        <h3 style="text-align: center;">Paralysis</h3>
        <p style="text-align: left;margin-left: 40px;">Paralysis requires accurate treatment and Physiotherapy to overcome the limitations and for better recovery.</p>
        <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" style="margin-left: 90px;">REQUEST A CALLBACK</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
    </div>
    <div class="col-sm-4" style="background-color: orange;">
        <img src="images/neckpain.jpeg" class="img-circle" alt="" style="margin-left: 100px;">
        <h3 style="text-align: center;">Neck Pain</h3>
        <p style="text-align: left;margin-left: 20px;">Pain in the neck and shoulder that varies in intensity, and may feel achy or like an electric shock from the neck to the arm.</p>
        <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" style="margin-left: 90px;">REQUEST A CALLBACK</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
    </div>
        </div>
    </div>
    <br>
    <h2 style="margin-left: 200px;color:orange;font-size:40px;" id="appointment">PATIENT FEEDBACK</h2>
    <hr>
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
            <video width="400" height="70%" controls style="margin-top: 73px;">
  <source src="images/Patient-Feedback-Elbow-Pain-Muscle-Stiffness-Shoulder-PainTightness-Pain-Relief-@MY-Physio.mp4" type="video/mp4">
</video>
            </div>
            <div class="col-sm-6" style="margin-top: 115px;">
            <form action="thanks.php" method="POST" style="margin-top: 60px;">
  <div class="mb-3">
    <label for="name" class="form-label">Name</label>
    <input type="name" class="form-control" id="name" name="name" aria-describedby="name" required>
  </div>
  <div class="mb-3">
    <label for="email" class="form-label">Email</label>
    <input type="email" class="form-control" id="email" name="email" aria-describedby="email" required>
  </div>
  <div class="mb-3">
    <label for="phone" class="form-label">Phone</label>
    <input type="number" class="form-control" id="phone" name="phone" aria-describedby="phone" required>
  </div>
  <div class="mb-3">
    <label for="message" class="form-label">Message</label>
    <input type="text" class="form-control" id="message" name="message" aria-describedby="message" required>
  </div>
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>
            </div>
        </div>
    </div>
    <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);margin-top:-53px;">
        © 2022 Copyright:
        <a class="text-reset fw-bold" href="index.php">MyPhysio.com</a>
    </div>
</body>

</html>