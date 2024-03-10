<x-userlayout>
<div class="row">
    <div class="col-lg-8 offset-lg-2">
        <form class="form-wrapper">
            <input type="text" class="form-control" placeholder="Post Title"><br />
            <input type="file" /> Post Image Here <br />
            <textarea name="" cols="30" rows="10" onchange="setContent(this.value[this.value.length-1])" id="paras"></textarea>
            <button type="button" onclick="addPara()">Add a paragraph</button>
            <button type="button" onclick="addList()">Add List</button>
            <input type="radio" class="list" checked name="listtype" value="o">Numbered List
            <input type="radio" class="list" name="listtype" value="u">Bulleted List
            {{-- <button type="submit" class="btn btn-primary">Send <i class="fa fa-envelope-open-o"></i></button> --}}
        </form>
    </div>
    <div id="content">

    </div>
</div>
</x-userlayout>