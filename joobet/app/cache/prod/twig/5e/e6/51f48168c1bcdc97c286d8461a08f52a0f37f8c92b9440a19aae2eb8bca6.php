<?php

/* knp_menu.html.twig */
class __TwigTemplate_5ee651f48168c1bcdc97c286d8461a08f52a0f37f8c92b9440a19aae2eb8bca6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'compressed_root' => array($this, 'block_compressed_root'),
            'root' => array($this, 'block_root'),
            'list' => array($this, 'block_list'),
            'children' => array($this, 'block_children'),
            'item' => array($this, 'block_item'),
            'linkElement' => array($this, 'block_linkElement'),
            'spanElement' => array($this, 'block_spanElement'),
            'label' => array($this, 'block_label'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 8
        echo "
";
        // line 9
        $this->displayBlock('compressed_root', $context, $blocks);
        // line 14
        echo "
";
        // line 15
        $this->displayBlock('root', $context, $blocks);
        // line 19
        echo "
";
        // line 20
        $this->displayBlock('list', $context, $blocks);
        // line 28
        echo "
";
        // line 29
        $this->displayBlock('children', $context, $blocks);
        // line 48
        echo "
";
        // line 49
        $this->displayBlock('item', $context, $blocks);
        // line 84
        echo "
";
        // line 85
        $this->displayBlock('linkElement', $context, $blocks);
        // line 86
        echo "
";
        // line 87
        $this->displayBlock('spanElement', $context, $blocks);
        // line 88
        echo "
";
        // line 89
        $this->displayBlock('label', $context, $blocks);
    }

    // line 9
    public function block_compressed_root($context, array $blocks = array())
    {
        // line 10
        ob_start();
        // line 11
        $this->displayBlock("root", $context, $blocks);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 15
    public function block_root($context, array $blocks = array())
    {
        // line 16
        $context["listAttributes"] = $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "childrenAttributes");
        // line 17
        $this->displayBlock("list", $context, $blocks);
    }

    // line 20
    public function block_list($context, array $blocks = array())
    {
        // line 21
        if ((($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "hasChildren") && (!($this->getAttribute((isset($context["options"]) ? $context["options"] : null), "depth") === 0))) && $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "displayChildren"))) {
            // line 22
            echo "    ";
            $context["knp_menu"] = $this;
            // line 23
            echo "    <ul";
            echo $context["knp_menu"]->getattributes((isset($context["listAttributes"]) ? $context["listAttributes"] : null));
            echo ">
        ";
            // line 24
            $this->displayBlock("children", $context, $blocks);
            echo "
    </ul>
";
        }
    }

    // line 29
    public function block_children($context, array $blocks = array())
    {
        // line 31
        $context["currentOptions"] = (isset($context["options"]) ? $context["options"] : null);
        // line 32
        $context["currentItem"] = (isset($context["item"]) ? $context["item"] : null);
        // line 34
        if ((!(null === $this->getAttribute((isset($context["options"]) ? $context["options"] : null), "depth")))) {
            // line 35
            $context["options"] = twig_array_merge((isset($context["options"]) ? $context["options"] : null), array("depth" => ($this->getAttribute((isset($context["currentOptions"]) ? $context["currentOptions"] : null), "depth") - 1)));
        }
        // line 38
        if (((!(null === $this->getAttribute((isset($context["options"]) ? $context["options"] : null), "matchingDepth"))) && ($this->getAttribute((isset($context["options"]) ? $context["options"] : null), "matchingDepth") > 0))) {
            // line 39
            $context["options"] = twig_array_merge((isset($context["options"]) ? $context["options"] : null), array("matchingDepth" => ($this->getAttribute((isset($context["currentOptions"]) ? $context["currentOptions"] : null), "matchingDepth") - 1)));
        }
        // line 41
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["currentItem"]) ? $context["currentItem"] : null), "children"));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 42
            echo "    ";
            $this->displayBlock("item", $context, $blocks);
            echo "
