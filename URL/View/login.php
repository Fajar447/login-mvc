<html>
<head><center><h2>Login</h2></center></head>
<style>
    body {
        background-color: skyblue;
        font-family: 'Times New Roman', Times, serif;
        font-size: 20px; 
    }
</style>
    <?php
    $reslt;
    ?>

    <form action="" method="POST">
        <center>
       <p>
            <label>username</label>
            <input id="username" value="" name="username" type="text" required="required" /><br>
        </p>
        <p>
            <label>password</label>
            <input id="password" name="password" type="text" required="required" />
        </p>
        <br />
        <p>
            <button type="submit" name="submit"><span>Login</span></button>
            <button type="reset"><span>reset</span></button>
        </p>
    </form>
</center>
</body>
</html>