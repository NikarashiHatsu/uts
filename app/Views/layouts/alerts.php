<?php if (session('validation_errors')): ?>
    <div class="bg-red-500 text-red-50 rounded shadow-lg shadow-red-500/50 px-4 py-3 mb-4">
        <?php foreach(session('validation_errors') as $error): ?>
            <p>
                <?= $error ?>
            </p>
        <?php endforeach; ?>
    </div>
<?php endif; ?>

<?php if(session()->has('success')): ?>
<div class="bg-green-500 text-green-50 rounded shadow-lg shadow-green-500/50 px-4 py-3 mb-4">
    <?= session()->get('success'); ?>
</div>
<?php endif; ?>

<?php if(session()->has('error')): ?>
<div class="bg-red-500 text-red-50 rounded shadow-lg shadow-red-500/50 px-4 py-3 mb-4">
    <?= session()->get('error'); ?>
</div>
<?php endif; ?>