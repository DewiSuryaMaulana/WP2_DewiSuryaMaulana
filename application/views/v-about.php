<section>
    <h1><?php echo $judul ?></h1>
    <h4>Nama</h4>
    <ul type="disc">
        <li>Nama Depan : <?= $fnama ?></li>
        <li>Nama Belakang : <?= $enama ?></li>
    </ul> <br>
    <h4>Alamat</h4>
    <ul type="none">
        <li><?= $alamat ?></li>
    </ul>
    <h4>Tempat Lahir</h4>
    <ul type="none">
        <li><?= $t_lahir ?></li>
    </ul>
    <h4>Olah Raga Favorit</h4>
    <ul type="square">
        <?php foreach ($olahraga as $ol)
 { ?>
        <li><?= $ol ?></li>
        <?php } ?>
    </ul>
</section>