<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>在线示例 - layui</title>
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="format-detection" content="telephone=no">

    <link rel="stylesheet" href="//res.layui.com/layui/dist/css/layui.css?t=1506430751927"  media="all">
    <link rel="stylesheet" href="//res.layui.com/css/global.css?t=1506430751927" media="all">
</head>
<body>
<div class="layui-layout layui-layout-admin">
    <div class="layui-header header header-demo">
        <div class="layui-main">
            <a class="logo" href="/">
                <img src="//res.layui.com/images/layui/logo.png" alt="layui">
            </a>
            <div class="layui-form component">
                <select lay-search lay-filter="component">
                    <option value="">搜索组件或模块</option>
                    <option value="element/layout.html">grid 栅格布局</option>
                    <option value="element/layout.html#admin">admin 后台布局</option>
                    <option value="element/color.html">color 颜色</option>
                    <option value="element/icon.html">iconfont 字体图标</option>
                    <option value="element/anim.html">animation 动画</option>
                    <option value="element/button.html">button 按钮</option>
                    <option value="element/form.html">form 表单组</option>
                    <option value="element/form.html#input">input 输入框</option>
                    <option value="element/form.html#select">select 下拉选择框</option>
                    <option value="element/form.html#checkbox">checkbox 复选框</option>
                    <option value="element/form.html#switch">switch 开关</option>
                    <option value="element/form.html#radio">radio 单选框</option>
                    <option value="element/form.html#textarea">textarea 文本域</option>
                    <option value="element/nav.html">nav 导航菜单</option>
                    <option value="element/nav.html#breadcrumb">breadcrumb 面包屑</option>
                    <option value="element/tab.html">tabs 选项卡</option>
                    <option value="element/progress.html">progress 进度条</option>
                    <option value="element/collapse.html">collapse 折叠面板/手风琴</option>
                    <option value="element/table.html">table 表格元素</option>
                    <option value="element/badge.html">badge 徽章</option>
                    <option value="element/timeline.html">timeline 时间线</option>
                    <option value="element/auxiliar.html#blockquote">blockquote 引用块</option>
                    <option value="element/auxiliar.html#fieldset">fieldset 字段集</option>
                    <option value="element/auxiliar.html#hr">hr 分割线</option>

                    <option value="modules/layer.html">layer 弹出层/弹窗综合</option>
                    <option value="modules/laydate.html">laydate 日期时间选择器</option>
                    <option value="modules/layim.html">layim 即时通讯/聊天</option>
                    <option value="modules/laypage.html">laypage 分页</option>
                    <option value="modules/laytpl.html">laytpl 模板引擎</option>
                    <option value="modules/form.html">form 表单模块</option>
                    <option value="modules/table.html">table 数据表格</option>
                    <option value="modules/upload.html">upload 文件/图片上传</option>
                    <option value="modules/element.html">element 常用元素操作</option>
                    <option value="modules/carousel.html">carousel 轮播/跑马灯</option>
                    <option value="modules/layedit.html">layedit 富文本编辑器</option>
                    <option value="modules/tree.html">tree 树形菜单</option>
                    <option value="modules/flow.html">flow 信息流/图片懒加载</option>
                    <option value="modules/util.html">util 工具集</option>
                    <option value="modules/code.html">code 代码修饰</option>
                </select>
            </div>
            <ul class="layui-nav" pc>
                <li class="layui-nav-item ">
                    <a href="/doc/">文档<span class="layui-badge-dot"></span></a>
                </li>
                <li class="layui-nav-item layui-this">
                    <a href="/demo/">示例</a>
                </li>

                <li class="layui-nav-item" pc>
                    <a href="http://fly.layui.com/" target="_blank">社区</a>
                </li>
                <li class="layui-nav-item" pc>
                    <a href="javascript:;">周边</a>
                    <dl class="layui-nav-child">
                        <dd><a href="http://layim.layui.com/" target="_blank">即时聊天</a></dd>
                        <dd><a href="/alone.html" target="_blank">独立组件</a></dd>
                        <dd><a href="http://fly.layui.com/jie/8157/" target="_blank">社区模板</a></dd>
                        <dd><a href="http://fly.layui.com/jie/9842/" target="_blank">Axure组件</a></dd>
                    </dl>
                </li>
                <li class="layui-nav-item" pc>
                    <a href="/v1/" target="_blank">旧版</a>
                </li>
                <li class="layui-nav-item" mobile>
                    <a href="javascript:;">更多</a>
                    <dl class="layui-nav-child">
                        <dd><a href="http://fly.layui.com/" target="_blank">社区</a></dd>
                    </dl>
                </li>
            </ul>
        </div>
    </div>
    <div class="layui-side layui-bg-black">
        <div class="layui-side-scroll">

            <ul class="layui-nav layui-nav-tree site-demo-nav">

                <li class="layui-nav-item layui-nav-itemed">
                    <a class="javascript:;" href="javascript:;">开发工具</a>
                    <dl class="layui-nav-child">
                        <dd>
                            <a href="/demo/">调试预览</a>
                        </dd>
                    </dl>
                </li>

                <li class="layui-nav-item layui-nav-itemed">
                    <a class="javascript:;" href="javascript:;">布局</a>
                    <dl class="layui-nav-child">
                        <dd class="">
                            <a href="/demo/grid.html">栅格</a>
                        </dd>
                        <dd class="">
                            <a href="/demo/admin.html">后台布局</a>
                        </dd>
                    </dl>
                </li>

                <li class="layui-nav-item layui-nav-itemed">
                    <a class="javascript:;" href="javascript:;">基本元素</a>
                    <dl class="layui-nav-child">
                        <dd class="">
                            <a href="/demo/button.html">按钮</a>
                        </dd>
                        <dd class="">
                            <a href="/demo/form.html">表单</a>
                        </dd>
                        <dd class="">
                            <a href="/demo/nav.html">导航/面包屑</a>
                        </dd>
                        <dd class="">
                            <a href="/demo/tab.html">选项卡</a>
                        </dd>
                        <dd class="">
                            <a href="/demo/progress.html">进度条</a>
                        </dd>
                        <dd class="">
                            <a href="/demo/collapse.html">折叠面板</a>
                        </dd>
                        <dd class="">
                            <a href="/demo/badge.html">徽章</a>
                        </dd>
                        <dd class="">
                            <a href="/demo/timeline.html">时间线</a>
                        </dd>
                        <dd class="">
                            <a href="/demo/table-element.html">静态表格</a>
                        </dd>
                        <dd class="">
                            <a href="/demo/anim.html">动画</a>
                        </dd>
                        <dd class="">
                            <a href="/demo/auxiliar.html">辅助元素</a>
                        </dd>
                    </dl>
                </li>

                <li class="layui-nav-item layui-nav-itemed">
                    <a class="javascript:;" href="javascript:;">组件示例</a>
                    <dl class="layui-nav-child">
                        <dd class="">
                            <a href="/demo/layer.html">
                                弹出层
                            </a>
                        </dd>
                        <dd class="">
                            <a href="/demo/laydate.html">
                                日期与时间选择
                            </a>
                        </dd>
                        <dd class="">
                            <a href="/demo/layim.html">
                                即时通讯
                            </a>
                        </dd>
                        <dd class="">
                            <a href="/demo/table.html">
                                数据表格
                            </a>
                        </dd>
                        <dd class="">
                            <a href="/demo/laypage.html">
                                分页
                            </a>
                        </dd>
                        <dd class="">
                            <a href="/demo/upload.html">
                                文件上传
                            </a>
                        </dd>
                        <dd class="">
                            <a href="/demo/carousel.html">
                                轮播
                            </a>
                        </dd>
                        <dd class="">
                            <a href="/demo/laytpl.html">
                                模板引擎
                            </a>
                        </dd>
                        <dd class="">
                            <a href="/demo/layedit.html">
                                富文本编辑器
                            </a>
                        </dd>
                        <dd class="">
                            <a href="/demo/tree.html">
                                树形菜单
                            </a>
                        </dd>
                        <dd class="">
                            <a href="/demo/flow.html">
                                流加载
                            </a>
                        </dd>
                        <dd class="">
                            <a href="/demo/util.html">
                                工具集
                            </a>
                        </dd>
                        <dd class="">
                            <a href="/demo/code.html">
                                代码修饰器
                            </a>
                        </dd>
                    </dl>
                </li>

                <li class="layui-nav-item" style="height: 30px; text-align: center"></li>
            </ul>

        </div>
    </div>
    <div class="layui-body site-demo">
        <form id="LAY_demoForm" target="LAY_demo" method="post">
            <div class="site-demo-editor">
                <div class="site-demo-area">
        <textarea id="LAY_editor" spellcheck="false" placeholder="在此处输入代码">
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <title>layui在线调试</title>
  <link rel="stylesheet" href="//res.layui.com/layui/dist/css/layui.css?t=1506430751927" media="all">
  <style>
    body{margin: 10px;}
    .demo-carousel{height: 200px; line-height: 200px; text-align: center;}
  </style>
