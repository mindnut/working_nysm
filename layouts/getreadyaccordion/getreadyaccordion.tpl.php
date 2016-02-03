<?php
/**
 * @file
 * Template for a 3 column panel layout.
 *
 * This template provides a three column panel display layout, with
 * each column roughly equal in width.
 *
 * Variables:
 * - $id: An optional CSS id to use for the layout.
 * - $content: An array of content, each item in the array is keyed to one
 *   panel of the layout. This layout supports the following sections:
 *   - $content['left']: Content in the left column.
 *   - $content['middle']: Content in the middle column.
 *   - $content['right']: Content in the right column.
 */
?>
<ul class="accordion" data-accordion>
  <li class="accordion-navigation">
   <a href="#preparepanel1a"><i class="fa fa-bus"></i>Directions and Arrival Procedures</a>
    <div id="preparepanel1a" class="content">
     <?php print $content['directions']; ?>
    </div>
  </li>
  <li class="accordion-navigation">
  <a href="#preparepanel2a"><i class="fa fa-balance-scale"></i>Museum Conduct Policy</a>
    <div id="preparepanel2a" class="content">
     <?php print $content['conduct']; ?>
    </div>
  </li>
  <li class="accordion-navigation">
  <a href="#preparepanel3a"><i class="fa fa-cutlery"></i>Meal Options</a>
    <div id="preparepanel3a" class="content">
    <?php print $content['meals']; ?>
	 </div>
  </li>
  <li class="accordion-navigation">
  <a href="#preparepanel4a"><i class="fa fa-info-circle"></i>Information for Chaperones</a>
    <div id="preparepanel4a" class="content">
    <?php print $content['chaperones']; ?>
   </div>
  </li>
  <li class="accordion-navigation">
  <a href="#preparepanel5a"><i class="fa fa-map"></i>Floor Plans</a>
    <div id="preparepanel5a" class="content">
    <?php print $content['floorplan']; ?>
   </div>
  </li>
  <li class="accordion-navigation">
  <a href="#preparepanel6a"><i class="fa fa-university"></i>Museum Facts</a>
    <div id="preparepanel6a" class="content">
    <?php print $content['museumfacts']; ?>
   </div>
  </li>
</ul>

 <!-- panels row -->
