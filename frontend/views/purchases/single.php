<?php
require_once __DIR__ . "/../../Template.php";

Template::header($this->model->purchase_id);
?>

<h1><?= $this->model->purchase_id ?></h1>

<p>
    <b>Id: </b>
    <?= $this->model->purchase_id ?>
</p>

<p>
    <b>Product name: </b>
    <?= $this->model->product_name ?>
</p>

<p>
    <b>Price: </b>
    <?= $this->model->price ?>
</p>

<p>
    <b>Purchase time: </b>
    <?= $this->model->purchase_time ?>
</p>

<?php if ($this->user->user_role === "admin") : ?>

    <p>
        <b>User ID: </b>
        <?= $this->model->user_id ?>
    </p>

<?php endif; ?>


<?php Template::footer(); ?>