</head>
<body>

<table class="layui-table" lay-data="{height:332, url:'/demo/table/user/', page:true, id:'idTest'}" lay-filter="demo">
  <thead>
    <tr>
      <th lay-data="{field:'id', width:80, sort: true, fixed: true}">ID</th>
      <th lay-data="{field:'username', width:80}">用户名</th>
      <th lay-data="{field:'sex', width:80, sort: true}">性别</th>
      <th lay-data="{field:'city', width:80}">城市</th>
      <th lay-data="{field:'sign', width:177}">签名</th>
      <th lay-data="{field:'experience', width:80, sort: true}">积分</th>
      <th lay-data="{field:'score', width:80, sort: true}">评分</th>
      <th lay-data="{field:'classify', width:80}">职业</th>
      <th lay-data="{field:'wealth', width:135, sort: true}">财富</th>
      <th lay-data="{fixed: 'right', width:160, align:'center', toolbar: '#barDemo'}"></th>
    </tr>
  </thead>
</table>

<script type="text/html" id="barDemo">
  <a class="layui-btn layui-btn-primary layui-btn-mini" lay-event="detail">查看</a>
  <a class="layui-btn layui-btn-mini" lay-event="edit">编辑</a>
  <a class="layui-btn layui-btn-danger layui-btn-mini" lay-event="del">删除</a>
