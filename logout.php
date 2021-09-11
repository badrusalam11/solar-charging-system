<?php

session_start();
$_SESSION=[];
session_unset;
session_destroy();
?>
<script type="text/javascript">
window.localStorage.clear();
window.location.href = "index.php";
</script>
