<x-app-layout>
    <x-slot name="title">Profile</x-slot>
    
    <x-slot name="header">
        <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white" href="javascript:;">Pages</a></li>
        <li class="breadcrumb-item text-sm text-white active" aria-current="page">Profile</li>
    </x-slot>

    <div class="col-md-4">
        <div class="card card-profile">
        <img src="../assets/img/bg-profile.jpg" alt="Image placeholder" class="card-img-top">
        <div class="row justify-content-center">
            <div class="col-4 col-lg-4 order-lg-2">
                @include('profile.partials.image-profile')
            </div>
        </div>
        <div class="card-header text-center border-0 pt-0 pt-lg-2 pb-4 pb-lg-3">
            <div class="d-flex justify-content-between">
                @include('profile.partials.massage-setting-profile')
            </div>
        </div>
        <div class="card-body pt-0">
            <div class="row">
                @include('profile.partials.data-user-profile')
            </div>
        </div>
    </div>
</x-app-layout>

