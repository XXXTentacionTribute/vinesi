<?php require_once('../../../private/initialize.php'); ?>
<?php include('../../../private/shared/header.php'); ?>

unset($_SESSION['username']);
// or you could use
// $_SESSION['username'] = NULL;

redirect_to(url_for('files/login.php'));

?>
