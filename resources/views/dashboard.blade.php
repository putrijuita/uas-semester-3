<x-app-layout>
    <x-slot name="title">Dashboard</x-slot>
    
    <x-slot name="header">
        <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white" href="javascript:;">Pages</a></li>
        <li class="breadcrumb-item text-sm text-white active" aria-current="page">Dashboard</li>
    </x-slot>

    <div class="col-12">
        <div class="card mb-4">
            <div class="card-header pb-0 mb-4">
                <h6 class="mb-1">project</h6>
                <button class="btn btn-sm btn-primary text-sm" data-bs-toggle="modal" data-bs-target="#createProjectModal">Tambah Project</button>
            </div>
            <div class="row">
                @include('layouts.project.index')
            </div>
        </div>
    </div>
</x-app-layout>

