@extends('layout')
@section('head')
    <script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
@endsection
@section('main')
    <main class="container" style="background-color: #fff;">
        <section id="contact-us">
            <h1 style="padding-top: 50px;">Update New User Details</h1>
            @include('includes.flash-message')
            <!-- Contact Form -->
            <div class="contact-form">
                <form action="{{ route('userDetails.update', $userDetail)}}" method="post" enctype="multipart/form-data">
                    @method('put')
                    @csrf
                    <!-- Name -->
                    <label for="title"><span>Name</span></label>
                    <input type="text" id="name" name="name" value="{{ $userDetail->name }}" />
                    @error('name')
                        {{-- The $attributeValue field is/must be $validationRule --}}
                        <p style="color: red; margin-bottom:25px;">{{ $message }}</p>
                    @enderror
                    <!-- mobile -->
                    <label for="mobile"><span>Mobile</span></label>
                    <input type="text" id="mobile" name="mobile" value="{{ $userDetail->mobile }}" />
                    @error('mobile')
                        {{-- The $attributeValue field is/must be $validationRule --}}
                        <p style="color: red; margin-bottom:25px;">{{ $message }}</p>
                    @enderror
                    <!-- email -->
                    <label for="email"><span>Email</span></label>
                    <input type="text" id="email" name="email" value="{{ $userDetail->email }}" />
                    @error('email')
                        {{-- The $attributeValue field is/must be $validationRule --}}
                        <p style="color: red; margin-bottom:25px;">{{ $message }}</p>
                    @enderror
                    <!-- github -->
                    <label for="github"><span>Github</span></label>
                    <input type="text" id="github" name="github" value="{{ $userDetail->github }}" />
                    @error('github')
                        {{-- The $attributeValue field is/must be $validationRule --}}
                        <p style="color: red; margin-bottom:25px;">{{ $message }}</p>
                    @enderror
                    <!-- youtube -->
                    <label for="youtube"><span>Youtube</span></label>
                    <input type="text" id="youtube" name="youtube" value="{{ $userDetail->youtube }}" />
                    @error('youtube')
                        {{-- The $attributeValue field is/must be $validationRule --}}
                        <p style="color: red; margin-bottom:25px;">{{ $message }}</p>
                    @enderror
                    <!-- facebook -->
                    <label for="facebook"><span>Facebook</span></label>
                    <input type="text" id="facebook" name="facebook" value="{{ $userDetail->facebook }}" />
                    @error('facebook')
                        {{-- The $attributeValue field is/must be $validationRule --}}
                        <p style="color: red; margin-bottom:25px;">{{ $message }}</p>
                    @enderror
                    <!-- twitter -->
                    <label for="twitter"><span>Twitter</span></label>
                    <input type="text" id="twitter" name="twitter" value="{{ $userDetail->twitter }}" />
                    @error('twitter')
                        {{-- The $attributeValue field is/must be $validationRule --}}
                        <p style="color: red; margin-bottom:25px;">{{ $message }}</p>
                    @enderror
                    <!-- linkdin -->
                    <label for="linkdin"><span>Linkdin</span></label>
                    <input type="text" id="linkdin" name="linkdin" value="{{ $userDetail->linkdin }}" />
                    @error('linkdin')
                        {{-- The $attributeValue field is/must be $validationRule --}}
                        <p style="color: red; margin-bottom:25px;">{{ $message }}</p>
                    @enderror
                    <!-- interest -->
                    <label for="facebook"><span>Interest</span></label>
                    <textarea id="interest" name="interest">{{ $userDetail->interest }}</textarea>
                    @error('interest')
                        {{-- The $attributeValue field is/must be $validationRule --}}
                        <p style="color: red; margin-bottom:25px;">{{ $message }}</p>
                    @enderror
                    <br>
                    <!-- Body-->
                    <label for="about"><span>About</span></label>
                    <textarea id="about" name="about">{{ $userDetail->about }}</textarea>
                    @error('about')
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
        CKEDITOR.replace('interest');
        CKEDITOR.replace('about');
    </script>
@endsection
