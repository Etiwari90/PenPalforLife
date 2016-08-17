<?php
session_start();


	
 $_SESSION['classname'] = '';
 $_SESSION['classlang'] = '';
 $_SESSION['classsub'] = ''; 
 $_SESSION['classdesc'] = '';

$con=new mysqli('localhost','root','','penpal') ;
	if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
} 


?>
<!DOCTYPE html>
<html lang="en">



<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin - Bootstrap Admin Template</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
	

</head>

<body>

<?php
		
if(isset($_POST["submit"]))
{
	
//echo "submit clicked....<BR/>";
$cname = $_POST['c_name'];
$clang = $_POST['c_lang'];
$csub = $_POST['c_sub'];
$cdesc = $_POST['c_desc']; 
	
$sfirstname = $_POST['student_fname'];
$slastname = $_POST['student_lname'];
$user = $_POST['student_user'];
$pemail = $_POST['Parent_email'];
$syear = $_POST['student_year'];
$sbio = $_POST['student_bio'];

	
    $result = $con->query("SELECT * FROM users WHERE username = '".$user."'");
	$classresult = $con->query("SELECT * FROM class WHERE CLassName = '".$cname."'");
	if($result->num_rows==0)
    {
        $sql="INSERT INTO users VALUES ('','".$sfirstname."','".$slastname."','".$user."','".$pemail."','".$syear."','".$sbio."')";	
        if ($con->query($sql) === TRUE) {
        echo "New record created successfully";
        } else {
        echo "Error: " . $sql . "<br>" . $con->error;
        } 
    }
    else{
        echo "sorry";
    }
	
	
	if($classresult->num_rows==0)
    {
        $recordsql="INSERT INTO class VALUES ('','".$cname."','".$clang."','".$csub."','".$cdesc."')";	
        if ($con->query($recordsql) === TRUE) {
        echo "New record created successfully";
        } else {
        echo "Error: " . $recordsql . "<br>" . $con->error;
        } 
    }
    else{
        echo "sorry";
    }
	
 $email = ".$pemail.";
 $message = "Dear Parent" ;
 $message = $message. " You child has been enrolled in Pen Pal. The username for penpal is : '".$user."' " ;
 $subject = "'".$sfirstname."' '".$slastname."' has been registered in pen pal";
 
 
 send_mail($email,$message,$subject);

}

if(isset($_POST['Next']))
{
	
$cname = $_POST['c_name'];
$clang = $_POST['c_lang'];
$csub = $_POST['c_sub'];
$cdesc = $_POST['c_desc']; 
	
$sfirstname = $_POST['student_fname'];
$slastname = $_POST['student_lname'];
$user = $_POST['student_user'];
$pemail = $_POST['Parent_email'];
$syear = $_POST['student_year'];
$sbio = $_POST['student_bio'];

	
    $result = $con->query("SELECT * FROM users WHERE username = '".$user."'");
	$classresult = $con->query("SELECT * FROM class WHERE CLassName = '".$cname."'");
	if($result->num_rows==0)
    {
        $sql="INSERT INTO users VALUES ('','".$sfirstname."','".$slastname."','".$user."','".$pemail."','".$syear."','".$sbio."')";	
        if ($con->query($sql) === TRUE) {
        echo "New record created successfully";
        } else {
        echo "Error: " . $sql . "<br>" . $con->error;
        } 
    }
    else{
        echo "sorry";
    }
	
	
	if($classresult->num_rows==0)
    {
        $recordsql="INSERT INTO class VALUES ('','".$cname."','".$clang."','".$csub."','".$cdesc."')";	
        if ($con->query($recordsql) === TRUE) {
        echo "New record created successfully";
        } else {
        echo "Error: " . $recordsql . "<br>" . $con->error;
        } 
    }
    else{
        echo "sorry";
    }
 $_SESSION['classname'] = $_POST['c_name'];	
 $_SESSION['classlang'] = $_POST['c_lang'];	
 $_SESSION['classsub'] = $_POST['c_sub'];	
 $_SESSION['classdesc'] = $_POST['c_desc'];
 
 $email = ".$pemail.";
 $message = "Dear Parent" ;
 $message = $message. " You child has been enrolled in Pen Pal. The username for penpal is : '".$user."' " ;
 $subject = "'".$sfirstname."' '".$slastname."' has been registered in pen pal";
 
 
 send_mail($email,$message,$subject);


}


function send_mail($email,$message,$subject)
    {                        
        require_once('mailer/class.phpmailer.php');
        $adminemail = "etiwari90@gmail.com";
        $mail = new PHPMailer();
        $mail->IsSMTP(); 
        $mail->SMTPDebug  = 0;                     
        $mail->SMTPAuth   = true;                  
        $mail->SMTPSecure = "ssl";                 
        $mail->Host       = "smtp.gmail.com";      
        $mail->Port       = 465;             
        $mail->AddAddress($email);
        $mail->Username="etiwari90@gmail.com";  
        $mail->Password="sdkt5134";            
        $mail->SetFrom($adminemail,'Teacher');
        $mail->Subject   = $subject;
        $mail->MsgHTML($message);
        $mail->Send();
    }   


	
