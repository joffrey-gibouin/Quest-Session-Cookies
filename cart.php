<?php
require 'inc/head.php';
require 'inc/data/products.php';
if(empty($_SESSION['loginname'])) {
    header('location: login.php');
}

?>
<section class="cookies container-fluid">
    <div class="row">
        <?php if (isset($_SESSION['cookies']));?>
        <ul>
            <?php $cookies = $_SESSION['cookies'];
            foreach ($cookies as $id => $count) {
                $cookieName = $catalog[$id]['name']; ?>
            <li><?= $count . ' - '. $cookieName?></li>
            <?php  } ?>
        </ul>

    </div>
</section>
<?php require 'inc/foot.php'; ?>
