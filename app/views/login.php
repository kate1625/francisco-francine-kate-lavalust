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

<form method="POST" action="/login">

<label>Username</label>
<input type="text" name="username" required>


<label>Password</label>
<input type="password" name="password" required>


<button type="submit">
    Login
</button>

</form>

</div>