";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        $context["item"] = (isset($context["currentItem"]) ? $context["currentItem"] : null);
        // line 46
        $context["options"] = (isset($context["currentOptions"]) ? $context["currentOptions"] : null);
    }

    // line 49
    public function block_item($context, array $blocks = array())
    {
        // line 50
        if ($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "displayed")) {
            // line 52
            $context["classes"] = (((!twig_test_empty($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "attribute", array(0 => "class"), "method")))) ? (array(0 => $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "attribute", array(0 => "class"), "method"))) : (array()));
            // line 53
            if ($this->getAttribute((isset($context["matcher"]) ? $context["matcher"] : null), "isCurrent", array(0 => (isset($context["item"]) ? $context["item"] : null)), "method")) {
                // line 54
                $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : null), array(0 => $this->getAttribute((isset($context["options"]) ? $context["options"] : null), "currentClass")));
            } elseif ($this->getAttribute((isset($context["matcher"]) ? $context["matcher"] : null), "isAncestor", array(0 => (isset($context["item"]) ? $context["item"] : null), 1 => $this->getAttribute((isset($context["options"]) ? $context["options"] : null), "matchingDepth")), "method")) {
                // line 56
                $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : null), array(0 => $this->getAttribute((isset($context["options"]) ? $context["options"] : null), "ancestorClass")));
            }
            // line 58
            if ($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "actsLikeFirst")) {
                // line 59
                $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : null), array(0 => $this->getAttribute((isset($context["options"]) ? $context["options"] : null), "firstClass")));
            }
            // line 61
            if ($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "actsLikeLast")) {
                // line 62
                $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : null), array(0 => $this->getAttribute((isset($context["options"]) ? $context["options"] : null), "lastClass")));
            }
            // line 64
            $context["attributes"] = $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "attributes");
            // line 65
            if ((!twig_test_empty((isset($context["classes"]) ? $context["classes"] : null)))) {
                // line 66
                $context["attributes"] = twig_array_merge((isset($context["attributes"]) ? $context["attributes"] : null), array("class" => twig_join_filter((isset($context["classes"]) ? $context["classes"] : null), " ")));
            }
            // line 69
            echo "    ";
            $context["knp_menu"] = $this;
            // line 70
            echo "    <li";
            echo $context["knp_menu"]->getattributes((isset($context["attributes"]) ? $context["attributes"] : null));
            echo ">";
            // line 71
            if (((!twig_test_empty($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "uri"))) && ((!$this->getAttribute((isset($context["matcher"]) ? $context["matcher"] : null), "isCurrent", array(0 => (isset($context["item"]) ? $context["item"] : null)), "method")) || $this->getAttribute((isset($context["options"]) ? $context["options"] : null), "currentAsLink")))) {
                // line 72
                echo "        ";
                $this->displayBlock("linkElement", $context, $blocks);
            } else {
                // line 74
                echo "        ";
                $this->displayBlock("spanElement", $context, $blocks);
            }
            // line 77
            $context["childrenClasses"] = (((!twig_test_empty($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "childrenAttribute", array(0 => "class"), "method")))) ? (array(0 => $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "childrenAttribute", array(0 => "class"), "method"))) : (array()));
            // line 78
            $context["childrenClasses"] = twig_array_merge((isset($context["childrenClasses"]) ? $context["childrenClasses"] : null), array(0 => ("menu_level_" . $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "level"))));
            // line 79
            $context["listAttributes"] = twig_array_merge($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "childrenAttributes"), array("class" => twig_join_filter((isset($context["childrenClasses"]) ? $context["childrenClasses"] : null), " ")));
            // line 80
            echo "        ";
            $this->displayBlock("list", $context, $blocks);
            echo "
    </li>
