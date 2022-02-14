<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&family=Fuggles&display=swap"
        rel="stylesheet">
    <style>
        * {
            margin: 0px;
            padding: 0px;
        }

        #idea{
            display: inline;
        }

        body {
            display: grid;
            grid-template-columns: 1fr 1fr 1fr;
            grid-template-rows: repeat(10, 1fr);
            width: 100vw;
            height: 100vh;
        }

        nav {
            flex: 1;
            /* background-color: lightblue;
            border: 1px solid black; */
            border-right: solid;
        }


        main {
            display: flex;
            grid-row: 2 / 13;
        }

        header {
            background-color: rgb(3, 0, 44);
            color: rgb(255, 115, 0);
            text-align: center;
            font-size: 3em;
            grid-column: 1 / 14;
            padding: 20px;
            font-family: 'Fuggles', cursive;
            font-weight: 600;
        }

        ul li {
            padding: 1.2em;
            background-color: rgb(3, 0, 44);
            color: rgb(255, 115, 0);
            margin-top: 1.2em;

        }

        ol li {
            line-height: 4em;
        }

        a {
            background-color: rgb(3, 0, 44);
            color: rgb(255, 115, 0);
            text-decoration-line: none;
        }

        form {
            margin: 30px;
            flex: 10;
        }



        #delet {
            margin-top: 20px;
        }

        span {
            font-size: 1.5em;
            font-weight: bold;
            color: rgb(3, 0, 44);
        }

        body {
            /* background-image: url(https://images.unsplash.com/photo-1621091211034-53136cc1eb32?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MjJ8fHNreSUyMGJhY2tncm91bmR8ZW58MHx8MHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60); */
            background-size: 2000px 800px;
            background-color: #99d0d0a1;
        }

        button {
            border-radius: 10px;
            padding: 5px;
            cursor: pointer;
            border-color: teal;
            background-color: rgb(3, 0, 44);
            color: rgb(255, 115, 0);
        }

        #add {
            border-radius: 10px;
            padding: 5px;
            cursor: pointer;
            border-color: teal;
            background-color: rgb(3, 0, 44);
            color: rgb(255, 115, 0);
        }

        #save {
            float: left;
            padding: 0px 10px 0px 10px;
            margin-top: 10px;
        }


        input {
            padding: 5px;
        }
    </style>
    <script>
        function mult(value) {
            var value;
            var x1;
            var x2;
            var x3;
            var x4;
            var x5;
            var tp;
            var nbp;
            x1 = document.getElementById('change1').value * 2;
            x2 = document.getElementById('change2').value * 11.57;
            x3 = document.getElementById('change3').value * 7.49;
            x4 = document.getElementById('change4').value * 1.20;
            x5 = document.getElementById('change5').value * 3.99;
            tp = (parseFloat(x1) + parseFloat(x2) + parseFloat(x3) + parseFloat(x4) + parseFloat(x5)).toFixed(2);
            nbp = parseInt(document.getElementById('change1').value) + parseInt(document.getElementById('change2').value) + parseInt(document.getElementById('change3').value) + parseInt(document.getElementById('change4').value)
                + parseInt(document.getElementById('change5').value);
            sessionStorage.nbp7 = nbp;
            sessionStorage.tp = tp;
            sessionStorage.value1 = value;
            document.getElementById('change1').value = sessionStorage.value1;
            document.getElementById('totalPrice').innerHTML = sessionStorage.tp;
            document.getElementById('nbp7').innerHTML = sessionStorage.nbp7;
        }
        function vult(value) {
            var value;
            var x1;
            var x2;
            var x3;
            var x4;
            var x5;
            var tp;
            var nbp;
            x1 = document.getElementById('change1').value * 2;
            x2 = document.getElementById('change2').value * 11.57;
            x3 = document.getElementById('change3').value * 7.49;
            x4 = document.getElementById('change4').value * 1.20;
            x5 = document.getElementById('change5').value * 3.99;
            tp = (parseFloat(x1) + parseFloat(x2) + parseFloat(x3) + parseFloat(x4) + parseFloat(x5)).toFixed(2);
            nbp = parseInt(document.getElementById('change1').value) + parseInt(document.getElementById('change2').value) + parseInt(document.getElementById('change3').value) + parseInt(document.getElementById('change4').value)
                + parseInt(document.getElementById('change5').value);
            sessionStorage.nbp7 = nbp;
            sessionStorage.tp = tp;
            sessionStorage.value2 = value;
            document.getElementById('change2').value = sessionStorage.value2;
            document.getElementById('totalPrice').innerHTML = sessionStorage.tp;
            document.getElementById('nbp7').innerHTML = sessionStorage.nbp7;
        }
        function bult(value) {
            var value;
            var x1;
            var x2;
            var x3;
            var x4;
            var x5;
            var tp;
            var nbp;
            x1 = document.getElementById('change1').value * 2;
            x2 = document.getElementById('change2').value * 11.57;
            x3 = document.getElementById('change3').value * 7.49;
            x4 = document.getElementById('change4').value * 1.20;
            x5 = document.getElementById('change5').value * 3.99;
            tp = (parseFloat(x1) + parseFloat(x2) + parseFloat(x3) + parseFloat(x4) + parseFloat(x5)).toFixed(2);
            nbp = parseInt(document.getElementById('change1').value) + parseInt(document.getElementById('change2').value) + parseInt(document.getElementById('change3').value) + parseInt(document.getElementById('change4').value)
                + parseInt(document.getElementById('change5').value);
            sessionStorage.nbp7 = nbp;
            sessionStorage.tp = tp;
            sessionStorage.value3 = value;
            document.getElementById('change3').value = sessionStorage.value3;
            document.getElementById('totalPrice').innerHTML = sessionStorage.tp;
            document.getElementById('nbp7').innerHTML = sessionStorage.nbp7;
        }
        function tult(value) {
            var value;
            var x1;
            var x2;
            var x3;
            var x4;
            var x5;
            var tp;
            var nbp;
            x1 = document.getElementById('change1').value * 2;
            x2 = document.getElementById('change2').value * 11.57;
            x3 = document.getElementById('change3').value * 7.49;
            x4 = document.getElementById('change4').value * 1.20;
            x5 = document.getElementById('change5').value * 3.99;
            tp = (parseFloat(x1) + parseFloat(x2) + parseFloat(x3) + parseFloat(x4) + parseFloat(x5)).toFixed(2);
            nbp = parseInt(document.getElementById('change1').value) + parseInt(document.getElementById('change2').value) + parseInt(document.getElementById('change3').value) + parseInt(document.getElementById('change4').value)
                + parseInt(document.getElementById('change5').value);
            sessionStorage.nbp7 = nbp;
            sessionStorage.tp = tp;
            sessionStorage.value4 = value;
            document.getElementById('change4').value = sessionStorage.value4;
            document.getElementById('totalPrice').innerHTML = sessionStorage.tp;
            document.getElementById('nbp7').innerHTML = sessionStorage.nbp7;
        }
        function sult(value) {
            var value;
            var x1;
            var x2;
            var x3;
            var x4;
            var x5;
            var tp;
            var nbp;
            x1 = document.getElementById('change1').value * 2;
            x2 = document.getElementById('change2').value * 11.57;
            x3 = document.getElementById('change3').value * 7.49;
            x4 = document.getElementById('change4').value * 1.20;
            x5 = document.getElementById('change5').value * 3.99;
            tp = (parseFloat(x1) + parseFloat(x2) + parseFloat(x3) + parseFloat(x4) + parseFloat(x5)).toFixed(2);
            nbp = parseInt(document.getElementById('change1').value) + parseInt(document.getElementById('change2').value) + parseInt(document.getElementById('change3').value) + parseInt(document.getElementById('change4').value)
                + parseInt(document.getElementById('change5').value);
            sessionStorage.nbp7 = nbp;
            sessionStorage.tp = tp;
            sessionStorage.value5 = value;
            document.getElementById('change5').value = sessionStorage.value5;
            document.getElementById('totalPrice').innerHTML = sessionStorage.tp;
            document.getElementById('nbp7').innerHTML = sessionStorage.nbp7;
        }
        let count;
        //Defining a listener for our button, specifically, an onclick handler
        // function productadd() {
        //     //First things first, we need our text:
        //     var text = document.getElementById("idea").value; //.value gets input values

        //     if (text == "") {
        //         alert("Please enter the product name");
        //     }
        //     else{
        //         let product = document.getElementById('idea').value;
        //         let list = document.getElementById('list');
        //         list.innerHTML += '<li>'+product+' <input type="number" min="0" max="5" id="change'+count+'" onchange="jult(this.value)"  placeholder=1 /> <button onclick="adreitem'+count+'()"> Change Quantity </button> </li>';
        //         alert(text + " is added to order.");}
        window.onload = function () {
            if (sessionStorage.tp === undefined)
                sessionStorage.tp = 78.66;
            if (sessionStorage.value1 === undefined)
                sessionStorage.value1 = 2;
            if (sessionStorage.value2 === undefined)
                sessionStorage.value2 = 3;
            if (sessionStorage.value3 ===undefined)
                sessionStorage.value3 = 4;
            if (sessionStorage.value4 ===undefined)
                sessionStorage.value4 = 5;
            if (sessionStorage.value5 ===undefined)
                sessionStorage.value5 = 1;
            if (sessionStorage.nbp7 ===undefined)
                sessionStorage.nbp7 = 15;
            if(sessionStorage.count>6){
            if (sessionStorage.value6 !=undefined)
               { document.getElementById('change6').innerHTML = sessionStorage.value6;
                sessionStorage.nbp7 = parseInt(document.getElementById('nbp7').value) + parseInt(document.getElementById('change6').value);
            }
            if (sessionStorage.value7 !=undefined)
                { document.getElementById('chnage7').innerHTML = sessionStorage.value7;
                sessionStorage.nbp7 = parseInt(document.getElementById('nbp7').value) + parseInt(document.getElementById('change7').value);}
            if (sessionStorage.value8 !=undefined)
                {document.getElementById('change8').innerHTML = sessionStorage.value8;
                sessionStorage.nbp7 = parseInt(document.getElementById('nbp7').value) + parseInt(document.getElementById('change8').value);}
            if (sessionStorage.value9 !=undefined)
               { document.getElementById('change9').innerHTML = sessionStorage.value9;
                sessionStorage.nbp7 = parseInt(document.getElementById('nbp7').value) + parseInt(document.getElementById('change9').value);}
            }
            document.getElementById('change5').innerHTML = sessionStorage.value5;
            document.getElementById('change4').innerHTML = sessionStorage.value4;
            document.getElementById('change3').innerHTML = sessionStorage.value3;
            document.getElementById('change2').innerHTML= sessionStorage.value2;
            document.getElementById('change1').innerHTML = sessionStorage.value1;
            document.getElementById('totalPrice').innerHTML = sessionStorage.tp;
            document.getElementById('nbp7').innerHTML = sessionStorage.nbp7;
            if(sessionStorage.list1 != undefined)
            {
                let list = document.getElementById('list');
                list.innerHTML += sessionStorage.list1;
            }
            if(sessionStorage.list2 != undefined)
            {
                let list = document.getElementById('list');
                list.innerHTML += sessionStorage.list1 +sessionStorage.list2;
            }
            if(sessionStorage.list3 != undefined)
            {
                let list = document.getElementById('list');
                list.innerHTML += sessionStorage.list1 +sessionStorage.list2+sessionStorage.list3;
            }
            if(sessionStorage.list4 != undefined)
            {
                let list = document.getElementById('list');
                list.innerHTML += sessionStorage.list1 +sessionStorage.list2+sessionStorage.list3+sessionStorage.list4;
            }
            $_SESSION["nbp7"] = sessionStorage.nbp7;
        }
        function adreitem1() {
            var num = document.getElementById("change1").value;
            if (num == 0) {
                //     var td = event.target.parentNode; 
                //   var tr = td.parentNode; // the row to be removed
                //   tr.parentNode.removeChild(tr);
                alert("Please enter the quantity!")
            }
            else
                alert(num + " products are added to your order");
        }
        function adreitem2() {
            var num = document.getElementById("change2").value;
            if (num == 0) {
                //     var td = event.target.parentNode; 
                //   var tr = td.parentNode; // the row to be removed
                //   tr.parentNode.removeChild(tr);
                alert("Please enter the quantity!")
            }
            else
                alert(num + " products are added to your order.");
        }
        function adreitem3() {
            var num = document.getElementById("change3").value;
            if (num == 0) {
                //     var td = event.target.parentNode; 
                //   var tr = td.parentNode; // the row to be removed
                //   tr.parentNode.removeChild(tr);
                alert("Please enter the quantity!")
            }
            else
                alert(num + " products are added to your order.");
        }
        function adreitem4() {
            var num = document.getElementById("change4").value;
            if (num == 0) {
                //     var td = event.target.parentNode; 
                //   var tr = td.parentNode; // the row to be removed
                //   tr.parentNode.removeChild(tr);
                alert("Please enter the quantity!")
            }
            else
                alert(num + " products are added to your order.");
        }
        function adreitem5() {
            var num = document.getElementById("change5").value;
            if (num == 0) {
                alert("Please enter the quantity!");
                // alert("This is removed from the order!")
            }
            else
                alert(num + " products are added to your order.");
        }
        function productadd() {
            //First things first, we need our text:
            var text = document.getElementById("idea").value; //.value gets input values
            var quan = document.getElementById('quan').value;
            if (text == "") {
                alert("Please enter the product name");
            }
            else if(quan==undefined)
            {
                alert("Please enter the product quantity");
            }
            else{
                let product = document.getElementById('idea').value;
                let quan = document.getElementById('quan').value;
                let list = document.getElementById('list');
                list.innerHTML += ' <tr> <td>'+ product +'</td> <td><b id="change'+ count +'" onchange="tult(this.value)"  disabled = "disabled">'+ quan +' </b> </td> </tr>';
                if (sessionStorage.count==6)
                {
                    var x;
                    var tp;
                    tp = sessionStorage.nbp7;
                    x = quan;
                    tp = parseInt(tp) + parseInt(x);
                    sessionStorage.nbp7 = parseInt(tp); 
                    sessionStorage.x6 = parseInt(x);
                    sessionStorage.list1 = ' <tr> <td>'+ product +'</td> <td><b id="change'+ count +'" onchange="tult(this.value)"  disabled = "disabled">'+ quan +' </b> </td> </tr>';
                    document.getElementById('change6').value = sessionStorage.x6;
                    document.getElementById('nbp7').innerHTML = sessionStorage.nbp7;
                }
                if (sessionStorage.count==7)
                {
                    var x;
                    var tp;
                    tp = sessionStorage.nbp7.value;
                    x = quan;
                    tp = parseInt(tp) + parseInt(x);
                    sessionStorage.nbp7 = parseInt(tp); 
                    sessionStorage.x7 = parseInt(x);
                    sessionStorage.list2 = ' <tr> <td>'+ product +'</td> <td><b id="change'+ count +'" onchange="tult(this.value)"  disabled = "disabled">'+ quan +' </b> </td> </tr>';
                    document.getElementById('change7').value = sessionStorage.x7;
                    document.getElementById('nbp7').innerHTML = sessionStorage.nbp7;
                }
                if (sessionStorage.count==8)
                {
                    var x;
                    var tp;
                    tp = sessionStorage.nbp7.value;
                    x = quan;
                    tp = parseInt(tp) + parseInt(x);
                    sessionStorage.nbp7 = parseInt(tp); 
                    sessionStorage.x8 = parseInt(x);
                    sessionStorage.list3 = ' <tr> <td>'+ product +'</td> <td><b id="change'+ count +'" onchange="tult(this.value)"  disabled = "disabled">'+ quan +' </b> </td> </tr>';
                    document.getElementById('change8').value = sessionStorage.x8;
                    document.getElementById('nbp7').innerHTML = sessionStorage.nbp7;
                }
                if (sessionStorage.count==9)
                {
                    var x;
                    var tp;
                    tp = sessionStorage.nbp7.value;
                    x = document.getElementById('change9').value;
                    tp = parseInt(tp) + parseInt(x);
                    sessionStorage.nbp7 = parseInt(tp); 
                    sessionStorage.x9 = parseInt(x);
                    sessionStorage.list4 = ' <tr> <td>'+ product +'</td> <td><b id="change'+ count +'" onchange="tult(this.value)"  disabled = "disabled">'+ quan +' </b> </td> </tr>';
                    document.getElementById('change9').value = sessionStorage.x9;
                    document.getElementById('nbp7').innerHTML = sessionStorage.nbp7;
                }
               var countt=  sessionStorage.count;
               countt++;
               sessionStorage.count = countt;
                alert(text + " is added to order.");
            }
        }
    </script>
    <link rel="icon"
        href="https://www.freelogoservices.com/api/main/images/1j+ojVVCOMkX9Wyrexe4hGfWzKHR8khU7lyYlGYyKXQY41NunTZx36Zm...f49Kh4H5FUOlVFRK4d43Sl6V4IThRph...zeEL9odBCA3k3VBFOQG">
    <title>Organo Freshista</title>

