<div class="wrap">
<?php screen_icon( 'plugins' ); ?>
<h2>General </h2>
<form method="POST" action="">
<table class="form-table">

<tr valign="top">
<th scope="row"><label
for="adminEmail">Admin Email?</label></th>
<td><input type="text" name="adminEmail" size="40" /></td>
</tr>

<tr valign="top">
<th scope="row"><label
for="autoUpdate">Auto Update? (Plugins, Core)</label></th>
<td><input type="checkbox" name="autoUpdate" /></td>
</tr>

<tr valign="top">
<th scope="row"><label
for="hideWordpressVersion">Hide Wordpress Version?</label></th>
<td><input type="checkbox" name="hideWordpressVersion" /></td>
</tr>

<tr valign="top">
<th scope="row"><label
for="disableEditor">Disable Wordpress Editor?</label></th>
<td><input type="checkbox" name="disableEditor" /></td>
</tr>

<tr valign="top">
<th scope="row"><label
for="notifyUpdate">Notify Admin When Updated?</label></th>
<td><input type="checkbox" name="notifyUpdate" /></td>
</tr>

<tr valign="top">
<th scope="row"><label
for="notifyPublished">Notify Admin When Post/Page is Published?</label></th>
<td><input type="checkbox" name="notifyPublished" /></td>
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