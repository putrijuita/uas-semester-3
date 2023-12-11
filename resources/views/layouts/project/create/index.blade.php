<!-- Modal -->
<div class="modal fade" id="createProjectModal" tabindex="-1" aria-labelledby="createProjectModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" >Tambah Project</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Add a form for creating a new project -->
                <form method="POST" action="{{ route('projects.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="projectName" class="form-label">Nama Project</label>
                        <input type="text" class="form-control border" id="projectName" name="name" required>
                    </div>
                    <div class="mb-3">
                        <label for="projectDescription" class="form-label">Deskripsi</label>
                        <textarea class="form-control border" id="projectDescription" name="description" required></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="projectImage" class="form-label">Gambar</label>
                        <input type="file" class="form-control border" id="projectImage" name="image" accept="image/*">
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</div>
