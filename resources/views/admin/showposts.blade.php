<x-adminlayout>
    <h4 class="mb-4 text-center mt-4">All Posts Uploaded by you</h4>
     @if(session()->has('success'))
        <div id="alert" class="alert alert-success alert-dismissible fade show" style="position: fixed;bottom:20px; right:20px" role="alert">
            Post Updated Successfully
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    @if (session()->has('error'))
    <div id="alert" class="alert alert-danger alert-dismissible fade show" style="position: fixed;bottom:20px; right:20px" role="alert">
        Cannot Update your post
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
    <script>
        setTimeout(() => {
            $("#alert").fadeOut();
        }, 3000);
    </script>
    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">Creation Date</th>
                    <th scope="col">Last Updated On</th>
                    <th scope="col">Content</th>
                    <th scope="col" colspan="2">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                <tr>
                    <th scope="row">{{ $post->id }}</th>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->created_at }}</td>
                    <td>{{ $post->updated_at }}</td>
                    <td>{{ $post->content }}</td>
                    <td><a href="/admin/showeditpost/{{ $post->id }}" class="btn btn-info"> <i class="bi bi-pencil"></i> </a> </td>
                    <td><a href="/admin/deletepost/{{ $post->id }}" class="btn btn-primary"> <i class="bi bi-trash-fill "></i> </a> </td>
                    <td></td>
                </tr>
                @endforeach
                
            </tbody>
        </table>
    </div>
</x-adminlayout>