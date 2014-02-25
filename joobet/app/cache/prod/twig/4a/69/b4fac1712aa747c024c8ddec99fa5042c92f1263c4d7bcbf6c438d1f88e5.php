<?php

/* SonataAdminBundle:CRUD:list_boolean.html.twig */
class __TwigTemplate_4a69b4fac1712aa747c024c8ddec99fa5042c92f1263c4d7bcbf6c438d1f88e5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'field_span_attributes' => array($this, 'block_field_span_attributes'),
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        return $this->env->resolveTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "getTemplate", array(0 => "base_list_field"), "method"));
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 14
        $context["isEditable"] = (($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "editable", array(), "any", true, true) && $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options"), "editable")) && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "isGranted", array(0 => "EDIT", 1 => (isset($context["object"]) ? $context["object"] : null)), "method"));
        // line 15
        $context["xEditableType"] = $this->env->getExtension('sonata_admin')->getXEditableType($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "type"));
        // line 17
        if (((isset($context["isEditable"]) ? $context["isEditable"] : null) && (isset($context["xEditableType"]) ? $context["xEditableType"] : null))) {
        }
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 18
    public function block_field_span_attributes($context, array $blocks = array())
    {
        // line 19
        echo "        ";
        ob_start();
        // line 20
        echo "            ";
        $this->displayParentBlock("field_span_attributes", $context, $blocks);
        echo "
            data-source=\"[{value: 0, text: '";
        // line 21
        echo $this->env->getExtension('translator')->getTranslator()->trans("label_type_no", array(), "SonataAdminBundle");
        echo "'},{value: 1, text: '";
        echo $this->env->getExtension('translator')->getTranslator()->trans("label_type_yes", array(), "SonataAdminBundle");
        echo "'}]\"
        ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 23
        echo "    ";
    }

    // line 26
    public function block_field($context, array $blocks = array())
    {
        // line 27
        echo "    ";
        ob_start();
        // line 28
        echo "        ";
        if ((isset($context["value"]) ? $context["value"] : null)) {
            // line 29
            echo "            <span class=\"label label-success\">";
            echo $this->env->getExtension('translator')->getTranslator()->trans("label_type_yes", array(), "SonataAdminBundle");
            echo "</span>
        ";
        } else {
            // line 31
            echo "            <span class=\"label label-important\">";
            echo $this->env->getExtension('translator')->getTranslator()->trans("label_type_no", array(), "SonataAdminBundle");
            echo "</span>
        ";
        }
        // line 33
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_boolean.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  609 => 190,  598 => 188,  594 => 187,  586 => 184,  581 => 182,  573 => 179,  567 => 175,  558 => 172,  554 => 171,  545 => 169,  541 => 168,  529 => 164,  524 => 162,  517 => 161,  511 => 159,  492 => 137,  481 => 128,  478 => 127,  458 => 107,  447 => 102,  442 => 101,  439 => 100,  424 => 88,  418 => 113,  415 => 112,  401 => 86,  396 => 141,  394 => 136,  388 => 132,  382 => 127,  351 => 121,  334 => 120,  320 => 115,  307 => 82,  301 => 80,  296 => 77,  281 => 75,  255 => 71,  218 => 59,  206 => 58,  195 => 54,  192 => 53,  186 => 51,  180 => 49,  155 => 38,  148 => 35,  710 => 213,  699 => 208,  693 => 205,  683 => 204,  678 => 202,  666 => 200,  663 => 199,  660 => 198,  652 => 193,  632 => 190,  615 => 189,  602 => 185,  589 => 178,  587 => 177,  582 => 176,  565 => 174,  548 => 170,  536 => 166,  530 => 168,  527 => 167,  525 => 166,  522 => 165,  513 => 160,  507 => 157,  502 => 140,  499 => 139,  495 => 138,  489 => 136,  483 => 129,  477 => 127,  464 => 147,  462 => 108,  459 => 145,  450 => 141,  422 => 134,  420 => 127,  406 => 123,  400 => 120,  397 => 119,  395 => 118,  391 => 117,  385 => 116,  358 => 106,  346 => 102,  344 => 101,  339 => 100,  336 => 99,  333 => 98,  329 => 119,  326 => 94,  323 => 116,  321 => 91,  318 => 90,  316 => 89,  308 => 88,  288 => 81,  286 => 80,  251 => 67,  244 => 65,  233 => 62,  197 => 54,  194 => 53,  188 => 49,  175 => 43,  77 => 33,  52 => 23,  857 => 274,  854 => 273,  849 => 268,  845 => 266,  839 => 263,  836 => 262,  834 => 261,  829 => 259,  821 => 258,  818 => 257,  816 => 256,  813 => 255,  807 => 253,  805 => 252,  802 => 251,  796 => 249,  794 => 248,  791 => 247,  785 => 245,  783 => 244,  780 => 243,  774 => 241,  772 => 240,  769 => 239,  766 => 238,  762 => 221,  757 => 218,  751 => 216,  748 => 215,  745 => 214,  731 => 213,  725 => 211,  720 => 208,  714 => 206,  706 => 204,  704 => 210,  701 => 209,  698 => 201,  680 => 200,  677 => 199,  675 => 198,  671 => 196,  668 => 195,  665 => 194,  661 => 191,  658 => 190,  655 => 189,  651 => 280,  649 => 192,  644 => 270,  642 => 238,  638 => 237,  635 => 236,  629 => 233,  626 => 232,  624 => 231,  619 => 228,  613 => 225,  610 => 187,  608 => 223,  605 => 186,  603 => 194,  599 => 184,  596 => 189,  593 => 180,  588 => 179,  584 => 174,  575 => 180,  569 => 168,  566 => 167,  563 => 166,  557 => 163,  553 => 162,  550 => 161,  544 => 172,  539 => 171,  533 => 169,  521 => 154,  518 => 153,  514 => 160,  509 => 158,  506 => 153,  504 => 156,  501 => 147,  498 => 146,  491 => 145,  488 => 144,  485 => 129,  482 => 142,  476 => 141,  473 => 110,  470 => 149,  467 => 137,  460 => 136,  451 => 103,  448 => 140,  443 => 138,  431 => 129,  425 => 135,  419 => 164,  416 => 163,  411 => 126,  404 => 87,  399 => 124,  392 => 120,  386 => 119,  378 => 117,  371 => 113,  367 => 180,  357 => 125,  352 => 104,  350 => 117,  343 => 115,  330 => 105,  327 => 118,  317 => 86,  310 => 80,  304 => 81,  300 => 78,  297 => 77,  291 => 75,  289 => 74,  284 => 72,  279 => 78,  274 => 77,  270 => 67,  260 => 70,  256 => 61,  250 => 60,  242 => 59,  228 => 52,  198 => 55,  172 => 46,  74 => 28,  124 => 52,  110 => 144,  65 => 29,  139 => 31,  118 => 28,  20 => 1,  170 => 55,  165 => 281,  150 => 101,  146 => 34,  97 => 69,  84 => 16,  58 => 22,  34 => 18,  81 => 15,  53 => 19,  275 => 73,  271 => 76,  266 => 74,  249 => 95,  237 => 64,  232 => 87,  225 => 58,  216 => 80,  205 => 56,  200 => 55,  184 => 47,  157 => 41,  152 => 38,  129 => 41,  120 => 47,  113 => 34,  145 => 59,  126 => 55,  76 => 29,  70 => 17,  100 => 70,  96 => 90,  181 => 29,  178 => 45,  174 => 47,  161 => 55,  153 => 62,  104 => 23,  90 => 18,  83 => 15,  37 => 19,  23 => 11,  480 => 128,  474 => 161,  469 => 158,  461 => 155,  457 => 135,  453 => 142,  444 => 149,  440 => 131,  437 => 130,  435 => 146,  430 => 144,  427 => 89,  423 => 166,  413 => 100,  409 => 98,  407 => 88,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 130,  381 => 115,  379 => 126,  374 => 123,  368 => 112,  365 => 179,  362 => 178,  360 => 122,  355 => 105,  341 => 114,  337 => 103,  322 => 101,  314 => 85,  312 => 84,  309 => 97,  305 => 95,  298 => 91,  294 => 83,  285 => 89,  283 => 79,  278 => 74,  268 => 85,  264 => 84,  258 => 72,  252 => 70,  247 => 66,  241 => 90,  229 => 61,  220 => 57,  214 => 69,  177 => 48,  169 => 69,  140 => 97,  132 => 44,  128 => 152,  111 => 30,  107 => 40,  61 => 23,  273 => 96,  269 => 75,  254 => 97,  246 => 66,  243 => 88,  240 => 65,  238 => 57,  235 => 63,  230 => 61,  227 => 81,  224 => 60,  221 => 82,  219 => 76,  217 => 75,  208 => 68,  204 => 57,  179 => 72,  159 => 39,  143 => 26,  135 => 55,  131 => 153,  119 => 148,  108 => 42,  102 => 39,  71 => 31,  67 => 30,  63 => 28,  59 => 27,  47 => 17,  38 => 18,  201 => 56,  196 => 90,  183 => 50,  171 => 13,  166 => 71,  163 => 188,  158 => 67,  156 => 6,  151 => 36,  142 => 58,  138 => 49,  136 => 155,  123 => 30,  121 => 29,  117 => 50,  115 => 27,  105 => 26,  91 => 38,  69 => 31,  62 => 28,  49 => 23,  35 => 17,  101 => 22,  94 => 16,  89 => 17,  85 => 32,  79 => 30,  75 => 33,  68 => 31,  56 => 26,  50 => 23,  87 => 32,  72 => 198,  66 => 23,  55 => 25,  25 => 12,  21 => 11,  43 => 14,  41 => 19,  28 => 17,  24 => 14,  31 => 15,  29 => 15,  26 => 15,  19 => 11,  98 => 38,  93 => 89,  88 => 33,  78 => 36,  46 => 19,  44 => 20,  40 => 20,  32 => 16,  27 => 14,  22 => 12,  209 => 76,  203 => 37,  199 => 67,  193 => 33,  189 => 52,  187 => 84,  182 => 66,  176 => 64,  173 => 42,  168 => 44,  164 => 11,  162 => 40,  154 => 103,  149 => 36,  147 => 52,  144 => 33,  141 => 47,  133 => 154,  130 => 57,  125 => 46,  122 => 149,  116 => 147,  112 => 145,  109 => 19,  106 => 44,  103 => 38,  99 => 23,  95 => 19,  92 => 34,  86 => 36,  82 => 31,  80 => 14,  73 => 24,  64 => 24,  60 => 26,  57 => 26,  54 => 153,  51 => 18,  48 => 8,  45 => 21,  42 => 15,  39 => 21,  36 => 20,  33 => 16,  30 => 15,);
    }
}
