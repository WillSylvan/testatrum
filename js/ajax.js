	function ajax_(request,data,callback){
		 var createCORSRequest = function(method, url) {
            var xhr = new XMLHttpRequest();
            if ("withCredentials" in xhr) {
              // Most browsers.
              xhr.open(method, url, true);
              xhr.setRequestHeader("Authorization", 'Basic YXRydW0ubHZfdGVzdDp0dXRLdUwyZjU5NUxUTkti');
            } else if (typeof XDomainRequest != "undefined") {
              // IE8 & IE9
              xhr = new XDomainRequest();
              xhr.open(method, url);
              xhr.setRequestHeader("Authorization", 'Basic YXRydW0ubHZfdGVzdDp0dXRLdUwyZjU5NUxUTkti');

            } else {
              // CORS not supported.
              xhr = null;
            }
            return xhr;
          };


          var url = 'http://159.148.101.219:8091/api/564382A4-81E8-4C2B-AE7D-80B88EC2FCB6/'+request;
          //var url = 'http://159.148.101.219:8091/api/564382A4-81E8-4C2B-AE7D-80B88EC2FCB6/register';
          var method = 'POST';


          var xhr = createCORSRequest(method, url);
          xhr.onload = function(response) {

          //console.log(response.currentTarget.response)

           callback(JSON.parse(response.currentTarget.response))
          };
          xhr.onerror = function() {
            console.log('error')
          };
          xhr.withCredentials = true;
          xhr.send(JSON.stringify(data));
	}