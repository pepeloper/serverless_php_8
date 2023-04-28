<?php

namespace App\Sidecar;

use Hammerstone\Sidecar\LambdaFunction;

class HelloWorld extends LambdaFunction
{
  public function handler()
  {
    return 'sidecar/index@handler';
  }

  public function package()
  {
    return [
      'sidecar/index.js',
    ];
  }
}