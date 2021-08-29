<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mocktest</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<section class="vh-100" style="background-color: #eee;">
    <div class="container h-100">
        <div class="row d-flex justify-content-center align-items-start h-100">
            <div class="col-lg-12 col-xl-11">
                <div class="card text-black" style="border-radius: 25px;">
                    <div class="card-body p-md-5">
                        <div class="row justify-content-center">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-6">
                                        <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Add a subject</p>
                                        <form class="mx-1 mx-md-4" method="POST" action="{{ route('create_subject') }}">
                                            @csrf
                                            <div class="d-flex flex-row align-items-center mb-4">
                                                <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                                                <div class="form-outline flex-fill mb-0">
                                                    <label class="form-label" for="questionInput">Subject name</label>
                                                    <input required autocomplete="off" type="text"
                                                           id="questionInput" class="form-control" name="subject_name" />
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="d-flex justify-content-start mx-4 mb-3 mb-lg-4">
                                                    <button type="submit" class="btn btn-primary btn-lg">Save</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="col-md-6">
                                        <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Add a chapter</p>
                                        <form class="mx-1 mx-md-4" method="POST" action="{{route('create_chapter')}}">
                                            @csrf
                                            <div class="col-md-12">
                                                <div class="d-flex flex-row align-items-center mb-4">
                                                    <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                                                    <div class="form-outline flex-fill mb-0">
                                                        <label class="form-label" for="answer">Select a subject</label>
                                                        <select required id="answer" name="subject" class="form-select">
                                                            <option disabled selected value="">Select a subject</option>
                                                            @foreach($subjects as $subject)
                                                                <option value="{{$subject->id}}">{{$subject->subject_name}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-flex flex-row align-items-center mb-4">
                                                <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                                                <div class="form-outline flex-fill mb-0">
                                                    <label class="form-label" for="questionInput">Chapter name</label>
                                                    <input required autocomplete="off" type="text" id="questionInput" class="form-control" name="chapter_name" />
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="d-flex justify-content-start mx-4 mb-3 mb-lg-4">
                                                    <button type="submit" class="btn btn-primary btn-lg">Save</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-10 col-lg-10 col-xl-10 order-2 order-lg-1">

                                <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Question entry</p>

                                <form class="mx-1 mx-md-4" method="POST" action="{{ route('save_question') }}">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="d-flex flex-row align-items-center mb-4">
                                                <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                                                <div class="form-outline flex-fill mb-0">
                                                    <label class="form-label" for="answer">Select subject</label>
                                                    <select required id="answer" name="subject_id" class="form-select">
                                                        <option disabled selected value="">Select a subject</option>
                                                        @foreach($subjects as $subject)
                                                            <option value="{{ $subject->id }}">{{ $subject->subject_name }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="d-flex flex-row align-items-center mb-4">
                                                <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                                                <div class="form-outline flex-fill mb-0">
                                                    <label class="form-label" for="answer">Select chapter</label>
                                                    <select required id="answer" name="chapter_id" class="form-select">
                                                        <option disabled selected value="">Select chapter</option>
                                                        @foreach($chapters as $chapter)
                                                            <option value="{{ $chapter->id }}">{{ $chapter->chapter_name }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex flex-row align-items-center mb-4">
                                        <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                                        <div class="form-outline flex-fill mb-0">
                                            <label class="form-label" for="questionInput">Question</label>
                                            <input required autocomplete="off" type="text" id="questionInput" class="form-control" name="question" />
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="d-flex flex-row align-items-center mb-4">
                                                <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                                                <div class="form-outline flex-fill mb-0">
                                                    <label class="form-label" for="optionA">Option A</label>
                                                    <input required autocomplete="off" type="text" id="optionA" class="form-control" name="options[]" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="d-flex flex-row align-items-center mb-4">
                                                <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                                                <div class="form-outline flex-fill mb-0">
                                                    <label class="form-label" for="optionB">Option B</label>
                                                    <input required autocomplete="off" type="text" id="optionB" class="form-control" name="options[]" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="d-flex flex-row align-items-center mb-4">
                                                <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                                                <div class="form-outline flex-fill mb-0">
                                                    <label class="form-label" for="optionC">Option C</label>
                                                    <input required autocomplete="off" type="text" id="optionC" class="form-control" name="options[]" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="d-flex flex-row align-items-center mb-4">
                                                <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                                                <div class="form-outline flex-fill mb-0">
                                                    <label class="form-label" for="optionD">Option D</label>
                                                    <input autocomplete="off" required type="text" id="optionD" class="form-control" name="options[]" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="d-flex flex-row align-items-center mb-4">
                                                <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                                                <div class="form-outline flex-fill mb-0">
                                                    <label class="form-label" for="answer">Correct answer</label>
                                                    <select required id="answer" name="answer" class="form-select">
                                                        <option disabled selected value="">Select correct answer</option>
                                                        <option value="0">A</option>
                                                        <option value="1">B</option>
                                                        <option value="2">C</option>
                                                        <option value="3">D</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="d-flex justify-content-end mx-4 mb-3 mb-lg-4">
                                                <button type="submit" class="btn btn-primary btn-lg">Save</button>
                                            </div>
                                        </div>
                                    </div>

                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
