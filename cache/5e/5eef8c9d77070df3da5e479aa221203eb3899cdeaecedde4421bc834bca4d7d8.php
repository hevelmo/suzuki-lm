<?php

/* home/promos.twig */
class __TwigTemplate_7979b6a87f15a77267a2dc4c77cae5cbba710c61028a4e898f1817bca093b638 extends Twig_Template
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
        echo "<div class=\"section-title hide_s-cross\" style=\"margin-bottom: 0; border-bottom: none;\">
    <p class=\"title text-left\">Nueva Vitara</p>
</div>
<section>
    <div id=\"home-scross\" style=\"background: #fff; margin-bottom: 70px;\">
        <div class=\"full_width\">
            <div class=\"hover_details\" style=\"display: none;\">
                <div class=\"relative\">
                    <div class=\"details\"><img src=\"img/sections/home/s-cross/see.png\" alt=\"\"/></div>
                    <div class=\"up\"><img src=\"img/sections/home/s-cross/up.png\" alt=\"\"/></div>
                    <div class=\"down\"><img src=\"img/sections/home/s-cross/down.png\" alt=\"\"/></div>
                </div>
            </div>
            <a href=\"";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["_host"]) ? $context["_host"] : null), "html", null, true);
        echo "modelos/nueva-vitara\" title=\"Nueva Vitara 2016\" onclick=\"ga('send', 'event', 'Suzuki ";
        echo twig_escape_filter($this->env, (isset($context["_loc"]) ? $context["_loc"] : null), "html", null, true);
        echo " Nueva Vitara 2016', 'Home Cross', 'Nueva_Vitara_2016');\">
                <img class=\"scross_bg flash\" src=\"";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["_host"]) ? $context["_host"] : null), "html", null, true);
        echo "img/sections/home/nueva-vitara/gif_pagina.gif\" alt=\"Nueva Vitara\"/>
                <img class=\"scross_bg\" src=\"";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["_host"]) ? $context["_host"] : null), "html", null, true);
        echo "img/sections/home/nueva-vitara/gif_pagina.gif\" alt=\"Nueva Vitara\"/>
            </a>
        </div>
        ";
        // line 78
        echo "    </div>
    <div class=\"clearfix\"></div>
</section>
";
    }

    public function getTemplateName()
    {
        return "home/promos.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 78,  44 => 16,  40 => 15,  34 => 14,  19 => 1,);
    }
}
/* <div class="section-title hide_s-cross" style="margin-bottom: 0; border-bottom: none;">*/
/*     <p class="title text-left">Nueva Vitara</p>*/
/* </div>*/
/* <section>*/
/*     <div id="home-scross" style="background: #fff; margin-bottom: 70px;">*/
/*         <div class="full_width">*/
/*             <div class="hover_details" style="display: none;">*/
/*                 <div class="relative">*/
/*                     <div class="details"><img src="img/sections/home/s-cross/see.png" alt=""/></div>*/
/*                     <div class="up"><img src="img/sections/home/s-cross/up.png" alt=""/></div>*/
/*                     <div class="down"><img src="img/sections/home/s-cross/down.png" alt=""/></div>*/
/*                 </div>*/
/*             </div>*/
/*             <a href="{{ _host }}modelos/nueva-vitara" title="Nueva Vitara 2016" onclick="ga('send', 'event', 'Suzuki {{ _loc }} Nueva Vitara 2016', 'Home Cross', 'Nueva_Vitara_2016');">*/
/*                 <img class="scross_bg flash" src="{{ _host }}img/sections/home/nueva-vitara/gif_pagina.gif" alt="Nueva Vitara"/>*/
/*                 <img class="scross_bg" src="{{ _host }}img/sections/home/nueva-vitara/gif_pagina.gif" alt="Nueva Vitara"/>*/
/*             </a>*/
/*         </div>*/
/*         {#*/
/*         <div class="s-cross_form hidden">*/
/*             <div class="promo-video-bg">*/
/*                 <video id="video-home-scross" preload="auto" muted="" poster="files/videos/s-cross-promo/s-cross.jpg">*/
/*                     <source src="files/videos/s-cross-promo/s-cross.mp4" type="video/mp4">*/
/*                     <source src="files/videos/s-cross-promo/s-cross.webm" type="video/webm">*/
/*                 </video>*/
/*             </div>*/
/*             <div class="s-cross_close"></div>*/
/*             <div class="form-scross-wrapper">*/
/*                 <div class="left">*/
/*                     <div class="first-step">*/
/*                         <h5>*/
/*                             Nuevo <span>Suzuki</span>*/
/*                             <strong>S-CROSS</strong>*/
/*                             <span class="small">desde</span> $ 249,900<span class="fa fa-asterisk" style="font-size: 15px; top: -15px; left: 2px; position: relative;"></span>*/
/*                         </h5>*/
/*                         <small><span class="fa fa-asterisk"></span> VERSIÓN GL/TM</small>*/
/*                         <p><strong>Agenda tu prueba de manejo.</strong> El crossover que te hará olvidar tu primera camioneta.</p>*/
/*                         <form id="contactos" name="contactos" method="post" action="testscross.php">*/
/*                         <!--<form onsubmit="$.test_drive_promo_s_cross( this ); return false;"> -->*/
/*                             <input type="hidden" name="concesionaria" value="Suzuki Guadalajara">*/
/*                             <input type="hidden" name="modelo" value="s-cross">*/
/*                             <fieldset>*/
/*                                 <input type="text"  id="sxc_name"   name="name"     placeholder="Nombre completo"       data-validation-data="required|name" />*/
/*                                 <p class="invalid-message" id="error_mail">&nbsp;<span>&nbsp;</span></p>*/
/*                             </fieldset>*/
/*                             <fieldset>*/
/*                                 <input type="tel"   id="sxc_tel"    name="tel"      placeholder="Número de celular (10 dígitos)" maxlength="10"         data-validation-data="required|phone" />*/
/*                                 <p class="invalid-message" id="error_mail">&nbsp;<span>&nbsp;</span></p>*/
/*                             </fieldset>*/
/*                             <fieldset>*/
/*                                 <input type="email" id="sxc_email"  name="email"    placeholder="Correo electrónico"    data-validation-data="required|email" />*/
/*                                 <p class="invalid-message" id="error_mail">&nbsp;<span>&nbsp;</span></p>*/
/*                             </fieldset>*/
/*                             <fieldset>*/
/*                                 <input type="submit" id="sxc_send" value="Enviar"/>*/
/*                             </fieldset>*/
/*                         </form>*/
/*                     </div>*/
/*                     <div class="second-step hidden">*/
/*                         <p class="title">Gracias</p>*/
/*                         <p>Tu prueba de manejo ha sido agendada.</p>*/
/*                         <p>Pronto recibirás confirmación en tu correo electrónico: <span id="sxc_email_review"></span></p>*/
/*                         <p>Te hemos asignado un asesor quien se pondrá en contacto contigo para confirmar tus datos y cualquier duda que puedas tener.</p>*/
/* */
/*                         <p><a href="s-cross.html">Conoce más del S-cross</a></p>*/
/*                         <fieldset>*/
/*                             <button id="s-cross_finish">Finalizar</button>*/
/*                         </fieldset>*/
/*                     </div>*/
/* */
/*                 </div>*/
/*                 <div class="right">*/
/*                     <img src="img/sections/home/s-cross/badge.png" alt="auto TV Show"/>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         #}*/
/*     </div>*/
/*     <div class="clearfix"></div>*/
/* </section>*/
/* */