<?php
// (A) THIS IS A PROTECTED DUMMY PAGE
require "../login/protect.php";

// (B) HTML AS USUAL ?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  
  <title>Dashboard - MyDashBoard.de</title>
  <meta content="" name="description">
  <meta content="" name="keywords">


  <link href="..\assets/img/favicon.png" rel="icon">
  <link href="..\assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  

  
  <link href="..\assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


  
  <link href="..\assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  

  
  <link href="..\assets/css/panel.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="index.php" class="logo text-dark d-flex align-items-center">
        <img scr="..\assets/img/logo.svg" alt="">
        <span class="d-none d-lg-block">MyDashBoard</span>
      </a>
      <i class="ri-menu-2-line toggle-sidebar-btn"></i>
    </div><!-- End Logo -->
    
   

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        
       

        <li class="nav-item dropdown">

          <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
          <i class='ri-discuss-line' ></i>
            <span class="badge bg-success badge-number">20</span>
          </a><!-- End Messages Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow messages">
            <li class="dropdown-header">
              You have 20 new messages
              <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="message-item">
              <a href="#">
                
                <div>
                  <h4>Thoralf Sauerbrey</h4>
                  <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Delectus quidem voluptates, ...</p>
                  <p>2 hrs. ago</p>
                </div>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="message-item">
              <a href="#">
                
                <div>
                  <h4>Thorsten Krebs</h4>
                  <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Delectus quidem voluptates, ...</p>
                  <p>6 hrs. ago</p>
                </div>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="message-item">
              <a href="#">
                
                <div>
                  <h4>System</h4>
                  <p>Wir haben einige Updates am System gemacht! Jetzt neu: Mail Funktion direkt in der Website...</p>
                  <p>8 hrs. ago</p>
                </div>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="dropdown-footer">
              <a href="#">Show all messages</a>
            </li>

          </ul><!-- End Messages Dropdown Items -->

        </li><!-- End Messages Nav -->

        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="..\assets/img/profile.svg" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2"><?php echo $_SESSION["user"]; ?></span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6><?php echo $_SESSION["user"]; ?></h6>
             
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="404.php">
                <i class="bi bi-person"></i>
                <span>My Profile</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="404.php">
                <i class="bi bi-gear"></i>
                <span>Account Settings</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="404.php">
                <i class="bi bi-question-circle"></i>
                <span>Need Help?</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
            <form method="post">
            <input type="hidden" name="logout" value="1">
              <button class="dropdown-item d-flex align-items-center" href="#">
                <i class="bi bi-box-arrow-right"></i>
                
               
                <span type="submit"  value="Sign Out"> Sign out </span>
               
</button>
              </form>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

    <li class="nav-item">
        <a class="nav-link " href="./">
          
        <i class="ri-dashboard-line"></i> <span>Dashboard</span>
        </a><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="files.php">
          
          <i class="ri-folder-2-line"></i><span>File Manager</span>
        </a>
      </li><!-- End Blank Page Nav -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="404.php">
          
          <i class="ri-mail-unread-line"></i><span>Mail</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="404.php">
          
        <i class="ri-message-line"></i></i><span>Messenger</span>
        </a>
      </li>

    </ul>

  </aside><!-- End Sidebar-->

  <main id="main" class="main">

 
            

              <nav>
                <ol class="breadcrumb">
                 
                  <p class="breadcrumb-item">
                  <?php
  date_default_timezone_set("UTC");
  $timezone = date_default_timezone_get();
  $hour = date("G", time());

  if ($hour >= 0 && $hour < 5) {
    echo "Good Night, ".$_SESSION["user"];
  } elseif ($hour >= 5 && $hour < 10) {
    echo "Good Morning, ".$_SESSION["user"];
  } elseif ($hour >= 10 && $hour < 15) {
    echo "Good Noon, ".$_SESSION["user"];
  } elseif ($hour >= 15 && $hour < 19) {
    echo "Good Afternoon, ".$_SESSION["user"];
  } elseif ($hour >= 19 && $hour < 22) {
    echo "Good Evening, ".$_SESSION["user"];
  } elseif ($hour >= 22 && $hour < 24) {
    echo "Good Night, ".$_SESSION["user"];
  }
?>
                  </p>
                </ol>
              </nav>
            
       

    <section class="section dashboard">
    <div class="container">
    <div class="row">
  <div class="col ">  <div class="card info-card revenue-card">

