<style>

body {
    font-family: Arial, sans-serif;
    background: #FDE8D3;
    padding: 40px;
}

.login-box {
    width: 350px;
    margin: auto;
    background: #DAEBE3;
    padding: 30px;
    border-radius: 15px;
    box-shadow: 0 8px 20px rgba(101,113,102,0.2);
}

h2 {
    text-align: center;
    color: #657166;
}

input {
    width: 100%;
    padding: 10px;
    margin-bottom: 15px;
    border-radius: 8px;
    border: none;
}

.show-password {
    display: flex;
    align-items: center;
    gap: 8px;
    margin: -4px 0 15px;
    color: #657166;
    font-size: 14px;
}

.show-password input {
    width: auto;
    margin: 0;
}

button {
    width: 100%;
    padding: 10px;
    background: #99CDD8;
    color: #657166;
    border: none;
    border-radius: 8px;
    font-weight: bold;
}

</style>


<div class="login-box">

<h2>Login</h2>

<?php if (!empty($error)): ?>
    <p style="color: #a33;" role="alert"><?= htmlspecialchars($error, ENT_QUOTES, 'UTF-8') ?></p>
<?php endif; ?>

<form method="POST" action="/login">

<label>Username</label>
<input type="text" name="username" value="admin" autocomplete="username" required>


<label>Password</label>
<input id="password" type="password" name="password" value="admin123" autocomplete="current-password" required>

<label class="show-password">
    <input id="show-password" type="checkbox">
    Show password
</label>


<button type="submit">
    Login
</button>

</form>

</div>

<script>
document.getElementById('show-password').addEventListener('change', function () {
    document.getElementById('password').type = this.checked ? 'text' : 'password';
});
</script>