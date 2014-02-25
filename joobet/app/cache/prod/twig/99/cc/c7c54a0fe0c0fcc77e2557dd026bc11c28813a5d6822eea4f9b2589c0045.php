<?php

/* SonataBlockBundle:Profiler:block.html.twig */
class __TwigTemplate_99ccc7c54a0fe0c0fcc77e2557dd026bc11c28813a5d6822eea4f9b2589c0045 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("WebProfilerBundle:Profiler:layout.html.twig");

        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
            'table' => array($this, 'block_table'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "WebProfilerBundle:Profiler:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"sf-toolbar-block\">
        <div class=\"sf-toolbar-icon\">
            <a href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_profiler", array("token" => (isset($context["token"]) ? $context["token"] : null), "panel" => (isset($context["name"]) ? $context["name"] : null))), "html", null, true);
        echo "\">
                ";
        // line 7
        echo "<span style=\"width:0px; height: 28px; vertical-align: middle;\"></span>
                <span class=\"sf-toolbar-status\">";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "getTotalBlock", array(), "method"), "html", null, true);
        echo "</span> blocks
                ";
        // line 9
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "events")) > 0)) {
            echo "<strong>*</strong>";
        }
        // line 10
        echo "            </a>
        </div>
        <div class=\"sf-toolbar-info\">
            <div class=\"sf-toolbar-info-piece\">
                <b>Real Blocks</b>
                <span>";
        // line 15
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "realBlocks")), "html", null, true);
        echo "</span>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <b>Containers</b>
                <span>";
        // line 19
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "containers")), "html", null, true);
        echo "</span>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <b>Total Blocks</b>
                <span>";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "getTotalBlock", array(), "method"), "html", null, true);
        echo "</span>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <hr />
                <b>Events</b>
                <span>";
        // line 28
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "events")), "html", null, true);
        echo "</span>
            </div>
        </div>
    </div>
";
    }

    // line 34
    public function block_menu($context, array $blocks = array())
    {
        // line 35
        echo "    <span class=\"label\">
        <span class=\"icon\"><img src=\"data:image/png;base64,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\" alt=\"\" /></span>
        <strong>Blocks";
        // line 37
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "events")) > 0)) {
            echo "<strong>*</strong>";
        }
        echo "</strong>
        <span class=\"count\">
            <span>";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "getTotalBlock", array(), "method"), "html", null, true);
        echo "</span>
        </span>
    </span>
";
    }

    // line 44
    public function block_panel($context, array $blocks = array())
    {
        // line 45
        echo "    <h2>Events Blocks</h2>
    <table>
        <tr>
            <th>code name</th>
            <th>listener tag</th>
            <th>Block types</th>
            <th>Listeners</th>
        </tr>

        ";
        // line 54
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "events"));
        foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
            // line 55
            echo "            <tr>
                <td>";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "template_code", array(), "array"), "html", null, true);
            echo "</td>
                <td>";
            // line 57
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "event_name", array(), "array"), "html", null, true);
            echo "</td>
                <td>
                    ";
            // line 59
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["event"]) ? $context["event"] : null), "blocks", array(), "array"));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
                // line 60
                echo "                        ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["type"]) ? $context["type"] : null), 1), "html", null, true);
                echo " (id:";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["type"]) ? $context["type"] : null), 0), "html", null, true);
                echo ")
                    ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 62
                echo "                        no block returned
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 64
            echo "                </td>
                <td>
                    ";
            // line 66
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["event"]) ? $context["event"] : null), "listeners", array(), "array"));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["listener"]) {
                // line 67
                echo "                        ";
                echo twig_escape_filter($this->env, (isset($context["listener"]) ? $context["listener"] : null), "html", null, true);
                echo "
                    ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 69
                echo "                        no listener registered
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['listener'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 71
            echo "                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 74
        echo "    </table>

    <h2>Real Blocks</h2>
    ";
        // line 77
        $context["blocks"] = $this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "realBlocks");
        // line 78
        echo "    ";
        $this->displayBlock("table", $context, $blocks);
        echo "

    <h2>Containers Blocks</h2>
    ";
        // line 81
        $context["blocks"] = $this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "containers");
        // line 82
        echo "    ";
        $this->displayBlock("table", $context, $blocks);
        echo "

    ";
        // line 84
        $this->displayBlock("javascript", $context, $blocks);
        echo "
