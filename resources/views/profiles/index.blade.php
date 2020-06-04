<x-main>
    <h1>Show All Users</h1>
    <div class="col-md-10 m-3">
        <a href="{{ route('profile_create') }}" class="btn btn-dark">Add new User</a>
    </div>
    <table class="table">
        <thead class="thead-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Username</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
        <tr>
            <th scope="row">{{ $user->id }}</th>
            <td>{{ $user->username }}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td>
                <div class="row">
                    <div class="mr-1">
                        <a href="/profiles/{{ $user->username }}/edit" class="btn btn-info btn-sm">Edit</a>
                    </div>
                    <div class="ml-1">
                        @if(auth()->user()->id != $user->id)
                            <form action="{{ $user->path('destroy') }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger btn-sm">Delete</button>
                            </form>
                        @endif
                    </div>
                </div>
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>
</x-main>
