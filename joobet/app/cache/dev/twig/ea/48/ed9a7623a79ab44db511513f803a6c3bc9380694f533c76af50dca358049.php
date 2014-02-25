<?php

/* SonataBlockBundle:Block:block_exception_debug.html.twig */
class __TwigTemplate_ea48ed9a7623a79ab44db511513f803a6c3bc9380694f533c76af50dca358049 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'block' => array($this, 'block_block'),
        );
    }

    protected function doGetParent(array $context)
    {
        return $this->env->resolveTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates"), "block_base"));
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        // line 15
        echo "    <div class=\"cms-block-exception\" ";
        if ((isset($context["forceStyle"]) ? $context["forceStyle"] : $this->getContext($context, "forceStyle"))) {
            echo "style=\"overflow-y: scroll; min-width: 300px; max-height: 300px;\"";
        }
        echo ">

        ";
        // line 18
        echo "        ";
        if ((isset($context["forceStyle"]) ? $context["forceStyle"] : $this->getContext($context, "forceStyle"))) {
            // line 19
            echo "            <link href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/framework/css/exception_layout.css"), "html", null, true);
            echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
            <link href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/framework/css/exception.css"), "html", null, true);
            echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
        ";
        }
        // line 22
        echo "        ";
        $this->env->loadTemplate("TwigBundle:Exception:exception.html.twig")->display($context);
        // line 23
        echo "    </div>
