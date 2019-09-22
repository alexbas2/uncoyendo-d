<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/charity_zymphonies_theme/templates/layout/page.html.twig */
class __TwigTemplate_5f88fc556156baecfc1d7d243817a6613be11f56dfb1edc7986ead8c6d7f32c8 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 65, "for" => 136];
        $filters = ["escape" => 70, "raw" => 137, "date" => 560];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for'],
                ['escape', 'raw', 'date'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 60
        echo "
<!-- <div class=\"top-nav\">
  <div class=\"container\">
    <div class=\"row\">
      
      ";
        // line 65
        if (($context["show_social_icon"] ?? null)) {
            // line 66
            echo "        <div class=\"col-md-6\">
          <p class=\"social-media\">
            Follow us 
            ";
            // line 69
            if (($context["facebook_url"] ?? null)) {
                // line 70
                echo "              <a href=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["facebook_url"] ?? null)), "html", null, true);
                echo "\"  class=\"facebook\" target=\"_blank\" ><i class=\"fab fa-facebook-f\"></i></a>
            ";
            }
            // line 72
            echo "            ";
            if (($context["google_plus_url"] ?? null)) {
                // line 73
                echo "              <a href=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["google_plus_url"] ?? null)), "html", null, true);
                echo "\"  class=\"google-plus\" target=\"_blank\" ><i class=\"fab fa-google-plus-g\"></i></a>
            ";
            }
            // line 75
            echo "            ";
            if (($context["twitter_url"] ?? null)) {
                // line 76
                echo "              <a href=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["twitter_url"] ?? null)), "html", null, true);
                echo "\" class=\"twitter\" target=\"_blank\" ><i class=\"fab fa-twitter\"></i></a>
            ";
            }
            // line 78
            echo "            ";
            if (($context["linkedin_url"] ?? null)) {
                // line 79
                echo "              <a href=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["linkedin_url"] ?? null)), "html", null, true);
                echo "\" class=\"linkedin\" target=\"_blank\"><i class=\"fab fa-linkedin-in\"></i></a>
            ";
            }
            // line 81
            echo "            ";
            if (($context["pinterest_url"] ?? null)) {
                // line 82
                echo "              <a href=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["pinterest_url"] ?? null)), "html", null, true);
                echo "\" class=\"pinterest\" target=\"_blank\" ><i class=\"fab fa-pinterest-p\"></i></a>
            ";
            }
            // line 84
            echo "            ";
            if (($context["rss_url"] ?? null)) {
                // line 85
                echo "              <a href=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["rss_url"] ?? null)), "html", null, true);
                echo "\" class=\"rss\" target=\"_blank\" ><i class=\"fa fa-rss\"></i></a>
            ";
            }
            // line 87
            echo "          </p>
        </div>
      ";
        }
        // line 90
        echo "     
    </div>
  </div>
</div> -->

<div class=\"header-wrap\">

  <div class=\"header\">
    <div class=\"container\">
      <div class=\"row\">

        <!-- Start: Header -->

        <div class=\"navbar-header col-md-3\">
          <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#main-navigation\">
            <i class=\"fas fa-bars\"></i>
          </button>
          ";
        // line 107
        if ($this->getAttribute(($context["page"] ?? null), "header", [])) {
            // line 108
            echo "            ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "header", [])), "html", null, true);
            echo "
          ";
        }
        // line 110
        echo "        </div>

        <!-- End: Header -->

        ";
        // line 114
        if (($this->getAttribute(($context["page"] ?? null), "primary_menu", []) || $this->getAttribute(($context["page"] ?? null), "search", []))) {
            // line 115
            echo "          <div class=\"col-md-9\">

            ";
            // line 117
            if ($this->getAttribute(($context["page"] ?? null), "search", [])) {
                // line 118
                echo "              ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "search", [])), "html", null, true);
                echo "
            ";
            }
            // line 120
            echo "
            ";
            // line 121
            if ($this->getAttribute(($context["page"] ?? null), "primary_menu", [])) {
                // line 122
                echo "              ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "primary_menu", [])), "html", null, true);
                echo "
            ";
            }
            // line 124
            echo "            
          </div>
        ";
        }
        // line 127
        echo "
      </div>
    </div>
  </div>

  ";
        // line 132
        if ((($context["is_front"] ?? null) && ($context["show_slideshow"] ?? null))) {
            // line 133
            echo "    
      <div class=\"flexslider\">
        <ul class=\"slides\">
          ";
            // line 136
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["slider_content"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["slider_contents"]) {
                // line 137
                echo "            ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed($context["slider_contents"]));
                echo "
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['slider_contents'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 139
            echo "        </ul>
      </div>
    
  ";
        }
        // line 143
        echo "
</div>


<!-- Start: Top widget -->

";
        // line 149
        if ((($this->getAttribute(($context["page"] ?? null), "topwidget_first", []) || $this->getAttribute(($context["page"] ?? null), "topwidget_second", [])) || $this->getAttribute(($context["page"] ?? null), "topwidget_third", []))) {
            // line 150
            echo "  <div class=\"topwidget\" id=\"topwidget\">

    <div class=\"container\">

      ";
            // line 154
            if ($this->getAttribute(($context["page"] ?? null), "topwidget_title", [])) {
                // line 155
                echo "        <div class=\"custom-block-title\" >
          ";
                // line 156
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "topwidget_title", [])), "html", null, true);
                echo "
        </div>
      ";
            }
            // line 159
            echo "
        <div class=\"row topwidget-list clearfix\">

          <!-- Start: Top widget first -->          
          ";
            // line 163
            if ($this->getAttribute(($context["page"] ?? null), "topwidget_first", [])) {
                // line 164
                echo "            <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["topwidget_class"] ?? null)), "html", null, true);
                echo ">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "topwidget_first", [])), "html", null, true);
                echo "</div>
          ";
            }
            // line 165
            echo "          
          <!-- End: Top widget first --> 

          <!-- Start: Top widget second -->          
          ";
            // line 169
            if ($this->getAttribute(($context["page"] ?? null), "topwidget_second", [])) {
                // line 170
                echo "            <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["topwidget_class"] ?? null)), "html", null, true);
                echo ">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "topwidget_second", [])), "html", null, true);
                echo "</div>
          ";
            }
            // line 171
            echo "          
          <!-- End: Top widget second --> 
          
          <!-- Start: Top widget third -->         
          ";
            // line 175
            if ($this->getAttribute(($context["page"] ?? null), "topwidget_third", [])) {
                // line 176
                echo "            <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["topwidget_class"] ?? null)), "html", null, true);
                echo ">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "topwidget_third", [])), "html", null, true);
                echo "</div>
          ";
            }
            // line 177
            echo "          
          <!-- End: Top widget third -->

        </div>
    </div>
  </div>
";
        }
        // line 184
        echo "
