<style type="text/css">
html{
	scroll-behavior: smooth;
}	
	*{
	margin: 0;
	padding: 0;
	box-sizing: border-box;
	font-family: 'Muli', sans-serif;
}

nav{
	background-color:#a29bfe;
}
nav a{
	color:#fff;
}

.main-header{
	heght:450px;
	width:100%;
}
 .right-center img {
 	height: 10%;
 	width: 10%;

 }
.rotate img{
	animation: gocorona 3s linear infinite;
}

@keyframes gocorona{
	0%{
		transform:rotate(0);
		transform:rotate(360deg)
	}
}

.left-center img{
	animation:unity 5s linear infinite;
}
 @keyframes unity{
 	0%{transform: scale(.75);}
 	20%{transform:scale(1);}
 	40%{transform:scale(.75);}
 	60%{transform:scale(1);}
 	80%{transform:scale(.75);}
 	100%{transform:scale(.75);}
 }

 .corona_update h3{
 	color:#ff7675;
 }
.about{
	background-color:#6c757d17;
	padding-left:2%;
}
 .symptoms img{
 	height:80%;
 	width:50%;
 	padding-bottom: :10%;
 }
  .ways{
  	padding-bottom: 5%;
  	text-align:center;
  }
 .prevention{
 	background-color: #6c757d17;
 }
 .footer_style{
 	background-color: #a29bfe!important;
 }
 .footer_style p{
 	margin-bottom: 0!important;
 }
#myBTN{
	
	position:fixed;
	bottom:30px;
	right:40px;
	z-index:99;
	border:none;
	outline:none;
	background-color: #00A8FF;
	color:white;
	padding:10px
	border-radius:10px;
}

#myBTN:hover{
	background:#606060;
}
</style>