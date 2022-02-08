<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&family=Fuggles&display=swap"
        rel="stylesheet">
    <script>
        function dosomething(int) {
            switch(int){
                case 1 : window.location.href = "p12.php";
                break;
                case 2 : window.location.href = "2p12.php"; break;
                case 3 : window.location.href = "3p12.php"; break;
                case 4 : window.location.href = "4p12.php"; break; 
                case 5 : window.location.href = "5p12.php"; break;
                case 6 : window.location.href = "6p12.php"; break;
                case 7 : window.location.href = "7p12.php"; break;
            }
        }

        function delet(o) {
            var conf = confirm("This order will be canceled and will not be recovered..")
            if (conf) {     // event.target will be the input element.
                //   var td = event.target.parentNode; 
                //   var tr = td.parentNode; // the row to be removed
                var p = o.parentNode.parentNode;
                p.parentNode.removeChild(p);
            }
        }
        function addacc(){
            window.location.href = "addp12.php";
        }
        window.onload =function () {
            if( sessionStorage.nbp == undefined)
            sessionStorage.nbp = 15;
            document.getElementById('nbp').innerHTML = sessionStorage.nbp;
            if( sessionStorage.nbp2 == undefined)
            sessionStorage.nbp2 = 15;
            document.getElementById('nbp2').innerHTML = sessionStorage.nbp2;
            if( sessionStorage.nbp3 == undefined)
            sessionStorage.nbp3 = 15;
            document.getElementById('nbp3').innerHTML = sessionStorage.nbp3;
            if( sessionStorage.nbp4 == undefined)
            sessionStorage.nbp4 = 15;
            document.getElementById('nbp4').innerHTML = sessionStorage.nbp4;
            if( sessionStorage.nbp5 == undefined)
            sessionStorage.nbp5 = 15;
            document.getElementById('nbp5').innerHTML = sessionStorage.nbp5;
            if( sessionStorage.nbp6 == undefined)
            sessionStorage.nbp6 = 15;
            document.getElementById('nbp6').innerHTML = sessionStorage.nbp6;
            if( sessionStorage.nbp7 == undefined)
            sessionStorage.nbp7 = 15;
            document.getElementById('nbp7').innerHTML = sessionStorage.nbp7;
        }
        
        sessionStorage.count=6;
    </script>
    <style>
        * {
            margin: 0px;
            padding: 0px;
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


        span {
            font-size: 1.5em;
            font-weight: bold;
            color: rgb(3, 0, 44);
        }

        body {
            /* background-image: url(https://images.unsplash.com/photo-1513612254505-fb553147a2e8?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MjV8fHN0cmF3YmVycnl8ZW58MHx8MHx8&auto=format&fit=crop&w=500&q=60); */
            background-size: 1600px 800px;
            background-color: #99d0d0a1;
        }

        button {
            border-radius: 10px;
            padding: 5px;
            cursor: pointer;
            /* background-color: rgb(3, 0, 44); */
            color: white;
        }

        img.icon {
            height: 21px;
        }

        #edit {
            height: 21px;
            color: white;
            /* background-color: rgb(4,5,6); */
        }
        #add{
            font-size: 1em;
        }
    </style>
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
                <!-- <a href="backstoreP11.html">
                    <li> BACK</li>
                </a> -->
            </ul>
        </nav>
        <form>
            <table border=1 cellpadding="2">
                <tr>
                    <th>Name</th>
                    <th>E-mail </th>
                    <th>Number of Products</th>
                    <!-- <th>Type</th>
                <th>Phone#</th> -->

                </tr>
                <tr>
                    <td>Vraj Patel</td>
                    <td>vraj.patel@xyz.com</td>
                    <td>
                    <span id = "nbp">0 </span>
                    </td>
                    <!-- <td>customer</td>
                <td>514 768 2349</td> -->
                    <td><button type="button" onclick="dosomething(1)"><img class="icon"
                                src="https://image.flaticon.com/icons/png/512/483/483923.png" alt="edit"
                                onclick="dosomething()"></button></td>
                    <td><button type="button" onclick="delet(this)"><img class="icon"
                                src="https://image.flaticon.com/icons/png/128/812/812853.png" alt="delete"></button>
                    </td>
                    <td>
                        <button type="button" onclick="addacc()"><img class = "icon" id = "add" 
                            src ="https://image.flaticon.com/icons/png/128/4443/4443009.png"></button>
                    </td>
                </tr>
                <tr>
                    <td>Sanyam Kadd</td>
                    <td>sanyam.kadd@xyz.com</td>
                    <td><span id = "nbp2">0 </span></td>
                    <!-- <td>employee</td>
                <td>514 632 6351</td> -->
                    <td><button type="button" onclick="dosomething(2)"><img class="icon"
                                src="https://image.flaticon.com/icons/png/512/483/483923.png" alt="edit"
                                onclick="dosomething()"></button></td>
                    <td><button type="button" onclick="delet(this)"><img class="icon"
                                src="https://image.flaticon.com/icons/png/128/812/812853.png" alt="delete"></button>
                    </td>
                    <td>
                        <button type="button" onclick="addacc()"><img class = "icon" id = "add" 
                            src ="https://image.flaticon.com/icons/png/128/4443/4443009.png"></button>
                    </td>
                </tr>
                <tr>
                    <td>Ghazaleh Mojbafan</td>
                    <td>Ghazaleh.mojabafan@xyz.com</td>
                    <td><span id = "nbp3">0 </span></td>
                    <!-- <td>customer</td>
                <td>514 384 2349</td> -->
                    <td><button type="button" onclick="dosomething(3)"><img class="icon" id="edit"
                                src="https://image.flaticon.com/icons/png/512/483/483923.png" alt="edit"
                                onclick="dosomething()"></button></td>
                    <td><button type="button" onclick="delet(this)"><img class="icon"
                                src="https://image.flaticon.com/icons/png/128/812/812853.png" alt="delete"></button>
                    </td>
                    <td>
                        <button type="button" onclick="addacc()"><img class = "icon" id = "add" 
                            src ="https://image.flaticon.com/icons/png/128/4443/4443009.png"></button>
                    </td>
                </tr>
                <tr>
                    <td>Gulnoor Kaur</td>
                    <td>gulnoor.kaur@xyz.com</td>
                    <td><span id = "nbp4">0 </span></td>
                    <!-- <td>customer</td>
                <td>514 234 6396</td> -->
                    <td><button type="button" onclick="dosomething(4)"><img class="icon" id="edit"
                                src="https://image.flaticon.com/icons/png/512/483/483923.png" alt="edit"
                                onclick="dosomething()"></button></td>
                    <td><button type="button" onclick="delet(this)"><img class="icon"
                                src="https://image.flaticon.com/icons/png/128/812/812853.png" alt="delete"></button>
                    </td>
                    <td>
                        <button type="button" onclick="addacc()"><img class = "icon" id = "add" 
                            src ="https://image.flaticon.com/icons/png/128/4443/4443009.png"></button>
                    </td>
                </tr>
                <tr>
                    <td>Smit Desai</td>
                    <td>smit.desai@gmail.com</td>
                    <td><span id = "nbp5">0 </span></td>
                    <!-- <td>employee</td>
                <td>514 975 3569</td> -->
                    <td><button type="button" onclick="dosomething(5)"><img class="icon" id="edit"
                                src="https://image.flaticon.com/icons/png/512/483/483923.png" alt="edit"></button></td>
                    <td><button type="button" onclick="delet(this)"><img class="icon"
                                src="https://image.flaticon.com/icons/png/128/812/812853.png" alt="delete"></button>
                    </td>
                    <td>
                        <button type="button" onclick="addacc()"><img class = "icon" id = "add" 
                            src ="https://image.flaticon.com/icons/png/128/4443/4443009.png"></button>
                    </td>
                </tr>
                <tr>
                    <td>Kevin Patel</td>
                    <td>kevinp97@gmail.com</td>
                    <td><span id = "nbp6">0 </span></td>
                    <!-- <td>employee</td>
                <td>514 975 3569</td> -->
                    <td><button type="button" onclick="dosomething(6)"><img class="icon" id="edit"
                                src="https://image.flaticon.com/icons/png/512/483/483923.png" alt="edit"></button></td>
                    <td><button type="button" onclick="delet(this)"><img class="icon"
                                src="https://image.flaticon.com/icons/png/128/812/812853.png" alt="delete"></button>
                    </td>
                    <td>
                        <button type="button" onclick="addacc()"><img class = "icon" id = "add" 
                            src ="https://image.flaticon.com/icons/png/128/4443/4443009.png"></button>
                    </td>
                </tr>
                <tr>
                    <td>Luv Soni</td>
                    <td>luv.sl1@gmail.com</td>
                    <td><span id="nbp7"><b>0</b></span></td>
                    <!-- <td>employee</td>
                <td>514 975 3569</td> -->
                    <td><button type="button" onclick="dosomething(7)"><img class="icon" id="edit"
                                src="https://image.flaticon.com/icons/png/512/483/483923.png" alt="edit"></button></td>
                    <td><button type="button" onclick="delet(this)"><img class="icon"
                                src="https://image.flaticon.com/icons/png/128/812/812853.png" alt="delete"></button>
                    </td>
                    <td>
                        <button type="button" onclick="addacc()"><img class = "icon" id = "add" 
                            src ="https://image.flaticon.com/icons/png/128/4443/4443009.png"></button>
                    </td>
                </tr>
                <!-- <tr>
                    <td>Samir Trivedi</td>
                    <td>samir@gmail.com</td>
                    <td><span id="nb6"><b>15</b></span></td>
                    <!-- <td>employee</td>
                <td>514 975 3569</td> -->
                    <!-- <td><button type="button" onclick="dosomething()"><img class="icon" id="edit"
                                src="https://image.flaticon.com/icons/png/512/483/483923.png" alt="edit"></button></td>
                    <td><button type="button" onclick="delet(this)"><img class="icon"
                                src="https://image.flaticon.com/icons/png/128/812/812853.png" alt="delete"></button>
                    </td>
                    <td>
                        <button type="button" onclick="addacc()"><img class = "icon" id = "add" 
                            src ="https://image.flaticon.com/icons/png/128/4443/4443009.png"></button>
                    </td> -->
                <!-- </tr>
                <tr>
                    <td>Srived</td>
                    <td>srived@gmail.com</td>
                    <td><span id="nb5"><b>15</b></span></td>
                    <!-- <td>employee</td>
                <td>514 975 3569</td> -->
                    <!-- <td><button type="button" onclick="dosomething()"><img class="icon" id="edit"
                                src="https://image.flaticon.com/icons/png/512/483/483923.png" alt="edit"></button></td>
                    <td><button type="button" onclick="delet(this)"><img class="icon"
                                src="https://image.flaticon.com/icons/png/128/812/812853.png" alt="delete"></button>
                    </td>
                    <td> --> 
                        <!-- <button type="button" onclick="addacc()"><img class = "icon" id = "add" 
                            src ="https://image.flaticon.com/icons/png/128/4443/4443009.png"></button>
                    </td>
                </tr>

                <tr>
                    <td>Smit Desai</td> -->
                    <!-- <td>smit.desai@gmail.com</td>
                    <td><span id="nb4"><b>15</b></span></td>
                    <!-- <td>employee</td>
                <td>514 975 3569</td> --> 
                    <!-- <td><button type="button" onclick="dosomething()"><img class="icon" id="edit"
                                src="https://image.flaticon.com/icons/png/512/483/483923.png" alt="edit"></button></td>
                    <td><button type="button" onclick="delet(this)"><img class="icon"
                                src="https://image.flaticon.com/icons/png/128/812/812853.png" alt="delete"></button>
                    </td>
                    <td>
                        <button type="button" onclick="addacc()"><img class = "icon" id = "add" 
                            src ="https://image.flaticon.com/icons/png/128/4443/4443009.png"></button>
                    </td> -->
                <!-- </tr>
                <tr>
                    <td>Meet</td>
                    <td>meet@gmail.com</td>
                    <td><span id="nb3"><b>15</b></span></td>
                    <!-- <td>employee</td>
                <td>514 975 3569</td> -->
                    <!-- <td><button type="button" onclick="dosomething()"><img class="icon" id="edit"
                                src="https://image.flaticon.com/icons/png/512/483/483923.png" alt="edit"></button></td>
                    <td><button type="button" onclick="delet(this)"><img class="icon"
                                src="https://image.flaticon.com/icons/png/128/812/812853.png" alt="delete"></button>
                    </td>
                    <td>
                        <button type="button" onclick="addacc()"><img class = "icon" id = "add"  -->
                            <!-- src ="https://image.flaticon.com/icons/png/128/4443/4443009.png"></button> -->
                    <!-- </td>
                </tr>
                <tr>
                    <td>Bravo</td>
                    <td>bravo98@gmail.com</td>
                    <td><span id="nb2"><b>15</b></span></td>
                    <!-- <td>employee</td>
                <!-- <td>514 975 3569</td> --> 
                    <!-- <td><button type="button" onclick="dosomething()"><img class="icon" id="edit"
                                src="https://image.flaticon.com/icons/png/512/483/483923.png" alt="edit"></button></td>
                    <td><button type="button" onclick="delet(this)"><img class="icon"
                                src="https://image.flaticon.com/icons/png/128/812/812853.png" alt="delete"></button> -->
                    <!-- </td>
                    <td> -->
                        <!-- <button type="button" onclick="addacc()"><img class = "icon" id = "add" 
                            src ="https://image.flaticon.com/icons/png/128/4443/4443009.png"></button>
                    </td> --> 
                <!-- </tr> -->
                <!-- <tr id="mike">
                    <td>Mike</td>
                    <td>mike12@gmail.com</td>
                    <td>
                    <b id = "nbp">0 </b>
                    </td> -->
                    <!-- <td>employee</td> -->
                <!-- <td>514 975 3569</td> -->
                    <!-- <td><button type="button" onclick="dosomething()"><img class="icon" id="edit" -->
                                <!-- src="https://image.flaticon.com/icons/png/512/483/483923.png" alt="edit"></button></td>
                    <td><button type="button" onclick="delet(this)"><img class="icon"
                                src="https://image.flaticon.com/icons/png/128/812/812853.png" alt="delete"></button>
                    <!-- </td> --> 
                    <!-- <td> -->
                        <!-- <button type="button" onclick="addacc()"><img class = "icon" id = "add" 
                            src ="https://image.flaticon.com/icons/png/128/4443/4443009.png"></button>
                    </td> --> 
                <!-- </tr> -->
            </table>
            <!-- <button type="button" onclick="dosomething()">Add items</button>
        <button type="button" onclick="dosomething()">Delet items</button>
        <button type="button" onclick="dosomething()">Edit order</button> -->
        </form>
        </div>

    </main>
</body>

</html>