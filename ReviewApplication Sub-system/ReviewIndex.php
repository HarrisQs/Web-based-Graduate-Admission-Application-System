<!DOCTYPE HTML>
<!--
  Ex Machina by TEMPLATED
 templated.co @templatedco
 Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
 -->
<html>
    <?php 

      include_once"../Repository Sub-system/ConnectDB.php";
        session_start();
        $TeacherID = $_SESSION['currentAccount'];
      
     // $TeacherID = "adminsteven";
    ?>
    <head>
        <title>Software Engineering</title>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <meta name="description" content="" />
        <meta name="keywords" content="" />
        <link rel='stylesheet' type='text/css'>
            <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
            <script src="js/skel.min.js"></script>
            <script src="js/skel-panels.min.js"></script>
            <script src="js/init.js"></script>
            <noscript>
                <link rel="stylesheet" href="css/skel-noscript.css" />
                <link rel="stylesheet" href="css/style.css" />
                <link rel="stylesheet" href="css/style-desktop.css" />
            </noscript>
            </head>
    <body class="no-sidebar">
        
        <!-- Header -->
        <div id="header">
            <div class="container">
                
                <!-- Logo -->
                <div id="logo" style="font-size:11px;">
                    <h1><a href="#">Web-based graduate <br>admission application system</a></h1>
                </div>
                
                <!-- Nav -->
                <nav id="nav">
                    <ul>
                        <li><a href="../AccountManager-Sub-system/index.html">sign out</a></li>
                        <li class="active"><a href="index.html">Teacher</a></li>
                    </ul>
                </nav>
                
            </div>
        </div>
        <!-- Header -->
        
        <!-- Banner -->
        <div id="banner">
            <div class="container">
            </div>
        </div>
        <!-- /Banner -->
        
        <!-- Main -->
        <div id="page">
            
            <!-- Main -->
            <div id="main" class="container">
                <div class="row">
                    <div class="12u">
                        <section>
                            <header>
                                <h2>for student</h2>
                                <span class="byline">
                                  <form name="action" action="Review.php" method="post">
                                  <select name = "action">
                                  <option>請選擇要執行的項目</option>
                                  <option value="Show_All">顯示全部申請書</option>
                                  <option value="Show_NotReview">顯示尚未審查的申請書</option>
                                  <option value="Show_Success">顯示通過的申請書</option>
                                  <option value="Show_Failed">顯示未通過的申請書</option>
                                </select>
                                <input type="hidden" name="TeacherID" value =<?php echo $TeacherID ?> >
                                <br>
                                <input type = "submit" class="button" >
                              </form>
                                </span>
                            </header>
                            <p>....</p>
                        </section>
                    </div>
                    
                </div>
            </div>
            <!-- Main -->
            
        </div>
        <!-- /Main -->
        
        <!-- Copyright -->
        <div id="copyright" class="container">
            Design: <a href="http://templated.co">TEMPLATED</a> Images: <a href="http://unsplash.com">Unsplash</a> (<a href="http://unsplash.com/cc0">CC0</a>)
        </div>
        
        
    </body>
</html>


