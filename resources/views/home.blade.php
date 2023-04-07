<h1>ALCLOYD BALANE</h1>

@isset($flash_message)
        {{ $flash_message }}
    @endisset

    <table>
    <thead><th>First name</th><th>Last name</th><th>Contact</th><th>Action</th>
    </thead>
    <tbody>
        @foreach ($blogs as $blog)
            <td>{{ $blog->FirstName }}</td>
            <td>{{ $blog->LastName }}</td>
            <td>{{ $blog->ContactNo }}</td>
            <td> <a href="{{ route('blog.edit', ['blog'=> $blog]) }}">Edit </a> </td>
        @endforeach
    </tbody>    
    </table> 