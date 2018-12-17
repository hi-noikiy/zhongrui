
<main class="content">
    <div class="container ">
        <div class="row">
            <div class="g-taskposition col-lg-12 col-left">当前位置：首页 &gt; VIP首页 &gt; 套餐购买</div>
            <div class="col-xs-12 col-left">
                <div class="taskDetails alert taskbg clearfix vippayorder">
                    <div class="page-header">
                        <h4 class="text-size22 cor-gray51"><strong>您的订单提交成功，请尽快付款！</strong></h4>
                    </div>
                    <div class="cor-gray51 text-size14">
                        <div class="space"></div>
                        <p>支付金额：<span class="text-size26 cor-orange text-blod">￥ {{$order->cash}}</span></p>
                        <div class="space"></div>
                        <p>请选择支付方式</p>
                    </div>
                    <div class="space"></div>
                    <div class="tabbable">
                        <ul id="myTab4" class="nav nav-tabs">
                            <li class="active f-trubtn pay-cancel">
                                <a href="#home1" data-toggle="tab" class="trusttab">余额支付</a>
                            </li>
                            <li class="f-trubtn pay-cancel">
                                <a href="#home2" data-toggle="tab" class="trusttab tab-itm">第三方支付</a>
                            </li>
                        </ul>
                        <div class="tab-content clearfix f-tab">
                            <!--余额支付-->
							@if($userInfo->balance > $order->cash)
                            <div class="tab-pane in active clearfix text-size14 cor-gray51 u-pay" id="home1">
                                <form class="form-horizontal" role="form" action="{{url('vipshop/vipPayorder')}}" method="post" name="bounty-form">
                                    {!! csrf_field() !!}
                                    <span class="help-block cor-gray51">您的账户可用余额：<span class="cor-orange">￥{{$userInfo->balance}}</span></span>
                                    <label class="">请输入支付密码：</label>
                                    <input type="password" placeholder="" name="password" class="inputxt" datatype="*6-15" errormsg="密码范围在6~15位之间！">　　
                                    <label><a target="_blank" href="/user/payPassword" class="cor-gray89 text-size12">忘记密码？</a></label>
                                    @if($errors->first('password')) {{$errors->first('password')}} @endif
                                    <div class="space"></div>
                                    <div class="text-center clearfix">
                                        <button class="btn btn-primary btn-blue btn-big1 bor-radius2" type="submit">确认支付</button>
                                        <a href="javascript:history.back();" class="cor-gray93 btn-big">返回</a>
                                    </div>
                                </form>
                            </div>
                            @endif
                            <!--第三方支付-->
                            <div class="tab-pane clearfix" id="home2">
                                <form class="form-horizontal" role="form" action="{{url('vipshop/thirdPayorder')}}" method="post" name="bounty-form" target="_blank">
                                    {!! csrf_field() !!}
                                    <div class="space"></div>
                                    <div class="radio clearfix">
                                        @if($payConfig['alipay']['status'])
                                        <label class="clearfix inline check-boxItm">
                                            <input type="radio" name="pay_type" value="alipay" class="ace" checked="checked">
                                            <span class="lbl lbl-active">
                                                <span class="lbl-bank">
                                                    <div class="s-packbor s-bank1">
                                                        <img src="/themes/default/assets/images/trust-ico1.png" alt="">
                                                    </div>
                                                </span>
                                            </span>
                                        </label>
                                        @endif
                                        @if($payConfig['wechatpay']['status'])
                                        <label class="clearfix inline check-boxItm">
                                            <input type="radio" name="pay_type" value="wechatpay" class="ace">
                                            <span class="lbl">
                                                <span class="lbl-bank lbl-bank-weixinlogo">
                                                    <div class="s-bank2 s-packbor">
                                                        <img src="/themes/default/assets/images/trust-ico2.png../../../images/trust-ico2.png" alt="">
                                                    </div>
                                                </span>
                                            </span>
                                        </label>
                                        @endif
                                    </div>
                                    <div class="space"></div>

                                    <div class="text-center clearfix">
                                        <button type="submit" class="btn btn-primary btn-blue btn-big1 bor-radius2" data-toggle="modal" data-target="#myModal">确认支付</button>
                                        <a href="javascript:history.back();" class="cor-gray93 btn-big">返回</a>
                                    </div>
                                    <div class="space"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                    {{--模态框--}}
                    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header widget-header-flat">
                                    <span class="modal-title text-size14">
                                        支付提示
                                    </span>
                                </div>
                                <div class="modal-body text-center clearfix">
                                    <div class="col-sm-3 hidden-xs">
                                        <div class="row text-right">
                                            <div class="space"></div>
                                            <span class="fa-stack cor-orange"><i class="fa fa-exclamation-circle fa-stack-2x"></i></span>
                                        </div>
                                    </div>
                                    <div class="col-sm-8 hidden-xs">
                                        <div class="cor-gray51 text-left">
                                            <div class="space"></div>
                                            <h3 class="mg-margin text-size20 text-blod">请在打开的页面上完成付款！</h3>
                                            <h6 class="cor-gray97">付款完成前请不要关闭此窗口</h6>
                                            <div class="space"></div>
                                            <p>
                                                <a href="/user/vippaylist" type="button" class="btn btn-primary btn-sm btn-blue btn-big1 bor-radius2">已完成付款</a>&nbsp;
                                                <a href="/vipshop/vipPayorder" class="cor-blue167 text-under">支付遇到问题</a>
                                            </p>
                                            <p><a href="/vipshop/vipPayorder" class="cor-blue167 text-under">返回选择其他支付方式&gt;</a></p>
                                        </div>
                                    </div>
                                    <div class="hidden-lg hidden-md hidden-sm visible-xs-12">
                                        <div class="row text-center">
                                            <div class="space"></div>
                                            <span class="fa-stack cor-orange"><i class="fa fa-exclamation-circle fa-stack-2x"></i></span>
                                        </div>
                                    </div>
                                    <div class="hidden-lg hidden-md hidden-sm visible-xs-12">
                                        <div class="cor-gray51 text-center">
                                            <div class="space"></div>
                                            <h3 class="mg-margin text-size20 text-blod">请在打开的页面上完成付款！</h3>
                                            <h6 class="cor-gray97">付款完成前请不要关闭此窗口</h6>
                                            <div class="space"></div>
                                            <p>
                                                <a href="/user/vippaylist" type="button" class="btn btn-primary btn-sm btn-blue btn-big1 bor-radius2">已完成付款</a>&nbsp;
                                                <a href="/vipshop/vipPayorder" class="cor-gray97 modaltxt">支付遇到问题</a>
                                            </p>
                                            <p><a href="/vipshop/vipPayorder" class="cor-blue167" data-dismiss="modal">返回选择其他支付方式&gt;</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- /.modal-content -->
                        </div><!-- /.modal -->
                    </div>
                </div>

            </div>
        </div>
    </div>
</main>
{!! Theme::asset()->container('custom-css')->usepath()->add('issuetask','css/taskbar/issuetask.css') !!}
{!! Theme::asset()->container('custom-css')->usepath()->add('index','css/vipshop.css') !!}