<div class="filter">
  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="ri-menu-5-line"></i></a>
  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
    <li class="dropdown-header text-start">
      <h6>Optionen</h6>
    </li>


    <li><a class="dropdown-item" href="#">Vergrößern</a></li>
    <li><a class="dropdown-item" href="#">Verbergen</a></li>
  </ul>
</div>

<div class="card-body">
  <h5 class="card-title">Wetter </span></h5>

  <div class="d-flex align-items-center">
    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
      <i class="ri-sun-foggy-line"></i>
    </div>
    <div class="ps-3">
      <h6>6°C, foggy </h6>


    </div>
  </div>
</div>

</div></div>
  <div class="col ">  <div class="card info-card customers-card" data-bs-toggle="modal" data-bs-target="#ExtralargeModal">



<div class="card-body">
  <h5 class="card-title">Ungelesene Mails *click*</span></h5>

  <div class="d-flex align-items-center">
    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
      <i class="ri-mail-open-line"></i>
    </div>
    <div class="ps-3">
      <h6>50</h6>
      

    </div>
  </div>

</div>
</div></div>
  <div class="col ">  <div class="card info-card customers-card">

<div class="filter">
  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="ri-menu-5-line"></i></a>
  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
    <li class="dropdown-header text-start">
      <h6>Optionen</h6>
    </li>


    <li><a class="dropdown-item" href="#">Vergrößern</a></li>
    <li><a class="dropdown-item" href="#">Verbergen</a></li>
  </ul>
</div>

<div class="card-body">
  <h5 class="card-title">Verpasste Nachrichten</span></h5>

  <div class="d-flex align-items-center">
    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
      <i class="ri-message-2-line"></i>
    </div>
    <div class="ps-3">
      <h6>20</h6>
      

    </div>
  </div>

</div>
</div></div>
  <div class="col ">  <div class="card info-card customers-card">

<div class="filter">
  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="ri-menu-5-line"></i></a>
  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
    <li class="dropdown-header text-start">
      <h6>Optionen</h6>
    </li>


    <li><a class="dropdown-item" href="#">Vergrößern</a></li>
    <li><a class="dropdown-item" href="#">Verbergen</a></li>
  </ul>
</div>

<div class="card-body">
  <h5 class="card-title">Zeit</h5>

  <div class="d-flex align-items-center">
    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
      <i class="ri-time-line"></i>
    </div>
    <div class="ps-3">
    
    <h6 id="refreshed-content">
  <?php
  date_default_timezone_set('Europe/Berlin');
  echo date("H:i");
  ?>
</h6>


      <script>
  function refreshContent() {
    // Make an AJAX request to the current page to refresh the content
    var xhr = new XMLHttpRequest();
    xhr.open("GET", window.location.href, true);
    xhr.onreadystatechange = function () {
      if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
        // Find the updated content in the response and update the div
        var parser = new DOMParser();
        var response = parser.parseFromString(xhr.responseText, "text/html");
        var updatedContent = response.getElementById("refreshed-content").innerHTML;
        document.getElementById("refreshed-content").innerHTML = updatedContent;
      }
    };
    xhr.send();

    // Schedule the next refresh
    setTimeout(refreshContent, 60000);
  }

  // Start the refresh cycle
  refreshContent();
</script>

    </div>
  </div>

