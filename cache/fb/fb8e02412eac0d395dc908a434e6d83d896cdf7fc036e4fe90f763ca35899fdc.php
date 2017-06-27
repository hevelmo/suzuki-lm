<?php

/* contacto/contact_form.twig */
class __TwigTemplate_7326c218ab8a4be7fc51f2f4db80b08e45163239d896472b4c9b5cb821a7c870 extends Twig_Template
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
        $context["model"] = (isset($context["mdopa"]) ? $context["mdopa"] : null);
        // line 2
        echo "<div class=\"contact_content\">
    <div id=\"form-wrapper\">
        <div class=\"financing_main\">
            <div class=\"financing_content\">
                <form id=\"contact\">
                    ";
        // line 8
        echo "                    <div class=\"contact_elements\">
                        <div class=\"contact_element a\">
                            <fieldset>
                                <label for=\"suk_name\" style=\"display: none;\">
                                    <span style=\"color: red;\" class=\"fa fa-asterisk\"></span> Nombre
                                </label>
                                <input type=\"text\" id=\"suk_name\" name=\"nombre\" class=\"validate-required\" placeholder=\"Nombre\" data-validation-data=\"required|name\">
                                <p class=\"invalid-message\" id=\"error_name\">Este campo es obligatorio<span>&nbsp;</span></p>
                            </fieldset>
                        </div>
                        <div class=\"contact_element b\">
                            <fieldset>
                                <label for=\"suk_lastname\" style=\"display: none;\">
                                    <span style=\"color: red;\" class=\"fa fa-asterisk\"></span> Apellido
                                </label>
                                <input type=\"text\" id=\"suk_lastname\" name=\"apellido\" class=\"validate-required\" placeholder=\"Apellidos\" data-validation-data=\"required|name\">
                                <p class=\"invalid-message\" id=\"error_name\">Este campo es obligatorio<span>&nbsp;</span></p>
                            </fieldset>
                        </div>
                        <div class=\"clearfix\"></div>
                    </div>
                    <div class=\"contact_elements\">
                        <div class=\"contact_element a\">
                            <fieldset>
                                <label for=\"suk_email\" style=\"display: none;\">
                                    <span style=\"color: red;\" class=\"fa fa-asterisk\"></span> Correo electrónico
                                </label>
                                <input type=\"text\" id=\"suk_email\" name=\"correo\" class=\"validate-required\" placeholder=\"Correo electrónico\" data-validation-data=\"required|email\">
                                <p class=\"invalid-message\" id=\"error_name\">Este campo es obligatorio<span>&nbsp;</span></p>
                            </fieldset>
                        </div>
                        <div class=\"contact_element b\">
                            <fieldset>
                                <label for=\"suk_department\" style=\"display: none;\">
                                    <span style=\"color: red;\" class=\"fa fa-asterisk\"></span> Departamento
                                </label>
                                <div class=\"select\">
                                    <select name=\"departamento\" id=\"suk_department\" type=\"dropdown\" class=\"seleccionar form-control validate_select\" style=\"width: 100%;\" data-validation-data=\"required|free\">
                                        <option label=\"Selecccionar departamento\" selected=\"selected\" disabled=\"disabled\" value=\"\">Selecciona Departamento</option>
                                        <option label=\"Ventas\" value=\"Ventas\">Ventas</option>
                                        <option label=\"Servicio\" value=\"Servicio\">Servicio</option>
                                        <option label=\"Refacciones / Accesorios\" value=\"Refacciones / Accesorios\">Refacciones / Accesorios</option>
                                        <option label=\"Mercadotecnia\" value=\"Mercadotecnia\">Mercadotecnia</option>
                                        <option label=\"Otros\" value=\"Otros\">Otros</option>
                                    </select>
                                    </div>
                                <p class=\"invalid-message\" id=\"error_departamento\">Este campo es obligatorio<span>&nbsp;</span></p>
                            </fieldset>
                        </div>
                    </div>
                    <div class=\"contact_elements\">
                        <div class=\"contact_element a\">
                            <fieldset>
                                <label for=\"suk_model\" style=\"display: none;\">
                                    <span style=\"color: red;\" class=\"fa fa-asterisk\"></span> Auto
                                </label>
                                <div class=\"select\">
                                    <select name=\"modelo\" id=\"suk_model\" type=\"dropdown\" class=\"seleccionar form-control validate_select\" style=\"width: 100%;\" data-validation-data=\"required|free\">
                                        <option label=\"Selecciona Modelo\" selected=\"selected\" disabled=\"disabled\" value=\"\">Selecciona Modelo</option>
                                        <option label=\"Swift Sport\" value=\"Swift Sport\">Swift Sport</option>
                                        <option label=\"Swift\" value=\"Swift\">Swift</option>
                                        <option label=\"Kizashi\" value=\"Kizashi\">Kizashi</option>
                                        <option label=\"Grand Vitara\" value=\"Grand Vitara\">Grand Vitara</option>
                                        <option label=\"S-Cross\" value=\"S-Cross\">S-Cross</option>
                                        <option label=\"Ciaz\"value=\"Ciaz\">Ciaz</option>
                                        <option label=\"Ignis\"value=\"Ignis\">Ignis</option>
                                        <option label=\"Nueva Vitara\"value=\"Nueva Vitara\">Nueva Vitara</option>
                                    </select>
                                </div>
                                <p class=\"invalid-message\" id=\"error_auto\">Este campo es obligatorio<span>&nbsp;</span></p>
                            </fieldset>
                        </div>
                        <div class=\"contact_element b\">
                        </div>
                    </div>
                    <div class=\"contact_elements\">
                        <div class=\"contact_element ab\">
                            <fieldset class=\"fieldset-radio-checkbox\" id=\"checkbox-news\">
                                <label for=\"suk_model_newsletter\" class=\"label-checkbox\">
                                    <input type=\"checkbox\" id=\"suk_model_newsletter\" name=\"model_newsletter\" value=\"\"> Deseo recibir noticias y promociones.
                                </label>
                            </fieldset>
                        </div>
                    </div>
                    <div class=\"contact_elements\">
                        <div class=\"contact_element ab\">
                            <fieldset>
                                <label for=\"suk_message\" style=\"display: none;\">
                                    <span style=\"color: red;\" class=\"fa fa-asterisk\"></span> Mensaje
                                </label>
                                <textarea name=\"mensaje\" class=\"escribir2 validate-required\" id=\"suk_message\" data-validation-data=\"required|address\" placeholder=\"Mensaje\"></textarea>
                                <p class=\"invalid-message\" id=\"error_mensaje\">Este campo es obligatorio<span>&nbsp;</span></p>
                            </fieldset>
                        </div>
                    </div>
                    <div class=\"contact_elements\">
                        <div class=\"contact_element ab\">
                            <fieldset id=\"fields_hidden\">
                                <input type=\"hidden\" name=\"producto\" id=\"suk_producto\" value=\"Contacto\">
                                <input type=\"hidden\" name=\"concesionaria\" id=\"suk_concesionaria\" value=\"Suzuki Autos ";
        // line 107
        echo twig_escape_filter($this->env, (isset($context["_loc"]) ? $context["_loc"] : null), "html", null, true);
        echo "\">
                                <input type=\"hidden\" name=\"imagen\" id=\"suk_imagen\" value=\"\">
                                <input type=\"hidden\" name=\"news\" id=\"suk_news\" value=\"0\">
                                <input type=\"hidden\" name=\"campaign\" id=\"suk_campaign\" value=\"Suzuki Autos ";
        // line 110
        echo twig_escape_filter($this->env, (isset($context["_loc"]) ? $context["_loc"] : null), "html", null, true);
        echo " - Contacto\">
                                <input type=\"hidden\" id=\"suk_agn\" name=\"agencia\" value=\"Suzuki Autos ";
        // line 111
        echo twig_escape_filter($this->env, (isset($context["_loc"]) ? $context["_loc"] : null), "html", null, true);
        echo "\">
                            </fieldset>
                        </div>
                    </div>
                    <div class=\"clearfix\"></div>
                </form>
                <div class=\"contact_elements\">
                    <div class=\"contact_element a\">
                        <fieldset>
                            <div id=\"loader_send_icon\" class=\"form-loader\" style=\"display: none;\">
                                <div class=\"loader\">
                                    <div class=\"loader-wrap\">
                                        <div class=\"loader-item\"></div>
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                    </div>
                    <div class=\"contact_element b\">
                        <fieldset>
                            <button id=\"contact_send\" class=\"enviar button red send_contact_form contact-form-send\">Enviar</button>
                        </fieldset>
                    </div>
                </div>
                <div class=\"financing_elements\">
                    <div class=\"financing_element ab\">
                        <fieldset>
                            <p>
                                Tus datos están a salvo.<br>Para mayor información revisa nuestro <a href=\"";
        // line 139
        echo twig_escape_filter($this->env, (isset($context["_host"]) ? $context["_host"] : null), "html", null, true);
        echo "aviso-de-privacidad\" id=\"go-privacy-notice\">Aviso de Privacidad</a>
                            </p>
                        </fieldset>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "contacto/contact_form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 139,  139 => 111,  135 => 110,  129 => 107,  28 => 8,  21 => 2,  19 => 1,);
    }
}
/* {% set model = mdopa %}*/
/* <div class="contact_content">*/
/*     <div id="form-wrapper">*/
/*         <div class="financing_main">*/
/*             <div class="financing_content">*/
/*                 <form id="contact">*/
/*                     {# Contacto #}*/
/*                     <div class="contact_elements">*/
/*                         <div class="contact_element a">*/
/*                             <fieldset>*/
/*                                 <label for="suk_name" style="display: none;">*/
/*                                     <span style="color: red;" class="fa fa-asterisk"></span> Nombre*/
/*                                 </label>*/
/*                                 <input type="text" id="suk_name" name="nombre" class="validate-required" placeholder="Nombre" data-validation-data="required|name">*/
/*                                 <p class="invalid-message" id="error_name">Este campo es obligatorio<span>&nbsp;</span></p>*/
/*                             </fieldset>*/
/*                         </div>*/
/*                         <div class="contact_element b">*/
/*                             <fieldset>*/
/*                                 <label for="suk_lastname" style="display: none;">*/
/*                                     <span style="color: red;" class="fa fa-asterisk"></span> Apellido*/
/*                                 </label>*/
/*                                 <input type="text" id="suk_lastname" name="apellido" class="validate-required" placeholder="Apellidos" data-validation-data="required|name">*/
/*                                 <p class="invalid-message" id="error_name">Este campo es obligatorio<span>&nbsp;</span></p>*/
/*                             </fieldset>*/
/*                         </div>*/
/*                         <div class="clearfix"></div>*/
/*                     </div>*/
/*                     <div class="contact_elements">*/
/*                         <div class="contact_element a">*/
/*                             <fieldset>*/
/*                                 <label for="suk_email" style="display: none;">*/
/*                                     <span style="color: red;" class="fa fa-asterisk"></span> Correo electrónico*/
/*                                 </label>*/
/*                                 <input type="text" id="suk_email" name="correo" class="validate-required" placeholder="Correo electrónico" data-validation-data="required|email">*/
/*                                 <p class="invalid-message" id="error_name">Este campo es obligatorio<span>&nbsp;</span></p>*/
/*                             </fieldset>*/
/*                         </div>*/
/*                         <div class="contact_element b">*/
/*                             <fieldset>*/
/*                                 <label for="suk_department" style="display: none;">*/
/*                                     <span style="color: red;" class="fa fa-asterisk"></span> Departamento*/
/*                                 </label>*/
/*                                 <div class="select">*/
/*                                     <select name="departamento" id="suk_department" type="dropdown" class="seleccionar form-control validate_select" style="width: 100%;" data-validation-data="required|free">*/
/*                                         <option label="Selecccionar departamento" selected="selected" disabled="disabled" value="">Selecciona Departamento</option>*/
/*                                         <option label="Ventas" value="Ventas">Ventas</option>*/
/*                                         <option label="Servicio" value="Servicio">Servicio</option>*/
/*                                         <option label="Refacciones / Accesorios" value="Refacciones / Accesorios">Refacciones / Accesorios</option>*/
/*                                         <option label="Mercadotecnia" value="Mercadotecnia">Mercadotecnia</option>*/
/*                                         <option label="Otros" value="Otros">Otros</option>*/
/*                                     </select>*/
/*                                     </div>*/
/*                                 <p class="invalid-message" id="error_departamento">Este campo es obligatorio<span>&nbsp;</span></p>*/
/*                             </fieldset>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="contact_elements">*/
/*                         <div class="contact_element a">*/
/*                             <fieldset>*/
/*                                 <label for="suk_model" style="display: none;">*/
/*                                     <span style="color: red;" class="fa fa-asterisk"></span> Auto*/
/*                                 </label>*/
/*                                 <div class="select">*/
/*                                     <select name="modelo" id="suk_model" type="dropdown" class="seleccionar form-control validate_select" style="width: 100%;" data-validation-data="required|free">*/
/*                                         <option label="Selecciona Modelo" selected="selected" disabled="disabled" value="">Selecciona Modelo</option>*/
/*                                         <option label="Swift Sport" value="Swift Sport">Swift Sport</option>*/
/*                                         <option label="Swift" value="Swift">Swift</option>*/
/*                                         <option label="Kizashi" value="Kizashi">Kizashi</option>*/
/*                                         <option label="Grand Vitara" value="Grand Vitara">Grand Vitara</option>*/
/*                                         <option label="S-Cross" value="S-Cross">S-Cross</option>*/
/*                                         <option label="Ciaz"value="Ciaz">Ciaz</option>*/
/*                                         <option label="Ignis"value="Ignis">Ignis</option>*/
/*                                         <option label="Nueva Vitara"value="Nueva Vitara">Nueva Vitara</option>*/
/*                                     </select>*/
/*                                 </div>*/
/*                                 <p class="invalid-message" id="error_auto">Este campo es obligatorio<span>&nbsp;</span></p>*/
/*                             </fieldset>*/
/*                         </div>*/
/*                         <div class="contact_element b">*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="contact_elements">*/
/*                         <div class="contact_element ab">*/
/*                             <fieldset class="fieldset-radio-checkbox" id="checkbox-news">*/
/*                                 <label for="suk_model_newsletter" class="label-checkbox">*/
/*                                     <input type="checkbox" id="suk_model_newsletter" name="model_newsletter" value=""> Deseo recibir noticias y promociones.*/
/*                                 </label>*/
/*                             </fieldset>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="contact_elements">*/
/*                         <div class="contact_element ab">*/
/*                             <fieldset>*/
/*                                 <label for="suk_message" style="display: none;">*/
/*                                     <span style="color: red;" class="fa fa-asterisk"></span> Mensaje*/
/*                                 </label>*/
/*                                 <textarea name="mensaje" class="escribir2 validate-required" id="suk_message" data-validation-data="required|address" placeholder="Mensaje"></textarea>*/
/*                                 <p class="invalid-message" id="error_mensaje">Este campo es obligatorio<span>&nbsp;</span></p>*/
/*                             </fieldset>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="contact_elements">*/
/*                         <div class="contact_element ab">*/
/*                             <fieldset id="fields_hidden">*/
/*                                 <input type="hidden" name="producto" id="suk_producto" value="Contacto">*/
/*                                 <input type="hidden" name="concesionaria" id="suk_concesionaria" value="Suzuki Autos {{ _loc }}">*/
/*                                 <input type="hidden" name="imagen" id="suk_imagen" value="">*/
/*                                 <input type="hidden" name="news" id="suk_news" value="0">*/
/*                                 <input type="hidden" name="campaign" id="suk_campaign" value="Suzuki Autos {{ _loc }} - Contacto">*/
/*                                 <input type="hidden" id="suk_agn" name="agencia" value="Suzuki Autos {{ _loc }}">*/
/*                             </fieldset>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="clearfix"></div>*/
/*                 </form>*/
/*                 <div class="contact_elements">*/
/*                     <div class="contact_element a">*/
/*                         <fieldset>*/
/*                             <div id="loader_send_icon" class="form-loader" style="display: none;">*/
/*                                 <div class="loader">*/
/*                                     <div class="loader-wrap">*/
/*                                         <div class="loader-item"></div>*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </fieldset>*/
/*                     </div>*/
/*                     <div class="contact_element b">*/
/*                         <fieldset>*/
/*                             <button id="contact_send" class="enviar button red send_contact_form contact-form-send">Enviar</button>*/
/*                         </fieldset>*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="financing_elements">*/
/*                     <div class="financing_element ab">*/
/*                         <fieldset>*/
/*                             <p>*/
/*                                 Tus datos están a salvo.<br>Para mayor información revisa nuestro <a href="{{ _host }}aviso-de-privacidad" id="go-privacy-notice">Aviso de Privacidad</a>*/
/*                             </p>*/
/*                         </fieldset>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/