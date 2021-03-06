@extends('admin.layouts.master')
@section('master.title', 'Tag')
@section('master.body', 'tags')
@section('master.content')

@include ('admin/tags/update')

<ol class="breadcrumb text-right">
  <li><a href="{{ route('admin.dashboard') }}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
  <li class="active">Tag</li>
</ol>
<div class="container-posts">

  <div class="row ">
    <h2 class="heading-2 col-sm-8">
      Quản Lý Tag
    </h2>
    <div class="col-sm-9 posts-header">
      <div class="input-group">
        <input type="text" class="form-control" id="input_search" placeholder="Tìm kiếm"/>
        <span class="input-group-addon">
          <a href="javascript:" id="btnSearch"><i class="fa fa-search"></i></a>
        </span>
      </div>
    </div>
    <div class="col-sm-3">
      <select id="sort" class="form-control">
          <option class="weight" value=''>Sắp xếp theo ...</option>
          <option value="tag-asc">Tên tag (A - Z)</option>
          <option value="tag-desc">Tên tag (Z - A)</option>
          <option value="posts_count-asc">tổng bài viết &#xf176;</option>
          <option value="posts_count-desc">tổng bài viết &#xf175;</option>
      </select>
    </div>
    <div class="col-sm-12">
      <div class="table-responsive">
        <table class="table table-bordered table-hover">
          <thead>
            <tr>
              <th class="text-center">#</th>
              <th class="text-center">Tên tag</th>
              <th class="text-center">Tổng bài viết trong tag</th>
              <th class="text-center">Ngày tạo, Hoạt động</th>
              <th class="text-center">Hoạt động</th>
            </tr>
          </thead>
          <tbody id="table-body">
          </tbody>
        </table>
      </div>
      <div class="row pagination-js">

      </div>
    </div>
  </div>
</div>

@endsection
