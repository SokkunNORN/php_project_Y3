
<?php

  if ($data['page'] !== "auth/login") :
    include_once 'layout/header.php';
    include_once "pages/" . $data['page'] . ".php";
    include_once 'layout/footer.php';
  endif;

  include_once "pages/" . $data['page'] . ".php";
