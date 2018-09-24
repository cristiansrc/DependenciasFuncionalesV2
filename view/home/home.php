<div class="page-content">
    <script>
        function mayus(e) {
            var texto = $.trim(e.value.toUpperCase());
            var nuevaCadena = "";
            for(i=0; i<texto.length; i++){
                var caracter = texto.charAt(i);
                var agregar = true;
                for(var a=0; a<nuevaCadena.length; a++){
                    var caracterEveluacion = nuevaCadena.charAt(a);
                    if(caracter == caracterEveluacion){
                        agregar = false;
                    }
                }
                
                if(agregar == true){
                    nuevaCadena = nuevaCadena.concat(caracter);
                }
            }
          
            e.value = nuevaCadena;
        }
        
        function validar(e) {
            tecla = (document.all) ? e.keyCode : e.which;
            if(tecla==32) return false;
            if (tecla==8) return true;
            patron =/[A-Za-z\s]/;
            te = String.fromCharCode(tecla);
            return patron.test(te);
        }
        
       
    </script>
    <div class="panel panel-blue">
       <div class="panel-heading">Dependencias funcionales</div>
       <div class="panel-body pan">
          <form action="#" class="form-horizontal">
             <div class="form-body pal">
                <div class="form-group">
                   <label for="conjuntoUniversal"  class="col-md-3 control-label">Conjunto universal <span class="require">*</span></label>
                   <div class="col-md-9">
                       <div class=""><input onkeyup="mayus(this)" onkeypress="return validar(event)" id="conjuntoUniversal" placeholder="Conjunto universal" class="form-control" type="text"></div>
                   </div>
                </div>
                <div class="form-group">
                    <label for="dependenciasFuncionales" class="col-md-3 control-label">Dependencias Funcionales <span class="require">*</span></label>
                   <div class="col-md-7">
                       <div class="input-icon"><textarea readonly="readonly" id="inputContent" rows="3" class="form-control"></textarea></div>
                   </div>
                    <div class="col-md-2">
                        <button type="button" class="btn btn-primary">Agregar</button><br></br>
                        <button type="button" class="btn btn-primary">Limpiar</button>
                    </div>
                </div>
                <div class="form-actions">
                    <div class="col-md-offset-3 col-md-9"><button type="submit" class="btn btn-primary">Send</button>&nbsp;<button type="button" class="btn btn-green">Cancel</button></div>
                 </div>
                <div class="form-group">
                   <div class="col-md-12">
                      <div class="portlet box portlet-orange" style="opacity: 1;">
                          <div class="portlet-header">
                              <div class="caption">Resultado</div>
                          </div>
                          <div class="portlet-body">
                              <p id="resultado"></p>
                          </div>
                      </div>
                   </div>
                </div>
             </div>
             
          </form>
       </div>
    </div>

    

    
</div>