<!--End: Top widget -->

    
<!--Start: Highlighted -->

";
        // line 190
        if ($this->getAttribute(($context["page"] ?? null), "highlighted", [])) {
            // line 191
            echo "  <div class=\"highlighted\">
    <div class=\"container\">
      ";
            // line 193
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "highlighted", [])), "html", null, true);
            echo "
    </div>
  </div>
";
        }
        // line 197
        echo "
<!--End: Highlighted -->


<!--Start: Top Message -->

";
        // line 203
        if ($this->getAttribute(($context["page"] ?? null), "topmessage", [])) {
            // line 204
            echo "  <div class=\"top-message\">
    <div class=\"container\">
      ";
            // line 206
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "topmessage", [])), "html", null, true);
            echo "
    </div>
  </div>
";
        }
        // line 210
        echo "
<!--End: Top Message -->


<!--Start: Title -->
";
        // line 215
        if (($this->getAttribute(($context["page"] ?? null), "page_title", []) &&  !($context["is_front"] ?? null))) {
            // line 216
            echo "  <div id=\"page-title\">
    <div id=\"page-title-inner\">
      <div class=\"container\">
        ";
            // line 219
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "page_title", [])), "html", null, true);
            echo "
      </div>
    </div>
  </div>
";
        }
        // line 224
        echo "<!--End: Title -->

