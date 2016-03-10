@extends('admin.app')

@section('heading', 'Users')

@section('content')
<div class="models--actions">
    <a class="btn btn-labeled btn-primary" href="{{ route('admin.users.create') }}"><span class="btn-label"><i class="fa fa-plus"></i></span>{{ trans('admin/users.create-user') }}</a>
</div>
<table class="table table-bordered table-striped table-hover">
  <tr>
    <th>Name</th>
    <th>Email</th>
    <th>Actions</th>
  </tr>
  @foreach($users as $user)
    <tr>
      <td>{{ $user->name }}</th>
      <td>{{ $user->email }}</th>
      <td class="col-xs-3">

        {!! Form::open(['data-remote','route' => ['admin.users.destroy',$user->id], 'method' => 'DELETE']) !!}

          <a class="btn btn-labeled btn-default" href="{{ route('admin.users.edit', $user->id) }}"><span class="btn-label"><i class="fa fa-pencil"></i></span>{{ trans('admin/users.edit') }}</a>

          <button type="button" data-destroy="data-destroy" class="btn btn-labeled btn-danger"><span class="btn-label"><i class="fa fa-trash"></i></span>{{ trans('admin/users.delete') }}</button>

        {!! Form::close() !!}
      </td>
    </tr>
  @endforeach
</table>

{{ $users->appends(Request::except('page'))->links() }}

<div class="text-center">

</div>
@endsection
