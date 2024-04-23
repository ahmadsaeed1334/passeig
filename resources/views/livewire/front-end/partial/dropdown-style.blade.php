<style>
    .icons{
        margin-left: -20px;
    }
    .icons > li {
    position: relative;
    display: inline-block;
    margin: 0;
    padding: 0 15px;
    /* margin-left: -43px */
		/* background-color:#333; */
    /* background-image: -moz-linear-gradient(90deg, rgb(232, 42, 122) 0%, rgb(54, 3, 84) 100%);
    background-image: -webkit-linear-gradient(90deg, rgb(232, 42, 122) 0%, rgb(54, 3, 84) 100%);
    background-image: -ms-linear-gradient(90deg, rgb(232, 42, 122) 0%, rgb(54, 3, 84) 100%); */
}

.icons > li > a {
    display: block;
    color: #fff;
    font-weight: lighter;
    font-size: 14px;
    text-transform: uppercase;
    text-decoration: none;
    border-bottom: 2px solid transparent;
    -webkit-transition: all .3s ease;
    -moz-transition: all .3s ease;
    -ms-transition: all .3s ease;
    -o-transition: all .3s ease;
    transition: all .3s ease;
		line-height:45px;
}

.icons > li > ul {
    position: absolute;
    left: 10px;
    opacity: 0;
    min-width: 200px;
    margin: 0;
    pointer-events: none;
    z-index: 999;
	/* Adding a transition timing on here will cause mouse out bugs after hover! */
    background-image: -moz-linear-gradient(7deg, rgb(236, 19, 121) 0%, rgb(108, 0, 146) 100%);
    background-image: -webkit-linear-gradient(7deg, rgb(236, 19, 121) 0%, rgb(108, 0, 146) 100%);
    background-image: -ms-linear-gradient(7deg, rgb(236, 19, 121) 0%, rgb(108, 0, 146) 100%)
}

  .icons > li > ul > li {
    padding: 0;
		
    float: left;
    display: block;
		width:100%;
        color: white;
}

.icons > li > ul > li > a {
    border-bottom: 0;
    display: block;
    padding: 0 5px;
    color: #fff;
    width: 100%;
    padding: 0 5%;
	text-transform:none;
}

/* Fade = no need for animations - just timing effects... */

.ddFade {
	 -webkit-transition: all 0.5s ease-in-out;
    -moz-transition: all 0.5s ease-in-out;
    -ms-transition: all 0.5s ease-in-out;
    -o-transition: all 0.5s ease-in-out;
    transition: all 0.5s ease-in-out;
}

.ddFadeFast {
	 -webkit-transition: all 0.3s ease-in-out;
    -moz-transition: all 0.3s ease-in-out;
    -ms-transition: all 0.3s ease-in-out;
    -o-transition: all 0.3s ease-in-out;
    transition: all 0.3s ease-in-out;
}

.ddFadeSlow {
	 -webkit-transition: all 1s ease-in-out;
    -moz-transition: all 1s ease-in-out;
    -ms-transition: all 1s ease-in-out;
    -o-transition: all 1s ease-in-out;
    transition: all 1s ease-in-out;
}

/* General Animation settings */
  .icons > li > ul {
	opacity:0;
	display:block;
	perspective:1000px;
	min-width:inherit;
	width:200px;
}



li:hover ul.hov {
	animation-duration: 0.3s;
	animation-delay 0.3s;
}

li:hover ul.hov li {
		animation-direction: normal;
		animation-iteration-count:1;
		animation-timing-function : ease-in-out;
		background:#333;
		animation-fill-mode: forwards;
}




/* sort all the overing, going on... */
 .icons li:hover a { 
	/* color: #999; */
}
  .icons > li:hover ul {
		opacity:1;
		top:24px;
		pointer-events: auto;
	}
  .icons > li > ul .ico:hover, 
  .icons > li > ul a:hover { background-color: rgba(0,0,0,0.3); }
  .icons > li:hover ul { top :45px; }

/* A non image based mobile menu and close button */
#hamburger {
    display: none;
    width: 25px;
    height: 24px;
    position: fixed;
    right: 15px;
    top: 15px;
    cursor: pointer;
}

#hamburger > span {
    background: #fff;
    display: block;
    width: 100%;
    height: 3px;
    position: relative;
    margin-top: 3px;
    color: #fff;
			-webkit-transition:all .3s ease;
		-moz-transition:all .3s ease;
		-ms-transition:all .3s ease;
		-o-transition:all .3s ease;
		transition:all .3s ease;
}

#close {
    position: fixed;
    top: 10px;
    right: 13px;
    width: 30px;
    height: 30px;
    z-index: 1200;
    display: none;
    cursor: pointer;
}

#close > span, #close > span::after {
    content: "";
    display: block;
    width: 4px;
    height: 100%;
    background: #eee;
    position: absolute;
    left: 50%;
    margin-left: -3px;
    -webkit-transform: rotate(45deg);
    -moz-transform: rotate(45deg);
    -ms-transform: rotate(45deg);
    -o-transform: rotate(45deg);
    transform: rotate(45deg);
}
#close > span::after {
	-webkit-transform: rotate(-90deg);
	-moz-transform: rotate(-90deg);
	-ms-transform: rotate(-90deg);
	-o-transform: rotate(-90deg);
	transform: rotate(-90deg);
}
#close:hover > span,
#close:hover > span::after { background: #ccc; }
#hamburger:hover > span,
#hamburger:hover > span::after,
#hamburger:hover > span::before {
	background: rgba(250,250,250,0.5);
}



    </style>
