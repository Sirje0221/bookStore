<?php 
    $title = "Cart"; //Title for the page.  Used in the <title> tag
    include('html-begin.php');
?>
<main>
 <div>
    <h4>Shopping Cart</h4> 
</div>

<form action="" method="post" id="form1">
<h4>Shopping Cart</h4>

<div class="container_cart">
        <div class="child_cart">
            <img src="../pildid/">
            <div class="text_img">
                <p>PRODUCT NAME</p>
                <p>Lorem ipsum dolor sit amet, consectetur</p>
                <p>$300</p>
                <input type="number" id="quantity" name="quantity" min="0" max="100" step="1" value="1">
            </div>
        </div>

        <div class="child_cart">
            <img src="../pildid/">
            <div class="text_img">
                <p>PRODUCT NAME</p>
                <p>Lorem ipsum dolor sit amet, consectetur</p>
                <p>$300</p>
                <input type="number" id="quantity" name="quantity" min="0" max="100" step="1" value="1">
            </div>
        </div>
    </div>

    <div class="container_summary">
        <h4>Summary</h4>
        <div>
            <p>BOOK NAME</p>
            <p>$300</p>
        </div>
        <div>
            <p>BOOK NAME</p>
            <p>$300</p>
        </div>
        <div>
            <p>BOOK NAME</p>
            <p>$300</p>
        </div>

        <p>TOTAL</p>
        <p>$900</p>
    </div>
    <input class="button"  type="submit" name="sub" value="Submit" />
    <input class="button"  type="reset" name="reset" value="Cancel" />


</form >

<?php
    include('html-end.php');
?>
