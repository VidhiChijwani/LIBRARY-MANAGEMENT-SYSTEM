<?php
        include "connection.php";
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    

    <!-- <link href='https://fonts.googleapis.com/css?family=Lato:300,400' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="http://weloveiconfonts.com/api/?family=entypo"> -->

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300&family=Rubik:wght@500&display=swap"
        rel="stylesheet">
    <script src="https://kit.fontawesome.com/43040fb5ec.js" crossorigin="anonymous"></script>

    <!-- jquery -->

    <!-- frameworks -->
    <link rel="stylesheet" href="w3.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css">

    <!-- css -->
    <link rel="stylesheet" href="explore.css">
    <link rel="stylesheet" href="sc.css">

    <!-- js -->
    <script src="sc.js"></script>
    
    <title>Document</title>

    <style>
		/* announcement bar  */
body{
    border: 1px red ;
}

#announce {
    background-color: white;
    text-align: center;
    padding: 5px 0;
    color: rgb(8, 8, 8);
    font-size: 20px;
}

/* top navbar  */
#navbar {
    box-sizing: border-box;
    display: inline-block;
    font-size: 25px;
    height: 60px;
    width: 100%;
    margin: 0px;
    padding: 0px;
    color: white;
    background-color: rgb(22, 22, 22);
    /* border: 3px solid rgb(17, 0, 255); */
}

.headertab {
    display: inline-block;
    text-align: center;
    min-width: 90px;
    /* height: 100%; why it doesnt work*/
    margin: 0px 8px;
    padding: 10px 2px 10px;
    /* border: 3px solid red; */

    /* padding: auto 2px; */
    /* margin: auto 15px; */
    /* not getting how i wanted all boxes of equal size 
    it was because it was not inline block */
}

.websitetitle {
    font-size: 35px;
    /* ***useful code to shift blocks inside a container */
    position: relative;
    top: 3px;
    display: inline-block;
}

ul#navbar li {
    display: inline-block;
    cursor: pointer;
}

li.hover:hover {
    background-color: rgb(70, 69, 66);
}

.active {
    background-color: rgb(70, 69, 66);
}

/* book content  */
.container {
    border-left: 1px solid rgb(226, 153, 17);
    border-top: 1px solid rgb(226, 153, 17);
    width: 65vw;
    height: 100vh;
    position: absolute;
    margin: 0 25vw;
    padding-top: 3vw;
    top: 25vh;
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
    justify-content: center;
    overflow: auto;
    /* text-align: left; */
    font-size: 1.2rem;

}

.card {
    position: relative;
    box-sizing: initial;
    /* border: 2px solid gold; */
    width: 11vw;
    height: 14em;
    margin: 15px 1vw;
    /* border: 1px solid white; */
    /* align-self:flex-end ; */

}

.container {
    padding: 3% 4%;

}

.book-image {
    width: 100%;
    height: 75%;

}

.book-title {
    font-size: 1em;
    margin-top: .2em;
}

.add-to-cart{
    width: 67%;
    float: left;
    padding-left: 3%;
}

.book-price {
    font-family: 'Oswald', sans-serif;
    font-family: 'Times New Roman', Times, serif;
    font-size: 1em;

    /* useful code
    right align any block using flexbox
    but then normal margins not working  */
    margin-left: 67%;
}

#sidebar_mod {
    font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
    width: 18%;
    margin: 4% 3% 0% 5%;
    border: 1px solid rgb(226, 153, 17);
    background-color: rgb(27, 27, 37);
    color: white;
    position: absolute !important;
    height: 90%;
}

.search_mod {
    margin-top: 2%;
    /* width: 55%; */
    margin-left: 25%;
}

/* shopping cart */
.cart_container{
    position: fixed;
    width: 35%;
    height: 40%;
    margin-bottom: 60%;
    margin-left: 65%;
    border: 1px solid rgb(15, 15, 15);  

}

.cart_row{
    position: absolute;
    width: 100%;
    height:40%;
    border: 1px solid rgb(226, 153, 17);

}

.cart_column{
    border-right: 1px solid rgb(226, 153, 17);
}

.img_column{
    position: absolute;
    width:35%;
    height: 100%;
}

.cart_img{
    position: absolute;
    width: 100%;
    height: 100%;
}

@charset "utf-8";

