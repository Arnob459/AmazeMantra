@extends('admin.layouts.template')
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Page/</span> All Brand Promotion lists</h4>

        <div class="card">
            <h5 class="card-header">Brand Promotion Information</h5>
            <div class="table-responsive text-nowrap">
              <table class="table">
                <thead class="table-light">
                  <tr>
                    <th>Actions</th>
                    <th>Icon</th>
                    <th>Title</th>
                    <th>POint NO 1</th>
                    <th>POint NO 2</th>
                    <th>POint NO 3</th>
                  </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                  @foreach ($brandlists as $brandlist)
                  <tr>
                    <td>
                        <a href="{{ route('admin.brandlist.edit', $brandlist->id) }}" class="btn btn-primary">Edit</a>
                        <a href="{{ route('admin.brandlist.delete', $brandlist->id) }}" class="btn btn-warning">Delete</a>

                    </td>
                    <td>{{ $brandlist->icon }}</td>
                    <td>{{ $brandlist->title }}</td>
                    <td>{{ $brandlist->point1 }}</td>
                    <td>{{ $brandlist->point2 }}</td>
                    <td>{{ $brandlist->point3 }}</td>


                  </tr>

                  @endforeach

                </tbody>
              </table>
            </div>
          </div>
    </div>
@endsection
