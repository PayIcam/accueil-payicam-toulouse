<?php
  require_once 'includes/_header.php';
  $Auth->allow('member');
  $title_for_layout = 'Contact';
  include 'includes/header.php'; // insertion du fichier header.php : entête, barre de navigation
?>

<h1 class="page-header">Contact</h1>
<p>Vous pouvez nous contacter au mail suivant:</p>
<a class="btn btn-default" href="mailto:contact.payicam@gmail.com">contact.payicam@gmail.com</a>

<?php include 'includes/footer.php';?>