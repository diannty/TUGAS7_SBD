/* import google font */
@import
url('https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&display=swap');
@import
url('https://fonts.googleapis.com/css2?family=Open+Sans+Condensed:ital,wght@0,300;0,700;1,300&display=swap');

/* Reset CSS */
* {
    margin: 0;
    padding: 0;
}
body {
    line-height:1;
    font-size:100%;
    font-family:'Open Sans', sans-serif;
    color:#000000;
}
#container {
    width: 980px;
    margin: 0 auto;
    box-shadow: 0 0 1em #00b1be;
}

/* header */
header {
    padding: 20px;
}
header h1 {
    margin: 20px 10px;
    color: #000000;
}

/* navigasi */
nav {
    display: block;
    background-color: #13b1d8;
}
nav a {
    padding: 15px 30px;
    display: inline-block;
    color: #ffffff;
    font-size: 14px;
    text-decoration: none;
    font-weight: bold;
}
nav a.active,
nav a:hover {
    background-color: #14d8e6;
}

/* Content Panel */
.content {
    background-color: #d4d4d4;
    padding: 50px 20px;
    margin-bottom: 20px;
}
.content h1 {
    margin-bottom: 20px;
    font-size: 35px;
}
.content p {
    margin-bottom: 20px;
    font-size: 18px;
    line-height: 25px;
}

/* footer */
footer {
    clear:both;
    background-color:#1d1d1d;
    padding:20px;
    color:#eee;
}

/* tabel */
body{
    font-family: sans-serif;
}
table{
    border-collapse: collapse;
}
th, td{
    border: 1px solid rgb(0, 0, 0);
    font-size: 16px;
    padding: 7px 9px;
}
table th {
    background:#b84224;
    color:#ffffff;
    font-weight:bold;
    font-size:14px;
}
table tr:nth-child(even) {
    background:#F0F8FF;
}

/* Tambah Barang */
.input{
    padding: 5px;
}
.card-img-top{
	width: 120px;
	align-self: center;
}

footer {
    clear:both;
	background-color:#1d1d1d; 
	padding:20px;
	color:#eee;
}
/* Hero Panel */ 
#hero { 
    background-color: #e4e4e5; 
    padding: 50px 20px; 
    margin-bottom: 20px; 
} 
#hero h1 { 
    margin-bottom: 20px; 
    font-size: 35px; 
} 
#hero p {
     margin-bottom: 20px; 
     font-size: 18px; 
     line-height: 25px; 
}
/* main content */ 
#wrapper {
     margin: 0; 
}
#main {
     float: left; 
     width: 640px; 
     padding: 20px; 
}
/*introduce panel*/
#introduce {
    background-color: #e4e4e5;
    padding: 50px 20px;
    margin-bottom: 20px;
}
#introduce h1{
    margin-bottom: 10px;
    font-size: 35px;
    position: relative;
    left: 15px;
}
#introduce p {
    margin-bottom: 20px;
    font-size: 15px;
    padding: 30px;
    line-height: 25px;
    position: relative;
    left: 15px;
}
/* Contact Panel */
#kontak{
    background-color: #e4e4e5;
    padding: 20px 20px;
    margin-bottom: 20px;
}
.input,
.msg, .area{
    width: 100%;
    padding: 10px;
    border: 2px solid white;
    box-sizing: border-box;
    font-size: 15px;
    margin-bottom: 20px;
}
button{
    font-size: 14px;
    background-color: #3f3f3f;
    color: white;
    border-radius: 5px;
    padding: 10px 20px;
    margin-top: 8x;
}
#kontak button.active,
#kontak button:hover{
    background: #6e6e6e;
}
/* navigasi */
nav {
    display: block;
    background-color: #A52A2A;
   }
   nav a {
    padding: 15px 30px;
    display: inline-block;
    color: #ffffff;
    font-size: 14px;
    text-decoration: none;
    font-weight: bold;
   }
   nav a.active,
   nav a:hover {
    background-color: #A52A2A;
   }
   </style>