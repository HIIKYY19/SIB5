
<!DOCTYPE html>
<html>
<head>
    <title>Form Login</title>
</head>
<style>
    body{
        background-color: #9EDDFF;
    }
    input{
        width: 35%;
        padding: 10px;
        border: 1px;
        border-radius: 5px;
    }
    button{
        padding: 10px 15px;
        border: none;
        border-radius: 9px;
        background-color: #007BFF;
        color: #fff;
        cursor: pointer;
    }
</style>
<body>
    <h1>FORM LOGIN</h1>
    <form method="post" action="login.php">
        <label for="username">USERNAME</label><br>
        <input type="text" name="username" id="username" placeholder="Masukkan Username" ><br><br>
        <label for="password">PASSWORD</label><br>
        <input type="password" name="password" id="password" placeholder="Masukkan Password" ><br><br>
        <button>SUBMIT</button>
    </form>
    
    <?php
    // login function
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST["username"];
        $password = $_POST["password"];

        // panggil login function untuk cek
        if (cekLogin($username, $password)) {
            header("Location: admin.php");
            exit;
        } else {
            echo "<p>Username atau password salah.</p>";
        }
    }
    ?>

    <?php
    //Function untuk cek login
    function cekLogin($username, $password) {
        if ($username === "MRizky" && $password === "IKYY") {
            return true;
        } else {
            return false;
        }
    }
    ?>
</body>
</html>