</div>
</div></div>
</div>
<div class="container">
  <div class="row">
    <div class="col">
   <!-- Default Card -->
   <div class="card">
            <div class="card-body">
              <h5 class="card-title">File Manager | <span>View All</span></h5>
              <div class="">
                                                    
                                                  
        
                                                    <div class="table-responsive">
                                                        <table class="table align-middle table-nowrap table-hover mb-0">
                                                            <thead>
                                                                <tr>
                                                                  <th scope="col">Name</th>
                                                                  <th scope="col">Date modified</th>
                                                                  <th scope="col" colspan="2">Size</th>
                                                                </tr>
                                                              </thead>
                                                            <tbody>
                                                                <tr>
                                                                  
                                                                    <td><i class="ri-code-box-line"></i></i><a href="javascript: void(0);" class="text-dark fw-medium"><i class="mdi mdi-file-document font-size-16 align-middle text-primary "></i> index.html</a></td>
                                                                    <td>12-10-2020, 09:45</td>
                                                                    <td>09 KB</td>
                                                                    <td>
                                                                        <div class="dropdown">
                                                                            <a class="font-size-16 text-muted" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                                                                <i class="mdi mdi-dots-horizontal"></i>
                                                                            </a>
                                                                            
                                                                            <div class="dropdown-menu dropdown-menu-end">
                                                                                <a class="dropdown-item" href="#">Open</a>
                                                                                <a class="dropdown-item" href="#">Edit</a>
                                                                                <a class="dropdown-item" href="#">Rename</a>
                                                                                <div class="dropdown-divider"></div>
                                                                                <a class="dropdown-item" href="#">Remove</a>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td><i class="ri-folder-zip-line"></i><a href="javascript: void(0);" class="text-dark fw-medium"><i class="mdi mdi-folder-zip font-size-16 align-middle text-warning "></i> Project-A.zip</a></td>
                                                                    <td>11-10-2020, 17:05</td>
                                                                    <td>115 KB</td>
                                                                    <td>
                                                                        <div class="dropdown">
                                                                            <a class="font-size-16 text-muted" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                                                                <i class="mdi mdi-dots-horizontal"></i>
                                                                            </a>
                                                                            
                                                                            <div class="dropdown-menu dropdown-menu-end">
                                                                                <a class="dropdown-item" href="#">Open</a>
                                                                                <a class="dropdown-item" href="#">Edit</a>
                                                                                <a class="dropdown-item" href="#">Rename</a>
                                                                                <div class="dropdown-divider"></div>
                                                                                <a class="dropdown-item" href="#">Remove</a>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td><i class="ri-image-2-line"></i><a href="javascript: void(0);" class="text-dark fw-medium"><i class="mdi mdi-image font-size-16 align-middle text-muted "></i> Img-1.jpeg</a></td>
                                                                    <td>11-10-2020, 13:26</td>
                                                                    <td>86 KB</td>
                                                                    <td>
                                                                        <div class="dropdown">
                                                                            <a class="font-size-16 text-muted" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                                                                <i class="mdi mdi-dots-horizontal"></i>
                                                                            </a>
                                                                            
                                                                            <div class="dropdown-menu dropdown-menu-end">
                                                                                <a class="dropdown-item" href="#">Open</a>
                                                                                <a class="dropdown-item" href="#">Edit</a>
                                                                                <a class="dropdown-item" href="#">Rename</a>
                                                                                <div class="dropdown-divider"></div>
                                                                                <a class="dropdown-item" href="#">Remove</a>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td><i class="ri-file-text-line"></i><a href="javascript: void(0);" class="text-dark fw-medium"><i class="mdi mdi-text-box font-size-16 align-middle text-muted "></i> update list.txt</a></td>
                                                                    <td>10-10-2020, 11:32</td>
                                                                    <td>08 KB</td>
                                                                    <td>
                                                                        <div class="dropdown">
                                                                            <a class="font-size-16 text-muted" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                                                                <i class="mdi mdi-dots-horizontal"></i>
                                                                            </a>
                                                                            
                                                                            <div class="dropdown-menu dropdown-menu-end">
                                                                                <a class="dropdown-item" href="#">Open</a>
                                                                                <a class="dropdown-item" href="#">Edit</a>
                                                                                <a class="dropdown-item" href="#">Rename</a>
                                                                                <div class="dropdown-divider"></div>
                                                                                <a class="dropdown-item" href="#">Remove</a>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td><i class="ri-folder-2-line"></i><a href="javascript: void(0);" class="text-dark fw-medium"><i class="mdi mdi-folder font-size-16 align-middle text-warning "></i> Project B</a></td>
                                                                    <td>10-10-2020, 10:51</td>
                                                                    <td>72 KB</td>
                                                                    <td>
                                                                        <div class="dropdown">
                                                                            <a class="font-size-16 text-muted" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                                                                <i class="mdi mdi-dots-horizontal"></i>
                                                                            </a>
                                                                            
                                                                            <div class="dropdown-menu dropdown-menu-end">
                                                                                <a class="dropdown-item" href="#">Open</a>
                                                                                <a class="dropdown-item" href="#">Edit</a>
                                                                                <a class="dropdown-item" href="#">Rename</a>
                                                                                <div class="dropdown-divider"></div>
                                                                                <a class="dropdown-item" href="#">Remove</a>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td><i class="ri-file-text-line"></i><a href="javascript: void(0);" class="text-dark fw-medium"><i class="mdi mdi-text-box font-size-16 align-middle text-muted "></i> Changes list.txt</a></td>
                                                                    <td>09-10-2020, 17:05</td>
                                                                    <td>07 KB</td>
                                                                    <td>
                                                                        <div class="dropdown">
                                                                            <a class="font-size-16 text-muted" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                                                                <i class="mdi mdi-dots-horizontal"></i>
                                                                            </a>
                                                                            
                                                                            <div class="dropdown-menu dropdown-menu-end">
                                                                                <a class="dropdown-item" href="#">Open</a>
                                                                                <a class="dropdown-item" href="#">Edit</a>
                                                                                <a class="dropdown-item" href="#">Rename</a>
                                                                                <div class="dropdown-divider"></div>
                                                                                <a class="dropdown-item" href="#">Remove</a>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td><i class="ri-image-2-line"></i><a href="javascript: void(0);" class="text-dark fw-medium"><i class="mdi mdi-image font-size-16 align-middle text-success "></i> Img-2.png</a></td>
                                                                    <td>09-10-2020, 15:12</td>
                                                                    <td>31 KB</td>
                                                                    <td>
                                                                        <div class="dropdown">
                                                                            <a class="font-size-16 text-muted" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                                                                <i class="mdi mdi-dots-horizontal"></i>
                                                                            </a>
                                                                            
                                                                            <div class="dropdown-menu dropdown-menu-end">
                                                                                <a class="dropdown-item" href="#">Open</a>
                                                                                <a class="dropdown-item" href="#">Edit</a>
                                                                                <a class="dropdown-item" href="#">Rename</a>
                                                                                <div class="dropdown-divider"></div>
                                                                                <a class="dropdown-item" href="#">Remove</a>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td><i class="ri-folder-2-line"></i><a href="javascript: void(0);" class="text-dark fw-medium"><i class="mdi mdi-folder font-size-16 align-middle text-warning "></i> Project C</a></td>
                                                                    <td>09-10-2020, 10:11</td>
                                                                    <td>20 KB</td>
                                                                    <td>
                                                                        <div class="dropdown">
                                                                            <a class="font-size-16 text-muted" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                                                                <i class="mdi mdi-dots-horizontal"></i>
                                                                            </a>
                                                                            
                                                                            <div class="dropdown-menu dropdown-menu-end">
                                                                                <a class="dropdown-item" href="#">Open</a>
                                                                                <a class="dropdown-item" href="#">Edit</a>
                                                                                <a class="dropdown-item" href="#">Rename</a>
                                                                                <div class="dropdown-divider"></div>
                                                                                <a class="dropdown-item" href="#">Remove</a>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td><i class="ri-code-box-line"></i><a href="javascript: void(0);" class="text-dark fw-medium"><i class="bx bxs-file font-size-16 align-middle text-primary "></i> 404.php</a></td>
                                                                    <td>08-10-2020, 03:22</td>
                                                                    <td>11 KB</td>
                                                                    <td>
                                                                        <div class="dropdown">
                                                                            <a class="font-size-16 text-muted" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                                                                <i class="mdi mdi-dots-horizontal"></i>
                                                                            </a>
                                                                            
                                                                            <div class="dropdown-menu dropdown-menu-end">
                                                                                <a class="dropdown-item" href="#">Open</a>
                                                                                <a class="dropdown-item" href="#">Edit</a>
                                                                                <a class="dropdown-item" href="#">Rename</a>
                                                                                <div class="dropdown-divider"></div>
                                                                                <a class="dropdown-item" href="#">Remove</a>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
            </div>
          </div><!-- End Default Card -->
    </div>
    <div class="col">
    <!-- Default Card -->
    <div class="card">
            <div class="card-body">
              <h5 class="card-title">News &amp; Updates</h5>
              
              

            <div class="card-body pb-0">
            

              <div class="news">
                <div class="post-item clearfix"> 
                  <h4><a href="#">Nihil blanditiis at in nihil autem</a></h4>
                  <p>Sit recusandae non aspernatur laboriosam. Quia enim eligendi sed ut harum...</p>
                </div>

                <div class="post-item clearfix">
                  
                  <h4><a href="#">Quidem autem et impedit</a></h4>
                  <p>Illo nemo neque maiores vitae officiis cum eum turos elan dries werona nande...</p>
                </div>

                <div class="post-item clearfix">
                  
                  <h4><a href="#">Id quia et et ut maxime similique occaecati ut</a></h4>
                  <p>Fugiat voluptas vero eaque accusantium eos. Consequuntur sed ipsam et totam...</p>
                </div>

                <div class="post-item clearfix">
                 
                  <h4><a href="#">Laborum corporis quo dara net para</a></h4>
                  <p>Qui enim quia optio. Eligendi aut asperiores enim repellendusvel rerum cuder...</p>
                </div>

                <div class="post-item clearfix pb-3">
                  
                  <h4><a href="#">Et dolores corrupti quae illo quod dolor</a></h4>
                  <p>Odit ut eveniet modi reiciendis. Atque cupiditate libero beatae dignissimos eius...</p>
                </div>

              </div><!-- End sidebar recent posts-->

            </div>
            </div>
          </div><!-- End Default Card -->
    </div>
  </div>

          <div class="container">
          <div class="row">
     <div class="col ">
      <!-- Default Card -->
      <div class="card">
            <div class="card-body">
              <h5 class="card-title">To-Dos</h5>
             
              <div id="container">
              <div class="container">
              <div class="row">
              <div class="col">
              <button id="addTaskBtn" class="btn btn-primary">Add Task</button>
              
              <button id="deleteCompletedBtn" class="btn btn-danger ">Delete Completed</button>
              
              <button id="selectAllBtn" class="btn btn-info ">Select All</button>
              <div class="pb-md-0 pb-3"></div> 
