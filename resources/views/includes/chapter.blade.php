<div class="col-md-6">
    <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Add a chapter</p>
    <form class="mx-1 mx-md-4" method="POST" action="{{ route('create_chapter') }}">
        @csrf
        <div class="col-md-12">
            <div class="d-flex flex-row align-items-center mb-4">
                <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                <div class="form-outline flex-fill mb-0">
                    <label class="form-label" for="answer">Select a subject</label>
                    <select required id="answer" name="subject" class="form-select">
                        <option disabled selected value="">Select a subject</option>
                        @foreach ($subjects as $subject)
                            <option value="{{ $subject->id }}">{{ $subject->subject_name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>
        <div class="d-flex flex-row align-items-center mb-4">
            <i class="fas fa-user fa-lg me-3 fa-fw"></i>
            <div class="form-outline flex-fill mb-0">
                <label class="form-label" for="questionInput">Chapter name</label>
                <input required autocomplete="off" type="text" id="questionInput" class="form-control"
                    name="chapter_name" />
            </div>
        </div>
        <div class="col-md-12">
            <div class="d-flex justify-content-start mx-4 mb-3 mb-lg-4">
                <button type="submit" class="btn btn-primary btn-lg">Save</button>
            </div>
        </div>
    </form>
</div>
