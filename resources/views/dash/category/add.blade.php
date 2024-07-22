@extends('custom_layouts.dash.app')

@section('title','Add category')

@section('content')

<div class="container custom-container">
    <!-- Row -->
    <div class="row">
        <div class="col-xl-12">
            <section class="hk-sec-wrapper">
                <h5 class="hk-sec-title">Add New Category</h5>
                <form method="POST" action="{{ route('dashboard.categories.store') }}">
                    @csrf
                    <div class="form-group">
                        <label for="image">Image</label>
                        <input type="file" class="form-control-file" id="image" name="image" onchange="showPreview(event)">
                        <img id="image_preview" style="display: none; margin-top: 10px;" width="100"
                            alt="Preview image">
                        @error('image')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    @foreach (LaravelLocalization::getSupportedLocales() as $localeCode => $properties)

                    <div class="form-group">
                        <label for="title_{{ $localeCode }}">Title ({{ strtoupper($localeCode) }})</label>
                        <input type="text" class="form-control" id="title_{{ $localeCode }}" name="{{ $localeCode }}[title]" value="{{ old("{$localeCode}.title") }}">
                        @error("{$localeCode}.title")
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="content_{{ $localeCode }}">Content ({{ strtoupper($localeCode) }})</label>
                        <input type="text" class="form-control" id="content_{{ $localeCode }}" name="{{ $localeCode }}[content]" value="{{ old("{$localeCode}.content") }}">
                        @error("{$localeCode}.content")
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    @endforeach

                    <div class="form-group">
                        <label for="parent">Parent Category</label>
                        <select class="form-control" id="parent" name="parent">
                            <option value="">Main Category</option>
                            @foreach ($categories as $cat)
                                <option value="{{ $cat->id }}" {{ old('parent') == $cat->id ? 'selected' : '' }}>
                                    {{ $cat->title }}</option>
                            @endforeach
                        </select>
                        @error('parent')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror

                    <button type="submit" class="btn btn-primary">Add Category</button>
                </form>
            </section>
        </div>
    </div>
    <!-- /Row -->
</div>
 <script>
        function showPreview(event) {
            const input = event.target;
            const file = input.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    const preview = document.getElementById('image_preview');
                    preview.src = e.target.result;
                    preview.style.display = 'block';
                };
                reader.readAsDataURL(file);
            }
        }
    </script>

@endsection
