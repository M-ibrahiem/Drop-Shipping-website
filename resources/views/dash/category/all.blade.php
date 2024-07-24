@extends('custom_layouts.dash.app')


{{-- @push('custom_css')
    <link href="https://cdn.datatables.net/v/bs4/jq-3.7.0/dt-2.0.8/datatables.min.css" rel="stylesheet">
@endpush
@push('custom_js')
    <script src="https://cdn.datatables.net/v/bs4/jq-3.7.0/dt-2.0.8/datatables.min.js"></script>
    <script>
        let table = new DataTable('#categorysTable');
    </script>
@endpush --}}
@section('title', 'Category')
@section('content')

    <div class="col-xl-12">
        <section class="hk-sec-wrapper">
            <h5 class="hk-sec-title">Category</h5>
            <p class="mb-25">List of all Categories</p>
            <div class="row">
                <div class="col-sm">
                    <a href="{{ route('dashboard.categories.create') }}" class="btn btn-info mb-3">Add New</a>
                    <div class="table-responsive">
                        <table class="table table-hover mb-0" id="categorysTable">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Img</th>
                                    @foreach (LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                        <th>name {{ $localeCode }}</th>
                                        <th>Content {{ $localeCode }}</th>
                                    @endforeach
                                    {{-- <th>Parent</th> --}}
                                    <th>Options</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $category)
                                    <tr>
                                        <td>{{ $loop->index + 1 }}</td>
                                        <td>
                                            @if ($category->hasMedia('images'))
                                                @php
                                                    // dd($category->getFirstMediaUrl('images'));
                                                    // dd($category->media);

                                                @endphp
                                                <img src="{{ $category->getFirstMediaUrl('images') }}" alt="category"
                                                    width="50">
                                            @else
                                                No image
                                            @endif
                                        </td>
                                        @foreach (LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                            @php
                                                $translations = $category->getTranslationsArray()[$localeCode];
                                            @endphp
                                            <td>{{ $translations['title'] }}</td>
                                            <td>{{ $translations['content'] }}</td>
                                        @endforeach

                                        {{-- <td>{{ $category->title ?? 'Main Category' }}</td> --}}
                                        <td>
                                            <div class="d-flex">
                                                @if ($category->deleted_at)
                                                    <a href="{{ route('dashboard.categories.restore', $category->id) }}"
                                                        class="btn btn-icon btn-secondary btn-icon-style-3">
                                                        <span class="btn-icon-wrap"><i class="fa fa-undo"></i></span>
                                                    </a>
                                                    <form action="{{ route('dashboard.categories.erase', $category->id) }}"
                                                        method="POST" style="display: inline;">
                                                        @method('DELETE')
                                                        @csrf
                                                        <button type="submit"
                                                            class="btn btn-icon btn-info btn-icon-style-3"
                                                            onclick="return confirm('Are you sure you want to delete this category?')">
                                                            <span class="btn-icon-wrap"><i class="icon-trash"></i></span>
                                                        </button>
                                                    </form>
                                                @else
                                                    <a href="{{ route('dashboard.categories.edit', $category->id) }}"
                                                        class="btn btn-icon btn-secondary btn-icon-style-1 mr-2">
                                                        <span class="btn-icon-wrap"><i class="fa fa-pencil"></i></span>
                                                        Edit
                                                    </a>
                                                    <button type="button" class="btn btn-icon btn-danger btn-icon-style-1"
                                                        data-toggle="modal" data-target="#deleteModal"
                                                        data-userid="{{ $category->id }}">
                                                        <span class="btn-icon-wrap"><i
                                                                class="icon-trash txt-danger"></i></span>
                                                    </button>
                                        </td>
                                        <!-- Delete Confirmation Modal -->
                                        <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog"
                                            aria-labelledby="deleteModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="deleteModalLabel">Confirm
                                                            Delete</h5>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        Are you sure you want to delete this user?
                                                    </div>
                                                    <div class="modal-footer">
                                                        <form id="deleteForm"
                                                            action="{{ route('dashboard.categories.destroy', $category->id) }}"
                                                            method="POST">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="button" class="btn btn-secondary"
                                                                data-dismiss="modal">Cancel</button>
                                                            <button type="submit" class="btn btn-danger">Delete</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                @endif
                    </div>
                    </td>
                    </tr>
                    @endforeach
                    </tbody>
                    </table>
                </div>
            </div>
    </div>
    </section>
    </div>
@endsection
