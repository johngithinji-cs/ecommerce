<div class="main">
    <div class="content">
        <div class="content_top">
            <div class="heading">
                <h3>Shop Page</h3>
            </div>
            <div class="clear"></div>
        </div>

        <?php
        $arr_chunk_product = array_chunk($get_all_product, 4);

        foreach ($arr_chunk_product as $chunk_products) {
            ?>
            <table class="table table-dashed">
            <div class="section group">
            <tr><th></th><th>iMage</th><th>product</th><th>company</th></tr>
                <?php foreach ($chunk_products as $single_products) { ?>
                    <div class="grid_1_of_4 images_1_of_4">
                    <tr class="ccat<?php echo $single_products->pId;?>">
                    <td>
					<?php echo $single_products->pId?>
				</td><td>
                        <a href="<?php echo base_url('home/single/'.$single_products->pId);?>"><img style="width:250px;height:250px" src="<?php echo base_url('assets/images/products/'.$single_products->pDp)?>" alt="" /></a>
                </td>
                        <td><h2><?php echo $single_products->pName ?></h2></td>
                        <td><p><?php echo ($single_products->pCompany) ?></p></td>
                        <td><div class="button"><span><a href="<?php echo base_url('home/single/'.$single_products->pId);?>" class="details">Details</a></span></div></td>
                        </tr>
                    </div>
                    <?php
                }
                ?>

            </div>
            </table>
            <?php
        }
        ?>
        <div class="content_pagi">
            <div class="pagination">
                <?=$this->pagination->create_links();?>
            </div>
            <div class="clear"></div>
        </div>

    </div>
</div>
<style>
    .content_pagi{padding:20px;border: 1px solid #EBE8E8;border-radius: 3px;}
    .pagination{}
    .pagination ul{}
    .pagination ul li{float: left}
    .pagination ul li a{color: #000;padding: 7px 12px;border: 1px solid #ddd;font-size: 18px;}
    .pagination ul li a:hover{background:#ddd;}
    .pagiactive a{background:#ddd;}

</style>