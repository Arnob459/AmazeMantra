@extends('admin.layouts.template')
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Page/</span> All Contact Links</h4>
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
            <h5 class="card-header">Link Information</h5>
            <div class="table-responsive text-nowrap">
              <table class="table">
                <thead class="table-light">
                  <tr>
                    <th>Actions</th>
                    <th>Icon</th>
                    <th>Link</th>
                  </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                  @foreach ($links as $link)
                  <tr>
                    <td>
                        <a href="{{ route('admin.link.edit', $link->id) }}" class="btn btn-primary">Edit</a>
                        <a href="{{ route('admin.link.delete', $link->id) }}" class="btn btn-warning">Delete</a>

                    </td>
                    <td>{{ $link->icon }}</td>
                    <td>{{ $link->link }}</td>


                  </tr>

                  @endforeach

                </tbody>
              </table>
            </div>
          </div>
    </div>
@endsection
