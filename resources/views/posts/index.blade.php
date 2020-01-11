
@extends('layouts.app')
@section('content')
<div class="row">
<div class="col-sm -12">
<div class="full">
<h2>CRUD Resource</h2>
</div>
</div>
</div>

<table class="table table-bordered">
<tr>
<th with="80px">No</th>
<th>Title</th>
<th>Body</th>
<th with="140px" class="text-center">
<a href="{{route('posts.create')}}" class="btn btn-success btn-sm">
<i class="glyphicon glyphichon-plus"></i>
</a>
</th>
</tr>
<?php $no=1; ?>
@foreach ($post as $key => value)
<tr>
<td>{{$no++}}</td>
<td>{{ $value->title}}</td>
<td>{{ $value->body}}</td>
<td>
<a class="btn btn-info btn-sm" href="{{route('posts.show',$value->id)}}">
<i class="glyphicon glypicon-th-large"><i></a>
<a class ="btn btn-primary btn-sm" href="{{route('posts.edit',$value->id)}}">

<i classs="glyphicon glyphicon-pencil"><i></a>
</tr>
@endforeach
</table>
@endsection