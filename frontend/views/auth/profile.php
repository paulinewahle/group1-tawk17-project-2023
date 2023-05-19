<?php
require_once __DIR__ . "/../../Template.php";

Template::header("Profile");
?>

<p>
    Logged in as <b><?= $this->user->username ?></b>
</p>


<?php if ($this->user->premium === 0) : ?>
    <button>Upgrade To Premium</button>
<?php endif; ?>

<h2>Update Account</h2>
<form action="<?= $this->profile ?> /auth/update" method="post">
    <input type="text" name="username" value=<?= $this->user->username?>> <br> 
    <input type="password" name="password" style="-webkit-text-security: dots;" value=<?= $this->user->password?>> <br>
    <input type="submit" value="Update" class="btn">
</form>

<form action="<?= $this->login ?>/auth/delete" method="post">
    <input type="submit" value="Delete Account" class="btn">
</form>
<!-- <hr> -->

<!-- <h2>Set profile picture</h2>

 <?php if ($this->user->profile_pic_url) : ?>
    <img src="<?= $this->home . $this->user->profile_pic_url?>" alt="" width="100">
<?php endif; ?> 



<form action="<?= $this->home ?>/auth/profile_pic" method="post" enctype="multipart/form-data">
    <input type="file" name="profile_pic"> <br>
    <input type="submit" value="Save" class="btn">
</form> -->

<!-- <hr> -->


<h2>Log out</h2>
<form action="<?= $this->home ?>/auth/logout" method="post">
    <input type="submit" value="Log out" class="btn delete-btn">
</form>

<?php Template::footer(); ?>