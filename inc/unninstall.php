<div class="wrap">
<?php screen_icon( 'plugins' ); ?>
<h2>My Plugin</h2>
<form method="POST" action="">
<table class="form-table">
<tr valign="top">
<th scope="row"><label for="fname">First
Name</label></th>
<td><input maxlength="45" size="25" name="fname"
/></td>
</tr>
<tr valign="top">
<th scope="row"><label for="lname">Last
Name</label></th>

<td><input id="lname" maxlength="45" size="25"
name="lname" /></td>
</tr>
<tr valign="top">
<th scope="row"><label for="color">Favorite
Color</label></th>
<td>
<select name="color">
<option value="orange">Orange</option>
<option value="black">Black</option>
</ select>
</td>
</tr>

<tr valign="top">
<th scope="row"><label
for="featured">Auto Update?</label></th>
<td><input type="checkbox" name="autoupdate" /></td>
</tr>

<tr valign="top">
<th scope="row"><label
for="gender">Gender</label></th>
<td>
<input type="radio" name="gender" value="male"
/> Male
<input type="radio" name="gender"
value="female" /> Female
</td>
</tr>
<tr valign="top">
<th scope="row"><label for="bio">Bio</label></th>
<td><textarea name="bio"></textarea></td>
</tr>
<tr valign="top">
<td>
<input type="submit" name="save" value="Save
Options"
class="button-primary" />
<input type="submit" name="reset" value="Reset"
254
class="button-secondary" />
</td>
</tr>
</table>
</form>
</div>