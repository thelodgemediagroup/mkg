<?php
/* template head */
/* end template head */ ob_start(); /* template body */ ?><p>This is test data to display for a blog post.</p><?php  /* end template body */
return $this->buffer . ob_get_clean();
?>