<?php
$file = '';
if($this->plugin){
    $file = ROOT . DS . 'plugins'.DS.$this->plugin.DS. 'templates' . DS . 'Element' . DS . 'aside' . DS . 'form.ctp';
}
if(!file_exists($file)){
    $file = ROOT . DS . 'templates' . DS . 'Element' . DS . 'aside' . DS . 'form.ctp';
}

if (file_exists($file)) {
    ob_start();
    include_once $file;
    echo ob_get_clean();
} else {
?>
<form action="#" method="get" class="sidebar-form">
    <div class="input-group">
        <input type="text" name="q" class="form-control" placeholder="<?= __d('gentelella','Search')?>...">
        <span class="input-group-btn">
            <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
            </button>
        </span>
    </div>
</form>
<?php } ?>
