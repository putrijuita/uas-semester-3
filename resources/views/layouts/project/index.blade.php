@foreach ($projects as $project)
    <div class="col-xl-3 col-md-6 mb-xl-0 mb-4">
        <div class="card card-blog card-plain">
            <div class="card-header p-0 mt-n4 mx-3" data-bs-toggle="modal" data-bs-target="#updateProjectModal">
                <a class="d-block shadow-xl border-radius-xl">
                    <img src="{{ asset( $project->image ) }}" alt="img-blur-shadow" class="img-fluid shadow border-radius-xl">
                </a>
            </div>
            <div class="card-body p-3">
                <h5>
                    {{ $project->name }}
                </h5>
                <p class="mb-4 text-sm">
                    {{ $project->description }}
                </p>
            </div>
        </div>
    </div>
    @include('layouts.project.update.index')
    @include('layouts.project.delete.index')
@endforeach
    @include('layouts.project.create.index')
