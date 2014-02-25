<?php

/* SonataAdminBundle:Pager:base_results.html.twig */
class __TwigTemplate_4935bebe5c4ed7ea400e2be753f35f1cff6a681a0886dd4d209766390f54ede0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'num_pages' => array($this, 'block_num_pages'),
            'num_results' => array($this, 'block_num_results'),
            'max_per_page' => array($this, 'block_max_per_page'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 11
        echo "
";
        // line 12
        $this->displayBlock('num_pages', $context, $blocks);
        // line 16
        echo "
";
        // line 17
        $this->displayBlock('num_results', $context, $blocks);
        // line 21
        echo "
";
        // line 22
        $this->displayBlock('max_per_page', $context, $blocks);
    }

    // line 12
    public function block_num_pages($context, array $blocks = array())
    {
        // line 13
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid"), "pager"), "page"), "html", null, true);
        echo " / ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid"), "pager"), "lastpage"), "html", null, true);
        echo "
    &nbsp;-&nbsp;
";
    }

    // line 17
    public function block_num_results($context, array $blocks = array())
    {
        // line 18
        echo "    ";
        echo $this->env->getExtension('translator')->getTranslator()->transChoice("list_results_count", $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid"), "pager"), "nbresults"), array("%count%" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid"), "pager"), "nbresults")), "SonataAdminBundle");
        // line 19
        echo "    &nbsp;-&nbsp;
