<form action="<?=$base_url?>/student_register" method="POST">
    Nama : <input type="text" name="name" value="<?=!empty($post['name']) ? $post['name'] : '' ?>">
    <?php
    if (!empty($error['name'])) : 
        foreach ($error['name'] as $val) :
    ?>
        <span style="color:red"><?=$val?></span>&nbsp;
    <?php
        endforeach;
    endif;
    ?>
    <br>
    Email : <input type="text" name="email" value="<?=!empty($post['email']) ? $post['email'] : '' ?>">
    <?php
    if (!empty($error['email'])) : 
        foreach ($error['email'] as $val) :
    ?>
        <span style="color:red"><?=$val?></span>&nbsp;
    <?php
        endforeach;
    endif;
    ?>
    <br>
    <button>Submit</button>
</form>
