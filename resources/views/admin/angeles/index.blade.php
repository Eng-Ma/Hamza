@extends('admin.incloud.master')
@php
use App\Enums\StatusEnum;
@endphp

@section('title')
    Angeles
@endsection

@section('header')
    Angeles
@endsection

@section('header_link')
    <a href="">Angeles</a>
@endsection

@section('content-header')
    Index
@endsection

@section('content')
    <div class="row row-sm">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <h3 class="card-title">Angeles</h3>
                    <a href="{{ route('admin.angeles.create') }}" class="btn btn-success">Add Angeles</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="file-datatable" class="table table-bordered text-nowrap key-buttons">
                            <thead>
                                <tr>
                                    <th class="border-bottom-0">ID</th>
                                    <th class="border-bottom-0">text</th>
                                    <th class="border-bottom-0">desc</th>
                                    <th class="border-bottom-0">active</th>
                                    <th class="border-bottom-0">action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($angeles as $angele)
                                    <tr>
                                        <td>{{ $angele->id }}</td>
                                        <td>{{ $angele->text }}</td>
                                        <td>{{ $angele->desc }}</td>


                                        <td>
                                            @if ($angele->status == StatusEnum::ACTIVE)
                                                <a href="{{ route('admin.angeles.toggle_active', ['id' => $angele->id]) }}"
                                                    class="btn text-white" style="background: #4FE39C">
                                                    <i class="fa fa-check"></i>
                                                </a>
                                            @elseif($angele->status == StatusEnum::INACTIVE)
                                                <a href="{{ route('admin.angeles.toggle_active', ['id' => $angele->id]) }}"
                                                    class="btn text-white" style="background: #DC4267">
                                                    <i class="fas fa-times"></i>
                                                </a>
                                            @else
                                                <a href="{{ route('admin.angeles.toggle_active', ['id' => $angele->id]) }}"
                                                    class="btn text-white btn-warning">
                                                    <i class="fas fa-times"></i>
                                                </a>
                                            @endif
                                        </td>
                                        <td>
                                            <a class="btn btn-sm btn-primary"
                                                href="{{ route('admin.angeles.edit', $angele->id) }}">
                                                <span class="fe fe-edit"></span>
                                            </a>
                                            <form class="d-inline"
                                                action="{{ route('admin.angeles.delete', ['id' => $angele->id]) }}"
                                                method="POST">
                                                @csrf
                                                <button class="btn btn-sm btn-danger"
                                                    onclick="return confirm('Are you sure?')">
                                                    <i class="fe fe-trash-2"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script src="{{ asset('adminassets/assets/plugins/datatable/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('adminassets/assets/plugins/datatable/js/dataTables.bootstrap5.js') }}"></script>
    <script src="{{ asset('adminassets/assets/plugins/datatable/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('adminassets/assets/plugins/datatable/js/buttons.bootstrap5.min.js') }}"></script>
    <script src="{{ asset('adminassets/assets/plugins/datatable/js/jszip.min.js') }}"></script>
    <script src="{{ asset('adminassets/assets/plugins/datatable/pdfmake/pdfmake.min.js') }}"></script>
    <script src="{{ asset('adminassets/assets/plugins/datatable/pdfmake/vfs_fonts.js') }}"></script>
    <script src="{{ asset('adminassets/assets/plugins/datatable/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('adminassets/assets/plugins/datatable/js/buttons.print.min.js') }}"></script>
    <script src="{{ asset('adminassets/assets/plugins/datatable/js/buttons.colVis.min.js') }}"></script>
    <script src="{{ asset('adminassets/assets/plugins/datatable/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('adminassets/assets/plugins/datatable/responsive.bootstrap5.min.js') }}"></script>

    <!--Internal Datatable js -->
    <script src="{{ asset('adminassets/assets/js/table-data.js') }}"></script>
@endsection
