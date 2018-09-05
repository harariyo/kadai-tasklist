@extends('layouts.app')

@section('content')

  <h1>id: {{ $task->id }} のタスク編集ページ </h1>
  <div class="row">
    <div class="col-lg-6 col-lg-offset-3 col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 col-xs-12">
      {!! Form::model($task, ['route' => ['tasks.update', $task->id], 'method' => 'put']) !!}
        <div class="form-group">
          {!! Form::label('content', 'タスク') !!}
          {!! Form::text('content', null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
          {!! Form::label('status', 'ステータス') !!}
          {!! Form::select('status', ['' => '', '未着手' => '未着手', '仕掛' => '仕掛', '完了' =>  '完了']) !!}
        </div>
      {!! Form::submit('更新',['class' => 'btn btn-default']) !!}

    {!! Form::close() !!}

    </div>
  </div>
  
  @endsection

