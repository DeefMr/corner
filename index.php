<?php/** * 一个简单的typecho主题. *  * @package Corner Theme  * @author deef * @version 0.1 * @link http://deef.eu */  $this->need('header.php'); ?><?php while($this->next()): $format = PostFormat_Plugin::getFormat();?>	<?php if ($format == 'post') { ?>			<div class="post-container clearfix" id="<?php $this->theId(); ?>"> 	 	 	   				<div class="post clearfix post-note">					<a href="<?php $this->permalink() ?>" class="post-type"></a>						<h3 class="title"><a href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h3> 						<div class="copy"><?php $this->content('Read More..'); ?></div>				</div>				<div class="meta clearfix">					<div class="tag-list">						<?php $this->category(','); ?>					</div>										<div class="alt-meta">						<?php $this->date('F j, Y'); ?>					</div>				</div>                    			</div>	<?php } elseif ($format == 'phrase'){ ?>			<div class="post-container clearfix" id="<?php $this->theId(); ?>"> 	 	 	   				<div class="post clearfix post-quote">					<a href="<?php $this->permalink() ?>" class="post-type"></a>						<blockquote>&ldquo;<?php $this->title() ?>&rdquo;</blockquote>				</div>				<div class="meta clearfix">					<div class="tag-list">						<?php $this->category(','); ?>					</div>										<div class="alt-meta"><?php $this->date('F j, Y'); ?>					</div>				</div>                    			</div>	<?php }?><?php endwhile; ?>	</section></div><div id="footer-container">	<footer>		 							<div class="next-prev clearfix">					<div>			<?php $this->pageLink('&laquo; Prev', 'prev'); ?>			<?php $this->pageLink('Next &raquo;', 'next'); ?>					</div>				</div>		<p>多少只肥兔纸才能组成一只草兔纸呢,唔</p>	</footer></div>	<?php $this->need('footer.php'); ?>	