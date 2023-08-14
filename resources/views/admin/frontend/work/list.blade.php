@extends('admin.layouts.template')
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Page/</span> All Work lists</h4>
    @if (session()->has('message'))
    <div class="alert alert-success">
      {{(session()->get('message'))}}
    </div>

    @endif

    @if (session('success'))
    <div class="alert alert-success alert-dismissible">
        <strong>Success!</strong>{{session('success')}}
    </div>
    @endif

        <div class="card">
            <h5 class="card-header">Work Information</h5>
            <div class="table-responsive text-nowrap">
              <table class="table">
                <thead class="table-light">
                  <tr>
                    <th>Actions</th>
                    <th>Number</th>
                    <th>Title</th>
                    <th>Description</th>
                  </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                  @foreach ($works as $work)
                  <tr>
                    <td>
                        <a href="{{ route('admin.work.edit', $work->id) }}" class="btn btn-primary">Edit</a>
                        <a href="{{ route('admin.work.delete', $work->id) }}" class="btn btn-warning">Delete</a>

                    </td>
                    <td>{{ $work->number }}</td>
                    <td>{{ $work->title }}</td>
                    <td>{{ $work->description }}</td>


                  </tr>

                  @endforeach

                </tbody>
              </table>
            </div>
          </div>
    </div>
@endsection
