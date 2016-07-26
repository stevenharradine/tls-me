<?php
  $unclean_tls_version = $_SERVER['X-HTTPS-Protocol'];
  $tls_version = '';

  // sanitize tls version
  if (
    $unclean_tls_version == 'TLS1.2' ||
    $unclean_tls_version == 'TLSv1.1' ||
    $unclean_tls_version == 'TLSv1'
  ) {
    $tls_version = $unclean_tls_version;
  } else {
    $tls_version = "Sanitization failed";
  }

  echo "{\"tls_version\": \"$tls_version\"}";
