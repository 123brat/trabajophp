<!-- formulario de login -->
<style>
    .login {
        background-color: blue;
        width: 100%;
        max-width: 220px;
        height: 30px;
        border-radius: 5px;
        color: #fff;
        border: none;
        cursor: pointer; 
    }

    .container {
        position: relative;
        left: 50%;
        transform: translateX(-50%);
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
        padding: 20px; 
        border-radius: 10px;
        background-color: #f9f9f9; 
    }

    .ususario,
    .contraseña {
        width: 100%;
        max-width: 220px;
        height: 30px;
        border-radius: 5px;
        margin-bottom: 10px;
        padding: 5px;
        border: 1px solid #ccc;
    }

    h1 {
        text-align: center;
        font-size: 30px;
        margin-bottom: 20px;
    }
    .iniciara{
        position: relative;
        left: 820px;
    }
</style>

<div class="container">
    <form action="login.php" method="post">
        <h1>LOGIN</h1>
        <div class = "iniciara">
        <input type="text" id="user" name="user" placeholder="User" class="ususario" required>
        <br><br>
        <input type="password" id="password" name="password" placeholder="Password" class="contraseña" required>
        <br><br>
        
        <input type="submit" value="LOGIN" class="login">
    </form>
    <?php include './inclides/footer.php'; ?>

        </div>
</div>