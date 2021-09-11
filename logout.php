<?php

session_start();
$_SESSION=[];
session_unset;
session_destroy();
header("Location:index.php");
?>
<script type="text/javascript">
window.localStorage.clear();
</script>
