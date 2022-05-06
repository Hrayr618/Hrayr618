<?php
header('Content-type: text/css; charset:UTF-8');
?>
*{
	margin: 0;
	padding: 0;
	box-sizing: border-box;

}
footer {
	position: absolute;
	height: 400px;
	width: 100%;
	background-color: #262B2A;
}
form *{
	outline: none;
}
form *:focus{
	box-shadow: 0 0 30px #7a956b;
}
body > footer > div > form > input[type=text]:nth-child(1){
	position: absolute;
	margin-left: 100px;
	height: 35px;
	width: 350px;
	border-radius: 7px;
}
body > footer > div > form > input[type=email]:nth-child(4){
	position: absolute;
	margin-left: 100px;
	height: 35px;
	width: 350px;
	border-radius: 7px;
	margin-top: 30px;
}
body > footer > div > form > input[type=password]:nth-child(8){
	position: absolute;
	margin-left: 100px;
	height: 35px;
	width: 350px;
	border-radius: 7px;
	margin-top: 40px;
}
body > footer > div > form > div:nth-child(12){
	position: absolute;
	margin-left: 100px;
	margin-top: 40px;
}
body > footer > div > form > div:nth-child(13){
	position: absolute;
	margin-left: 100px;
	margin-top: 60px;
}
.male{
	position: absolute;
	color: whitesmoke;
}
.famale{
	position: absolute;
	color: whitesmoke;
}
#send{
	height: 37px;
	width: 350px;
	position: absolute;
	margin-left: 100px;
	margin-top: 80px;
	border-radius: 15px;
	align-items: center;
	color: white;
	background-color: #7a956b;
	box-shadow: 0 2px 0 #221D1D;
	letter-spacing: 2px;
	cursor: pointer;
	text-transform: uppercase;
	font-size: 0.7em;

}
#send:hover{
	background-color: #55644D;
	transition: all 0.4s ease-in-out;
}
#send:active{
	top: 228px;
}

.name_error{
	position: absolute;
	color: red;
	margin-left: 100px;
	margin-top: 105px;
}
.email_error{
	position: absolute;
	color: red;
	margin-left: 100px;
	margin-top: 155px;
}
.pass_error{
	position: absolute;
	color: red;
	margin-left: 100px;
	margin-top: 200px;
}
.text_area{
	position: absolute;
	margin-left: 500px;
	top: 50px;
	margin-top: 40px;
	border-radius: 7px;
}
.male_error{
	position: absolute;
	color: red;
	margin-left: 200px;
	margin-top: 200px;
}

