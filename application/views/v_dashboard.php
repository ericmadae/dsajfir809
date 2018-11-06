
<?php echo $username = $this->session->userdata('username'); ?><br>
<?php echo $jabatan = $this->session->userdata('jabatan'); ?><br>
<?php echo $status = $this->session->userdata('status'); ?><br>
<a href="<?= base_url('login/logout') ?>">Logout</a>