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
<div class="banner-image"> <?php print $content['banner']; ?>
<div class="pagesubnav"><?php print $content['subnav']; ?></div></div>

<div class="row main-body" <?php !empty($css_id) ? print 'id="' . $css_id . '"' : ''; ?>>
  
  <div class="medium-12 ">
    <?php print $content['top']; ?>
  </div>

  <div class="medium-3 columns">
    <?php print $content['middleleft']; ?>
  </div>
  <div class="medium-9 columns">
    <?php print $content['middleright']; ?>
  </div>

  <div class="medium-12 ">
    <?php print $content['bottom']; ?>
  </div>

</div> <!-- panels row -->
