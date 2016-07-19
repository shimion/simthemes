<?php
class ST_Laizy_loader extends ST_core{
	
	public function __construct(){
	add_action('start_body', array($this, 'call_body_loader'), '99');
		}

	public function call_body_loader(){
		$l_icon_color = (ot_get_option('l_icon_color')) ? ot_get_option('l_icon_color') : '#CCC';
		$show_lazy_loader = (ot_get_option('show_lazy_loader')) ? ot_get_option('show_lazy_loader') : 'on';
		if($show_lazy_loader== 'on'){
			$lazy_loader_design = (ot_get_option('lazy_loader')) ? ot_get_option('lazy_loader') : 'star';
			if($lazy_loader_design === 'atom'){
			echo '
			<div class="add_loading"><div class="cssload-loader">
							<div class="cssload-inner cssload-one"></div>
							<div class="cssload-inner cssload-two"></div>
							<div class="cssload-inner cssload-three"></div>
						</div>
					</div>
					<style>
					.cssload-loader {
	top: 45%;					
	position: relative;
	left: calc(50% - 31px);
	width: 62px;
	height: 62px;
	border-radius: 50%;
		-o-border-radius: 50%;
		-ms-border-radius: 50%;
		-webkit-border-radius: 50%;
		-moz-border-radius: 50%;
	perspective: 780px;
}

.cssload-inner {
	position: absolute;
	width: 100%;
	height: 100%;
	box-sizing: border-box;
		-o-box-sizing: border-box;
		-ms-box-sizing: border-box;
		-webkit-box-sizing: border-box;
		-moz-box-sizing: border-box;
	border-radius: 50%;
		-o-border-radius: 50%;
		-ms-border-radius: 50%;
		-webkit-border-radius: 50%;
		-moz-border-radius: 50%;	
}

.cssload-inner.cssload-one {
	left: 0%;
	top: 0%;
	animation: cssload-rotate-one 1.15s linear infinite;
		-o-animation: cssload-rotate-one 1.15s linear infinite;
		-ms-animation: cssload-rotate-one 1.15s linear infinite;
		-webkit-animation: cssload-rotate-one 1.15s linear infinite;
		-moz-animation: cssload-rotate-one 1.15s linear infinite;
	border-bottom: 3px solid rgb(0,0,0);
}

.cssload-inner.cssload-two {
	right: 0%;
	top: 0%;
	animation: cssload-rotate-two 1.15s linear infinite;
		-o-animation: cssload-rotate-two 1.15s linear infinite;
		-ms-animation: cssload-rotate-two 1.15s linear infinite;
		-webkit-animation: cssload-rotate-two 1.15s linear infinite;
		-moz-animation: cssload-rotate-two 1.15s linear infinite;
	border-right: 3px solid rgb(0,0,0);
}

.cssload-inner.cssload-three {
	right: 0%;
	bottom: 0%;
	animation: cssload-rotate-three 1.15s linear infinite;
		-o-animation: cssload-rotate-three 1.15s linear infinite;
		-ms-animation: cssload-rotate-three 1.15s linear infinite;
		-webkit-animation: cssload-rotate-three 1.15s linear infinite;
		-moz-animation: cssload-rotate-three 1.15s linear infinite;
	border-top: 3px solid rgb(0,0,0);
}







@keyframes cssload-rotate-one {
	0% {
		transform: rotateX(35deg) rotateY(-45deg) rotateZ(0deg);
	}
	100% {
		transform: rotateX(35deg) rotateY(-45deg) rotateZ(360deg);
	}
}

@-o-keyframes cssload-rotate-one {
	0% {
		-o-transform: rotateX(35deg) rotateY(-45deg) rotateZ(0deg);
	}
	100% {
		-o-transform: rotateX(35deg) rotateY(-45deg) rotateZ(360deg);
	}
}

@-ms-keyframes cssload-rotate-one {
	0% {
		-ms-transform: rotateX(35deg) rotateY(-45deg) rotateZ(0deg);
	}
	100% {
		-ms-transform: rotateX(35deg) rotateY(-45deg) rotateZ(360deg);
	}
}

@-webkit-keyframes cssload-rotate-one {
	0% {
		-webkit-transform: rotateX(35deg) rotateY(-45deg) rotateZ(0deg);
	}
	100% {
		-webkit-transform: rotateX(35deg) rotateY(-45deg) rotateZ(360deg);
	}
}

@-moz-keyframes cssload-rotate-one {
	0% {
		-moz-transform: rotateX(35deg) rotateY(-45deg) rotateZ(0deg);
	}
	100% {
		-moz-transform: rotateX(35deg) rotateY(-45deg) rotateZ(360deg);
	}
}

@keyframes cssload-rotate-two {
	0% {
		transform: rotateX(50deg) rotateY(10deg) rotateZ(0deg);
	}
	100% {
		transform: rotateX(50deg) rotateY(10deg) rotateZ(360deg);
	}
}

@-o-keyframes cssload-rotate-two {
	0% {
		-o-transform: rotateX(50deg) rotateY(10deg) rotateZ(0deg);
	}
	100% {
		-o-transform: rotateX(50deg) rotateY(10deg) rotateZ(360deg);
	}
}

@-ms-keyframes cssload-rotate-two {
	0% {
		-ms-transform: rotateX(50deg) rotateY(10deg) rotateZ(0deg);
	}
	100% {
		-ms-transform: rotateX(50deg) rotateY(10deg) rotateZ(360deg);
	}
}

@-webkit-keyframes cssload-rotate-two {
	0% {
		-webkit-transform: rotateX(50deg) rotateY(10deg) rotateZ(0deg);
	}
	100% {
		-webkit-transform: rotateX(50deg) rotateY(10deg) rotateZ(360deg);
	}
}

@-moz-keyframes cssload-rotate-two {
	0% {
		-moz-transform: rotateX(50deg) rotateY(10deg) rotateZ(0deg);
	}
	100% {
		-moz-transform: rotateX(50deg) rotateY(10deg) rotateZ(360deg);
	}
}

@keyframes cssload-rotate-three {
	0% {
		transform: rotateX(35deg) rotateY(55deg) rotateZ(0deg);
	}
	100% {
		transform: rotateX(35deg) rotateY(55deg) rotateZ(360deg);
	}
}

@-o-keyframes cssload-rotate-three {
	0% {
		-o-transform: rotateX(35deg) rotateY(55deg) rotateZ(0deg);
	}
	100% {
		-o-transform: rotateX(35deg) rotateY(55deg) rotateZ(360deg);
	}
}

@-ms-keyframes cssload-rotate-three {
	0% {
		-ms-transform: rotateX(35deg) rotateY(55deg) rotateZ(0deg);
	}
	100% {
		-ms-transform: rotateX(35deg) rotateY(55deg) rotateZ(360deg);
	}
}

@-webkit-keyframes cssload-rotate-three {
	0% {
		-webkit-transform: rotateX(35deg) rotateY(55deg) rotateZ(0deg);
	}
	100% {
		-webkit-transform: rotateX(35deg) rotateY(55deg) rotateZ(360deg);
	}
}

@-moz-keyframes cssload-rotate-three {
	0% {
		-moz-transform: rotateX(35deg) rotateY(55deg) rotateZ(0deg);
	}
	100% {
		-moz-transform: rotateX(35deg) rotateY(55deg) rotateZ(360deg);
	}
}
					</style>
					
					';
					
			}elseif($lazy_loader_design === 'spiral'){
			
			echo '<div class="add_loading"><div class="overlay-loader">
						<div class="loader">
							<div></div>
							<div></div>
							<div></div>
							<div></div>
							<div></div>
							<div></div>
							<div></div>
						</div>
					</div></div>
					<style>.overlay-loader {
	display: block;
	margin: auto;
	width: 97px;
	height: 97px;
	position: relative;
	top: 0;
	left: 0;
	right: 0;
	bottom: 0;
}
.loader {
	position: absolute;
	top: 0;
	left: 0;
	right: 0;
	bottom: 0;
	margin: auto;
	width: 97px;
	height: 97px;
	animation-name: rotateAnim;
		-o-animation-name: rotateAnim;
		-ms-animation-name: rotateAnim;
		-webkit-animation-name: rotateAnim;
		-moz-animation-name: rotateAnim;
	animation-duration: 0.4s;
		-o-animation-duration: 0.4s;
		-ms-animation-duration: 0.4s;
		-webkit-animation-duration: 0.4s;
		-moz-animation-duration: 0.4s;
	animation-iteration-count: infinite;
		-o-animation-iteration-count: infinite;
		-ms-animation-iteration-count: infinite;
		-webkit-animation-iteration-count: infinite;
		-moz-animation-iteration-count: infinite;
	animation-timing-function: linear;
		-o-animation-timing-function: linear;
		-ms-animation-timing-function: linear;
		-webkit-animation-timing-function: linear;
		-moz-animation-timing-function: linear;
}
.loader div {
	width: 8px;
	height: 8px;
	border-radius: 50%;
	border: 1px solid rgb(0,0,0);
	position: absolute;
	top: 2px;
	left: 0;
	right: 0;
	bottom: 0;
	margin: auto;
}
.loader div:nth-child(odd) {
	border-top: none;
	border-left: none;
}
.loader div:nth-child(even) {
	border-bottom: none;
	border-right: none;
}
.loader div:nth-child(2) {
	border-width: 2px;
	left: 0px;
	top: -4px;
	width: 12px;
	height: 12px;
}
.loader div:nth-child(3) {
	border-width: 2px;
	left: -1px;
	top: 3px;
	width: 18px;
	height: 18px;
}
.loader div:nth-child(4) {
	border-width: 3px;
	left: -1px;
	top: -4px;
	width: 23px;
	height: 23px;
}
.loader div:nth-child(5) {
	border-width: 3px;
	left: -1px;
	top: 4px;
	width: 31px;
	height: 31px;
}
.loader div:nth-child(6) {
	border-width: 4px;
	left: 0px;
	top: -4px;
	width: 39px;
	height: 39px;
}
.loader div:nth-child(7) {
	border-width: 4px;
	left: 0px;
	top: 6px;
	width: 49px;
	height: 49px;
}


@keyframes rotateAnim {
	from {
		transform: rotate(360deg);
	}
	to {
		transform: rotate(0deg);
	}
}

@-o-keyframes rotateAnim {
	from {
		-o-transform: rotate(360deg);
	}
	to {
		-o-transform: rotate(0deg);
	}
}

@-ms-keyframes rotateAnim {
	from {
		-ms-transform: rotate(360deg);
	}
	to {
		-ms-transform: rotate(0deg);
	}
}

@-webkit-keyframes rotateAnim {
	from {
		-webkit-transform: rotate(360deg);
	}
	to {
		-webkit-transform: rotate(0deg);
	}
}

@-moz-keyframes rotateAnim {
	from {
		-moz-transform: rotate(360deg);
	}
	to {
		-moz-transform: rotate(0deg);
	}
}</style>
					
					';



			}elseif($lazy_loader_design === 'spiral'){
			
			echo '<div class="add_loading"></div>
					<style>
					
					
					
					</style>
					
					';


			}elseif($lazy_loader_design === 'fountain'){
			
			echo '<div class="add_loading">
			<div id="fountainG">
	<div id="fountainG_1" class="fountainG"></div>
	<div id="fountainG_2" class="fountainG"></div>
	<div id="fountainG_3" class="fountainG"></div>
	<div id="fountainG_4" class="fountainG"></div>
	<div id="fountainG_5" class="fountainG"></div>
	<div id="fountainG_6" class="fountainG"></div>
	<div id="fountainG_7" class="fountainG"></div>
	<div id="fountainG_8" class="fountainG"></div>
</div>
			</div>
					<style>
					
					#fountainG{
	position:relative;
	width:234px;
	height:28px;
	margin:auto;
	top: 45%;
}

.fountainG{
	position:absolute;
	top:0;
	//background-color:'.$l_icon_color.';
	width:28px;
	height:28px;
	
	animation-name:bounce_fountainG;
		-o-animation-name:bounce_fountainG;
		-ms-animation-name:bounce_fountainG;
		-webkit-animation-name:bounce_fountainG;
		-moz-animation-name:bounce_fountainG;
	animation-duration:1.5s;
		-o-animation-duration:1.5s;
		-ms-animation-duration:1.5s;
		-webkit-animation-duration:1.5s;
		-moz-animation-duration:1.5s;
	animation-iteration-count:infinite;
		-o-animation-iteration-count:infinite;
		-ms-animation-iteration-count:infinite;
		-webkit-animation-iteration-count:infinite;
		-moz-animation-iteration-count:infinite;
	animation-direction:normal;
		-o-animation-direction:normal;
		-ms-animation-direction:normal;
		-webkit-animation-direction:normal;
		-moz-animation-direction:normal;
	transform:scale(.3);
		-o-transform:scale(.3);
		-ms-transform:scale(.3);
		-webkit-transform:scale(.3);
		-moz-transform:scale(.3);
	border-radius:19px;
		-o-border-radius:19px;
		-ms-border-radius:19px;
		-webkit-border-radius:19px;
		-moz-border-radius:19px;
}

#fountainG_1{
	left:0;
	animation-delay:0.6s;
		-o-animation-delay:0.6s;
		-ms-animation-delay:0.6s;
		-webkit-animation-delay:0.6s;
		-moz-animation-delay:0.6s;
}

#fountainG_2{
	left:29px;
	animation-delay:0.75s;
		-o-animation-delay:0.75s;
		-ms-animation-delay:0.75s;
		-webkit-animation-delay:0.75s;
		-moz-animation-delay:0.75s;
}

#fountainG_3{
	left:58px;
	animation-delay:0.9s;
		-o-animation-delay:0.9s;
		-ms-animation-delay:0.9s;
		-webkit-animation-delay:0.9s;
		-moz-animation-delay:0.9s;
}

