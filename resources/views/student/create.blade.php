@extends('common.layout')

@section('content')
    <!-- 自定义内容 -->
    <div class="panel panel-default">
        <div class="panel-heading">新增学生</div>
        <div class="panel-body">
            <form class="form-horizontal" role="form" method="post" action="{{url('student/store')}}">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="form-group">
                    <label class="col-sm-2 control-label">姓名</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" name="Student[name]" placeholder="姓名">
                    </div>
                    <div class="col-sm-5">
                        <p class="form-control-static text-danger">姓名不能为空</p>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">年龄</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" name='Student[age]' placeholder="年龄">
                    </div>
                    <div class="col-sm-5">
                        <p class="form-control-static text-danger">年龄只能为整数</p>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">性别</label>
                    <div class="col-sm-5">
                        <label class="radio-inline">
                            <input type="radio" name="Student[sex]" value="0">未知
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="Student[sex]" value="1">男
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="Student[sex]" value="2">女
                        </label>
                    </div>
                    <div class="col-sm-5">
                        <p class="form-control-static text-danger">请选择性别</p>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-primary">提交</button>
                    </div>
                </div>
            </form>

        </div>
    </div>
@stop