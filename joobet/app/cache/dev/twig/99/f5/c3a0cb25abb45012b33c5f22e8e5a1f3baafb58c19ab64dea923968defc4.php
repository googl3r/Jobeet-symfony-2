<?php

/* WebProfilerBundle:Profiler:profiler.css.twig */
class __TwigTemplate_99f5c3a0cb25abb45012b33c5f22e8e5a1f3baafb58c19ab64dea923968defc4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "/*
Copyright (c) 2008, Yahoo! Inc. All rights reserved.
Code licensed under the BSD License:
http://developer.yahoo.net/yui/license.txt
version: 2.6.0
*/
html{color:#000;background:#FFF;}body,div,dl,dt,dd,ul,ol,li,h1,h2,h3,h4,h5,h6,pre,code,form,fieldset,legend,input,button,textarea,p,blockquote,th,td{margin:0;padding:0;}table{border-collapse:collapse;border-spacing:0;}fieldset,img{border:0;}address,caption,cite,code,dfn,em,strong,th,var,optgroup{font-style:inherit;font-weight:inherit;}del,ins{text-decoration:none;}li{list-style:none;}caption,th{text-align:left;}h1,h2,h3,h4,h5,h6{font-size:100%;font-weight:normal;}q:before,q:after{content:'';}abbr,acronym{border:0;font-variant:normal;}sup{vertical-align:baseline;}sub{vertical-align:baseline;}legend{color:#000;}input,button,textarea,select,optgroup,option{font-family:inherit;font-size:inherit;font-style:inherit;font-weight:inherit;}input,button,textarea,select{*font-size:100%;}
html, body {
    background-color: #efefef;
}
body {
    font: 1em \"Lucida Sans Unicode\", \"Lucida Grande\", Verdana, Arial, Helvetica, sans-serif;
    text-align: left;
}
p {
    font-size: 14px;
    line-height: 20px;
    color: #313131;
    padding-bottom: 20px
}
strong {
    color: #313131;
    font-weight: bold;
}
em {
    font-style: italic;
}
a {
    color: #6c6159;
}
a img {
    border: none;
}
a:hover {
    text-decoration: underline;
}
button::-moz-focus-inner {
    padding: 0;
    border: none;
}
button {
    overflow: visible;
    width: auto;
    background-color: transparent;
    font-weight: bold;
}
caption {
    margin-bottom: 7px;
}
table, tr, th, td {
    border-collapse: collapse;
    border: 1px solid #d0dbb3;
}
table {
    width: 100%;
    margin: 10px 0 30px;
}
table th {
    font-weight: bold;
    background-color: #f1f7e2;
}
table th, table td {
    font-size: 12px;
    padding: 8px 10px;
}
table td em {
    color: #aaa;
}
fieldset {
    border: none;
}
abbr {
    border-bottom: 1px dotted #000;
    cursor: help;
}
pre, code {
    font-size: 0.9em;
}
.clear {
    clear: both;
    height: 0;
    font-size: 0;
    line-height: 0;
}
.clear-fix:after
{
    content: \"\\0020\";
    display: block;
    height: 0;
    clear: both;
    visibility: hidden;
}
* html .clear-fix
{
    height: 1%;
}
.clear-fix
{
    display: block;
}
#content {
    padding: 0 50px;
    margin: 0 auto 20px;
    font-family: Arial, Helvetica, sans-serif;
    min-width: 970px;
}
#header {
    padding: 20px 30px 20px;
}
#header h1 {
    float: left;
}
.search {
    float: right;
}
#menu-profiler {
    border-right: 1px solid #dfdfdf;
}
#menu-profiler li {
    border-bottom: 1px solid #dfdfdf;
    position: relative;
    padding-bottom: 0;
    display: block;
    background-color: #f6f6f6;
    z-index: 10000;
}
#menu-profiler li a {
    color: #404040;
    display: block;
    font-size: 13px;
    text-transform: uppercase;
    text-decoration: none;
    cursor: pointer;
}
#menu-profiler li a span.label {
    display: block;
    padding: 20px 0px 16px 65px;
    min-height: 16px;
    overflow: hidden;
}
#menu-profiler li a span.icon {
    display: block;
    position: absolute;
    left: 0;
    top: 12px;
    width: 60px;
    text-align: center;
}
#menu-profiler li.selected a,
#menu-profiler li a:hover {
    background: #d1d1d1 url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAA7CAAAAACfn7+eAAAACXZwQWcAAAABAAAAOwDiPIGUAAAAJElEQVQIW2N4y8TA9B+KGZDYEP5/FD4Eo7IgNLJqZDUIMRRTAcmVHUZf/1g/AAAAAElFTkSuQmCC) repeat-x 0 0;
}
#navigation div:first-child,
#menu-profiler li:first-child,
#menu-profiler li:first-child a,
#menu-profiler li:first-child a span.label {
    border-radius: 16px 0 0 0;
}
#menu-profiler li a span.count {
    padding: 0;
    position: absolute;
    right: 10px;
    top: 20px;
}
#collector-wrapper {
    float: left;
    width: 100%;
}
#collector-content {
    margin-left: 250px;
    padding: 30px 40px 40px;
}
#navigation {
    float: left;
    width: 250px;
    margin-left: -100%;
}
#collector-content table td {
    background-color: white;
}
h1 {
    font-family: Georgia, \"Times New Roman\", Times, serif;
    color: #404040;
}
h2, h3 {
    font-weight: bold;
    margin-bottom: 20px;
}
li {
    padding-bottom: 10px;
}
#main {
    border-radius: 16px;
    margin-bottom: 20px;
}
#menu-profiler span.count span {
    display: inline-block;
    background-color: #aacd4e;
    border-radius: 6px;
    padding: 4px;
    color: #fff;
    margin-right: 2px;
    font-size: 11px;
}
#resume {
    background-color: #f6f6f6;
    border-bottom: 1px solid #dfdfdf;
    padding: 18px 10px 0px;
    margin-left: 250px;
    height: 34px;
    color: #313131;
    font-size: 12px;
    border-top-right-radius: 16px;
}
a#resume-view-all {
    display: inline-block;
    padding: 0.2em 0.7em;
    margin-right: 0.5em;
    background-color: #666;
    border-radius: 16px;
    color: white;
    font-weight: bold;
    text-decoration: none;
}
table th.value {
    width: 450px;
    background-color: #dfeeb8;
}
#content h2 {
    font-size: 24px;
    color: #313131;
    font-weight: bold;
}
#content #main {
    padding: 0;
    background-color: #FFF;
    border: 1px solid #dfdfdf;
}
#content #main p {
    color: #313131;
    font-size: 14px;
    padding-bottom: 20px;
}
.sf-toolbarreset {
    border-top: 0;
    padding: 0;
}
.sf-reset .block-exception-detected .text-exception {
    left: 10px;
    right: 10px;
    width: 95%;
}
.sf-reset .block-exception-detected .illustration-exception {
    display: none;
}
ul.alt {
    margin: 10px 0 30px;
}
ul.alt li {
    padding: 5px 7px;
    font-size: 13px;
}
ul.alt li.even {
    background: #f1f7e2;
}
ul.alt li.error {
    background-color: #f66;
    margin-bottom: 1px;
}
ul.alt li.warning {
    background-color: #ffcc00;
    margin-bottom: 1px;
}
ul.sf-call-stack li {
    text-size: small;
    padding: 0 0 0 20px;
}
td.main, td.menu {
    text-align: left;
    margin: 0;
    padding: 0;
    border: 0;
    vertical-align: top;
}
.search {
    float: right;
    padding-top: 20px;
}
.search label {
    line-height: 28px;
    vertical-align: middle;
}
.search input {
    width: 195px;
    font-size: 12px;
    border: 1px solid #dadada;
    background: #FFF url(data:image/gif;base64,R0lGODlhAQAFAKIAAPX19e/v7/39/fr6+urq6gAAAAAAAAAAACH5BAAAAAAALAAAAAABAAUAAAMESAEjCQA7) repeat-x left top;
    padding: 5px 6px;
    color: #565656;
}
.search input[type=\"search\"] {
    -webkit-appearance: textfield;
}
#navigation div:first-child {
    margin: 0 0 20px;
    border-top: 0;
}
#navigation .search {
    padding-top: 15px;
    float: none;
    background: none repeat scroll 0 0 #f6f6f6;
    color: #333;
    margin: 20px 0;
    border: 1px solid #dfdfdf;
    border-left: none;
}
#navigation .search h3 {
    font-family: Arial, Helvetica, sans-serif;
    text-transform: uppercase;
    margin-left: 10px;
    font-size: 13px;
}
#navigation .search form {
    padding: 15px 0;
}
#navigation .search button {
    float: right;
    margin-right: 20px;
}
#navigation .search label {
    display: block;
    float: left;
    width: 50px;
}
#navigation .search input,
#navigation .search select,
#navigation .search label,
#navigation .search a {
    font-size: 12px;
}
#navigation .search form {
    padding-left: 10px;
}
#navigation .search input {
    width: 160px;
}
#navigation .import label {
    float: none;
    display: inline;
}
#navigation .import input {
    width: 100px;
}
.timeline {
    background-color: #fbfbfb;
    margin-bottom: 15px;
    margin-top: 5px;
}
#collector-content .routing tr.matches td {
    background-color: #0e0;
}
#collector-content .routing tr.almost td {
    background-color: #fa0;
}
.loading {
    background: transparent url(data:image/gif;base64,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) scroll no-repeat 50% 50%;
    height: 30px;
    display: none;
}
.sf-profiler-timeline .legends {
    font-size: 12px;
    line-height: 1.5em;
}
.sf-profiler-timeline .legends span {
    border-left-width: 10px;
    border-left-style: solid;
    padding: 0 10px 0 5px;
}
.sf-profiler-timeline canvas {
    border: 1px solid #999;
    border-width: 1px 0;
}
.collapsed-menu-parents #resume,
.collapsed-menu-parents #collector-content {
    margin-left: 60px !important;
}
.collapsed-menu {
    width: 60px !important;
}
.collapsed-menu span :not(.icon) {
    display: none !important;
}
.collapsed-menu span.icon img {
    display: inline !important;
}
";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:profiler.css.twig";
    }

    public function getDebugInfo()
    {
        return array (  672 => 345,  664 => 342,  640 => 334,  631 => 327,  591 => 309,  559 => 296,  552 => 293,  519 => 278,  515 => 276,  505 => 270,  497 => 267,  471 => 253,  465 => 249,  463 => 248,  454 => 244,  438 => 236,  436 => 235,  428 => 230,  412 => 222,  410 => 221,  376 => 205,  295 => 178,  449 => 198,  446 => 197,  441 => 196,  373 => 156,  226 => 84,  380 => 206,  345 => 147,  340 => 145,  328 => 139,  290 => 119,  259 => 103,  810 => 492,  792 => 488,  788 => 486,  775 => 485,  749 => 479,  746 => 478,  727 => 476,  702 => 472,  690 => 469,  686 => 468,  682 => 467,  679 => 466,  634 => 456,  625 => 453,  622 => 323,  620 => 451,  606 => 318,  601 => 446,  549 => 411,  532 => 410,  363 => 153,  353 => 193,  212 => 78,  537 => 178,  520 => 170,  516 => 169,  496 => 161,  479 => 256,  475 => 152,  421 => 126,  414 => 122,  408 => 176,  403 => 117,  375 => 106,  372 => 105,  348 => 140,  325 => 129,  313 => 183,  222 => 83,  215 => 78,  210 => 77,  191 => 67,  694 => 470,  685 => 406,  654 => 389,  647 => 336,  643 => 381,  637 => 378,  633 => 377,  627 => 374,  617 => 367,  592 => 351,  585 => 307,  579 => 342,  577 => 303,  571 => 338,  542 => 321,  538 => 319,  531 => 283,  526 => 310,  486 => 292,  466 => 280,  456 => 273,  452 => 272,  445 => 267,  429 => 188,  366 => 210,  361 => 195,  331 => 140,  272 => 158,  267 => 101,  253 => 100,  137 => 46,  306 => 107,  303 => 122,  292 => 81,  280 => 131,  236 => 109,  347 => 191,  338 => 135,  319 => 92,  265 => 105,  262 => 98,  257 => 149,  248 => 94,  239 => 97,  211 => 81,  202 => 94,  134 => 54,  127 => 35,  277 => 78,  245 => 87,  223 => 80,  213 => 78,  207 => 75,  190 => 76,  185 => 66,  114 => 71,  160 => 58,  389 => 160,  383 => 207,  377 => 99,  354 => 102,  349 => 90,  342 => 137,  335 => 134,  332 => 116,  324 => 113,  315 => 125,  302 => 125,  299 => 83,  293 => 120,  287 => 68,  282 => 66,  276 => 111,  263 => 95,  234 => 48,  231 => 83,  12 => 34,  609 => 319,  598 => 188,  594 => 187,  586 => 184,  581 => 305,  573 => 179,  567 => 414,  558 => 172,  554 => 171,  545 => 291,  541 => 290,  529 => 409,  524 => 162,  517 => 404,  511 => 167,  492 => 295,  481 => 290,  478 => 127,  458 => 107,  447 => 102,  442 => 101,  439 => 195,  424 => 128,  418 => 224,  415 => 180,  401 => 172,  396 => 234,  394 => 168,  388 => 112,  382 => 127,  351 => 192,  334 => 141,  320 => 127,  307 => 128,  301 => 117,  296 => 121,  281 => 114,  255 => 101,  218 => 43,  206 => 58,  195 => 65,  192 => 88,  186 => 111,  180 => 62,  155 => 47,  148 => 64,  710 => 475,  699 => 208,  693 => 205,  683 => 204,  678 => 398,  666 => 200,  663 => 393,  660 => 340,  652 => 193,  632 => 190,  615 => 189,  602 => 317,  589 => 178,  587 => 177,  582 => 176,  565 => 174,  548 => 292,  536 => 166,  530 => 168,  527 => 281,  525 => 280,  522 => 279,  513 => 168,  507 => 157,  502 => 164,  499 => 268,  495 => 138,  489 => 262,  483 => 258,  477 => 127,  464 => 147,  462 => 202,  459 => 246,  450 => 141,  422 => 226,  420 => 249,  406 => 123,  400 => 214,  397 => 213,  395 => 118,  391 => 113,  385 => 116,  358 => 151,  346 => 99,  344 => 119,  339 => 100,  336 => 99,  333 => 98,  329 => 188,  326 => 138,  323 => 128,  321 => 135,  318 => 111,  316 => 121,  308 => 88,  288 => 176,  286 => 112,  251 => 101,  244 => 65,  233 => 87,  197 => 104,  194 => 70,  188 => 102,  175 => 65,  77 => 25,  857 => 274,  854 => 273,  849 => 268,  845 => 266,  839 => 263,  836 => 262,  834 => 261,  829 => 259,  821 => 258,  818 => 257,  816 => 256,  813 => 255,  807 => 491,  805 => 252,  802 => 251,  796 => 489,  794 => 248,  791 => 247,  785 => 245,  783 => 244,  780 => 243,  774 => 241,  772 => 240,  769 => 239,  766 => 238,  762 => 221,  757 => 218,  751 => 216,  748 => 215,  745 => 214,  731 => 213,  725 => 211,  720 => 208,  714 => 206,  706 => 473,  704 => 210,  701 => 209,  698 => 471,  680 => 403,  677 => 465,  675 => 198,  671 => 196,  668 => 344,  665 => 194,  661 => 191,  658 => 391,  655 => 189,  651 => 337,  649 => 462,  644 => 335,  642 => 238,  638 => 237,  635 => 236,  629 => 326,  626 => 325,  624 => 231,  619 => 228,  613 => 320,  610 => 187,  608 => 223,  605 => 186,  603 => 194,  599 => 355,  596 => 189,  593 => 310,  588 => 308,  584 => 174,  575 => 180,  569 => 300,  566 => 167,  563 => 298,  557 => 295,  553 => 186,  550 => 185,  544 => 172,  539 => 171,  533 => 284,  521 => 154,  518 => 307,  514 => 306,  509 => 272,  506 => 166,  504 => 302,  501 => 147,  498 => 146,  491 => 145,  488 => 144,  485 => 129,  482 => 142,  476 => 141,  473 => 254,  470 => 149,  467 => 137,  460 => 136,  451 => 103,  448 => 240,  443 => 137,  431 => 189,  425 => 135,  419 => 164,  416 => 163,  411 => 126,  404 => 87,  399 => 116,  392 => 104,  386 => 159,  378 => 157,  371 => 156,  367 => 198,  357 => 123,  352 => 91,  350 => 117,  343 => 146,  330 => 105,  327 => 114,  317 => 185,  310 => 89,  304 => 181,  300 => 180,  297 => 179,  291 => 102,  289 => 113,  284 => 106,  279 => 104,  274 => 110,  270 => 102,  260 => 77,  256 => 96,  250 => 93,  242 => 140,  228 => 68,  198 => 55,  172 => 64,  124 => 31,  110 => 40,  65 => 11,  118 => 49,  20 => 1,  170 => 96,  165 => 60,  150 => 55,  146 => 49,  97 => 63,  84 => 27,  58 => 25,  34 => 5,  81 => 23,  53 => 17,  275 => 105,  271 => 108,  266 => 1,  249 => 95,  237 => 70,  232 => 88,  225 => 87,  216 => 79,  205 => 108,  200 => 72,  184 => 101,  152 => 46,  129 => 57,  113 => 40,  126 => 42,  76 => 31,  70 => 19,  100 => 36,  181 => 65,  178 => 66,  174 => 65,  161 => 63,  153 => 56,  104 => 37,  90 => 26,  23 => 12,  480 => 128,  474 => 285,  469 => 158,  461 => 155,  457 => 245,  453 => 199,  444 => 238,  440 => 131,  437 => 134,  435 => 258,  430 => 130,  427 => 129,  423 => 166,  413 => 100,  409 => 98,  407 => 242,  402 => 215,  398 => 129,  393 => 211,  387 => 164,  384 => 130,  381 => 108,  379 => 126,  374 => 98,  368 => 103,  365 => 197,  362 => 94,  360 => 122,  355 => 143,  341 => 189,  337 => 87,  322 => 101,  314 => 85,  312 => 124,  309 => 129,  305 => 87,  298 => 120,  294 => 83,  285 => 175,  283 => 115,  278 => 106,  268 => 127,  264 => 84,  258 => 94,  252 => 70,  247 => 66,  241 => 90,  229 => 85,  220 => 81,  214 => 99,  177 => 61,  169 => 57,  140 => 58,  132 => 44,  128 => 58,  107 => 52,  61 => 12,  273 => 174,  269 => 107,  254 => 102,  243 => 92,  240 => 50,  238 => 139,  235 => 89,  230 => 106,  227 => 86,  224 => 81,  221 => 67,  219 => 129,  217 => 79,  208 => 76,  204 => 66,  179 => 98,  159 => 90,  143 => 51,  135 => 35,  119 => 40,  102 => 33,  71 => 23,  67 => 22,  63 => 21,  59 => 11,  38 => 6,  201 => 106,  196 => 92,  183 => 58,  171 => 63,  166 => 95,  163 => 53,  158 => 62,  156 => 58,  151 => 59,  142 => 61,  138 => 36,  136 => 71,  121 => 50,  117 => 39,  105 => 34,  91 => 34,  62 => 21,  49 => 14,  94 => 21,  89 => 30,  85 => 23,  75 => 24,  68 => 12,  56 => 16,  87 => 33,  25 => 12,  21 => 2,  28 => 3,  24 => 3,  31 => 4,  26 => 13,  19 => 1,  93 => 27,  88 => 32,  78 => 18,  46 => 13,  44 => 11,  27 => 3,  79 => 21,  72 => 17,  69 => 16,  47 => 15,  40 => 8,  37 => 7,  22 => 12,  246 => 93,  157 => 89,  145 => 74,  139 => 49,  131 => 45,  123 => 42,  120 => 31,  115 => 50,  111 => 47,  108 => 39,  101 => 31,  98 => 45,  96 => 30,  83 => 33,  74 => 52,  66 => 25,  55 => 38,  52 => 12,  50 => 18,  43 => 12,  41 => 8,  35 => 9,  32 => 4,  29 => 3,  209 => 96,  203 => 73,  199 => 93,  193 => 64,  189 => 66,  187 => 75,  182 => 87,  176 => 63,  173 => 85,  168 => 61,  164 => 72,  162 => 59,  154 => 60,  149 => 50,  147 => 54,  144 => 42,  141 => 51,  133 => 49,  130 => 46,  125 => 51,  122 => 41,  116 => 39,  112 => 36,  109 => 27,  106 => 51,  103 => 46,  99 => 31,  95 => 34,  92 => 28,  86 => 64,  82 => 19,  80 => 32,  73 => 23,  64 => 13,  60 => 20,  57 => 20,  54 => 19,  51 => 37,  48 => 40,  45 => 14,  42 => 11,  39 => 10,  36 => 7,  33 => 6,  30 => 7,);
    }
}
