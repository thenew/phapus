<h1>Posts</h1>
<table class="le-tableau pha-table">
  <thead>
    <tr>
      <th>ID</th>
      <th>Title</th>
      <th>Content</th>
    </tr>
  </thead>
  <tbody>
    <?php
    foreach ($this->posts as $post):
      echo '<tr>';
        echo '<td>'.$post->id.'</td>';
        echo '<td><a href="?action=ShowPost&id='.$post->id.'">'.$post->title.'</a></td>';
        echo '<td>'.$post->content.'</td>';
      echo '</tr>';
    endforeach;
    ?>    
  </tbody>
</table>

<a class="le-button" href="?action=NewPost">Add a post</a>