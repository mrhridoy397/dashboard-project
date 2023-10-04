<?php
require_once("./core.php");
$sql = "SELECT `categories_id`, `categories_name`, `categories_active`, `categories_status	` FROM `categories` WHERE `categories_status` = 1";
$result = $con->query($sql);

$output = array('data' => array());

if ($result->num_rows > 0) {
  $activeCategory = "";
  $CategoryStatus = "";
  while ($row = $result->fetch_array()) {
    $CategoryId = $row[0];
    if ($row[2] == 1) {
      // activate member
      $activeCategorys = "<label class='label label-success'>Available</label>";
    } else {
      // deactivate member
      $activeCategorys = "<label class='label label-danger'>Not Available</label>";
    }
    if ($row[3] == 1) {
      // activate member
      $CategoryStatus = "<label class='label label-success'>Active</label>";
    } else {
      // deactivate member
      $CategoryStatus = "<label class='label label-danger'>Not Active</label>";
    }

    $button = '<div class="btn-group">
        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Action <span class="caret"></span>
        </button>
        <ul class="dropdown-menu">
          <li><a type="button" data-toggle="modal" data-target="#editCategoryModal" onclick="editCategorys(' . $CategoryId . ')"> <i class="glyphicon glyphicon-edit"></i> Edit</a></li>
          <li><a type="button" data-toggle="modal" data-target="#deleteCategoryModal" onclick="removeCategorys(' . $CategoryId . ')"> <i class="glyphicon glyphicon-trash"></i> Remove</a></li>       
        </ul>
      </div>';

    $output['data'][] = array(
      $CategoryId,
      $row[1],
      $activeCategorys,
      $CategoryStatus,
      $button
    );
  }
}

$con->close();
echo json_encode($output);
