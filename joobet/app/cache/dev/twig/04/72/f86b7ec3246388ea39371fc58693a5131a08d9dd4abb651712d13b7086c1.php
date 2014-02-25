<?php

/* SonataDoctrineORMAdminBundle:CRUD:show_orm_one_to_many.html.twig */
class __TwigTemplate_0472f86b7ec3246388ea39371fc58693a5131a08d9dd4abb651712d13b7086c1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig");

        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_show_field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        // line 15
        echo "    <ul class=\"sonata-ba-show-one-to-many\">
    ";
        // line 16
        if ((($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "hasassociationadmin") && $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "associationadmin"), "isGranted", array(0 => "EDIT"), "method")) && $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "associationadmin"), "hasRoute", array(0 => "edit"), "method"))) {
            // line 17
            echo "        ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")));
            foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
                // line 18
                echo "            <li><a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "associationadmin"), "generateObjectUrl", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options"), "route"), "name"), 1 => (isset($context["element"]) ? $context["element"] : $this->getContext($context, "element")), 2 => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options"), "route"), "parameters")), "method"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('sonata_admin')->renderRelationElement((isset($context["element"]) ? $context["element"] : $this->getContext($context, "element")), (isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description"))), "html", null, true);
                echo "</a></li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 20
            echo "    ";
        } else {
            // line 21
            echo "        ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")));
            foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
                // line 22
                echo "            <li>";
                echo twig_escape_filter($this->env, $this->env->getExtension('sonata_admin')->renderRelationElement((isset($context["element"]) ? $context["element"] : $this->getContext($context, "element")), (isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description"))), "html", null, true);
                echo "</li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 24
            echo "    ";
        }
        // line 25
        echo "    </ul>
";
    }

    public function getTemplateName()
    {
        return "SonataDoctrineORMAdminBundle:CRUD:show_orm_one_to_many.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  222 => 81,  215 => 78,  210 => 75,  191 => 69,  694 => 412,  685 => 406,  654 => 389,  647 => 382,  643 => 381,  637 => 378,  633 => 377,  627 => 374,  617 => 367,  592 => 351,  585 => 347,  579 => 342,  577 => 341,  571 => 338,  542 => 321,  538 => 319,  531 => 312,  526 => 310,  486 => 292,  466 => 280,  456 => 273,  452 => 272,  445 => 267,  429 => 255,  366 => 210,  361 => 208,  331 => 187,  272 => 158,  267 => 156,  253 => 95,  137 => 59,  306 => 141,  303 => 140,  292 => 135,  280 => 131,  236 => 109,  347 => 134,  338 => 130,  319 => 124,  265 => 99,  262 => 105,  257 => 149,  248 => 116,  239 => 97,  211 => 81,  202 => 77,  134 => 59,  127 => 32,  277 => 109,  245 => 87,  223 => 80,  213 => 126,  207 => 71,  190 => 62,  185 => 68,  114 => 71,  160 => 58,  389 => 103,  383 => 224,  377 => 99,  354 => 92,  349 => 90,  342 => 88,  335 => 188,  332 => 85,  324 => 82,  315 => 123,  302 => 73,  299 => 112,  293 => 109,  287 => 68,  282 => 66,  276 => 64,  263 => 125,  234 => 48,  231 => 47,  12 => 34,  609 => 362,  598 => 188,  594 => 187,  586 => 184,  581 => 345,  573 => 179,  567 => 337,  558 => 172,  554 => 171,  545 => 169,  541 => 168,  529 => 164,  524 => 162,  517 => 161,  511 => 159,  492 => 295,  481 => 290,  478 => 127,  458 => 107,  447 => 102,  442 => 101,  439 => 260,  424 => 254,  418 => 113,  415 => 247,  401 => 86,  396 => 234,  394 => 136,  388 => 132,  382 => 127,  351 => 135,  334 => 120,  320 => 115,  307 => 82,  301 => 117,  296 => 77,  281 => 105,  255 => 71,  218 => 43,  206 => 58,  195 => 65,  192 => 88,  186 => 111,  180 => 56,  155 => 38,  148 => 64,  710 => 213,  699 => 208,  693 => 205,  683 => 204,  678 => 398,  666 => 200,  663 => 393,  660 => 198,  652 => 193,  632 => 190,  615 => 189,  602 => 185,  589 => 178,  587 => 177,  582 => 176,  565 => 174,  548 => 170,  536 => 166,  530 => 168,  527 => 167,  525 => 166,  522 => 165,  513 => 160,  507 => 157,  502 => 140,  499 => 139,  495 => 138,  489 => 136,  483 => 129,  477 => 127,  464 => 147,  462 => 108,  459 => 145,  450 => 141,  422 => 250,  420 => 249,  406 => 123,  400 => 120,  397 => 119,  395 => 118,  391 => 117,  385 => 116,  358 => 139,  346 => 196,  344 => 101,  339 => 100,  336 => 99,  333 => 98,  329 => 119,  326 => 185,  323 => 125,  321 => 123,  318 => 122,  316 => 121,  308 => 88,  288 => 107,  286 => 133,  251 => 101,  244 => 65,  233 => 62,  197 => 70,  194 => 87,  188 => 61,  175 => 77,  77 => 27,  857 => 274,  854 => 273,  849 => 268,  845 => 266,  839 => 263,  836 => 262,  834 => 261,  829 => 259,  821 => 258,  818 => 257,  816 => 256,  813 => 255,  807 => 253,  805 => 252,  802 => 251,  796 => 249,  794 => 248,  791 => 247,  785 => 245,  783 => 244,  780 => 243,  774 => 241,  772 => 240,  769 => 239,  766 => 238,  762 => 221,  757 => 218,  751 => 216,  748 => 215,  745 => 214,  731 => 213,  725 => 211,  720 => 208,  714 => 206,  706 => 204,  704 => 210,  701 => 209,  698 => 201,  680 => 403,  677 => 199,  675 => 198,  671 => 196,  668 => 395,  665 => 194,  661 => 191,  658 => 391,  655 => 189,  651 => 280,  649 => 192,  644 => 270,  642 => 238,  638 => 237,  635 => 236,  629 => 233,  626 => 232,  624 => 231,  619 => 228,  613 => 225,  610 => 187,  608 => 223,  605 => 186,  603 => 194,  599 => 355,  596 => 189,  593 => 180,  588 => 179,  584 => 174,  575 => 180,  569 => 168,  566 => 167,  563 => 166,  557 => 330,  553 => 162,  550 => 326,  544 => 172,  539 => 171,  533 => 169,  521 => 154,  518 => 307,  514 => 306,  509 => 304,  506 => 153,  504 => 302,  501 => 147,  498 => 146,  491 => 145,  488 => 144,  485 => 129,  482 => 142,  476 => 141,  473 => 110,  470 => 149,  467 => 137,  460 => 136,  451 => 103,  448 => 140,  443 => 261,  431 => 129,  425 => 135,  419 => 164,  416 => 163,  411 => 126,  404 => 87,  399 => 124,  392 => 104,  386 => 119,  378 => 117,  371 => 113,  367 => 180,  357 => 125,  352 => 91,  350 => 117,  343 => 132,  330 => 105,  327 => 126,  317 => 86,  310 => 80,  304 => 174,  300 => 139,  297 => 77,  291 => 169,  289 => 112,  284 => 106,  279 => 104,  274 => 129,  270 => 67,  260 => 98,  256 => 96,  250 => 93,  242 => 140,  228 => 83,  198 => 55,  172 => 46,  124 => 31,  110 => 40,  65 => 30,  118 => 34,  20 => 11,  170 => 74,  165 => 59,  150 => 55,  146 => 34,  97 => 63,  84 => 39,  58 => 23,  34 => 16,  81 => 25,  53 => 10,  275 => 103,  271 => 108,  266 => 1,  249 => 95,  237 => 86,  232 => 84,  225 => 87,  216 => 100,  205 => 56,  200 => 69,  184 => 47,  152 => 92,  129 => 57,  113 => 41,  126 => 48,  76 => 57,  70 => 33,  100 => 36,  181 => 80,  178 => 45,  174 => 64,  161 => 71,  153 => 56,  104 => 67,  90 => 20,  23 => 18,  480 => 128,  474 => 285,  469 => 158,  461 => 155,  457 => 135,  453 => 142,  444 => 149,  440 => 131,  437 => 130,  435 => 258,  430 => 144,  427 => 89,  423 => 166,  413 => 100,  409 => 98,  407 => 242,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 130,  381 => 115,  379 => 126,  374 => 98,  368 => 96,  365 => 141,  362 => 94,  360 => 122,  355 => 105,  341 => 131,  337 => 87,  322 => 101,  314 => 85,  312 => 177,  309 => 117,  305 => 115,  298 => 173,  294 => 83,  285 => 111,  283 => 166,  278 => 74,  268 => 127,  264 => 84,  258 => 72,  252 => 70,  247 => 66,  241 => 90,  229 => 61,  220 => 80,  214 => 99,  177 => 54,  169 => 74,  140 => 53,  132 => 58,  128 => 58,  107 => 52,  61 => 25,  273 => 96,  269 => 100,  254 => 102,  243 => 89,  240 => 50,  238 => 139,  235 => 63,  230 => 106,  227 => 134,  224 => 103,  221 => 79,  219 => 129,  217 => 79,  208 => 124,  204 => 73,  179 => 66,  159 => 70,  143 => 59,  135 => 35,  119 => 43,  102 => 37,  71 => 32,  67 => 28,  63 => 24,  59 => 23,  38 => 17,  201 => 72,  196 => 90,  183 => 58,  171 => 63,  166 => 100,  163 => 60,  158 => 75,  156 => 57,  151 => 36,  142 => 61,  138 => 50,  136 => 60,  121 => 75,  117 => 51,  105 => 27,  91 => 34,  62 => 29,  49 => 21,  94 => 35,  89 => 35,  85 => 34,  75 => 28,  68 => 31,  56 => 24,  87 => 35,  25 => 12,  21 => 12,  28 => 14,  24 => 13,  31 => 15,  26 => 13,  19 => 11,  93 => 68,  88 => 60,  78 => 32,  46 => 35,  44 => 19,  27 => 13,  79 => 37,  72 => 25,  69 => 24,  47 => 21,  40 => 18,  37 => 17,  22 => 12,  246 => 99,  157 => 58,  145 => 52,  139 => 60,  131 => 48,  123 => 54,  120 => 56,  115 => 50,  111 => 29,  108 => 39,  101 => 73,  98 => 44,  96 => 37,  83 => 36,  74 => 52,  66 => 25,  55 => 21,  52 => 20,  50 => 22,  43 => 20,  41 => 18,  35 => 16,  32 => 15,  29 => 21,  209 => 96,  203 => 122,  199 => 67,  193 => 64,  189 => 71,  187 => 87,  182 => 80,  176 => 65,  173 => 52,  168 => 60,  164 => 72,  162 => 71,  154 => 67,  149 => 36,  147 => 90,  144 => 62,  141 => 67,  133 => 49,  130 => 57,  125 => 45,  122 => 44,  116 => 45,  112 => 49,  109 => 69,  106 => 45,  103 => 46,  99 => 26,  95 => 43,  92 => 61,  86 => 64,  82 => 33,  80 => 41,  73 => 29,  64 => 23,  60 => 22,  57 => 20,  54 => 18,  51 => 38,  48 => 40,  45 => 19,  42 => 18,  39 => 17,  36 => 17,  33 => 16,  30 => 14,);
    }
}