@import url(https://fonts.googleapis.com/css?family=Open+Sans:400,700,600);


/* html,
html a {
  -webkit-font-smoothing: antialiased;
  text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.004);
}



body {
  
} */

.sc-cart{
  font-size: 1.4rem;
  cursor: pointer;
}

.sc-cart-close{
  font-size: 1.4rem;
  cursor: pointer;
}


.main {
  display: none;
  clear: both;
  font-size: 0.75rem;
  margin: 0 auto;
  overflow: hidden;
  padding: 1rem 0;
  /* width: 960px; */
  color: #666;
  font-family: 'Open Sans', sans-serif;
  font-size: 62.5%;
}

.cart_container {
  
  position: fixed;
  width: 32%;
  height: fit-content;
  max-height: 72%;
  overflow: auto;
  margin-top: -12%;
  margin-left: 63%;
  border: 1px solid rgb(15, 15, 15);
  padding: 0;
  

}

a {
  border: 0 none;
  outline: 0;
  text-decoration: none;
}

strong {
  font-weight: bold;
}

p {
  margin: 0.75rem 0 0;
}

h1 {
  font-size: 0.75rem;
  font-weight: normal;
  margin: 0;
  padding: 0;
}

input,
button {
  border: 0 none;
  outline: 0 none;
}

button {
  background-color: #666;
  color: #fff;
}

button:hover,
button:focus {
  background-color: #555;
}

img,
.basket-module,
.basket-labels,
.basket-product {
  width: 100%;
}

.basket {
  background-color: #fff;
  width: 100%;
  display: none;
}

input,
button,
.basket,
.basket-module,
.basket-labels,
.item,
.basket-price,
.basket-quantity,
.subtotal,
.basket-product,
.product-image,
.product-details {
  float: left;
}

.basket-price:before,
.row-subtotal:before,
.subtotal:before,
.subtotal-value:before,
.total-value:before,
.promo-value:before {
  content: '₹';
}

.hide {
  display: none;
}

.basket{
  padding: 0 1rem;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
}

.basket {
  width: 100%;
}

.basket-module {
  color: #111;
}

label {
  display: block;
  margin-bottom: 0.3125rem;
}
input{
  margin: 3%;

}

.basket-labels {
  border-top: 1px solid #ccc;
  border-bottom: 1px solid #ccc;
  margin-top: 1.625rem;
}

ul.basket-list {
  list-style: none;
  margin: 0;
  padding: 0;
}

div.basket-labels li {
  color: #111;
  display: inline-block;
  padding: 0.625rem 0;
}

li.basket-price:before,
li.subtotal:before {
  content: '';
}

.item {
  width: 55%;
}

.basket-price,
.basket-quantity,
.subtotal {
  width: 15%;
}

.subtotal {
  text-align: right;
}

.remove {
  bottom: 1.125rem;
  float: right;
  position: absolute;
  right: 0;
  text-align: right;
  width: 45%;
}

.remove button {
  background-color: transparent;
  color: #777;
  float: none;
  text-decoration: underline;
  text-transform: uppercase;
}

.item-heading {
  padding-left: 4.375rem;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
}

.basket-product {
  border-bottom: 1px solid #ccc;
  padding: 1rem 0;
  position: relative;
}

.product-image {
  width: 35%;
}

.product-details {
  width: 65%;
}

.product-frame {
  border: 1px solid #aaa;
}

.product-details {
  padding: 0 1.5rem;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
}

.quantity-field {
  background-color: #ccc;
  border: 1px solid #aaa;
  border-radius: 4px;
  font-size: 0.625rem;
  padding: 2px;
  width: 3.75rem;
}

.summary {
  display: none;
  background-color: #eee;
  border: 1px solid #aaa;
  padding: 1rem;
  /* position: fixed; */
  /* -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box; */
  width: 100%;
  height: 120%;
}

.summary-total-items {
  color: #666;
  font-size: 0.875rem;
  text-align: center;
}

.summary-subtotal,
.summary-total {
  border-top: 1px solid #ccc;
  border-bottom: 1px solid #ccc;
  clear: both;
  margin: 1rem 0;
  overflow: hidden;
  padding: 0.5rem 0;
}

.subtotal-title,
.subtotal-value,
.total-title,
.total-value,
.promo-title,
.promo-value {
  color: #111;
  float: left;
  width: 50%;
}

.summary-promo {
  -webkit-transition: all .3s ease;
  -moz-transition: all .3s ease;
  -o-transition: all .3s ease;
  transition: all .3s ease;
}

.promo-title {
  float: left;
  width: 70%;
}

.promo-value {
  color: #8B0000;
  float: left;
  text-align: right;
  width: 30%;
}

.summary-delivery {
  padding-bottom: 3rem;
}

.subtotal-value,
.total-value {
  text-align: right;
}

.total-title {
  font-weight: bold;
  text-transform: uppercase;
}

.summary-checkout {
  display: block;
}

.checkout-cta {
  display: block;
  float: none;
  font-size: 0.75rem;
  text-align: center;
  text-transform: uppercase;
  padding: 0.625rem 0;
  width: 100%;
}

.summary-delivery-selection {
  background-color: #ccc;
  border: 1px solid #aaa;
  border-radius: 4px;
  display: block;
  font-size: 0.625rem;
  height: 34px;
  width: 100%;

}



@media screen and (max-width: 640px) {

  aside,
  .basket,
  .summary,
  .item,
  .remove {
    width: 100%;
  }

  .basket-labels {
    display: none;
  }

  .basket-module {
    margin-bottom: 1rem;
  }

  .item {
    margin-bottom: 1rem;
  }

  .product-image {
    width: 40%;
  }

  .product-details {
    width: 60%;
  }

  .basket-price,
  .subtotal {
    width: 33%;
  }

  .basket-quantity {
    text-align: center;
    width: 34%;
  }

  .quantity-field {
    float: none;
  }

  .remove {
    bottom: 0;
    text-align: left;
    margin-top: 0.75rem;
    position: relative;
  }

  .remove button {
    padding: 0;
  }

  .summary {
    margin-top: 1.25rem;
    position: relative;
  }
}

@media screen and (min-width: 641px) and (max-width: 960px) {
  aside {
    padding: 0 1rem 0 0;
  }

  .summary {
    width: 28%;
  }
}

@media screen and (max-width: 960px) {
  main {
    width: 100%;
  }

  .product-details {
    padding: 0 1rem;
  }
}

    </style>

</head>


<body>
    <div id="announce">
        library will remain closed on 27/03/22(sat)
    </div>

    <ul id="navbar">
        <li class="websitetitle " style="margin-left: 100px; cursor:default; ">
            Reader's Hub
        </li>
        <li class="headertab hover" style="margin-left: 400px;">
            admin
        </li>
        <li class="headertab active">
            explore
        </li>
        <li class="headertab hover">
            blog <i class="fas fa-caret-down dropsign" style="position: relative; bottom: 2px;"></i>
        </li>
        <li class="headertab hover">
            about
        </li>
        <!-- <li class="hover" style="padding: 3px; margin-left: 250px;">
            
        </li> -->
      <a style="margin-left:20%;" href="student-profile.html"><i class="fas fa-user-circle" ></i> </a> 
        <i class="sc-cart fa fa-shopping-cart" style="padding: 3px;"></i>
    </ul>

    <!-------search bar------->
    <div class="d-flex justify-content-center px-5">
        <div class="search search_mod"> <input type="text" class="search-input" placeholder="Search your next read! "
                name="" style="width: 90%; height: 160%;"> <a href="#" class="search-icon"> <i class="fa fa-search"></i>
            </a> </div>
    </div>

    <!-- sidebar -->
    <div id="sidebar_mod" class="w3-sidebar w3-bar-block w3-light-gold w3-card" style="width:18%">
        <div class="w3-bar-item ">Categories</div>
        <div class="w3-bar-item">
            <input class="w3-check" type="checkbox">
            <label>Drama</label>
        </div>
        <div class="w3-bar-item">
            <input class="w3-check" type="checkbox">
            <label>Romance</label>
        </div>
        <div class="w3-bar-item">
            <input class="w3-check" type="checkbox">
            <label>Horror</label>
        </div>
        <div class="w3-bar-item">
            <input class="w3-check" type="checkbox">
            <label>Mystery</label>
        </div>
        <div class="w3-bar-item">
            <input class="w3-check" type="checkbox">
            <label>Thriller</label>
        </div>
        <div class="w3-bar-item">
            <input class="w3-check" type="checkbox">
            <label>Sci-Fi</label>
        </div>

        <div class="w3-bar-item ">Price</div>
        <div class="w3-bar-item">
            <input class="w3-check" type="checkbox">
            <label>Under 500</label>
        </div>
        <div class="w3-bar-item">
            <input class="w3-check" type="checkbox">
            <label>Under 1000</label>
        </div>

        <a href="#" class="w3-bar-item w3-button ">Rating</a>
        <div class="w3-bar-item">
            <input class="w3-check" type="checkbox">
            <label>4 star and above</label>
        </div>
    </div>

	<script>
        document.getElementsByClassName("sc-cart")[0].addEventListener('click', opencart);

        function opencart() {
            let main = document.getElementsByTagName("main")[0];
            main.setAttribute('style', 'display:block;');
            main.getElementsByClassName("basket")[0].setAttribute('style', 'display:block;');
            main.getElementsByClassName("summary")[0].setAttribute('style', 'display:block;');
            console.log("hell");
        }

    </script>
    <script>
         function hidecart() {
            let main = document.getElementsByTagName("main")[0];
            main.setAttribute('style', 'display:none;');
            main.getElementsByClassName("basket")[0].setAttribute('style', 'display:none;');
            main.getElementsByClassName("summary")[0].setAttribute('style', 'display:none;');
            console.log("hell");
        }
      
        document.getElementsByClassName("sc-cart-close")[0].addEventListener('click', hidecart);

       

    </script>

    <!-- book content -->
    <div class="container ">
        <div class="row gx-15">
            <div class="col-sm-3">
                <img class="book-image" src="images/To_Kill_a_Mockingbird.jpg" alt="">
                <div class="book-title">Kill a Mockingbird</div>
                <div class="add-to-cart"><i class="fa fa-shopping-cart" aria-hidden="true"></i></div>
                <div class="book-price">₹1220</div>

            </div>
            <div class="col-sm-3">
                <img class="book-image" src="images/Ikigai.jpg" alt="">
                <div class="book-title">Ikigai</div>
                <div class="add-to-cart"><i class="fa fa-shopping-cart" aria-hidden="true"></i></div>
                <div class="book-price">₹240</div>
            </div>
            <div class="col-sm-3">
                <img class="book-image" src="images/To_Kill_a_Mockingbird.jpg" alt="">
                <div class="book-title">Kill a Mockingbird</div>
                <div class="add-to-cart"><i class="fa fa-shopping-cart" aria-hidden="true"></i></div>
                <div class="book-price">₹1220</div>
            </div>
            <div class="col-sm-3">
                <img class="book-image" src="images/Ikigai.jpg" alt="">
                <div class="book-title">Ikigai</div>
                <div class="add-to-cart"><i class="fa fa-shopping-cart" aria-hidden="true"></i></div>
                <div class="book-price">₹240</div>
            </div>
        </div>


        <div class="card">
            <img class="book-image" src="images/To_Kill_a_Mockingbird.jpg" alt="">
            <div class="book-title">Kill a Mockingbird</div>
            <div class="add-to-cart"><i class="fa fa-shopping-cart" aria-hidden="true"></i></div>
            <div class="book-price">₹1220</div>
        </div>
        <div class="card">
            <img class="book-image" src="images/Ikigai.jpg" alt="">
            <div class="book-title">Ikigai</div>
            <div class="add-to-cart"><i class="fa fa-shopping-cart" aria-hidden="true"></i></div>
            <div class="book-price">₹240</div>
        </div>
        <div class="card">
            <img class="book-image" src="images/the_handmaids_tale.jpg" alt="">
            <div class="book-title">The Handmaid's Tale</div>
            <div class="add-to-cart"><i class="fa fa-shopping-cart" aria-hidden="true"></i></div>
            <div class="book-price">₹799</div>
        </div>
        <div class="card">
            <img class="book-image" src="images/Harry_Potter.jpg" alt="">
            <div class="book-title">Harry Potter</div>
            <div class="add-to-cart"><i class="fa fa-shopping-cart" aria-hidden="true"></i></div>
            <div class="book-price">₹349</div>
        </div>
    </div>

    <!-- js -->
    <script>
        let total_books = 6;
        let display_cards = (6 / 4 + 1) * 4;

        //creates display cards
        for (let i = 0; i < 4; i++) {
        	var rowele = document.createElement("div");
            rowele.classList.add("col-sm-3");            

            var img = document.createElement("img");
            img.classList.add("book-image");
            rowele.appendChild(img);

            var title = document.createElement("div");
            title.classList.add("book-title");
            rowele.appendChild(title);

            var atc = document.createElement("div");
            atc.classList.add("add-to-cart");
            var symbolfont = document.createElement("i");
            symbolfont.classList.add("fa","fa-shopping-cart");
            atc.appendChild(symbolfont);
            rowele.appendChild(atc);

            var price = document.createElement("div");
            price.classList.add("book-price");
            rowele.appendChild(price);

            row.appendChild(rowele);

          // var cartcode=``
          

          
          

        }

        //creates content inside card 
        var bookList = ['Aladdin', 'The Highway Rat', '400 Days', 'New Moon']; // temporory list of books to display.........
        for (let i = 0; i < 4; i++) {
            var con1 = document.getElementsByClassName("container");
            var card = con1[0].getElementsByClassName("card");
            var book_image = card[i + 4].getElementsByClassName("book-image");
            // var book_url;

            $.ajax({
                url: "searchBooks",
                cache: false,
                async: false,
                dataType: "json",

                data: {
                    book: bookList[i]
                },
                success: (function (searchedBooks) {
                    console.log(searchedBooks);
                    book_image[0].src = searchedBooks[0].imgURL;
                }
                ),

                fail: (function () {
                    alert("Books not found!!")
                }
                )
            });
        }
        
        

        if (document.readyState == 'loading') {
            document.addEventListener('DOMContentLoaded', ready)
        } else {
            ready()
        }

        function ready() {
            var removeCartItemButtons = document.getElementsByClassName('remove')
            for (var i = 0; i < removeCartItemButtons.length; i++) {
                var button = removeCartItemButtons[i].getElementsByTagName('button')[0]
                button.addEventListener('click', removeCartItem)
                console.log(button)
            }

            var quantityInputs = document.getElementsByClassName('quantity-field')
            for (var i = 0; i < quantityInputs.length; i++) {
                var input = quantityInputs[i]
                input.addEventListener('change', quantityChanged)
            }

            var addToCartButtons = document.getElementsByClassName('add-to-cart')
            for (var i = 0; i < addToCartButtons.length; i++) {
                var button = addToCartButtons[i]
                button.addEventListener('click', addToCartClicked)
            }

            // document.getElementsByClassName('btn-purchase')[0].addEventListener('click', purchaseClicked)
        }




        function removeCartItem(event) {
            var buttonClicked = event.target
            buttonClicked.parentElement.parentElement.remove()
            updateCartTotal()
        }

        function quantityChanged(event) {
            var input = event.target
            if (isNaN(input.value) || input.value <= 0) {
                input.value = 1
            }
            console.log('quantity changed')
            updateCartTotal()
        }

        function updateCartTotal() {
            var cartItemContainer = document.getElementsByClassName('basket')[0]
            var cartRows = cartItemContainer.getElementsByClassName('basket-product')
            var total = 0
            for (var i = 0; i < cartRows.length; i++) {
                var cartRow = cartRows[i]
                var priceElement = cartRow.getElementsByClassName('basket-price')[0]
                var quantityElement = cartRow.getElementsByClassName('quantity-field')[0]
                var subtotal = cartRow.getElementsByClassName('row-subtotal')[0]
                var price = parseFloat(priceElement.innerText.replace('₹', ''))
                var quantity = quantityElement.value
                subtotal = price * quantity
                cartRow.getElementsByClassName('row-subtotal')[0].innerText = subtotal
                total = total + (price * quantity)
            }
            total = Math.round(total * 100) / 100
            document.getElementsByClassName('total-value final-value')[0].innerText = total// '₹' was added
        }

        function addToCartClicked(event) {
            var button = event.target
            var shopItem = button.parentElement.parentElement
            var title = shopItem.getElementsByClassName('book-title')[0].innerText
            var pricet = shopItem.getElementsByClassName('book-price')[0].innerText
            var price = parseFloat(pricet.replace('₹', ''))
            var imageSrc = shopItem.getElementsByClassName('book-image')[0].src
            addItemToCart(title, price, imageSrc)
            updateCartTotal()
        }

        function addItemToCart(title, price, imageSrc) {
            var cartRow = document.createElement('div')
            cartRow.classList.add('basket-product')
            var cartItems = document.getElementsByClassName('basket')[0]
            var cartItemNames = cartItems.getElementsByClassName('basket-title')
            for (var i = 0; i < cartItemNames.length; i++) {
                if (cartItemNames[i].innerText == title) {
                    alert('This item is already added to the cart')
                    return
                }
            }

            var cartRowContents =
                // `<div class="basket-product">
                `<div class="item">
                        <div class="product-image">
                            <img src="${imageSrc}" alt="Placholder Image 2" class="product-frame">
                        </div>
                        <div class="product-details">
                            <h1><strong class="basket-title">${title}</strong> 
                            </h1>
                            <p><strong><span>Author</span> </strong></p>
                            <span>shakesphere</span>
                        </div>
                    </div>
                    <div class="basket-price">${price}</div>
                    <div class="basket-quantity">
                        <input type="number" value="1" min="1" class="quantity-field">
                    </div>
                    <div class="row-subtotal">${price}</div>
                    <div class="remove">
                        <button>Remove</button>
                    </div>`
            // </div>`
            cartRow.innerHTML = cartRowContents
            cartItems.append(cartRow)
            cartRow.getElementsByClassName('remove')[0].getElementsByTagName('button')[0].addEventListener('click', removeCartItem)
            cartRow.getElementsByClassName('quantity-field')[0].addEventListener('change', quantityChanged)
        }
        
        var cartList = []
        var tempArr = []
        document.getElementByClassName("checkout-cta")[0].addEventListener('click', sendData)
        
        function sendData() {
        	var cartItemContainer = document.getElementByClassName("basket")[0]
        	var cartRows = cartItemContainer.getElementByClassName("basket-product")
        	var total = 0
        	for(var i = 0; i < cartRows.length; i++) {
        		var cartRow = cartRows[i]
        		var titleElement = cartRow.getElementByClassName("basket-title")[0]
        		var quantityElement = cartRow.getElementByClassName("quantity-field")[0]
        		tempArr.push(titleElement, quantityElement)
        		cartList.push(tempArr)
        		tempArr = []
        	}
        }


    </script>
    
    <!-- Shopping cart  -->
    <main class="cart_container">
        <div class="basket">
            <div class="basket-labels">
                <ul class="basket-list">
                    <li class="item item-heading">Item</li>
                    <li class="basket-price ">Price</li>
                    <li class="basket-quantity">Quantity</li>
                    <li class="subtotal">Subtotal</li>
                </ul>
            </div>
            <div class="basket-product">
                <div class="item">
                    <div class="product-image">
                        <img src="images/the_handmaids_tale.jpg" alt="Placholder Image 2" class="product-frame">
                    </div>
                    <div class="product-details">
                        <h1></span> the handmaids tale </strong> 
                        </h1>
                        <p><strong><span>Author</span> </strong></p>
                        <span>shakesphere</span>
                    </div>
                </div>
                <div class="basket-price">26.00</div>
                <div class="basket-quantity">
                    <input type="number" value="1" min="1" class="quantity-field">
                </div>
                <div class="row-subtotal">26.00</div>
                <div class="remove">
                    <button>Remove</button>
                </div>
            </div>
            <div class="basket-product">
                <div class="item">
                    <div class="product-image">
                        <img src="images/the_handmaids_tale.jpg" alt="Placholder Image 2" class="product-frame">
                    </div>
                    <div class="product-details">
                        <h1><strong class="basket-title">the handmaids tale </strong> 
                        </h1>
                        <p><strong><span>Author</span> </strong></p>
                        <span>shakesphere</span>
                    </div>
                </div>
                <div class="basket-price">26.00</div>
                <div class="basket-quantity">
                    <input type="number" value="1" min="1" class="quantity-field">
                </div>
                <div class="row-subtotal">26.00</div>
                <div class="remove">
                    <button>Remove</button>
                </div>
            </div>
        </div>
        <aside>
            <div class="summary">
                <!-- <div class="summary-total-items"><span class="total-items"></span> Items in your Bag</div>
                <div class="summary-subtotal">
                    <div class="subtotal-title">Subtotal</div>
                    <div class="subtotal-value final-value" id="basket-subtotal">130.00</div>
                    <div class="summary-promo hide">
                        <div class="promo-title">Promotion</div>
                        <div class="promo-value final-value" id="basket-promo"></div>
                    </div>
                </div> -->
                <!-- <div class="summary-delivery">
                    <select name="delivery-collection" class="summary-delivery-selection">
                        <option value="0" selected="selected">Select Collection or Delivery</option>
                        <option value="collection">Collection</option>
                        <option value="first-class">Royal Mail 1st Class</option>
                    </select>
                </div> -->
                <div class="summary-total">
                    <div class="total-title">Total</div>
                    <div class="total-value final-value" id="basket-total">130.00</div>
                </div>
                <div class="summary-checkout">
                    <button class="checkout-cta">Go to Secure Checkout</button>
                </div>
            </div>
        </aside>
    </main>



    <!-- <div class="cart_container">
        <div class="cart_row">
            <span class="cart_column img_column">
                <a href="" class='cart_column img_column'>
                    <img class="cart_img" src="images/Ikigai.jpg" alt="">
                </a>
            </span>

            <span class="cart_column cart_title">lorem..3.ad4adad4ad2ad2ad2ad2addadaadadadadadadda
            </span>

        </div>

    </div> -->

</body>

</html>