#fountainG_4{
	left:88px;
	animation-delay:1.05s;
		-o-animation-delay:1.05s;
		-ms-animation-delay:1.05s;
		-webkit-animation-delay:1.05s;
		-moz-animation-delay:1.05s;
}

#fountainG_5{
	left:117px;
	animation-delay:1.2s;
		-o-animation-delay:1.2s;
		-ms-animation-delay:1.2s;
		-webkit-animation-delay:1.2s;
		-moz-animation-delay:1.2s;
}

#fountainG_6{
	left:146px;
	animation-delay:1.35s;
		-o-animation-delay:1.35s;
		-ms-animation-delay:1.35s;
		-webkit-animation-delay:1.35s;
		-moz-animation-delay:1.35s;
}

#fountainG_7{
	left:175px;
	animation-delay:1.5s;
		-o-animation-delay:1.5s;
		-ms-animation-delay:1.5s;
		-webkit-animation-delay:1.5s;
		-moz-animation-delay:1.5s;
}

#fountainG_8{
	left:205px;
	animation-delay:1.64s;
		-o-animation-delay:1.64s;
		-ms-animation-delay:1.64s;
		-webkit-animation-delay:1.64s;
		-moz-animation-delay:1.64s;
}



@keyframes bounce_fountainG{
	0%{
	transform:scale(1);
		background-color:'.$l_icon_color.';
	}

	100%{
	transform:scale(.3);
		background-color:rgb(255,255,255);
	}
}

