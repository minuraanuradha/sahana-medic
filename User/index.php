<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="./css/style.css">
  <link rel="stylesheet" href="./Chatbot2/style.css">

  <link rel="icon" type="image/x-icon" href="./Assets/Logo03.png">

  <script src="./Chatbot2/script.js" defer></script>

  <title>index</title>
</head>

<body>

  <div class="container-fluid  home">
    <!--Nav-->
    <div class="col-12 ">
      <?php
      include "nav.php";
      ?>
    </div>

    <!--Page Contents-->
    <div class="row ">
      <div class="container ">
        <div class="row ">
          <div class="col-12 col-md-12 home_main d-flex ">
            <div class="col-12 col-md-6 set_mini justify-content-center align-iteam-center">
              <h1 class="topic1 text-start">Take Care of your</h1>
              <h1 class="topic2 text-start"> HEALTH </h1>
              <p class="sub_topic text-start">Empowering Health, Enriching Lives</p>
              <div class="row ">
                <button class="btn01" data-bs-toggle="modal" data-bs-target="#appointmentModal" type="submit">Add Appoinments</button>
                <button class="btn01" data-bs-toggle="modal" data-bs-target="#reviewModal" type="button">Add Review</button>

                <div class="modal fade" id="appointmentModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Add Appointment</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>

                      <div class="modal-body">
                        <!-- Appointment form -->
                        <form id="appointmentForm" method="post" action="../Controllers/add_appointment.php">
                          <div class="mb-3">
                            <label for="Patient Name" class="form-label">Patient Name</label>
                            <input type="text" class="form-control" id="patientName" name="patientName" required>
                          </div>
                          <div class="mb-3">
                            <label for="Symptom" class="form-label">Symptom</label>
                            <input type="text" class="form-control" id="Symptom" name="Symptom" required>
                          </div>
                          <div class="mb-3">
                            <label for="Appoinment Date" class="form-label">Appoinment Date</label>
                            <input type="date" class="form-control" id="appoinmentDate" name="appoinmentDate" required>
                          </div>
                          <div class="mb-3">
                            <label for="Appoinment Time" class="form-label">Appoinment Time</label>
                            <input type="time" class="form-control" id="appoinmentTime" name="appoinmentTime" required>
                          </div>
                          <label for="takingMedications" class="form-label">Taking Any Medications Currently?</label>
                          <select class="form-select" id="takingMedications" name="takingMedications" required>
                            <option value="yes">Yes</option>
                            <option value="no" selected>No</option>
                          </select>
                      </div>
                      <div class="mb-3" id="medicationDetails" style="display: none;">
                        <label for="medicationDetails" class="form-label">Medication Details</label>
                        <textarea class="form-control" id="medicationDetails" name="medicationDetails"></textarea>
                      </div>
                      <div class="mb-3">
                        <label for="contactNo" class="form-label">&nbsp;&nbsp; Contact Number</label>
                        <input type="text" class="form-control" id="contactNo" name="contactNo" required>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-success" id="submitAppointment">Save Appointment</button>
                      </div>
                      </form>

                    </div>

                  </div>
                </div>
                <div class="modal fade" id="reviewModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Add Review</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                        <!-- Review Form -->
                        <form id="reviewForm" method="post" action="../Controllers/addReview.php">
                          <div class="mb-3">
                            <label for="reviewName" class="form-label">Name</label>
                            <input type="text" class="form-control" id="reviewName" name="reviewName" required>
                          </div>
                          <div class="mb-3">
                            <label for="reviewMessage" class="form-label">Message</label>
                            <textarea class="form-control" id="reviewMessage" name="reviewMessage" rows="3" required></textarea>
                          </div>
                          <div class="mb-3">
                            <label for="reviewRating" class="form-label">Rating</label>
                            <!-- Star Rating Input -->
                            <div class="rating">
                              <input type="radio" id="star5" name="rating" value="5"><label for="star5" title="5 stars">5 stars</label>
                              <input type="radio" id="star4" name="rating" value="4"><label for="star4" title="4 stars">4 stars</label>
                              <input type="radio" id="star3" name="rating" value="3"><label for="star3" title="3 stars">3 stars</label>
                              <input type="radio" id="star2" name="rating" value="2"><label for="star2" title="2 stars">2 stars</label>
                              <input type="radio" id="star1" name="rating" value="1"><label for="star1" title="1 star">1 star</label>
                            </div>
                          </div>
                          <button type="submit" class="btn btn-success">Submit Review</button>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
  </div>
  </div>


  <!--footer-->
  <div class="col-12 mt-3 "style="background-color:#011a0e">
    <?php
    include "footer.php";
    ?>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

  <script>
    function handleFormSubmission() {
      fetch(document.getElementById('appointmentForm').action, {
          method: 'POST',
          body: new FormData(document.getElementById('appointmentForm')),
        })
        .then(response => {
          if (response.ok) {
            Swal.fire({
              title: 'Success!',
              text: 'Appointment added successfully!',
              icon: 'success',
              confirmButtonText: 'OK'
            }).then(() => {
              $('#appointmentModal').modal('hide');
            });
          } else {
            Swal.fire({
              icon: 'error',
              title: 'Oops...',
              text: 'Something went wrong. Please try again later.',
            });
          }
        })
        .catch(error => {
          Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Something went wrong. Please try again later.',
          });
        });
    }

    function validateForm() {
      var patientName = document.getElementById('patientName').value;
      var symptom = document.getElementById('Symptom').value;
      var appoinmentDate = document.getElementById('appoinmentDate').value;
      var appoinmentTime = document.getElementById('appoinmentTime').value;
      var contactNo = document.getElementById('contactNo').value;

      if (patientName === '' || symptom === '' || appoinmentDate === '' || appoinmentTime === '' || contactNo === '') {
        Swal.fire({
          icon: 'error',
          title: 'Oops...',
          text: 'Please fill in all the required fields!',
        });

        return false;
      }
      return true;
    }
    // Show/hide medication details textarea based on medication selection
    document.getElementById('takingMedications').addEventListener('change', function() {
      var medicationDetails = document.getElementById('medicationDetails');
      if (this.value === 'yes') {
        medicationDetails.style.display = 'block';
      } else {
        medicationDetails.style.display = 'none';
      }
    });

    document.getElementById('submitAppointment').addEventListener('click', function() {
      // Validate the form
      if (validateForm()) {
        Swal.fire({
          title: 'Are you sure?',
          text: 'Do you want to save this appointment?',
          icon: 'question',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Yes, save it!'
        }).then((result) => {
          if (result.isConfirmed) {
            handleFormSubmission();
          }
        });
      }
    });
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>