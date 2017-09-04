
<?php
error_reporting(0);

session_start();
session_destroy();
if (session_destroy()){
header("Location: index.php");
}
?>
<script type="text/javascript">
setTimeout(function(){window.location.href='index.php'}, 0001);
</script>


