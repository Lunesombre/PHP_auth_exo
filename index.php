<?php
$title="Home";
require_once 'classes/ConnexionMessage.php';

session_start();
if (!isset($_SESSION['isConnected'])){
    $_SESSION['isConnected']=false;
}

require_once 'layout/header.php';
// var_dump($_SESSION);
?>

<h1>Welcome to this exercise</h1>

<?php if (array_key_exists('msg', $_GET)) { ?>
    <div class="alert alert-success">
        <?php echo ConnexionMessages::getConnexionMessage(intval($_GET['msg'])); ?>
    </div>
<?php } ?>

<div>
    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ratione odio unde exercitationem sapiente pariatur eum est nobis iusto a commodi placeat laborum, mollitia necessitatibus consequuntur maxime voluptatum blanditiis, accusamus saepe?
    Impedit, veniam illo. Accusantium beatae dignissimos modi magni tenetur pariatur exercitationem architecto facere, praesentium laborum. Nostrum distinctio corporis eius commodi aspernatur sapiente dolor inventore. Aliquid non quae quibusdam laborum quasi?
    Aspernatur autem, maiores illo eum accusantium velit error praesentium optio harum recusandae aliquid ipsum perspiciatis dicta sapiente blanditiis id animi dolorem ut eaque aliquam nihil officia! Autem nisi reiciendis fugiat?
    Doloribus minus magni tenetur necessitatibus iusto fugit dignissimos ipsum id maxime delectus nulla modi, eos quaerat impedit eaque, accusamus itaque exercitationem nobis sint nemo quo totam! Aperiam in enim amet.
    Pariatur quidem animi atque. Possimus facilis nesciunt voluptate magni autem commodi illum minus, ipsum eos id sed voluptatibus ipsam, beatae facere? Non, vel eos iusto cum iste recusandae nobis pariatur!
</div>






































<?php
require_once 'layout/footer.php';