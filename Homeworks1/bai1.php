
<!-- Tạo một mảng chứa thông tin về các sản phẩm trong một cửa hàng (tên sản phẩm, giá, số lượng).
 Cho phép người dùng thực hiện các thao tác sau:
Thêm mới sản phẩm.
Sửa thông tin sản phẩm (tên, giá, số lượng).
Xóa sản phẩm.
Tìm kiếm sản phẩm theo tên.
Sắp xếp sản phẩm theo giá (tăng dần/giảm dần).
In danh sách sản phẩm. -->

<?php

// Khởi tạo mảng chứa thông tin về các sản phẩm
$products = [
    ["name" => "Sản phẩm A", "price" => 100, "quantity" => 10],
    ["name" => "Sản phẩm B", "price" => 200, "quantity" => 5],
    // ...Thêm các sản phẩm khác vào mảng
];

// Thêm mới sản phẩm
function addProduct($name, $price, $quantity) {
    global $products;
    array_push($products, ["name" => $name, "price" => $price, "quantity" => $quantity]);
}

// Sửa thông tin sản phẩm
function editProduct($index, $name, $price, $quantity) {
    global $products;
    $products[$index]["name"] = $name;
    $products[$index]["price"] = $price;
    $products[$index]["quantity"] = $quantity;
}

// Xóa sản phẩm
function deleteProduct($index) {
    global $products;
    array_splice($products, $index, 1);
}

// Tìm kiếm sản phẩm theo tên
function searchProductByName($name) {
    global $products;
    $result = array_filter($products, function ($product) use ($name) {
        return stripos($product["name"], $name) !== false;
    });
    return array_values($result);
}

// Sắp xếp sản phẩm theo giá (tăng dần)
function sortProductsByPriceAsc() {
    global $products;
    usort($products, function ($a, $b) {
        return $a["price"] - $b["price"];
    });
}

// Sắp xếp sản phẩm theo giá (giảm dần)
function sortProductsByPriceDesc() {
    global $products;
    usort($products, function ($a, $b) {
        return $b["price"] - $a["price"];
    });
}

// In danh sách sản phẩm
function printProducts() {
    global $products;
    foreach ($products as $product) {
        echo "Tên: " . $product["name"] . ", Giá: " . $product["price"] . ", Số lượng: " . $product["quantity"] . "\n";
    }
}
?>