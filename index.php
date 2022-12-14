<?php include_once('connection.php'); ?>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Registration Form</title>
  <!-- ===CDN link for bootsrep === -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" />
  <!-- ===font link=== -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@700&display=swap" rel="stylesheet" />
  <!-- ===Custom CSS=== -->
  <link rel="stylesheet" href="style.css" />
</head>

<body>
  <!-- <h1 class="text-center bg-dark text-light">Student Details</h1> -->
  <div class="Container mt-5">
    <div class="row">
      <div class="col-2"></div>
      <div class="col-8 box">
        <h3 class="mb-3 text-center"><u>Registration Form</u></h3>

        <form action="" method="POST" enctype="multipart/form-data">
          <div class="mb-3">
            <div class="row">
              <div class="col-6">
                <h6 for="fname" class="form-label">FIRST NAME:</h6>
                <input type="text" class="form-control" id="fname" name="fname" />
              </div>
              <div class="col-6">
                <h6 for="lname" class="form-label">LAST NAME:</h6>
                <input type="text" name="lname" id="lname" class="form-control" />
              </div>
            </div>
          </div>
          <div class="mb-3">
            <div class="row">
              <div class="col-6">
                <h6 for="bithday" class="form-label">BIRTHDAY:</h6>
                <input type="date" class="form-control" id="bithday" name="bithday" />
              </div>
              <div class="col-6">
                <h6 class="mb-2 pb-1">Gender:</h6>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="gender" id="female" value="female" />
                  <label class="form-check-label" for="female">Female</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="gender" id="male" value="male" />
                  <label class="form-check-label" for="male">Male</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="gender" id="other" value="other" />
                  <label class="form-check-label" for="other">Other</label>
                </div>
              </div>
            </div>
          </div>
          <div class="mb-3">
            <div class="row">
              <div class="col-6">
                <h6 for="email" class="form-label">
                  EMAIL: <span class="text-secondary">(example@gmail.com)</span>
                </h6>
                <input type="email" name="email" id="email" class="form-control" />
              </div>
              <div class="col-6">
                <h6 for="mobile" class="form-label">MOBILE NO.:</h6>
                <input type="number" name="mobile" id="mobile" class="form-control" />
              </div>
            </div>
          </div>
          <div class="mb-3">
            <h6 for="subject" class="form-label">SELECT SUBJECT</h6>
            <select class="form-control" name="subject">
              <option value="not selected" disabled>Choose option</option>
              <option value="subjeect 1">Subject 1</option>
              <option value="subject 2">Subject 2</option>
              <option value="subject 3">Subject 3</option>
            </select>
          </div>
          <div class="mb-3">
                        <h6 for="profile" class="form=label">PROFILE</h6>
                        <input type="file" name="profile" id="profile" class="form-control">
                    </div>
          <div class="text-center">
            <button type="submit" class="btn mybtn me-5" name="submit">
              Submit
            </button>
            <button type="submit" class="btn btn-secondary">Reset</button>
          </div>
        </form>
        <!-- <div class="alert alert-primary mt-3" role="alert">
                    <h6 class="text-center" id="msg"> Data inserted success </h6>
                </div> -->
      </div>
      <div class="col-2"></div>
    </div>
  </div>

  <!-- ===JS CDN link=== -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
<?php
if(isset($_POST['submit']))
{
    //............
    $today = date("Ymd");
    $rand = mt_rand(1000, 9999);
    $unique = $today . $rand;
    //...........
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $birthday = date('y-m-d', strtotime($_POST['bithday'])); //to convet date formet to match withthe MYSQL server date formet.
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $subject = $_POST['subject'];
    //image upload to my sql server using php.
    $filename = $_FILES["profile"]["name"];
    $tempname = $_FILES["profile"]["tmp_name"];
    $profile = "images/".$filename;
    move_uploaded_file($tempname, $profile);


    $query = "INSERT INTO `form` (`r_no`,`fname`, `lname`, `birthday`, `gender`, `email`, `mobile`, `subject`, `profile`) VALUES ('$unique','$fname', '$lname', '$birthday', '$gender', '$email', '$mobile', '$subject','$profile')";
    $data = mysqli_query($conn, $query);
    if($data)
    {
      ?>
      <script>
        window.alert('Data inserted success');
        window.location="table.php";
      </script>
      <?php
    }
    else
    {
      ?>
      <script>
        window.alert(' Data not inserted !! ');
      </script>
      <?php
    }
}
?>