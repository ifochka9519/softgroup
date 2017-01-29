<?php
echo ("<form  action='new_add.php' onsubmit=\"return adds();\" method=\"post\" name='add_form'>
	<label for=\"name\">Name</label><br>
	<input type=\"text\" name='name' id='name'><br>
	<label for=\"founded\">Founded</label><br>
	<input type=\"text\" name='founded' id='founded'><br><br>
	<input type=\"submit\" value='Add new trophy' id='newtrophy' name='newtrophy'>
</form>");