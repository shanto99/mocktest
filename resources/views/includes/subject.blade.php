<div class="container">
    <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Add a subject</p>
    <form class="mx-1 mx-md-4" method="POST" action="{{ route('create_subject') }}" style="max-width: 300px">
        @csrf
        <div class="d-flex flex-row align-items-center mb-4">
            <i class="fas fa-user fa-lg me-3 fa-fw"></i>
            <div class="form-outline flex-fill mb-0">
                <label class="form-label" for="questionInput">Subject name</label>
                <input required autocomplete="off" type="text" id="questionInput" class="form-control"
                    name="subject_name" />
            </div>
        </div>
        <div class="col-md-12">
            <div class="d-flex justify-content-start mx-4 mb-3 mb-lg-4">
                <button type="submit" class="btn btn-primary btn-lg">Save</button>
            </div>
        </div>
    </form>
</div>
