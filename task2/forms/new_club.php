<?php
echo ("<form  action='new_add.php' onsubmit=\"return adds();\" method=\"post\" name='add_form'>
	<label for=\"name\">Name</label><br>
	<input type=\"text\" name='name' id='name'><br>
	<label for=\"city\">City</label><br>
	<input type=\"text\" name='city' id='city'><br>
	<label for=\"founded\">Founded</label><br>
	<input type=\"text\" name='founded' id='founded'><br>
	<label for=\"president1\">President First Name</label><br>
    <input type=\"text\" name='president1' id='president1'><br>
    <label for=\"president2\">President Second Name</label><br>
    <input type=\"text\" name='president2' id='president2'><br>
	<label for=\"revenue\">Revenue</label><br>
	<input type=\"text\" name='revenue' id='revenue'><br>
	<label for=\"stadium\">Stadium</label><br>
	<input type=\"text\" name='stadium' id='stadium'><br>
	<label for=\"league\">League</label><br>
	<input type=\"text\" name='league' id='league'><br><br>
	<input type=\"submit\" value='Add new club' id='newclub' name='newclub'>
</form>");