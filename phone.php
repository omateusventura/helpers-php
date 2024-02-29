<?php 

  function inputPhone($phone) {
    $phone = preg_replace('/\D/', '', $phone);
    $phone = preg_replace('/(\d{2})/', '($1) ', $phone);

    $isMobilePhone = preg_match('/^[(][0-9][0-9][)][\s][9]/', $phone);

    if ($isMobilePhone) {
      $typePhone = (strlen($phone) <= 13) ? '($1) $2' : '($1) $2 ';

      $phone = preg_replace('/\D/', '', $phone);
      $phone = preg_replace('/(\d{2})(\d{1})/', $typePhone, $phone);
      $phone = preg_replace('/(\d{4})/', '$1-', $phone);
      $phone = preg_replace('/(\d{4})/', '$1', $phone);

    } else {
      $phone = preg_replace('/(\d{4})/', '$1-', $phone);
      $phone = preg_replace('/(\d{4})/', '$1', $phone);
    }

    if (substr($phone, -1) == '-') {
      $phone = substr($phone, 0, -1);
    }
  }