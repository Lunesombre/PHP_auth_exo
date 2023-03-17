<?php
$title="Log in";
session_start();
$_SESSION['isConnected']=false;
require_once 'classes/ConnexionMessage.php';
require_once 'layout/header.php';


?>

<h1>Please identify yourself</h1>
<div>
    <form action="auth.php" method="POST">

        <input type="text" name="userName" id="userName" placeholder="User name">
        <br />
        <input type="password" name="password" id="password" placeholder="Password">
        <br />
        <input type="submit" value="Log in">
    </form>
</div>

<?php if (array_key_exists('msg', $_GET)) { ?>
    <div class="alert alert-danger">
        <?php echo ConnexionMessages::getConnexionMessage(intval($_GET['msg'])); ?>
    </div>
<?php } ?>


























<?php
require_once 'layout/footer.php';