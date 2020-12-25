<?php
    require_once('database.php');

    // Get category ID
    if(!isset($categoryid)) {
        #$categoryid = $_GET['$categoryid'];
        #if (!isset($categoryid)) {
            $categoryid = 1;
      #  }
    }

    // Get name for current category
    $query = "SELECT * FROM categories
              WHERE categoryid = $categoryid";
    $category = $db->query($query);
    $category = $category->fetch();
    $category_name = $category['categoryName'];

    // Get all categories
    $query = 'SELECT * FROM categories
              ORDER BY categoryID';
    $categories = $db->query($query);

    // Get assessments for selected category
    $query = "SELECT * FROM assessments
              WHERE categoryID = $categoryid
              ORDER BY assessment_id";
    $assessments = $db->query($query);
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
        <div id="sidebar">
            <!-- display a list of categories -->
            <h2>TAGin List</h2>
            <ul class="nav">
            <?php foreach ($categories as $category) : ?>
                <li>
                <a href="?categoryid=<?php echo $category['categoryid']; ?>">
                    <?php echo $category['categoryName']; ?>
                </a>
                </li>
            <?php endforeach; ?>
            </ul>
        </div>

        <div id="content">
            <!-- display a table of assessments -->
            <h3><?php echo $category_name; ?></h3>
            <table>
                <tr>
                    <th>Assessment ID</th>
                    <th>Unit</th>
                    <th>Client</th>
                    <th>Contact Name</th>
                    <th>Address</th>
                    <th>Tracking Out</th>
                    <th>Tracking Return</th>
                    <th>Erin Only</th>
                </tr>
                <?php foreach ($assessments as $product) : ?>
                <tr>
                    <td><?php echo $product['assessment_id']; ?></td>
                    <td><?php echo $product['unit_id']; ?></td>
                    <td><?php echo $product['client_name']; ?></td>
                    <td><?php echo $product['client_contact']; ?></td>
                    <td><?php echo $product['client_address']; ?></td>
                    <td><?php echo $product['tracking_out']; ?></td>
                    <td><?php echo $product['tracking_return']; ?></td>

                    <td><form action="delete_product.php" method="post"
                              id="delete_product_form">
                        <input type="hidden" name="assessment_id"
                               value="<?php echo $product['assessment_id']; ?>" />
                        <input type="hidden" name="assessment_id"
                               value="<?php echo $product['unit_id']; ?>" />
                        <input type="submit" value="Delete" />
                    </form></td>
                </tr>
                <?php endforeach; ?>
            </table>
            <p><a href="add_product_form.php">Add Assessment</a></p>
            <div class="future_updates">
              <p><span class="tag_highlight title">Future updates for this section:</span><br>
              I had to move onto other sections of the teams.achesongroup.com<br>
             domain but there are features that I'd like to add in the near future.</p>
            <ul>
              <li>Schedule Calendar</li>
              <li>Request tagin form</li>
              <li>Links on the sidebar pages</li>
              <li>link to manual nad troubleshooting guide</li>
            </ul>
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
