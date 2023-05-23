<?php 

  include "partials/_dbconnect.php";
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="css/homepage.css"> -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
   <style>
        .navbar-nav {
            /* margin-left: 100px; */
            /* margin-left: auto; */
        }
        html{
    scroll-behavior: smooth;
}
    </style>
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>credits</title>
</head>

<body>
     <!-- <]navbar   me-auto  navbar-expand-lg bg-light-->
   
     <nav class="navbar navbar-expand-lg sticky-top text-right" style=" background-color: rgb(19, 33, 82);">
        <div class="container-fluid">
          <a class="navbar-brand bg-light text-light" href="#">  <img src="img/logo1.jpg" alt="Logo" width="201" height="41" class="d-inline-block align-text-top">
          </a>
          <button class="navbar-toggler border border-light  text-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon text-light"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active text-light fs-5 px-3" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-light fs-5 px-3" href="#">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-light fs-5 px-3" href="#">Contact us</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-light fs-5 px-3" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Login
                </a>
                <ul class="dropdown-menu dropdown-menu-dark" >
                  <li><a class="dropdown-item text-light fs-6" href="#">Client</a></li>
                  <li><a class="dropdown-item text-light fs-6" href="#">Lawyer</a></li>
                  <!-- <li><hr class="dropdown-divider"></li> -->
                  
                </ul>
              </li>
              <!-- <li class="nav-item">
                <a class="nav-link disabled ">Disabled</a>
              </li> -->
            </ul>
            <form class="d-flex position-absolute  end-0" role="search">
              <input class="form-control me-2 " type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success " type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav>



<br> <br>

<section class="dashboard">
       
       <div class="dash-content">
           <div class="overview">
               <div class="title">
                   <i class="uil uil-tachometer-fast-alt"></i>
                   <span class="text">Search Lawyer</span>
               </div>
               <div class="boxes">
                   
<table class="table" id="myTable">
 <thead>
   <tr>
     <th scope="col">srno</th>
     <th scope="col">Lawyer Name</th>
     <th scope="col">Email</th>
     <th scope="col">Mobile Number</th>
     <th scope="col">Gender</th>
     <th scope="col">Address</th>
     <th scope="col">actions</th>
   </tr>
 </thead>
 <tbody>
<!-- displaying title n desc in table -->
 <?php 
 $srno=1;
 $sql = "SELECT `Email` FROM `clientsignup`";
   $result = mysqli_query ($conn , $sql);
   if($result) {
     $sql = "SELECT `Fname`,`Email`, `Phone`, `Gender`,`Address` FROM `clientsignup` ";
   $result = mysqli_query ($conn , $sql);
   while($row = mysqli_fetch_assoc($result)) {
     echo " <tr>
     <th scope='row'>". $srno ."</th>
     <td>". $row['Fname']. "</td>
     <td>". $row['Email'] ."</td>
     <td>". $row['Phone'] ."</td>
     <td>". $row['Gender'] ."</td>
     <td>". $row['Address'] ."</td>

     
     <td> 
     <span style='    background-color: var(--primary-color);
     border-radius: 6px;
     color: var(--title-icon-color);
     width: 19px;
     justify-content: center;
     align-items: center;
     text-align: center;  margin-left: 6px; padding: 4px;'> <a style='color: white;' class='edit' title='Edit' data-toggle='modal' data-target='#myEditModal".$srno."'> <i class=' uil-edit-alt'> </i> </a> </span>

     
     </td>
   
   </tr> "; 
   
   



   


     $srno+=1;
   }
}
?>
  

 </tbody>
</table>
               </div>
           </div>
           </div>
       </div>
   </section>



    

	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
			integrity=
"sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
			crossorigin="anonymous">
	</script>

	<script src=
"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
			integrity=
"sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
			crossorigin="anonymous">
	</script>

	<script src=
"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
			integrity=
"sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
			crossorigin="anonymous">
	</script> -->

