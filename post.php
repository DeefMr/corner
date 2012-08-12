<?php $this->need('header.php'); ?>

			<div class="post-container clearfix" id="<?php $this->theId(); ?>"> 	 	 	   
				<div class="post clearfix post-note">
				
					<a href="#" class="post-type"></a>
						<h3 class="title"><a href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h3>
						<div class="copy"><?php $this->content('Read More..'); ?></div> 
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
					<div class="post-container clearfix">
						<?php $this->need('comments.php'); ?>
					</div>	
				
			  	 	 	   
		
	</section>
</div>

<div id="footer-container">
	<div id="footer">	 	 	   
		<p>裙纸裙纸~</p>
	</div>
</div>

	<?php $this->need('footer.php'); ?>