</div>

<div class="pb-md-0 pb-3"></div>
              
              
             
              <div class="col">
              <div class=" pb-3"></div> 
              <input type="text" class="form-control "   id="taskInput">
              <div class="w-100"></div>
              <div class="pb-3"></div>
              </div>
             
              <ul id="taskList" class="pb-3"></ul>
              
  </div>
</div>
  
  

  
  
  

</div>
<script>
const addTaskBtn = document.getElementById("addTaskBtn");
const taskInput = document.getElementById("taskInput");
const taskList = document.getElementById("taskList");
const deleteCompletedBtn = document.getElementById("deleteCompletedBtn");

const loadTasks = function () {
  const taskData = JSON.parse(localStorage.getItem("tasks")) || [];
  taskData.forEach(function (task) {
    const taskItem = document.createElement("li");
    taskItem.innerHTML = `
      <input type="checkbox" ${task.completed ? "checked" : ""} class="form-check-input">
      <label class="form-check-label">${task.text}</label>
    `;
    taskItem.classList.add("form-check");
    taskList.appendChild(taskItem);
  });
};

const saveTasks = function () {
  const taskData = [];
  taskList.querySelectorAll("li").forEach(function (taskItem) {
    const checkbox = taskItem.querySelector("input[type=checkbox]");
    taskData.push({
      text: taskItem.textContent.trim(),
      completed: checkbox.checked,
    });
  });

  localStorage.setItem("tasks", JSON.stringify(taskData));
};

