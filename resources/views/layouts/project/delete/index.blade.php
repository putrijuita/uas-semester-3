<!-- Delete Modal -->
<div class="modal fade" id="deleteProjectModal" tabindex="-1" aria-labelledby="deleteProjectModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" >Hapus Project</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Add a form for deleting a project -->
                <form method="POST" action="{{ route('projects.destroy', ['project' => $project->id]) }}">
                    @csrf
                    @method('DELETE') <!-- Use the DELETE method for deleting -->

                    <p>Apakah Anda yakin ingin menghapus proyek "{{ $project->name }}"?</p>

                    <button type="submit" class="btn btn-danger">Hapus</button>
                </form>
            </div>
        </div>
    </div>
</div>
