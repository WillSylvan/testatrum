"use strict"
//returs div offset
 	function offset(elt) {
		let rect = elt.getBoundingClientRect(), bodyElt = document.body;
		return {
		  top: rect.top + bodyElt .scrollTop,
		  left: rect.left + bodyElt .scrollLeft
		}
	}
//returns value from slider
	function calcValue (min,max,step,width,now){
		
		return Math.round((((max-min)/width)*now+min)/step)*step;
	}

	function md(a){
 		a.focus = true
 	}

 	function mu(a){
 		a.focus = false
 	}

 class slider {
 	constructor(dom,name,min,max,step,brake,output,side,callback){

 		this.focus = false
 		this.name = name
 		this.dom = document.getElementById(dom)
 		this.min = min
 		this.max = max
 		this.step = step
 		this.output = document.getElementById(output)
 		this.value = 0;
 		callback(this.value)
 		let that = this
 		console.log(that.output+' out')

 	/////
 	//Slider html setup
 	/////

 		let html = 
 		`
 		<div class="slider_wrap">
 			<div class="slider_controls">
 				<div class="click_control decrease">-</div>
	 			<div id="${name}_track" class="slider_track">
	 				<div id="${name}_handle" class="slider_handle"></div>
	 			</div>
 				<div class="click_control increase">+</div>
	 		</div>
 			<input type="hidden" name="${name}" id="${name}_input" value="">
 		<div>
 		`;

 		this.dom.innerHTML = html
 		this.domWidth = window.getComputedStyle(this.dom).width
 		console.log(this.domWidth)


 		console.log(this)

 	/////
 	//Slider controls addEventListener setup
 	/////

 		//Drag controls

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
 				let pos = Math.round((event.pageX-place.left)/that.step)*that.step
 				let width = window.getComputedStyle(that.dom).width

 				document.getElementById(that.name+'_handle').style.left = pos-10
 				if (pos<=0||pos>=that.domWidth) {
 					//console.log(pos)
 					mu(that)
 				}

 				//console.log(that.output,that.output)
 				that.value = calcValue(that.min,that.max,that.step,that.domWidth,pos)
 				//that.output.innerHTML = that.value
 				document.getElementById(that.name+"_input").value = that.value
 			}
		  
		}, 0);

		this.dom.addEventListener("mouseenter", function(){});
		this.dom.addEventListener("mouseleave", function(){
			mu(that)
			
		});

		//CLICK CONTROLS
		console.log(this.dom.querySelectorAll(".increase"))
		this.dom.querySelectorAll(".increase")[0].onclick = function(){
			that.value += that.step
			document.getElementById(that.name+'_handle').style.left = (that.value/(that.max-that.min))*that.domWidth
			console.log(document.getElementById(that.name+'_handle').style.left)
		}
		this.dom.querySelectorAll(".decrease")[0].onclick = function(){
			if (that.value>that.min) {
				that.value -= that.step
				document.getElementById(that.name+'_handle').style.left = ((that.value-that.min)/(that.max-that.min))*that.domWidth-10
				console.log(document.getElementById(that.name+'_handle').style.left)
				console.log('decrease'+that.name, that.value)
				//that.output.innerHTML = that.value
 				document.getElementById(that.name+"_input").value = that.value
				
			}
		}

		////
		//callback
		////

		document.getElementById(that.name+"_input").addEventListener('onchange',function(){})

		// document.getElementById(that.name+'_handle').addEventListener("mouseleave", function(){
		// 	mu(that)
		// });


 		

 	}
 	
 }




	

// let offsetElt = offset(document.getElementById('element'));
// offsetElt.top;
// offsetElt.left;

