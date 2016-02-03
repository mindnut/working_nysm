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

<li class="accordion-navigation">
  <a class="section-title" href="#pane<?php print $content['paneid']; ?>"><i class="fa arrowed"></i><?php print $content['title']; ?></a>
    <div id="pane<?php print $content['paneid']; ?>" class="content">
     <?php print $content['panecontent']; ?>
    </div>
 </li>