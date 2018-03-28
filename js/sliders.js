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
        let a = Math.round((((max-min)/width)*now+min)/step)*step;
        if (a>max) {
            a = max; 
        }else if (a<min){
            a = min
        }

        return a
    }
    function md(a){
        a.focus = true
    }
    function mu(a){
        a.focus = false
        a.callback(a.value, a.focus)
    }
 class slider {
    constructor(dom,name,min,max,step,brake,output,side,values,callback){
        this.focus = false
        this.name = name
        this.dom = document.getElementById(dom)
        this.min = min
        this.max = max
        this.step = step
        this.output = document.getElementById(output)
        this.value = 0;
        this.callback = callback
        this.brake = brake
        this.side = side
        this.values = values
        //callback(00000000000000000)
        let that = this
       // console.log(that.output+' out')
    /////
    //Slider html setup
    /////
        let html = 
        `
        <div class="slider_wrap">
            <div class="click_control decrease">-</div>
            <div class="slider_controls">
                <div id="${this.name}_track" class="slider_track">
                    <div id="${this.name}_handle" class="slider_handle"></div>
                    <div style="${this.side}:0;" id="${this.name}_track_cover" class="track_cover"></div>
                    <div class="pos_values" id="${this.name}_pos_values"></div>
                </div>
            </div>
            <input type="hidden" name="${this.name}" id="${this.name}_input" value="">
            <div class="click_control increase">+</div>
        <div>
        `;
        this.dom.insertAdjacentHTML('afterbegin', html);
        this.domWidth = window.getComputedStyle(this.dom).width
        function place_pos_values(){
            let pos_values_html = ""; 
            for (var i = 0; i < that.values.length; i++) {
               
                if (that.values[i]>=that.min&&that.values[i]<=that.max) {

                let pos = (that.values[i]-that.min) / (that.max-that.min) * 100 + "%"
                pos_values_html += "<div class='pos_values_wrap' style='left:"+pos+"'><span>"+that.values[i]+"</span></div>"
                }
                
            }
            document.getElementById(that.name+'_pos_values').innerHTML= pos_values_html
        }
        place_pos_values()
        
        //console.log(this.domWidth)
        //console.log(this)
    /////
    // output function - positions handle and makes callback
    /////
        function responce(){
            if (that.value<=that.max&&that.value>=that.min) {

                let w = ((that.value-that.min)/(that.max-that.min))*parseInt(that.domWidth)
                //console.log(w)
                document.getElementById(that.name+'_handle').style.left = (w - parseInt(window.getComputedStyle(document.getElementById(that.name+'_handle')).width)/2)/parseInt(that.domWidth) * 100 + "%"//((that.value-that.min)/(that.max-that.min))*that.domWidth-10
                document.getElementById(that.name+"_input").value = that.value
                document.getElementById(that.name+"_track_cover").style.width = (that.side=='left'? w : parseInt(that.domWidth)-w)/parseInt(that.domWidth) * 100 + "%"
               // document.getElementById('debug').innerHTML = (that.side=='left'? w : that.domWidth-w)/parseInt(that.domWidth) * 100 + "%"
                
                that.callback(that.value, that.focus)
            }
            
        }
    /////
    //Slider controls addEventListener setup
    /////
        //Drag controls
        /*
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
               
                that.value = calcValue(that.min,that.max,that.step,that.domWidth,pos)
                console.log(that.min,that.max,that.step,that.domWidth,pos)
                
                responce()
                
            }
          
        }, 0);
        this.dom.addEventListener("mouseenter", function(){});
        this.dom.addEventListener("mouseleave", function(){
            if (that.focus) {
                mu(that)
            }
            
        });
        */
        //TOUCH CONTROLS\
        console.log(that.dom.querySelectorAll(".slider_controls"))
            let hammertime = new Hammer(that.dom.querySelectorAll(".slider_controls")[0]);
            hammertime.on('pan tap panstart panend', function(ev) {
              //  console.log(ev);
               if (ev.type=='panstart') {
                that.focus = true
                that.domWidth = parseInt(window.getComputedStyle(that.dom).width)

               }
               if (ev.type=='panend') {
                 that.focus = false
               }
                let place = offset(that.dom)
                let pos = Math.round((ev.center.x-place.left)/that.step)*that.step
                that.value = calcValue(that.min,that.max,that.step,parseInt(that.domWidth),pos)
                responce()

            });

        //CLICK CONTROLS
        console.log(this.dom.querySelectorAll(".increase"))

        this.dom.querySelectorAll(".increase")[0].onclick = function(){
            console.log('aaa')
            if (that.value<that.max) {
                console.log( that.value, that.step)
                that.value += that.step
                console.log( that.value)

                responce() 
            }
            
        }
        this.dom.querySelectorAll(".decrease")[0].onclick = function(){
            if (that.value>that.min) {
                console.log( that.value, that.step)
                that.value -= that.step

                console.log( that.value)


                responce() 
            }
        }
        this.dom.addEventListener('onresize',function(){
            that.domWidth = parseInt(window.getComputedStyle(that.dom).width)
            place_pos_values()
        })
    }

    start_val(val){
        if (val<=this.max&&val>=this.min) {
            this.value = parseInt(val)
            let w = ((this.value-this.min)/(this.max-this.min))*parseInt(this.domWidth)
            //console.log(this.value,this.min,this.max-this.min,parseInt(this.domWidth))
                document.getElementById(this.name+'_handle').style.left = (w - parseInt(window.getComputedStyle(document.getElementById(this.name+'_handle')).width)/2)/parseInt(this.domWidth) * 100 + "%"//((that.value-that.min)/(that.max-that.min))*that.domWidth-10
               //console.log((w - parseInt(window.getComputedStyle(document.getElementById(this.name+'_handle')).width)/2)/this.domWidth * 100 + "%")
                document.getElementById(this.name+"_input").value = this.value
                document.getElementById(this.name+"_track_cover").style.width = (this.side=='left'? w : parseInt(this.domWidth)-w)/parseInt(this.domWidth) * 100 + "%"
                this.callback(this.value, false/*this.focus*/)
        }
    }
    
 }


