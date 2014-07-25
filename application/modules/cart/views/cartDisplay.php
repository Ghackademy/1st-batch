<html>
    <head></head>
    <body>
        <?php if($cart = $this->cart->contents()):?>        
        <div id="cart">
            
            <table>
                <caption>shopping cart</caption>
                <tr>
                    <th>item name</th>
                    <th>price</th>
                    <th>quantity</th>
                    <th></th>
                </tr>
                <tr>
                    <?php foreach($cart as $item): ?>
                    <td>
                        <?php echo $item['name']; ?>
                    </td>
                    <td>
                        Rs.<?php echo $item['subtotal']; ?>
                    </td>
                    <td class="remove">
                        <?php echo anchor('cart/remove/'.$item['rowid'],'deleteitem'); ?>
                    </td>
                </tr>
                <?php endforeach; ?>
                <tr class="total">
                    <td colspan="2">Total</td>
                    <td><?php echo $this->cart->total(); ?></td>
                </tr>
            </table>
            
        </div>
        <?php endif;?>
    </body>
</html>