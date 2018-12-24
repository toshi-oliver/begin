<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{

    public function __invoke() {

        return <<<E0F
<html>
<head>
<title>Hello</title>
<style>
body {font-size:16pot; color:#999; }
h1 { font-size:30pt; text-align:right; color:#eee;
    margin:-15px 0px 0px 0px; }
</style>
</head>
<body>
    <h1>Single Action<h1>
    <p>これは、シングルアクションコントローラのアクションです。</p>
</body>
</html>
E0F;

    }
}