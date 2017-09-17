@extends('common.layout')
@section('content')
    @include('common.message')
    <!-- 自定义内容 -->
    <div class="panel panel-default">
        <div class="panel-heading">学生列表</div>
        <div class="panel-body">
            <table class="table table-striped table-responsive table-hover">
                <thead>
                <tr>
                    <th>id</th>
                    <th>姓名</th>
                    <th>年龄</th>
                    <th>性别</th>
                    <th width="120">操作</th>
                </tr>
                </thead>
                <tbody>
                @foreach($students as $student)
                <tr>
                    <th>{{$student->id}}</th>
                    <td>{{$student->name}}</td>
                    <td>{{$student->age}}</td>
                    <td>
                        @if($student->sex == 1)
                            男
                        @else
                            女
                        @endif
                    </td>
                    <td>
                        <a href="">详情</a>
                        <a href="">修改</a>
                        <a href="">删除</a>
                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <nav>
        <div class="pull-right">
            {{$students->render()}}
        </div>
        {{--<ul class="pagination pull-right">--}}
            {{--<li  class="previous"><a href="#">&laquo;</a></li>--}}
            {{--<li><a href="#">1</a></li>--}}
            {{--<li><a href="#">2</a></li>--}}
            {{--<li><a href="#">3</a></li>--}}
            {{--<li><a href="#">4</a></li>--}}
            {{--<li><a href="#">5</a></li>--}}
            {{--<li><a href="#">&raquo;</a></li>--}}
        {{--</ul>--}}
    </nav>
@stop