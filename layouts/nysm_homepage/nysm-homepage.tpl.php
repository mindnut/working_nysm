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
 <div class="banner-image">   <?php print $content['top']; ?>
  </div>
<div class="row main-body" <?php !empty($css_id) ? print 'id="' . $css_id . '"' : ''; ?>>

  <div class="row">
  <div class="medium-4 columns col-exhibitions">
  <h4 class="hp-column-title">Now on View</h4>
    <?php print $content['left']; ?>
  </div>
  <div class="medium-5 columns col-announcements">
  <h4 class="hp-column-title">Events, News & Announcments</h4>
    <?php print $content['middle']; ?>
  </div>
  <div class="medium-3 columns col-events">
 <h4 class="hp-column-title"><a href="/programs">Program Calendar  <i class="fa right fa-calendar"> view all</i></a></h4>
    <?php print $content['right']; ?>
  </div>
  </div>
    <div class="medium-12">
    <?php print $content['bottom']; ?>
  </div>
</div> <!-- panels row -->
