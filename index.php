<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">

<style>
 .flex-container-debug {
    position: absolute;
    bottom: 0px;
    right: 0px;
    margin: 20px;
    padding: 10px;
    border: 2px solid #f1f1f1;
    border-radius: 10px;
    background-color: #263238;
}
.flex-item-debug {
    font-weight: bold;
    color: white;
}
</style>

</head>
<body>

    <div class="flex-container-header">
        <div class="flex-item-header">
            <img src="images/logo.png" width="100" height="100">
        </div>
        <div class="flex-item-header">
            <h1>DEMO BANK</h1>
        </div>
    </div>

    <div class="nav-wrapper">
        <div class="topnav" id="theTopNav">
            <a href="#home">HOME</a>
            <a href="#news">NEWS</a>
            <a href="#contact">CONTACT</a>
            <a href="#about">ABOUT US</a>
        </div>
    </div>

    <div class="flex-container-background">
    
        <div class="flex-container">
            <div class="flex-item-0">
                <h1 id="form_header">Your Bank at Your Fingertips.</h1>
            </div>
        </div>

        <div class="flex-container">
            <div class="flex-item-1">
                <form action="" method="post">
                    <div class="flex-item-login">
                        <h2>Welcome</h2>
                    </div>

                    <div class="flex-item">
                        <input type="text" name="cust_uname" placeholder="Enter your Username" required>
                    </div>

                    <div class="flex-item">
                        <input type="password" name="cust_psw" placeholder="Enter your Password" required>
                    </div>

                    <div class="flex-item">
                        <button type="submit">Login</button>
                    </div>
                </form>
            </div>
        </div>

    </div>
    
    <div class="flex-container-debug">
        <div class="flex-item-debug">
        Visitor #: <?php include('counter.php'); ?> <br/>
        Node: <?php echo($_SERVER['HOSTNAME']); ?>
        </div>
    </div>

</body>
</html>