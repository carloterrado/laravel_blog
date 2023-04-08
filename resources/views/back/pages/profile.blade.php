@extends('back.layouts.pages-layout')
@section('pageTitle', 'Profile')
@section('content')


<div class=" mt-8 text-sm text-gray-500  bg-white  rounded-lg shadow  max-w-3xl">
    <div class="p-3">
        @livewire('author-profile-header')


        <div class="mb-4 border-b border-gray-200 dark:border-gray-700">
            <ul class="flex flex-wrap -mb-px text-sm font-medium text-center" id="myTab" data-tabs-toggle="#myTabContent" role="tablist">
                <li class="mr-2" role="presentation">
                    <button class="inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="personal-details-tab" data-tabs-target="#personal-details" type="button" role="tab" aria-controls="personal-details" aria-selected="false">Personal Details</button>
                </li>
                <li class="mr-2" role="presentation">
                    <button class="inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="change-password-tab" data-tabs-target="#change-password" type="button" role="tab" aria-controls="change-password" aria-selected="false">Change Pasword</button>
                </li>

            </ul>
        </div>
        <div id="myTabContent">

            <div class="hidden p-4 rounded-lg bg-white" id="personal-details" role="tabpanel" aria-labelledby="personal-details-tab">
               @livewire('author-profile-details')
            </div>
            <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="change-password" role="tabpanel" aria-labelledby="change-password-tab">
                <p class="text-sm text-gray-500 dark:text-gray-400">This is some placeholder content the <strong class="font-medium text-gray-800 dark:text-white">Settings tab's associated content</strong>. Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control the content visibility and styling.</p>
            </div>

        </div>

    </div>

</div>

@endsection