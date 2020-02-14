<?php

namespace eminmuhammadi\emeega\Builder;

/**
 * Dynamically Get Builded Files
 */
class Assets
{

  function __construct($path)
  {
    $this->path = $path;
  }

  function build_js_tags($identifier,$PUBLIC_URL) {

    $json = file_get_contents($this->path);
    if ($json == false) {
      throw new \Exception("Requested Json do not found", 1);
    }

    $json = json_decode($json, true);
    if ($json == null) {
      throw new \Exception("Requested Json have not data", 1);
    }

    $js_tags = [];

    foreach($json['entrypoints'][$identifier]['js'] as $path) {
       array_push($js_tags,"<script type='text/javascript' src='".$PUBLIC_URL.$path."'></script>");
    }

    return implode($js_tags);
  }

  function build_css_tags($identifier,$PUBLIC_URL) {

    $json = file_get_contents($this->path);
    if ($json == false) {
      throw new \Exception("Requested Json do not found", 1);
    }

    $json = json_decode($json, true);
    if ($json == null) {
      throw new \Exception("Requested Json have not data", 1);
    }

    $css_tags = [];

    foreach($json['entrypoints'][$identifier]['css'] as $path) {
       array_push($css_tags,"<link rel='stylesheet' type='text/css' href='".$PUBLIC_URL.$path."'>");
    }

    return implode($css_tags);
  }

}
