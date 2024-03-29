@extends('admin.en.layouts.main')
@section('title')
    <title>后台首页</title>
@endsection
@section('content')
    <div class="main" id="mainWrapper">
        <h3>添加广告位</h3>
        <div class="wrapper table-scroll-wrapper">
            <div class="row">
                <div class='col-md-12'>
                    <div class="table-responsive">
                        <form class="form-inline" method="post" enctype="multipart/form-data" action="/adSpace/postEdit">
                            <table class="table table-condensed table-add">
                                {{csrf_field()}}
                                <input type="hidden" name="id" value="{{$adSpace->id}}"/>
                                <tr>
                                    <th style="width:10%;">
                                        <label for="case_foreman_id">广告位名称:</label>
                                    </th>
                                    <td style="width:90%;">
                                        <div class="form-group">                                                                <input type="text" class="form-control" id="inputPassword2" style="width:350px;" name="name" value="{{$adSpace->name}}" placeholder="名称">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th style="width:10%;">
                                        <label for="case_foreman_id"> 广告位描述:</label>
                                    </th>
                                    <td style="width:90%;">
                                        <div class="form-group">                                                                <textarea  style="width:350px;height:80px;" class="form-control" id="inputPassword2" name="desc" placeholder="描述">{{$adSpace->desc}}</textarea>
                                        </div>
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