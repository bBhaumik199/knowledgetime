<x-adminlayout>
    <h4 class="mb-4 text-center mt-4">All Posts Uploaded by you</h4>
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
                    <td><a href="" class="btn btn-primary"> <i class="bi bi-trash-fill "></i> </a> </td>
                    <td></td>
                </tr>
                @endforeach
                
            </tbody>
        </table>
    </div>
</x-adminlayout>