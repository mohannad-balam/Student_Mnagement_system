<div class="container justify-content-center">
    <div class="list-group">
        <a href="#" class="list-group-item list-group-item-action active">
            CNE : {{ $student->cne }}
        </a>
        <br>
        <a href="#" class="list-group-item list-group-item-action">First Name : {{ $student->first_name }}</a><br>
        <a href="#" class="list-group-item list-group-item-action">Last Name : {{ $student->last_name }}</a><br>
        <a href="#" class="list-group-item list-group-item-action">Age : {{ $student->age }}</a><br>
        <a href="#" class="list-group-item list-group-item-action">Speciality{{ $student->speciality }}</a>
    </div>
</div>
