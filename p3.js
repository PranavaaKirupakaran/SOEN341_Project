var showMoreBtn = document.querySelector("#show-toggle");
var moreContent= document.querySelector("#moreContent");
showMoreBtn.addEventListener("click", function () {
    var btnText =showMoreBtn.innerHTML;
    if(btnText == "Show More"){
        moreContent.style.display ="inline";
        showMoreBtn.textContent= "Show Less";
    } else{
        moreContent.style.display ="none";
        showMoreBtn.textContent="Show More";
    } 
});

var cartBtn = document.querySelector(".add-to-cart");
cartBtn.addEventListener("click", function(){
    var table= document.getElementById("qtyTable");
    var qty= parseInt(table.children[0].children[0].children[1].children[0].textContent.slice(1,-1));
    if(qty<1){
        alert("Please select the quantity of the product.");
        table.children[0].children[0].children[1].focus();
    }else{
        cartBtn.innerHTML= '<i class="far fa-check-circle fa-lg"></i> &nbsp; ITEM ADDED';
    }
   
})

function increase(obj){
    var div = document.querySelector(".side");
    var price= parseFloat(div.children[1].children[0].textContent);
    var qty = obj.parentNode.parentNode.children[1].children[0];
    var sub= obj.parentNode.parentNode.children[3].children[0];
    qty= parseInt(qty.textContent.slice(1,-1));
    ++qty;
    price *= qty;
    obj.parentNode.parentNode.children[1].children[0].innerHTML="&nbsp;"+qty+"&nbsp;";
    sub.innerHTML= "$ "+price;
}
function decrease(obj){
    var cartBtn = document.querySelector(".add-to-cart");
    var div = document.querySelector(".side");
    var price= parseFloat(div.children[1].children[0].textContent);
    var qty = obj.parentNode.parentNode.children[1].children[0];
    var sub= obj.parentNode.parentNode.children[3].children[0];
    qty= parseInt(qty.textContent.slice(1,-1));
    if( qty>0){
        --qty;
    }
    if(qty == 0){
        
        console.log(cartBtn.innerHTML);
        cartBtn.innerHTML= ' <i class="fas fa-shopping-cart">&nbsp; ADD TO CART</i>';
    }
    price *= qty;
    obj.parentNode.parentNode.children[1].children[0].innerHTML="&nbsp;"+qty+"&nbsp;";
    sub.innerHTML= "$ "+price;
}
