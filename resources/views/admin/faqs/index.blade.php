@extends('admin.incloud.master')

@php
use App\Enums\StatusEnum;
@endphp

@section('title')
    Faqs
@endsection

@section('header')
    Faqs
@endsection

@section('header_link')
    <a href="">Faqs</a>
@endsection

@section('content-header')
    Index
@endsection

@section('style')
    <style>
        .warehouse-products-table {
            width: 100%;
            margin-bottom: 20px;
        }

        .warehouse-products-table th,
        .warehouse-products-table td {
            text-align: center;
            padding: 8px;
        }

        .warehouse-products-table th {
            background-color: #f8f9fa;
        }

        .warehouse-products-table tbody tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        .bold-total {
            font-weight: bold;
        }
    </style>
@endsection

@section('content')
    <div class="row row-sm">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <h3 class="card-title">Faqs</h3>
                    <a href="{{ route('admin.faqs.create') }}" class="btn btn-success">Add Faq</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="file-datatable" class="table table-bordered text-nowrap key-buttons">
                            <thead>
                                <tr>
                                    <th class="border-bottom-0">ID</th>
                                    <th class="border-bottom-0">Question</th>
                                    <th class="border-bottom-0">Answer Question</th>
                                    <th class="border-bottom-0">active</th>
                                    <th class="border-bottom-0">action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($faqs as $faq)
                                    <tr>
                                        <td>{{ $faq->id }}</td>
                                        <td>{{ $faq->question }}</td>
                                        <td>{{ $faq->answer_question }}</td>
                                        <td>
                                            @if ($faq->status == StatusEnum::ACTIVE)
                                                <a href="{{ route('admin.faqs.toggle_active', ['id' => $faq->id]) }}"
                                                    class="btn text-white" style="background: #4FE39C">
                                                    <i class="fa fa-check"></i>
                                                </a>
                                            @elseif($faq->status == StatusEnum::INACTIVE)
                                                <a href="{{ route('admin.faqs.toggle_active', ['id' => $faq->id]) }}"
                                                    class="btn text-white" style="background: #DC4267">
                                                    <i class="fas fa-times"></i>
                                                </a>
                                            @else
                                                <a href="{{ route('admin.faqs.toggle_active', ['id' => $faq->id]) }}"
                                                    class="btn text-white btn-warning">
                                                    <i class="fas fa-times"></i>
                                                </a>
                                            @endif
                                        </td>
                                        <td>
                                            <a class="btn btn-sm btn-primary"
                                                href="{{ route('admin.faqs.edit', $faq->id) }}">
                                                <span class="fe fe-edit"></span>
                                            </a>
                                            <form class="d-inline"
                                                action="{{ route('admin.faqs.delete', ['id' => $faq->id]) }}"
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

    <script src="{{ asset('adminassets/assets/js/table-data.js') }}"></script>
@endsection