addTaskBtn.addEventListener("click", function (event) {
  event.preventDefault();
  const taskValue = taskInput.value;
  if (!taskValue) return;

  const taskItem = document.createElement("li");
  taskItem.innerHTML = `
    <input type="checkbox" class="form-check-input">
    <label class="form-check-label">${taskValue}</label>
  `;
  taskItem.classList.add("form-check");
  taskList.appendChild(taskItem);
  taskInput.value = "";
  saveTasks();
  
  if (taskList.childElementCount > 10) {
    taskList.style.overflowY = "scroll";
  
  }
});

deleteCompletedBtn.addEventListener("click", function (event) {
  event.preventDefault();
  const completedTasks = taskList.querySelectorAll("input[type=checkbox]:checked");
  completedTasks.forEach(function (task) {
    task.parentElement.remove();
  });
  saveTasks();
});

taskList.addEventListener("change", function (event) {
  if (event.target.matches("input[type=checkbox]")) {
    saveTasks();
  }
});
taskInput.addEventListener("keypress", function (event) {
  if (event.key === "Enter") {
    event.preventDefault();
    addTaskBtn.click();
  }
});
if (taskList.childElementCount > 10) {
  taskList.style.overflowY = "scroll";
}
const selectAllBtn = document.getElementById("selectAllBtn");