</script>

<div class="layui-tab layui-tab-brief" lay-filter="demo">
  <ul class="layui-tab-title">
    <li class="layui-this">演示说明</li>
    <li>日期</li>
    <li>分页</li>
    <li>上传</li>
  </ul>
  <div class="layui-tab-content">
    <div class="layui-tab-item layui-show">

      <div class="layui-carousel" id="test1">
        <div carousel-item>
          <div><p class="layui-bg-green demo-carousel">在这里，你将以最直观的形式体验 layui！</p></div>
          <div><p class="layui-bg-red demo-carousel">在编辑器中可以执行 layui 相关的一切代码</p></div>
          <div><p class="layui-bg-blue demo-carousel">你也可以点击左侧导航针对性地试验我们提供的示例</p></div>
          <div><p class="layui-bg-orange demo-carousel">如果最左侧的导航的高度超出了你的屏幕</p></div>
          <div><p class="layui-bg-cyan demo-carousel">你可以将鼠标移入导航区域，然后滑动鼠标滚轮即可</p></div>
        </div>
      </div>
    </div>
    <div class="layui-tab-item">
      <div id="laydateDemo"></div>
    </div>
    <div class="layui-tab-item">
      <div id="pageDemo"></div>
    </div>
    <div class="layui-tab-item">
      <div class="layui-upload-drag" id="uploadDemo">
        <i class="layui-icon">&#xe67c;</i>
        <p>点击上传，或将文件拖拽到此处</p>
      </div>
    </div>
  </div>
</div>
<blockquote class="layui-elem-quote layui-quote-nm">layui 2.0 提供强力驱动</blockquote>

