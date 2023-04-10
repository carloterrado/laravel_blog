@extends('back.layouts.pages-layout')
@section('pageTitle', 'Profile')
@section('content')


    <div class=" mt-8 text-sm text-gray-500  bg-white  rounded-lg shadow  max-w-3xl">
        <div class="p-3">
            <livewire:author-profile-header />

            <div class="mb-4 border-b border-gray-200 dark:border-gray-700">
                <ul class="flex flex-wrap -mb-px text-sm font-medium text-center" id="myTab"
                    data-tabs-toggle="#myTabContent" role="tablist">
                    <li class="mr-2" role="presentation">
                        <button
                            class="inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300"
                            id="personal-details-tab" data-tabs-target="#personal-details" type="button" role="tab"
                            aria-controls="personal-details" aria-selected="false">Personal Details</button>
                    </li>
                    <li class="mr-2" role="presentation">
                        <button
                            class="inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300"
                            id="change-password-tab" data-tabs-target="#change-password" type="button" role="tab"
                            aria-controls="change-password" aria-selected="false">Change Pasword</button>
                    </li>

                </ul>
            </div>
            <div id="myTabContent">

                <div class="hidden p-4 rounded-lg bg-white" id="personal-details" role="tabpanel"
                    aria-labelledby="personal-details-tab">

                    <livewire:author-profile-details />

                </div>

                <div class="hidden p-4 rounded-lg bg-white dark:bg-gray-800" id="change-password" role="tabpanel"
                    aria-labelledby="change-password-tab">

                    <livewire:author-change-password-form />

                </div>

            </div>

        </div>

    </div>

@endsection

@push('scripts')
    <script>
        $('#changeAuthorPictureFile').ijaboCropTool({
            preview: '',
            setRatio: 1,
            allowedExtensions: ['jpg', 'jpeg', 'png'],
            buttonsText: ['CROP', 'QUIT'],
            buttonsColor: ['#30bf7d', '#ee5155', -15],
            processUrl: '{{ route('author.change-profile-picture') }}',
            withCSRF: ['_token', '{{ csrf_token() }}'],
            onSuccess: function(message, element, status) {
                Livewire.emit('updateAuthorProfileHeader');
                Livewire.emit('updateTopHeader');
                toastr.success(message)
            },
            onError: function(message, element, status) {
                toastr.error(message)
              
            }
        });
    </script>
@endpush
