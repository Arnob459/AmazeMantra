@extends('admin.layouts.template')
@section('content')

    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
      <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Layouts/</span> Voucher</h4>
    @include('alart.messages')

      <!-- Basic Layout & Basic with Icons -->
      <div class="row">
        <!-- Basic Layout -->
        <div class="col-xxl">
          <div class="card mb-4">
            <div class="card-header d-flex align-items-center justify-content-between">
              <h5 class="mb-0"> Layout</h5>
            </div>
            <div class="card-body">
                <form action="{{route('admin.voucherstore')}}" method="POST"  enctype="multipart/form-data">
                    @csrf
                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label" for="basic-default-name">Title</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="voucher_title" id="voucher_title" value="{{ $main->voucher_title }}" required />
                  </div>
                </div>

                <div class="row justify-content-end">
                  <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Update</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>


      <div class="card">
        <h5 class="card-header">Voucher Information</h5>

        <nav class="navbar navbar-example navbar-expand-lg ">
            <div class="container-fluid">
              <div class="collapse navbar-collapse" id="navbar-ex-3">
                  <a class="btn btn-outline-primary" href="{{ route('admin.voucher.create') }}">+ Add New</a>
              </div>
            </div>
          </nav>

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
    <!-- / Content -->





@endsection
