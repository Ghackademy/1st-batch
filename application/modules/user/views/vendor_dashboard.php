<h1><?php echo lang('vendor_dashboard_heading');?> <?php echo $this->session->userdata('username');?></h1>
<p><?php echo anchor('product/add', lang('vendor_dashboard_addproduct_link'))?></p><br/>
<p><?php echo anchor('product/myproduct', lang('vendor_dashboard_ownproduct_link'))?>