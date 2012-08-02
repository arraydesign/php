<?php /* $meta_title = ''; */
/* $meta_desc = ''; */
/* $meta_keys = ''; */
$basepage = 'home';
/* $baseclass = ''; */
include('header.php'); ?>

<!-- - - - - - - - - - CONTENT STARTS - - - - - - - - - -->

<div class="content">
	<div class="main">
		<div class="genbox col-full">
			<h1>Column Full</h1>
			<p>Cras arcu. Aenean nulla massa, facilisis sit amet, pulvinar eget, imperdiet id, quam. Quisque pharetra tincidunt tellus.</p>
		</div>
		
		<div class="genbox col-full border">
			<h2>Column Full and Border</h2>
			<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Sed luctus tincidunt est. Phasellus condimentum arcu sed tortor. Phasellus auctor mollis ligula. Praesent ornare. Morbi sollicitudin diam. Nulla sollicitudin.</p>
		</div>
		
		<div class="genbox col-3 clear-left">
			<h3>Floated Column</h3>
			<p>Cras arcu. Aenean nulla massa, facilisis sit amet, pulvinar eget, imperdiet id, quam quisque pharetra tincidunt tellus.</p>
		</div>
		
		<div class="genbox col-3">
			<h3>Floated Column</h3>
			<p>Cras arcu. Aenean nulla massa, facilisis sit amet, pulvinar eget, imperdiet id, quam quisque pharetra tincidunt tellus.</p>
		</div>
		
		<div class="genbox col-3" style="margin-right: 0pt;">
			<h3>Floated Column</h3>
			<p>Cras arcu. Aenean nulla massa, facilisis sit amet, pulvinar eget, imperdiet id, quam quisque pharetra tincidunt tellus.</p>
		</div>
		
		<div class="genbox col-2 clear-left">
			<h4>Floated Column</h4>
			<p>Cras arcu. Aenean nulla massa, facilisis sit amet, pulvinar eget, imperdiet id, quam. Quisque pharetra tincidunt tellus.</p>
			<ul>
				<li>List Item
					<ul>
						<li>List Item</li>
						<li>List Item</li>
						<li>List Item</li>
					</ul>
				</li>
				<li>List Item</li>
				<li>List Item</li>
				<li>List Item
					<ol>
						<li>List Item 1</li>
						<li>List Item 2</li>
						<li>List Item 3</li>
					</ol>
				</li>
			</ul>
		</div>
		
		<div class="genbox col-2" style="margin-right:0">
			<h4>Floated Column</h4>
			<p>Cras arcu. Aenean nulla massa, facilisis sit amet, pulvinar eget, imperdiet id, quam. Quisque pharetra tincidunt tellus.</p>
			<ol>
				<li>List Item 1
					<ul>
						<li>List Item</li>
						<li>List Item</li>
						<li>List Item</li>
					</ul>
				</li>
				<li>List Item 2</li>
				<li>List Item 3</li>
				<li>List Item 4
					<ol>
						<li>List Item 1</li>
						<li>List Item 2</li>
						<li>List Item 3</li>
					</ol>
				</li>
			</ol>	
		</div>

	</div><!-- END .main -->
	<?php include('aside.php');?>

</div><!-- END .content -->
<?php include('footer.php'); ?>