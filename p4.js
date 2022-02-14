let qst = document.getElementById("qst");
let gst = document.getElementById("gst");
let grandTotal = document.getElementById("gtotal");

function increase(btnObj){   
    var qty = btnObj.parentNode.children[1].innerHTML;
    var price= parseFloat(btnObj.parentNode.parentNode.children[3].innerHTML.slice(1));
    var spanTq= document.getElementById("totalQty");
    var tq = parseInt(spanTq.innerHTML);
    qty= parseInt(qty.slice(7));
    price =price +(price/qty);
    btnObj.parentNode.parentNode.children[3].innerHTML= "$"+(price).toFixed(2);
    qst.innerHTML= (parseFloat(qst.innerHTML)+ ((9.975/100)*price)).toFixed(2);
    gst.innerHTML= (parseFloat(gst.innerHTML) +((5/100)*price)).toFixed(2);
    grandTotal.innerHTML = (parseFloat( grandTotal.innerHTML)+(price+ ((9.975/100)*price) + ((5/100)*price))).toFixed(2);
     ++qty;
     spanTq.innerHTML = ++tq;
     btnObj.parentNode.children[1].innerHTML = "&nbsp; "+qty;
    
}

function decrease(btnObj){
    var qty = btnObj.parentNode.children[1].innerHTML;
    var price= parseFloat(btnObj.parentNode.parentNode.children[3].innerHTML.slice(1));
    var spanTq= document.getElementById("totalQty");
    var tq = parseInt(spanTq.innerHTML);
    qty= parseInt(qty.slice(7));
   
    console.log(qty);
    if(qty>0){
        price =price - (price/qty);
        btnObj.parentNode.parentNode.children[3].innerHTML= "$"+(price -(price/qty)).toFixed(2);
        qst.innerHTML= (parseFloat(qst.innerHTML)- ((9.975/100)*price)).toFixed(2);
        gst.innerHTML= (parseFloat(gst.innerHTML) -((5/100)*price)).toFixed(2);
        grandTotal.innerHTML = (parseFloat( grandTotal.innerHTML)-(price+ ((9.975/100)*price) + ((5/100)*price))).toFixed(2);
        qty--;
        spanTq.innerHTML = --tq;
    }
    btnObj.parentNode.children[1].innerHTML = "&nbsp; "+qty;
}

function deleteItem(btn){
    var qty = parseInt(btn.parentNode.parentNode.children[2].children[1].innerHTML.slice(7));
    var spanTq= parseInt(document.getElementById("totalQty").innerHTML);
    document.getElementById("totalQty").innerHTML = spanTq-qty;
    var index= btn.parentNode.parentNode.rowIndex;
    var table= document.querySelector("#itemsTable");
    table.deleteRow(index);
    adjustSerialNumber(index);
}

function adjustSerialNumber(sno){
    var rows = document.querySelector("#itemsTable").rows;
    for(var i =sno; i< rows.length-4; i++){
        rows[i].children[0].innerHTML= i+".";
        
    }
}