<div class=\"main-content\">
  <div class=\"container\">
    <div class=\"\">

      <!--Start: Breadcrumb -->

      ";
        // line 232
        if ( !($context["is_front"] ?? null)) {
            // line 233
            echo "        <div class=\"row\">
          <div class=\"col-md-12\">";
            // line 234
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "breadcrumb", [])), "html", null, true);
            echo "</div>
        </div>
      ";
        }
        // line 237
        echo "
      <!--End: Breadcrumb -->

      <div class=\"row layout\">

        <!--- Start: Left SideBar -->
        ";
        // line 243
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])) {
            // line 244
            echo "          <div class=";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebarfirst"] ?? null)), "html", null, true);
            echo ">
            <div class=\"sidebar\">
              ";
            // line 246
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])), "html", null, true);
            echo "
            </div>
          </div>
        ";
        }
        // line 250
        echo "        <!-- End Left SideBar -->

        <!--- Start Content -->
        ";
        // line 253
        if ($this->getAttribute(($context["page"] ?? null), "content", [])) {
            // line 254
            echo "          <div class=";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["contentlayout"] ?? null)), "html", null, true);
            echo ">
            <div class=\"content_layout\">
              ";
            // line 256
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content", [])), "html", null, true);
            echo "
            </div>              
          </div>
        ";
        }
        // line 260
        echo "        <!-- End: Content -->

        <!-- Start: Right SideBar -->
        ";
        // line 263
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])) {
            // line 264
            echo "          <div class=";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebarsecond"] ?? null)), "html", null, true);
            echo ">
            <div class=\"sidebar\">
              ";
            // line 266
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])), "html", null, true);
            echo "
            </div>
          </div>
        ";
        }
        // line 270
        echo "        <!-- End: Right SideBar -->
        
      </div>
    
    </div>
  </div>
</div>

<!-- End: Main content -->


<!-- Start: Clients -->
";
        // line 282
        if ($this->getAttribute(($context["page"] ?? null), "clients", [])) {
            echo " 

  <div class=\"clients\" id=\"clients\">

    ";
            // line 286
            if ($this->getAttribute(($context["page"] ?? null), "clients_title", [])) {
                // line 287
                echo "      <h2 class=\"custom-block-title\" >
        ";
                // line 288
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "clients_title", [])), "html", null, true);
                echo "
      </h2>
    ";
            }
            // line 291
            echo "
    <div class=\"container\">
      ";
            // line 293
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "clients", [])), "html", null, true);
            echo "
    </div>
  </div>

";
        }
        // line 298
        echo "<!--End: Clients -->


<!-- Start: Features -->
";
        // line 302
        if ((($this->getAttribute(($context["page"] ?? null), "features_first", []) || $this->getAttribute(($context["page"] ?? null), "features_second", [])) || $this->getAttribute(($context["page"] ?? null), "features_third", []))) {
            // line 303
            echo "
  <div class=\"features\">
    <div class=\"container\">

      ";
            // line 307
            if ($this->getAttribute(($context["page"] ?? null), "features_title", [])) {
                // line 308
                echo "        <h2 class=\"custom-block-title\" >
          ";
                // line 309
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "features_title", [])), "html", null, true);
                echo "
        </h2>
      ";
            }
            // line 312
            echo "
      <div class=\"row\">

        <!-- Start: Features First -->
        ";
            // line 316
            if ($this->getAttribute(($context["page"] ?? null), "features_first", [])) {
                // line 317
                echo "          <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["features_first_class"] ?? null)), "html", null, true);
                echo ">
            ";
                // line 318
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "features_first", [])), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 321
            echo "        <!-- End: Features First -->

        <!-- Start :Features Second -->
        ";
            // line 324
            if ($this->getAttribute(($context["page"] ?? null), "features_second", [])) {
                // line 325
                echo "          <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["features_class"] ?? null)), "html", null, true);
                echo ">
            ";
                // line 326
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "features_second", [])), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 329
            echo "        <!-- End: Features Second -->

        <!-- Start: Features third -->
        ";
            // line 332
            if ($this->getAttribute(($context["page"] ?? null), "features_third", [])) {
                // line 333
                echo "          <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["features_class"] ?? null)), "html", null, true);
                echo ">
            ";
                // line 334
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "features_third", [])), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 337
            echo "        <!-- End: Features Third -->

      </div>
    </div>
  </div>

