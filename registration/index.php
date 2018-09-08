<?php
// include('connsp.php');
// session_start();
// if(isset($_REQUEST['submit']))
// {

//   $TeamName = $_REQUEST['TeamName'];
// 	$Name = $_REQUEST['Name'];
// 	$Mail=$_REQUEST['Mail'];
//  	$City = $_REQUEST['City']; 	
//  	$College = $_REQUEST['College'];
//  	$Contact= $_REQUEST['Contact']; 	
//  	$GitHub = $_REQUEST['GitHub'];
//     $stack = $_REQUEST['stack'];
//     $project = $_REQUEST['project'];
//     $past = $_REQUEST['past'];
//     $theme=$_REQUEST['theme'];
// 	$gender=$_REQUEST['gender'];
    
	       
	
// 		$ins="insert into data( 
// 			TeamName,
// 			Name,
// 			Mail,
// 			City, 	
// 			College,
// 			Contact,	
// 			GitHub,
// 			stack,
// 			project,
// 			past,
// 			theme,
// 			gender

// 		) values ('$TeamName','$Name','$Mail','$City','$College','$Contact','$GitHub','$stack','$project','$past','$theme','$gender')";

// 		//echo $ins;
		
// 		$res=$connsp->query($ins);
				 


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Sign Up Form</title>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  <link rel='stylesheet' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>

  <link rel="stylesheet" href="css/style.css">


</head>

