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

<div class="<?php print $classes;?>" >
<div class="image-box-bg" <?php !empty($css_id) ? print 'id="' . $css_id . '"' : ''; ?>>
  <div class="small-12  photo-container" >
    <?php print $content['top']; ?>
	    <div class="small-12 title-caption">
	    <?php print $content['bottom']; ?>
	  	</div>
  </div>
</div>
</div>
<!-- panels row -->
