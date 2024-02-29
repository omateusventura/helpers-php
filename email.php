<?php

  function isEmail($email) {
    $regexp = '/^[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,}$/i';

    if (!preg_match($regexp, $email)) {
      return false;
    }

    return true;
  }