</head>

<body>
    <header> Organo Freshista </header>
    <main>
        <nav>
            <ul>
                <a href="index.html">
                    <li>HOME</li>
                </a>
                <a href="p9.html">
                    <li> MANAGE ACCOUNTS</li>
                </a>
                <a href="p11.php">
                    <li> BACK</li>
                </a>
            </ul>
        </nav>
        <form action="p11.php" method="POST">

            <span>Order List</span>
            <table id="list">
                <tr>
                    <th>Product</th>
                    <th>Quantity</th>
                </tr>
                <tr>
                    <td>Apple </td>
                    <td><b id="change1" onchange="mult(this.value)"
                        disabled = "disabled"> </b>
                    </td>
                </tr>
                <tr>
                    <td>Beef </td>
                    <td><b id="change2" onchange="vult(this.value)"
                        disabled = "disabled"> </b>
                    </td>
                </tr>
                <tr>
                    <td>Milk </td>
                    <td><b id="change3" onchange="bult(this.value)"
                        disabled = "disabled"> </b>
                    </td>
                </tr>
                <tr>
                    <td>Orange </td>
                    <td><b id="change4" onchange="tult(this.value)"
                        disabled = "disabled"> </b>
                    </td>
                </tr>
                <tr>
                    <td>Bagels </td>
                    <td><b id="change5" onchange="mult(this.value)"
                        disabled = "disabled"> </b>
                    </td>
                </tr>
            </table>
                <label for="tp">Total Price $</label>
                <span id="totalPrice" name="tp">0.00</span> <sub><b>+tax</b></sub><br />
                <label for="nbp">Number of Products</label>
                <span id="nbp7" name="productnb">0</span>
           <div> <input type="text" id="idea" placeholder="Product name" /> <input type="number" min=0 id = "quan" size="3"/><input type="button" value="Add Product" id="add"
                onclick="productadd()" ><br /> </div>
            <button type="submit" id="save" onclick="confirm('Would you like to save your changes?')"> Save </button>
        </form>
    </main>
</body>

</html>