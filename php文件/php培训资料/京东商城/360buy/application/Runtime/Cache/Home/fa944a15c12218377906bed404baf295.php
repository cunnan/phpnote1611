<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <title>报价单_京东网上商城-综合网购首选</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <script type="text/javascript" src="/360buy/public/js/common.js"></script>
    <link href="/360buy/public/themes/jindong/stye1024.css" type="text/css" rel="stylesheet" />
  </head>
  <body>
    <div id="container">
      
      <Script language="JavaScript">
function show_menu(obj_s,obj){
	var  s_id = document.getElementById(obj_s);
	var  sc_id = document.getElementById(obj);
	     s_id.style.display = "";
	     //sc_id.className = "ahv";
}
     	
function hide_menu(obj_h,obj){
	var  h_id = document.getElementById(obj_h);
	var  hc_id = document.getElementById(obj);
	     h_id.style.display = "none";
	     //hc_id.className = "alk";
}
window.onload = function()
{
  //fixpng();
}
function checkSearchForm()
{
    if(document.getElementById('keyword').value)
    {
        return true;
    }
    else
    {
		   alert("请输入搜索关键词！");
        return false;
    }
}
</Script>
      <div id="globalHeader">
        <ul id="top_nav_ul">
          <div id=navigation1_03 style=" float:right;">
          <dl>
            <dt style="POSITION: relative; z-index:999999999">
              <a style="float:right; background:url(/360buy/public/themes/jindong/images/biao.gif) 55px center no-repeat; padding-right:23px;display:block; line-height:29px;"  class=alk 
              onmouseover="show_menu('float_menu2','c_fship_c')"
              onmouseout="hide_menu('float_menu2','c_fship_c')"
              href="#"  target=_self>客服中心</a>
              <div id=float_menu2 onMouseOver="show_menu('float_menu2','c_fship_c')" style="border: #ccc 1px solid; border-top:none;DISPLaY: none; Z-INDEX: 20; LEFT: 0px; top:0; WIdtH:70px; padding:0 0 5px 8px;POSITION: absolute;" 
              onmouseout="hide_menu('float_menu2','c_fship_c')">
                <ul class=cship_list>
			      <li style="padding-bottom:7px; padding-top:5px;"><a target="_blank" href="user.php">客服中心</a> </li>
			      <li><a target="_blank" href="/360buy/index.php/User/index">会员后台</a> </li>
			      <li><a target="_blank" href="/360buy/index.php/User/order">我的订单</a> </li>
			      <li><a target="_blank" href="/360buy/index.php/User/message">我的留言</a> </li>
                </ul>
              </div>
            </dt>
            <dd></dd>
          </dl>
          </div>
          <div style="float:right; _padding-top:9px; background: url(/360buy/public/themes/jindong/images/nav_bg2.gif) 0 top no-repeat; height:29px; padding-left:28px;">
            <a href="/360buy/index.php/Promotion/index"  >今日特价</a> <img style="vertical-align:middle" src="/360buy/public/themes/jindong/images/nav_li.gif">
            <a href="#"  >极品源码</a> <img style="vertical-align:middle" src="/360buy/public/themes/jindong/images/nav_li.gif">
            <a href="/360buy/index.php/Cart/index"  >查看购物车</a> <img style="vertical-align:middle" src="/360buy/public/themes/jindong/images/nav_li.gif">
            <a href="/360buy/index.php/Quotation/index"  >报价单</a> <img style="vertical-align:middle" src="/360buy/public/themes/jindong/images/nav_li.gif">
          </div>
          <div  style="float:right; color:#acacac; padding-right:15px;">
            <script type="text/javascript" src="/360buy/public/js/transport.js"></script>
            <script type="text/javascript" src="/360buy/public/js/utils.js"></script>
            <font id="ECS_MEMBERZONE">您好，欢迎您光临万联商城！
              <a href="/360buy/index.php/Login/index">[请登录]</a>
              <span>，新用户？</span>
              <a style="color:#ff6600" href="/360buy/index.php/Register/index">[免费注册]</a>
            </font>
          </div>
        </ul>
        <p id="logo"><img style="float:left" src="/360buy/public/themes/jindong/images/logo.gif"/></a></p>
      </div>
      <div id="globalNav">
        <ul>
          <?php if($pageName == index): ?><li><a href="/360buy/index.php/Index/index" class="cur">首页</a></li>
          <?php else: ?>
          <li><a href="/360buy/index.php/Index/index">首页</a></li><?php endif; ?>
          <?php if($pageName == category1): ?><li><a href="/360buy/index.php/Category/index/id/1" class="cur">服饰鞋帽</a></li>
          <?php else: ?>
          <li><a href="/360buy/index.php/Category/index/id/1"  >服饰鞋帽</a></li><?php endif; ?>
          <?php if($pageName == auction): ?><li><a href="/360buy/index.php/Auction/index" target="_blank" class="cur">夺宝岛</a></li>
          <?php else: ?>
          <li><a href="/360buy/index.php/Auction/index" target="_blank"  >夺宝岛</a></li><?php endif; ?>
          <?php if($pageName == Diy): ?><li><a href="/360buy/index.php/Diy/index" class="cur">装机大师</a></li>
          <?php else: ?>
          <li><a href="/360buy/index.php/Diy/index">装机大师</a></li><?php endif; ?>
          <?php if($pageName == Message): ?><li><a href="/360buy/index.php/Message/index" class="cur">留言板</a></li>
          <?php else: ?>
          <li><a href="/360buy/index.php/Message/index">留言板</a></li><?php endif; ?>
          <?php if($pageName == category2): ?><li><a href="/360buy/index.php/Category/index/id/2" class="cur">汽车用品</a></li>
          <?php else: ?>
          <li><a href="/360buy/index.php/Category/index/id/2"  >汽车用品</a></li><?php endif; ?>
          <?php if($pageName == category3): ?><li><a href="/360buy/index.php/Category/index/id/3" class="cur">展销会专栏</a></li>
          <?php else: ?>
          <li><a href="/360buy/index.php/Category/index/id/3"  >展销会专栏</a></li><?php endif; ?>
        </ul>
      </div>
      <div id="globalSearch">
        <img style="position:absolute; left:0;" src="/360buy/public/themes/jindong/images/search_box_l.gif">
        <img  style="position:absolute; right:0;" src="/360buy/public/themes/jindong/images/search_box_r.gif">
        <form id="searchForm" name="searchForm" method="post" action="/360buy/index.php/Search/index" onSubmit="return checkSearchForm()" style="background:#99CC00; padding-left:13px;">
          <div class="search_left">
            <input style="float:left;" name="keywords" type="text" id="keyword" value="请输入商品关键字" onclick="javascript:this.value='';this.style.color='#333333';" />
            <input type="image" src="/360buy/public/themes/jindong/images/search.gif" style="float:left" />
            <span class="key2">热门搜索 ：
              <a target="_blank" style=" color:#ffcccc" href="/360buy/index.php/Search/index">品牌日用品</a>
              <a target="_blank" style=" color:#ffcccc" href="/360buy/index.php/Search/index">品牌服装</a>
            </span>
          </div>
          <div class="search_right">
            <div class="buy_car_bg clearfix" id="ECS_CaRTINFO" >
              <a href="/360buy/index.php/Cart/index">
                <span>购物车中有<b>0</b>件商品</span>
                <ul class="car_ul">
                <a href="#" style="color:#999; padding-left:30px;">您的购物车暂无商品 赶快选择心爱的商品吧</a>
                </ul>
              </a>
            </div>
            <a href="/360buy/index.php/Cart/flow"><img src="/360buy/public/themes/jindong/images/qujiesuan.gif"></a>
          </div>
        </form>
      </div>
      
      <div class="p_w" style="clear:both; overflow:hidden"></div>
      <div id="urHere" class="globalModule">
        <h3><a href=".">首页</a> <code>&gt;</code> 报价单</h3>
      </div>
      <div class="blank"></div>
      <div class="tab_box">
        <div id="globalWholesaleCart" class="globalModule globalFrame" style="width:100%">
          <div class="tab_title"><h3>打印报价单</h3></div>
          <div class="globalModuleContent">
            <form action="/360buy/index.php/Quotation/point" method="post" name="searchForm" target="_blank" class="quotation">
              <select name="cat_id">
                <option value="0">所有分类</option>
                <option value="355" >展销会专栏</option>
                <option value="361" >&nbsp;&nbsp;&nbsp;&nbsp;海产</option>
                <option value="366" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;波力鱼翅</option>
                <option value="358" >&nbsp;&nbsp;&nbsp;&nbsp;洋酒</option>
                <option value="362" >&nbsp;&nbsp;&nbsp;&nbsp;必备年货精品</option>
                <option value="359" >&nbsp;&nbsp;&nbsp;&nbsp;干果</option>
                <option value="356" >&nbsp;&nbsp;&nbsp;&nbsp;红酒</option>
                <option value="363" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;长城干红系列</option>
                <option value="360" >&nbsp;&nbsp;&nbsp;&nbsp;休闲食品</option>
                <option value="365" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;恰恰系列</option>
                <option value="357" >&nbsp;&nbsp;&nbsp;&nbsp;白酒</option>
                <option value="364" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;洋河蓝色经典系列</option>
                <option value="297" >钟表首饰、礼品箱包</option>
                <option value="345" >&nbsp;&nbsp;&nbsp;&nbsp;钟表</option>
                <option value="307" >&nbsp;&nbsp;&nbsp;&nbsp;珠宝首饰</option>
                <option value="308" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;非主流饰品</option>
                <option value="296" >服饰鞋帽</option>
                <option value="323" >&nbsp;&nbsp;&nbsp;&nbsp;内衣</option>
                <option value="324" >&nbsp;&nbsp;&nbsp;&nbsp;配饰</option>
                <option value="321" >&nbsp;&nbsp;&nbsp;&nbsp;女装</option>
                <option value="309" >&nbsp;&nbsp;&nbsp;&nbsp;男装</option>
                <option value="310" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;衬衫T恤</option>
                <option value="325" >&nbsp;&nbsp;&nbsp;&nbsp;鞋靴</option>
                <option value="322" >&nbsp;&nbsp;&nbsp;&nbsp;运动</option>
                <option value="300" >食品饮料、保健品</option>
                <option value="313" >&nbsp;&nbsp;&nbsp;&nbsp;地方特产</option>
                <option value="314" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;新疆山东</option>
                <option value="342" >&nbsp;&nbsp;&nbsp;&nbsp;营养健康</option>
                <option value="339" >&nbsp;&nbsp;&nbsp;&nbsp;休闲食品</option>
                <option value="343" >&nbsp;&nbsp;&nbsp;&nbsp;预防保健</option>
                <option value="340" >&nbsp;&nbsp;&nbsp;&nbsp;粮油调味</option>
                <option value="344" >&nbsp;&nbsp;&nbsp;&nbsp;健康礼品</option>
                <option value="341" >&nbsp;&nbsp;&nbsp;&nbsp;酒饮冲调</option>
                <option value="294" >家具厨具、家装</option>
                <option value="348" >&nbsp;&nbsp;&nbsp;&nbsp;家具</option>
                <option value="352" >&nbsp;&nbsp;&nbsp;&nbsp;宠物用品</option>
                <option value="301" >&nbsp;&nbsp;&nbsp;&nbsp;厨房用具</option>
                <option value="302" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;厨用小件</option>
                <option value="349" >&nbsp;&nbsp;&nbsp;&nbsp;五金灯具</option>
                <option value="346" >&nbsp;&nbsp;&nbsp;&nbsp;精美餐具</option>
                <option value="350" >&nbsp;&nbsp;&nbsp;&nbsp;生活日用</option>
                <option value="347" >&nbsp;&nbsp;&nbsp;&nbsp;家纺</option>
                <option value="351" >&nbsp;&nbsp;&nbsp;&nbsp;清洁用品</option>
                <option value="298" >运动健康</option>
                <option value="332" >&nbsp;&nbsp;&nbsp;&nbsp;户外装备</option>
                <option value="336" >&nbsp;&nbsp;&nbsp;&nbsp;成人用品</option>
                <option value="353" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;组合套装</option>
                <option value="354" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;安全避孕</option>
                <option value="333" >&nbsp;&nbsp;&nbsp;&nbsp;运动器械</option>
                <option value="337" >&nbsp;&nbsp;&nbsp;&nbsp;保健器械</option>
                <option value="305" >&nbsp;&nbsp;&nbsp;&nbsp;户外鞋服</option>
                <option value="306" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;户外服装</option>
                <option value="334" >&nbsp;&nbsp;&nbsp;&nbsp;纤体瑜伽</option>
                <option value="338" >&nbsp;&nbsp;&nbsp;&nbsp;急救卫生</option>
                <option value="335" >&nbsp;&nbsp;&nbsp;&nbsp;体育娱乐</option>
                <option value="295" >电脑软件、办公</option>
                <option value="329" >&nbsp;&nbsp;&nbsp;&nbsp;办公设备</option>
                <option value="326" >&nbsp;&nbsp;&nbsp;&nbsp;电脑配件</option>
                <option value="330" >&nbsp;&nbsp;&nbsp;&nbsp;办公耗材</option>
                <option value="311" >&nbsp;&nbsp;&nbsp;&nbsp;网络产品</option>
                <option value="312" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;路由器</option>
                <option value="327" >&nbsp;&nbsp;&nbsp;&nbsp;外设产品</option>
                <option value="331" >&nbsp;&nbsp;&nbsp;&nbsp;电脑软件</option>
                <option value="328" >&nbsp;&nbsp;&nbsp;&nbsp;电脑整机</option>
                <option value="299" >母婴玩具、乐器</option>
                <option value="316" >&nbsp;&nbsp;&nbsp;&nbsp;尿裤湿巾</option>
                <option value="320" >&nbsp;&nbsp;&nbsp;&nbsp;玩具乐器</option>
                <option value="317" >&nbsp;&nbsp;&nbsp;&nbsp;喂养用品</option>
                <option value="318" >&nbsp;&nbsp;&nbsp;&nbsp;洗护用品</option>
                <option value="315" >&nbsp;&nbsp;&nbsp;&nbsp;奶粉</option>
                <option value="303" >&nbsp;&nbsp;&nbsp;&nbsp;营养辅食</option>
              </select>
              <select name="brand_id">
                <option value="0">所有品牌</option>
                <option value="285">金果子</option>
                <option value="270">海尔</option>
                <option value="268">verbatim(威宝)</option>
                <option value="267">飞毛腿</option>
                <option value="265">超霸</option>
                <option value="266">创新</option>
                <option value="242">富士施乐</option>
                <option value="241">贝尔金</option>
                <option value="240">新蓝</option>
                <option value="239">爱普生</option>
                <option value="238">ThinkPad</option>
                <option value="237">logitech(罗技）</option>
                <option value="236">Lenovo（联想)</option>
                <option value="271">欧南多</option>
                <option value="272">漫步者</option>
                <option value="284">美的</option>
                <option value="283">索尼</option>
                <option value="282">松下</option>
                <option value="281">博世</option>
                <option value="280">三洋</option>
                <option value="279">西门子</option>
                <option value="278">理光</option>
                <option value="277">尼康</option>
                <option value="276">佳能</option>
                <option value="275">三星</option>
                <option value="274">索爱</option>
                <option value="273">九州风神</option>
                <option value="235">Intel(英特尔）</option>
                <option value="234">HP（惠普)</option>
                <option value="233">dell(戴尔)</option>
                <option value="261">飞利浦</option>
                <option value="259">友讯</option>
                <option value="258">忆捷</option>
                <option value="257">兄弟</option>
                <option value="256">希捷</option>
                <option value="255">微软</option>
                <option value="254">威刚</option>
                <option value="269">九阳</option>
                <option value="252">网件</option>
                <option value="251">麦克赛尔</option>
                <option value="250">朗科</option>
                <option value="262">SANDISK</option>
                <option value="263">森海塞尔</option>
                <option value="264">艾利和</option>
                <option value="232">AMD</option>
                <option value="231">金士顿</option>
                <option value="227">NOKIA（诺基亚）</option>
                <option value="243">冠捷</option>
                <option value="248">多彩</option>
                <option value="247">苹果</option>
                <option value="246">技嘉</option>
                <option value="245">华硕</option>
                <option value="244">Acer(宏基)</option>
                <option value="249">酷冷至尊</option>
                <option value="229">Sony Ericsson</option>
                <option value="260">摩托罗拉</option>
                <option value="230">LG</option>
              </select>
              &nbsp;关键字 <input type="text" name="keyword" />
              <input name="act" type="hidden" value="print_quotation" />
              <input type="submit" name="print_quotation" id="print_quotation" value="打印报价单" style="vertical-align:middle;" />
            </form>
          </div>
        </div>
      </div>
      <div class="blank"></div>
      
          <div id="globalHelp" class="globalModule">
     <div class="clearfix">
       <dl>
         <dt>
           <img src="/360buy/public/themes/jindong/images/help_1.gif" />
           <a href='article_cat.php?id=5' title="购物指南">购物指南</a>
         </dt>
         <div class="blank5"></div>
         <dd><a href="article.php?id=9" title="购物流程">购物流程</a></dd>
         <dd><a href="article.php?id=10" title="会员介绍">会员介绍</a></dd>
         <dd><a href="article.php?id=36" title="常见问题">常见问题</a></dd>
       </dl>
       <dl>
         <dt>
           <img src="/360buy/public/themes/jindong/images/help_2.gif" />
           <a href='article_cat.php?id=7' title="配送方式">配送方式</a>
         </dt>
         <div class="blank5"></div>
         <dd><a href="article.php?id=15" title="快递运输">快递运输</a></dd>
         <dd><a href="article.php?id=16" title="特快专递(EMS)">特快专递(EMS)</a></dd>
         <dd><a href="article.php?id=43" title="上门自提">上门自提</a></dd>
       </dl>
       <dl>
         <dt>
           <img src="/360buy/public/themes/jindong/images/help_3.gif" />
           <a href='article_cat.php?id=10' title="支付方式">支付方式</a>
         </dt>
         <div class="blank5"></div>
         <dd><a href="article.php?id=18" title="货到付款">货到付款</a></dd>
         <dd><a href="article.php?id=19" title="在线支付">在线支付</a></dd>
         <dd><a href="article.php?id=20" title="银行转账">银行转账</a></dd>
         <dd><a href="article.php?id=37" title="分期付款">分期付款</a></dd>
       </dl>
       <dl>
         <dt>
           <img src="/360buy/public/themes/jindong/images/help_4.gif" />
           <a href='article_cat.php?id=8' title="售后服务">售后服务</a>
         </dt>
         <div class="blank5"></div>
         <dd><a href="article.php?id=21" title="退换货原则">退换货原则</a></dd>
         <dd><a href="article.php?id=22" title="退换货流程">退换货流程</a></dd>
         <dd><a href="article.php?id=23" title="价格保护">价格保护</a></dd>
         <dd><a href="article.php?id=38" title="退款说明">退款说明</a></dd>
       </dl>
       <dl>
         <dt>
           <img src="/360buy/public/themes/jindong/images/help_5.gif" />
           <a href='article_cat.php?id=9' title="特色服务">特色服务</a>
         </dt>
         <div class="blank5"></div>
         <dd><a href="article.php?id=24" title="商品拍卖">商品拍卖</a></dd>
         <dd><a href="article.php?id=25" title="DIY装机">DIY装机</a></dd>
         <dd><a href="article.php?id=26" title="上门服务">上门服务</a></dd>
         <dd><a href="article.php?id=39" title="上门装机">上门装机</a></dd>
         <dd><a href="article.php?id=40" title="香港代购">香港代购</a></dd>
       </dl>
     </div>
     <div class="blank"></div>
     <div class="blank"></div>
     <div class="serve clearfix">
       <ul  class="line"><img src="/360buy/public/themes/jindong/images/serve_1.gif"></ul>
       <ul  class="line"><img src="/360buy/public/themes/jindong/images/serve_2.gif"></ul>
       <ul  class="line"><img src="/360buy/public/themes/jindong/images/serve_3.gif"></ul>
       <ul ><img src="/360buy/public/themes/jindong/images/serve_4.gif"></ul>
     </div>
   </div>
   <div class="blank"></div>
   <div id="globalFooter">
     <p id="footerNav">
       <a href="article.php?id=1" >关于我们</a>
       |
       <a href="article.php?id=2" >联系我们</a>
       |
       <a href="article.php?id=3" >广告服务</a>
       |
       <a href="http://jetli.taobao.com/" >品牌加盟</a>
       |
       <a href="wholesale.php" >批发方案</a>
       |
       <a href="myship.php" >配送方式</a>
       |
       <script type="text/javascript" src="/360buy/public/js/dialog3.js"></script>
     </p>
     <p id="copyright">&copy; 2005-2012 京东网上商城 版权所有，并保留所有权利。</p>
     <p id="address"></p>
     <p id="phone"></p>
     <p id="imlist">
       <img src="/360buy/public/images/pa.gif" alt="QQ" /> <a href="#" target="_blank">393769718</a>
       <img src="/360buy/public/images/T1B7m_XeXuXXaHNz_X-16-16.gif" alt="淘宝旺旺" /><a href="#" target="_blank"> tddt8</a>
     </p>
     <p id="qureyInfo">共执行 12 个查询，用时 0.017868 秒，在线 3 人，Gzip 已禁用，占用内存 3.160 MB<img src="" alt="" style="width:0px;height:0px;" /></p>
     <div align="center" ></div>
     <div class="blank"></div>
     <div style="text-align:center">
       <a href="#"><img src="/360buy/public/themes/jindong/images/fot_1.gif"></a>
       <a href="#"><img src="/360buy/public/themes/jindong/images/fot_2.gif"></a>
       <a href="#"><img src="/360buy/public/themes/jindong/images/fot_3.gif"></a>
     </div>
   </div>
    
    </div>
  </body>
</html>