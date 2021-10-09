<div class="page-header">
    <div class="row">
        <div class="col-md-12 col-sm-12">
            <div class="title">
                <h4><?php echo ucfirst($this->uri->segment(1)) . "  " . ucfirst($this->uri->segment(2)) ?></h4>
            </div>
            <nav aria-label="breadcrumb" role="navigation">
                <ol class="breadcrumb">
                    <?php foreach ($this->uri->segments as $segment) : ?>
                        <?php
                        $url = substr($this->uri->uri_string, 0, strpos($this->uri->uri_string, $segment)) . $segment;
                        $is_active =  $url == $this->uri->uri_string;
                        ?>

                        <li class="breadcrumb-item <?php echo $is_active ? 'active' : '' ?>">
                            <?php if ($is_active) : ?>
                                <?php echo ucfirst($segment) ?>
                            <?php else : ?>
                                <a href="<?php echo site_url($url) ?>"><?php echo ucfirst($segment) ?></a>
                            <?php endif; ?>
                        </li>
                    <?php endforeach; ?>
                </ol>
            </nav>
        </div>
    </div>
</div>