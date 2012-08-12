<?php
/**
 * search
 *
 * @package custom
 */
 
 $this->need('header.php');
 ?>

			<div class="post-container clearfix" id="<?php $this->theId(); ?>"> 	 	 	   
				<div class="post clearfix post-note">
<!-- Put the following javascript before the closing </head> tag. -->
<script>
  (function() {
    var cx = '011636564651495854344:lejp2m2dygi';
    var gcse = document.createElement('script'); gcse.type = 'text/javascript'; gcse.async = true;
    gcse.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') +
        '//www.google.com.hk/cse/cse.js?cx=' + cx;
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(gcse, s);
  })();
</script>

<!-- Place this tag where you want both of the search box and the search results to render -->
<gcse:search></gcse:search>
				</div>


				<div class="meta clearfix">
					<div class="tag-list">
						<?php $this->category(','); ?>
						</div>
					
					<div class="alt-meta">
						<?php $this->date('F j, Y'); ?>
					</div>
				</div>
			</div>
				
			 	 	 	   
		
	</section>
</div>

<div id="footer-container">
	<div id="footer">	 	 	   
		<p>这页是搜索呦~~</p>
	</div>
</div>

	<?php $this->need('footer.php'); ?>