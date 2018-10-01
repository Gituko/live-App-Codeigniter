 var enviar = {
            url:"",            
            tipo:"",//post,get,formData
            post:function(datos){
                var that=this;
                that.tipo="post"; 
               return  $.post(that.url,datos,that.actiondone);
            },
            get:function(datos){
                var that=this;
                that.tipo="get";
                return $.get(that.url,datos,that.actiondone());
            },
            formdata:function(datos){
                alert("entra aqui")
                var that=this;
                console.log(datos);
            var data, xhr;
          var frm=$(datos.form)[0];
            data = new FormData(frm);
            xhr = new XMLHttpRequest();
            xhr.open('POST',that.url , true);
            xhr.send(data);
            xhr.onreadystatechange = function (){
                var that=this;
               if (that.readyState == 4 && that.status == 200) {
                    var msg= JSON.parse(that.responseText);
                    $.notify({message: msg.mensaje},{type: msg.tipo});
//                    if(msg.tipo=="success"){
//                        setTimeout(function(){
//                            window.location.reload();
//                        },3000);                        
//                    }
                }
            }
            return xhr;
            
            },
            actiondone: function (data) { 
                $.notify({message: data.mensaje},{type: data.tipo});
            }
        }