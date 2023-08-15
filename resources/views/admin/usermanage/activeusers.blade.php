@extends('admin.layouts.template')
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Page/</span> Active Users</h4>

        <div class="card">
            <h5 class="card-header">Users Information</h5>
            <div class="table-responsive text-nowrap">
              <table class="table">
                <thead class="table-light">
                  <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Username</th>
                    <th>Phone</th>
                    <th>Joined At</th>
                    <th>Status</th>
                    <th>Actions</th>
                  </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                  @foreach ($active_users as $user)
                  <tr>

                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->username }}</td>
                    <td>{{ $user->phone }}</td>
                    <td>{{ $user->created_at }}</td>

                    <td> @if($user->status == 1 )
                        <span class="badge bg-label-primary me-1">Active</span>
                        @else
                        <span class="badge bg-label-primary me-1">Inactive</span>
                        @endif
                    </td>

                    <td>
                        <a href="{{ route('admin.user.details', $user->id) }}" class="btn btn-primary">Details</a>
                    </td>


                  </tr>

                  @endforeach

                </tbody>
              </table>
            </div>
          </div>
    </div>
@endsection
