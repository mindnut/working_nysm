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
   <a href="#classpanel1a"><i class="fa arrowed"></i>Pre-K and Kindergarten</a>
    <div id="classpanel1a" class="content">
     <?php print $content['toppanel']; ?>
    </div>
  </li>
  <li class="accordion-navigation">
  <a href="#classpanel2a"><i class="fa arrowed"></i>Elementary</a>
    <div id="classpanel2a" class="content">
     <?php print $content['midpanel']; ?>
    </div>
  </li>
  <li class="accordion-navigation">
  <a href="#classpanel3a"><i class="fa arrowed"></i>High School</a>
    <div id="classpanel3a" class="content">
    <?php print $content['botpanel']; ?>
	 </div>
  </li>
</ul>

 <!-- panels row -->
