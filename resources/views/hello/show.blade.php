@extends('layouts.helloapp')

@section('title', 'Show')

@section('menubar')
    @parent
    詳細ページ
@endsection



@section('content')

    @if ($items != null)
        @foreach($items as $item)

            <table width="400px">
                <tr>
                    <th width="50px">Id: </th><td width="50px">{{$item->id}}</td>
                    <th width="50px">Name: </th><td>{{$item->name}}</td>
                </tr>
            </table>
        @endforeach
    @endif

@endsection

@section('footer')
copyright 2020 gibo.
@endsection