?>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">SB Admin</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i> <b class="caret"></b></a>
                    <ul class="dropdown-menu message-dropdown">
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading"><strong>John Smith</strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading"><strong>John Smith</strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading"><strong>John Smith</strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-footer">
                            <a href="#">Read All New Messages</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell"></i> <b class="caret"></b></a>
                    <ul class="dropdown-menu alert-dropdown">
                        <li>
                            <a href="#">Alert Name <span class="label label-default">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-primary">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-success">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-info">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-warning">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-danger">Alert Badge</span></a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">View All</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> John Smith <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-envelope"></i> Inbox</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-gear"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li>
                        <a href="index.html"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="charts.html"><i class="fa fa-fw fa-bar-chart-o"></i> Charts</a>
                    </li>
                    <li>
                        <a href="tables.html"><i class="fa fa-fw fa-table"></i> Tables</a>
                    </li>
                    <li class="active">
                        <a href="forms.html"><i class="fa fa-fw fa-edit"></i> Forms</a>
                    </li>
                    <li>
                        <a href="bootstrap-elements.html"><i class="fa fa-fw fa-desktop"></i> Bootstrap Elements</a>
                    </li>
                    <li>
                        <a href="bootstrap-grid.html"><i class="fa fa-fw fa-wrench"></i> Bootstrap Grid</a>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-arrows-v"></i> Dropdown <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo" class="collapse">
                            <li>
                                <a href="#">Dropdown Item</a>
                            </li>
                            <li>
                                <a href="#">Dropdown Item</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="blank-page.html"><i class="fa fa-fw fa-file"></i> Blank Page</a>
                    </li>
                    <li>
                        <a href="index-rtl.html"><i class="fa fa-fw fa-dashboard"></i> RTL Dashboard</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Forms
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-edit"></i> Forms
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-6">
					<div class = "Add">
					
					<h1>Add Student</h1>
					</div>
                        <form role="form" action ="forms.php" method = "post">
						
						<div class= "Add-Class">

                            <div class="form-group row">
								<label for="example-text-input" class="col-xs-2 col-form-label">Class Name</label>
									  <div class="col-xs-10">
										<input class="form-control" type="text" id="className" name = "c_name" value = "<?php echo $_SESSION['classname'];?>">
									  </div>
									</div>
									<div class="form-group row">
									  <label for="example-search-input" class="col-xs-2 col-form-label">Class Language</label>
									  <div class="col-xs-10">
										<input class="form-control" type="search" id="ClassLang"name="c_lang" value = "<?php echo $_SESSION['classlang'];?>">
									  </div>
									</div>
									<div class="form-group row">
									  <label for="example-email-input" class="col-xs-2 col-form-label">Class Subject</label>
									  <div class="col-xs-10">
										<input class="form-control" type="text" id="ClassSub"name="c_sub" value = "<?php echo $_SESSION['classsub'];?>">
									  </div>
									</div>
									<div class="form-group row">
									  <label for="example-url-input" class="col-xs-2 col-form-label">Class Description</label>
									  <div class="col-xs-10">
										<input class="form-control" type="text" id="ClassDesc"name="c_desc" value = "<?php echo $_SESSION['classdesc'];?>">
									  </div>
									</div>
								</div>
								<div class="student">
									<div class="form-group row">
									  <label for="example-tel-input" class="col-xs-2 col-form-label">Student First Name</label>
									  <div class="col-xs-10">
										<input class="form-control" type="text" id="example-tel-input"name="student_fname" Placeholder = "Stuent First Name">
									  </div>
									</div>
									<div class="form-group row">
									  <label for="example-password-input" class="col-xs-2 col-form-label">Student Last Name</label>
									  <div class="col-xs-10">
										<input class="form-control" type="text" id="example-password-input"name="student_lname" Placeholder = "Student Last Name">
									  </div>
									</div>
									<div class="form-group row">
									  <label for="example-number-input" class="col-xs-2 col-form-label">Username</label>
									  <div class="col-xs-10">
										<input class="form-control" type="text" id="example-text-input"name = "student_user" Placeholder = "Username">
									  </div>
									</div>
									<div class="form-group row">
									  <label for="example-datetime-local-input" class="col-xs-2 col-form-label">Parent Email</label>
									  <div class="col-xs-10">
										<input class="form-control" type="email" id="example-datetime-local-input"name="Parent_email" Placeholder = "Parent Email">
									  </div>
									</div>
									<div class="form-group row">
									  <label for="example-date-input" class="col-xs-2 col-form-label">Year</label>
									  <div class="col-xs-10">
										<input class="form-control" type="text" id="example-date-input"name="student_year" Placeholder = "Year">
									  </div>
									</div>
									<div class="form-group row">
									  <label for="example-month-input" class="col-xs-2 col-form-label">Student Bio</label>
									  <div class="col-xs-10">
										<input class="form-control" type="text" id="example-month-input"name="student_bio" Placeholder = "Student Bio">
									  </div>
									</div>
								</div>

							 <input type="submit" name = "Next" value="Save & Add Next" class="sign-up-button">
							
							 <input type="submit" name = "submit" value="Save & Close" class="sign-up-button">

                        </form>

                    </div>
                    <div class="Excel">
                        <h1>Upload Class List</h1>

						<div class = "Upload">
							<button><a href="/test.php?q=download">Download Template</a></button>
								<form action="/test.php?p=upload_files" method="post" enctype="multipart/form-data">
										Select file to upload:
									
										<input type="file" name="fileToUpload" id="fileToUpload">
										<input type="submit" value="Upload Excel" name="submit">
									</form>
									
						</div>
						
					</div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
	



</body>

</html>
