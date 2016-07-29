<?php
  header("Cache-Control: no-cache, must-revalidate"); // HTTP/1.1
  header("Expires: Tue, 01 Jan 1980 1:00:00 GMT");    // Date in the past

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
    $tls_version = '-1';
  }

  echo "{\"tls_version\": \"$tls_version\"}";
