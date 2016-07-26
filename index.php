<?php
  $unclean_tls_version = $_SERVER['X-HTTPS-Protocol'];
  $tls_version = '';

  // Sanitise tls version
  if (
    $unclean_tls_version == 'TLSv1.2' ||
    $unclean_tls_version == 'TLSv1.1' ||
    $unclean_tls_version == 'TLSv1'
  ) {
    $tls_version = $unclean_tls_version;
  } else {
    $tls_version = 'Sanitation failed';
  }

  echo "{\"tls_version\": \"$tls_version\"}";
