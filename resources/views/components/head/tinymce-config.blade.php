<script src="https://cdn.tiny.cloud/1/g2yfuoitsd8gqkbv48dna7yac8jim3ljxzhpgvfcatxy4vnq/tinymce/7/tinymce.min.js" referrerpolicy="origin"></script>
<script>
  tinymce.init({
    selector: 'textarea#myeditorinstance', // Replace this CSS selector to match the placeholder element for TinyMCE
    plugins:"lists advlist",
    plugins: 'preview importcss searchreplace autolink autosave save directionality code visualblocks visualchars fullscreen image link media codesample table charmap pagebreak nonbreaking anchor insertdatetime advlist lists wordcount help charmap quickbars emoticons accordion',
    menubar: 'file edit view insert format tools table help',
    toolbar: "undo redo | accordion accordionremove | blocks fontfamily fontsize | bold italic underline strikethrough | align numlist bullist | link image | table media | lineheight outdent indent| forecolor backcolor removeformat | charmap emoticons | code fullscreen preview | save print | pagebreak anchor codesample | ltr rtl",
    toolbar_mode: 'sliding',
    contextmenu: 'link image table',
    skin: 'oxide-dark' ,
    content_css:  'dark' ,

    // image related
    image_title: true,
    automatic_uploads: true,
    images_upload_url: '/admin/upload',
    file_picker_types:"image",
    file_picker_callback: (cb,value,meta) =>{
      const input = document.createElement('input');
      input.setAttribute('type', 'file');
      input.setAttribute('accept', 'image/*');
      input.addEventListener("change",(e)=>{
        const file = e.target.files[0];
        const reader = new FileReader();
        reader.addEventListener("load",()=>{
          const id = 'blobid' + (new Date()).getTime();
          const blobCache =  tinymce.activeEditor.editorUpload.blobCache;
          const base64 = reader.result.split(',')[1];
          const blobInfo = blobCache.create(id, file, base64);
          blobCache.add(blobInfo);
          /* call the callback and populate the Title field with the file name */
          cb(blobInfo.blobUri(), { title: file.name });
        })
        reader.readAsDataURL(file);
      });
      input.click();
    }
  });
</script>