@-o-keyframes bounce_fountainG{
	0%{
	-o-transform:scale(1);
		background-color:'.$l_icon_color.';
	}

	100%{
	-o-transform:scale(.3);
		background-color:rgb(255,255,255);
	}
}

@-ms-keyframes bounce_fountainG{
	0%{
	-ms-transform:scale(1);
		background-color:'.$l_icon_color.';
	}

	100%{
	-ms-transform:scale(.3);
		background-color:rgb(255,255,255);
	}
}

@-webkit-keyframes bounce_fountainG{
	0%{
	-webkit-transform:scale(1);
		background-color:'.$l_icon_color.';
	}

	100%{
	-webkit-transform:scale(.3);
		background-color:rgb(255,255,255);
	}
}

@-moz-keyframes bounce_fountainG{
	0%{
	-moz-transform:scale(1);
		background-color:'.$l_icon_color.';
	}

	100%{
	-moz-transform:scale(.3);
		background-color:rgb(255,255,255);
	}
}
					
					</style>
					
					';



			}elseif($lazy_loader_design === 'windows8'){
			
			echo '<div class="add_loading">
			<div class="windows8">
	<div class="wBall" id="wBall_1">
		<div class="wInnerBall"></div>
	</div>
	<div class="wBall" id="wBall_2">
		<div class="wInnerBall"></div>
	</div>
	<div class="wBall" id="wBall_3">
		<div class="wInnerBall"></div>
	</div>
	<div class="wBall" id="wBall_4">
		<div class="wInnerBall"></div>
	</div>
	<div class="wBall" id="wBall_5">
		<div class="wInnerBall"></div>
	</div>
</div>
			</div>
					<style>
					.windows8 {
	position: relative;
	width: 78px;
	height:78px;
	margin:auto;
	top:45%;
}

.windows8 .wBall {
	position: absolute;
	width: 74px;
	height: 74px;
	opacity: 0;
	
	transform: rotate(225deg);
		-o-transform: rotate(225deg);
		-ms-transform: rotate(225deg);
		-webkit-transform: rotate(225deg);
		-moz-transform: rotate(225deg);
	animation: orbit 6.96s infinite;
		-o-animation: orbit 6.96s infinite;
		-ms-animation: orbit 6.96s infinite;
		-webkit-animation: orbit 6.96s infinite;
		-moz-animation: orbit 6.96s infinite;
}

.windows8 .wBall .wInnerBall{
	position: absolute;
	width: 10px;
	height: 10px;
	background: '.$l_icon_color.';
	left:0px;
	top:0px;
	border-radius: 10px;
}

.windows8 #wBall_1 {
	animation-delay: 1.52s;
		-o-animation-delay: 1.52s;
		-ms-animation-delay: 1.52s;
		-webkit-animation-delay: 1.52s;
		-moz-animation-delay: 1.52s;
}

