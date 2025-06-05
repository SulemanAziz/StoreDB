function changeQuantity(amount) {
    var quantityInput = document.getElementById('quantity');
    var currentQuantity = parseInt(quantityInput.value);
    var newQuantity = currentQuantity + amount;
    if (newQuantity < 1) {
        newQuantity = 1;
    }
    quantityInput.value = newQuantity;
}

function selectProduct(productId, imgElement) {
    // Unselect all images first
    var images = document.querySelectorAll('.product img');

    images.forEach(
        function(img) {
        img.classList.remove('selected');
    }
    );

    imgElement.classList.add('selected');

    // Check the corresponding radio button
    document.getElementById(productId).checked = true;
}

function Deselect(){
    var images = document.querySelectorAll('.product img');
    images.forEach(
        function(img) {
        img.classList.remove('selected');
    }
    );
}