  @extends('layouts.app')
  @section('content')

  <h1>タスク新規作成ページ</h1>

  {!! Form::model($task, ['route' => 'tasks.store']) !!}
    {!! Form::label('content', 'タスク') !!}
    {!! Form::text('content') !!}
    {!! Form::label('status', 'ステータス') !!}
    {!! Form::select('status', ['' => '', '未着手' => '未着手', '仕掛' => '仕掛', '完了' =>  '完了']) !!}

    {!! Form::submit('登録') !!}
  {!! Form::close() !!}

  @endsection

