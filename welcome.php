<?php
    require_once('database.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<!-- the head section -->
<head>
    <title>Welcome Team Member</title>
    <link rel="stylesheet" type="text/css" href="main.css" />
</head>

<!-- the body section -->
<body>
    <div id="page">

    <div id="header" class="header_bg">
      <div id="header_top">
        <img src='logo.png'/>
          <ul>
            <li><a href="welcome.php">Home</a></li>
            <li><a href="index.php">TAGin Manager</a></li>
            <li><a href="#">Ticket Center</a></li>
          </ul>
      </div>
      <div id="header_bottom">
        <h1>Welcome TAG <span class="tag_highlight"> Team</span></h1>
      </div>
    </div>

    <div id="main">
        <div id="sidebar">
            <!-- display a list of categories -->
            <h2>Account Options</h2>
          <!--  <ul class="nav">
           <?php foreach ($categories as $category) : ?>
                <li>
                <a href="?categoryid=<?php echo $category['categoryid']; ?>">
                    <?php echo $category['categoryName']; ?>
                </a>
                </li>
            <?php endforeach; ?>
          </ul>-->
          <ul>
            <li><a href="#">Change Password</a></li>
            <li><a href="#">Download Data</a></li>
            <li><a href="#">Submit Support Ticket</a></li>

          </ul>
        </div>

        <div id="content">
            <!-- display a table of assessments -->
            <h2>Welcome To The Future of TAG</h2>

            <p>
              In the last few months the TAG Web & Marketing Teams have been<br>
              working on a whole new domain for The Acheson Group. We have completely<br>
              revamped the clientside websites, but we have also created a few<br>
              subdomains that will allow The Acheson Group to own and control a secure<br>
              portal for clients and TAG team members to access. This portal is filled <br>
              with featurues, but here are some links to get you familiar with the new TAG<br>
               client-side websites:
              <ul>
              <li><a href="#">AchesonGroup.com</a></li>
              <li><a href="#">Canada.AchesonGroup.com</a></li>
              <li><a href="#">Latin.AchesonGroup.com</a></li>
              <li><a href="#">Hash.AchesonGroup.com</a></li>
              <li><a href="#">foodsafetyconsulting.com</a></li>
            </ul>
            </p>

            <div class="future_updates">
              <p><span class="tag_highlight title">Create an Account</span><br>
                This link is the only way to access this page and the link will expire in<br>
                24 hours. To gain access to this portal in the future, you will need log in<br>
                credentials.
              </p>
              <a href="#">CREATE YOUR ACCOUNT</a>
            </div>
        </div>
    </div>

    <div id="footer">
        <a class="footer_ticket" href="https://support.achesongroup.com">Support Ticket</a>
        <p class="footer_page"><?php echo date("Y"); ?> My TAGin Tracker</p>
    </div>

    </div><!-- end page -->
</body>
</html>
