@extends('layout')
@section('main')
    <main class="container" style="background-color: #fff;">
        <section id="contact-us">
            <h1 style="padding-top: 50px;">Create New Educations</h1>
            @include('includes.flash-message')
            <!-- Contact Form -->
            <div class="contact-form">
                <form action="{{ route('educations.store') }}" method="post" enctype="form-data">
                    @csrf
                    <!-- institutionname -->
                    <label for="institutionname"><span>Institution Name</span></label>
                    <input type="text" id="institutionname" name="institutionname" value="{{ old('institutionname') }}" />
                    @error('institutionname')
                        {{-- The $attributeValue field is/must be $validationRule --}}
                        <p style="color: red; margin-bottom:25px;">{{ $message }}</p>
                    @enderror
                    <!-- address -->
                    <label for="address"><span>Address</span></label>
                    <input type="text" id="address" name="address" value="{{ old('address') }}" />
                    @error('address')
                        {{-- The $attributeValue field is/must be $validationRule --}}
                        <p style="color: red; margin-bottom:25px;">{{ $message }}</p>
                    @enderror
                    <!-- institutiontype -->
                    <label for="institutiontype"><span>Institution Type</span></label>
                    <input type="text" id="institutiontype" name="institutiontype" value="{{ old('institutiontype') }}" />
                    @error('institutiontype')
                        {{-- The $attributeValue field is/must be $validationRule --}}
                        <p style="color: red; margin-bottom:25px;">{{ $message }}</p>
                    @enderror
                    <!-- certificatetype -->
                    <label for="github"><span>Certificate Type</span></label>
                    <input type="text" id="certificatetype" name="certificatetype" value="{{ old('certificatetype') }}" />
                    @error('certificatetype')
                        {{-- The $attributeValue field is/must be $validationRule --}}
                        <p style="color: red; margin-bottom:25px;">{{ $message }}</p>
                    @enderror
                    <!-- grade -->
                    <label for="grade"><span>Grade</span></label>
                    <input type="text" id="grade" name="grade" value="{{ old('grade') }}" />
                    @error('grade')
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
