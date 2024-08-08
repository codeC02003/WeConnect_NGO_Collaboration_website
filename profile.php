<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <style>
    

.form-container {
  max-width: 500px; 
  margin: 0 auto;
  border: 1px solid #ced4da; 
  border-radius: 10px; 
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  padding: 20px;
  margin-top:100px;
}

.form-control {
  border: 1px solid #ced4da; 
  border-radius: .25rem; 
}

.form-control:focus {
  border-color: #569bef; 
  outline: 0; 
  box-shadow: 0 0 0 0.25rem rgba(86, 155, 239, 0.25);
}

.btn-primary {
  background-color: #569bef;
  border-color: #569bef; 
}

.btn-primary:hover {
  background-color: #ffffff; 
  color: #000000;
}

.btn-primary:focus {
  box-shadow: 0 0 0 0.25rem rgba(86, 155, 239, 0.5); /* Add box shadow on button focus */
}


.section6-tittle {
  font-size: 38px;
  font-weight: bold;
  margin-top: 69px;
  margin-left: 96px;
}

.section9 {
  background-color: #000;
  padding-top: 100px;
  padding-bottom: 50px;
}

.section9-content h2 {
  font-size: 38px;
  font-weight: bold;
  margin-top: 69px;
  margin-left: 96px;
}

.section9-content p {
  font-size: 16px;
  color: #9a9191;
}

.section9-social-icons {
  margin-top: 20px;
}

.section9-social-icons a {
  text-decoration: none;
  color: white;
  margin-right: 10px;
}

.section9-social-icons a:hover {
  text-decoration: underline;
}

.section9-links h5 {
  color: white;
  font-weight: lighter;
}

.section9-links ul {
  list-style: none;
  padding: 0;
}

.section9-links ul li {
  margin-bottom: 10px;
}

.section9-links ul li a {
  text-decoration: none;
  color: white;
}

.section9-links ul li a:hover {
  text-decoration: underline;
}

.section9-latest-news h5 {
  color: white;
  font-weight: lighter;
}

.section9-latest-news ul {
  list-style: none;
  padding: 0;
}

.section9-latest-news ul li {
  margin-bottom: 10px;
}

.section9-latest-news ul li a {
  text-decoration: none;
  color: white;
}

.section9-latest-news ul li a:hover {
  text-decoration: underline;
}

.section9-latest-news .section9-img1-date {
  color: #569bef;
  font-size: 14px;
}

.section9-contact h5 {
  color: white;
  font-weight: lighter;
}

.section9-contact p {
  font-size: 16px;
  color: white;
  margin-bottom: 10px;
}

.section9-contact form {
  margin-top: 20px;
}

.section9-contact .input-group {
  width: 100%;
  max-width: 300px;
}

.section9-contact .form-control {
  border-radius: 50px;
}

.section9-contact .btn {
  border-radius: 50px;
}

</style>
</head>
<body>
<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "charity_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo '<script>alert("Changes saved successfully!");</script>';
}

$sql = "SELECT id, email, phone, address, website, focus_areas, geographical_scope, collaboration_interests, key_achievements, partnerships, created_at FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo '<div class="form-container">';
        echo '<form action="profile.php" method="post">';
        echo '<input type="hidden" name="user_id" value="' . $row['id'] . '">';

        echo '<div class="mb-3">';
        echo '<label for="phone" class="form-label">Phone Number</label>';
        echo '<input type="text" class="form-control" id="phone" name="phone" value="' . $row['phone'] . '" required>';
        echo '</div>';

        echo '<div class="mb-3">';
        echo '<label for="address" class="form-label">Address</label>';
        echo '<input type="text" class="form-control" id="address" name="address" value="' . $row['address'] . '" required>';
        echo '</div>';

        echo '<div class="mb-3">';
        echo '<label for="website" class="form-label">Website</label>';
        echo '<input type="text" class="form-control" id="website" name="website" value="' . $row['website'] . '">';
        echo '</div>';

        echo '<div class="mb-3">';
        echo '<label for="focus_areas" class="form-label">Focus Areas</label>';
        echo '<input type="text" class="form-control" id="focus_areas" name="focus_areas" value="' . $row['focus_areas'] . '">';
        echo '</div>';

        echo '<div class="mb-3">';
        echo '<label for="geographical_scope" class="form-label">Geographical Scope</label>';
        echo '<input type="text" class="form-control" id="geographical_scope" name="geographical_scope" value="' . $row['geographical_scope'] . '">';
        echo '</div>';

        echo '<div class="mb-3">';
        echo '<label for="collaboration_interests" class="form-label">Collaboration Interests</label>';
        echo '<input type="text" class="form-control" id="collaboration_interests" name="collaboration_interests" value="' . $row['collaboration_interests'] . '">';
        echo '</div>';

        echo '<div class="mb-3">';
        echo '<label for="key_achievements" class="form-label">Key Achievements</label>';
        echo '<input type="text" class="form-control" id="key_achievements" name="key_achievements" value="' . $row['key_achievements'] . '">';
        echo '</div>';

        echo '<div class="mb-3">';
        echo '<label for="partnerships" class="form-label">Partnerships</label>';
        echo '<input type="text" class="form-control" id="partnerships" name="partnerships" value="' . $row['partnerships'] . '">';
        echo '</div>';

        echo '<div class="mb-3">';
        echo '<label for="created_at" class="form-label">Created At</label>';
        echo '<input type="text" class="form-control" id="created_at" name="created_at" value="' . $row['created_at'] . '" disabled>';
        echo '</div>';

        echo '<button type="submit" class="btn btn-primary">Save Changes</button>';
        echo '</form>';
        echo '</div>';
    }
} else {
    echo "No communities found.";
}

// Close connection
$conn->close();
?>

<br/><br/> <br/>
<br/><br/> <br/>

<div class="text-center">
    <form action="index.php" method="post">
        <button type="submit" class="btn btn-primary">LOGOUT</button>
    </form>
</div>

<br/><br/> <br/>
    <section class="section9">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="section9-content">
              <h2 class="section9-tittle">The Charity</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris tempus vestibulum mauris quis aliquam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris tempus vestibulum mauris quis aliquam. Lorem ipsum dolo</p>
              <div class="section9-social-icons">
                <a href="#"><i class="fa fa-instagram"></i></a>
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-whatsapp"></i></a>
              </div>
            </div>
          </div>
          <div class="col-md-2">
            <div class="section9-links">
              <h5>Useful Links</h5>
              <ul>
                <li><a href="#">Privacy Policy</a></li>
                <li><a href="#">Become a Volunteer</a></li>
                <li><a href="#">Donate</a></li>
                <li><a href="#">Testimonials</a></li> 
                <li><a href="#">Causes</a></li>
                <li><a href="#">Portfolio</a></li>
                <li><a href="#">News</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-4">
            <div class="section9-latest-news">
              <h5>Latest News</h5>
              <ul>
                <li>
                  <a href="#">A new cause to help</a>
                  <span class="section9-img1-date">March 12, 2018</span>
                </li>
                <li>
                  <a href="#">We love to help people</a>
                  <span class="section9-img1-date">March 12, 2018</span>
                </li>
                <li>
                  <a href="#">The new ideas for helping</a>
                  <span class="section9-img1-date">March 12, 2018</span>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-md-12">
          </div>
        </div>
      </div>
    </section> 
  </div>  
  <p class="bg-dark " style="color:#9a9191; text-align: center; padding: 10px;" >Copyright ©2024 All rights reserved</p>

</body>
</html>
