"use strict"

 	function offset(elt) {
		let rect = elt.getBoundingClientRect(), bodyElt = document.body;
		return {
		  top: rect.top + bodyElt .scrollTop,
		  left: rect.left + bodyElt .scrollLeft
		}
	}

	function md(a){
 		a.focus = true
 	}

 	function mu(a){
 		a.focus = false
 	}
 class slider {
 	constructor(dom,name,start,end,step,brake,output='',side){

 		this.focus = false
 		this.name = name
 		this.dom = document.getElementById(dom)


 		let html = 
 		`
 		<div class="slider_wrap">
 			<div class="slider_controls">
	 			<div id="${name}_track" class="slider_track">
	 				<div id="${name}_handle" class="slider_handle"></div>
	 			</div>
	 		</div>
 			<input type="hidden" name="${name}" id="${name}_input" value="">
 		<div>
 		`;

 		this.domWidth = window.getComputedStyle(this.dom).width
 		console.log(this.domWidth)
 		this.dom.innerHTML = html
 		let that = this




 		console.log(this)

 		this.dom.addEventListener('mousedown', function(event) {
 			that.domWidth = parseInt(window.getComputedStyle(that.dom).width)
 			md(that)

		}, 0);

		this.dom.addEventListener('mouseup', function(event) {
		  	mu(that)
		}, 0);

 		this.dom.addEventListener('mousemove', function(event) {
 			if (that.focus) {
 				let place = offset(that.dom)
 				let pos = event.pageX-place.left
 				let width = window.getComputedStyle(that.dom).width

 				document.getElementById(that.name+'_handle').style.left = pos-10
 				if (pos<=0||pos>=that.domWidth) {
 					console.log(pos)
 					mu(that)
 				}
 				console.log(pos,that.domWidth)
 			}
		  
		}, 0);

		this.dom.addEventListener("mouseenter", function(){});
		this.dom.addEventListener("mouseleave", function(){
			mu(that)
			
		});
		// document.getElementById(that.name+'_handle').addEventListener("mouseleave", function(){
		// 	mu(that)
		// });


 		

 	}
 	
 }




	

// let offsetElt = offset(document.getElementById('element'));
// offsetElt.top;
// offsetElt.left;

