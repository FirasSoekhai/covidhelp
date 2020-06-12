<?php $this->layout('website');?>

<?php $this->start('sidebar')?>
<div class="top-10">
    <h3>Categorieën</h3>
    <ul>
    <?php foreach(getCategories() as $key=>$value): ?>
        <li>
            <a href="<?php echo url('home.category', ['id' => $value['id']]) ?>"><?php echo $value['name'] ?> (<?php echo $value['productAmount'] ?>)</a>
        </li>
    <?php endforeach; ?>
    </ul>
</div>
<?php $this->stop()?>

<div class="d-flex flex-wrap">
<?php foreach($products as $key=>$value): ?>
    <div class="d-block">
        <img style="width: 70%;" src="<?php echo $value['product_foto']; ?>">
        <div>
        <p><?php echo $value['name']; ?></p>
            <div class="d-flex justify-content-between">
                <p><?php echo $value['price']; ?></p>
                <a href="#" class="btn btn-primary">Voeg toe aan winkelwagen</a>
            </div>
        </div>
    </div>
    <?php endforeach; ?>
</div>
