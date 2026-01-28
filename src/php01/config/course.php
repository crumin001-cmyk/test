<?php
$company = '';

if (isset($_GET['company'])) {
  $company = htmlspecialchars($_GET['company'], ENT_QUOTES, 'UTF-8');
}

echo "会社名は" . $company . "ですね";
