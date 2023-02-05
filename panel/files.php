<html lang="en"><head>
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
          <i class="ri-discuss-line"></i>
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
            <span class="d-none d-md-block dropdown-toggle ps-2">admin</span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6>admin</h6>
             
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                <i class="bi bi-person"></i>
                <span>My Profile</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                <i class="bi bi-gear"></i>
                <span>Account Settings</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="pages-faq.html">
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
                
               
                <span type="submit" value="Sign Out"> Sign out </span>
               
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
    <a class="nav-link collapsed" href="./">
    <i class="ri-dashboard-line"></i> <span>Dashboard</span>
        
        </a><!-- End Dashboard Nav -->

      <li class="nav-item">
        
        <a class="nav-link " href="./files.php">
          
        <i class="ri-folder-2-line"></i><span>File Manager</span>
        </a>
      </li><!-- End Blank Page Nav -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-blank.html">
          
          <i class="ri-mail-unread-line"></i><span>Mail</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-blank.html">
          
        <i class="ri-message-line"></i></i><span>Messenger</span>
        </a>
      </li>

    </ul>

  </aside><!-- End Sidebar-->

  <main id="main" class="main">

 
            
  <section class="section dashboard">
  <div class="container">
<div class="row">
    <div class="col-12 col-lg-3">
		<div class="card">
			<div class="card-body">
            <div class="page-aside-left pt-3">

                                            <div class="btn-group d-block mb-2">
                                                <button type="button" class="btn btn-success dropdown-toggle w-100" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="mdi mdi-plus"></i> Create New </button>
                                                <div class="dropdown-menu" style="">
                                                    <a class="dropdown-item" href="#"><i class="mdi mdi-folder-plus-outline me-1"></i> Folder</a>
                                                    <a class="dropdown-item" href="#"><i class="mdi mdi-file-plus-outline me-1"></i> File</a>
                                                    <a class="dropdown-item" href="#"><i class="mdi mdi-file-document me-1"></i> Document</a>
                                                    <a class="dropdown-item" href="#"><i class="mdi mdi-upload me-1"></i> Choose File</a>
                                                </div>
                                            </div>
                                            <div class="email-menu-list mt-3">
                                                <a href="#" class="list-group-item border-0"><i class="mdi mdi-folder-outline font-18 align-middle me-2"></i>My Files</a>
                                                <a href="#" class="list-group-item border-0"><i class="mdi mdi-google-drive font-18 align-middle me-2"></i>Google Drive</a>
                                                <a href="#" class="list-group-item border-0"><i class="mdi mdi-dropbox font-18 align-middle me-2"></i>Dropbox</a>
                                                <a href="#" class="list-group-item border-0"><i class="mdi mdi-share-variant font-18 align-middle me-2"></i>Share with me</a>
                                                <a href="#" class="list-group-item border-0"><i class="mdi mdi-clock-outline font-18 align-middle me-2"></i>Recent</a>
                                                <a href="#" class="list-group-item border-0"><i class="mdi mdi-star-outline font-18 align-middle me-2"></i>Starred</a>
                                                <a href="#" class="list-group-item border-0"><i class="mdi mdi-delete font-18 align-middle me-2"></i>Deleted Files</a>
                                            </div>
    
                                            <div class="mt-5">
                                                <h4><span class="badge rounded-pill p-1 px-2 badge-secondary-lighten">FREE</span></h4>
                                                <h6 class="text-uppercase mt-3">Storage</h6>
                                                <div class="progress my-2 progress-sm">
                                                    <div class="progress-bar progress-lg bg-success" role="progressbar" style="width: 46%" aria-valuenow="46" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                                <p class="text-muted font-12 mb-0">7.02 GB (46%) of 15 GB used</p>
                                            </div>

                                        </div>
			</div>
		</div>
		<div class="card">
			
		</div>
	</div>
	<div class="col-12 col-lg-9">
		<div class="card">
			<div class="card-body">
				<div class="fm-search">
					<div class="mb-0 pt-3">
						<div class="input-group input-group-lg">	<span class="input-group-text bg-transparent"><i class="fa fa-search"></i></span>
							<input type="text" class="form-control " placeholder="Search the files">
						</div>
					</div>
				</div>
				<div class="row mt-3">
					<div class="col-12 col-lg-4">
						<div class="card shadow-none border radius-15">
							<div class="card-body">
								<div class="d-flex align-items-center">
									<div class="fm-icon-box radius-15 bg-primary text-white"><i class="lni lni-google-drive"></i>
									</div>
									<div class="ms-auto font-24"><i class="fa fa-ellipsis-h"></i>
									</div>
								</div>
								<h5 class="mt-3 mb-0">Google Drive</h5>
								<p class="mb-1 mt-4"><span>45.5 GB</span>  <span class="float-end">50 GB</span>
								</p>
								<div class="progress" style="height: 7px;">
									<div class="progress-bar bg-primary" role="progressbar" style="width: 75%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-12 col-lg-4">
						<div class="card shadow-none border radius-15">
							<div class="card-body">
								<div class="d-flex align-items-center">
									<div class="fm-icon-box radius-15 bg-danger text-white"><i class="lni lni-dropbox-original"></i>
									</div>
									<div class="ms-auto font-24"><i class="fa fa-ellipsis-h"></i>
									</div>
								</div>
								<h5 class="mt-3 mb-0">Dropbox</h5>
								<p class="mb-1 mt-4"><span>1,2 GB</span>  <span class="float-end">3 GB</span>
								</p>
								<div class="progress" style="height: 7px;">
									<div class="progress-bar bg-danger" role="progressbar" style="width: 45%;" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-12 col-lg-4">
						<div class="card shadow-none border radius-15">
							<div class="card-body">
								<div class="d-flex align-items-center">
									<div class="fm-icon-box radius-15 bg-warning text-dark"><i class="bx bxs-door-open"></i>
									</div>
									<div class="ms-auto font-24"><i class="fa fa-ellipsis-h"></i>
									</div>
								</div>
								<h5 class="mt-3 mb-0">OneDrive</h5>
								<p class="mb-1 mt-4"><span>2,5 GB</span>  <span class="float-end">3 GB</span>
								</p>
								<div class="progress" style="height: 7px;">
									<div class="progress-bar bg-warning" role="progressbar" style="width: 65%;" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!--end row-->
				<h5>Folders</h5>
				<div class="row mt-3">
					<div class="col-12 col-lg-4">
						<div class="card shadow-none border radius-15">
							<div class="card-body">
								<div class="d-flex align-items-center">
									<div class="font-30 text-primary"><i class="bx bxs-folder"></i>
									</div>
									<div class="user-groups ms-auto">
										<img src="https://bootdey.com/img/Content/avatar/avatar1.png" width="35" height="35" class="rounded-circle" alt="">
										<img src="https://bootdey.com/img/Content/avatar/avatar2.png" width="35" height="35" class="rounded-circle" alt="">
									</div>
									<div class="user-plus">+</div>
								</div>
								<h6 class="mb-0 text-primary">Analytics</h6>
								<small>15 files</small>
							</div>
						</div>
					</div>
					<div class="col-12 col-lg-4">
						<div class="card shadow-none border radius-15">
							<div class="card-body">
								<div class="d-flex align-items-center">
									<div class="font-30 text-primary"><i class="bx bxs-folder"></i>
									</div>
									<div class="user-groups ms-auto">
										<img src="https://bootdey.com/img/Content/avatar/avatar7.png" width="35" height="35" class="rounded-circle" alt="">
									</div>
								</div>
								<h6 class="mb-0 text-primary">Assets</h6>
								<small>345 files</small>
							</div>
						</div>
					</div>
					<div class="col-12 col-lg-4">
						<div class="card shadow-none border radius-15">
							<div class="card-body">
								<div class="d-flex align-items-center">
									<div class="font-30 text-primary"><i class="bx bxs-folder"></i>
									</div>
									<div class="user-groups ms-auto">
										<img src="https://bootdey.com/img/Content/avatar/avatar2.png" width="35" height="35" class="rounded-circle" alt="">
										<img src="https://bootdey.com/img/Content/avatar/avatar3.png" width="35" height="35" class="rounded-circle" alt="">
									</div>
								</div>
								<h6 class="mb-0 text-primary">Marketing</h6>
								<small>143 files</small>
							</div>
						</div>
					</div>
				</div>
				<!--end row-->
				<div class="d-flex align-items-center">
					<div>
						<h5 class="mb-0">Recent Files</h5>
					</div>
					<div class="ms-auto"><a href="javascript:;" class="btn btn-sm btn-outline-secondary">View all</a>
					</div>
				</div>
				<div class="table-responsive mt-3">
					<table class="table table-striped table-hover table-sm mb-0">
						<thead>
							<tr>
								<th>Name <i class="bx bx-up-arrow-alt ms-2"></i>
								</th>
								<th>Members</th>
								<th>Last Modified</th>
								<th></th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>
									<div class="d-flex align-items-center">
										<div><i class="bx bxs-file-pdf me-2 font-24 text-danger"></i>
										</div>
										<div class="font-weight-bold text-danger">Competitor Analysis Template</div>
									</div>
								</td>
								<td>Only you</td>
								<td>Sep 3, 2019</td>
								<td><i class="fa fa-ellipsis-h font-24"></i>
								</td>
							</tr>
							<tr>
								<td>
									<div class="d-flex align-items-center">
										<div><i class="bx bxs-file me-2 font-24 text-primary"></i>
										</div>
										<div class="font-weight-bold text-primary">How to Create a Case Study</div>
									</div>
								</td>
								<td>3 members</td>
								<td>Jun 12, 2019</td>
								<td><i class="fa fa-ellipsis-h font-24"></i>
								</td>
							</tr>
							<tr>
								<td>
									<div class="d-flex align-items-center">
										<div><i class="bx bxs-file me-2 font-24 text-primary"></i>
										</div>
										<div class="font-weight-bold text-primary">Landing Page Structure</div>
									</div>
								</td>
								<td>10 members</td>
								<td>Jul 17, 2019</td>
								<td><i class="fa fa-ellipsis-h font-24"></i>
								</td>
							</tr>
							<tr>
								<td>
									<div class="d-flex align-items-center">
										<div><i class="bx bxs-file-pdf me-2 font-24 text-danger"></i>
										</div>
										<div class="font-weight-bold text-danger">Meeting Report</div>
									</div>
								</td>
								<td>5 members</td>
								<td>Aug 28, 2019</td>
								<td><i class="fa fa-ellipsis-h font-24"></i>
								</td>
							</tr>
							<tr>
								<td>
									<div class="d-flex align-items-center">
										<div><i class="bx bxs-file me-2 font-24 text-primary"></i>
										</div>
										<div class="font-weight-bold text-primary">Project Documents</div>
									</div>
								</td>
								<td>Only you</td>
								<td>Aug 17, 2019</td>
								<td><i class="fa fa-ellipsis-h font-24"></i>
								</td>
							</tr>
							<tr>
								<td>
									<div class="d-flex align-items-center">
										<div><i class="bx bxs-file-doc me-2 font-24 text-success"></i>
										</div>
										<div class="font-weight-bold text-success">Review Checklist Template</div>
									</div>
								</td>
								<td>7 members</td>
								<td>Sep 8, 2019</td>
								<td><i class="fa fa-ellipsis-h font-24"></i>
								</td>
							</tr>
							<tr>
								<td>
									<div class="d-flex align-items-center">
										<div><i class="bx bxs-file me-2 font-24 text-primary"></i>
										</div>
										<div class="font-weight-bold text-primary">How to Create a Case Study</div>
									</div>
								</td>
								<td>3 members</td>
								<td>Jun 12, 2019</td>
								<td><i class="fa fa-ellipsis-h font-24"></i>
								</td>
							</tr>
							<tr>
								<td>
									<div class="d-flex align-items-center">
										<div><i class="bx bxs-file me-2 font-24 text-primary"></i>
										</div>
										<div class="font-weight-bold text-primary">Landing Page Structure</div>
									</div>
								</td>
								<td>10 members</td>
								<td>Jul 17, 2019</td>
								<td><i class="fa fa-ellipsis-h font-24"></i>
								</td>
							</tr>
							<tr>
								<td>
									<div class="d-flex align-items-center">
										<div><i class="bx bxs-file-doc me-2 font-24 text-success"></i>
										</div>
										<div class="font-weight-bold text-success">Review Checklist Template</div>
									</div>
								</td>
								<td>7 members</td>
								<td>Sep 8, 2019</td>
								<td><i class="fa fa-ellipsis-h font-24"></i>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
</div></div></div></section>


    
  </main>
  <!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      © Copyright <strong><span>MyDashBoard</span></strong>. All Rights Reserved
    </div>
  </footer>

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="ri-arrow-drop-up-line"></i></a>

 

  <script src="..\assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="..\assets/vendor/chart.js/chart.umd.js"></script>



  <!-- Template Main JS File -->
  <script src="..\assets\js\panel.js"></script>
  



</body></html>