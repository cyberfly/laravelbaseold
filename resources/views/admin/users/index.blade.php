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
        <form action="{{ route('admin.users.destroy', $user->id) }}" method="post">
          <input type="hidden" name="_method" value="DELETE">
          <input type="hidden" name="_token" value="{{ csrf_token() }}">
          <a class="btn btn-labeled btn-default" href="{{ route('admin.users.edit', $user->id) }}"><span class="btn-label"><i class="fa fa-pencil"></i></span>{{ trans('admin/users.edit') }}</a>
          <button type="submit" class="btn btn-labeled btn-danger"><span class="btn-label"><i class="fa fa-trash"></i></span>{{ trans('admin/users.delete') }}</button>
        </form>
      </td>
    </tr>
  @endforeach
</table>
<div class="text-center">

</div>
@endsection
