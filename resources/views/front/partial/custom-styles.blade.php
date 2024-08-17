<style>
	.br-10 {
		border-radius: 10px !important;
	}

	.animated-button1 {
		-webkit-transform: translate(0%, 0%);
		transform: translate(0%, 0%);
		overflow: hidden;
		-webkit-box-shadow: 0 20px 50px rgba(0, 0, 0, 0.5);
		box-shadow: 0 20px 50px rgba(0, 0, 0, 0.5);
	}

	.animated-button1::before {
		content: '';
		position: absolute;
		top: 0px;
		left: 0px;
		width: 100%;
		height: 100%;
		background-color: #ad8585;
		opacity: 0;
		-webkit-transition: .2s opacity ease-in-out;
		transition: .2s opacity ease-in-out;
	}

	.animated-button1:hover::before {
		opacity: 0.2;
	}

	.animated-button1 span {
		position: absolute;
	}

	.animated-button1 span:nth-child(1) {
		top: 0px;
		left: 0px;
		width: 100%;
		height: 2px;
		background: -webkit-gradient(linear, right top, left top, from(rgba(43, 8, 8, 0)), to(#2B697E));
		background: linear-gradient(to left, rgba(43, 8, 8, 0), #2B697E);
		-webkit-animation: 2s animateTop linear infinite;
		animation: 2s animateTop linear infinite;
	}

	@keyframes animateTop {
		0% {
			-webkit-transform: translateX(100%);
			transform: translateX(100%);
		}

		100% {
			-webkit-transform: translateX(-100%);
			transform: translateX(-100%);
		}
	}

	.animated-button1 span:nth-child(2) {
		top: 0px;
		right: 0px;
		height: 100%;
		width: 2px;
		background: -webkit-gradient(linear, left bottom, left top, from(rgba(43, 8, 8, 0)), to(#2a7d99));
		background: linear-gradient(to top, rgba(43, 8, 8, 0), #2a7d99);
		-webkit-animation: 2s animateRight linear -1s infinite;
		animation: 2s animateRight linear -1s infinite;
	}

	@keyframes animateRight {
		0% {
			-webkit-transform: translateY(100%);
			transform: translateY(100%);
		}

		100% {
			-webkit-transform: translateY(-100%);
			transform: translateY(-100%);
		}
	}

	.animated-button1 span:nth-child(3) {
		bottom: 0px;
		left: 0px;
		width: 100%;
		height: 2px;
		background: -webkit-gradient(linear, left top, right top, from(rgba(43, 8, 8, 0)), to(#2B697E));
		background: linear-gradient(to right, rgba(43, 8, 8, 0), #2B697E);
		-webkit-animation: 2s animateBottom linear infinite;
		animation: 2s animateBottom linear infinite;
	}

	@keyframes animateBottom {
		0% {
			-webkit-transform: translateX(-100%);
			transform: translateX(-100%);
		}

		100% {
			-webkit-transform: translateX(100%);
			transform: translateX(100%);
		}
	}

	.animated-button1 span:nth-child(4) {
		top: 0px;
		left: 0px;
		height: 100%;
		width: 2px;
		background: -webkit-gradient(linear, left top, left bottom, from(rgba(43, 8, 8, 0)), to(#2B697E));
		background: linear-gradient(to bottom, rgba(43, 8, 8, 0), #2B697E);
		-webkit-animation: 2s animateLeft linear -1s infinite;
		animation: 2s animateLeft linear -1s infinite;
	}

	@keyframes animateLeft {
		0% {
			-webkit-transform: translateY(-100%);
			transform: translateY(-100%);
		}

		100% {
			-webkit-transform: translateY(100%);
			transform: translateY(100%);
		}
	}

	/* @import url(https://fonts.googleapis.com/css?family=Nova+Mono); */






	#button {
		width: 100px;
		height: 40px;
		background: #6959ff;
		/* margin: 100px auto; */
		z-index: 1;
		overflow: hidden;
		border: 1px solid #606060;
		border-radius: 10px;
		box-shadow: 0px 2px 1px rgba(0, 0, 0, 0.3);



	}






	#second {
		color: whitesmoke !important;
		width: 100px;
		height: 40px;
		background: linear-gradient(#645242, #645242);
		background: -webkit-linear-gradient(#645242, #645242);
		-webkit-transform: translatex(-310px) skew(0deg);
		-moz-transform: translatex(-310px) skew(0deg);
		-ms-transform: translatex(-310px) skew(0deg);
		-o-transform: translatex(-310px) skew(0deg);
		transform: translatex(-310px) skew(0deg);
		text-align: center;
		line-height: 70px;
		z-index: 3;
		position: relative;
		border-radius: 10px;
		box-shadow: inset 0px 2px 1px rgba(255, 255, 255, 0.5);
		-webkit-animation: removesecond 1s reverse;





	}


	#first {
		color: whitesmoke !important;
		width: 100px;
		height: 70px;
		background: linear-gradient(#225260, #225260);
		background: -webkit-linear-gradient(#225260, #225260);
		position: relative;
		top: -55px;
		text-align: center;
		line-height: 70px;
		z-index: 2;
		border-radius: 10px;
		box-shadow: inset 0px 2px 1px rgba(255, 255, 255, 0.5);
	}

	#first a {
		color: whitesmoke !important;
	}


	#second a {
		color: whitesmoke !important;
		display: block;
		top: -15px;
		position: relative;
	}



	#button:hover #second {
		-webkit-animation: movesecond 1s forwards;
		-moz-animation: movesecond 1s forwards;
		-ms-animation: movesecond 1s forwards;
		-o-animation: movesecond 1s forwards;
		animation: movesecond 1s forwards;
	}



	#Third {
		width: 100px;
		height: 40px;
		background: linear-gradient(#9944ff, #7a22e5);
		background: -webkit-linear-gradient(#9944ff, #7a22e5);
		border-radius: 10px;
		-webkit-transform: translateY(10px);
		-moz-transform: translateY(10px);
		-ms-transform: translateY(10px);
		-o-transform: translateY(10px);
		transform: translateY(10px);
		box-shadow: inset 0px 2px 1px rgba(255, 255, 255, 0.5);

	}

	#second:active #Third {
		-webkit-animation: moveThird 1s forwards;
		-moz-animation: moveThird 1s forwards;
		-ms-animation: moveThird 1s forwards;
		-o-animation: moveThird 1s forwards;
		animation: moveThird 1s forwards;
	}








	@-webkit-keyframes removesecond {
		0% {
			-webkit-transform: translateX(-320px) skew(0deg);
		}

		20% {
			-webkit-transform: translateX(50px) skew(-20deg);
		}

		40% {
			-webkit-transform: translateX(-50dpx) skew(20deg);
		}

		60% {
			-webkit-transform: translateX(25dpx) skew(-8deg);
		}

		80% {
			-webkit-transform: translateX(-15px) skew(8deg);
		}

		100% {
			-webkit-transform: translateX(0px) skew(0deg);
		}
	}

	@-webkit-keyframes movesecond {
		0% {
			-webkit-transform: translateX(-320px) skew(0deg);
		}

		20% {
			-webkit-transform: translateX(50px) skew(-20deg);
		}

		40% {
			-webkit-transform: translateX(-50dpx) skew(20deg);
		}

		60% {
			-webkit-transform: translateX(25dpx) skew(-8deg);
		}

		80% {
			-webkit-transform: translateX(-15px) skew(8deg);
		}

		100% {
			-webkit-transform: translateX(0px) skew(0deg);
		}
	}

	@-moz-keyframes movesecond {
		0% {
			-webkit-transform: translateX(-320px) skew(0deg);
		}

		20% {
			-webkit-transform: translateX(50px) skew(-20deg);
		}

		40% {
			-webkit-transform: translateX(-50dpx) skew(20deg);
		}

		60% {
			-webkit-transform: translateX(25dpx) skew(-8deg);
		}

		80% {
			-webkit-transform: translateX(-15px) skew(8deg);
		}

		100% {
			-webkit-transform: translateX(0px) skew(0deg);
		}
	}

	@-ms-keyframes movesecond {
		0% {
			-webkit-transform: translateX(-320px) skew(0deg);
		}

		20% {
			-webkit-transform: translateX(50px) skew(-20deg);
		}

		40% {
			-webkit-transform: translateX(-50dpx) skew(20deg);
		}

		60% {
			-webkit-transform: translateX(25dpx) skew(-8deg);
		}

		80% {
			-webkit-transform: translateX(-15px) skew(8deg);
		}

		100% {
			-webkit-transform: translateX(0px) skew(0deg);
		}
	}

	@-o-keyframes movesecond {
		0% {
			-webkit-transform: translateX(-320px) skew(0deg);
		}

		20% {
			-webkit-transform: translateX(50px) skew(-20deg);
		}

		40% {
			-webkit-transform: translateX(-50dpx) skew(20deg);
		}

		60% {
			-webkit-transform: translateX(25dpx) skew(-8deg);
		}

		80% {
			-webkit-transform: translateX(-15px) skew(8deg);
		}

		100% {
			-webkit-transform: translateX(0px) skew(0deg);
		}
	}

	@keyframes movesecond {
		0% {
			-webkit-transform: translateX(-320px) skew(0deg);
		}

		20% {
			-webkit-transform: translateX(50px) skew(-20deg);
		}

		40% {
			-webkit-transform: translateX(-50dpx) skew(20deg);
		}

		60% {
			-webkit-transform: translateX(25dpx) skew(-8deg);
		}

		80% {
			-webkit-transform: translateX(-15px) skew(8deg);
		}

		100% {
			-webkit-transform: translateX(0px) skew(0deg);
		}
	}



	/* This animation for third button ( that's it purple)*/

	@-webkit-keyframes moveThird {
		0% {
			-webkit-transform: translateY(10px);
		}

		20% {
			-webkit-transform: translateY(-170px);
		}

		40% {
			-webkit-transform: translateY(50dpx);
		}

		60% {
			-webkit-transform: translateY(-25dpx);
		}

		80% {
			-webkit-transform: translateY(15px);
		}

		100% {
			-webkit-transform: translateY(-70px);
		}
	}

	@-moz-keyframes moveThird {
		0% {
			-webkit-transform: translateY(10px);
		}

		20% {
			-webkit-transform: translateY(-170px);
		}

		40% {
			-webkit-transform: translateY(50dpx);
		}

		60% {
			-webkit-transform: translateY(-25dpx);
		}

		80% {
			-webkit-transform: translateY(15px);
		}

		100% {
			-webkit-transform: translateY(-70px);
		}
	}

	@-ms-keyframes moveThird {
		0% {
			-webkit-transform: translateY(10px);
		}

		20% {
			-webkit-transform: translateY(-170px);
		}

		40% {
			-webkit-transform: translateY(50dpx);
		}

		60% {
			-webkit-transform: translateY(-25dpx);
		}

		80% {
			-webkit-transform: translateY(15px);
		}

		100% {
			-webkit-transform: translateY(-70px);
		}
	}

	@-o-keyframes moveThird {
		0% {
			-webkit-transform: translateY(10px);
		}

		20% {
			-webkit-transform: translateY(-170px);
		}

		40% {
			-webkit-transform: translateY(50dpx);
		}

		60% {
			-webkit-transform: translateY(-25dpx);
		}

		80% {
			-webkit-transform: translateY(15px);
		}

		100% {
			-webkit-transform: translateY(-70px);
		}
	}

	@keyframes moveThird {
		0% {
			-webkit-transform: translateY(10px);
		}

		20% {
			-webkit-transform: translateY(-170px);
		}

		40% {
			-webkit-transform: translateY(50dpx);
		}

		60% {
			-webkit-transform: translateY(-25dpx);
		}

		80% {
			-webkit-transform: translateY(-95px);
		}

		100% {
			-webkit-transform: translateY(-70px);
		}
	}

	body {
		cursor: none;
	}
</style>
<style>
	svg {
		position: absolute;
		top: -4000px;
		left: -4000px;
	}

	#gooey-button {
		padding: 1rem;
		font-size: 2rem;
		border: none;
		color: whitesmoke;
		filter: url("#gooey");
		position: relative;
		background-color: #225260;
	}

	#gooey-button:focus {
		outline: none;
	}

	#gooey-button .bubbles {
		position: absolute;
		top: 0;
		left: 0;
		bottom: 0;
		right: 0;
	}

	#gooey-button .bubbles .bubble {
		background-color: #225260;
		border-radius: 100%;
		position: absolute;
		top: 0;
		left: 0;
		display: block;
		z-index: -1;
	}

	#gooey-button .bubbles .bubble:nth-child(1) {
		left: 94px;
		width: 25px;
		height: 25px;
		-webkit-animation: move-1 3.02s infinite;
		animation: move-1 3.02s infinite;
		-webkit-animation-delay: 0.2s;
		animation-delay: 0.2s;
	}

	#gooey-button .bubbles .bubble:nth-child(2) {
		left: 31px;
		width: 25px;
		height: 25px;
		-webkit-animation: move-2 3.04s infinite;
		animation: move-2 3.04s infinite;
		-webkit-animation-delay: 0.4s;
		animation-delay: 0.4s;
	}

	#gooey-button .bubbles .bubble:nth-child(3) {
		left: 80px;
		width: 25px;
		height: 25px;
		-webkit-animation: move-3 3.06s infinite;
		animation: move-3 3.06s infinite;
		-webkit-animation-delay: 0.6s;
		animation-delay: 0.6s;
	}

	#gooey-button .bubbles .bubble:nth-child(4) {
		left: 25px;
		width: 25px;
		height: 25px;
		-webkit-animation: move-4 3.08s infinite;
		animation: move-4 3.08s infinite;
		-webkit-animation-delay: 0.8s;
		animation-delay: 0.8s;
	}

	#gooey-button .bubbles .bubble:nth-child(5) {
		left: 21px;
		width: 25px;
		height: 25px;
		-webkit-animation: move-5 3.1s infinite;
		animation: move-5 3.1s infinite;
		-webkit-animation-delay: 1s;
		animation-delay: 1s;
	}

	#gooey-button .bubbles .bubble:nth-child(6) {
		left: 54px;
		width: 25px;
		height: 25px;
		-webkit-animation: move-6 3.12s infinite;
		animation: move-6 3.12s infinite;
		-webkit-animation-delay: 1.2s;
		animation-delay: 1.2s;
	}

	#gooey-button .bubbles .bubble:nth-child(7) {
		left: 90px;
		width: 25px;
		height: 25px;
		-webkit-animation: move-7 3.14s infinite;
		animation: move-7 3.14s infinite;
		-webkit-animation-delay: 1.4s;
		animation-delay: 1.4s;
	}

	#gooey-button .bubbles .bubble:nth-child(8) {
		left: 24px;
		width: 25px;
		height: 25px;
		-webkit-animation: move-8 3.16s infinite;
		animation: move-8 3.16s infinite;
		-webkit-animation-delay: 1.6s;
		animation-delay: 1.6s;
	}

	#gooey-button .bubbles .bubble:nth-child(9) {
		left: 63px;
		width: 25px;
		height: 25px;
		-webkit-animation: move-9 3.18s infinite;
		animation: move-9 3.18s infinite;
		-webkit-animation-delay: 1.8s;
		animation-delay: 1.8s;
	}

	#gooey-button .bubbles .bubble:nth-child(10) {
		left: 66px;
		width: 25px;
		height: 25px;
		-webkit-animation: move-10 3.2s infinite;
		animation: move-10 3.2s infinite;
		-webkit-animation-delay: 2s;
		animation-delay: 2s;
	}


	@-webkit-keyframes move-1 {
		0% {
			transform: translate(0, 0);
		}

		99% {
			transform: translate(0, -121px);
		}

		100% {
			transform: translate(0, 0);
			opacity: 0;
		}
	}

	@keyframes move-1 {
		0% {
			transform: translate(0, 0);
		}

		99% {
			transform: translate(0, -121px);
		}

		100% {
			transform: translate(0, 0);
			opacity: 0;
		}
	}

	@-webkit-keyframes move-2 {
		0% {
			transform: translate(0, 0);
		}

		99% {
			transform: translate(0, -81px);
		}

		100% {
			transform: translate(0, 0);
			opacity: 0;
		}
	}

	@keyframes move-2 {
		0% {
			transform: translate(0, 0);
		}

		99% {
			transform: translate(0, -81px);
		}

		100% {
			transform: translate(0, 0);
			opacity: 0;
		}
	}

	@-webkit-keyframes move-3 {
		0% {
			transform: translate(0, 0);
		}

		99% {
			transform: translate(0, -51px);
		}

		100% {
			transform: translate(0, 0);
			opacity: 0;
		}
	}

	@keyframes move-3 {
		0% {
			transform: translate(0, 0);
		}

		99% {
			transform: translate(0, -51px);
		}

		100% {
			transform: translate(0, 0);
			opacity: 0;
		}
	}

	@-webkit-keyframes move-4 {
		0% {
			transform: translate(0, 0);
		}

		99% {
			transform: translate(0, -127px);
		}

		100% {
			transform: translate(0, 0);
			opacity: 0;
		}
	}

	@keyframes move-4 {
		0% {
			transform: translate(0, 0);
		}

		99% {
			transform: translate(0, -127px);
		}

		100% {
			transform: translate(0, 0);
			opacity: 0;
		}
	}

	@-webkit-keyframes move-5 {
		0% {
			transform: translate(0, 0);
		}

		99% {
			transform: translate(0, -52px);
		}

		100% {
			transform: translate(0, 0);
			opacity: 0;
		}
	}

	@keyframes move-5 {
		0% {
			transform: translate(0, 0);
		}

		99% {
			transform: translate(0, -52px);
		}

		100% {
			transform: translate(0, 0);
			opacity: 0;
		}
	}

	@-webkit-keyframes move-6 {
		0% {
			transform: translate(0, 0);
		}

		99% {
			transform: translate(0, -78px);
		}

		100% {
			transform: translate(0, 0);
			opacity: 0;
		}
	}

	@keyframes move-6 {
		0% {
			transform: translate(0, 0);
		}

		99% {
			transform: translate(0, -78px);
		}

		100% {
			transform: translate(0, 0);
			opacity: 0;
		}
	}

	@-webkit-keyframes move-7 {
		0% {
			transform: translate(0, 0);
		}

		99% {
			transform: translate(0, -106px);
		}

		100% {
			transform: translate(0, 0);
			opacity: 0;
		}
	}

	@keyframes move-7 {
		0% {
			transform: translate(0, 0);
		}

		99% {
			transform: translate(0, -106px);
		}

		100% {
			transform: translate(0, 0);
			opacity: 0;
		}
	}

	@-webkit-keyframes move-8 {
		0% {
			transform: translate(0, 0);
		}

		99% {
			transform: translate(0, -59px);
		}

		100% {
			transform: translate(0, 0);
			opacity: 0;
		}
	}

	@keyframes move-8 {
		0% {
			transform: translate(0, 0);
		}

		99% {
			transform: translate(0, -59px);
		}

		100% {
			transform: translate(0, 0);
			opacity: 0;
		}
	}

	@-webkit-keyframes move-9 {
		0% {
			transform: translate(0, 0);
		}

		99% {
			transform: translate(0, -60px);
		}

		100% {
			transform: translate(0, 0);
			opacity: 0;
		}
	}

	@keyframes move-9 {
		0% {
			transform: translate(0, 0);
		}

		99% {
			transform: translate(0, -60px);
		}

		100% {
			transform: translate(0, 0);
			opacity: 0;
		}
	}

	@-webkit-keyframes move-10 {
		0% {
			transform: translate(0, 0);
		}

		99% {
			transform: translate(0, -117px);
		}

		100% {
			transform: translate(0, 0);
			opacity: 0;
		}
	}

	@keyframes move-10 {
		0% {
			transform: translate(0, 0);
		}

		99% {
			transform: translate(0, -117px);
		}

		100% {
			transform: translate(0, 0);
			opacity: 0;
		}
	}
