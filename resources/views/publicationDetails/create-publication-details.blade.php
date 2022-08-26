@extends('layout')
@section('head')
    <script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
@endsection
@section('main')
    <main class="container" style="background-color: #fff;">
        <section id="contact-us">
            <h1 style="padding-top: 50px;">Create New Publication Details</h1>
            @include('includes.flash-message')
            <!-- Contact Form -->
            <div class="contact-form">
                <form action="{{ route('publicationDetails.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <!-- Name -->
                    <label for="title"><span>Name</span></label>
                    <input type="text" id="name" name="name" value="{{ old('name') }}" />
                    @error('name')
                        {{-- The $attributeValue field is/must be $validationRule --}}
                        <p style="color: red; margin-bottom:25px;">{{ $message }}</p>
                    @enderror
                    <!-- journalname -->
                    <label for="journalname"><span>Journal Name</span></label>
                    <input type="text" id="journalname" name="journalname" value="{{ old('journalname') }}" />
                    @error('journalname')
                        {{-- The $attributeValue field is/must be $validationRule --}}
                        <p style="color: red; margin-bottom:25px;">{{ $message }}</p>
                    @enderror
                    <!-- year -->
                    <label for="email"><span>year</span></label>
                    <input type="text" id="year" name="year" value="{{ old('year') }}" />
                    @error('year')
                        {{-- The $attributeValue field is/must be $validationRule --}}
                        <p style="color: red; margin-bottom:25px;">{{ $message }}</p>
                    @enderror
                    <!-- sourcelink -->
                    <label for="sourcelink"><span>sourcelink</span></label>
                    <input type="text" id="sourcelink" name="sourcelink" value="{{ old('sourcelink') }}" />
                    @error('sourcelink')
                        {{-- The $attributeValue field is/must be $validationRule --}}
                        <p style="color: red; margin-bottom:25px;">{{ $message }}</p>
                    @enderror
                    <!-- publicationdetails -->
                    <label for="publicationdetails"><span>publicationdetails</span></label>
                    <textarea id="publicationdetails" name="publicationdetails">{{ old('publicationdetails') }}</textarea>
                    @error('publicationdetails')
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
        CKEDITOR.replace('publicationdetails');
    </script>
@endsection
