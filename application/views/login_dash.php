<h2>Login</h2>
<form action='users/login' method='post'>
	<p>Login: <input type='text' name='email'></p>
	<p>Password: <input type='password' name='password'></p>
	<input type='submit'>
	<input type='hidden' name='action' value='login'>
</form>

<h3>Register</h3>

<form action='/users/register' method='post'>
	<p>First Name: <input type="text" name="first_name"></p>
	<p>Last Name: <input type="text" name="last_name"></p>		
	<p>Email: <input type="text" name="email"></p>
	<p>Password: <input type="password" name="password"></p>
	<p>Confirm Password: <input type="password" name="confirm"></p>
	<input type="submit" name="action" value="Register">
</form>	