.windows8 #wBall_2 {
	animation-delay: 0.3s;
		-o-animation-delay: 0.3s;
		-ms-animation-delay: 0.3s;
		-webkit-animation-delay: 0.3s;
		-moz-animation-delay: 0.3s;
}

.windows8 #wBall_3 {
	animation-delay: 0.61s;
		-o-animation-delay: 0.61s;
		-ms-animation-delay: 0.61s;
		-webkit-animation-delay: 0.61s;
		-moz-animation-delay: 0.61s;
}

.windows8 #wBall_4 {
	animation-delay: 0.91s;
		-o-animation-delay: 0.91s;
		-ms-animation-delay: 0.91s;
		-webkit-animation-delay: 0.91s;
		-moz-animation-delay: 0.91s;
}

.windows8 #wBall_5 {
	animation-delay: 1.22s;
		-o-animation-delay: 1.22s;
		-ms-animation-delay: 1.22s;
		-webkit-animation-delay: 1.22s;
		-moz-animation-delay: 1.22s;
}



@keyframes orbit {
	0% {
		opacity: 1;
		z-index:99;
		transform: rotate(180deg);
		animation-timing-function: ease-out;
	}

	7% {
		opacity: 1;
		transform: rotate(300deg);
		animation-timing-function: linear;
		origin:0%;
	}

	30% {
		opacity: 1;
		transform:rotate(410deg);
		animation-timing-function: ease-in-out;
		origin:7%;
	}

	39% {
		opacity: 1;
		transform: rotate(645deg);
		animation-timing-function: linear;
		origin:30%;
	}

	70% {
		opacity: 1;
		transform: rotate(770deg);
		animation-timing-function: ease-out;
		origin:39%;
	}

	75% {
		opacity: 1;
		transform: rotate(900deg);
		animation-timing-function: ease-out;
		origin:70%;
	}

	76% {
	opacity: 0;
		transform:rotate(900deg);
	}

	100% {
	opacity: 0;
		transform: rotate(900deg);
	}
}

@-o-keyframes orbit {
	0% {
		opacity: 1;
		z-index:99;
		-o-transform: rotate(180deg);
		-o-animation-timing-function: ease-out;
	}

	7% {
		opacity: 1;
		-o-transform: rotate(300deg);
		-o-animation-timing-function: linear;
		-o-origin:0%;
	}

	30% {
		opacity: 1;
		-o-transform:rotate(410deg);
		-o-animation-timing-function: ease-in-out;
		-o-origin:7%;
	}

	39% {
		opacity: 1;
		-o-transform: rotate(645deg);
		-o-animation-timing-function: linear;
		-o-origin:30%;
	}

	70% {
		opacity: 1;
		-o-transform: rotate(770deg);
		-o-animation-timing-function: ease-out;
		-o-origin:39%;
	}

	75% {
		opacity: 1;
		-o-transform: rotate(900deg);
		-o-animation-timing-function: ease-out;
		-o-origin:70%;
	}

	76% {
	opacity: 0;
		-o-transform:rotate(900deg);
	}

	100% {
	opacity: 0;
		-o-transform: rotate(900deg);
	}
}

@-ms-keyframes orbit {
	0% {
		opacity: 1;
		z-index:99;
		-ms-transform: rotate(180deg);
		-ms-animation-timing-function: ease-out;
	}

	7% {
		opacity: 1;
		-ms-transform: rotate(300deg);
		-ms-animation-timing-function: linear;
		-ms-origin:0%;
	}

	30% {
		opacity: 1;
		-ms-transform:rotate(410deg);
		-ms-animation-timing-function: ease-in-out;
		-ms-origin:7%;
	}

	39% {
		opacity: 1;
		-ms-transform: rotate(645deg);
		-ms-animation-timing-function: linear;
		-ms-origin:30%;
	}

	70% {
		opacity: 1;
		-ms-transform: rotate(770deg);
		-ms-animation-timing-function: ease-out;
		-ms-origin:39%;
	}

	75% {
		opacity: 1;
		-ms-transform: rotate(900deg);
		-ms-animation-timing-function: ease-out;
		-ms-origin:70%;
	}

	76% {
	opacity: 0;
		-ms-transform:rotate(900deg);
	}

	100% {
	opacity: 0;
		-ms-transform: rotate(900deg);
	}
}

