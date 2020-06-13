<?php
if($_POST = array_map('trim', $_POST)) {
  if(isset($_POST['send'])) {
    foreach($fields as $name => $field) {
      $values[$name] = $_POST[$name] ?? null;
    }

    $errors = $validate($values);

    if(empty($errors)) {
      $data = array_merge($values, [
        'date' => date('Y-m-d H:i:s')
      ]);

      echo var_dump($data);

      //define('REDIRECT', '/contacto/');
    }
  }
}

?>
<article>
  <h1><a href="<?= path('/contacto/'); ?>">Contacto</a></h1>
  Quisque vitae lorem ex. Fusce scelerisque tempor suscipit. Donec tristique turpis in neque dignissim, et tempus nisi dignissim. Maecenas at enim nibh.
  <form action="<?= path('/contacto/'); ?>" method="post" autocomplete="off">
    <?php foreach($fields as $name => $field) { ?>
      <?php switch($field['type']) { case 'text': ?>
        <input name="<?= $name; ?>" value="<?= $values[$name] ?? null; ?>" placeholder="<?= $field['placeholder']; ?><?= $if($errors[$name] ?? false); ?>"<?= $if(isset($errors[$name]), 'error', 'class'); ?> />
      <?php break; case 'email': ?>
        <input name="<?= $name; ?>" value="<?= $values[$name] ?? null; ?>" placeholder="<?= $field['placeholder']; ?><?= $if($errors[$name] ?? false); ?>"<?= $if(isset($errors[$name]), 'error', 'class'); ?> />
      <?php break; case 'textarea': ?>
        <textarea name="<?= $name; ?>" rows="5" placeholder="<?= $field['placeholder']; ?><?= $if($errors[$name] ?? false); ?>"<?= $if(isset($errors[$name]), 'error', 'class'); ?>><?= $values[$name] ?? null; ?></textarea>
      <?php break; } ?>
    <?php } ?>
    <button type="submit" name="send">Contactar</button>
  </form>
</article>
