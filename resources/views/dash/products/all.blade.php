@extends('custom_layouts.dash.app')

@push('custom_css')
    <link href="https://cdn.datatables.net/v/bs4/jq-3.7.0/dt-2.0.8/datatables.min.css" rel="stylesheet">
@endpush

@push('custom_js')
    <script src="https://cdn.datatables.net/v/bs4/jq-3.7.0/dt-2.0.8/datatables.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#productsTable').DataTable();
        });
    </script>
@endpush

@section('title', 'Products')

@section('content')

<div class="col-xl-12">
    <section class="hk-sec-wrapper">
        <h5 class="hk-sec-title">Products</h5>
        <p class="mb-25">List of all products</p>
        <div class="row">
            <div class="col-sm">
                <a href="{{ route('dashboard.products.create') }}" class="btn btn-info mb-3">Add New</a>
                <div class="table-responsive">
                    <table class="table table-hover mb-0" id="productsTable">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Img</th>
                                @foreach (LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                    <th>Name ({{ $localeCode }})</th>
                                    <th>Content ({{ $localeCode }})</th>
                                @endforeach
                                <th>Category</th>
                                <th>Options</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $product)
                                <tr>
                                    <td>{{ $loop->index + 1 }}</td>
                                    <td>
                                        @if ($product->hasMedia('images'))
                                            <img src="{{ $product->getFirstMediaUrl('images') }}" alt="product" width="50">
                                        @else
                                            No image
                                        @endif
                                    </td>
                                    @foreach (LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                        @php
                                            $translations = $product->getTranslationsArray()[$localeCode];
                                        @endphp
                                        <td>{{ $translations['title'] }}</td>
                                        <td>{{ $translations['content'] }}</td>
                                        @endforeach
                                        <td>{{ $product->category->title }}</td>
                                    <td>
                                        <div class="d-flex">
                                            @if ($product->deleted_at)
                                                <a href="{{ route('dashboard.products.restore', $product->id) }}" class="btn btn-icon btn-secondary btn-icon-style-3">
                                                    <span class="btn-icon-wrap"><i class="fa fa-undo"></i></span>
                                                </a>
                                                <form action="{{ route('dashboard.products.erase', $product->id) }}" method="POST" style="display: inline;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-icon btn-info btn-icon-style-3" onclick="return confirm('Are you sure you want to delete this product?')">
                                                        <span class="btn-icon-wrap"><i class="icon-trash"></i></span>
                                                    </button>
                                                </form>
                                            @else
                                                <a href="{{ route('dashboard.products.edit', $product->id) }}" class="btn btn-icon btn-secondary btn-icon-style-1 mr-2">
                                                    <span class="btn-icon-wrap"><i class="fa fa-pencil"></i></span>
                                                    Edit
                                                </a>
                                                <button type="button" class="btn btn-icon btn-danger btn-icon-style-1" data-toggle="modal" data-target="#deleteModal" data-userid="{{ $product->id }}">
                                                    <span class="btn-icon-wrap"><i class="icon-trash txt-danger"></i></span>
                                                </button>
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

<!-- Delete Confirmation Modal -->
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteModalLabel">Confirm Delete</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Are you sure you want to delete this product?
            </div>
            <div class="modal-footer">
                <form id="deleteForm" action="#" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    $('#deleteModal').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget)
        var productId = button.data('userid')
        var action = '{{ route("dashboard.products.destroy", ":id") }}'
        action = action.replace(':id', productId)
        var modal = $(this)
        modal.find('#deleteForm').attr('action', action)
    })
</script>

@endsection
