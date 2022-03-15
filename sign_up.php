

<?php
$conn = mysqli_connect("localhost", "root", "", "vizhithezhuthamilzha");
if($conn) {

echo "";
}

if(isset($_POST['uploadfilesub'])) {



$user_name = $_POST['user_name'];  
$user_dob = $_POST['user_dob'];
$user_email = $_POST['user_email'];
$user_mob_no = $_POST['user_mob_no'];

$salt = "hasfjlwehnjewihhweig53454##^^%&^^%^%";
$user_password = $_POST['user_password'].$salt;
$user_password = sha1($user_password);
$filename = $_FILES['user_img']['name'];
$filetmpname = $_FILES['user_img']['tmp_name'];


//folder where images will be uploaded
$folder = 'user_images/';
//function for saving the uploaded images in a specific folder
move_uploaded_file($filetmpname, $folder.$filename);


//Protection From Sql Injection
$user_name = stripcslashes($user_name);
$user_dob = stripcslashes($user_dob);
$user_email = stripcslashes($user_email);
$user_mob_no = stripcslashes($user_mob_no);
$user_password = stripcslashes($user_password);
 

 $user_name = mysqli_real_escape_string($conn, $user_name);
  $user_dob = mysqli_real_escape_string($conn, $user_dob);
   $user_email = mysqli_real_escape_string($conn, $user_email);
    $user_mob_no = mysqli_real_escape_string($conn, $user_mob_no);
    $user_password = mysqli_real_escape_string($conn, $user_password);

    
  if(mysqli_num_rows(mysqli_query($conn,"SELECT * FROM users WHERE user_email='{$user_email}'"))>0)
  {
    echo "<script>alert('{$user_email} - Sorry This E-mail Id has been Already Registered, Please Try Forgot Password For Generating New Password');</script>";
  }   
  else
  { 
//inserting image details (ie image name) in the database
$sql = "INSERT INTO `users` (user_name,user_dob,user_email,user_mob_no,user_img,user_password)  VALUES ('$user_name','$user_dob','$user_email','$user_mob_no','$filename','$user_password')";
$qry = mysqli_query($conn,  $sql);
if( $qry) 
{
echo "<script>alert('You are Successfully Signed Up with us... Thanks for ur Support - We protect ur data with high security  - #Vizhithezhuthamilzha');</script>"; 
}
else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
}
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sign Up - Vizhithezhuthamilzha</title>
    <link rel="icon" href="vizhithezhuthamilzha_favi_icon.png">
    <link rel="stylesheet" href="glslf.css" />
  </head>

  <body>
    <section>
      <div class="box">
        <div class="square" style="--i: 0"></div>
        <div class="square" style="--i: 1"></div>
        <div class="square" style="--i: 2"></div>
        <div class="square" style="--i: 3"></div>
        <div class="square" style="--i: 4"></div>
        <div class="logi-container">
          <div class="form">
            <h3>Sign Up</h3>
            <form action="" method="post" enctype="multipart/form-data" onSubmit="return valid();">
              <div class="inputbox">
                <input type="text" placeholder="Username" name="user_name" required/>
              </div>
              <br />
              <b style="color: white; font-family: Poppins; font-size: 1em">
                <label for="dob">Date of Birth</label>
              </b>
              <div class="inputbox">
                <input
                  type="date"
                  placeholder="Date of Birth"
                  name="user_dob"
                  required
                />
              </div>

              <div class="inputbox">
                <input type="email" placeholder="E-Mail" name="user_email" required/>
              </div>

              <div class="inputbox">
                <input type="text" placeholder="Mobile No" name="user_mob_no"  required/>
              </div>

              <br />
              <b style="color: white; font-family: Poppins; font-size: 1em">
                <label for="user_img">Upload Your Image</label>
              </b>

              <div class="inputbox">
                <input type="file" placeholder="Your Image" id="pro_img" name="user_img"  onchange="return fileValidation()" accept=".jpg, .jpeg, .png, .gif" required/>
              </div>

                <br>




              <div class="inputbox">
                <input type="password" placeholder="password" name="user_password"  id="psw"  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 6 or more characters" required/>
                                      </div>

              <div class="inputbox">
                <input type="submit" value="register" name="uploadfilesub" />
              </div>

              <p class="forget">Forgot password ? <a href="forgot-password.php">Click Here</a></p>

              <p class="forget">
                Already have an account ? <a href="Login_.php">Login</a>
              </p>
            </form>
          </div>
        </div>
      </div>
    </section>


    <script>

              var myInput = document.getElementById("psw");
var letter = document.getElementById("letter");
var capital = document.getElementById("capital");
var number = document.getElementById("number");
var length = document.getElementById("length");

// When the user clicks on the password field, show the message box
myInput.onfocus = function() {
  document.getElementById("message").style.display = "block";
}

// When the user clicks outside of the password field, hide the message box
myInput.onblur = function() {
  document.getElementById("message").style.display = "none";
}

// When the user starts to type something inside the password field
myInput.onkeyup = function() {
  // Validate lowercase letters
  var lowerCaseLetters = /[a-z]/g;
  if(myInput.value.match(lowerCaseLetters)) {  
    letter.classList.remove("invalid");
    letter.classList.add("valid");
  } else {
    letter.classList.remove("valid");
    letter.classList.add("invalid");
  }
  
  // Validate capital letters
  var upperCaseLetters = /[A-Z]/g;
  if(myInput.value.match(upperCaseLetters)) {  
    capital.classList.remove("invalid");
    capital.classList.add("valid");
  } else {
    capital.classList.remove("valid");
    capital.classList.add("invalid");
  }

  // Validate numbers
  var numbers = /[0-9]/g;
  if(myInput.value.match(numbers)) {  
    number.classList.remove("invalid");
    number.classList.add("valid");
  } else {
    number.classList.remove("valid");
    number.classList.add("invalid");
  }
  
  // Validate length
  if(myInput.value.length >= 6) {
    length.classList.remove("invalid");
    length.classList.add("valid");
  } else {
    length.classList.remove("valid");
    length.classList.add("invalid");
  }
}

//image type validation and size validation

function fileValidation() {
            var fileInput = 
                document.getElementById('pro_img');
              
            var filePath = fileInput.value;
          
            // Allowing file type
            var allowedExtensions = 
/(\.png|\.jpg|\.jpeg|\.gif)$/i;
              
            if (!allowedExtensions.exec(filePath)) {
                alert('Invalid file type For user image we allow only .png , .jpg , .jpeg , .gif  - formats ');
                fileInput.value = '';
                return false;
            } 
       

var uploadField = document.getElementById("pro_img");

uploadField.onchange = function() {
    if(this.files[0].size > 1097152){
       alert("File is too big!");
       this.value = "";
    };
};

 }
    </script>
  </body>
</html>


