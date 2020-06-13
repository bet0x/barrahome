<?php

return function($values) {
  foreach($values as $name => $value) {
    $error = false;

    switch($name) {
      case 'name':
      case 'email':
      case 'company':
      case 'message':
        if(empty($value)) {
          $error = 'Required';
        }
      break;
    }

    if($error) {
      $errors[$name] = $error;
    }
  }

  return $errors ?? [];
}

?>
