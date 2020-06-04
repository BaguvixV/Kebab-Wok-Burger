////////////////////
// SESSION SAVE STORAGE
///////////////

// function saveCart() {
//    localStorage.setItem("shoppingCart", JSON.stringify(cartRow));
// }

////////////////////
// ADD & REMOVE TO PRODUCT CART & CART STORAGE FUNCTION
///////////////
if (document.readyState == "loading") {
   document.addEventListener("DOMContentLoaded", ready);
} else {
   ready();
}

function ready() {
   var removeCartItemButtons = document.getElementsByClassName("btn-remove");
   for (var i = 0; i < removeCartItemButtons.length; i++) {
      var button = removeCartItemButtons[i];
      button.addEventListener("click", removeCartItem);
   }

   var quantityInputs = document.getElementsByClassName("cart-quantity-input");
   for (var i = 0; i < quantityInputs.length; i++) {
      var input = quantityInputs[i];
      input.addEventListener("change", quantityChanged);
   }

   var addToCartButtons = document.getElementsByClassName("shop-item-button");
   for (var i = 0; i < addToCartButtons.length; i++) {
      var button = addToCartButtons[i];
      button.addEventListener("click", addToCartClicked);
   }

   document
      .getElementsByClassName("btn-purchase")[0]
      .addEventListener("click", purchaseClicked);
}

function purchaseClicked() {

   var name = document.forms["form-submit"]["name"].value;
   var email = document.forms["form-submit"]["email"].value;
   var number = document.forms["form-submit"]["number"].value;
   var city = document.forms["form-submit"]["city"].value;

   if (name , email , number , city == "") {
      alert("! Pirms veikt pasūtījumu ir jāaizpilda formu");
      return false;
   } else

      alert(
         "Paldies par Jūsu pirkumu. Centīsimies atbildēt pēc iespējas ātrāk :)"
      );
   var cartItems = document.getElementsByClassName("cart-items")[0];
   while (cartItems.hasChildNodes()) {
      cartItems.removeChild(cartItems.firstChild);
   }
   updateCartTotal();
}

function removeCartItem(event) {
   var buttonClicked = event.target;
   buttonClicked.parentElement.parentElement.remove();
   updateCartTotal();
}

function quantityChanged(event) {
   var input = event.target;
   if (isNaN(input.value) || input.value <= 0) {
      input.value = 1;
   }
   updateCartTotal();
}

function addToCartClicked(event) {
   var button = event.target;
   var shopItem = button.parentElement.parentElement;
   var title = shopItem.getElementsByClassName("shop-item-title")[0].innerText;
   var price = shopItem.getElementsByClassName("shop-item-price")[0].innerText;
   var imageSrc = shopItem.getElementsByClassName("shop-item-image")[0].src;
   addItemToCart(title, price, imageSrc);
   updateCartTotal();
}

function addItemToCart(title, price, imageSrc) {
   var cartRow = document.createElement("div");
   cartRow.classList.add("cart-row");
   var cartItems = document.getElementsByClassName("cart-items")[0];
   var cartItemNames = cartItems.getElementsByClassName("cart-item-title");
   for (var i = 0; i < cartItemNames.length; i++) {
      if (cartItemNames[i].innerText == title) {
         alert("Produkts jau existē grozā!");
         return;
      }
   }

   var cartRowContents = `
      <div class="cart-item cart-column">
          <img class="cart-item-image" src="${imageSrc}" width="100" height="100">
          <span class="cart-item-title">${title}</span>
      </div>
      <span class="cart-price cart-column">${price}</span>
      <div class="cart-quantity cart-column">
          <input class="cart-quantity-input" type="number" value="1">
          <button class="button02 btn-remove" type="button">Noņemt</button>
      </div>`;
   cartRow.innerHTML = cartRowContents;
   cartItems.append(cartRow);
   cartRow
      .getElementsByClassName("btn-remove")[0]
      .addEventListener("click", removeCartItem);
   cartRow
      .getElementsByClassName("cart-quantity-input")[0]
      .addEventListener("change", quantityChanged);
}

function updateCartTotal() {
   var cartItemContainer = document.getElementsByClassName("cart-items")[0];
   var cartRows = cartItemContainer.getElementsByClassName("cart-row");
   var total = 0;
   for (var i = 0; i < cartRows.length; i++) {
      var cartRow = cartRows[i];
      var priceElement = cartRow.getElementsByClassName("cart-price")[0];
      var quantityElement = cartRow.getElementsByClassName(
         "cart-quantity-input"
      )[0];
      var price = parseFloat(priceElement.innerText.replace("€", ""));
      var quantity = quantityElement.value;
      total = total + price * quantity;
   }
   total = Math.round(total * 100) / 100;
   document.getElementsByClassName("cart-total-price")[0].innerText =
      "€" + total;
}


////////////////////
// OPEN/CLOSE SIDENAV FUNCTION
///////////////
function openNav() {
   document.getElementById("SideNav").style.width = "650px";
}

function closeNav() {
   document.getElementById("SideNav").style.width = "0";
}


////////////////////
// PRODUCT POP-UP FUNCTION
///////////////
$(function () {
   let productModal = $(".sastavdalas");
   let productModalContent = $(".sastavdalas .sastavdalas-content");
   let productModalClose = $(".sastavdalas .close");
   let productModalShow = $(".product-card .show-sastavdalas");
   let productModalDescription = $(".sastavdalas .modal-sastavdalas");
   let productModalTitle = $(".sastavdalas .modal-title");

   let productCard = $(".product-card");
   let productTitle = $(".product-card .product-card-title");
   let productDescription = $(".product-card .product-card-sastavdalas");

   productModal.height($(window).height());


   productModalClose.click(function () {
      productModal.fadeOut(500);
   });

   productModalShow.click(function () {
      let titleMarkup = $(this).closest(productCard).find(productTitle).html();
      let descriptionMarkup = $(this).closest(productCard).find(productDescription).html();


      $(productModalDescription).html(descriptionMarkup);
      $(productModalTitle).html(titleMarkup);

      productModal.fadeIn(500);
   });
});


////////////////////
// PRODUCT CATEGORIES POP-UP
///////////////
function openSlideMenu() {
   document.getElementById('side-menu').style.width = '100%';
}

function closeSlideMenu() {
   document.getElementById('side-menu').style.width = '0%';
}
////////////////////