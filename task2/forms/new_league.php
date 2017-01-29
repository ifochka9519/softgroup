<?php
echo ("<form  action='new_add.php' onsubmit=\"return adds();\" method=\"post\" name='add_form'>
	<label for=\"name\">Name</label><br>
	<input type=\"text\" name='name' id='name'><br>
	<label for=\"country\">Country</label><br>
	<input type=\"text\" name='country' id='country'><br>
	<label for=\"top_place\">Top-place</label><br>
	<input type=\"text\" name='top_place' id='top_place'><br>
	<label for=\"president1\">President First Name</label><br>
    <input type=\"text\" name='president1' id='president1'><br>
    <label for=\"president2\">President Second Name</label><br>
    <input type=\"text\" name='president2' id='president2'><br><br>
	<input type=\"submit\" value='Add new league' id='newleague' name='newleague'>
</form>");