</style>

<style>
	.fab-wrapper {
		position: fixed;
		bottom: 3rem;
		right: 3rem;
	}

	.fab-checkbox {
		display: none;
	}

	.fab {
		position: absolute;
		bottom: -1rem;
		right: -1rem;
		width: 4rem;
		height: 4rem;
		background: blue;
		border-radius: 50%;
		background: #126ee2;
		box-shadow: 0px 5px 20px #81a4f1;
		transition: all 0.3s ease;
		z-index: 1;
		border-bottom-right-radius: 6px;
		border: 1px solid #0c50a7;
	}

	.fab:before {
		content: "";
		position: absolute;
		width: 100%;
		height: 100%;
		left: 0;
		top: 0;
		border-radius: 50%;
		background-color: rgba(255, 255, 255, 0.1);
	}

	.fab-checkbox:checked~.fab:before {
		width: 90%;
		height: 90%;
		left: 5%;
		top: 5%;
		background-color: rgba(255, 255, 255, 0.2);
	}

	.fab:hover {
		background: #2c87e8;
		box-shadow: 0px 5px 20px 5px #81a4f1;
	}

	.fab-dots {
		position: absolute;
		height: 8px;
		width: 8px;
		background-color: white;
		border-radius: 50%;
		top: 50%;
		transform: translateX(0%) translateY(-50%) rotate(0deg);
		opacity: 1;
		animation: blink 3s ease infinite;
		transition: all 0.3s ease;
	}

	.fab-dots-1 {
		left: 15px;
		animation-delay: 0s;
	}

	.fab-dots-2 {
		left: 50%;
		transform: translateX(-50%) translateY(-50%);
		animation-delay: 0.4s;
	}

	.fab-dots-3 {
		right: 15px;
		animation-delay: 0.8s;
	}

	.fab-checkbox:checked~.fab .fab-dots {
		height: 6px;
	}

	.fab .fab-dots-2 {
		transform: translateX(-50%) translateY(-50%) rotate(0deg);
	}

	.fab-checkbox:checked~.fab .fab-dots-1 {
		width: 32px;
		border-radius: 10px;
		left: 50%;
		transform: translateX(-50%) translateY(-50%) rotate(45deg);
	}

	.fab-checkbox:checked~.fab .fab-dots-3 {
		width: 32px;
		border-radius: 10px;
		right: 50%;
		transform: translateX(50%) translateY(-50%) rotate(-45deg);
	}

	@keyframes blink {
		50% {
			opacity: 0.25;
		}
	}

	.fab-checkbox:checked~.fab .fab-dots {
		animation: none;
	}

	.fab-wheel {
		position: absolute;
		bottom: 0;
		right: 0;
		border: 1px solid #;
		width: 10rem;
		height: 10rem;
		transition: all 0.3s ease;
		transform-origin: bottom right;
		transform: scale(0);
	}

	.fab-checkbox:checked~.fab-wheel {
		transform: scale(1);
	}

	.fab-action {
		position: absolute;
		background: #0f1941;
		width: 3rem;
		height: 3rem;
		border-radius: 50%;
		display: flex;
		align-items: center;
		justify-content: center;
		color: White;
		box-shadow: 0 0.1rem 1rem rgba(24, 66, 154, 0.82);
		transition: all 1s ease;

		opacity: 0;
	}

	.fab-checkbox:checked~.fab-wheel .fab-action {
		opacity: 1;
	}

	.fab-action:hover {
		background-color: #f16100;
	}

	.fab-wheel .fab-action-1 {
		right: -1rem;
		top: 0;
	}

	.fab-wheel .fab-action-2 {
		right: 3.4rem;
		top: 0.5rem;
	}

	.fab-wheel .fab-action-3 {
		left: 0.5rem;
		bottom: 3.4rem;
	}

	.fab-wheel .fab-action-4 {
		left: 0;
		bottom: -1rem;
	}
