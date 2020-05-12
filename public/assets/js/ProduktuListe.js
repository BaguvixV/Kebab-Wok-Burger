    $( function(){
      let productModal = $(".sastavdalas");
      let productModalContent = $(".sastavdalas .sastavdalas-content");
      let productModalClose = $(".sastavdalas .close");
      let productModalShow = $(".product-card .show-sastavdalas");
      let productModalDescription = $(".sastavdalas .modal-sastavdalas");
      let productModalTitle = $(".sastavdalas .modal-title");

      let productCard = $(".product-card");
      let productTitle  = $(".product-card .product-title");
      let productDescription  = $(".product-card .product-sastavdalas");

      productModal.height($(window).height());


      productModalClose.click( function(){
        productModal.fadeOut(500);
      });

      productModalShow.click( function(){
        let titleMarkup = $(this).closest(productCard).find(productTitle).html();
        let descriptionMarkup = $(this).closest(productCard).find(productDescription).html();


        $(productModalDescription).html(descriptionMarkup);
        $(productModalTitle).html(titleMarkup);

        productModal.fadeIn(500);
      });
    }); 