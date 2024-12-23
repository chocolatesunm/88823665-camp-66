<h1>email:
<?php if(isset($_POST['email'])) { echo $_POST['email']; } ?>
</h1>
<h1>detail:
<?php echo isset($_REQUEST['detail']) ? $_REQUEST['detail'] : " "; ?>
</h1>