<?=$this->include('template/header'); ?>

<?php if($artikel): foreach($artikel as $row): ?>
    <article xlass="entry">
        <h2<a href="<?= base_url('/artikel/' . $row['slug']);?>"><?=$roe['jududl']; ?></a>
</h2>
<img src="<?= base_url('/gambar/' . $row['gambar']);?>" alt="<?=$roe['judul'];?>">
<p><?= substr($row['isi'], 0, 200); ?></p>
    </article>
    <hr class="divider" />
    <?php endforeach; else; ?>
    <article class="entry">
        <h2>Belum ada data.</h2>
    </article>
    <?php endif; ?>

<?$this->include('template/footer'); ?>