<body>


  <div class="container">
  <h4>Register</h4>

    <div class="input-group">
      <input type="text" placeholder="Team Name" name="teamname" required />
    </div>
    <form>
      <div class="row">
        <h4>Participant 1</h4>

        <div class="input-group">
          <input type="text" placeholder="Full Name" name="name-1" required />

        </div>
        <div class="input-group ">
          <input type="email" placeholder="Email" name="email-1" required />

        </div>
        <div class="input-group ">
          <input type="text" placeholder="City" name="city-1" required />

        </div>
        <div class="input-group ">
          <input type="text" placeholder="College" name="college-1" required />

        </div>
        <div class="input-group">
          <input type="number" placeholder="Contact" name="contact-1" required />

        </div>
        <div class="input-group ">
          <input type="text" placeholder="Github Profile Link" name="github-1" required />

        </div>
        <div class="input-group ">
          <input type="text" placeholder="Stackoverflow Profile Link (If any)" name="stack-1" />

        </div>

      </div>

      <div class="row">

        <div class="col-half">
          <h4>Gender</h4>
          <div class="input-group">
            <input type="radio" name="gender-1" value="male" id="gender-male-1" required />
            <label for="gender-male-1">Male</label>
            <input type="radio" name="gender-1" value="female" id="gender-female-1" />
            <label for="gender-female-1">Female</label>
          </div>
        </div>

      </div>


      <div class="row">
        <h4>Participant 2</h4>

        <div class="input-group">
          <input type="text" placeholder="Full Name of participant 2" name="name-2" required />
        </div>

        <div class="input-group ">
          <input type="email" placeholder="Email" name="mail-2" required />
        </div>

        <div class="input-group ">
          <input type="text" placeholder="City" name="city-2" required />
        </div>

        <div class="input-group ">
          <input type="text" placeholder="College" name="college-2" required />
        </div>

        <div class="input-group">
          <input type="number" placeholder="Contact" name="contact-2" required />
        </div>

        <div class="input-group ">
          <input type="text" placeholder="Github Profile Link" name="github-2" required />

        </div>

        <div class="input-group ">
          <input type="text" placeholder="Stackoverflow Profile Link (If any)" name="stack-2" />
        </div>
      </div>

      <div class="row">

        <div class="col-half">
          <h4>Gender</h4>
          <div class="input-group">
            <input type="radio" name="gender-2" value="male" id="gender-male-2" required />
            <label for="gender-male-2">Male</label>
            <input type="radio" name="gender-2" value="female" id="gender-female-2" />
            <label for="gender-female-2">Female</label>
          </div>
        </div>

      </div>
      <div class="row">
        <h4>Participant 3</h4>

        <div class="input-group">
          <input type="text" placeholder="Full Name of participant 3" name="name-3" required />
        </div>

        <div class="input-group ">
          <input type="email" placeholder="Email" name="mail-3" required />
        </div>

        <div class="input-group ">
          <input type="text" placeholder="City" name="city-3" required />
        </div>

        <div class="input-group ">
          <input type="text" placeholder="College" name="college-3" required />
        </div>

        <div class="input-group">
          <input type="number" placeholder="Contact" name="contact-3" required />
        </div>

        <div class="input-group ">
          <input type="text" placeholder="Github Profile Link" name="github-3" required />

        </div>

        <div class="input-group ">
          <input type="text" placeholder="Stackoverflow Profile Link (If any)" name="stack-3" />
        </div>
      </div>

      <div class="row">

        <div class="col-half">
          <h4>Gender</h4>
          <div class="input-group">
            <input type="radio" name="gender-3" value="male" id="gender-male-3" required />
            <label for="gender-male-3">Male</label>
            <input type="radio" name="gender-3" value="female" id="gender-female-3" />
            <label for="gender-female-3">Female</label>
          </div>
        </div>

      </div>


      <div class="row">
        <h4>Participant 4</h4>

        <div class="input-group">
          <input type="text" placeholder="Full Name of participant 4" name="name-4" />
        </div>

        <div class="input-group ">
          <input type="email" placeholder="Email" name="mail-4" />
        </div>

        <div class="input-group ">
          <input type="text" placeholder="City" name="city-4" />
        </div>

        <div class="input-group ">
          <input type="text" placeholder="College" name="college-4" />
        </div>

        <div class="input-group">
          <input type="number" placeholder="Contact" name="contact-4" />
        </div>

        <div class="input-group ">
          <input type="text" placeholder="Github Profile Link" name="github-4" />

        </div>

        <div class="input-group ">
          <input type="text" placeholder="Stackoverflow Profile Link (If any)" name="stack-4" />
        </div>
      </div>

      <div class="row">

        <div class="col-half">
          <h4>Gender</h4>
          <div class="input-group">
            <input type="radio" name="gender-4" value="male" id="gender-male-4" checked />
            <label for="gender-male-4">Male</label>
            <input type="radio" name="gender-4" value="female" id="gender-female-4" />
            <label for="gender-female-4">Female</label>
          </div>
        </div>

      </div>
      <div class="row">
        <h5>Participant 5</h5>

        <div class="input-group">
          <input type="text" placeholder="Full Name of participant 5" name="name-5" />
        </div>

        <div class="input-group ">
          <input type="email" placeholder="Email" name="mail-5" />
        </div>

        <div class="input-group ">
          <input type="text" placeholder="City" name="city-5" />
        </div>

        <div class="input-group ">
          <input type="text" placeholder="College" name="college-5" />
        </div>

        <div class="input-group">
          <input type="number" placeholder="Contact" name="contact-5" />
        </div>

        <div class="input-group ">
          <input type="text" placeholder="Github Profile Link" name="github-5" />

        </div>

        <div class="input-group ">
          <input type="text" placeholder="Stackoverflow Profile Link (If any)" name="stack-5" />
        </div>
      </div>

      <div class="row">

        <div class="col-half">
          <h5>Gender</h5>
          <div class="input-group">
            <input type="radio" name="gender-5" value="male" id="gender-male-5" />
            <label for="gender-male-5">Male</label>
            <input type="radio" name="gender-5" value="female" id="gender-female-5" />
            <label for="gender-female-5">Female</label>
          </div>
        </div>

      </div>

      <div>
        <h4>Mention past projects (if any)</h4>
        <div class="input-group ">
          <input type="text" placeholder="" name="projects" />

        </div>
      </div>
      <div>

        <h4>Mention Past Experience (if any)</h4>
        <div class="input-group ">
          <input type="text" name="past" />

        </div>
      </div>
      <div>
        <h4>If you are to choose a theme for hackathon, what will you choose and why?</h4>
        <div class="input-group ">
          <input type="text" name="theme" required />
        </div>
      </div>
      <div class="row">
        <input class="btn btn-success" type="submit" name="submit" style="width:30%; height: 45%;" value="submit">
      </div>
    </form>
  </div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.3/jquery.min.js'></script>
  <script src="js/index.js"></script>
</body>

</html>