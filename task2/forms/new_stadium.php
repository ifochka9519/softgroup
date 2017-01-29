<?php
echo ("<form  action='new_add.php' onsubmit=\"return adds();\" method=\"post\" name='add_form'>
	<label for=\"name\">Name</label><br>
	<input type=\"text\" name='name' id='name'><br>
	<label for=\"city\">City</label><br>
	<input type=\"text\" name='city' id='city'><br>
	<label for=\"founded\">Founded</label><br>
	<input type=\"text\" name='founded' id='founded'><br>
	<label for=\"capacity\">Capacity</label><br>
	<input type=\"text\" name='capacity' id='capacity'><br><br>
	<input type=\"submit\" value='Add new stadium' id='newstadium' name='newstadium'>
</form>");