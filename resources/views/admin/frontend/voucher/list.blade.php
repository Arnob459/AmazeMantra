@extends('admin.layouts.template')
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Page/</span> All Voucher lists</h4>


        <div class="card">
            <h5 class="card-header">voucher Information</h5>
            <div class="table-responsive text-nowrap">
              <table class="table">
                <thead class="table-light">
                  <tr>
                    <th>Actions</th>
                    <th>Title</th>
                    <th>Image</th>
                  </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                  @foreach ($vouchers as $voucher)
                  <tr>
                    <td>
                        <a href="{{ route('admin.voucher.edit', $voucher->id) }}" class="btn btn-primary">Edit</a>
                        <a href="{{ route('admin.voucher.delete', $voucher->id) }}" class="btn btn-warning">Delete</a>

                    </td>
                    <td>{{ $voucher->title }}</td>
                    <td>
                        <img style="height: 10vh" src="{{url($voucher->picture)}}" alt="picture">
                    </td>
                  </tr>
                  @endforeach

                </tbody>
              </table>
            </div>
          </div>
    </div>
@endsection
