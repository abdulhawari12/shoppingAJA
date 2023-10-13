<?= $this->extend('Wallet/layout/layout') ?>
<?= $this->section('main') ?>
<section class="box-form-saldo">
    <form action='/addSaldo/<?= user_id() ?>' method='post' class="box-saldo">
        <?= csrf_field() ?>
        <section class="box-form-group">
            <input type="number" name="saldo" id="input7" autocomplete="off" placeholder=" " />
            <label for="input7">Saldo</label>
        </section>
        <button type="submit">Tambah Saldo</button>
    </form>
</section>
<?= $this->endsection() ?>