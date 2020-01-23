

<div class="defaultcontainer">
        <h2 class="title">Upload new Blogpost</h1>
            <div class="uploadcontainer">


    <div class="formcontainer">
                <form class="form" id="form"  action="{{ action('AdminController@uploadImgs') }}" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="type"/>
                    @csrf
                            <br>
                            <div class="form-label-group">
                                <label for="title">Title</label><br>
                                <input type="text" name="title" id="title">
                            </div>
                            <br>
                            <div class="form-label-group">
                                <label for="text">Text</label><br>
                                <input type="text" style="height:100px;" name="text" id="text">
                            </div>
                            <div class="form-label-group">
                                    <label for="phrase">Phrase</label><br>
                                    <input type="text" name="phrase" id="phrase">
                                </div>
                            <div class="form-label-group">
                                    <label for="images">Hero</label><br>
                                    <input type="file" name="images[]" id="hero">
                            </div>
                            <br>
                            <div class="form-label-group">
                                    <label for="images">Image Two</label><br>
                                    <input type="file" name="images[]" id="imagetwo">
                            </div>
                            <br>
                            <div class="form-label-group">
                                    <label for="images">Image Three</label><br>
                                    <input type="file" name="images[]" id="imagethree">
                            </div>
                            <br>
                            <div class="form-label-group">
                                    <label for="images">Image Four</label><br>
                                    <input type="file" name="images[]" id="imagefour">
                            </div>
                    <br>
                    <div class="form-label-group"><br>
                        <button type="submit">Done</button>
                    </div>
                </form>

                <a href="">Zurück</a>
                <a href="">Edit</a>
                <form action="" method="post">
                    @csrf @method('delete')
                    <button type="submit">Delete</button>
                </form>
        </div>
</div>
</div>

