<?php
$this->load->view('template/header');
$this->load->view('template/topbar');
$this->load->view('template/sidebar');

if (isset($content)) echo $content;

$this->load->view('template/js');
$this->load->view('template/footer');
?>