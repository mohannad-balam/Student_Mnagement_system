
<div class="card mb-3">
    <img src="https://www.neuf.tv/wp-content/uploads/2020/09/Best-Online-Learning-Apps-in-India.png" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">All Students</h5>
      <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">CNE</th>
                <th scope="col">First Name</th>
                <th scope="col">Last Name</th>
                <th scope="col">Age</th>
                <th scope="col">Speciality</th>
                <th scope="col">Operations</th>
            </tr>

        </thead>
        <tbody>
            @foreach ($students as $student)
                <tr>
                    <td>{{ $student->cne }}</td>
                    <td>{{ $student->first_name }}</td>
                    <td>{{ $student->last_name }}</td>
                    <td>{{ $student->age }}</td>
                    <td>{{ $student->speciality }}</td>
                    <td>
                        <a href="{{ route('showRoute',$student->id) }}" class="btn btn-sm btn-info">show</a>
                        <a href="{{ route('editRoute', $student->id) }}" class="btn btn-sm btn-warning">edit</a>
                        <a href="{{ route('deleteRoute', $student->id) }}" class="btn btn-sm btn-danger">delete</a>
                    </td>
                </tr>
            @endforeach

        </tbody>
    </table>
    </div>
  </div>
