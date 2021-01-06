<?php
require('database.php');
$query = 'SELECT *
          FROM categories
          ORDER BY categoryID';
$categories = $db->query($query);
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<!-- the head section -->
<head>
    <title>My TAGin Tracker</title>
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
            <h1>TAGIN <span class="tag_highlight">MANAGER</span></h1>
          </div>
        </div>

        <div id="main">
            <h3>Add Assessment</h3>
            <form action="add_product.php" method="post"
                  id="add_product_form">

                <label>Category:</label>
                <select name="category_id">
                    <option value="Assessments">Assessments</option>
                </select>
                <br />

                <label>TAGin #:</label>
                <input type="input" name="unit_id" />
                <br />

                <label>Client Name:</label>
                <input type="input" name="client_name" />
                <br />

                <label>Point of Contact:</label>
                <input type="input" name="client_contact" />
                <br />

                <label>Client Address:</label>
                <input type="input" name="client_address" />
                <br />

                <label>Tracking # (Outbound):</label>
                <input type="input" name="tracking_out" />
                <br />

                <label>Tracking # (Inbound):</label>
                <input type="input" name="tracking_return" />
                <br />

                <label>&nbsp;</label>
                <input type="submit" value="Add Assessment" />
                <br />
            </form>
            <p><a href="index.php">View Assessment List</a></p>
        </div><!-- end main -->

        <div id="footer">
            <p>
                &copy; <?php echo date("Y"); ?> My TAGin Tracker
            </p>
        </div>

    </div><!-- end page -->
</body>
</html>
