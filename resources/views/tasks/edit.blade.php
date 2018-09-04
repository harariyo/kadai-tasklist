@extends('layouts.app')

@section('content')

  <h1>id: {{ $task->id }} のタスク編集ページ </h1>

    {!! Form::model($task, ['route' => ['tasks.update', $task->id], 'method' => 'put']) !!}
      {!! Form::label('content', 'タスク') !!}
      {!! Form::text('content') !!}

      {!! Form::label('status', 'ステータス') !!}
      {!! Form::select('status', ['' => '', '未着手' => '未着手', '仕掛' => '仕掛', '完了' =>  '完了']) !!}

      {!! Form::submit('更新') !!}

    {!! Form::close() !!}

  @endsection