<link rel="stylesheet" href="//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
      
      <script
  src="https://code.jquery.com/jquery-3.6.1.js"
  integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI="
  crossorigin="anonymous"></script>
  
    <script src=" //cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js  "></script>
  <script src="//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css"></script>
    
    <script>
      $(document).ready( function () {
    $('#myTable').DataTable();
} );
    </script>
    <script src="js/script.js"></script>

<!-- Footer -->
    
<footer class="page-footer font-small blue pt-4" style="background-color: rgb(19, 33, 82);" id="contact">

    <!-- Footer Links -->
    <div class="container-fluid text-center text-md-left">
    
      <!-- Grid row -->
      <div class="row">
    
        <!-- Grid column -->
        <div class="col-md-6 mt-md-0 mt-3">
    
          <!-- Content -->
          <h5 class="text-uppercase text-light">Follow us on</h5>
          <!-- <p class="text-light">Here you can use rows and columns to organize your footer content.</p> -->
          <!-- <img src="img/svkmlogo.png" class="bg-light" width="201" height="50"> -->
           <!-- Facebook -->
           <a href="#" class="fb-ic px-1">
                <i class="fab fa-facebook-f fa-lg white-text mr-md-5 mr-3 fa-2x bg-light"> </i>
              </a>
              <!-- Twitter -->
              <!-- <a class="tw-ic px-1">
                <i class="fab fa-twitter fa-lg white-text mr-md-5 mr-3 fa-2x bg-light"> </i>
              </a> -->
              <!-- Google +-->
              <a href="#" class="gplus-ic px-1">
                <i class="fab fa-google-plus-g fa-lg white-text mr-md-5 mr-3 fa-2x bg-light"> </i>
              </a>
              <!--Linkedin -->
              <a href="#" class="li-ic px-1">
                <i class="fab fa-linkedin-in fa-lg white-text mr-md-5 mr-3 fa-2x bg-light"> </i>
              </a>
              <!--Instagram-->
              <a href="#" class="ins-ic px-1">
                <i class="fab fa-instagram fa-lg white-text mr-md-5 mr-3 fa-2x bg-light"> </i>
              </a>
              <!--Pinterest-->
              <!-- <a class="pin-ic px-1">
                <i class="fab fa-pinterest fa-lg white-text fa-2x bg-light"> </i>
              </a> -->
        </div>
        <!-- Grid column -->
    
        <hr class="clearfix w-100 d-md-none pb-3">
    
        <!-- Grid column -->
        <div class="col-md-3 mb-md-0 mb-3">
    
          <!-- Links -->
          <h5 class="text-uppercase text-light">Links</h5>
    
          <ul class="list-unstyled text-light">
            <li>
              <a href="#top" class="text-light" style="text-decoration:none;">Home</a>
            </li>
            <li>
              <a href="#about" class="text-light" style="text-decoration:none;">About</a>
            </li>
            <li>
              <a href="#contact" class="text-light" style="text-decoration:none;">Contact</a>
            </li>
            <li>
              <a href="#" class="text-light" style="text-decoration:none;">Credits</a>
            </li>
          </ul>
    
        </div>
        <!-- Grid column -->
    
        <!-- Grid column -->
        <div class="col-md-3 mb-md-0 mb-3">
    
          <!-- Links -->
    
    
          <!-- <h5 class="text-uppercase text-light">Links</h5>
    
          <ul class="list-unstyled">
            <li>
              <a href="#!">Link 1</a>
            </li>
            <li>
              <a href="#!">Link 2</a>
            </li>
            <li>
              <a href="#!">Link 3</a>
            </li>
            <li>
              <a href="#!">Link 4</a>
            </li>
          </ul> -->
    
        </div>
    
    
        <!-- Grid column -->
    
      </div>
      <!-- Grid row -->
    
    </div>
    <!-- Footer Links -->
    
    <!-- Copyright -->
    <div class="footer-copyright text-center py-3 text-light">© 2022 Copyright:
      <a href="#" class="text-light"> PSHT</a>
    </div>
    <!-- Copyright -->
    
    </footer>
    <!-- Footer -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>

</html>
