<?php

/**
 * @file
 * Default theme implementation to display a single Drupal page.
 *
 * MODULES/SYSTEM/PAGE.TPL.PHP
 */
?>

  <div id="wrapper">

    <div id="header">

      <?php if ($logo): ?>
        <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
          <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
        </a>
      <?php endif; ?>

      <?php if ($site_name || $site_slogan): ?>

        <!-- Header Title and Slogan -->

          <?php if ($site_name): ?>
            <?php if ($title): ?>
              <div class="site-name"><strong>
                <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home"><span><?php print $site_name; ?></span></a>
              </strong></div>

            <?php else: /* Use h1 when the content title is empty */ ?>
              <h1 class="site-name">
                <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home"><span><?php print $site_name; ?></span></a>
              </h1>

            <?php endif; ?>


          <?php endif; ?>

          <?php if ($site_slogan): ?>
            <div id="site-slogan"><?php print $site_slogan; ?></div>
          <?php endif; ?>

          <!-- -->

      <?php endif; ?>

      <?php print render($page['header']); ?>

    </div> <!-- /#header -->


<?php if ($main_menu): ?>
      <div id="navigation">
        <?php print theme('links__system_main_menu', array('links' => $main_menu, 'attributes' => array('id' => 'main-menu', 'class' => array('links', 'inline', 'clearfix')), 'heading' => t('Main menu'))); ?>

      </div> <!-- /#navigation -->
    <?php endif; ?>


    <?php if ($breadcrumb): ?>
      <?php print $breadcrumb; ?>
    <?php endif; ?>

    <?php print $messages; ?>

<div id="container">

<?php if ($page['sidebar_left']): ?>
        <div id="sidebar-left">
          <?php print render($page['sidebar_left']); ?>
        </div> <!-- /#sidebar-left -->
      <?php endif; ?>

      <div id="content">
        <?php if ($page['highlighted']): ?><div id="highlighted"><?php print render($page['highlighted']); ?></div><?php endif; ?>
        <a id="main-content"></a>
        <?php print render($title_prefix); ?>
        <?php if ($title): ?><h1 class="title" id="page-title"><?php print $title; ?></h1><?php endif; ?>
        <?php print render($title_suffix); ?>
        <?php if ($tabs): ?><div class="tabs"><?php print render($tabs); ?></div><?php endif; ?>
        <?php print render($page['help']); ?>
        <?php if ($action_links): ?><ul class="action-links"><?php print render($action_links); ?></ul><?php endif; ?>
        <?php print render($page['content']); ?>
        <?php print $feed_icons; ?>
      </div> <!-- /#content -->

     <?php if ($page['sidebar_right']): ?>
        <div id="sidebar-right">
         <?php print render($page['sidebar_right']); ?>
       </div><!-- /#sidebar-right -->
     <?php endif; ?>

</div> <!-- /#container -->

    <footer>
      <?php print render($page['footer']); ?>
   </footer> <!-- /#footer -->

  </div> <!-- /#wrapper -->