@-webkit-keyframes orbit {
	0% {
		opacity: 1;
		z-index:99;
		-webkit-transform: rotate(180deg);
		-webkit-animation-timing-function: ease-out;
	}

	7% {
		opacity: 1;
		-webkit-transform: rotate(300deg);
		-webkit-animation-timing-function: linear;
		-webkit-origin:0%;
	}

	30% {
		opacity: 1;
		-webkit-transform:rotate(410deg);
		-webkit-animation-timing-function: ease-in-out;
		-webkit-origin:7%;
	}

	39% {
		opacity: 1;
		-webkit-transform: rotate(645deg);
		-webkit-animation-timing-function: linear;
		-webkit-origin:30%;
	}

	70% {
		opacity: 1;
		-webkit-transform: rotate(770deg);
		-webkit-animation-timing-function: ease-out;
		-webkit-origin:39%;
	}

	75% {
		opacity: 1;
		-webkit-transform: rotate(900deg);
		-webkit-animation-timing-function: ease-out;
		-webkit-origin:70%;
	}

	76% {
	opacity: 0;
		-webkit-transform:rotate(900deg);
	}

	100% {
	opacity: 0;
		-webkit-transform: rotate(900deg);
	}
}

@-moz-keyframes orbit {
	0% {
		opacity: 1;
		z-index:99;
		-moz-transform: rotate(180deg);
		-moz-animation-timing-function: ease-out;
	}

	7% {
		opacity: 1;
		-moz-transform: rotate(300deg);
		-moz-animation-timing-function: linear;
		-moz-origin:0%;
	}

	30% {
		opacity: 1;
		-moz-transform:rotate(410deg);
		-moz-animation-timing-function: ease-in-out;
		-moz-origin:7%;
	}

	39% {
		opacity: 1;
		-moz-transform: rotate(645deg);
		-moz-animation-timing-function: linear;
		-moz-origin:30%;
	}

	70% {
		opacity: 1;
		-moz-transform: rotate(770deg);
		-moz-animation-timing-function: ease-out;
		-moz-origin:39%;
	}

	75% {
		opacity: 1;
		-moz-transform: rotate(900deg);
		-moz-animation-timing-function: ease-out;
		-moz-origin:70%;
	}

	76% {
	opacity: 0;
		-moz-transform:rotate(900deg);
	}

	100% {
	opacity: 0;
		-moz-transform: rotate(900deg);
	}
}
					
					</style>
					
					';



			}elseif($lazy_loader_design === 'fold-unfold'){
			
			echo '<div class="add_loading">
			<div class="cssload-thecube">
	<div class="cssload-cube cssload-c1"></div>
	<div class="cssload-cube cssload-c2"></div>
	<div class="cssload-cube cssload-c4"></div>
	<div class="cssload-cube cssload-c3"></div>
</div>
			</div>
					<style>
					.cssload-thecube {
	width: 73px;
	height: 73px;
	top: 45%;
	margin: 0 auto;
	margin-top: 49px;
	position: relative;
	transform: rotateZ(45deg);
		-o-transform: rotateZ(45deg);
		-ms-transform: rotateZ(45deg);
		-webkit-transform: rotateZ(45deg);
		-moz-transform: rotateZ(45deg);
}
.cssload-thecube .cssload-cube {
	position: relative;
	transform: rotateZ(45deg);
		-o-transform: rotateZ(45deg);
		-ms-transform: rotateZ(45deg);
		-webkit-transform: rotateZ(45deg);
		-moz-transform: rotateZ(45deg);
}
.cssload-thecube .cssload-cube {
	float: left;
	width: 50%;
	height: 50%;
	position: relative;
	transform: scale(1.1);
		-o-transform: scale(1.1);
		-ms-transform: scale(1.1);
		-webkit-transform: scale(1.1);
		-moz-transform: scale(1.1);
}
.cssload-thecube .cssload-cube:before {
	content: "";
	position: absolute;
	top: 0;
	left: 0;
	width: 100%;
	height: 100%;
	background-color: '.$l_icon_color.';
	animation: cssload-fold-thecube 2.76s infinite linear both;
		-o-animation: cssload-fold-thecube 2.76s infinite linear both;
		-ms-animation: cssload-fold-thecube 2.76s infinite linear both;
		-webkit-animation: cssload-fold-thecube 2.76s infinite linear both;
		-moz-animation: cssload-fold-thecube 2.76s infinite linear both;
	transform-origin: 100% 100%;
		-o-transform-origin: 100% 100%;
		-ms-transform-origin: 100% 100%;
		-webkit-transform-origin: 100% 100%;
		-moz-transform-origin: 100% 100%;
}
.cssload-thecube .cssload-c2 {
	transform: scale(1.1) rotateZ(90deg);
		-o-transform: scale(1.1) rotateZ(90deg);
		-ms-transform: scale(1.1) rotateZ(90deg);
		-webkit-transform: scale(1.1) rotateZ(90deg);
		-moz-transform: scale(1.1) rotateZ(90deg);
}
.cssload-thecube .cssload-c3 {
	transform: scale(1.1) rotateZ(180deg);
		-o-transform: scale(1.1) rotateZ(180deg);
		-ms-transform: scale(1.1) rotateZ(180deg);
		-webkit-transform: scale(1.1) rotateZ(180deg);
		-moz-transform: scale(1.1) rotateZ(180deg);
}
.cssload-thecube .cssload-c4 {
	transform: scale(1.1) rotateZ(270deg);
		-o-transform: scale(1.1) rotateZ(270deg);
		-ms-transform: scale(1.1) rotateZ(270deg);
		-webkit-transform: scale(1.1) rotateZ(270deg);
		-moz-transform: scale(1.1) rotateZ(270deg);
}
.cssload-thecube .cssload-c2:before {
	animation-delay: 0.35s;
		-o-animation-delay: 0.35s;
		-ms-animation-delay: 0.35s;
		-webkit-animation-delay: 0.35s;
		-moz-animation-delay: 0.35s;
}
.cssload-thecube .cssload-c3:before {
	animation-delay: 0.69s;
		-o-animation-delay: 0.69s;
		-ms-animation-delay: 0.69s;
		-webkit-animation-delay: 0.69s;
		-moz-animation-delay: 0.69s;
}
.cssload-thecube .cssload-c4:before {
	animation-delay: 1.04s;
		-o-animation-delay: 1.04s;
		-ms-animation-delay: 1.04s;
		-webkit-animation-delay: 1.04s;
		-moz-animation-delay: 1.04s;
}



@keyframes cssload-fold-thecube {
	0%, 10% {
		transform: perspective(136px) rotateX(-180deg);
		opacity: 0;
	}
	25%,
				75% {
		transform: perspective(136px) rotateX(0deg);
		opacity: 1;
	}
	90%,
				100% {
		transform: perspective(136px) rotateY(180deg);
		opacity: 0;
	}
}

@-o-keyframes cssload-fold-thecube {
	0%, 10% {
		-o-transform: perspective(136px) rotateX(-180deg);
		opacity: 0;
	}
	25%,
				75% {
		-o-transform: perspective(136px) rotateX(0deg);
		opacity: 1;
	}
	90%,
				100% {
		-o-transform: perspective(136px) rotateY(180deg);
		opacity: 0;
	}
}

@-ms-keyframes cssload-fold-thecube {
	0%, 10% {
		-ms-transform: perspective(136px) rotateX(-180deg);
		opacity: 0;
	}
	25%,
				75% {
		-ms-transform: perspective(136px) rotateX(0deg);
		opacity: 1;
	}
	90%,
				100% {
		-ms-transform: perspective(136px) rotateY(180deg);
		opacity: 0;
	}
}

@-webkit-keyframes cssload-fold-thecube {
	0%, 10% {
		-webkit-transform: perspective(136px) rotateX(-180deg);
		opacity: 0;
	}
	25%,
				75% {
		-webkit-transform: perspective(136px) rotateX(0deg);
		opacity: 1;
	}
	90%,
				100% {
		-webkit-transform: perspective(136px) rotateY(180deg);
		opacity: 0;
	}
}

@-moz-keyframes cssload-fold-thecube {
	0%, 10% {
		-moz-transform: perspective(136px) rotateX(-180deg);
		opacity: 0;
	}
	25%,
				75% {
		-moz-transform: perspective(136px) rotateX(0deg);
		opacity: 1;
	}
	90%,
				100% {
		-moz-transform: perspective(136px) rotateY(180deg);
		opacity: 0;
	}
}
					</style>
					
					';



			}elseif($lazy_loader_design === 'fountain-text'){
			
			echo '<div class="add_loading"> <div class="add_loading_inner">
			<div id="fountainTextG"><div id="fountainTextG_1" class="fountainTextG">L</div><div id="fountainTextG_2" class="fountainTextG">o</div><div id="fountainTextG_3" class="fountainTextG">a</div><div id="fountainTextG_4" class="fountainTextG">d</div><div id="fountainTextG_5" class="fountainTextG">i</div><div id="fountainTextG_6" class="fountainTextG">n</div><div id="fountainTextG_7" class="fountainTextG">g</div></div>
			</div>
			</div>
					<style>
					#fountainTextG{
	width:234px;
	margin:auto;
	
}
.add_loading_inner {top: 48%;position: absolute;width: 100%;}
.fountainTextG{color:'.$l_icon_color.';font-family:Arial;font-size:24px;text-decoration:none;font-weight:normal;font-style:normal;float:left;animation-name:bounce_fountainTextG;
		-o-animation-name:bounce_fountainTextG;
		-ms-animation-name:bounce_fountainTextG;
		-webkit-animation-name:bounce_fountainTextG;
		-moz-animation-name:bounce_fountainTextG;
	animation-duration:2.09s;
		-o-animation-duration:2.09s;
		-ms-animation-duration:2.09s;
		-webkit-animation-duration:2.09s;
		-moz-animation-duration:2.09s;
	animation-iteration-count:infinite;
		-o-animation-iteration-count:infinite;
		-ms-animation-iteration-count:infinite;
		-webkit-animation-iteration-count:infinite;
		-moz-animation-iteration-count:infinite;
	animation-direction:normal;
		-o-animation-direction:normal;
		-ms-animation-direction:normal;
		-webkit-animation-direction:normal;
		-moz-animation-direction:normal;
	transform:scale(.5);
		-o-transform:scale(.5);
		-ms-transform:scale(.5);
		-webkit-transform:scale(.5);
		-moz-transform:scale(.5);
}#fountainTextG_1{
	animation-delay:0.75s;
		-o-animation-delay:0.75s;
		-ms-animation-delay:0.75s;
		-webkit-animation-delay:0.75s;
		-moz-animation-delay:0.75s;
}
#fountainTextG_2{
	animation-delay:0.9s;
		-o-animation-delay:0.9s;
		-ms-animation-delay:0.9s;
		-webkit-animation-delay:0.9s;
		-moz-animation-delay:0.9s;
}
#fountainTextG_3{
	animation-delay:1.05s;
		-o-animation-delay:1.05s;
		-ms-animation-delay:1.05s;
		-webkit-animation-delay:1.05s;
		-moz-animation-delay:1.05s;
}
#fountainTextG_4{
	animation-delay:1.2s;
		-o-animation-delay:1.2s;
		-ms-animation-delay:1.2s;
		-webkit-animation-delay:1.2s;
		-moz-animation-delay:1.2s;
}
#fountainTextG_5{
	animation-delay:1.35s;
		-o-animation-delay:1.35s;
		-ms-animation-delay:1.35s;
		-webkit-animation-delay:1.35s;
		-moz-animation-delay:1.35s;
}
#fountainTextG_6{
	animation-delay:1.5s;
		-o-animation-delay:1.5s;
		-ms-animation-delay:1.5s;
		-webkit-animation-delay:1.5s;
		-moz-animation-delay:1.5s;
}
#fountainTextG_7{
	animation-delay:1.64s;
		-o-animation-delay:1.64s;
		-ms-animation-delay:1.64s;
		-webkit-animation-delay:1.64s;
		-moz-animation-delay:1.64s;
}




