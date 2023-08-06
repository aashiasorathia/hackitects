<?php include 'main.php';?>

<?php if(!isset($_SESSION['p_id'])) 
    {
     header('location: index.php');
    }
 
    $qValidate = "SELECT * from patient WHERE p_id=".$_SESSION['p_id']."";
    $result = mysqli_query($conn, $qValidate);
    while($row = $result->fetch_assoc()) {
        $firstname=$row['firstname'];
        $lastname=$row['lastname'];
        $uhid=$row['uhid'];
        $mail=$row['mail'];
        $phone=$row['phone'];
        $treat=$row['past_treatment'];
        $relativephone=$row['relative_contact'];
        $relativename=$row['relative_name']; 
        $patientrating=$row['p_scale']; 
        $doctorrating=$row['d_scale'];
        $medication=$row['medication'];
        $medicationtime=$row['medication_time']; 
        $password=$row['pwd']; 
        $suggestion=$row['suggestion'];
        $precaution=$row['precaution'];
        $medication=$row['medication'];  

    }
 
?>


<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">


    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">



    <!-- script -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

    <title>Hackitects</title>
</head>
<style>
    /* *{
      border: 1px solid black;
    } */
    
    body {
        background: none;
    }
    
    a {
        text-decoration: none;
    }
    
    .button-hover:hover {
        background-color: rgb(5, 16, 133);
    }
    
    .homepage-hover:hover {
        background-color: rgba(67, 83, 255, .1);
    }
    
    .hide {
        display: none;
    }
    
    .btn-style {
        border: none;
        height: 100%;
        width: 100%;
        background: none;
        font-weight: bolder;
        font-family: Arial, Helvetica, sans-serif;
    }
    
    .btn-style:hover {
        border-right: 4px solid darkblue;
        background-color: rgb(214, 219, 255);
        transition: background-color 0.3s linear;
        border-radius: 20px;
    }
    /* b0x-4 */
    
    .btn-light-blue {
        background-color: rgb(246, 246, 255);
        border-radius: 10px;
    }
    
    .button {
        width: 60%;
        background: none;
    }
    
    .button>button {
        width: 100%;
        border-radius: 30px;
        border: 3px solid skyblue;
        background-color: navy;
        color: white;
    }
    
    .button>button:hover {
        background-color: white;
        color: navy;
        transition: all 0.2s ease-in;
    }
    
    .slidecontainer {
        width: 90%;
    }
    
    .slider {
        -webkit-appearance: none;
        width: 100%;
        height: 15px;
        border-radius: 5px;
        background: #d3d3d3;
        outline: none;
        opacity: 0.7;
        -webkit-transition: .2s;
        transition: opacity .2s;
    }
    
    .slider:hover {
        opacity: 1;
    }
    
    .slider::-webkit-slider-thumb {
        -webkit-appearance: none;
        appearance: none;
        width: 25px;
        height: 25px;
        border-radius: 50%;
        background: navy;
        cursor: pointer;
    }
    
    .slider::-moz-range-thumb {
        width: 25px;
        height: 25px;
        border-radius: 50%;
        background: navy;
        cursor: pointer;
    }
    
    @media only screen and (max-width: 800px) {
        nav>.container {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
        nav>.container ul {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
    }
</style>

<body>
    <!-- <h1>Hello, world!</h1> -->

    <!-- <nav style="border-bottom: 2px solid blue;">
        <div class="container d-flex justify-content-between align-items-center p-2">
            <div class="navbar-brand">
                <h3><span class="fw-bold">Virtual</span><span class="text-secondary">Health</span><span class="fw-bold">Assistant</span></h3>
            </div>
            <ul class="nav">
                <li class="nav-item">
                    <a class="nav-link m-2" href="#diagnosis">
                        <h5>Diagnosis</h5>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="index.php"><button type="submit" class="btn m-2 homepage-hover" name="homepage">
                <h5>homepage</h5>
              </button> </a>
                </li>
                <li class="nav-item">
                    <a href="logout.php"><button type="submit" class="btn btn-primary m-2 button-hover" name="logout">
                <h5>Logout</h5>
              </button> </a>
                </li>
            </ul>
        </div>
        </div>
    </nav> -->

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top">
  <div style="padding-left: 250px"><a class="navbar-brand" href="#"><img src="pngwing.com.png" width="90px" alt=""/>&nbsp MaternaSage</a></div>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <style >
    .bg-primary {
    background: -webkit-linear-gradient(left, #0B132B, #0f39b7);
}
.list-group-item.active {
    z-index: 2;
    color: #fff;
    background-color: #342ac1;
    border-color: #007bff;
}
.text-primary {
    color: #342ac1!important;
}

.btn-primary{
  background-color: #3c50c1;
  border-color: #3c50c1;
}
  </style>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
     <ul class="navbar-nav mr-auto">
       <li class="nav-item">
        <a class="nav-link" href="logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i>Logout</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="#"></a>
      </li>
    </ul>
  </div>
</nav>

    <section class="mt-5">

        <div class="container-fluid">

            <div class="row">

                <div class="col-md-2 text-dark border-3 border-end border-info" style="margin: 0; padding: 0%;" id="sidebar">
                    <div class="col border-bottom border-2 border-info">
                        <h4 class="p-3 text-center fw-bold">Welcome
                            <?php echo $firstname ?>
                    </div>
                    <div class="col text-dark m-2">
                        <ul style="list-style: none; padding: 0%; margin: 0%;">
                            <li class="d-flex justify-content-center align-items-center ps-3">
                                <button id="Dashboard" class="btn-style p-2 text-start"><i
                        class="fas fa-border-all pe-3"></i>Dashboard</button>
                            </li>
                            <li class="d-flex justify-content-center align-items-center ps-3">
                                <button id="Appointments" class="btn-style p-2 text-start"><i
                        class="fas fa-calendar-check pe-3"></i>Appointment</button>
                            </li>
                            <li class="d-flex justify-content-center align-items-center ps-3">
                                <button id="Doctor" class="btn-style p-2 text-start"><i class="fas fa-question-circle pe-3"></i>Ask
                      Doctor</button>

                            </li>
                            <li class="d-flex justify-content-center align-items-center ps-3">
                                <button id="Rating" class="btn-style p-2 text-start"><i
                        class="fas fa-sliders-h pe-3"></i>Rating</button>

                            </li>
                            <li class="d-flex justify-content-center align-items-center ps-3">
                                <button id="Alerts" class="btn-style p-2 text-start"><i
                        class="fas fa-exclamation-circle pe-3"></i>Profile</button>

                            </li>
                            <li class="d-flex justify-content-center align-items-center ps-3">
                                <button id="Profile" class="btn-style p-2 text-start"><i
                        class="fas fa-user-circle pe-3"></i>Alerts</button>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col me-2 ms-2">

                    <div class="container-fluid" style="padding: 0%; margin: 0%; background-color: white;">

                        <!--box-1-->
                        <div class="col me-2 ms-2" id="box-1">
                            <div class="col" style="display: flex;justify-content: space-around; align-items: baseline;">
                                <h3 class="p-3">Welcome
                                    <?php echo $firstname?> </h3>
                                <button type="submit" class="btn m-3 showprofile text-white" style="background-color: #2922dc;">Profile</button>
                            </div>
                            <div class="w-100"></div>
                            <div class="col border-top border-bottom border-primary text-white">
                                <h4 class="p-2 text-dark text-center">Dashboard</h4>
                            </div>
                            <div class="row p-3" style="display: flex;flex-direction: row;">
                                <div class="col p-2 m-2 border-start border-end border-info" style="background-color: rgb(246, 246, 255);">
                                    <h5 class="p-2 text-dark text-start border-bottom border-primary">Current Appointment</h5>
                                    
                                    <h6 class="p-2">meet link : </h6>
                                    <h6 class="p-2">Latest appointment link comes here</h6>
                                    <h6 class="p-2">Doctor name: </h6>
                                    <h6 class="p-2">Latest appointment doctor comes here</h6>

                                </div>
                                <div class="col p-2 m-2 border-start border-end border-info" style="background-color: rgb(246, 246, 255);">
                                    <h5 class="p-2 text-dark text-start border-bottom border-primary">Ratings</h5>
                                    <h6 class="p-2">Rating by Doctor : <span id="Doctor-rating"><?php echo $doctorrating ?></span></h6>
                                    <h6 class="p-2">Rating by Patient : <span id="Patient-ating"><?php echo $patientrating ?></span></h6>
                                </div>
                                <div class="col p-2 m-2 border-start border-end border-info" style="background-color: rgb(246, 246, 255);">
                                    <h5 class="p-2 text-dark text-start border-bottom border-primary">Queries Answered</h5>
                                    <?php 
                                                    $query4 = "SELECT answer,question,did from query WHERE pid=".$_SESSION['p_id']."";
                                                    $result1 = mysqli_query($conn, $query4);
                                                    if(mysqli_num_rows($result1)>0)
                                                    {                                                        
                                                            while($row1=$result1->fetch_assoc())
                                                            {  $query2=$row1['answer'];
                                                               $que=$row1['question'];
                                                               $doctor=$row1['did'];
                                                               $link1 = "SELECT first_name FROM doctor WHERE d_id=".$doctor."" ;
                                                               $linklist1 = $conn->query($link1);
                                                               if ($linklist1->num_rows > 0)
                                                                {
                                                                    while ($row9 = $linklist1->fetch_assoc())
                                                                                                  
                                                                    {
                                                                      $name2=$row9['first_name'];
                                                                    }
                                                                }

                                                                
                                                                ?>
                                                                
                                                                
                                                                <div class="row zero">
                                                                <div class="col border border-light p-2">
                                                                        <?php echo "Doctor Name"."=".$name2;?>
                                                                        
                                                                    </div>
                                                                    <div class="col border border-light p-2">
                                                                        <?php echo "Question"."=".$que;?>
                                                                        
                                                                    </div>
                                                                    <div class="col border border-light p-2">
                                                                        <?php echo "Answer=".$query2;?>
                                                                        
                                                                    </div>
                                                                </div>
                                                                <?php
                                                            }
                                                    }
                                                    ?>



                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- box-2 -->
                    <div class="col me-2 ms-2 hide" id="box-2">
                        <div class="col border-bottom border-primary" style="display: flex;justify-content: space-around; align-items: baseline;">
                            <h3 class="p-3">Welcome
                                <?php echo $firstname?>
                            </h3>
                            <button type="submit" class="btn btn-primary m-3 showprofile" style="background-color: #2922dc;">Profile</button>
                        </div>
                        <div class="col border-bottom border-primary text-white">
                            <h4 class="p-2 text-dark text-center">Profile</h4>
                        </div>
                        <div class="row m-2 d-flex flex-column" style="background-color: white; font-weight: 500;">
                            <form action="patientlanding.php" id="signupForm" method="post">
                                <?php include 'errors.php'?>
                                <div class="col p-3" style="border-bottom: 2px solid rgb(78, 31, 31);"><label for="" style="width: 20%; text-align: left;">First Name : </label><input type="text" name="firstname" value="<?php echo $firstname;?>" style="width: 80%;"></div>
                                <div class="col p-3" style="border-bottom: 2px solid rgb(78, 31, 31);"><label for="" style="width: 20%; text-align: left;">Last Name : </label><input type="text" name="lastname" value="<?php echo $lastname;?>" style="width: 80%;"></div>
                                <div class="col p-3" style="border-bottom: 2px solid rgb(78, 31, 31);"><label for="" style="width: 20%; text-align: left;">Email : </label><input type="email" name="mail" value="<?php echo $mail;?>" style="width: 80%;"></div>
                                <div class="col p-3" style="border-bottom: 2px solid rgb(78, 31, 31);"><label for="" style="width: 20%; text-align: left;">Phone : </label><input type="Number" name="phone" value="<?php echo $phone;?>" style="width: 80%;"></div>
                                <div class=""><input type="hidden" name="patientid" value="<?php echo $_SESSION['p_id'];?>"></div>
                                <div class="row">
                                    <div class="col p-3" style="border-bottom: 2px solid rgb(78, 31, 31);">
                                        <label for="" style="width: 20%; text-align: left;">Past Diseases : </label>
                                        <select class="select" name="diseases">
                            <option value="Diseases"> Past Diseases</option>
                            <option value="Heart disease">Heart disease</option>
                            <option value="Diabetes">Diabetes</option>
                            <option value="Influenza and pneumonia">Influenza and pneumonia</option>
                            <option value="Kidney disease">Kidney disease</option>
                            <option value="Fever">Fever</option>
                            <option value="Anixety">Anixety</option>
                            <option value="None">None</option>
                          </select>

                                    </div>
                                </div>
                                <div class="col p-3" style="border-bottom: 2px solid rgb(78, 31, 31);"><label for="" style="width: 20%; text-align: left;">UHID Number : </label><input type="number" name="uhid" value="<?php echo $uhid;?>" style="width: 80%;"></div>
                                <div class="col p-3" style="border-bottom: 2px solid rgb(78, 31, 31);"><label for="" style="width: 20%; text-align: left;">password: </label><input type="text" name="password" value="<?php echo $password;?>" style="width: 80%;"></div>
                                <div class="col p-3" style="border-bottom: 2px solid rgb(78, 31, 31);"><label for="" style="width: 20%; text-align: left;">Any Treatment : </label><input type="text" name="treat" value="<?php echo $treat;?>" style="width: 80%;"></div>
                                <div class="col p-3" style="border-bottom: 2px solid rgb(78, 31, 31);"><label for="" style="width: 20%; text-align: left;">Relative name : </label><input type="text" name="relativename" value="<?php echo $relativename;?>" style="width: 80%;"></div>
                                <div class="col p-3" style="border-bottom: 2px solid rgb(78, 31, 31);"><label for="" style="width: 20%; text-align: left;">Relatives Contact : </label><input type="text" name="relativephone" value="<?php echo $relativephone;?>" style="width: 80%;"></div>

                        </div>
                        <button type="submit" name="updatepatient" class="btn btn-primary m-4 text-white" value="updatepatient" style="background-color: navy;">Update</button>
                    </div>

                    <!--box-3-->
                    <div class="col me-2 ms-2 hide" id="box-3">
                        <div class="col border-bottom border-primary" style="display: flex;justify-content: space-around; align-items: baseline;">
                            <h3 class="p-3">Welcome
                                <?php echo $firstname?>
                            </h3>
                            <button type="submit" class="btn btn-primary m-3 showprofile" style="background-color: #2922dc;">Profile</button>
                        </div>
                        <div class="col border-bottom border-primary">
                            <h4 class="p-2 text-dark text-center">Alerts</h4>
                        </div>
                        <div class="row m-2" style="height: auto;background-color: white;">
                            <div class="col m-2">
                                <h5 style="text-align: center; background-color: rgb(19, 15, 126); color: white;" class="pt-2 pb-2">Medication Name</h5>
                            </div>
                            <div class="col m-2">
                                <h5 style="text-align: center; background-color: rgb(19, 15, 126); color: white;" class="pt-2 pb-2">Medication Time</h5>
                            </div>
                            <div class="w-100"></div>
                            <div class="col m-2 border border-2 p-3 border-dark" style="overflow: hidden;">
                                <?php echo $medication?>
                            </div>
                            <div class="col m-2 border border-2 p-3 border-dark" style="overflow: hidden;">
                                <?php echo $medicationtime?>
                            </div>
                            <div class="w-100"></div>
                        </div>
                    </div>

                    <!-- box-4 -->
                    <div class="col me-2 ms-2 hide" id="box-4">

                        <div class="container-fluid" style="margin: 0%; padding: 0%;">

                            <div class="col" style="display: flex;justify-content: space-around; align-items: baseline;">
                                <h3 class="p-3">Welcome
                                    <?php echo $firstname?> </h3>
                                <button type="submit" class="btn m-3  text-white" style="background-color: #2922dc;">Profile</button>
                            </div>

                            <div class="w-100"></div>

                            <div class="col border-top border-bottom border-primary">
                                <h4 class="p-3 text-center">Appointments</h4>
                            </div>

                            <div class="table p-2">
                                <TABLE class="mt-3 border-start border-end border-info "  WIDTH="100%" CELLPADDING="3" CELLSPACING="3" style="background-color: white;">
                                    
                                    <TR class="text-center  " style="background-color: rgb(246, 246, 255);">
                                        <TH class="p-2 border-end" >
                                            <h5>Doctor Name</h5>
                                        </TH>
                                        <TH class="p-2 border-start">
                                            <Link>
                                            <h5>Meet Link</h5>
                                        </TH>
                                    </TR>
                                    <?php
                                                                                        $link = "SELECT link,did FROM appoint WHERE pid=".$_SESSION['p_id']."" ;
                                                                                        $linklist = $conn->query($link);

                                                                                        if ($linklist->num_rows > 0) {
                                                                                            while ($row1 = $linklist->fetch_assoc())
                                                                                            
                                                                                            {
                                                                                               $name1=$row1['link'];
                                                                                               $doctorid=$row1['did'];
                                                                                               $link1 = "SELECT first_name FROM doctor WHERE d_id=".$doctorid."" ;
                                                                                               $linklist1 = $conn->query($link1);
                                                                                               if ($linklist1->num_rows > 0)
                                                                                               {
                                                                                                  while ($row9 = $linklist1->fetch_assoc())
                                                                                                  
                                                                                                  {
                                                                                                    $name2=$row9['first_name'];
                                                                                                  }

                                                                                               
                                                                                               
                                                                                               
                                                                                               ?>
                                                                                                                                                                                                         
                                                                                                          <TR ALIGN="CENTER">
                                                                                                          <TD class="p-2"
                                                                                                                style=" color: black;  background-color: rgb(246, 246, 255);">
                                                                                                                <h6><?php echo "Dr.".$name2 ?> </h6>
                                                                                                            </TD>
                                                                                                            <TD class="p-2"
                                                                                                                style=" color:  black;;background-color: rgb(246, 246, 255);">
                                                                                                                <h6><?php echo $name1?></h6>
                                                                                                            </TD>
                                                                                                            
                                                                                                            

                                                                                                            
                                                                                                                                                                                                                      
                                                                                                                                                                                                                                                                                                                                   
                                                                                                        </TR>
                                                                                            
                                                                                            
                                                                                                     
                                                                                            
                                                                                                        <?php
                                                                                            }
                                                                                          }
                                                                                            
                                                                                        }
                                                                                        else 
                                                                                        {
                                                                                            echo "0 results";
                                                                                        }?>
                          
                                    

 </TD>
                          </TR>
                                </TABLE>
                            </div>
                            


                        </div>

                    </div>




                    <!-- box-5 -->
                    <div class="col me-2 ms-2 hide" id="box-5">

                        <div class="col" style="display: flex;justify-content: space-around; align-items: baseline;">
                            <h3 class="p-3">Welcome
                                <?php $firstname ?>
                            </h3>
                            <button type="submit" class="btn btn-primary m-3 showprofile" style="background-color: #2922dc;">Profile</button>
                        </div>

                        <!-- <div class="w-100"></div> -->

                        <div class="col border-top border-bottom border-primary">
                            <h4 class="p-2 text-dark text-center">Ask the Doctor</h4>
                        </div>
                        <form action="patientlanding.php" id="askdoctor" method="POST">
                            <?php include 'errors.php'?>

                            <div class="row sm-4">
                                <div class="row p-5">

                                    <div class="p-3 m-2 col d-flex flex-column align-items-center btn-light-blue">
                                        <div class="rounded-circle ">
                                            <img src="doctor.jpg" class="w-100 rounded-circle ">
                                        </div>
                                        <div class=""><input type="hidden" name="patientid" value="<?php echo $_SESSION['p_id'];?>"></div>
                                        <div class=""><input type="hidden" name="doctorid1" id="" value="1"></div>
                                        <div class="button m-3">
                                        <textarea name="question1" id="" class="w-100" cols="30" rows="5" placeholder="Write your Query here..."></textarea>
                                            <button type="submit" class="p-2" name="askdoctor1"><h5>Ask Dr Anil Seth</h5>  </button>
                                        </div>
                                    </div>
                                    <div class="p-3 m-2 col d-flex flex-column align-items-center btn-light-blue">
                                        <div class="rounded-circle ">
                                            <img src="doctor.jpg" class="w-100 rounded-circle ">
                                        </div>
                                        <div class=""><input type="hidden" name="patientid" value="<?php echo $_SESSION['p_id'];?>"></div>
                                        <div class=""><input type="hidden" name="doctorid2" value="2"></div>
                                        <div class="button m-3">
                                            <textarea name="question2" id="" class="w-100" cols="30" rows="5" placeholder="Write your Query here..."></textarea>
                                            <button type="submit" name="askdoctor2" class="p-2">
                                                                      <h5>Ask Dr Sunil tripathi</h5>
                                                                    </button>
                                        </div>
                                    </div>
                                    <div class="p-3 m-2 col d-flex flex-column align-items-center btn-light-blue">
                                        <div class="rounded-circle ">
                                            <img src="doctor.jpg" class="w-100 rounded-circle">
                                        </div>
                                        <div class=""><input type="hidden" name="patientid" value="<?php echo $_SESSION['p_id'];?>"></div>
                                        <div class=""><input type="hidden" name="doctorid3" value="3"></div>
                                        <div class="button m-3">
                                            <textarea name="question3" id="" class="w-100" cols="30" rows="5" placeholder="Write your Query here..."></textarea>
                                            <button type="submit" name="askdoctor3" class="p-2">
                                                                      <h5>Ask Dr Isha Roy</h5>
                                                                    </button>
                                        </div>
                                    </div>

                                </div>
                                <div class="row p-5">
                                    <div class="p-3 m-2 col d-flex flex-column align-items-center btn-light-blue">
                                        <div class="rounded-circle ">
                                            <img src="doctor.jpg" class="w-100 rounded-circle ">
                                        </div>
                                        <div class=""><input type="hidden" name="patientid" value="<?php echo $_SESSION['p_id'];?>"></div>
                                        <div class=""><input type="hidden" name="doctorid4" value="4"></div>
                                        <div class="button m-3">
                                            <textarea name="question4" id="" class="w-100" cols="30" rows="5" placeholder="Write your Query here..."></textarea>
                                            <button type="submit" name="askdoctor4" class="p-2">
                                                                      <h5>Ask Dr Kapil Bajaj</h5>
                                                                    </button>
                                        </div>
                                    </div>
                                    <div class="p-3 m-2 col d-flex flex-column align-items-center btn-light-blue">
                                        <div class="rounded-circle ">
                                            <img src="doctor.jpg" class="w-100 rounded-circle ">
                                        </div>
                                        <div class=""><input type="hidden" name="patientid" value="<?php echo $_SESSION['p_id'];?>"></div>
                                        <div class=""><input type="hidden" name="doctorid5" value="5"></div>
                                        <div class="button m-3">
                                            <textarea name="question5" id="" class="w-100" cols="30" rows="5" placeholder="Write your Query here..."></textarea>
                                            <button type="submit" name="askdoctor5" class="p-2" style="width: 100%; border-radius: 20px;">
                                                                      <h5>Ask Dr Tarun Mishra</h5>
                                                                    </button>
                                        </div>
                                    </div>

                                    <div class="p-3 m-2 col d-flex flex-column align-items-center btn-light-blue">
                                        <div class="rounded-circle ">
                                            <img src="doctor.jpg" class="w-100 rounded-circle ">
                                        </div>
                                        <div class=""><input type="hidden" name="patientid" value="<?php echo $_SESSION['p_id'];?>"></div>
                                        <div class=""><input type="hidden" name="doctorid6" value="6"></div>
                                        <div class="button m-3">
                                            <textarea name="question6" id="" class="w-100" cols="30" rows="5" placeholder="Write your Query here..."></textarea>
                                            <button type="submit" name="askdoctor6" class="p-2"> 
                                                                      <h5>Ask Dr Himanshu M</h5>
                                                                     </button>
                                        </div>

                                    </div>
                                </div>



                            </div>
                    </div>


                    <!-- <--box-6 -->
                    <div class="col me-2 ms-2 hide" id="box-6" style="padding-top:80px">

                        <div class="container" style="margin: 0%; padding: 0%;">
                            <div class="row p-3" style="background-color: hsl(240, 100%, 96%); margin: 0%;">
                                <form action="patientlanding.php" id="ratingbypatient" method="post">
                                    <?php include 'errors.php'?>
                                    <h1 class="p-3 border-primary border-bottom">How rating features work ?</h1>
                                    <p class="p-3">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vel, nobis harum magni nisi, tempore iure illo corrupti modi, molestiae rem quia ipsa quo expedita provident qui cupiditate atque blanditiis laboriosam!</p>
                            </div>
                            <div class="row p-2" style="background-color: white; margin: 0%;">
                                <h1 class="p-3">Round Range Slider</h1>
                                <script>
                                    var slider = document.getElementById("myRange");
                                    var output = document.getElementById("demo");
                                    output.innerHTML = slider.value;

                                    slider.oninput = function() {
                                        output.innerHTML = this.value;
                                    }
                                </script>

                                <div class="slidecontainer p-3">
                                    <input type="range" min="1" max="10" value="10" class="slider p-2" name="ratingbypatient1" id="myRange">
                                    <h5 class="p-2">Value: <span id="demo"></span></h5>
                                </div>
                                <script>
                                    var slider = document.getElementById("myRange");
                                    var output = document.getElementById("demo");
                                    output.innerHTML = slider.value;


                                    slider.oninput = function() {
                                        output.innerHTML = this.value;
                                    }
                                </script>

                                <div class=""><input type="hidden" name="patientid" value="<?php echo $_SESSION['p_id'];?>"></div>

                                <button type="submit" class="btn m-2 p-2 m-3 text-white w-25" name="ratingbypatient" style="background-color: navy;">Submit</button>

                            </div>


                        </div>

                    </div>
                    <!--container-->


                </div>
                <!--col-2-->


            </div>
            <!--row-->


        </div>
        <!--container-fluid-->
    </section>

    <section class="m-5">
        <div class="container-fluid">
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>

            <div class="row mt-5">
                <div class="col p-4 mt-5 mb-5" style="font-weight: bolder;color: white; background-color: rgb(61, 57, 172);">
                    <h1 style="text-align: center;">Consult Doctors</h1>
                </div>
            </div>
            <form action="patientlanding.php" id="ratingbypatient" method="post">
                <?php include 'errors.php'?>
        </div>
        <div class="row d-flex justify-content-center">
            <div class="col-md-2 mb-3">
                <div class="card d-flex flex-column justify-content-center align-items-center">
                    <img src="login.jpg" alt="" class="m-3 rounded-circle" style="width: 70%;height: 70%;">
                    <h5 class="m-4 p-3" style="text-align: center;"> Dr.Anil Seth</h5>
                    <div class=""><input type="hidden" name="patientid" value="<?php echo $_SESSION['p_id'];?>"></div>
                    <div class=""><input type="hidden" name="doctorid1" value="1"></div>
                    <button type="submit" name="scheduleAnAppointment1" class="btn btn-primary m-3" style="width: 40%;">Book</button>
                </div>
            </div>
            <div class="col-md-2 mb-3">
                <div class="card d-flex flex-column justify-content-center align-items-center">
                    <img src="login.jpg" alt="" class="m-3 rounded-circle" style="width: 70%;height: 70%;">
                    <h5 class="m-4 p-3" style="text-align: center;">Dr.Sunil Tripathi</h5>
                    <div class=""><input type="hidden" name="patientid" value="<?php echo $_SESSION['p_id'];?>"></div>
                    <div class=""><input type="hidden" name="doctorid2" value="2"></div>
                    <button type="submit" class="btn btn-primary m-3" name="scheduleAnAppointment2" style="width: 40%;">Book</button>
                </div>
            </div>
            <div class="col-md-2 mb-3">
                <div class="card d-flex flex-column justify-content-center align-items-center">
                    <img src="login.jpg" alt="" class="m-3 rounded-circle" style="width: 70%;height: 70%;">
                    <h5 class="m-4 p-3" style="text-align: center;">Isha Roy</h5>
                    <div class=""><input type="hidden" name="patientid" value="<?php echo $_SESSION['p_id'];?>"></div>
                    <div class=""><input type="hidden" name="doctorid3" value="3"></div>
                    <button type="submit" class="btn btn-primary m-3" name="scheduleAnAppointment3" style="width: 40%;">Book</button>
                </div>
            </div>
            <div class="w-100"></div>
            <div class="col-md-2 mb-3">
                <div class="card d-flex flex-column justify-content-center align-items-center">
                    <img src="login.jpg" alt="" class="m-3 rounded-circle" style="width: 70%;height: 70%;">
                    <h5 class="m-4 p-3" style="text-align: center;">Kapil Bajaj</h5>
                    <div class=""><input type="hidden" name="patientid" value="<?php echo $_SESSION['p_id'];?>"></div>
                    <div class=""><input type="hidden" name="doctorid4" value="4"></div>
                    <button type="submit" class="btn btn-primary m-3" name="scheduleAnAppointment4" style="width: 40%;">Book</button>
                </div>
            </div>
            <div class="col-md-2 mb-3">
                <div class="card d-flex flex-column justify-content-center align-items-center">
                    <img src="login.jpg" alt="" class="m-3 rounded-circle" style="width: 70%;height: 70%;">
                    <h5 class="m-4 p-3" style="text-align: center;">Tarun Mishra</h5>
                    <div class=""><input type="hidden" name="patientid" value="<?php echo $_SESSION['p_id'];?>"></div>
                    <div class=""><input type="hidden" name="doctorid5" value="5"></div>
                    <button type="submit" class="btn btn-primary m-3" name="scheduleAnAppointment5" style="width: 40%;">Book</button>
                </div>
            </div>
            <div class="col-md-2 mb-3">
                <div class="card d-flex flex-column justify-content-center align-items-center">
                    <img src="login.jpg" alt="" class="m-3 rounded-circle" style="width: 70%;height: 70%;">
                    <h5 class="m-4 p-3" style="text-align: center;">Himanshu M</h5>
                    <div class=""><input type="hidden" name="patientid" value="<?php echo $_SESSION['p_id'];?>"></div>
                    <div class=""><input type="hidden" name="doctorid6" value="6"></div>
                    <button type="submit" class="btn btn-primary m-3" name="scheduleAnAppointment6" style="width: 40%;">Book</button>
                </div>
            </div>

        </div>

        </div>
    </section>

    <section style="background-color: white;" id="diagnosis">
        <div class="container mt-5">
            <div class="row mt-3" style="background-color:rgb(133, 123, 113);">
                <div class="col p-4" style="font-weight: bolder;color: whitesmoke; background-color: rgb(61, 57, 172);">
                    <h1 style="text-align: center;">Dignosis</h1>
                </div>
            </div>
            <div class="row mt-5 mb-5 d-flex flex-row" style="color: rgb(17, 17, 17);">
                <div class="col">
                    <h5 class="p-3" style="text-align: center;text-decoration: underline;">Suggestions by Doctors</h5>
                    <p class="p-3" style="font-weight: lighter; border-right: 2px solid skyblue; border-left: 2px solid skyblue;">
                        <?php echo $suggestion?>
                    </p>
                </div>
                <div class="col">
                    <h5 class="p-3" style="text-align: center;text-decoration: underline;">Prescriptions By Doctors</h5>
                    <p class="p-3" style="font-weight: lighter; border-right: 2px solid skyblue; border-left: 2px solid skyblue;">
                        <?php echo $medication?>
                    </p>
                </div>
                <div class="col">
                    <h5 class="p-3" style="text-align: center;text-decoration: underline;">Precautions By doctors</h5>
                    <p class="p-3" style="font-weight: lighter; border-right: 2px solid skyblue; border-left: 2px solid skyblue;">
                        <?php echo $precaution?>
                    </p>
                </div>
            </div>
        </div>
    </section>


    <footer>
        <div class="container-fluid" style="color: white; background-color: black;">
            <div class="row">
                <div class="col p-5">
                    <h1>Made by : Coding Beast</h1>
                    <p style="font-weight: lighter;">
                        Thank you very much for visiting and using our service. Feel free to give us suggestion we will try our best to make web service efficent CREATED BY Coding Beasts

                    </p>

                </div>
                <div class="col d-flex flex-row justify-content-center align-items-center">
                    <div class="col">
                        <img src="login.jpg" alt="" style="width: 80%; height: 80%;">
                    </div>
                    <div class="col">
                        <img src="login.jpg" alt="" style="width: 80%; height: 80%;">
                    </div>
                    <div class="col">
                        <img src="login.jpg" alt="" style="width: 80%; height: 80%;">
                    </div>

                </div>
            </div>
        </div>
        </div>

    </footer>





</body>


<script>
    const dashboard = document.getElementById("Dashboard");

    const alerts = document.getElementById("Alerts");

    const profile = document.getElementById("Profile");

    const appoinments = document.getElementById("Appointments");

    const doctor = document.getElementById("Doctor");

    const rating = document.getElementById("Rating");
    const showprofile = document.querySelectorAll(".showprofile");



    const box1 = document.getElementById("box-1");

    const box2 = document.getElementById("box-2");

    const box3 = document.getElementById("box-3");

    const box4 = document.getElementById("box-4");

    const box5 = document.getElementById("box-5");

    const box6 = document.getElementById("box-6");


    dashboard.addEventListener("click", () => {
        box6.classList.add("hide");
        box5.classList.add("hide");
        box4.classList.add("hide");
        box3.classList.add("hide");
        box2.classList.add("hide");
        box1.classList.remove("hide");

    })

    alerts.addEventListener("click", () => {
        box6.classList.add("hide");
        box5.classList.add("hide");
        box4.classList.add("hide");
        box3.classList.add("hide");
        box2.classList.remove("hide");
        box1.classList.add("hide");
    })

    profile.addEventListener("click", () => {
        box6.classList.add("hide");
        box5.classList.add("hide");
        box4.classList.add("hide");
        box3.classList.remove("hide");
        box2.classList.add("hide");
        box1.classList.add("hide");

    })
    showprofile.forEach(function(element) {
        element.addEventListener("click", (e) => {
            box6.classList.add("hide");
            box5.classList.add("hide");
            box4.classList.add("hide");
            box3.classList.add("hide");
            box2.classList.remove("hide");
            box1.classList.add("hide");


        })
    })

    appoinments.addEventListener("click", () => {
        box6.classList.add("hide");
        box5.classList.add("hide");
        box4.classList.remove("hide");
        box3.classList.add("hide");
        box2.classList.add("hide");
        box1.classList.add("hide");

    })

    doctor.addEventListener("click", () => {
        box6.classList.add("hide");
        box5.classList.remove("hide");
        box4.classList.add("hide");
        box3.classList.add("hide");
        box2.classList.add("hide");
        box1.classList.add("hide");

    })

    rating.addEventListener("click", () => {
        box6.classList.remove("hide");
        box5.classList.add("hide");
        box4.classList.add("hide");
        box3.classList.add("hide");
        box2.classList.add("hide");
        box1.classList.add("hide");

    })

    const sidebar_resizer = document.getElementById("sidebar");

    const body_resize = document.getElementsByTagName("body");

    window.addEventListener("resize", () => {
        console.clear();
        console.log(window.innerWidth);
        console.log(window.innerHeight);

        if (window.innerWidth < 1080) {
            sidebar_resizer.classList.remove("col-md-2");
            sidebar_resizer.classList.add("col-md-3");
        } else {
            if (sidebar_resizer.classList.contains("col-md-3")) {
                sidebar_resizer.classList.remove("col-md-3");
                sidebar_resizer.classList.add("col-md-2");
            }
        }
    })
</script>

</html>