";
    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_exception_debug.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  277 => 2,  245 => 87,  223 => 80,  213 => 74,  207 => 71,  190 => 62,  185 => 59,  114 => 31,  160 => 59,  389 => 103,  383 => 101,  377 => 99,  354 => 92,  349 => 90,  342 => 88,  335 => 86,  332 => 85,  324 => 82,  315 => 79,  302 => 73,  299 => 72,  293 => 70,  287 => 68,  282 => 66,  276 => 64,  263 => 55,  234 => 48,  231 => 47,  12 => 34,  609 => 190,  598 => 188,  594 => 187,  586 => 184,  581 => 182,  573 => 179,  567 => 175,  558 => 172,  554 => 171,  545 => 169,  541 => 168,  529 => 164,  524 => 162,  517 => 161,  511 => 159,  492 => 137,  481 => 128,  478 => 127,  458 => 107,  447 => 102,  442 => 101,  439 => 100,  424 => 88,  418 => 113,  415 => 112,  401 => 86,  396 => 141,  394 => 136,  388 => 132,  382 => 127,  351 => 121,  334 => 120,  320 => 115,  307 => 82,  301 => 80,  296 => 77,  281 => 3,  255 => 71,  218 => 43,  206 => 58,  195 => 65,  192 => 53,  186 => 38,  180 => 56,  155 => 38,  148 => 35,  710 => 213,  699 => 208,  693 => 205,  683 => 204,  678 => 202,  666 => 200,  663 => 199,  660 => 198,  652 => 193,  632 => 190,  615 => 189,  602 => 185,  589 => 178,  587 => 177,  582 => 176,  565 => 174,  548 => 170,  536 => 166,  530 => 168,  527 => 167,  525 => 166,  522 => 165,  513 => 160,  507 => 157,  502 => 140,  499 => 139,  495 => 138,  489 => 136,  483 => 129,  477 => 127,  464 => 147,  462 => 108,  459 => 145,  450 => 141,  422 => 134,  420 => 127,  406 => 123,  400 => 120,  397 => 119,  395 => 118,  391 => 117,  385 => 116,  358 => 106,  346 => 102,  344 => 101,  339 => 100,  336 => 99,  333 => 98,  329 => 119,  326 => 83,  323 => 116,  321 => 91,  318 => 80,  316 => 89,  308 => 88,  288 => 81,  286 => 80,  251 => 67,  244 => 65,  233 => 62,  197 => 66,  194 => 53,  188 => 61,  175 => 53,  77 => 36,  857 => 274,  854 => 273,  849 => 268,  845 => 266,  839 => 263,  836 => 262,  834 => 261,  829 => 259,  821 => 258,  818 => 257,  816 => 256,  813 => 255,  807 => 253,  805 => 252,  802 => 251,  796 => 249,  794 => 248,  791 => 247,  785 => 245,  783 => 244,  780 => 243,  774 => 241,  772 => 240,  769 => 239,  766 => 238,  762 => 221,  757 => 218,  751 => 216,  748 => 215,  745 => 214,  731 => 213,  725 => 211,  720 => 208,  714 => 206,  706 => 204,  704 => 210,  701 => 209,  698 => 201,  680 => 200,  677 => 199,  675 => 198,  671 => 196,  668 => 195,  665 => 194,  661 => 191,  658 => 190,  655 => 189,  651 => 280,  649 => 192,  644 => 270,  642 => 238,  638 => 237,  635 => 236,  629 => 233,  626 => 232,  624 => 231,  619 => 228,  613 => 225,  610 => 187,  608 => 223,  605 => 186,  603 => 194,  599 => 184,  596 => 189,  593 => 180,  588 => 179,  584 => 174,  575 => 180,  569 => 168,  566 => 167,  563 => 166,  557 => 163,  553 => 162,  550 => 161,  544 => 172,  539 => 171,  533 => 169,  521 => 154,  518 => 153,  514 => 160,  509 => 158,  506 => 153,  504 => 156,  501 => 147,  498 => 146,  491 => 145,  488 => 144,  485 => 129,  482 => 142,  476 => 141,  473 => 110,  470 => 149,  467 => 137,  460 => 136,  451 => 103,  448 => 140,  443 => 138,  431 => 129,  425 => 135,  419 => 164,  416 => 163,  411 => 126,  404 => 87,  399 => 124,  392 => 104,  386 => 119,  378 => 117,  371 => 113,  367 => 180,  357 => 125,  352 => 91,  350 => 117,  343 => 115,  330 => 105,  327 => 118,  317 => 86,  310 => 80,  304 => 81,  300 => 78,  297 => 77,  291 => 75,  289 => 74,  284 => 67,  279 => 65,  274 => 77,  270 => 67,  260 => 70,  256 => 89,  250 => 60,  242 => 59,  228 => 52,  198 => 55,  172 => 46,  124 => 49,  110 => 41,  65 => 89,  118 => 34,  20 => 11,  170 => 55,  165 => 281,  150 => 58,  146 => 34,  97 => 47,  84 => 16,  58 => 25,  34 => 15,  81 => 15,  53 => 23,  275 => 73,  271 => 59,  266 => 1,  249 => 95,  237 => 64,  232 => 85,  225 => 58,  216 => 42,  205 => 56,  200 => 69,  184 => 47,  152 => 63,  129 => 59,  113 => 48,  126 => 48,  76 => 35,  70 => 29,  100 => 43,  181 => 29,  178 => 45,  174 => 47,  161 => 55,  153 => 62,  104 => 42,  90 => 20,  23 => 12,  480 => 128,  474 => 161,  469 => 158,  461 => 155,  457 => 135,  453 => 142,  444 => 149,  440 => 131,  437 => 130,  435 => 146,  430 => 144,  427 => 89,  423 => 166,  413 => 100,  409 => 98,  407 => 88,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 130,  381 => 115,  379 => 126,  374 => 98,  368 => 96,  365 => 95,  362 => 94,  360 => 122,  355 => 105,  341 => 114,  337 => 87,  322 => 101,  314 => 85,  312 => 84,  309 => 76,  305 => 74,  298 => 91,  294 => 83,  285 => 89,  283 => 4,  278 => 74,  268 => 58,  264 => 84,  258 => 72,  252 => 70,  247 => 66,  241 => 90,  229 => 61,  220 => 57,  214 => 69,  177 => 54,  169 => 69,  140 => 53,  132 => 57,  128 => 41,  107 => 52,  61 => 26,  273 => 96,  269 => 75,  254 => 97,  243 => 88,  240 => 50,  238 => 57,  235 => 63,  230 => 61,  227 => 46,  224 => 45,  221 => 79,  219 => 78,  217 => 77,  208 => 68,  204 => 57,  179 => 72,  159 => 39,  143 => 26,  135 => 55,  119 => 44,  102 => 43,  71 => 32,  67 => 28,  63 => 29,  59 => 26,  38 => 7,  201 => 56,  196 => 90,  183 => 58,  171 => 50,  166 => 71,  163 => 60,  158 => 67,  156 => 6,  151 => 36,  142 => 58,  138 => 49,  136 => 155,  121 => 52,  117 => 57,  105 => 51,  91 => 44,  62 => 88,  49 => 20,  94 => 40,  89 => 43,  85 => 37,  75 => 31,  68 => 27,  56 => 23,  87 => 35,  25 => 12,  21 => 11,  28 => 14,  24 => 13,  31 => 14,  26 => 14,  19 => 11,  93 => 21,  88 => 38,  78 => 32,  46 => 19,  44 => 18,  27 => 13,  79 => 37,  72 => 10,  69 => 9,  47 => 48,  40 => 19,  37 => 18,  22 => 12,  246 => 51,  157 => 58,  145 => 42,  139 => 51,  131 => 48,  123 => 38,  120 => 35,  115 => 47,  111 => 29,  108 => 42,  101 => 49,  98 => 23,  96 => 37,  83 => 36,  74 => 11,  66 => 29,  55 => 85,  52 => 84,  50 => 22,  43 => 18,  41 => 19,  35 => 15,  32 => 12,  29 => 15,  209 => 72,  203 => 70,  199 => 67,  193 => 64,  189 => 52,  187 => 84,  182 => 66,  176 => 64,  173 => 52,  168 => 49,  164 => 46,  162 => 45,  154 => 103,  149 => 36,  147 => 52,  144 => 33,  141 => 47,  133 => 49,  130 => 57,  125 => 39,  122 => 45,  116 => 32,  112 => 109,  109 => 53,  106 => 45,  103 => 24,  99 => 38,  95 => 22,  92 => 43,  86 => 17,  82 => 39,  80 => 35,  73 => 34,  64 => 28,  60 => 87,  57 => 86,  54 => 25,  51 => 22,  48 => 21,  45 => 20,  42 => 28,  39 => 17,  36 => 16,  33 => 16,  30 => 9,);
    }
}
