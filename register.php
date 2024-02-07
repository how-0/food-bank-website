<html>
<meta charset='utf-8'>
<meta name='viewport' content='width=device-width, initial-scale=1'>
<link rel="stylesheet" href="loginstyles.css">
<body>
    <div class="center">
      <h1>Register</h1>
      <form method="post" action="registerA.php">
        <div class="txt_field">
          <input type="text" id="username" name ="username" required>
          <span></span>
          <label>Username</label>
        </div>
        <div class="txt_field">
          <input type="number" id="contact" name="contact" required>
          <span></span>
          <label>Contact Number</label>
        </div>
		<div style="margin:10px;font-size=16px;color: #black;">
        <input type="radio" id="m" name="sex" value="male">
		<label for="m">Male</label> 
		<input type="radio" id="f" name="sex" value="female">
		<label for="f">Female</label><br>
        </div>
		<div class="txt_field">
          <input type="password" id = "password" name="password" required>
          <span></span>
          <label>Password</label>
        </div>
		<div style="margin:10px;font-size=16px;color: #black;">
        <input type="radio" id="a" name="position" value="admin">
		<label for="a">Admin</label> 
		<input type="radio" id="u" name="position" value="user">
		<label for="u">User</label><br>
        </div>
        <input type="submit" value="Register">
        <div class="signup_link">
          Already a member? <a href="login.php">Login</a>
        </div>
      </form>
    </div>
</body>
</html>