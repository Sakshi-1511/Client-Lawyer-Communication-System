

<?php
include('security.php');
?>
<div class="container-fluid">

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            
        </div>
        <div class="card-body">
            <div class="table-responsive">
            <?php
                $query = "SELECT * FROM booking";
                $query_run = mysqli_query($connection, $query);
            ?>
                
                    
            </div>
        </div>
    </div>

</div>



<!DOCTYPE html>
<html style="font-size: 16px;">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>Internship Applications</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
<link rel="stylesheet" href="Internship-Applications.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 3.16.0, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">
    
    
    
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "Admin Dashboard",
		"url": "index.html",
		"logo": "images/Screenshot2021-06-03182605.png"
}</script>
    <meta property="og:title" content="Internship Applications">
    <meta property="og:type" content="website">
    <meta name="theme-color" content="#478ac9">
    <link rel="canonical" href="index.html">
    <meta property="og:url" content="index.html">
  </head>
  <body class="u-body"><header class="u-clearfix u-header u-header" id="sec-ac43"><div class="u-clearfix u-sheet u-sheet-1">
        <a href="Admin.html" data-page-id="562230828" class="u-image u-logo u-image-1" data-image-width="460" data-image-height="407" title="Admin">
          <img src="images/Screenshot2021-06-03182605.png" class="u-logo-image u-logo-image-1" data-image-width="64">
        </a>
        <nav class="u-align-left u-menu u-menu-dropdown u-nav-spacing-25 u-offcanvas u-offcanvas-shift u-menu-1" data-responsive-from="XL">
          <div class="menu-collapse">
            <a class="u-button-style u-custom-color u-nav-link" href="#" style="font-size: calc(1em + 8px);">
              <svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 302 302" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-7b92"></use></svg>
              <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="svg-7b92" x="0px" y="0px" viewBox="0 0 302 302" style="enable-background:new 0 0 302 302;" xml:space="preserve" class="u-svg-content"><g><rect y="36" width="302" height="30"></rect><rect y="236" width="302" height="30"></rect><rect y="136" width="302" height="30"></rect>
</g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g></svg>
            </a>
          </div>
          <div class="u-custom-menu u-nav-container">
            <ul class="u-custom-font u-heading-font u-nav u-unstyled u-nav-1"><li class="u-nav-item"><a class="u-button-style u-nav-link u-palette-1-base u-text-active-palette-1-base u-text-hover-palette-2-base" href="Admin.html" style="padding: 10px 20px;">Admin</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-palette-1-base u-text-active-palette-1-base u-text-hover-palette-2-base" href="Queries.php" style="padding: 10px 20px;">Enquiry Details</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-palette-1-base u-text-active-palette-1-base u-text-hover-palette-2-base" href="Job-Applications.php" style="padding: 10px 20px;">Registered Users</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-palette-1-base u-text-active-palette-1-base u-text-hover-palette-2-base" href="Internship-Applications.php" style="padding: 10px 20px;">Booking Details</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-palette-1-base u-text-active-palette-1-base u-text-hover-palette-2-base" href="Questions.php" style="padding: 10px 20px;">FAQ</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-palette-1-base u-text-active-palette-1-base u-text-hover-palette-2-base" href="Admin-Settings.php" style="padding: 10px 20px;">Admin Settings</a>
</li></ul>
          </div>
          <div class="u-custom-menu u-nav-container-collapse">
            <div class="u-align-center u-container-style u-inner-container-layout u-sidenav u-sidenav-1" data-offcanvas-width="354">
              <div class="u-sidenav-overflow">
                <div class="u-menu-close"></div>
                <ul class="u-align-left u-custom-font u-heading-font u-nav u-popupmenu-items u-spacing-19 u-text-palette-1-base u-unstyled u-nav-2"><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Admin.html" style="padding: 12px 20px;">Admin</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Queries.php" style="padding: 12px 20px;">Enquiry Details</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Job-Applications.php" style="padding: 12px 20px;">Registered Users</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Internship-Applications.php" style="padding: 12px 20px;">Booking Details</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Questions.php" style="padding: 12px 20px;">FAQ</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Admin-Settings.php" style="padding: 12px 20px;">Admin Settings</a>
