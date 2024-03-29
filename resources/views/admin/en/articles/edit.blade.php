@extends('admin.en.layouts.main')
@section('title')
    <title>后台首页</title>
@endsection
@section('content')
    <div class="main" id="mainWrapper">
        <h3>文章编辑</h3>
        <div class="wrapper table-scroll-wrapper">
            <div class="row">
                <div class='col-md-12'>
                    <div class="table-responsive">
                        <form class="form-inline" method="post" enctype="multipart/form-data" action="/manage/postEdit">
                            {{csrf_field()}}
                            <input type="hidden" type="" name="category_id" value="{{$category_id}}"/>
                            <input type="hidden" name="key" value="{{$key}}"/>
                            <input type="hidden" name="id" value="{{$article->id}}"/>
                            <table class="table table-condensed table-add">
                                <tr>
                                    <th style="width:10%;">
                                        <label for="case_foreman_id">标题:</label>
                                    </th>
                                    <td style="width:90%;">
                                        <div class="form-group">                                                                <input type="text" name="title" value="{{$article->title}}" class="form-control" style="width:350px;" id="inputPassword2" placeholder="标题">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th style="width:10%;">
                                        <label for="case_foreman_id">作者:</label>
                                    </th>
                                    <td style="width:90%;">
                                        <div class="form-group">                                                                <input type="text" name="author" class="form-control" id="inputPassword2" value="{{$article->author}}" style="width:350px;" placeholder="作者">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th style="width:10%;">
                                        <label for="case_foreman_id">出处:</label>
                                    </th>
                                    <td style="width:90%;">
                                        <div class="form-group">                                                                <input type="text" name="source" value="{{$article->source}}" class="form-control" style="width:350px;" id="inputPassword2" placeholder="出处">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th style="width:10%;">
                                        <label for="case_foreman_id">标题图:</label>
                                    </th>
                                    <td style="width:90%;">                                                                                      <input type="file" name="thumbPic" class="" id="">
                                        <div class="image_upload"></div>
                                        @if($article->thumbPic)
                                        <div class="img_span">
                                            <img class="img" src="/uploads/thumb/{{$article->thumbPic}}" style="width:80px;height:80px;margin-left:8px;"><span onclick="delImgUrl(this);" class="image_icon"></span>
                                        </div>
                                        @endif
                                        <input type="hidden" name="image" value=""/>
                                    </td>
                                </tr>
                                <tr>
                                    <th style="width:10%;">
                                        <label for="case_foreman_id">meta关键字:</label>
                                    </th>
                                    <td style="width:90%;">
                                        <div class="form-group">                                                                <input type="text" class="form-control" id="inputPassword2" name="meta_keyword" style="width:350px;" value="{{$article->meta_keyword}}"  size="70" maxlength="250" placeholder="meta关键字">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th style="width:10%;">
                                        <label for="case_foreman_id">meta描述:</label>
                                    </th>
                                    <td style="width:90%;">
                                        <div class="form-group">                                                                 <textarea type="text" size="90" style="width:350px;height:80px;" maxlength="350" class="form-control" id="inputPassword2"  name="meta_description" placeholder="meta描述">{{$article->meta_description}}</textarea>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        <label for="case_title">状态:</label>
                                    </th>
                                    <td>
                                        <div class="form-group">
                                            <label class="radio-inline">
                                                <input type="radio" name="status" id="inlineRadio1" {{$article->status==1?"checked":''}} value="1"> 不通过
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="status" id="inlineRadio2" {{$article->status==2?"checked":''}} value="2"> 待审核
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="status" id="inlineRadio3" {{$article->status==3?"checked":''}} value="3"> 通过
                                            </label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th><label for="case_description">内容:</label>
                                    </th>
                                    <td>
                                        <textarea id="editor" name="content" type="text/plain" style="width:720px;height:500px;">{{$article->content}}</textarea>
                                    </td>
                                </tr>
                                <tr>
                                    <th></th>
                                    <td>
                                        <button type="submit" class="btn btn-sm btn-primary col-md-offset-4">提交</button>
                                    </td>
                                </tr>
                            </table>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script type="text/javascript" src="/admin/ueditor/ueditor.config.js"></script>
    <script type="text/javascript" src="/admin/ueditor/ueditor.all.js"></script>
    <script type="text/javascript">
        var ue = UE.getEditor('editor');
    </script>
    <script type="text/javascript" charset="utf-8" src="/admin/ueditor/lang/zh-cn/zh-cn.js"></script>
    <!-- page specific plugin scripts -->
    <script src="/admin/js/upload.js"></script>
    <script src="/admin/js/mobileBUGFix.mini.js"></script>
    <script>
        $("input[name='thumbPic']").UploadImg({
            url : '/article/upload',
            // width : '320',
            //height : '200',
            quality : '0.8', //压缩率，默认值为0.8
            // 如果quality是1 宽和高都未设定 则上传原图
            mixsize : '10000000',
            //type : 'image/png,image/jpg,image/jpeg,image/pjpeg,image/gif,image/bmp,image/x-png',
            before : function(blob){
                var img = '<div class="img_span">'+'<img src="'+blob+'" class="img"/><span onclick="delImgUrl(this);" class="image_icon"></span></div>';
                $('.image_upload').append(img);
                $("input[name='image']").val(blob);
            },
            error : function(res){
                $('#img').attr('src','');
                $('#error').html(res);
            },
            success : function(res){
                $('#imgurl').val(res);
            }
        });
        function delImgUrl(obj){
            $(obj).parent().remove();
        }
    </script>
@endsection
@section('css')
    <style>
        .image_upload .img{
            height:80px;
            width:80px;
            margin-left:8px;
        }
        .radio-inline input{
            margin-top:2px;
        }
        .img_span{
            width:80px;
            float:left;
            margin-right:10px;
            position:relative;
        }
        .image_icon{
            background: url(/img/icons.png) no-repeat;
            width: 24px;
            height: 24px;
            display: inline;
            text-indent: -9999px;
            overflow: hidden;
            position:absolute;
            top:4px;
            right:-10px;
            background-position:-46px -25px;
            cursor: pointer;
        }
    </style>
@endsection