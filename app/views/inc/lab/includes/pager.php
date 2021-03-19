<nav aria-label="Page navigation">
  <ul class="pagination pagination-lg pagination-primary" style="background:orange;">
    <li>
      <a href="wp-blog.php" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
      </a>
    </li>
    <?php
      echo $this->pager;
     ?>
    <li>
      <a href="wp-blog.php?page=<?php echo $this->numrows - 10; ?>" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
      </a>
    </li>
  </ul>
</nav>