</li></ul>
              </div>
            </div>
            <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
          </div>
        </nav>
      </div></header>
    <section class="u-clearfix u-image u-shading u-section-1" id="sec-b3ce" data-image-width="5184" data-image-height="3456">
      <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <h1 class="u-align-center-xs u-text u-text-1">Booking Details</h1>
      </div>
    </section>
    <section class="u-align-center u-clearfix u-section-2" id="sec-e5a0">
      <div class="u-clearfix u-sheet u-valign-middle-xs u-sheet-1">
        <div class="u-expanded-width u-table u-table-responsive u-table-1">
          <table class="u-table-entity u-table-entity-1">
            <colgroup>
              <col width="4.6%">
              <col width="13.2%">
              <col width="17%">
              <col width="16.1%">
              <col width="19.4%">
              <col width="29.7%">
            </colgroup>
            <thead class="u-black u-table-header u-table-header-1">
              <tr style="height: 72px;">
                
                <th class="u-border-1 u-border-black u-palette-1-base u-table-cell u-table-cell-2">Source</th>
                <th class="u-border-1 u-border-black u-palette-1-base u-table-cell u-table-cell-3">Destination</th>
                <th class="u-border-1 u-border-black u-palette-1-base u-table-cell u-table-cell-4">Departing Date</th>
                <th class="u-border-1 u-border-black u-palette-1-base u-table-cell u-table-cell-5">Returning Date</th>
                <th class="u-border-1 u-border-black u-palette-1-base u-table-cell u-table-cell-6">Adults</th>
                <th class="u-border-1 u-border-black u-palette-1-base u-table-cell u-table-cell-6">Children </th>
                <th class="u-border-1 u-border-black u-palette-1-base u-table-cell u-table-cell-6">Payment Method</th>
                <th class="u-border-1 u-border-black u-palette-1-base u-table-cell u-table-cell-6">Email</th>
                <th class="u-border-1 u-border-black u-palette-1-base u-table-cell u-table-cell-6">Category</th>
                                <th class="u-border-1 u-border-black u-palette-1-base u-table-cell u-table-cell-6">Action</th>

              </tr>

            </thead>
            <?php
            if(mysqli_num_rows($query_run) > 0)        
            {
                while($row = mysqli_fetch_assoc($query_run))
                {
            ?>
            <tbody class="u-table-body">
                <tr style="height: 75px;">
                    
                    <td class="u-border-1 u-border-grey-30 u-table-cell"><?php  echo $row['Source']; ?></td>
                    <td class="u-border-1 u-border-grey-30 u-table-cell"><?php  echo $row['Destination']; ?></td>
                    <td class="u-border-1 u-border-grey-30 u-table-cell"><?php  echo $row['D_date']; ?></td>
                    <td class="u-border-1 u-border-grey-30 u-table-cell"><?php  echo $row['R_date']; ?></td>
                    <td class="u-border-1 u-border-grey-30 u-table-cell"><?php  echo $row['Adults']; ?></td>
                      <td class="u-border-1 u-border-grey-30 u-table-cell"><?php  echo $row['Kids']; ?></td>
                        <td class="u-border-1 u-border-grey-30 u-table-cell"><?php  echo $row['Payment']; ?></td>
                          <td class="u-border-1 u-border-grey-30 u-table-cell"><?php  echo $row['Email']; ?></td>
                            <td class="u-border-1 u-border-grey-30 u-table-cell"><?php  echo $row['Category']; ?></td>
                    
                    
                    
                    <td class="u-border-1 u-border-grey-30 u-table-cell">
                        <form action="codeintern.php" method="post">
                            <input type="hidden" name="delete_Email" value="<?php echo $row['Email']; ?>">
                            <button type="submit" name="delete_btn" class="btn btn-danger"> DELETE</button>
                        </form>
                    </td>
                </tr>
                <tbody>
            <?php
                } 
            }
            else {
                echo "No Record Found";
            }
            ?>
        
    </table>
<br>
            
    
   
  </body>
</html>