<div class="container-fluid pt-4 px-4">
<div class="bg-secondary rounded h-100 p-4">
  <form method="post" action="/admin/upload" enctype="multipart/form-data">
    @csrf
      <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Title</label>
          <input type="text" class="form-control" id=""
              aria-describedby="titleHelp">
          <div id="titleHelp" class="form-text">Your post needs a title
          </div>
      </div>
      <div class="mb-3">
        <label for="formFile" class="form-label">Banner Image</label>
        <input class="form-control bg-dark" name="image" type="file" id="formFile">
    </div>
      <div class="mb-3 form-check">
        <textarea id="myeditorinstance" name="content">Hello, World!</textarea>
      </div>
      <button type="submit" class="btn btn-primary">Sign in</button>
  </form>
</div>
</div>