";
        }
        // line 344
        echo "<!--End: Features -->


<!-- Start: Services widgets -->
";
        // line 348
        if ((($this->getAttribute(($context["page"] ?? null), "services_first", []) || $this->getAttribute(($context["page"] ?? null), "services_second", [])) || $this->getAttribute(($context["page"] ?? null), "services_third", []))) {
            // line 349
            echo "
  <div class=\"services\" id=\"services\">    
    <div class=\"container\">

      ";
            // line 353
            if ($this->getAttribute(($context["page"] ?? null), "services_title", [])) {
                // line 354
                echo "        <h2 class=\"custom-block-title\" >
          ";
                // line 355
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "services_title", [])), "html", null, true);
                echo "
        </h2>
      ";
            }
            // line 358
            echo "
      <div class=\"row services-list\">

        <!-- Start: Bottom First -->          
        ";
            // line 362
            if ($this->getAttribute(($context["page"] ?? null), "services_first", [])) {
                // line 363
                echo "          <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["services_class"] ?? null)), "html", null, true);
                echo ">
            ";
                // line 364
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "services_first", [])), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 366
            echo "          
        <!-- End: Bottom First -->

        <!-- Start: Bottom Second -->
        ";
            // line 370
            if ($this->getAttribute(($context["page"] ?? null), "services_second", [])) {
                // line 371
                echo "          <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["services_class"] ?? null)), "html", null, true);
                echo ">
            ";
                // line 372
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "services_second", [])), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 374
            echo "          
        <!-- End: Bottom Second -->

        <!-- Start: Bottom third -->          
        ";
            // line 378
            if ($this->getAttribute(($context["page"] ?? null), "services_third", [])) {
                // line 379
                echo "          <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["services_class"] ?? null)), "html", null, true);
                echo ">
            ";
                // line 380
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "services_third", [])), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 382
            echo "          
        <!-- End: Bottom Third -->

        <!-- Start: Bottom third -->          
        ";
            // line 386
            if ($this->getAttribute(($context["page"] ?? null), "services_forth", [])) {
                // line 387
                echo "          <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["services_class"] ?? null)), "html", null, true);
                echo ">
            ";
                // line 388
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "services_forth", [])), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 390
            echo "          
        <!-- End: Bottom Third -->

      </div>
    </div>
  </div>

";
        }
        // line 398
        echo "<!--End: Price table widgets -->


<!-- Start: Bottom widgets -->
";
        // line 402
        if (((($this->getAttribute(($context["page"] ?? null), "bottom_first", []) || $this->getAttribute(($context["page"] ?? null), "bottom_second", [])) || $this->getAttribute(($context["page"] ?? null), "bottom_third", [])) || $this->getAttribute(($context["page"] ?? null), "bottom_forth", []))) {
            // line 403
            echo "
  <div class=\"bottom-widget\" id=\"bottom-widget\">    
    <div class=\"container\">

      ";
            // line 407
            if ($this->getAttribute(($context["page"] ?? null), "bottom_title", [])) {
                // line 408
                echo "        <h2 class=\"custom-block-title\" >
          ";
                // line 409
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "bottom_title", [])), "html", null, true);
                echo "
        </h2>
      ";
            }
            // line 412
            echo "
      <div class=\"row\">

        <!-- Start: Bottom First -->          
        ";
            // line 416
            if ($this->getAttribute(($context["page"] ?? null), "bottom_first", [])) {
                // line 417
                echo "          <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bottom_class"] ?? null)), "html", null, true);
                echo ">
            ";
                // line 418
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "bottom_first", [])), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 420
            echo "          
        <!-- End: Bottom First -->

        <!-- Start: Bottom Second -->
        ";
            // line 424
            if ($this->getAttribute(($context["page"] ?? null), "bottom_second", [])) {
                // line 425
                echo "          <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bottom_class"] ?? null)), "html", null, true);
                echo ">
            ";
                // line 426
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "bottom_second", [])), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 428
            echo "          
        <!-- End: Bottom Second -->

        <!-- Start: Bottom third -->          
        ";
            // line 432
            if ($this->getAttribute(($context["page"] ?? null), "bottom_third", [])) {
                // line 433
                echo "          <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bottom_class"] ?? null)), "html", null, true);
                echo ">
            ";
                // line 434
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "bottom_third", [])), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 436
            echo "          
        <!-- End: Bottom Third -->

        <!-- Start: Bottom Forth -->
        ";
            // line 440
            if ($this->getAttribute(($context["page"] ?? null), "bottom_forth", [])) {
                // line 441
                echo "          <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bottom_class"] ?? null)), "html", null, true);
                echo ">
            ";
                // line 442
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "bottom_forth", [])), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 445
            echo "        <!-- End: Bottom Forth -->

      </div>
    </div>
  </div>

