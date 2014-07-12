<?php
/* template head */
/* end template head */ ob_start(); /* template body */ ?><h1>This is the Homepage. Inserted into _layouts</h1><?php  /* end template body */
return $this->buffer . ob_get_clean();
?>