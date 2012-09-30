<h1>Add a post</h1>

<form class="cssn_form block_form pha-form" action="?action=CreatePost" method="POST">
    <fieldset>
        <div class="box">
            <label for="title">Title</label>
            <input type="text" name="title" id="title" required />
        </div>
        <div class="box">
            <label for="content">Content</label>
            <textarea name="content" id="content" required></textarea>
        </div>
        <div class="box">
            <button class="le-button">Add</button>
        </div>
    </fieldset>
</form>