";
        }
        // line 452
        echo "<!--End: Bottom widgets -->


<!-- Start: Updates widgets -->
";
        // line 456
        if (((($this->getAttribute(($context["page"] ?? null), "updates_first", []) || $this->getAttribute(($context["page"] ?? null), "updates_second", [])) || $this->getAttribute(($context["page"] ?? null), "updates_third", [])) || $this->getAttribute(($context["page"] ?? null), "updates_forth", []))) {
            // line 457
            echo "
  <div class=\"updates\" id=\"updates\">    
    <div class=\"container\">

      ";
            // line 461
            if ($this->getAttribute(($context["page"] ?? null), "updates_title", [])) {
                // line 462
                echo "        <h2 class=\"custom-block-title\" >
          ";
                // line 463
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "updates_title", [])), "html", null, true);
                echo "
        </h2>
      ";
            }
            // line 466
            echo "

      <div class=\"row updates-list\">

        <!-- Start: Bottom First -->          
        ";
            // line 471
            if ($this->getAttribute(($context["page"] ?? null), "updates_first", [])) {
                // line 472
                echo "          <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["updates_class"] ?? null)), "html", null, true);
                echo ">
            ";
                // line 473
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "updates_first", [])), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 475
            echo "          
        <!-- End: Bottom First -->

        <!-- Start: Bottom Second -->
        ";
            // line 479
            if ($this->getAttribute(($context["page"] ?? null), "updates_second", [])) {
                // line 480
                echo "          <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["updates_class"] ?? null)), "html", null, true);
                echo ">
            ";
                // line 481
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "updates_second", [])), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 483
            echo "          
        <!-- End: Bottom Second -->

        <!-- Start: Bottom third -->          
        ";
            // line 487
            if ($this->getAttribute(($context["page"] ?? null), "updates_third", [])) {
                // line 488
                echo "          <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["updates_class"] ?? null)), "html", null, true);
                echo ">
            ";
                // line 489
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "updates_third", [])), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 491
            echo "          
        <!-- End: Bottom Third -->

        <!-- Start: Bottom Forth -->
        ";
            // line 495
            if ($this->getAttribute(($context["page"] ?? null), "updates_forth", [])) {
                // line 496
                echo "          <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["updates_class"] ?? null)), "html", null, true);
                echo ">
            ";
                // line 497
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "updates_forth", [])), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 500
            echo "        <!-- End: Bottom Forth -->

      </div>
    </div>
  </div>

";
        }
        // line 507
        echo "<!--End: Team widgets -->


