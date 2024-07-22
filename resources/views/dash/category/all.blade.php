@extends('custom_layouts.dash.app')
@section('title', 'Category')

@section('content')

    <div class="container custom-container">
        <!-- Row -->
        <div class="row">
            <div class="col-xl-12">
                <section class="hk-sec-wrapper">
                    <h5 class="hk-sec-title">Category Management</h5><br>
                    <a href="{{ route('dashboard.categories.create') }}" class="btn btn-info mb-3">Add New</a>

                    <div class="row">
                        <div class="col-sm">
                            <div class="table-wrap">
                                <div class="table-responsive">
                                    <table class="table mb-0 table-center">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Image</th>
                                                @foreach (LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                                    <th>Title {{ $localeCode }} </th>
                                                    <th>Content {{ $localeCode }} </th>
                                                @endforeach
                                                <th>Parent</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($categories as $category)
                                                @php
                                                    $translations = $category->translations->keyBy('locale')->toArray();
                                                @endphp
                                                <tr>
                                                    <td>{{ $loop->index + 1 }}</td>
                                                    <td><img src="{{ $category->getFirstMediaUrl('images') }}"alt="category"width="50"></td>
                                                    <td>{{ $category->image }}</td>

                                                    {{-- @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                                    @php
                                                    $translations = $category->getTranslationsArray()[ $localeCode];
                                                    @endphp
                                                    <td>{{ $translations['title'] }}</td>
                                                    <td>{{ $translations['content'] }}</td>
                                                    @endforeach --}}
                                                    <td>{{ $category->parentCategory->title ?? 'Main Category' }}</td>
                                                    <td>
                                                        <a href="{{ route('dashboard.categories.edit', $category->id) }}"
                                                            class="mr-25" data-toggle="tooltip" data-original-title="Edit">
                                                            <i class="icon-pencil"></i>
                                                        </a>
                                                        <button type="button"
                                                            class="btn btn-icon btn-danger btn-icon-style-1"
                                                            data-toggle="modal" data-target="#deleteModal"
                                                            data-userid="{{ $category->id }}">
                                                            <span class="btn-icon-wrap"><i
                                                                    class="icon-trash txt-danger"></i></span>
                                                        </button>
                                                    </td>
                                                </tr>
                                                <!-- Delete Confirmation Modal -->
                                                <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog"
                                                    aria-labelledby="deleteModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="deleteModalLabel">Confirm Delete
                                                                </h5>
                                                                <button type="button" class="close" data-dismiss="modal"
                                                                    aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                Are you sure you want to delete this user?
                                                            </div>
                                                            <div class="modal-footer">
                                                                <form
                                                                    id="deleteForm"action="{{ route('dashboard.categories.destroy', $category->id) }}"
                                                                    method="POST">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                    <button type="button" class="btn btn-secondary"
                                                                        data-dismiss="modal">Cancel</button>
                                                                    <button type="submit"
                                                                        class="btn btn-danger">Delete</button>
                                                                </form>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
        <!-- /Row -->
    </div>



@endsection
