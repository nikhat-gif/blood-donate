<?php
error_reporting(0);
include('includes/config.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>BloodBank & Donor Management System</title>
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="css/modern-business.css" rel="stylesheet">
    <style>
    .navbar-toggler {
        z-index: 1;
    }
    
    @media (max-width: 576px) {
        nav > .container {
            width: 100%;
        }
    }
    .carousel-item.active,
    .carousel-item-next,
    .carousel-item-prev {
        display: block;
    }
    a, a:hover{
        text-decoration: none
    }
    </style>

</head>

<body>

    <!-- Navigation -->
<?php include('includes/header.php');?>
<?php include('includes/slider.php');?>
   
    <!-- Page Content -->
    <div class="container">

  <h1 class="my-4"> Welcome to BloodBank Donor Management System</h1>

  <!-- Marketing Icons Section -->
  <div class="row">
    <a href="#" class="lcol-lg-4 mb-4" aria-current="true">
      <div class="card">
        <h5 class="card-header">The need for blood donation in our society </h5>

      </div>
      <small class="text-muted">
    Giving blood makes it possible for many people to lead normal healthy lives. </br>
     Every year thousands of patients require blood transfusions in hospitals, because they are undergoing surgery, recovering from cancer or have been in a serious accident. </br>
     Only 3% of the eligible Irish population give blood, providing blood for a population of over 4 million and 3,000 blood donors are needed each week in Ireland.
</small>


    </a>
    <a href="#" class="lcol-lg-4 mb-4" aria-current="true">
      <div class="card">
        <h5 class="card-header">Who you could Help </h5>

      </div>
      <small class="text-muted">
       • One in four people will need a blood transfusion at some point in their lives </br>
       • Over 1,000 Irish people receive transfusions every week in Ireland </br>
       • Approximately 70,000 patients will have transfusions in Irish hospitals this year </br>
       • The IBTS supplies hospitals in the Republic of Ireland with blood and blood products 365 days a year </br>
       • Blood is required for much of the services our health system provides. For example, a car accident victim may require up to 30 units of blood, a bleeding ulcer could require anything between 3-30 units of blood, or a coronary artery bypass may use between 1-5 units of blood </br>
       • A typical unit of blood lasts for just 35 days, but in some cases such as blood used for very young children; this blood must be used within 5 days of it's collection.
       </small>
</a>


  <a href="#" class="lcol-lg-4 mb-4" aria-current="true">
    <div class="card">
      <h5 class="card-header">Blood donation Tips </h5>

    </div>
    <small class="text-muted">
    • Drink an extra 16 oz. of water (or other nonalcoholic drink) before your appointment.</br>
    • Eat a healthy meal, avoiding fatty foods like hamburgers, fries or ice cream.</br>
    • Wear a shirt with sleeves that you can roll up above your elbows.</br>
    • Let us know if you have a preferred arm or particular vein that has been used successfully in the past to draw blood.</br>
    • Relax, listen to music, talk to other donors or read while you donate.
       </small>
</a>
  </div>
  

</div>


        <!-- Portfolio Section -->
        <h2>Some of our precious Donors</h2>

        <div class="row">
                   <?php 
$status=1;
$sql = "SELECT * from tblblooddonars where status=:status order by rand() limit 6";
$query = $dbh -> prepare($sql);
$query->bindParam(':status',$status,PDO::PARAM_STR);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{ ?>

            <div class="col-lg-4 col-sm-6 portfolio-item">
                <div class="card h-100">
                    <a href="#"><img class="card-img-top img-fluid" src="images/blood-donor.jpg" alt="" ></a>
                    <div class="card-block">
                        <h4 class="card-title"><a href="#"><?php echo htmlentities($result->FullName);?></a></h4>
<p class="card-text"><b>  Gender :</b> <?php echo htmlentities($result->Gender);?></p>
<p class="card-text"><b>Blood Group :</b> <?php echo htmlentities($result->BloodGroup);?></p>

                    </div>
                </div>
            </div>

            <?php }} ?>
          
 



        </div>
        <!-- /.row -->

        <!-- Features Section -->
        <div class="row">
            <div class="col-lg-6">
                <h2>BLOOD GROUPS</h2>
          <p>  blood group of any human being will mainly fall in any one of the following groups.</p>
                <ul>
                
                
<li>A positive or A negative</li>
<li>B positive or B negative</li>
<li>O positive or O negative</li>
<li>AB positive or AB negative.</li>
                </ul>
                <p>A healthy diet helps ensure a successful blood donation, and also makes you feel better! Check out the following recommended foods to eat prior to your donation.</p>
            </div>
            <div class="col-lg-6">
                <img class="img-fluid rounded" src="images/blood-donor (1).jpg" alt="">
            </div>
        </div>
        <!-- /.row -->

        <hr>

        <!-- Call to Action Section -->
        <div class="row mb-4">
            <div class="col-md-8">
            <h4>UNIVERSAL DONORS AND RECIPIENTS</h4>
                <p>
The most common blood type is O, followed by type A.

Type O individuals are often called "universal donors" since their blood can be transfused into persons with any blood type. Those with type AB blood are called "universal recipients" because they can receive blood of any type.</p>
            </div>
            <div class="col-md-4">
                <a class="btn btn-lg btn-secondary btn-block" href="become-donar.php">Become a Donar</a>
            </div>
        </div>

    </div>
    <!-- /.container -->

    <!-- Footer -->
  <?php include('includes/footer.php');?>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/tether/tether.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

</body>

</html>
