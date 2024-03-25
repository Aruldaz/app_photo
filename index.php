<?php
include "libs/load.php";
?>

<!doctype html>
<html lang="en" data-bs-theme="auto">
<?php
load_tempate('_head');
?>
  <body>

        
    <?php
    load_tempate('_header');
    ?>

<main>

<?php
load_tempate('_calltoaction');
?>

<?php
load_tempate('_post');
?>
</main>

<?php
load_tempate('_footer');
?>
<script src="assets/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
