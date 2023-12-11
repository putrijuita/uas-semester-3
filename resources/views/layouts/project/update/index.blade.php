<!-- Modal -->
<div class="modal fade" id="updateProjectModal" tabindex="-1" aria-labelledby="updateProjectModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" >Update Project</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Add a form for updating a project -->
                <form method="POST" action="{{ route('projects.update', ['project' => $project->id]) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT') <!-- Use the PUT method for updating -->

                    <div class="mb-3">
                        <label for="updateProjectName" class="form-label">Nama Project</label>
                        <input type="text" class="form-control border" id="updateProjectName" name="name" value="{{ $project->name }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="updateProjectDescription" class="form-label">Deskripsi</label>
                        <textarea class="form-control border" id="updateProjectDescription" name="description" required>{{ $project->description }}</textarea>
                    </div>
                    <div class="mb-3">
                        <label for="updateProjectImage" class="form-label">Gambar</label>
                        <input type="file" class="form-control border" id="updateProjectImage" name="image" accept="image/*">
                    </div>
                    <button type="submit" class="btn btn-primary">Update Project</button>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#deleteProjectModal">Hapus Project</button>
                </form>
            </div>
        </div>
    </div>
</div>
