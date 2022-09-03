@extends('layout')
@section('main')
    <main class="container" style="background-color: #fff;">
        <section id="contact-us">
            <h1 style="padding-top: 50px;">Update Education</h1>
            @include('includes.flash-message')
            <!-- Contact Form -->
            <div class="contact-form">
                <form action="{{ route('educations.update', $educations)}}" method="post" enctype="form-data">
                    @method('put')
                    @csrf
                    <!-- institutionname -->
                    <label for="institutionname"><span>Institution Name</span></label>
                    <input type="text" id="institutionname" name="institutionname" value="{{ $educations->institutionname }}" />
                    @error('institutionname')
                        {{-- The $attributeValue field is/must be $validationRule --}}
                        <p style="color: red; margin-bottom:25px;">{{ $message }}</p>
                    @enderror
                    <!-- address -->
                    <label for="address"><span>Address</span></label>
                    <input type="text" id="address" name="address" value="{{ $educations->address }}" />
                    @error('address')
                        {{-- The $attributeValue field is/must be $validationRule --}}
                        <p style="color: red; margin-bottom:25px;">{{ $message }}</p>
                    @enderror
                    <!-- institutiontype -->
                    <label for="institutiontype"><span>Institution Type</span></label>
                    <input type="text" id="institutiontype" name="institutiontype" value="{{ $educations->institutiontype }}" />
                    @error('institutiontype')
                        {{-- The $attributeValue field is/must be $validationRule --}}
                        <p style="color: red; margin-bottom:25px;">{{ $message }}</p>
                    @enderror
                    <!-- certificatetype -->
                    <label for="github"><span>Certificate Type</span></label>
                    <input type="text" id="certificatetype" name="certificatetype" value="{{ $educations->certificatetype }}" />
                    @error('certificatetype')
                        {{-- The $attributeValue field is/must be $validationRule --}}
                        <p style="color: red; margin-bottom:25px;">{{ $message }}</p>
                    @enderror
                    <!-- grade -->
                    <label for="grade"><span>Grade</span></label>
                    <input type="text" id="grade" name="grade" value="{{ $educations->grade }}" />
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

