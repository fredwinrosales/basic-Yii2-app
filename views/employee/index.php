<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>Employee example!</h1>
    </div>

    <table>
    <?php foreach ($data as $post): ?>
        <tr>
            <td><?php echo $post->username; ?></td>
            <td><?php echo $post->email; ?></td>
        </tr>
    <?php endforeach; ?>
    </table>

</div>
