<?php $pagename = 'Forms';
include('header.php'); ?>

<!-- - - - - - - - - CONTENT STARTS - - - - - - - - -->

<div class="content">
	<div class="main full">		
		<form action="">
			<fieldset class="genbox col-2">
				<h3>Text stuff</h3>

				<div class="fieldrow text-row">
					<label for="text-input">Text input</label>
					<input type="text" name="text-input" id="text-input" />
				</div>
				
				<div class="fieldrow textarea-row">
					<label for="textarea">Text area</label>
					<textarea name="textarea" id="textarea"></textarea>
				</div>
				
				<div class="fieldrow tel-row">
					<label for="phone">Telephone</label>
					<input type="text" name="phone" class="phone-1" id="phone-1" maxlength="3" /><input type="text" name="phone" class="phone-2" id="phone-2" maxlength="3" /><input type="text" name="phone" class="phone-3" id="phone-3" maxlength="4" />
				</div>
				
				<div class="fieldrow postal-row">
					<label for="postal">Post code</label>
					<input type="text" name="postal" class="postal-1" id="postal-1" maxlength="3" /><input type="text" name="postal" class="postal-2" id="postal-2" maxlength="3" />
				</div>
				
				<div class="fieldrow clear-left text-row multiple">
					<label for="address">Address</label>
					<span>
						<input type="text" name="address" id="address-1" /><a href="#" class="img-txt add">Add</a>
						<input type="text" name="address" id="address-2" /><a href="#" class="img-txt subtract">Minus</a>
					</span>
				</div>
				
				<div class="fieldrow file-row">
					<label for="file-input">File input</label>
					<span><a href="#" class="btn btn-medium"><span>Browse</span></a><input type="text" name="file-input" class="fake-file" id="fake-file" /><input type="file" name="file-input" id="file-input" /></span>
				</div>
			
			</fieldset>
			
			<fieldset class="genbox col-2" style="margin-right:0">
				<h3>Selects, radios and checkboxes</h3>
				
				<div class="fieldrow select-row">
					<label for="select">Select</label>
					<select name="select" id="select">
						<option>- select one -</option>
						<option>Option 1</option>
						<option>Option 2</option>
						<option>Option 3</option>
					</select>
				</div>
				
				<div class="fieldrow radio-row">
					<label for="radio">Radio</label>
					<input type="radio" value="yes" name="radio" id="radio-yes" /> <label for="radio-yes" class="for-boxes">Yes</label> <input type="radio" value="no" name="radio" id="radio-no" /> <label for="radio-no" class="for-boxes">No</label>
				</div>
				
				<div class="fieldrow check-row">
					<label for="option">Checkbox</label>
					<input type="checkbox" name="option" id="option-a" value="a" /> <label for="option-a" class="for-boxes"><span class="mob-hide">Opt<span class="small-hide ">ion</span> </span>A</label> <input type="checkbox" name="option" id="option-b" value="b" /> <label for="option-a" class="for-boxes"><span class="mob-hide">Opt<span class="small-hide">ion</span> </span>B</label> <input type="checkbox" name="option" id="option-c" value="c" /> <label for="option-c" class="for-boxes"><span class="mob-hide">Opt<span class="small-hide">ion</span> </span>C</label>
				</div>
			</fieldset>
			
			<fieldset class="genbox col-2 submit" style="margin-right:0">
				<h3>Buttons</h3>
				<button type="submit" class="btn-lrg"><span>Submit</span></button>
				<a href="#" class="btn btn-lrg btn-cancel"><span>Cancel</span></a><br /><br />
				
				<button type="submit" class="clear-right"><span>Submit</span></button>
				<a href="#" class="btn btn-cancel"><span>Cancel</span></a><br /><br />
				
				<button type="submit" class="btn-small clear-right"><span>Submit</span></button>
				<a href="#" class="btn btn-small btn-cancel"><span>Cancel</span></a>
				
				
				
				
			</fieldset>
		</form>
		<!-- <p class="genbox" style="width:35.5%;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p> -->
		<p class="genbox col-full clear-left">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
  
  
	</div><!-- END .main.full -->

</div><!-- END .content -->
<?php include('footer.php'); ?>