<script src="//res.layui.com/layui/dist/layui.js?t=1506430751927"></script>
<script>
layui.use(['laydate', 'laypage', 'layer', 'table', 'carousel', 'upload', 'element'], function(){
    var laydate = layui.laydate //日期
            ,laypage = layui.laypage //分页
    layer = layui.layer //弹层
            ,table = layui.table //表格
            ,carousel = layui.carousel //轮播
            ,upload = layui.upload //上传
            ,element = layui.element; //元素操作

    //向世界问个好
    layer.msg('Hello World');

    //监听Tab切换
    element.on('tab(demo)', function(data){
        layer.msg('切换了：'+ this.innerHTML);
        console.log(data);
    });

    //监听工具条
    table.on('tool(demo)', function(obj){ //注：tool是工具条事件名，test是table原始容器的属性 lay-filter="对应的值"
        var data = obj.data //获得当前行数据
                ,layEvent = obj.event; //获得 lay-event 对应的值
        if(layEvent === 'detail'){
            layer.msg('查看操作');
        } else if(layEvent === 'del'){
            layer.confirm('真的删除行么', function(index){
                obj.del(); //删除对应行（tr）的DOM结构
                layer.close(index);
                //向服务端发送删除指令
            });
        } else if(layEvent === 'edit'){
            layer.msg('编辑操作');
        }
    });

    //执行一个轮播实例
    carousel.render({
        elem: '#test1'
        ,width: '100%' //设置容器宽度
        ,height: 200
        ,arrow: 'none' //不显示箭头
        ,anim: 'fade' //切换动画方式
    });

    //将日期直接嵌套在指定容器中
    var dateIns = laydate.render({
        elem: '#laydateDemo'
        ,position: 'static'
        ,calendar: true //是否开启公历重要节日
        ,mark: { //标记重要日子
            '0-9-1': '开学'
            ,'2017-9-15': ''
            ,'2017-9-16': ''
        }
        ,done: function(value, date, endDate){
            if(date.year == 2017 && date.month == 9 && date.date == 15){
                dateIns.hint('明天不上班');
            }
        }
        ,change: function(value, date, endDate){
            layer.msg(value)
        }
    });

    //分页
    laypage.render({
        elem: 'pageDemo' //分页容器的id
        ,count: 100 //总页数
        ,skin: '#1E9FFF' //自定义选中色值
        //,skip: true //开启跳页
        ,jump: function(obj, first){
            if(!first){
                layer.msg('第'+ obj.curr +'页');
            }
        }
    });

    //上传
    upload.render({
        elem: '#uploadDemo'
        ,url: '' //上传接口
        ,done: function(res){
            console.log(res)
        }
    });
});
</script>
</body>
</html>
        </textarea>
                    <input type="hidden" name="html" id="LAY_demoCodes">
                </div>
                <div class="site-demo-btn">
                    <button type="button" class="layui-btn" id="LAY_demo_run">运行代码</button>
                </div>
            </div>
        </form>
        <div class="site-demo-result">
            <iframe frameborder="0" id="LAY_demo" name="LAY_demo"></iframe>
        </div>
    </div>
    <div class="layui-footer footer footer-demo">
        <div class="layui-main">
            <p>&copy; 2017 <a href="/">layui.com</a> MIT license</p>
            <p>
                <a href="http://fly.layui.com/case/2017/" target="_blank">案例</a>
                <a href="http://fly.layui.com/jie/3147.html" target="_blank">捐赠</a>
                <!--<a href="javascript:layer.msg('暂无此页');">关于我们</a>-->
                <a href="mailto:xianxin@layui.com">联系</a>
                <a href="https://github.com/sentsin/layui/" target="_blank">GitHub</a>
                <a href="https://gitee.com/sentsin/layui" target="_blank">码云</a>
                <a href="http://fly.layui.com/jie/2461.html" target="_blank">微信公众号</a>
            </p>
        </div>
    </div>
    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <div class="site-tree-mobile layui-hide">
        <i class="layui-icon">&#xe602;</i>
    </div>
    <div class="site-mobile-shade"></div>
    <script src="//res.layui.com/layui/dist/layui.js?t=1506430751927" charset="utf-8"></script>
    <script>
        layui.config({
            base: '//res.layui.com/lay/modules/layui/'
            ,version: '1506430751927'
        }).use('global');

        window.global = {
            preview: function(){
                var preview = document.getElementById('LAY_preview');
                return preview ? preview.innerHTML : '';
            }()
        };
    </script>
    <script type="text/javascript">var cnzz_protocol = (("https:" == document.location.protocol) ? " https://" : " http://");document.write(unescape("%3Cspan id='cnzz_stat_icon_30088308'%3E%3C/span%3E%3Cscript src='" + cnzz_protocol + "w.cnzz.com/c.php%3Fid%3D30088308' type='text/javascript'%3E%3C/script%3E"));</script>
</div>
</body>
</html>