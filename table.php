<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Display</title>
  <!-- ===CDN link for bootsrep === -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" />
  <!-- ===font link=== -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@700&display=swap" rel="stylesheet" />
  <!-- font awsome cdn link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />
  <!-- ===Custom CSS=== -->
  <link rel="stylesheet" href="style.css" />
</head>

<body>
  <div class="container box mt-5">
    <h3 class="mb-3 text-center"><a href="index.php"><u>Displaying All Records</u></a></h3>
    <table class="table align-middle mb-0  bg-light">
      <thead class="bg-secondary">
        <tr>
          <th>Profile</th>
          <th>Registration No.</th>
          <th>Name</th>
          <th>Birthday</th>
          <th>Gender</th>
          <th>Email</th>
          <th>Mobile No.</th>
          <th>Subject</th>
          <th colspan="3">Action Buttons</th>
        </tr>
      </thead>
      <tbody>
        <?php
        include_once "connection.php";
        $query = "SELECT * FROM `form`";
        $data = mysqli_query($conn, $query);
        $totle = mysqli_num_rows($data);
        //echo $totle;
        // $fname = $result['fname'];
        // $lname = $result['lname'];
        // $name = $fname." ".$lname;
        // $birthday = $result['birthday'];
        // $gender = $result['gender'];
        // $email = $result['email'];
        // $mobile = $result['mobile'];
        // $subject = $result['subject'];
        // $profile = $result['profile'];
        if ($totle != 0) {
          while ($result = mysqli_fetch_array($data)) {
        ?>
        <tr>
          <td><img src="<?php echo $result['profile'] ?>" alt="profile" style="width: 45px; height: 45px" /></td>
          <td>
            <p class="fw-normal mb-1"><?php echo $result['r_no']; ?></p>
          </td>
          <td>
            <p class="fw-normal mb-1">
              <?php echo $result['fname'] . " " . $result['lname']; ?>
            </p>
          </td>
          <td>
            <p class="fw-normal mb-1">
              <?php echo $result['birthday'] ?>
            </p>
          </td>
          <td>
            <p class="fw-normal mb-1">
              <?php echo $result['gender'] ?>
            </p>
          </td>
          <td>
            <p class="fw-normal mb-1">
              <?php echo $result['email'] ?>
            </p>
          </td>
          <td>
            <p class="fw-normal mb-1">
              <?php echo $result['mobile'] ?>
            </p>
          </td>
          <td>
            <p class="fw-normal mb-1">
              <?php echo $result['subject'] ?>
            </p>
          </td>
          <td>
            <a href="#" class="btn mb-1 mybtn">Edit <i class="fa-solid fa-pen-to-square"></i></a>
            <a href="delete.php?id=$result[r_no]" class="btn mb-1 btn-danger"><i class="fa-solid fa-trash"></i></a>
          </td>
        </tr>
        <?php
          }
        ?>

        <?php
        } else {
        ?>
        <script>
          window.alert('No Data Available\nPlease insert data');
          window.location = "index.php";
        </script>
        <?php
        }
        ?>


      </tbody>
    </table>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>



  <!-- Modal -->
  <div class="modal fade" id="deletemodel" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered btn-danger">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          ...
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>
</body>

</html>