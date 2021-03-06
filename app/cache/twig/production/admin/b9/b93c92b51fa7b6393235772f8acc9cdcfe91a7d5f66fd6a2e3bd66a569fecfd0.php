<?php

/* Setting/System/member_edit.twig */
class __TwigTemplate_647757fc938e15ab7ccb24f4386ded59eb479a8f2983b5ec80d56bce0a973819 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 22
        $this->parent = $this->loadTemplate("default_frame.twig", "Setting/System/member_edit.twig", 22);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'sub_title' => array($this, 'block_sub_title'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "default_frame.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 24
        $context["menus"] = array(0 => "setting", 1 => "system", 2 => "member");
        // line 29
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : null), array(0 => "Form/bootstrap_3_horizontal_layout.html.twig"));
        // line 22
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 26
    public function block_title($context, array $blocks = array())
    {
        echo "システム設定";
    }

    // line 27
    public function block_sub_title($context, array $blocks = array())
    {
        echo "メンバー管理";
    }

    // line 31
    public function block_main($context, array $blocks = array())
    {
        // line 32
        echo "    <div class=\"row\" id=\"aside_wrap\">
        <div class=\"col-md-9\">
            <div class=\"box\">
                <div class=\"box-header\">
                    <h3 class=\"box-title\">メンバー登録・編集</h3>
                </div><!-- /.box-header -->
                <form role=\"form\" class=\"form-horizontal\" name=\"form1\" id=\"form1\" method=\"post\" action=\"\" enctype=\"multipart/form-data\">
                    <div class=\"box-body\">

                        ";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "_token", array()), 'row');
        echo "
                        ";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "name", array()), 'row');
        echo "
                        ";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "department", array()), 'row');
        echo "
                        ";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "login_id", array()), 'row');
        echo "
                        ";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "password", array()), "first", array()), 'row', array("type" => "password"));
        echo "
                        ";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "password", array()), "second", array()), 'row', array("type" => "password"));
        echo "
                        ";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "Authority", array()), 'row');
        echo "
                        ";
        // line 48
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "Work", array()), 'row');
        echo "

                    </div><!-- /.box-body -->
                </form>
            </div><!-- /.box -->

            <div class=\"row\">
                <div class=\"col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-3 text-center btn_area\">
                    <p><a href=\"";
        // line 56
        echo $this->env->getExtension('routing')->getUrl("admin_setting_system_member");
        echo "\">戻る</a></p>
                </div>
            </div>

        </div><!-- /.col -->
        
        <div class=\"col-md-3\">
            <div class=\"col_inner\" id=\"aside_column\">
                <div class=\"box no-header\">
                    <div class=\"box-body\">
                        <div class=\"row text-center\">
                            <div class=\"col-sm-6 col-sm-offset-3 col-md-12 col-md-offset-0\">
                                <button class=\"btn btn-primary btn-block btn-lg\" onclick=\"document.form1.submit();\">登録</button>
                            </div>
                        </div>
                    </div><!-- /.box-body -->
                </div><!-- /.box -->
            </div>
        </div><!-- /.col --> 

        
    </div>

";
    }

    public function getTemplateName()
    {
        return "Setting/System/member_edit.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 56,  89 => 48,  85 => 47,  81 => 46,  77 => 45,  73 => 44,  69 => 43,  65 => 42,  61 => 41,  50 => 32,  47 => 31,  41 => 27,  35 => 26,  31 => 22,  29 => 29,  27 => 24,  11 => 22,);
    }
}
/* {#*/
/* This file is part of EC-CUBE*/
/* */
/* Copyright(c) 2000-2015 LOCKON CO.,LTD. All Rights Reserved.*/
/* */
/* http://www.lockon.co.jp/*/
/* */
/* This program is free software; you can redistribute it and/or*/
/* modify it under the terms of the GNU General Public License*/
/* as published by the Free Software Foundation; either version 2*/
/* of the License, or (at your option) any later version.*/
/* */
/* This program is distributed in the hope that it will be useful,*/
/* but WITHOUT ANY WARRANTY; without even the implied warranty of*/
/* MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the*/
/* GNU General Public License for more details.*/
/* */
/* You should have received a copy of the GNU General Public License*/
/* along with this program; if not, write to the Free Software*/
/* Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA  02111-1307, USA.*/
/* #}*/
/* {% extends 'default_frame.twig' %}*/
/* */
/* {% set menus = ['setting', 'system', 'member'] %}*/
/* */
/* {% block title %}システム設定{% endblock %}*/
/* {% block sub_title %}メンバー管理{% endblock %}*/
/* */
/* {% form_theme form 'Form/bootstrap_3_horizontal_layout.html.twig' %}*/
/* */
/* {% block main %}*/
/*     <div class="row" id="aside_wrap">*/
/*         <div class="col-md-9">*/
/*             <div class="box">*/
/*                 <div class="box-header">*/
/*                     <h3 class="box-title">メンバー登録・編集</h3>*/
/*                 </div><!-- /.box-header -->*/
/*                 <form role="form" class="form-horizontal" name="form1" id="form1" method="post" action="" enctype="multipart/form-data">*/
/*                     <div class="box-body">*/
/* */
/*                         {{ form_row(form._token) }}*/
/*                         {{ form_row(form.name) }}*/
/*                         {{ form_row(form.department) }}*/
/*                         {{ form_row(form.login_id) }}*/
/*                         {{ form_row(form.password.first, { type : 'password' }) }}*/
/*                         {{ form_row(form.password.second, { type : 'password' }) }}*/
/*                         {{ form_row(form.Authority) }}*/
/*                         {{ form_row(form.Work) }}*/
/* */
/*                     </div><!-- /.box-body -->*/
/*                 </form>*/
/*             </div><!-- /.box -->*/
/* */
/*             <div class="row">*/
/*                 <div class="col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-3 text-center btn_area">*/
/*                     <p><a href="{{ url('admin_setting_system_member') }}">戻る</a></p>*/
/*                 </div>*/
/*             </div>*/
/* */
/*         </div><!-- /.col -->*/
/*         */
/*         <div class="col-md-3">*/
/*             <div class="col_inner" id="aside_column">*/
/*                 <div class="box no-header">*/
/*                     <div class="box-body">*/
/*                         <div class="row text-center">*/
/*                             <div class="col-sm-6 col-sm-offset-3 col-md-12 col-md-offset-0">*/
/*                                 <button class="btn btn-primary btn-block btn-lg" onclick="document.form1.submit();">登録</button>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div><!-- /.box-body -->*/
/*                 </div><!-- /.box -->*/
/*             </div>*/
/*         </div><!-- /.col --> */
/* */
/*         */
/*     </div>*/
/* */
/* {% endblock %}*/
/* */