<!-- Start: Footer widgets -->
";
        // line 511
        if ((($this->getAttribute(($context["page"] ?? null), "footer_first", []) || $this->getAttribute(($context["page"] ?? null), "footer_second", [])) || $this->getAttribute(($context["page"] ?? null), "footer_third", []))) {
            // line 512
            echo "
  <div class=\"footer\" id=\"footer\">
    <div class=\"container\">

      ";
            // line 516
            if ($this->getAttribute(($context["page"] ?? null), "footer_title", [])) {
                // line 517
                echo "        <h2 class=\"custom-block-title\" >
          ";
                // line 518
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_title", [])), "html", null, true);
                echo "
        </h2>
      ";
            }
            // line 521
            echo "
      <div class=\"row\">

        <!-- Start: Footer First -->
        ";
            // line 525
            if ($this->getAttribute(($context["page"] ?? null), "footer_first", [])) {
                // line 526
                echo "          <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_class"] ?? null)), "html", null, true);
                echo ">
            ";
                // line 527
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_first", [])), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 530
            echo "        <!-- End: Footer First -->

        <!-- Start :Footer Second -->
        ";
            // line 533
            if ($this->getAttribute(($context["page"] ?? null), "footer_second", [])) {
                // line 534
                echo "          <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_class"] ?? null)), "html", null, true);
                echo ">
            ";
                // line 535
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_second", [])), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 538
            echo "        <!-- End: Footer Second -->

        <!-- Start: Footer third -->
        ";
            // line 541
            if ($this->getAttribute(($context["page"] ?? null), "footer_third", [])) {
                // line 542
                echo "          <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_class"] ?? null)), "html", null, true);
                echo ">
            ";
                // line 543
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_third", [])), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 546
            echo "        <!-- End: Footer Third -->

      </div>
    </div>
  </div>

";
        }
        // line 553
        echo "<!--End: Footer widgets -->

<!-- Start: Copyright -->
<div class=\"copyright\">

    <div class=\"container\">

      <span>Copyright © ";
        // line 560
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo ". All rights reserved.</span>

      ";
        // line 562
        if (($context["show_credit_link"] ?? null)) {
            // line 563
            echo "        <span class=\"credit-link\">Designed By <a href=\"http://www.zymphonies.com\" target=\"_blank\">Zymphonies</a></span>
      ";
        }
        // line 565
        echo "
      <p class=\"social-media\">
        ";
        // line 567
        if (($context["facebook_url"] ?? null)) {
            // line 568
            echo "          <a href=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["facebook_url"] ?? null)), "html", null, true);
            echo "\"  class=\"facebook\" target=\"_blank\" ><i class=\"fab fa-facebook-f\"></i></a>
        ";
        }
        // line 570
        echo "        ";
        if (($context["google_plus_url"] ?? null)) {
            // line 571
            echo "          <a href=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["google_plus_url"] ?? null)), "html", null, true);
            echo "\"  class=\"google-plus\" target=\"_blank\" ><i class=\"fab fa-google-plus-g\"></i></a>
        ";
        }
        // line 573
        echo "        ";
        if (($context["twitter_url"] ?? null)) {
            // line 574
            echo "          <a href=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["twitter_url"] ?? null)), "html", null, true);
            echo "\" class=\"twitter\" target=\"_blank\" ><i class=\"fab fa-twitter\"></i></a>
        ";
        }
        // line 576
        echo "        ";
        if (($context["linkedin_url"] ?? null)) {
            // line 577
            echo "          <a href=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["linkedin_url"] ?? null)), "html", null, true);
            echo "\" class=\"linkedin\" target=\"_blank\"><i class=\"fab fa-linkedin-in\"></i></a>
        ";
        }
        // line 579
        echo "        ";
        if (($context["pinterest_url"] ?? null)) {
            // line 580
            echo "          <a href=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["pinterest_url"] ?? null)), "html", null, true);
            echo "\" class=\"pinterest\" target=\"_blank\" ><i class=\"fab fa-pinterest-p\"></i></a>
        ";
        }
        // line 582
        echo "        ";
        if (($context["rss_url"] ?? null)) {
            // line 583
            echo "          <a href=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["rss_url"] ?? null)), "html", null, true);
            echo "\" class=\"rss\" target=\"_blank\" ><i class=\"fa fa-rss\"></i></a>
        ";
        }
        // line 585
        echo "      </p>

  </div>
</div>
<!-- End: Copyright -->





