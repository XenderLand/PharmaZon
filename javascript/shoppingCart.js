let shoppingCart = [];

let cartIcon = document.querySelector('#bars');
let cart = document.querySelector('.cart');
let closeCart = document.querySelector('#close-cart');

cartIcon.onclick = () => {
    cart.classList.add("active");
};

closeCart.onclick = () => {
    cart.classList.remove("active");
};

 
if (document.readyState == "loading"){
    document.addEventListener("DOMContentLoaded", ready);
}
else
{
    ready();
}
// Function to add a product to the cart
function addToCart(name, price, imageUrl) {
    const product = {
      name: name,
      price: price,
      imageUrl: imageUrl,
    };
  
    shoppingCart.push(product);
    localStorage.setItem("cartData", JSON.stringify(shoppingCart));

    updateCartDisplay();
  }
  
// Function to remove a product from the cart by its index
function removeFromCart(index) {
    if (index >= 0 && index < shoppingCart.length) {
      shoppingCart.splice(index, 1);
      updateCartDisplay();
    }
  }
  
  // Function to update the cart display
  function updateCartDisplay() {
    const cartItemsContainer = document.getElementById("cartItems");
    cartItemsContainer.innerHTML = "";
  
    let totalPrice = 0;
  
    shoppingCart.forEach((item, index) => {
      const listItem = document.createElement("li");
  
      const image = document.createElement("img");
      image.src = item.imageUrl;
      image.alt = `${item.name} Image`;
      listItem.appendChild(image);
  
      const namePriceText = document.createTextNode(`${item.name} - $${item.price}`);
      listItem.appendChild(namePriceText);
  
      const removeButton = document.createElement("button");
      removeButton.textContent = "x";
      removeButton.addEventListener("click", () => removeFromCart(index)); // Call removeFromCart with the correct index
      listItem.appendChild(removeButton);
  
      cartItemsContainer.appendChild(listItem);
  
      totalPrice += parseFloat(item.price); // Convert item.price to a number and accumulate the prices
    });
  
    // Display the total price only if there are items in the cart
    if (shoppingCart.length > 0) {
      const totalItem = document.createElement("li");
      totalItem.textContent = `Total Price: $${totalPrice.toFixed(2)}`; // Display total with 2 decimal places
      cartItemsContainer.appendChild(totalItem);
    }
  }
  
  // Example: Call the updateCartDisplay function on page load
  updateCartDisplay();