@keyframes bounce_fountainTextG{
	0%{
		transform:scale(1);
		color:'.$l_icon_color.';
	}

	100%{
		transform:scale(.5);
		color:rgb(255,255,255);
	}
}

@-o-keyframes bounce_fountainTextG{
	0%{
		-o-transform:scale(1);
		color:'.$l_icon_color.';
	}

	100%{
		-o-transform:scale(.5);
		color:rgb(255,255,255);
	}
}

@-ms-keyframes bounce_fountainTextG{
	0%{
		-ms-transform:scale(1);
		color:'.$l_icon_color.';
	}

	100%{
		-ms-transform:scale(.5);
		color:rgb(255,255,255);
	}
}

@-webkit-keyframes bounce_fountainTextG{
	0%{
		-webkit-transform:scale(1);
		color:'.$l_icon_color.';
	}

	100%{
		-webkit-transform:scale(.5);
		color:rgb(255,255,255);
	}
}

@-moz-keyframes bounce_fountainTextG{
	0%{
		-moz-transform:scale(1);
		color:'.$l_icon_color.';
	}

	100%{
		-moz-transform:scale(.5);
		color:rgb(255,255,255);
	}
}
					</style>
					
					';



			}elseif($lazy_loader_design === 'heart'){
			
			echo '<div class="add_loading">
			<div class="cssload-main">
	<div class="cssload-heart">
		<span class="cssload-heartL"></span>
		<span class="cssload-heartR"></span>
		<span class="cssload-square"></span>
	</div>
	<div class="cssload-shadow"></div>
</div>
			
			</div>
					<style>
					
					.cssload-main {
	position: absolute;
	content: "";
	left: 50%;
	top:45%;
	transform: translate(-100%, -240%);
		-o-transform: translate(-100%, -240%);
		-ms-transform: translate(-100%, -240%);
		-webkit-transform: translate(-100%, -240%);
		-moz-transform: translate(-100%, -240%);
}

.cssload-main *{
	font-size:62px;
}

.cssload-heart {
	animation: cssload-heart 2.88s cubic-bezier(0.75, 0, 0.5, 1) infinite normal;
		-o-animation: cssload-heart 2.88s cubic-bezier(0.75, 0, 0.5, 1) infinite normal;
		-ms-animation: cssload-heart 2.88s cubic-bezier(0.75, 0, 0.5, 1) infinite normal;
		-webkit-animation: cssload-heart 2.88s cubic-bezier(0.75, 0, 0.5, 1) infinite normal;
		-moz-animation: cssload-heart 2.88s cubic-bezier(0.75, 0, 0.5, 1) infinite normal;
	top: 50%;
	content: "";
	left: 50%;
	position: absolute;
}

.cssload-heartL {
	width: 1em;
	height: 1em;
	border: 1px solid '.$l_icon_color.';
	background-color: '.$l_icon_color.';
	content: "";
	position: absolute;
	display: block;
	border-radius: 100%;
	animation: cssload-heartL 2.88s cubic-bezier(0.75, 0, 0.5, 1) infinite normal;
		-o-animation: cssload-heartL 2.88s cubic-bezier(0.75, 0, 0.5, 1) infinite normal;
		-ms-animation: cssload-heartL 2.88s cubic-bezier(0.75, 0, 0.5, 1) infinite normal;
		-webkit-animation: cssload-heartL 2.88s cubic-bezier(0.75, 0, 0.5, 1) infinite normal;
		-moz-animation: cssload-heartL 2.88s cubic-bezier(0.75, 0, 0.5, 1) infinite normal;
	transform: translate(-28px, -27px);
		-o-transform: translate(-28px, -27px);
		-ms-transform: translate(-28px, -27px);
		-webkit-transform: translate(-28px, -27px);
		-moz-transform: translate(-28px, -27px);
}

.cssload-heartR {
	width: 1em;
	height: 1em;
	border: 1px solid '.$l_icon_color.';
	background-color: '.$l_icon_color.';
	content: "";
	position: absolute;
	display: block;
	border-radius: 100%;
	transform: translate(28px, -27px);
		-o-transform: translate(28px, -27px);
		-ms-transform: translate(28px, -27px);
		-webkit-transform: translate(28px, -27px);
		-moz-transform: translate(28px, -27px);
	animation: cssload-heartR 2.88s cubic-bezier(0.75, 0, 0.5, 1) infinite normal;
		-o-animation: cssload-heartR 2.88s cubic-bezier(0.75, 0, 0.5, 1) infinite normal;
		-ms-animation: cssload-heartR 2.88s cubic-bezier(0.75, 0, 0.5, 1) infinite normal;
		-webkit-animation: cssload-heartR 2.88s cubic-bezier(0.75, 0, 0.5, 1) infinite normal;
		-moz-animation: cssload-heartR 2.88s cubic-bezier(0.75, 0, 0.5, 1) infinite normal;
}

.cssload-square {
	width: 1em;
	height: 1em;
	border: 1px solid '.$l_icon_color.';
	background-color: '.$l_icon_color.';
	position: relative;
	display: block;
	content: "";
	transform: scale(1) rotate(-45deg);
		-o-transform: scale(1) rotate(-45deg);
		-ms-transform: scale(1) rotate(-45deg);
		-webkit-transform: scale(1) rotate(-45deg);
		-moz-transform: scale(1) rotate(-45deg);
	animation: cssload-square 2.88s cubic-bezier(0.75, 0, 0.5, 1) infinite normal;
		-o-animation: cssload-square 2.88s cubic-bezier(0.75, 0, 0.5, 1) infinite normal;
		-ms-animation: cssload-square 2.88s cubic-bezier(0.75, 0, 0.5, 1) infinite normal;
		-webkit-animation: cssload-square 2.88s cubic-bezier(0.75, 0, 0.5, 1) infinite normal;
		-moz-animation: cssload-square 2.88s cubic-bezier(0.75, 0, 0.5, 1) infinite normal;
}

.cssload-shadow {
	top: 97px;
	left: 50%;
	content: "";
	position: relative;
	display: block;
	bottom: -.5em;
	width: 1em;
	height: .24em;
	background-color: rgb(215,215,215);
	border: 1px solid rgb(215,215,215);
	border-radius: 50%;
	animation: cssload-shadow 2.88s cubic-bezier(0.75, 0, 0.5, 1) infinite normal;
		-o-animation: cssload-shadow 2.88s cubic-bezier(0.75, 0, 0.5, 1) infinite normal;
		-ms-animation: cssload-shadow 2.88s cubic-bezier(0.75, 0, 0.5, 1) infinite normal;
		-webkit-animation: cssload-shadow 2.88s cubic-bezier(0.75, 0, 0.5, 1) infinite normal;
		-moz-animation: cssload-shadow 2.88s cubic-bezier(0.75, 0, 0.5, 1) infinite normal;
}







@keyframes cssload-square {
	50% {
		border-radius: 100%;
		transform: scale(0.5) rotate(-45deg);
	}
	100% {
		transform: scale(1) rotate(-45deg);
	}
}

@-o-keyframes cssload-square {
	50% {
		border-radius: 100%;
		-o-transform: scale(0.5) rotate(-45deg);
	}
	100% {
		-o-transform: scale(1) rotate(-45deg);
	}
}

@-ms-keyframes cssload-square {
	50% {
		border-radius: 100%;
		-ms-transform: scale(0.5) rotate(-45deg);
	}
	100% {
		-ms-transform: scale(1) rotate(-45deg);
	}
}

@-webkit-keyframes cssload-square {
	50% {
		border-radius: 100%;
		-webkit-transform: scale(0.5) rotate(-45deg);
	}
	100% {
		-webkit-transform: scale(1) rotate(-45deg);
	}
}

@-moz-keyframes cssload-square {
	50% {
		border-radius: 100%;
		-moz-transform: scale(0.5) rotate(-45deg);
	}
	100% {
		-moz-transform: scale(1) rotate(-45deg);
	}
}

@keyframes cssload-heart {
	50% {
		transform: rotate(360deg);
	}
	100% {
		transform: rotate(720deg);
	}
}

@-o-keyframes cssload-heart {
	50% {
		-o-transform: rotate(360deg);
	}
	100% {
		-o-transform: rotate(720deg);
	}
}

@-ms-keyframes cssload-heart {
	50% {
		-ms-transform: rotate(360deg);
	}
	100% {
		-ms-transform: rotate(720deg);
	}
}

@-webkit-keyframes cssload-heart {
	50% {
		-webkit-transform: rotate(360deg);
	}
	100% {
		-webkit-transform: rotate(720deg);
	}
}

@-moz-keyframes cssload-heart {
	50% {
		-moz-transform: rotate(360deg);
	}
	100% {
		-moz-transform: rotate(720deg);
	}
}

@keyframes cssload-heartL {
	60% {
		transform: scale(0.4);
	}
}

@-o-keyframes cssload-heartL {
	60% {
		-o-transform: scale(0.4);
	}
}

@-ms-keyframes cssload-heartL {
	60% {
		-ms-transform: scale(0.4);
	}
}

@-webkit-keyframes cssload-heartL {
	60% {
		-webkit-transform: scale(0.4);
	}
}

@-moz-keyframes cssload-heartL {
	60% {
		-moz-transform: scale(0.4);
	}
}

@keyframes cssload-heartR {
	40% {
		transform: scale(0.4);
	}
}

@-o-keyframes cssload-heartR {
	40% {
		-o-transform: scale(0.4);
	}
}

@-ms-keyframes cssload-heartR {
	40% {
		-ms-transform: scale(0.4);
	}
}

@-webkit-keyframes cssload-heartR {
	40% {
		-webkit-transform: scale(0.4);
	}
}

@-moz-keyframes cssload-heartR {
	40% {
		-moz-transform: scale(0.4);
	}
}

@keyframes cssload-shadow {
	50% {
		transform: scale(0.5);
		border-color: rgb(228,228,228);
	}
}

@-o-keyframes cssload-shadow {
	50% {
		-o-transform: scale(0.5);
		border-color: rgb(228,228,228);
	}
}

@-ms-keyframes cssload-shadow {
	50% {
		-ms-transform: scale(0.5);
		border-color: rgb(228,228,228);
	}
}

@-webkit-keyframes cssload-shadow {
	50% {
		-webkit-transform: scale(0.5);
		border-color: rgb(228,228,228);
	}
}

@-moz-keyframes cssload-shadow {
	50% {
		-moz-transform: scale(0.5);
		border-color: rgb(228,228,228);
	}
}
					</style>
					
					';




					
			}
					
		}
		}

			
	
}

$ST_Laizy_loader = new ST_Laizy_loader();