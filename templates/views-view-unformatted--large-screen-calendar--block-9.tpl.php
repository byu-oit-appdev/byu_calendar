<?php

/**
 * @file
 * Default simple view template to display a list of rows.
 *
 * @ingroup views_templates
 */
?>
<?php
$current = current_path();
$currentDate = substr($current, -10);

if (preg_match("/^(19|20)\d\d[-](0[1-9]|1[012])[-](0[1-9]|[12][0-9]|3[01])$/", $currentDate)) {
	// is normal
} else {
    $currentDate = date("Y-m-d");
}
$year = substr($currentDate, 0, 4);
$mid = substr($currentDate, -5, 2);
$did = substr($currentDate, -2);

$weekday = date("l", mktime(0, 0, 0, $mid, $did, $year));

$titleFormatted = date(" F j, Y", mktime(0, 0, 0, $mid, $did, $year));

echo '<div class="list-header"><div class="header-weekday-caps list-header-week">' . $weekday . '</div><div class="list-header-fulldate">' . $titleFormatted . '</div></div>';
?>
<?php if (!empty($title)): ?>
  <h3><?php print $title; ?></h3>
<?php endif; ?>
<?php foreach ($rows as $id => $row): ?>
  <div<?php if ($classes_array[$id]) { print ' class="' . $classes_array[$id] .'"';  } ?>>
    <?php print $row; ?>
  </div>
<?php endforeach; ?>