";
    }

    public function getTemplateName()
    {
        return "themes/charity_zymphonies_theme/templates/layout/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1086 => 585,  1080 => 583,  1077 => 582,  1071 => 580,  1068 => 579,  1062 => 577,  1059 => 576,  1053 => 574,  1050 => 573,  1044 => 571,  1041 => 570,  1035 => 568,  1033 => 567,  1029 => 565,  1025 => 563,  1023 => 562,  1018 => 560,  1009 => 553,  1000 => 546,  994 => 543,  989 => 542,  987 => 541,  982 => 538,  976 => 535,  971 => 534,  969 => 533,  964 => 530,  958 => 527,  953 => 526,  951 => 525,  945 => 521,  939 => 518,  936 => 517,  934 => 516,  928 => 512,  926 => 511,  920 => 507,  911 => 500,  905 => 497,  900 => 496,  898 => 495,  892 => 491,  886 => 489,  881 => 488,  879 => 487,  873 => 483,  867 => 481,  862 => 480,  860 => 479,  854 => 475,  848 => 473,  843 => 472,  841 => 471,  834 => 466,  828 => 463,  825 => 462,  823 => 461,  817 => 457,  815 => 456,  809 => 452,  800 => 445,  794 => 442,  789 => 441,  787 => 440,  781 => 436,  775 => 434,  770 => 433,  768 => 432,  762 => 428,  756 => 426,  751 => 425,  749 => 424,  743 => 420,  737 => 418,  732 => 417,  730 => 416,  724 => 412,  718 => 409,  715 => 408,  713 => 407,  707 => 403,  705 => 402,  699 => 398,  689 => 390,  683 => 388,  678 => 387,  676 => 386,  670 => 382,  664 => 380,  659 => 379,  657 => 378,  651 => 374,  645 => 372,  640 => 371,  638 => 370,  632 => 366,  626 => 364,  621 => 363,  619 => 362,  613 => 358,  607 => 355,  604 => 354,  602 => 353,  596 => 349,  594 => 348,  588 => 344,  579 => 337,  573 => 334,  568 => 333,  566 => 332,  561 => 329,  555 => 326,  550 => 325,  548 => 324,  543 => 321,  537 => 318,  532 => 317,  530 => 316,  524 => 312,  518 => 309,  515 => 308,  513 => 307,  507 => 303,  505 => 302,  499 => 298,  491 => 293,  487 => 291,  481 => 288,  478 => 287,  476 => 286,  469 => 282,  455 => 270,  448 => 266,  442 => 264,  440 => 263,  435 => 260,  428 => 256,  422 => 254,  420 => 253,  415 => 250,  408 => 246,  402 => 244,  400 => 243,  392 => 237,  386 => 234,  383 => 233,  381 => 232,  371 => 224,  363 => 219,  358 => 216,  356 => 215,  349 => 210,  342 => 206,  338 => 204,  336 => 203,  328 => 197,  321 => 193,  317 => 191,  315 => 190,  307 => 184,  298 => 177,  290 => 176,  288 => 175,  282 => 171,  274 => 170,  272 => 169,  266 => 165,  258 => 164,  256 => 163,  250 => 159,  244 => 156,  241 => 155,  239 => 154,  233 => 150,  231 => 149,  223 => 143,  217 => 139,  208 => 137,  204 => 136,  199 => 133,  197 => 132,  190 => 127,  185 => 124,  179 => 122,  177 => 121,  174 => 120,  168 => 118,  166 => 117,  162 => 115,  160 => 114,  154 => 110,  148 => 108,  146 => 107,  127 => 90,  122 => 87,  116 => 85,  113 => 84,  107 => 82,  104 => 81,  98 => 79,  95 => 78,  89 => 76,  86 => 75,  80 => 73,  77 => 72,  71 => 70,  69 => 69,  64 => 66,  62 => 65,  55 => 60,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/charity_zymphonies_theme/templates/layout/page.html.twig", "C:\\xampp\\htdocs\\uncoyendo\\themes\\charity_zymphonies_theme\\templates\\layout\\page.html.twig");
    }
}
