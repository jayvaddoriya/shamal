<form method="get" class="blog-filter-widget">
    <div class="row">
        <div class="col-lg-4">
            <!-- Search -->
            <div class="bf-item">
                <input type="text" name="s" placeholder="Search…" value="<?php echo esc_attr($search_term); ?>" class="form-control">
            </div> 
        </div>
        <div class="col-lg-3">
            <!-- Category -->
            <div class="bf-item">
                <select name="category" class="form-control">
                    <option value="">All Categories</option>
                    <?php
                    $cats = get_categories();
                    foreach ($cats as $cat) {
                        echo '<option value="' . $cat->slug . '" ' . selected($selected_cat, $cat->slug, false) . '>' . $cat->name . '</option>';
                    }
                    ?>
                </select>
            </div> 
        </div>
        <div class="col-lg-3">
            <!-- Tags -->
            <div class="bf-item">
                <select name="tag" class="form-control">
                    <option value="">All Tags</option>
                    <?php
                    $tags = get_tags();
                    foreach ($tags as $tag) {
                        echo '<option value="' . $tag->slug . '" ' . selected($selected_tag, $tag->slug, false) . '>' . $tag->name . '</option>';
                    }
                    ?>
                </select>
            </div>
        </div>
        <div class="col-lg-2">
            <button type="submit" class="btn btn-primary w-100">Apply Filter</button>
        </div>
    </div>

</form>