<!DOCTYPE html>
<html lang="en">
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
      <link rel="icon" type="image/png" href="../media/logo-colored.png">
      <link rel="stylesheet" href="../css/stylesheet-spec-enroll.css">

      <title>Senior High School Enrollment | San Francisco De Sales</title>
    </head>

    <body>
        <?php include "../includes/nav.php" ?>

        <main>
            <section class="bg-img px-5 py-5 mt-5 mb-5">
            <div class="container">
                <h4 class="fw-reg text-light mt-5">Online Enrollment</h4>
                <h1 class="display-1 fw-bold text-capitalize text-light mb-3">Senior High School</h1>
                <br>
            </div>

            <div class="container form-body p-5">
                <h2 class="fw-bold text-muted">Enrollment Form - SHS</h2>
                <p class="fw-med text-muted">School Year 2023-2024</p>
                <br><br>
                <p class="fw-med text-success">Student Information</p><hr>
                
                <form class="row g-4 fw-med">
                <div class="col-md-6">
                    <label for="input" class="form-label">Last Name</label>
                    <input type="text" class="form-control" id="input">
                </div>
                <div class="col-md-6">
                    <label for="input" class="form-label">First Name</label>
                    <input type="text" class="form-control" id="input">
                </div>
                <div class="col-md-6">
                    <label for="input" class="form-label">Middle Name</label>
                    <input type="text" class="form-control" id="input">
                </div>
                <div class="col-md-6">
                    <label for="inputEmail4" class="form-label">Email</label>
                    <input type="email" class="form-control" id="inputEmail4">
                </div>
                <div class="col-md-3">
                    <label for="inputState" class="form-label">Gender</label>
                    <select id="inputState" class="form-select">
                    <option selected>Select</option>
                    <option>Male</option>
                    <option>Female</option>
                    </select>
                </div>
                <div class="col-md-3">
                    <label for="inputState" class="form-label">Birthdate</label>
                    <input type="date" class="form-control" id="inputState">
                </div>
                <div class="col-md-3">
                    <label for="inputCity" class="form-label">Birthplace</label>
                    <input type="text" class="form-control" id="inputCity">
                </div>
                <div class="col-md-3">
                    <label for="input" class="form-label">Religion</label>
                    <input type="text" class="form-control" id="input">
                </div>
                <div class="col-md-2">
                    <label for="inputState" class="form-label">Grade Level</label>
                    <select id="inputState" class="form-select">
                    <option selected>Select</option>
                    <option>Grade 7</option>
                    <option>Grade 8</option>
                    <option>Grade 9</option>
                    <option>Grade 10</option>
                    </select>
                </div>
                <div class="col-md-2">
                    <label for="inputState" class="form-label">Strand</label>
                    <select id="inputState" class="form-select">
                    <option selected>Select</option>
                    <option>STEM</option>
                    <option>HUMSS</option>
                    <option>ABM</option>
                    <option>GAS</option>
                    </select>
                </div>
                <div class="col-md-2">
                    <label for="input" class="form-label">LRN</label>
                    <input type="text" class="form-control" id="input">
                </div>
                <div class="col-md-2">
                    <label for="inputState" class="form-label">Student Status</label>
                    <select id="inputState" class="form-select">
                    <option selected>Select</option>
                    <option>New Student</option>
                    <option>Old Student</option>
                    </select>
                </div>
                <div class="col-md-2">
                    <label for="input" class="form-label">Last School Attended</label>
                    <input type="text" class="form-control" id="input">
                </div>
                <div class="col-md-2">
                    <label for="inputState" class="form-label">ESC/Voucher Grantee</label>
                    <select id="inputState" class="form-select">
                    <option selected>Select</option>
                    <option>ESC Grantee</option>
                    <option>Voucher</option>
                    <option>None</option>
                    </select>
                </div>
                <div class="col-6">
                    <label for="inputAddress" class="form-label">Home Address (No., Block, Lot, St.)</label>
                    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                </div>
                <div class="col-md-3">
                    <label for="input" class="form-label">Barangay</label>
                    <input type="text" class="form-control" id="input">
                </div>
                <div class="col-md-3">
                    <label for="inputCity" class="form-label">City</label>
                    <input type="text" class="form-control" id="inputCity">
                </div>
                </form>
                
                <br><br>
                <p class="fw-med text-success">Other Information</p><hr>
                <form class="row g-4 fw-med">
                <div class="col-md-6">
                    <label for="input" class="form-label">Mother's Name</label>
                    <input type="text" class="form-control" id="input">
                </div>
                <div class="col-md-3">
                    <label for="input" class="form-label">Mother's Occupation</label>
                    <input type="text" class="form-control" id="input">
                </div>
                <div class="col-md-3">
                    <label for="input" class="form-label">Contact Number</label>
                    <input type="text" class="form-control" id="input">
                </div>
                <div class="col-md-6">
                    <label for="input" class="form-label">Father's Name</label>
                    <input type="text" class="form-control" id="input">
                </div>
                <div class="col-md-3">
                    <label for="input" class="form-label">Father's Occupation</label>
                    <input type="text" class="form-control" id="input">
                </div>
                <div class="col-md-3">
                    <label for="input" class="form-label">Contact Number</label>
                    <input type="text" class="form-control" id="input">
                </div>
                <div class="col-md-6">
                    <label for="input" class="form-label">Guardian's Name</label>
                    <input type="text" class="form-control" id="input">
                </div>
                <div class="col-md-3">
                    <label for="input" class="form-label">Guardian's Occupation</label>
                    <input type="text" class="form-control" id="input">
                </div>
                <div class="col-md-3">
                    <label for="input" class="form-label">Contact Number</label>
                    <input type="text" class="form-control" id="input">
                </div>
                </form>

                <br><br>
                <p class="fw-med text-success">Enrollment Details</p><hr>
                
                <form class="row g-4 fw-med">
                    <div class="col-md-6">
                    <label for="inputState" class="form-label">Mode of Payment</label>
                    <select id="inputState" class="form-select">
                        <option selected>Select</option>
                        <option>Cash</option>
                        <option>Installment</option>
                    </select>
                    </div>
                    <div class="col-md-6">
                    <label for="inputState" class="form-label">Date of Enrollment (Date Today)</label>
                    <input type="date" class="form-control" id="inputState">
                    </div>
                    </form>

                    <br><br><br>
                    <form class="row g-4 fw-med">
                    <div class="col-12">
                        <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="gridCheck">
                        <label class="form-check-label" for="gridCheck">
                            I agree to send these information to SFDSS Admins and Staff for enrollment purposes.
                        </label>
                        </div>
                    </div>
                    
                    <div class="col-12">
                    <a class="btn btn-success px-5 py-2 fs-5 mt-5 fw-med" type="button" href="#">Submit</a>
                    </div>
                </form>
            </section>
        </main>

        <?php include "../includes/footer.php" ?>
    </body>
</html>