
<div class="text-center">
    <div class="s-usercenterimg focusideimg profile-picture ">
        <img id="avatar" class="user-image editable img-responsive img-circle" src="@if(!empty(Theme::get('avatar'))) {!!  url(Theme::get('avatar')) !!} @else {!! Theme::asset()->url('images/default_avatar.png') !!} @endif"  />
    </div>
    <div class="space-8">

    </div>
    <p class="cor-gray51 text-size18">{{ Auth::user()['name'] }}</p>
</div>
<div class="space-20"></div>
<div class="accordion-style1 panel-group accordion-style2 g-side1" id="accordion">
    <div class="panel panel-default" style="width:283px;">
        <div class="panel-heading">
            <h4 class="panel-title clearfix">
                <a href="#collapseOne" data-parent="#accordion" data-toggle="collapse" class="accordion-toggle g-wrap1 {{ ($_SERVER['REQUEST_URI']=='/user/info' || $_SERVER['REQUEST_URI']=='/user/skill')?'g-active':'' }}"><span class="s-baseicon"></span>&nbsp;&nbsp;&nbsp;&nbsp;基本资料
                    <i class="pull-right ace-icon fa {{ ($_SERVER['REQUEST_URI']=='/user/info' || $_SERVER['REQUEST_URI']=='/user/skill')?'fa-angle-down':'fa-angle-right' }}" data-icon-hide="fa-angle-down" data-icon-show="fa-angle-right"></i>
                </a>
            </h4>
        </div>

        <div id="collapseOne" class="panel-collapse {{ ($_SERVER['REQUEST_URI']=='/user/info' || $_SERVER['REQUEST_URI']=='/user/skill')?'in':'collapse' }}">
            <div class="g-sidenav {{ ($_SERVER['REQUEST_URI']=='/user/info')?'z-active':'' }}">
                <a href="/user/info" class="g-wrap2 {{ ($_SERVER['REQUEST_URI']=='/user/info')?'active':'' }}">资料完善</a>
            </div>
            <div class="g-sidenav {{($_SERVER['REQUEST_URI']=='/user/skill')?'z-active':'' }}">
                <a href="/user/skill" class="g-wrap2 {{($_SERVER['REQUEST_URI']=='/user/skill')?'active':'' }}">技能标签</a>
            </div>
        </div>
    </div>
    <div class="panel panel-default" style="width:283px;">
        <div class="panel-heading">
            <h4 class="panel-title clearfix">
                <a href="#collapseTwo" data-parent="#accordion" data-toggle="collapse" class="accordion-toggle g-wrap1
                {{ ($_SERVER['REQUEST_URI']=='/user/loginPassword' || $_SERVER['REQUEST_URI']=='/user/payPassword')?'g-active':'' }}"><span class="s-accounticon"></span>&nbsp;&nbsp;&nbsp;&nbsp;账号安全
                    <i class="pull-right ace-icon fa {{ ($_SERVER['REQUEST_URI']=='/user/loginPassword' || $_SERVER['REQUEST_URI']=='/user/payPassword')?'fa-angle-down':'fa-angle-right' }}" data-icon-hide="fa-angle-down" data-icon-show="fa-angle-right"></i>
                </a>
            </h4>
        </div>

        <div id="collapseTwo" class="panel-collapse collapse {{ ($_SERVER['REQUEST_URI']=='/user/loginPassword' || $_SERVER['REQUEST_URI']=='/user/payPassword')?'in':'collapse' }}">
            <div class="g-sidenav  {{ ($_SERVER['REQUEST_URI']=='/user/loginPassword')?'z-active':'' }}">
                <a href="/user/loginPassword" class="g-wrap2 {{ ($_SERVER['REQUEST_URI']=='/user/loginPassword')?'active':'' }}">修改密码</a>
            </div>
            <div class="g-sidenav  {{ ($_SERVER['REQUEST_URI']=='/user/payPassword')?'z-active':'' }}">
                <a href="/user/payPassword" class="g-wrap2 {{ ($_SERVER['REQUEST_URI']=='/user/payPassword')?'active':'' }}">支付密码</a>
            </div>
        </div>
    </div>
    <div class="panel panel-default" style="width:283px;">
        <div class="panel-heading">
            <h4 class="panel-title clearfix">
                <a href="#collapseThree" data-parent="#accordion" data-toggle="collapse" class="accordion-toggle g-wrap1
                {{ ($_SERVER['REQUEST_URI']=='/user/realnameAuth' || $_SERVER['REQUEST_URI']=='/user/paylist' ||  $_SERVER['REQUEST_URI']=='/user/emailAuth') ?'g-active':'' }}"><span class="s-approveicon"></span>&nbsp;&nbsp;&nbsp;&nbsp;认证管理
                    <i class="pull-right ace-icon fa fa-angle-right" data-icon-hide="fa-angle-down" data-icon-show="fa-angle-right"></i>
                </a>
            </h4>
        </div>

        <div id="collapseThree" class="panel-collapse {{ ($_SERVER['REQUEST_URI']=='/user/realnameAuth' || $_SERVER['REQUEST_URI']=='/user/paylist' || $_SERVER['REQUEST_URI']=='/user/emailAuth' || $_SERVER['REQUEST_URI']=='/user/phoneAuth' || $_SERVER['REQUEST_URI']=='/user/enterpriseAuth')?'in':'collapse' }}">
            <div class="g-sidenav {{ ($_SERVER['REQUEST_URI']=='/user/realnameAuth')?'z-active':'' }}">
                <a href="{!! url('user/realnameAuth') !!}" class="g-wrap2 {{ ($_SERVER['REQUEST_URI']=='/user/realnameAuth')?'active':'' }}">实名认证</a>
            </div>
            <div class="g-sidenav {{ ($_SERVER['REQUEST_URI']=='/user/paylist')?'z-active':'' }}">
                <a href="{!! url('user/paylist') !!}" class="g-wrap2 {{ ($_SERVER['REQUEST_URI']=='/user/paylist')?'active':'' }}">支付绑定</a>
            </div>
            <div class="g-sidenav {{ ($_SERVER['REQUEST_URI']=='/user/emailAuth')?'z-active':'' }}">
                <a href="{!! url('user/emailAuth') !!}" class="g-wrap2 {{ ($_SERVER['REQUEST_URI']=='/user/emailAuth')?'active':'' }}">邮箱绑定</a>
            </div>
            <div class="g-sidenav {{ ($_SERVER['REQUEST_URI']=='/user/phoneAuth')?'z-active':'' }}">
                <a href="{{url('user/phoneAuth')}}" class="g-wrap2 {{ ($_SERVER['REQUEST_URI']=='/user/phoneAuth')?'active':'' }}">手机绑定</a>
            </div>
            <div class="g-sidenav {{ ($_SERVER['REQUEST_URI']=='/user/enterpriseAuth')?'z-active':'' }}">
                <a href="{{url('user/enterpriseAuth')}}" class="g-wrap2 {{ ($_SERVER['REQUEST_URI']=='/user/enterpriseAuth')?'active':'' }}">企业认证</a>
            </div>
        </div>
    </div>
</div>