selectAllBtn.addEventListener("click", function (event) {
  event.preventDefault();
  const checkboxes = taskList.querySelectorAll("input[type=checkbox]");
  checkboxes.forEach(function (checkbox) {
    checkbox.checked = true;
  });
  const sortTasks = function () {
  const completedTasks = [];
  const activeTasks = [];
  taskList.querySelectorAll("li").forEach(function (taskItem) {
    const checkbox = taskItem.querySelector("input[type=checkbox]");
    if (checkbox.checked) {
      completedTasks.push(taskItem);
    } else {
      activeTasks.push(taskItem);
    }
  });
  taskList.innerHTML = "";
  activeTasks.forEach(function (taskItem) {
    taskList.appendChild(taskItem);
  });
  completedTasks.forEach(function (taskItem) {
    taskList.appendChild(taskItem);
  });
};
taskList.addEventListener("change", function (event) {
  if (event.target.matches("input[type=checkbox]")) {
    saveTasks();
    sortTasks();
  }
});

const sortBtn = document.getElementById("sortBtn");
sortBtn.addEventListener("click", function (event) {
  event.preventDefault();
  sortTasks();
});
  saveTasks();
});

loadTasks();
</script>
            </div>
          </div><!-- End Default Card -->
    </div>
    <div class="col d-none d-sm-block">
      <!-- Default Card -->
      <div class="card ">
            <div class="card-body">
              <h5 class="card-title">Errechneter Zeitersparnis</h5>
                <!-- Line Chart -->
              <canvas id="lineChart" style="max-height: 400px;"></canvas>
              <script>
                document.addEventListener("DOMContentLoaded", () => {
                  new Chart(document.querySelector('#lineChart'), {
                    type: 'line',
                    data: {
                      labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
                      datasets: [{
                        label: 'Ersparte Minuten',
                        data: [65, 59, 80, 81, 56, 55, 40],
                        fill: false,
                        borderColor: 'rgb(75, 192, 192)',
                        tension: 0.1
                      }]
                    },
                    options: {
                      scales: {
                        y: {
                          beginAtZero: true
                        }
                      }
                    }
                  });
                });
              </script>
              <!-- End Line CHart -->
            </div>
          </div><!-- End Default Card -->
    </div>
  </div>
          
        
    </section>
    <div class="modal fade" id="ExtralargeModal" tabindex="-1">
    <div class="modal-dialog modal-xl">
                  <div class="modal-content">
                  
                    <div class="modal-body">
                    <div class="container">
<div class="row">

<div class="col-md-12">
<div class="grid email">
<div class="grid-body">
<div class="row">
  <h1>Inbox</h1>

<div class="row align-items-start">
  <div class="col  w-auto"><a class="btn btn-block btn-primary" data-toggle="modal" data-target="#compose-modal"><i class="ri-pencil-line"></i> Neue Nachricht</a>
  <a class="btn btn-block btn-warning" data-toggle="modal" data-target="#compose-modal"><i class="ri-spam-2-line"></i> Spam</a>
  <a class="btn btn-block btn-danger" data-toggle="modal" data-target="#compose-modal"><i class="ri-delete-bin-7-line"></i> Löschen</a>
  <a class="btn btn-block btn-info" data-toggle="modal" data-target="#compose-modal"><i class="ri-information-line"></i> Info</a></div>
  








</div>


<div class="col-md-9">
<div class="row">
<div class="col-sm-6">
<label style="margin-right: 8px;" class="">
<div class="icheckbox_square-blue" style="position: relative;"><input type="checkbox" id="check-all" class="icheck" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; border: 0px; opacity: 0; background: rgb(255, 255, 255);"><ins class="iCheck-helper" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; border: 0px; opacity: 0; background: rgb(255, 255, 255);"></ins></div>
</label>

</div>

