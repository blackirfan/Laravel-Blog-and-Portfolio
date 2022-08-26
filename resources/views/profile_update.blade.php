@extends('layout')

@section('main')
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    You're logged in! from profile update

                    <div class="dashboard">
                        <ul>
                            <li><a href="{{route('userDetails.create')}}">Create User Details</a></li>
                            <li><a href="{{route('userDetails.edit')}}">Update User Details</a></li>
                            <li><a href="{{route('educations.create')}}">Create Educations</a></li>
                            <li><a href="{{route('educations.list')}}">List Educations</a></li>
                            <li><a href="{{route('publicationDetails.create')}}">Create Publication Details</a></li>
                            <!-- <li><a href="{{route('categories.create')}}">Create Category</a></li>
                            <li><a href="{{route('categories.index')}}">Categories List</a></li> -->
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

@endsection