</style>

<style>
	.button {
		position: relative;
		background: transparent !important;
		color: #fff;
		text-decoration: none;
		text-transform: uppercase;
		border: none;
		letter-spacing: 0.1rem;
		font-size: 1rem;
		padding: 1rem 3rem;
		transition: 0.2s;
		border-radius: 10px;
	}

	.button:hover {
		letter-spacing: 0.2rem;
		padding: 1.1rem 3.1rem;
		background: var(--clr);
		color: var(--clr);
		/* box-shadow: 0 0 35px var(--clr); */
		animation: box 3s infinite;
	}

	.button::before {
		content: "";
		position: absolute;
		inset: 2px;
		background: transparent;
	}

	.button span {
		position: relative;
		z-index: 1;
	}

	.button i {
		position: absolute;
		inset: 0;
		display: block;
	}

	.button i::before {
		content: "";
		position: absolute;
		width: 10px;
		height: 2px;
		left: 80%;
		top: -2px;
		border: 2px solid var(--clr);
		background: #272822;
		transition: 0.2s;
	}

	.button:hover i::before {
		width: 15px;
		left: 20%;
		animation: move 3s infinite;
	}

	.button i::after {
		content: "";
		position: absolute;
		width: 10px;
		height: 2px;
		left: 20%;
		bottom: -2px;
		border: 2px solid var(--clr);
		background: #272822;
		transition: 0.2s;
	}

	.button:hover i::after {
		width: 15px;
		left: 80%;
		animation: move 3s infinite;
	}

	@keyframes move {
		0% {
			transform: translateX(0);
		}

		50% {
			transform: translateX(5px);
		}

		100% {
			transform: translateX(0);
		}
	}

	@keyframes box {
		0% {
			box-shadow: #27272c;
		}

		50% {
			box-shadow: 0 0 25px var(--clr);
		}

		100% {
			box-shadow: #27272c;
		}
	}
</style>
<style>

</style>