";
    }

    // line 87
    public function block_table($context, array $blocks = array())
    {
        // line 88
        echo "    <table>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Type</th>
            <th>Mem. (diff)</th>
            <th>Mem. (peak)</th>
            <th>Duration</th>
        </tr>
        ";
        // line 97
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["blocks"]) ? $context["blocks"] : null));
        foreach ($context['_seq'] as $context["id"] => $context["block"]) {
            // line 98
            echo "
            ";
            // line 99
            $context["rowspan"] = 1;
            // line 100
            echo "            ";
            if ($this->getAttribute($this->getAttribute((isset($context["block"]) ? $context["block"] : null), "cache"), "handler")) {
                // line 101
                echo "                ";
                $context["rowspan"] = ((isset($context["rowspan"]) ? $context["rowspan"] : null) + 1);
                // line 102
                echo "            ";
            }
            // line 103
            echo "
            ";
            // line 104
            if (((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["block"]) ? $context["block"] : null), "assets"), "js")) > 0) || (twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["block"]) ? $context["block"] : null), "assets"), "css")) > 0))) {
                // line 105
                echo "                ";
                $context["rowspan"] = ((isset($context["rowspan"]) ? $context["rowspan"] : null) + 1);
                // line 106
                echo "            ";
            }
            // line 107
            echo "            <tr>
                <th style=\"vertical-align: top\" rowspan=\"";
            // line 108
            echo twig_escape_filter($this->env, (isset($context["rowspan"]) ? $context["rowspan"] : null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
            echo "</th>
                <td>";
            // line 109
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["block"]) ? $context["block"] : null), "name"), "html", null, true);
            echo "</td>
                <td>";
            // line 110
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["block"]) ? $context["block"] : null), "type"), "html", null, true);
            echo "</td>
                <td>";
            // line 111
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (($this->getAttribute((isset($context["block"]) ? $context["block"] : null), "memory_end") - $this->getAttribute((isset($context["block"]) ? $context["block"] : null), "memory_start")) / 1000), 0), "html", null, true);
            echo " Kb</td>
                <td>";
            // line 112
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($this->getAttribute((isset($context["block"]) ? $context["block"] : null), "memory_peak") / 1000), 0), "html", null, true);
            echo " Kb</td>
                <td>";
            // line 113
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["block"]) ? $context["block"] : null), "duration"), 2), "html", null, true);
            echo " ms</td>
            </tr>

            ";
            // line 116
            if ($this->getAttribute($this->getAttribute((isset($context["block"]) ? $context["block"] : null), "cache"), "handler")) {
                // line 117
                echo "                <tr style=\"vertical-align: top\">
                    <td colspan=\"3\">
                        Cache Keys: <pre>";
                // line 119
                echo twig_escape_filter($this->env, twig_jsonencode_filter($this->getAttribute($this->getAttribute((isset($context["block"]) ? $context["block"] : null), "cache"), "keys")), "html", null, true);
                echo "</pre> <br />
                        Contextual Keys: <pre>";
                // line 120
                echo twig_escape_filter($this->env, twig_jsonencode_filter($this->getAttribute($this->getAttribute((isset($context["block"]) ? $context["block"] : null), "cache"), "contextual_keys")), "html", null, true);
                echo "</pre>
                    </td>
                    <td colspan=\"2\">
                        TTL: ";
                // line 123
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["block"]) ? $context["block"] : null), "cache"), "ttl"), "html", null, true);
                echo "s. <br />
                        Lifetime: ";
                // line 124
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["block"]) ? $context["block"] : null), "cache"), "lifetime"), "html", null, true);
                echo "s. <br />
                        Backend: ";
                // line 125
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["block"]) ? $context["block"] : null), "cache"), "handler"), "html", null, true);
                echo " <br />
                        Loading from cache: ";
                // line 126
                if ($this->getAttribute($this->getAttribute((isset($context["block"]) ? $context["block"] : null), "cache"), "from_cache")) {
                    echo "YES";
                } else {
                    echo "NO";
                }
                echo " <br />
                    </td>
                </tr>
            ";
            }
            // line 130
            echo "
            ";
            // line 131
            if (((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["block"]) ? $context["block"] : null), "assets"), "js")) > 0) || (twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["block"]) ? $context["block"] : null), "assets"), "css")) > 0))) {
                // line 132
                echo "                <tr>
                    <td colspan=\"5\">
                        Javascripts: <pre>";
                // line 134
                echo twig_escape_filter($this->env, twig_jsonencode_filter($this->getAttribute($this->getAttribute((isset($context["block"]) ? $context["block"] : null), "assets"), "js")), "html", null, true);
                echo "</pre><br />
                        Stylesheets: <pre>";
                // line 135
                echo twig_escape_filter($this->env, twig_jsonencode_filter($this->getAttribute($this->getAttribute((isset($context["block"]) ? $context["block"] : null), "assets"), "css")), "html", null, true);
                echo "</pre>
                    </td>
                </tr>
            ";
            }
            // line 139
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['id'], $context['block'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 141
        echo "    </table>
";
    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Profiler:block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  347 => 134,  338 => 130,  319 => 124,  265 => 106,  262 => 105,  257 => 103,  248 => 100,  239 => 97,  211 => 81,  202 => 77,  134 => 56,  127 => 54,  277 => 109,  245 => 87,  223 => 80,  213 => 82,  207 => 71,  190 => 62,  185 => 59,  114 => 31,  160 => 59,  389 => 103,  383 => 101,  377 => 99,  354 => 92,  349 => 90,  342 => 88,  335 => 86,  332 => 85,  324 => 82,  315 => 123,  302 => 73,  299 => 116,  293 => 113,  287 => 68,  282 => 66,  276 => 64,  263 => 55,  234 => 48,  231 => 47,  12 => 34,  609 => 190,  598 => 188,  594 => 187,  586 => 184,  581 => 182,  573 => 179,  567 => 175,  558 => 172,  554 => 171,  545 => 169,  541 => 168,  529 => 164,  524 => 162,  517 => 161,  511 => 159,  492 => 137,  481 => 128,  478 => 127,  458 => 107,  447 => 102,  442 => 101,  439 => 100,  424 => 88,  418 => 113,  415 => 112,  401 => 86,  396 => 141,  394 => 136,  388 => 132,  382 => 127,  351 => 135,  334 => 120,  320 => 115,  307 => 82,  301 => 117,  296 => 77,  281 => 110,  255 => 71,  218 => 43,  206 => 58,  195 => 65,  192 => 53,  186 => 38,  180 => 56,  155 => 38,  148 => 60,  710 => 213,  699 => 208,  693 => 205,  683 => 204,  678 => 202,  666 => 200,  663 => 199,  660 => 198,  652 => 193,  632 => 190,  615 => 189,  602 => 185,  589 => 178,  587 => 177,  582 => 176,  565 => 174,  548 => 170,  536 => 166,  530 => 168,  527 => 167,  525 => 166,  522 => 165,  513 => 160,  507 => 157,  502 => 140,  499 => 139,  495 => 138,  489 => 136,  483 => 129,  477 => 127,  464 => 147,  462 => 108,  459 => 145,  450 => 141,  422 => 134,  420 => 127,  406 => 123,  400 => 120,  397 => 119,  395 => 118,  391 => 117,  385 => 116,  358 => 139,  346 => 102,  344 => 101,  339 => 100,  336 => 99,  333 => 98,  329 => 119,  326 => 83,  323 => 125,  321 => 91,  318 => 80,  316 => 89,  308 => 88,  288 => 81,  286 => 80,  251 => 101,  244 => 65,  233 => 62,  197 => 74,  194 => 53,  188 => 61,  175 => 53,  77 => 36,  52 => 20,  857 => 274,  854 => 273,  849 => 268,  845 => 266,  839 => 263,  836 => 262,  834 => 261,  829 => 259,  821 => 258,  818 => 257,  816 => 256,  813 => 255,  807 => 253,  805 => 252,  802 => 251,  796 => 249,  794 => 248,  791 => 247,  785 => 245,  783 => 244,  780 => 243,  774 => 241,  772 => 240,  769 => 239,  766 => 238,  762 => 221,  757 => 218,  751 => 216,  748 => 215,  745 => 214,  731 => 213,  725 => 211,  720 => 208,  714 => 206,  706 => 204,  704 => 210,  701 => 209,  698 => 201,  680 => 200,  677 => 199,  675 => 198,  671 => 196,  668 => 195,  665 => 194,  661 => 191,  658 => 190,  655 => 189,  651 => 280,  649 => 192,  644 => 270,  642 => 238,  638 => 237,  635 => 236,  629 => 233,  626 => 232,  624 => 231,  619 => 228,  613 => 225,  610 => 187,  608 => 223,  605 => 186,  603 => 194,  599 => 184,  596 => 189,  593 => 180,  588 => 179,  584 => 174,  575 => 180,  569 => 168,  566 => 167,  563 => 166,  557 => 163,  553 => 162,  550 => 161,  544 => 172,  539 => 171,  533 => 169,  521 => 154,  518 => 153,  514 => 160,  509 => 158,  506 => 153,  504 => 156,  501 => 147,  498 => 146,  491 => 145,  488 => 144,  485 => 129,  482 => 142,  476 => 141,  473 => 110,  470 => 149,  467 => 137,  460 => 136,  451 => 103,  448 => 140,  443 => 138,  431 => 129,  425 => 135,  419 => 164,  416 => 163,  411 => 126,  404 => 87,  399 => 124,  392 => 104,  386 => 119,  378 => 117,  371 => 113,  367 => 180,  357 => 125,  352 => 91,  350 => 117,  343 => 132,  330 => 105,  327 => 126,  317 => 86,  310 => 80,  304 => 81,  300 => 78,  297 => 77,  291 => 75,  289 => 112,  284 => 67,  279 => 65,  274 => 77,  270 => 67,  260 => 104,  256 => 89,  250 => 60,  242 => 59,  228 => 88,  198 => 55,  172 => 46,  74 => 23,  124 => 49,  110 => 41,  65 => 89,  139 => 51,  118 => 34,  20 => 11,  170 => 55,  165 => 64,  150 => 58,  146 => 34,  97 => 47,  84 => 16,  58 => 25,  34 => 4,  81 => 15,  53 => 10,  275 => 73,  271 => 108,  266 => 1,  249 => 95,  237 => 64,  232 => 85,  225 => 87,  216 => 42,  205 => 56,  200 => 69,  184 => 47,  157 => 58,  152 => 63,  129 => 59,  120 => 35,  113 => 44,  145 => 42,  126 => 48,  76 => 35,  70 => 29,  100 => 43,  96 => 37,  181 => 29,  178 => 45,  174 => 67,  161 => 55,  153 => 62,  104 => 42,  90 => 20,  83 => 36,  37 => 18,  23 => 12,  480 => 128,  474 => 161,  469 => 158,  461 => 155,  457 => 135,  453 => 142,  444 => 149,  440 => 131,  437 => 130,  435 => 146,  430 => 144,  427 => 89,  423 => 166,  413 => 100,  409 => 98,  407 => 88,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 130,  381 => 115,  379 => 126,  374 => 98,  368 => 96,  365 => 141,  362 => 94,  360 => 122,  355 => 105,  341 => 131,  337 => 87,  322 => 101,  314 => 85,  312 => 84,  309 => 120,  305 => 119,  298 => 91,  294 => 83,  285 => 111,  283 => 4,  278 => 74,  268 => 107,  264 => 84,  258 => 72,  252 => 70,  247 => 66,  241 => 90,  229 => 61,  220 => 57,  214 => 69,  177 => 54,  169 => 66,  140 => 53,  132 => 57,  128 => 41,  111 => 29,  107 => 52,  61 => 26,  273 => 96,  269 => 75,  254 => 102,  246 => 99,  243 => 98,  240 => 50,  238 => 57,  235 => 63,  230 => 61,  227 => 46,  224 => 45,  221 => 79,  219 => 84,  217 => 77,  208 => 68,  204 => 78,  179 => 72,  159 => 39,  143 => 59,  135 => 55,  131 => 55,  119 => 44,  108 => 42,  102 => 43,  71 => 32,  67 => 19,  63 => 29,  59 => 26,  47 => 48,  38 => 6,  201 => 56,  196 => 90,  183 => 58,  171 => 50,  166 => 71,  163 => 60,  158 => 62,  156 => 6,  151 => 36,  142 => 58,  138 => 57,  136 => 155,  123 => 38,  121 => 52,  117 => 57,  115 => 47,  105 => 39,  91 => 34,  69 => 9,  62 => 88,  49 => 9,  35 => 15,  101 => 49,  94 => 35,  89 => 43,  85 => 37,  79 => 37,  75 => 31,  68 => 27,  56 => 23,  50 => 22,  87 => 35,  72 => 10,  66 => 29,  55 => 85,  25 => 12,  21 => 11,  43 => 18,  41 => 18,  28 => 14,  24 => 13,  31 => 3,  29 => 15,  26 => 14,  19 => 11,  98 => 37,  93 => 21,  88 => 38,  78 => 32,  46 => 19,  44 => 19,  40 => 19,  32 => 16,  27 => 13,  22 => 12,  209 => 72,  203 => 70,  199 => 67,  193 => 64,  189 => 71,  187 => 84,  182 => 69,  176 => 64,  173 => 52,  168 => 49,  164 => 46,  162 => 45,  154 => 103,  149 => 36,  147 => 52,  144 => 33,  141 => 47,  133 => 49,  130 => 57,  125 => 39,  122 => 45,  116 => 45,  112 => 109,  109 => 53,  106 => 45,  103 => 24,  99 => 38,  95 => 22,  92 => 43,  86 => 17,  82 => 28,  80 => 35,  73 => 34,  64 => 28,  60 => 15,  57 => 86,  54 => 25,  51 => 22,  48 => 21,  45 => 8,  42 => 7,  39 => 17,  36 => 17,  33 => 16,  30 => 9,);
    }
}
