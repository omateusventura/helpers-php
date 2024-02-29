<?php 

  function parseToBRL($value) {
    return 'R$' . number_format($value, 2, ',', '.') ;
  }