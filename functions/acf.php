<?php

/*==========================================
=            Custom options CSS            =
==========================================*/
function my_acf_admin_head() {
  ?>
  <style type="text/css">
    .acf-flexible-content .layout .acf-fc-layout-handle {
      background-color: #00a0d2;
      border:  1px solid #00a0d2;
      color: #fff;
    }
    .acf-button-group {
      flex-wrap: wrap;
    }
    .acf-icon.-collapse.small {
      display: block;
      color: #000;
    }
    .acf-icon.-collapse.small:hover {
      color: #fff;
    }
    .acf-row.-collapsed .acf-icon.-collapse.small {
      background-color:  #f33;
      border:  1px solid #f33;
      color:  #fff;
    }
    .alert {
      background-color: #e5e5e5;
      padding: 15px;
      border: 1px solid #ddd;
      margin-bottom: $global-margin-bottom;
    }
    .alert-info {
      background-color: #ffffd9;
      border: 1px solid darken( #ffffd9, 47% );
    }

    .alert-error {
      background-color: #ffd9d9;
      border: 1px solid darken( #ffd9d9, 10% );
    }

    .alert-success {
      background-color: #dbffd9;
      border: 1px solid darken( #dbffd9, 20% );
    }
  </style>
  <?php
}
add_action('acf/input/admin_head', 'my_acf_admin_head');