";
        }
    }

    // line 85
    public function block_linkElement($context, array $blocks = array())
    {
        $context["knp_menu"] = $this;
        echo "<a href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "uri"), "html", null, true);
        echo "\"";
        echo $context["knp_menu"]->getattributes($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "linkAttributes"));
        echo ">";
        $this->displayBlock("label", $context, $blocks);
        echo "</a>";
    }

    // line 87
    public function block_spanElement($context, array $blocks = array())
    {
        $context["knp_menu"] = $this;
        echo "<span";
        echo $context["knp_menu"]->getattributes($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "labelAttributes"));
        echo ">";
        $this->displayBlock("label", $context, $blocks);
        echo "</span>";
    }

    // line 89
    public function block_label($context, array $blocks = array())
    {
        if (($this->getAttribute((isset($context["options"]) ? $context["options"] : null), "allow_safe_labels") && $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "getExtra", array(0 => "safe_label", 1 => false), "method"))) {
            echo $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "label");
        } else {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "label"), "html", null, true);
        }
    }

    // line 1
    public function getattributes($_attributes = null)
    {
        $context = $this->env->mergeGlobals(array(
            "attributes" => $_attributes,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["attributes"]) ? $context["attributes"] : null));
            foreach ($context['_seq'] as $context["name"] => $context["value"]) {
                // line 3
                if (((!(null === (isset($context["value"]) ? $context["value"] : null))) && (!((isset($context["value"]) ? $context["value"] : null) === false)))) {
                    // line 4
                    echo sprintf(" %s=\"%s\"", (isset($context["name"]) ? $context["name"] : null), ((((isset($context["value"]) ? $context["value"] : null) === true)) ? (twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null))) : (twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null)))));
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "knp_menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  277 => 2,  245 => 87,  223 => 80,  213 => 74,  207 => 71,  190 => 62,  185 => 59,  114 => 31,  160 => 59,  389 => 103,  383 => 101,  377 => 99,  354 => 92,  349 => 90,  342 => 88,  335 => 86,  332 => 85,  324 => 82,  315 => 79,  302 => 73,  299 => 72,  293 => 70,  287 => 68,  282 => 66,  276 => 64,  263 => 55,  234 => 48,  231 => 47,  12 => 34,  609 => 190,  598 => 188,  594 => 187,  586 => 184,  581 => 182,  573 => 179,  567 => 175,  558 => 172,  554 => 171,  545 => 169,  541 => 168,  529 => 164,  524 => 162,  517 => 161,  511 => 159,  492 => 137,  481 => 128,  478 => 127,  458 => 107,  447 => 102,  442 => 101,  439 => 100,  424 => 88,  418 => 113,  415 => 112,  401 => 86,  396 => 141,  394 => 136,  388 => 132,  382 => 127,  351 => 121,  334 => 120,  320 => 115,  307 => 82,  301 => 80,  296 => 77,  281 => 3,  255 => 71,  218 => 43,  206 => 58,  195 => 65,  192 => 53,  186 => 38,  180 => 56,  155 => 38,  148 => 35,  710 => 213,  699 => 208,  693 => 205,  683 => 204,  678 => 202,  666 => 200,  663 => 199,  660 => 198,  652 => 193,  632 => 190,  615 => 189,  602 => 185,  589 => 178,  587 => 177,  582 => 176,  565 => 174,  548 => 170,  536 => 166,  530 => 168,  527 => 167,  525 => 166,  522 => 165,  513 => 160,  507 => 157,  502 => 140,  499 => 139,  495 => 138,  489 => 136,  483 => 129,  477 => 127,  464 => 147,  462 => 108,  459 => 145,  450 => 141,  422 => 134,  420 => 127,  406 => 123,  400 => 120,  397 => 119,  395 => 118,  391 => 117,  385 => 116,  358 => 106,  346 => 102,  344 => 101,  339 => 100,  336 => 99,  333 => 98,  329 => 119,  326 => 83,  323 => 116,  321 => 91,  318 => 80,  316 => 89,  308 => 88,  288 => 81,  286 => 80,  251 => 67,  244 => 65,  233 => 62,  197 => 66,  194 => 53,  188 => 61,  175 => 53,  77 => 36,  52 => 84,  857 => 274,  854 => 273,  849 => 268,  845 => 266,  839 => 263,  836 => 262,  834 => 261,  829 => 259,  821 => 258,  818 => 257,  816 => 256,  813 => 255,  807 => 253,  805 => 252,  802 => 251,  796 => 249,  794 => 248,  791 => 247,  785 => 245,  783 => 244,  780 => 243,  774 => 241,  772 => 240,  769 => 239,  766 => 238,  762 => 221,  757 => 218,  751 => 216,  748 => 215,  745 => 214,  731 => 213,  725 => 211,  720 => 208,  714 => 206,  706 => 204,  704 => 210,  701 => 209,  698 => 201,  680 => 200,  677 => 199,  675 => 198,  671 => 196,  668 => 195,  665 => 194,  661 => 191,  658 => 190,  655 => 189,  651 => 280,  649 => 192,  644 => 270,  642 => 238,  638 => 237,  635 => 236,  629 => 233,  626 => 232,  624 => 231,  619 => 228,  613 => 225,  610 => 187,  608 => 223,  605 => 186,  603 => 194,  599 => 184,  596 => 189,  593 => 180,  588 => 179,  584 => 174,  575 => 180,  569 => 168,  566 => 167,  563 => 166,  557 => 163,  553 => 162,  550 => 161,  544 => 172,  539 => 171,  533 => 169,  521 => 154,  518 => 153,  514 => 160,  509 => 158,  506 => 153,  504 => 156,  501 => 147,  498 => 146,  491 => 145,  488 => 144,  485 => 129,  482 => 142,  476 => 141,  473 => 110,  470 => 149,  467 => 137,  460 => 136,  451 => 103,  448 => 140,  443 => 138,  431 => 129,  425 => 135,  419 => 164,  416 => 163,  411 => 126,  404 => 87,  399 => 124,  392 => 104,  386 => 119,  378 => 117,  371 => 113,  367 => 180,  357 => 125,  352 => 91,  350 => 117,  343 => 115,  330 => 105,  327 => 118,  317 => 86,  310 => 80,  304 => 81,  300 => 78,  297 => 77,  291 => 75,  289 => 74,  284 => 67,  279 => 65,  274 => 77,  270 => 67,  260 => 70,  256 => 89,  250 => 60,  242 => 59,  228 => 52,  198 => 55,  172 => 46,  74 => 11,  124 => 49,  110 => 41,  65 => 89,  139 => 51,  118 => 34,  20 => 11,  170 => 55,  165 => 281,  150 => 58,  146 => 34,  97 => 47,  84 => 16,  58 => 25,  34 => 15,  81 => 15,  53 => 24,  275 => 73,  271 => 59,  266 => 1,  249 => 95,  237 => 64,  232 => 85,  225 => 58,  216 => 42,  205 => 56,  200 => 69,  184 => 47,  157 => 58,  152 => 63,  129 => 59,  120 => 35,  113 => 48,  145 => 42,  126 => 48,  76 => 35,  70 => 29,  100 => 43,  96 => 37,  181 => 29,  178 => 45,  174 => 47,  161 => 55,  153 => 62,  104 => 42,  90 => 20,  83 => 36,  37 => 19,  23 => 12,  480 => 128,  474 => 161,  469 => 158,  461 => 155,  457 => 135,  453 => 142,  444 => 149,  440 => 131,  437 => 130,  435 => 146,  430 => 144,  427 => 89,  423 => 166,  413 => 100,  409 => 98,  407 => 88,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 130,  381 => 115,  379 => 126,  374 => 98,  368 => 96,  365 => 95,  362 => 94,  360 => 122,  355 => 105,  341 => 114,  337 => 87,  322 => 101,  314 => 85,  312 => 84,  309 => 76,  305 => 74,  298 => 91,  294 => 83,  285 => 89,  283 => 4,  278 => 74,  268 => 58,  264 => 84,  258 => 72,  252 => 70,  247 => 66,  241 => 90,  229 => 61,  220 => 57,  214 => 69,  177 => 54,  169 => 69,  140 => 53,  132 => 57,  128 => 41,  111 => 29,  107 => 52,  61 => 26,  273 => 96,  269 => 75,  254 => 97,  246 => 51,  243 => 88,  240 => 50,  238 => 57,  235 => 63,  230 => 61,  227 => 46,  224 => 45,  221 => 79,  219 => 78,  217 => 77,  208 => 68,  204 => 57,  179 => 72,  159 => 39,  143 => 26,  135 => 55,  131 => 48,  119 => 44,  108 => 42,  102 => 43,  71 => 32,  67 => 28,  63 => 29,  59 => 26,  47 => 48,  38 => 7,  201 => 56,  196 => 90,  183 => 58,  171 => 50,  166 => 71,  163 => 60,  158 => 67,  156 => 6,  151 => 36,  142 => 58,  138 => 49,  136 => 155,  123 => 38,  121 => 52,  117 => 57,  115 => 47,  105 => 51,  91 => 44,  69 => 9,  62 => 88,  49 => 20,  35 => 15,  101 => 49,  94 => 40,  89 => 43,  85 => 37,  79 => 37,  75 => 31,  68 => 27,  56 => 23,  50 => 49,  87 => 35,  72 => 10,  66 => 29,  55 => 85,  25 => 13,  21 => 11,  43 => 18,  41 => 19,  28 => 14,  24 => 13,  31 => 14,  29 => 15,  26 => 14,  19 => 11,  98 => 23,  93 => 21,  88 => 38,  78 => 32,  46 => 19,  44 => 18,  40 => 20,  32 => 14,  27 => 8,  22 => 12,  209 => 72,  203 => 70,  199 => 67,  193 => 64,  189 => 52,  187 => 84,  182 => 66,  176 => 64,  173 => 52,  168 => 49,  164 => 46,  162 => 45,  154 => 103,  149 => 36,  147 => 52,  144 => 33,  141 => 47,  133 => 49,  130 => 57,  125 => 39,  122 => 45,  116 => 32,  112 => 109,  109 => 53,  106 => 45,  103 => 24,  99 => 38,  95 => 22,  92 => 43,  86 => 17,  82 => 39,  80 => 35,  73 => 34,  64 => 28,  60 => 87,  57 => 86,  54 => 25,  51 => 22,  48 => 21,  45 => 29,  42 => 28,  39 => 17,  36 => 16,  33 => 16,  30 => 9,);
    }
}
