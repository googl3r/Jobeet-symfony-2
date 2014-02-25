<?php

/* SonataAdminBundle::ajax_layout.html.twig */
class __TwigTemplate_6880b75a5c58946f0949a3c16e2835fb52b350d8705c03575eff008423c019f6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'preview' => array($this, 'block_preview'),
            'form' => array($this, 'block_form'),
            'list' => array($this, 'block_list'),
            'show' => array($this, 'block_show'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 11
        echo "
";
        // line 12
        $this->displayBlock('content', $context, $blocks);
    }

    public function block_content($context, array $blocks = array())
    {
        // line 13
        echo "    ";
        $context["_list_table"] = trim($this->renderBlock("list_table", $context, $blocks));
        // line 14
        echo "    ";
        $context["_list_filters"] = trim($this->renderBlock("list_filters", $context, $blocks));
        // line 15
        echo "
    ";
        // line 16
        $this->displayBlock('preview', $context, $blocks);
        // line 17
        echo "    ";
        $this->displayBlock('form', $context, $blocks);
        // line 18
        echo "    ";
        $this->displayBlock('list', $context, $blocks);
        // line 19
        echo "    ";
        $this->displayBlock('show', $context, $blocks);
        // line 20
        echo "
    ";
        // line 21
        if (((twig_length_filter($this->env, (isset($context["_list_table"]) ? $context["_list_table"] : null)) > 0) || (twig_length_filter($this->env, (isset($context["_list_filters"]) ? $context["_list_filters"] : null)) > 0))) {
            // line 22
            echo "        <div class=\"row-fluid\">
            <div class=\"sonata-ba-list ";
            // line 23
            if ((isset($context["_list_filters"]) ? $context["_list_filters"] : null)) {
                echo "span10";
            } else {
                echo "span12";
            }
            echo "\">
                ";
            // line 24
            echo (isset($context["_list_table"]) ? $context["_list_table"] : null);
            echo "
            </div>
            ";
            // line 26
            if ((isset($context["_list_filters"]) ? $context["_list_filters"] : null)) {
                // line 27
                echo "                <div class=\"sonata-ba-filter span2\">
                    ";
                // line 28
                echo (isset($context["_list_filters"]) ? $context["_list_filters"] : null);
                echo "
                </div>
            ";
            }
            // line 31
            echo "        </div>
    ";
        }
        // line 33
        echo "
";
    }

    // line 16
    public function block_preview($context, array $blocks = array())
    {
    }

    // line 17
    public function block_form($context, array $blocks = array())
    {
    }

    // line 18
    public function block_list($context, array $blocks = array())
    {
    }

    // line 19
    public function block_show($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle::ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  74 => 26,  124 => 52,  110 => 42,  65 => 26,  139 => 57,  118 => 46,  20 => 1,  170 => 55,  165 => 52,  150 => 48,  146 => 47,  97 => 39,  84 => 29,  58 => 22,  34 => 18,  81 => 18,  53 => 20,  275 => 106,  271 => 105,  266 => 103,  249 => 95,  237 => 89,  232 => 87,  225 => 83,  216 => 80,  205 => 75,  200 => 73,  184 => 66,  157 => 64,  152 => 52,  129 => 41,  120 => 47,  113 => 34,  145 => 59,  126 => 55,  76 => 27,  70 => 17,  100 => 40,  96 => 21,  181 => 57,  178 => 56,  174 => 14,  161 => 55,  153 => 62,  104 => 18,  90 => 47,  83 => 19,  37 => 5,  23 => 1,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 111,  278 => 86,  268 => 85,  264 => 84,  258 => 98,  252 => 80,  247 => 78,  241 => 90,  229 => 73,  220 => 70,  214 => 69,  177 => 62,  169 => 69,  140 => 55,  132 => 51,  128 => 47,  111 => 43,  107 => 36,  61 => 23,  273 => 96,  269 => 94,  254 => 97,  246 => 90,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 82,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 72,  159 => 51,  143 => 56,  135 => 55,  131 => 43,  119 => 40,  108 => 42,  102 => 42,  71 => 29,  67 => 31,  63 => 11,  59 => 10,  47 => 18,  38 => 19,  201 => 92,  196 => 90,  183 => 82,  171 => 13,  166 => 71,  163 => 68,  158 => 67,  156 => 6,  151 => 61,  142 => 58,  138 => 49,  136 => 58,  123 => 48,  121 => 51,  117 => 50,  115 => 45,  105 => 40,  91 => 38,  69 => 24,  62 => 25,  49 => 9,  35 => 4,  101 => 40,  94 => 16,  89 => 33,  85 => 31,  79 => 28,  75 => 33,  68 => 31,  56 => 21,  50 => 19,  87 => 46,  72 => 16,  66 => 30,  55 => 25,  25 => 5,  21 => 2,  43 => 21,  41 => 20,  28 => 14,  24 => 11,  31 => 8,  29 => 15,  26 => 14,  19 => 11,  98 => 39,  93 => 28,  88 => 37,  78 => 34,  46 => 19,  44 => 17,  40 => 5,  32 => 4,  27 => 12,  22 => 12,  209 => 76,  203 => 78,  199 => 67,  193 => 69,  189 => 68,  187 => 84,  182 => 66,  176 => 64,  173 => 71,  168 => 59,  164 => 11,  162 => 59,  154 => 58,  149 => 62,  147 => 52,  144 => 51,  141 => 47,  133 => 65,  130 => 57,  125 => 46,  122 => 45,  116 => 44,  112 => 47,  109 => 19,  106 => 44,  103 => 41,  99 => 17,  95 => 28,  92 => 38,  86 => 36,  82 => 33,  80 => 14,  73 => 27,  64 => 25,  60 => 24,  57 => 23,  54 => 26,  51 => 21,  48 => 8,  45 => 18,  42 => 16,  39 => 15,  36 => 14,  33 => 13,  30 => 2,);
    }
}
