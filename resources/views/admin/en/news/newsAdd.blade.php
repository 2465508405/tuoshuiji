@extends('admin.en.layouts.main')
@section('content')
	<form class="layui-form">
		<div class="layui-form-item">
			<label class="layui-form-label">文章标题</label>
			<div class="layui-input-block">
				<input type="text" class="layui-input newsName" lay-verify="required" placeholder="请输入文章标题">
			</div>
		</div>
		<div class="layui-form-item">
			<div class="layui-inline">
				<label class="layui-form-label">自定义属性</label>
				<div class="layui-input-block">
					<input type="checkbox" name="tuijian" class="tuijian" title="推荐">
					<input type="checkbox" name="shenhe" class="newsStatus" title="审核">
					<input type="checkbox" name="show" class="isShow" title="展示">
				</div>
			</div>
			<div class="layui-inline">		
				<label class="layui-form-label">文章作者</label>
				<div class="layui-input-inline">
					<input type="text" class="layui-input newsAuthor" lay-verify="required" placeholder="请输入文章作者">
				</div>
			</div>
			<div class="layui-inline">		
				<label class="layui-form-label">发布时间</label>
				<div class="layui-input-inline">
					<input type="text" class="layui-input newsTime" lay-verify="date" onclick="layui.laydate({elem:this})">
				</div>
			</div>
			<div class="layui-inline">
				<label class="layui-form-label">浏览权限</label>
				<div class="layui-input-inline">
					<select name="browseLook" class="newsLook" lay-filter="browseLook">
				        <option value="0">开放浏览</option>
				        <option value="1">会员浏览</option>
				    </select>
				</div>
			</div>
		</div>
		<div class="layui-form-item">
			<label class="layui-form-label">关键字</label>
			<div class="layui-input-block">
				<input type="text" class="layui-input" placeholder="请输入文章关键字">
			</div>
		</div>
		<div class="layui-form-item">
			<label class="layui-form-label">内容摘要</label>
			<div class="layui-input-block">
				<textarea placeholder="请输入内容摘要" class="layui-textarea"></textarea>
			</div>
		</div>
		<div class="layui-form-item">
			<label class="layui-form-label">文章内容</label>
			<div class="layui-input-block">
				<textarea class="layui-textarea layui-hide" name="content" lay-verify="content" id="news_content"></textarea>
			</div>
		</div>
		<div class="layui-form-item">
			<div class="layui-input-block">
				<button class="layui-btn" lay-submit="" lay-filter="addNews">立即提交</button>
				<button type="reset" class="layui-btn layui-btn-primary">重置</button>
		    </div>
		</div>
	</form>
@endsection