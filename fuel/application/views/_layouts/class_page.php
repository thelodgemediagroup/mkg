<?php $this->load->view('_blocks/mkg_header')?>

<?php $this->load->view('_blocks/mkg_topbar')?>

<?php $this->load->view('_blocks/mkg_navigation')?>	   

<?php echo fuel_var('body')?>

<?php $data['event_class'] = fuel_var('class_name'); ?>

<?php $this->load->view('_blocks/mkg_class_list', $data)?>

<?php $this->load->view('_blocks/mkg_footer')?>