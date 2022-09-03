@extends('layout')
@section('head')
    <script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
@endsection
@section('main')
    <main class="container" style="background-color: #fff;">
        <section id="contact-us">
            <h1 style="padding-top: 50px;">Create New Work Experience</h1>
            @include('includes.flash-message')
            <!-- Contact Form -->
            <div class="contact-form">
                <form action="{{ route('workExperience.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <!-- position -->
                    <label for="title"><span>Position</span></label>
                    <input type="text" id="position" name="position" value="{{ old('position') }}" />
                    @error('position')
                        {{-- The $attributeValue field is/must be $validationRule --}}
                        <p style="color: red; margin-bottom:25px;">{{ $message }}</p>
                    @enderror
                    <!-- companyname -->
                    <label for="companyname"><span>Company Name</span></label>
                    <input type="text" id="companyname" name="companyname" value="{{ old('companyname') }}" />
                    @error('companyname')
                        {{-- The $attributeValue field is/must be $validationRule --}}
                        <p style="color: red; margin-bottom:25px;">{{ $message }}</p>
                    @enderror
                    <!-- timeperiod -->
                    <label for="email"><span>Time Period</span></label>
                    <input type="text" id="timeperiod" name="timeperiod" value="{{ old('timeperiod') }}" />
                    @error('timeperiod')
                        {{-- The $attributeValue field is/must be $validationRule --}}
                        <p style="color: red; margin-bottom:25px;">{{ $message }}</p>
                    @enderror
                    <!-- description -->
                    <label for="description"><span>Description</span></label>
                    <textarea id="description" name="description">{{ old('description') }}</textarea>
                    @error('description')
                        {{-- The $attributeValue field is/must be $validationRule --}}
                        <p style="color: red; margin-bottom:25px;">{{ $message }}</p>
                    @enderror
                    <!-- Button -->
                    <input type="submit" value="Submit" />
                </form>
            </div>

        </section>
    </main>
@endsection

@section('scripts')
    <script>
        CKEDITOR.replace('description');
    </script>
@endsection