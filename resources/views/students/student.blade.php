<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <title>Students System</title>
</head>

<body>

    @include('students.navbar')
    @if (Session::has('success'))
        <br><br>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Success : </strong>This Process's been done successfully!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

    @if (Session::has('deleted'))
        <br><br>
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>Deleted : </strong>This Student's been deleted successfully!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

    <div class="row header-container justify-content-center">
        <div class="header">Student Management System</div>
    </div>
    @if ($layout == 'index')
        <div class="container-fluid mt-4">
            <div class="container-fluid mt-4">
                <div class="row justify-content-center">
                    <section class="col-md-7">
                        @include('students.studentList')
                    </section>
                </div>
            </div>

        </div>
    @elseif ($layout == 'create')
        <div class="container-fluid mt-4">
            <div class="row">
                <section class="col-md-7">
                    @include('students.studentList')
                </section>
                <scetion class="col-md-5">

                    <div class="card mb-3">
                        <img src="https://images.squarespace-cdn.com/content/v1/5475f6eae4b0821160f6ac3e/1629110972324-TLY7ALKBV9UDRE5TOOZJ/Easy+Hacks+to+Increase+Student+Engagement+in+Class.jpg"
                            class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Enter The Student Information</h5>
                            <form action="{{ route('storeRoute') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label>CNE</label>
                                    <input name="cne" type="text" class="form-control" placeholder="Enter CNE">
                                    @error('cne')
                                        <small class="form-text text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>First Name</label>
                                    <input name="first_name" type="text" class="form-control"
                                        placeholder="Enter The Student's First Name">
                                    @error('first_name')
                                        <small class="form-text text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Last Name</label>
                                    <input name="last_name" type="text" class="form-control"
                                        placeholder="Enter The Student's Last Name">
                                    @error('last_name')
                                        <small class="form-text text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Age</label>
                                    <input name="age" type="text" class="form-control"
                                        placeholder="Enter The Student's Age">
                                    @error('age')
                                        <small class="form-text text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Speciality</label>
                                    <input name="speciality" type="text" class="form-control"
                                        placeholder="Enter The Student's Speciality">
                                    @error('speciality')
                                        <small class="form-text text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <input type="submit" class="btn btn-info" value="Save">
                            </form>
                        </div>
                    </div>

                </scetion>
            </div>
        </div>
    @elseif ($layout == 'show')
        <div class="container-fluid mt-4">
            <div class="row">
                <section class="col-md-7">
                    @include('students.studentList')
                </section>
                <section class="col-md-5">
                    @include('students.one_student')
                </section>
            </div>
        </div>
    @elseif ($layout == 'edit')
        <div class="container-fluid mt-4">
            <div class="row">
                <section class="col-md-7">
                    @include('students.studentList')
                </section>
                <section class="col-md-5">
                    <div class="card mb-3">
                        <img src="https://images.squarespace-cdn.com/content/v1/5475f6eae4b0821160f6ac3e/1629110972324-TLY7ALKBV9UDRE5TOOZJ/Easy+Hacks+to+Increase+Student+Engagement+in+Class.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Update Student Information</h5>
                            <form action="{{ route('updateRoute', $student->id) }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label>CNE</label>
                                    <input value="{{ $student->cne }}" name="cne" type="text" class="form-control"
                                        placeholder="Enter CNE">
                                    @error('cne')
                                        <small class="form-text text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>First Name</label>
                                    <input value="{{ $student->first_name }}" name="first_name" type="text"
                                        class="form-control" placeholder="Enter The Student's First Name">
                                    @error('first_name')
                                        <small class="form-text text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Last Name</label>
                                    <input value="{{ $student->last_name }}" name="last_name" type="text"
                                        class="form-control" placeholder="Enter The Student's Last Name">
                                    @error('last_name')
                                        <small class="form-text text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Age</label>
                                    <input value="{{ $student->age }}" name="age" type="text" class="form-control"
                                        placeholder="Enter The Student's Age">
                                    @error('age')
                                        <small class="form-text text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Speciality</label>
                                    <input value="{{ $student->speciality }}" name="speciality" type="text"
                                        class="form-control" placeholder="Enter The Student's Speciality">
                                    @error('speciality')
                                        <small class="form-text text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <input type="submit" class="btn btn-info" value="Save">
                            </form>
                        </div>
                    </div>

                </section>
            </div>
        </div>
    @endif





    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
</body>

<footer>
    <div class="row header-container justify-content-center">
        <div class="header">Student Management System All Credits to @mohannad_balam 2021</div>
    </div>
</footer>

<script>
    $(document).ready(function(e) {
        e.preventDefault()
        $('li:first').addClass('active');
        $('li').click(function(e) {
            e.preventDefault()
            $("li.active").removeClass("active");
            $(this).addClass('active');
        });
    });
</script>

</html>
