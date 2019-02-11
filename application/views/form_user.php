<form action="<?php echo site_url('Welcome/insertUser') ?>" method="get">
	<input type="text" name="id" placeholder="id" required>
    <input type="text" name="password" placeholder="password" required>
    <input type="text" name="username" placeholder="username" required>
    <input type="text" name="role" placeholder="role" required>
	<input type="submit" value="Login"></form>
</form>