<?php
/* template head */
/* end template head */ ob_start(); /* template body */ ?><p>This is the test blog 2. Formatted with some different pictures.</p><?php  /* end template body */
return $this->buffer . ob_get_clean();
?>