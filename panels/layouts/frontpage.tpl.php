<!--frontpage.tpl.php-->

<div class="frontpage clearfix" <?php if (!empty($css_id)) { print "id=\"$css_id\""; } ?>>	
	<div class="panel-content">
    <div class="left">
    	<?php if (!empty($content['top'])): ?>
      <div class="panel-top">
        <?php print $content['top']; ?>  
      </div>
    	<?php endif; ?>

      <div class="panel-left">
  	    <?php print $content['left']; ?>  
  	  </div>
  	  <div class="panel-middle">
        <?php print $content['middle']; ?>
        <div class="prevent-collapse"></div>
  	  </div>
    </div>
    <div class="right">
      <div class="panel-right">
  	    <?php print $content['right']; ?>  
  	  </div>
	  
    </div>
</div>

	<?php if (!empty($content['bottom'])): ?>
  <div class="panel-bottom">
    <?php print $content['bottom']; ?>  
  </div>
	<?php endif; ?>	


</div>
<!-- / frontpage.tpl.php-->