</div>
<div class="padding"></div>
<div class="table-responsive">
<table class="table">
<tbody><tr>
<td class="action"><input type="checkbox" /></td>
<td class="action"><i class="fa fa-star-o"></i></td>
<td class="action"><i class="fa fa-bookmark-o"></i></td>
<td class="name"><a href="#">Larry Gardner</a></td>
<td class="subject"><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed </a></td>
<td class="time">08:30 PM</td>
</tr>
<tr>
<td class="action"><input type="checkbox" /></td>
<td class="action"><i class="fa fa-star-o"></i></td>
<td class="action"><i class="fa fa-bookmark"></i></td>
<td class="name"><a href="#">Larry Gardner</a></td>
<td class="subject"><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed </a></td>
<td class="time">08:30 PM</td>
</tr>
<tr class="read">
<td class="action"><div class="icheckbox_square-blue" st<td class="action"><input type="checkbox" /></td>
<td class="action"><i class="fa fa-star"></i></td>
<td class="action"><i class="fa fa-bookmark"></i></td>
<td class="name"><a href="#">Larry Gardner</a></td>
<td class="subject"><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed </a></td>
<td class="time">08:30 PM</td>
</tr>
<tr>
<td class="action"><input type="checkbox" /></td>
<td class="action"><i class="fa fa-star-o"></i></td>
<td class="action"><i class="fa fa-bookmark-o"></i></td>
<td class="name"><a href="#">Larry Gardner</a></td>
<td class="subject"><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed </a></td>
<td class="time">08:30 PM</td>
</tr>
<tr class="read">
<td class="action"><input type="checkbox" /></td>
<td class="action"><i class="fa fa-star-o"></i></td>
<td class="action"><i class="fa fa-bookmark-o"></i></td>
<td class="name"><a href="#">Larry Gardner</a></td>
<td class="subject"><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed </a></td>
<td class="time">08:30 PM</td>
</tr>
<tr class="read">
<td class="action"><input type="checkbox" /></td>
<td class="action"><i class="fa fa-star-o"></i></td>
<td class="action"><i class="fa fa-bookmark"></i></td>
<td class="name"><a href="#">Larry Gardner</a></td>
<td class="subject"><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed </a></td>
<td class="time">08:30 PM</td>
</tr>
<tr>
<td class="action"><input type="checkbox" /></td>
<td class="action"><i class="fa fa-star"></i></td>
<td class="action"><i class="fa fa-bookmark-o"></i></td>
<td class="name"><a href="#">Larry Gardner</a></td>
<td class="subject"><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed </a></td>
<td class="time">08:30 PM</td>
</tr>
<tr>
<td class="action"><input type="checkbox" /></td>
<td class="action"><i class="fa fa-star-o"></i></td>
<td class="action"><i class="fa fa-bookmark-o"></i></td>
<td class="name"><a href="#">Larry Gardner</a></td>
<td class="subject"><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed </a></td>
<td class="time">08:30 PM</td>
</tr>
<tr class="read">
<td class="action"><input type="checkbox" /></td>
<td class="action"><i class="fa fa-star"></i></td>
<td class="action"><i class="fa fa-bookmark"></i></td>
<td class="name"><a href="#">Larry Gardner</a></td>
<td class="subject"><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed </a></td>
<td class="time">08:30 PM</td>
</tr>
<tr>
<td class="action"><input type="checkbox" /></td>
<td class="action"><i class="fa fa-star"></i></td>
<td class="action"><i class="fa fa-bookmark-o"></i></td>
<td class="name"><a href="#">Larry Gardner</a></td>
<td class="subject"><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed </a></td>
<td class="time">08:30 PM</td>
</tr>
</tbody></table>
</div>

</div>


<div class="modal fade" id="compose-modal" tabindex="-1" role="dialog" aria-hidden="true">
<div class="modal-wrapper">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header bg-blue">
<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
<h4 class="modal-title"><i class="fa fa-envelope"></i> Compose New Message</h4>
</div>
<form action="#" method="post">
<div class="modal-body">
<div class="form-group">
<input name="to" type="email" class="form-control" placeholder="To">
</div>
<div class="form-group">
<input name="cc" type="email" class="form-control" placeholder="Cc">
</div>
<div class="form-group">
<input name="bcc" type="email" class="form-control" placeholder="Bcc">
</div>
<div class="form-group">
<input name="subject" type="email" class="form-control" placeholder="Subject">
</div>
<div class="form-group">
<textarea name="message" id="email_message" class="form-control" placeholder="Message" style="height: 120px;"></textarea>
</div>
<div class="form-group"> <input type="file" name="attachment">
</div>
</div>
<div class="modal-footer">
<button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Discard</button>
<button type="submit" class="btn btn-primary pull-right"><i class="fa fa-envelope"></i> Send Message</button>
</div>
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
<style type="text/css">
body{
    margin-top:20px;
    background:#eee;
}
/* EMAIL */
.email {
    padding: 20px 10px 15px 10px;
	font-size: 1em;
}

.email .btn.search {
	font-size: 0.9em;
}

.email h2 {
	margin-top: 0;
	padding-bottom: 8px;
}

.email .nav.nav-pills > li > a {
	border-top: 3px solid transparent;
}

.email .nav.nav-pills > li > a > .fa {
	margin-right: 5px;
}

.email .nav.nav-pills > li.active > a,
.email .nav.nav-pills > li.active > a:hover {
	background-color: #f6f6f6;
	border-top-color: #3c8dbc;
}