";
    }

    // line 22
    public function block_max_per_page($context, array $blocks = array())
    {
        // line 23
        echo "    <label class=\"control-label\" for=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "uniqid"), "html", null, true);
        echo "_per_page\">";
        echo $this->env->getExtension('translator')->getTranslator()->trans("label_per_page", array(), "SonataAdminBundle");
        echo "</label>
    <select class=\"per-page small\" id=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "uniqid"), "html", null, true);
        echo "_per_page\" style=\"width: auto; height: auto\">
        ";
        // line 25
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "getperpageoptions"));
        foreach ($context['_seq'] as $context["_key"] => $context["per_page"]) {
            // line 26
            echo "            <option ";
            if (((isset($context["per_page"]) ? $context["per_page"] : null) == $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid"), "pager"), "maxperpage"))) {
                echo "selected=\"selected\"";
            }
            echo " value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "generateUrl", array(0 => "list", 1 => array("filter" => twig_array_merge($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid"), "values"), array("_page" => 1, "_per_page" => (isset($context["per_page"]) ? $context["per_page"] : null))))), "method"), "html", null, true);
            echo "\">
                ";
            // line 27
            echo twig_escape_filter($this->env, (isset($context["per_page"]) ? $context["per_page"] : null), "html", null, true);
            echo "
            </option>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['per_page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "    </select>
";
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Pager:base_results.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  77 => 25,  52 => 17,  857 => 274,  854 => 273,  849 => 268,  845 => 266,  839 => 263,  836 => 262,  834 => 261,  829 => 259,  821 => 258,  818 => 257,  816 => 256,  813 => 255,  807 => 253,  805 => 252,  802 => 251,  796 => 249,  794 => 248,  791 => 247,  785 => 245,  783 => 244,  780 => 243,  774 => 241,  772 => 240,  769 => 239,  766 => 238,  762 => 221,  757 => 218,  751 => 216,  748 => 215,  745 => 214,  731 => 213,  725 => 211,  720 => 208,  714 => 206,  706 => 204,  704 => 203,  701 => 202,  698 => 201,  680 => 200,  677 => 199,  675 => 198,  671 => 196,  668 => 195,  665 => 194,  661 => 191,  658 => 190,  655 => 189,  651 => 280,  649 => 273,  644 => 270,  642 => 238,  638 => 237,  635 => 236,  629 => 233,  626 => 232,  624 => 231,  619 => 228,  613 => 225,  610 => 224,  608 => 223,  605 => 222,  603 => 194,  599 => 192,  596 => 189,  593 => 188,  588 => 179,  584 => 174,  575 => 170,  569 => 168,  566 => 167,  563 => 166,  557 => 163,  553 => 162,  550 => 161,  544 => 160,  539 => 157,  533 => 156,  521 => 154,  518 => 153,  514 => 152,  509 => 150,  506 => 149,  504 => 148,  501 => 147,  498 => 146,  491 => 145,  488 => 144,  485 => 143,  482 => 142,  476 => 141,  473 => 140,  470 => 139,  467 => 137,  460 => 136,  451 => 134,  448 => 133,  443 => 132,  431 => 129,  425 => 175,  419 => 164,  416 => 163,  411 => 129,  404 => 126,  399 => 124,  392 => 120,  386 => 119,  378 => 117,  371 => 182,  367 => 180,  357 => 125,  352 => 123,  350 => 117,  343 => 115,  330 => 105,  327 => 104,  317 => 101,  310 => 80,  304 => 79,  300 => 78,  297 => 77,  291 => 75,  289 => 74,  284 => 72,  279 => 70,  274 => 68,  270 => 67,  260 => 63,  256 => 61,  250 => 60,  242 => 59,  228 => 52,  198 => 35,  172 => 22,  74 => 56,  124 => 52,  110 => 42,  65 => 26,  139 => 57,  118 => 46,  20 => 1,  170 => 55,  165 => 281,  150 => 101,  146 => 99,  97 => 39,  84 => 29,  58 => 19,  34 => 18,  81 => 26,  53 => 19,  275 => 106,  271 => 105,  266 => 66,  249 => 95,  237 => 89,  232 => 87,  225 => 83,  216 => 80,  205 => 38,  200 => 73,  184 => 30,  157 => 104,  152 => 52,  129 => 41,  120 => 47,  113 => 34,  145 => 59,  126 => 55,  76 => 82,  70 => 17,  100 => 40,  96 => 90,  181 => 29,  178 => 28,  174 => 14,  161 => 55,  153 => 62,  104 => 18,  90 => 27,  83 => 19,  37 => 11,  23 => 1,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 135,  453 => 151,  444 => 149,  440 => 131,  437 => 130,  435 => 146,  430 => 144,  427 => 143,  423 => 166,  413 => 130,  409 => 132,  407 => 127,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 118,  379 => 119,  374 => 116,  368 => 112,  365 => 179,  362 => 178,  360 => 126,  355 => 124,  341 => 114,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 111,  278 => 86,  268 => 85,  264 => 84,  258 => 98,  252 => 80,  247 => 78,  241 => 90,  229 => 73,  220 => 49,  214 => 69,  177 => 62,  169 => 69,  140 => 97,  132 => 51,  128 => 47,  111 => 43,  107 => 36,  61 => 23,  273 => 96,  269 => 94,  254 => 97,  246 => 90,  243 => 88,  240 => 86,  238 => 57,  235 => 56,  230 => 82,  227 => 81,  224 => 51,  221 => 82,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 72,  159 => 186,  143 => 98,  135 => 55,  131 => 43,  119 => 93,  108 => 42,  102 => 42,  71 => 55,  67 => 31,  63 => 22,  59 => 10,  47 => 16,  38 => 19,  201 => 92,  196 => 90,  183 => 82,  171 => 13,  166 => 71,  163 => 188,  158 => 67,  156 => 6,  151 => 61,  142 => 58,  138 => 49,  136 => 58,  123 => 95,  121 => 51,  117 => 50,  115 => 45,  105 => 40,  91 => 38,  69 => 28,  62 => 25,  49 => 17,  35 => 22,  101 => 40,  94 => 16,  89 => 33,  85 => 86,  79 => 28,  75 => 33,  68 => 31,  56 => 21,  50 => 19,  87 => 87,  72 => 16,  66 => 23,  55 => 18,  25 => 12,  21 => 2,  43 => 14,  41 => 13,  28 => 14,  24 => 11,  31 => 8,  29 => 15,  26 => 14,  19 => 11,  98 => 39,  93 => 89,  88 => 37,  78 => 34,  46 => 19,  44 => 17,  40 => 5,  32 => 21,  27 => 16,  22 => 11,  209 => 76,  203 => 37,  199 => 67,  193 => 33,  189 => 32,  187 => 84,  182 => 66,  176 => 64,  173 => 71,  168 => 59,  164 => 11,  162 => 59,  154 => 103,  149 => 62,  147 => 52,  144 => 51,  141 => 47,  133 => 65,  130 => 57,  125 => 46,  122 => 45,  116 => 92,  112 => 47,  109 => 19,  106 => 44,  103 => 41,  99 => 30,  95 => 28,  92 => 38,  86 => 36,  82 => 33,  80 => 84,  73 => 24,  64 => 25,  60 => 22,  57 => 21,  54 => 26,  51 => 18,  48 => 8,  45 => 15,  42 => 13,  39 => 12,  36 => 14,  33 => 13,  30 => 17,);
    }
}
