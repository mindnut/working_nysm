<!--.page -->
  <!--.l-header region -->
  <header role="banner" class="l-header ">


<div class="row medium-12 ">

  <div class="logo show-for-medium-up medium-8 columns "> 
     <a href="/" title="<?php print t('Home'); ?>" rel="home" > <img src="/<?php print path_to_theme() . '/images/shieldmark.png'?>" alt="<?php print t('Home'); ?>" /> </a>
  </div>

 <div class="small-wordmark show-for-small-only columns "> 
     <a href="/" title="<?php print t('Home'); ?>" rel="home" > <img src="/<?php print path_to_theme() . '/images/fatshield50.png'?>" alt="<?php print t('Home'); ?>" /> </a>
  </div>

  <div class="columns medium-4 small-7 ">
     <?php if (!empty($page['toplinks'])): ?>
       <div class="toplinks">
           <?php print render($page['toplinks']); ?>
       </div>
    <?php endif; ?>
  </div>
 
 <div class="right small-2 show-for-small-only mobilenav">
       <?php if (!empty($page['mainmenu'])): ?>
        <?php print render($page['mainmenu']); ?>
       <?php endif; ?>
  </div>

</div>
  

  <div class="<?php print $top_bar_classes; ?> hide-for-small-only nysmnav">
       <?php if (!empty($page['mainmenu'])): ?>
        <?php print render($page['mainmenu']); ?>
       <?php endif; ?>
  </div>

  </header>

  <!--/.l-header -->
<div id="main" role="document" class="page">
  <?php if (!empty($page['featured'])): ?>
    <!--/.featured -->
    <section class="l-featured row">
      <div class="large-12 columns">
        <?php print render($page['featured']); ?>
      </div>
    </section>
    <!--/.l-featured -->
  <?php endif; ?>
  <?php if ($messages && !$zurb_foundation_messages_modal): ?>
    <!--/.l-messages -->
    <section class="l-messages row">
      <div class="large-12 columns">
        <?php if ($messages): print $messages; endif; ?>
      </div>
    </section>
    <!--/.l-messages -->
  <?php endif; ?>
  <?php if (!empty($page['help'])): ?>
    <!--/.l-help -->
    <section class="l-help row">
      <div class="large-12 columns">
        <?php print render($page['help']); ?>
      </div>
    </section>
    <!--/.l-help -->
  <?php endif; ?>
  <main role="main" >
      <?php if (!empty($page['highlighted'])): ?>
        <div class="highlight panel callout">
          <?php print render($page['highlighted']); ?>
        </div>
      <?php endif; ?>
      <a id="main-content"></a>
      <?php if ($title && !$is_front): ?>
        <?php print render($title_prefix); ?>
        <h1 id="page-title" class="title"><?php print $title; ?></h1>
        <?php print render($title_suffix); ?>
      <?php endif; ?>
      <?php if (!empty($page['subheader'])): ?>
      <?php print render($page['subheader']); ?>
      <?php endif; ?>
      <?php if (!empty($tabs)): ?>
         <?php if (!empty($page['subheader'])): ?>
          <?php endif; ?>
        <?php print render($tabs); ?>
        <?php if (!empty($tabs2)): print render($tabs2); endif; ?>
      <?php endif; ?>
      <?php if ($action_links): ?>
        <ul class="action-links">
          <?php print render($action_links); ?>
        </ul>
      <?php endif; ?>
      <?php print render($page['content']); ?>
    <!--/.main region -->
    <?php if (!empty($page['sidebar_first'])): ?>
      <aside role="complementary" class="<?php print $sidebar_first_grid; ?> sidebar-first columns sidebar">
        <?php print render($page['sidebar_first']); ?>
      </aside>
    <?php endif; ?>

    <?php if (!empty($page['sidebar_second'])): ?>
      <aside role="complementary" class="<?php print $sidebar_sec_grid; ?> sidebar-second columns sidebar">
        <?php print render($page['sidebar_second']); ?>
      </aside>
    <?php endif; ?>
  </main>
  <!--/.main-->
  <?php if (!empty($page['triptych_first']) || !empty($page['triptych_middle']) || !empty($page['triptych_last'])): ?>
    <!--.triptych-->
    <section class="l-triptych row">
      <div class="triptych-first large-4 columns">
        <?php print render($page['triptych_first']); ?>
      </div>
      <div class="triptych-middle large-4 columns">
        <?php print render($page['triptych_middle']); ?>
      </div>
      <div class="triptych-last large-4 columns">
        <?php print render($page['triptych_last']); ?>
      </div>
    </section>
    <!--/.triptych -->
  <?php endif; ?>
    </div>
  <?php if ($messages && $zurb_foundation_messages_modal): print $messages; endif; ?>

  <div class="nysm-footer">
  <?php if (!empty($page['footer_firstcolumn']) || !empty($page['footer_secondcolumn']) || !empty($page['footer_thirdcolumn']) || !empty($page['footer_fourthcolumn'])): ?>
    <!--.footer-columns -->

    <section class="row l-footer-columns">
      <?php if (!empty($page['footer_firstcolumn'])): ?>
        <div class="footer-first large-5 columns">
          <?php print render($page['footer_firstcolumn']); ?>
        </div>
      <?php endif; ?>
           <?php if (!empty($page['footer_thirdcolumn'])): ?>
        <div class="footer-third large-3 columns">
          <?php print render($page['footer_thirdcolumn']); ?>
        </div>
      <?php endif; ?>
      <?php if (!empty($page['footer_fourthcolumn'])): ?>
        <div class="footer-fourth large-4 columns">
          <?php print render($page['footer_fourthcolumn']); ?>
        </div>
      <?php endif; ?>
    </section>
    <!--/.footer-columns-->
  <?php endif; ?>

  </div>
  <!--.l-footer-->
  <footer class="l-footer panel" role="contentinfo">
    <?php if (!empty($page['footer'])): ?>
      <div class="footer large-12 columns">
        <?php print render($page['footer']); ?>
      </div>
    <?php endif; ?>
    <?php if ($site_name) :?>
      <div class="copyright large-12 columns">
        &copy; <?php print date('Y') . ' ' . check_plain($site_name) . ' ' . t('All rights reserved.'); ?>
      </div>
    <?php endif; ?>
  </footer>
  <!--/.footer-->
<!--/.page -->