<?php
/**
 * lưu giỏ hàng vào $_SESSION['cart'] có dạng
 * $_SESSION['cart'] = array(
 *     1 => array(
 *         'pk_product_id' => 1,
 *         'c_name' => 'Nokia 525',
 *         'c_img' => 'nokia-525.jpg',
 *         'number' => '3',
 *         'c_price' => '3500000'
 *     ),
 *     7 => array(
 *         'pk_product_id' => 7,
 *         'c_name' => 'IPhone 4',
 *         'c_img' => 'iphone-4.jpg',
 *         'number' => '1',
 *         'c_price' => '4000000'
 *     )
 * );
 */

//khởi tạo giỏ hàng
if(!isset($_SESSION['cart'])) $_SESSION['cart'] = array();
/*function get_a_record($pk_product_id){
    global $link;
    $result = mysqli_query($link,"select * from tbl_product where pk_product_id = $pk_product_id");
    return mysqli_fetch_array($result);
}*/
function cart_add($product,$pk_product_id){
    if(isset($_SESSION['cart'][$pk_product_id])){
        //nếu đã có sp trong giỏ hàng thì số lượng lên 1
        $_SESSION['cart'][$pk_product_id]['number']++;
    } else {
        //lấy thông tin sản phẩm từ CSDL và lưu vào giỏ hàng
     //   $product = get_a_record($pk_product_id);
        
        $_SESSION['cart'][$pk_product_id] = array(
            'pk_product_id' => $pk_product_id,
            'c_name' => $product['c_name'],
            'c_img' => $product['c_img'],
            'number' => 1,
            'c_price' => $product['c_price']
        );
    }
}
/**
 * Cập nhật số lượng sản phẩm
 * @param int
 * @param int
 */
function cart_update($pk_product_id, $number){
    if($number==0){
        //xóa sp ra khỏi giỏ hàng
        unset($_SESSION['cart'][$pk_product_id]);
    } else {
        $_SESSION['cart'][$pk_product_id]['number'] = $number;
    }
}
/**
 * Xóa sản phẩm ra khỏi giỏ hàng
 * @param int
 */
function cart_delete($pk_product_id){
    unset($_SESSION['cart'][$pk_product_id]);
}
/**
 * Tổng giá trị giỏ hàng
 */
function cart_total(){
    $total = 0;
    foreach($_SESSION['cart'] as $product){
        $total += $product['c_price'] * $product['number'];
    }
    return $total;
}
/**
 * Số sản phẩm có trong giỏ hàng
 */
function cart_number(){
    $number = 0;
    foreach($_SESSION['cart'] as $product){
        $number += $product['number'];
    }
    return $number;
}
/**
 * Danh sách sản phẩm trong giỏ hàng
 */
function cart_list(){
    return $_SESSION['cart'];
}
/**
 * Xóa giỏ hàng
 */
function cart_destroy(){
    $_SESSION['cart'] = array();
}