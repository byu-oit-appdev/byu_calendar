<?php

/**
 * @file
 * This template is used to print a single field in a view.
 *
 * It is not actually used in default Views, as this is registered as a theme
 * function which has better performance. For single overrides, the template is
 * perfectly okay.
 *
 * Variables available:
 * - $view: The view object
 * - $field: The field handler object that can process the input
 * - $row: The raw SQL result that can be used
 * - $output: The processed output that will normally be used.
 *
 * When fetching output from the $row, this construct should be used:
 * $data = $row->{$field->field_alias}
 *
 * The above will guarantee that you'll always get the correct data,
 * regardless of any changes in the aliasing that might happen if
 * the view is modified.
 */
?>
    <?php 
$field = $row->field_field_event_date_1[0];
$classicDate = $row->field_field_event_date_1[0]['raw']['value'];


//$classicDate =
//print $output; 

$year = substr($classicDate, 0, 4);
$mid = substr($classicDate, 5, 2);
$did = substr($classicDate, 8, 2);
$day = ltrim($did, '0');

$time = mktime(0, 0, 0, $mid, $did, $year);
$month = date("F", $time);

echo '<div class="list-view date-square">' . 
    '<div class = "month">' . $month . '</div>' . 
    '<div class = "day">' . $day . '</div>' . 
    '<div class = "year">' . $year . '</div>' .  
    '</div>';

?>