.email .nav.nav-pills > li.active > a {
	font-weight: 600;
}

.email .nav.nav-pills > li > a:hover {
	background-color: #f6f6f6;
}

.email .nav.nav-pills.nav-stacked > li > a {
	color: #666;
	border-top: 0;
	border-left: 3px solid transparent;
	border-radius: 0px;
}

.email .nav.nav-pills.nav-stacked > li.active > a,
.email .nav.nav-pills.nav-stacked > li.active > a:hover {
	background-color: #f6f6f6;
	border-left-color: #3c8dbc;
	color: #444;
}

.email .nav.nav-pills.nav-stacked > li.header {
	color: #777;
	text-transform: uppercase;
	position: relative;
	padding: 0px 0 10px 0;
}

.email table {
	font-weight: 600;
}

.email table a {
	color: #666;
}

.email table tr.read > td {
	background-color: #f6f6f6;
}

.email table tr.read > td {
	font-weight: 400;
}

.email table tr td > i.fa {
	font-size: 1.2em;
	line-height: 1.5em;
	text-align: center;
}

.email table tr td > i.fa-star {
	color: #f39c12;
}

.email table tr td > i.fa-bookmark {
	color: #e74c3c;
}

.email table tr > td.action {
	padding-left: 0px;
	padding-right: 2px;
}

.grid {
    position: relative;
    width: 100%;
    background: #fff;
    color: #666666;
    border-radius: 2px;
    margin-bottom: 25px;
    box-shadow: 0px 1px 4px rgba(0, 0, 0, 0.1);
}



.grid .grid-header:after {
    clear: both;
}

.grid .grid-header span,
.grid .grid-header > .fa {
    display: inline-block;
    margin: 0;
    font-weight: 300;
    font-size: 1.5em;
    float: left;
}

.grid .grid-header span {
    padding: 0 5px;
}

.grid .grid-header > .fa {
    padding: 5px 10px 0 0;
}

.grid .grid-header > .grid-tools {
    padding: 4px 10px;
}

.grid .grid-header > .grid-tools a {
    color: #999999;
    padding-left: 10px;
    cursor: pointer;
}

.grid .grid-header > .grid-tools a:hover {
    color: #666666;
}

.grid .grid-body {
    padding: 15px 20px 15px 20px;
    font-size: 0.9em;
    line-height: 1.9em;
}

.grid .full {
    padding: 0 !important;
}

.grid .transparent {
    box-shadow: none !important;
    margin: 0px !important;
    border-radius: 0px !important;
}

.grid.top.black > .grid-header {
    border-top-color: #000000 !important;
}

.grid.bottom.black > .grid-body {
    border-bottom-color: #000000 !important;
}

.grid.top.blue > .grid-header {
    border-top-color: #007be9 !important;
}

.grid.bottom.blue > .grid-body {
    border-bottom-color: #007be9 !important;
}

.grid.top.green > .grid-header {
    border-top-color: #00c273 !important;
}

.grid.bottom.green > .grid-body {
    border-bottom-color: #00c273 !important;
}

.grid.top.purple > .grid-header {
    border-top-color: #a700d3 !important;
}

.grid.bottom.purple > .grid-body {
    border-bottom-color: #a700d3 !important;
}

.grid.top.red > .grid-header {
    border-top-color: #dc1200 !important;
}

.grid.bottom.red > .grid-body {
    border-bottom-color: #dc1200 !important;
}

.grid.top.orange > .grid-header {
    border-top-color: #f46100 !important;
}

.grid.bottom.orange > .grid-body {
    border-bottom-color: #f46100 !important;
}

.grid.no-border > .grid-header {
    border-bottom: 0px !important;
}

.grid.top > .grid-header {
    border-top-width: 4px !important;
    border-top-style: solid !important;
}

.grid.bottom > .grid-body {
    border-bottom-width: 4px !important;
    border-bottom-style: solid !important;
}
</style>
<script type="text/javascript">

</script>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                      
                    </div>
                  </div>
                </div>
              </div>

    
  </main>
  <!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>MyDashBoard</span></strong>. All Rights Reserved
    </div>
  </footer>

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="ri-arrow-drop-up-line"></i></a>

 

  <script src="..\assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="..\assets/vendor/chart.js/chart.umd.js"></script>



  <!-- Template Main JS File -->
  <script src="..\assets\js\panel.js"></script>
  

</body>

</html>