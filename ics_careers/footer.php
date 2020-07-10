
    </div><!-- /#wrapper.container -->

<div id="footer" class="footer-section">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
         &copy; <?php echo date("Y"); ?> | 
        <?php 
          if($copyrights = ot_get_option('copyrights')) { 
            echo $copyrights;
          }
        ?>
      </div>
    </div>
  </div>
</div>
<div id="back-top" class="hidden-xs"> </div>
<?php wp_footer(); ?>
</body>
</html>
