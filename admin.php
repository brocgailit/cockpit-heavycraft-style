<?php

$app->on('admin.init', function () {
  $this->helper('admin')->addAssets('heavycraftstyles:assets/style.css');
});