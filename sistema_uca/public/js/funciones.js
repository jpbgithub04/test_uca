$(document).ready(function(){

	$.datepicker.regional['es'] = {
    closeText: 'Cerrar',
    prevText: '< Ant',
    nextText: 'Sig >',
    currentText: 'Hoy',
    monthNames: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
    monthNamesShort: ['Ene','Feb','Mar','Abr', 'May','Jun','Jul','Ago','Sep', 'Oct','Nov','Dic'],
    dayNames: ['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'],
    dayNamesShort: ['Dom','Lun','Mar','Mié','Juv','Vie','S&aacute;b'],
    dayNamesMin: ['Do','Lu','Ma','Mi','Ju','Vi','S&aacute;'],
    weekHeader: 'Sm',
    dateFormat: 'dd/mm/yy',
    firstDay: 1,
    isRTL: false,
    showMonthAfterYear: false,
    yearSuffix: ''
    };
    $.datepicker.setDefaults($.datepicker.regional['es']);      
    
    $(function(){
        $("#datepicker").datepicker({                    
            dateFormat: "dd/mm/yy",
            changeMonth: true,
            changeYear: true,
            yearRange: "1920:2010"                    
        });
    });
    $(function(){
        $("#datepicker2").datepicker({                    
            dateFormat: "dd/mm/yy",
            changeMonth: true,
            changeYear: true,
            yearRange: "1920:2010"                    
        });
    });
    $(function(){
        $("#datepicker3").datepicker({                    
            dateFormat: "dd/mm/yy",
            changeMonth: true,
            changeYear: true,
            yearRange: "1920:2010"                    
        });
    });  
    

    $('#formulario_alumno').submit(function(){    	
    	var apellido=$('input[name="apellido"]');
    	var nombre=$('input[name="nombre"]');
    	var dni=$('input[name="dni"]');
    	var direccion=$('input[name="direccion"]');
    	var pais=$('input[name="pais"]');
        var ciudad=$('input[name="ciudad"]');
        var localidad=$('input[name="localidad"]');
        var fecha_nacimiento=$('input[name="fecha_nacimiento"]');
        var telefono=$('input[name="telefono"]');
    	var mensaje_apellido=$('#mensaje_apellido');
    	var mensaje_nombre=$('#mensaje_nombre');
    	var mensaje_dni=$('#mensaje_dni');
    	var mensaje_direccion=$('#mensaje_direccion');
    	var mensaje_pais=$('#mensaje_pais');
        var mensaje_ciudad=$('#mensaje_ciudad');
        var mensaje_localidad=$('#mensaje_localidad');
        var mensaje_fecha_nacimiento=$('#mensaje_fecha_nacimiento');
        var mensaje_telefono=$('#mensaje_telefono');
    	var validacion=0;
    	
    	if(apellido.val().length==''){           
            apellido.addClass('form-control is-invalid');
            mensaje_apellido.addClass('invalid-feedback');
            mensaje_apellido.html('No deje vacio el campo Apellido');
            mensaje_apellido.css('font-weight','bold');
            validacion++;
        }else{
            apellido.removeClass('is-invalid');
            mensaje_apellido.removeClass('invalid-feedback');
            mensaje_apellido.html('');
        }

        if(nombre.val().length==''){    		
    		nombre.addClass('form-control is-invalid');
    		mensaje_nombre.addClass('invalid-feedback');
    		mensaje_nombre.html('No deje vacio el campo Nombre');
    		mensaje_nombre.css('font-weight','bold');
    		validacion++;
    	}else{
    		nombre.removeClass('is-invalid');
    		mensaje_nombre.removeClass('invalid-feedback');
    		mensaje_nombre.html('');
    	}

    	if(dni.val().length==''){    		
    		dni.addClass('form-control is-invalid');
    		mensaje_dni.addClass('invalid-feedback');
    		mensaje_dni.html('No deje vacio el campo DNI');
    		mensaje_dni.css('font-weight','bold');
    		validacion++;	
    	}else if(isNaN(dni.val())){			
			dni.addClass('form-control is-invalid');
			mensaje_dni.addClass('invalid-feedback');
    		mensaje_dni.html('Escriba digitos numericos');
    		mensaje_dni.css('font-weight','bold');
			validacion++;    		
    	}else{
    		dni.removeClass('is-invalid');
    		mensaje_dni.removeClass('invalid-feedback');
    		mensaje_dni.html('');
    	}

    	if(direccion.val().length==''){    		
    		direccion.addClass('form-control is-invalid');
    		mensaje_direccion.addClass('invalid-feedback');
    		mensaje_direccion.html('No deje vacio el campo Direccion');
    		mensaje_direccion.css('font-weight','bold');
    		validacion++;
    	}else{
    		direccion.removeClass('is-invalid');
    		mensaje_direccion.removeClass('invalid-feedback');
    		mensaje_direccion.html('');
    	}

    	if(pais.val().length==''){    		
    		pais.addClass('form-control is-invalid');
    		mensaje_pais.addClass('invalid-feedback');
    		mensaje_pais.html('No deje vacio el campo Pais');
    		mensaje_pais.css('font-weight','bold');
    		validacion++;
    	}else{
    		pais.removeClass('is-invalid');
    		mensaje_pais.removeClass('invalid-feedback');
    		mensaje_pais.html('');
    	}

    	if(ciudad.val().length==''){    		
    		ciudad.addClass('form-control is-invalid');
    		mensaje_ciudad.addClass('invalid-feedback');
    		mensaje_ciudad.html('No deje vacio el campo Fecha de Pago');
    		mensaje_ciudad.css('font-weight','bold');
    		validacion++;
    	}else{
    		ciudad.removeClass('is-invalid');
    		mensaje_ciudad.removeClass('invalid-feedback');
    		mensaje_ciudad.html('');
    	}

        if(localidad.val().length==''){            
            localidad.addClass('form-control is-invalid');
            mensaje_localidad.addClass('invalid-feedback');
            mensaje_localidad.html('No deje vacio el campo Localidad');
            mensaje_localidad.css('font-weight','bold');
            validacion++;
        }else{
            localidad.removeClass('is-invalid');
            mensaje_localidad.removeClass('invalid-feedback');
            mensaje_localidad.html('');
        }

        if(fecha_nacimiento.val().length==''){            
            fecha_nacimiento.addClass('form-control is-invalid');
            mensaje_fecha_nacimiento.addClass('invalid-feedback');
            mensaje_fecha_nacimiento.html('No deje vacio el campo Fecha Nacimiento');
            mensaje_fecha_nacimiento.css('font-weight','bold');
            validacion++;
        }else{
            fecha_nacimiento.removeClass('is-invalid');
            mensaje_fecha_nacimiento.removeClass('invalid-feedback');
            mensaje_fecha_nacimiento.html('');
        }

        if(isNaN(telefono.val())){                     
            telefono.addClass('form-control is-invalid');
            mensaje_telefono.addClass('invalid-feedback');
            mensaje_telefono.html('Escriba digitos numericos');
            mensaje_telefono.css('font-weight','bold');
            validacion++;           
        }else{
            telefono.removeClass('is-invalid');
            mensaje_telefono.removeClass('invalid-feedback');
            mensaje_telefono.html('');
        }
    	
    	if(validacion>0){
    		return false;
    	}
    });

    $('#formulario_editar_alumno').submit(function(){        
        var apellido=$('input[name="apellido"]');
        var nombre=$('input[name="nombre"]');
        var dni=$('input[name="dni"]');
        var direccion=$('input[name="direccion"]');
        var pais=$('input[name="pais"]');
        var ciudad=$('input[name="ciudad"]');
        var localidad=$('input[name="localidad"]');
        var fecha_nacimiento=$('input[name="fecha_nacimiento"]');
        var telefono=$('input[name="telefono"]');
        var mensaje_apellido=$('#mensaje_apellido');
        var mensaje_nombre=$('#mensaje_nombre');
        var mensaje_dni=$('#mensaje_dni');
        var mensaje_direccion=$('#mensaje_direccion');
        var mensaje_pais=$('#mensaje_pais');
        var mensaje_ciudad=$('#mensaje_ciudad');
        var mensaje_localidad=$('#mensaje_localidad');
        var mensaje_fecha_nacimiento=$('#mensaje_fecha_nacimiento');
        var mensaje_telefono=$('#mensaje_telefono');
        var validacion=0;
        
        if(apellido.val().length==''){           
            apellido.addClass('form-control is-invalid');
            mensaje_apellido.addClass('invalid-feedback');
            mensaje_apellido.html('No deje vacio el campo Apellido');
            mensaje_apellido.css('font-weight','bold');
            validacion++;
        }else{
            apellido.removeClass('is-invalid');
            mensaje_apellido.removeClass('invalid-feedback');
            mensaje_apellido.html('');
        }

        if(nombre.val().length==''){            
            nombre.addClass('form-control is-invalid');
            mensaje_nombre.addClass('invalid-feedback');
            mensaje_nombre.html('No deje vacio el campo Nombre');
            mensaje_nombre.css('font-weight','bold');
            validacion++;
        }else{
            nombre.removeClass('is-invalid');
            mensaje_nombre.removeClass('invalid-feedback');
            mensaje_nombre.html('');
        }

        if(dni.val().length==''){           
            dni.addClass('form-control is-invalid');
            mensaje_dni.addClass('invalid-feedback');
            mensaje_dni.html('No deje vacio el campo DNI');
            mensaje_dni.css('font-weight','bold');
            validacion++;   
        }else if(isNaN(dni.val())){         
            dni.addClass('form-control is-invalid');
            mensaje_dni.addClass('invalid-feedback');
            mensaje_dni.html('Escriba digitos numericos');
            mensaje_dni.css('font-weight','bold');
            validacion++;           
        }else{
            dni.removeClass('is-invalid');
            mensaje_dni.removeClass('invalid-feedback');
            mensaje_dni.html('');
        }

        if(direccion.val().length==''){         
            direccion.addClass('form-control is-invalid');
            mensaje_direccion.addClass('invalid-feedback');
            mensaje_direccion.html('No deje vacio el campo Direccion');
            mensaje_direccion.css('font-weight','bold');
            validacion++;
        }else{
            direccion.removeClass('is-invalid');
            mensaje_direccion.removeClass('invalid-feedback');
            mensaje_direccion.html('');
        }

        if(pais.val().length==''){          
            pais.addClass('form-control is-invalid');
            mensaje_pais.addClass('invalid-feedback');
            mensaje_pais.html('No deje vacio el campo Pais');
            mensaje_pais.css('font-weight','bold');
            validacion++;
        }else{
            pais.removeClass('is-invalid');
            mensaje_pais.removeClass('invalid-feedback');
            mensaje_pais.html('');
        }

        if(ciudad.val().length==''){            
            ciudad.addClass('form-control is-invalid');
            mensaje_ciudad.addClass('invalid-feedback');
            mensaje_ciudad.html('No deje vacio el campo Fecha de Pago');
            mensaje_ciudad.css('font-weight','bold');
            validacion++;
        }else{
            ciudad.removeClass('is-invalid');
            mensaje_ciudad.removeClass('invalid-feedback');
            mensaje_ciudad.html('');
        }

        if(localidad.val().length==''){            
            localidad.addClass('form-control is-invalid');
            mensaje_localidad.addClass('invalid-feedback');
            mensaje_localidad.html('No deje vacio el campo Localidad');
            mensaje_localidad.css('font-weight','bold');
            validacion++;
        }else{
            localidad.removeClass('is-invalid');
            mensaje_localidad.removeClass('invalid-feedback');
            mensaje_localidad.html('');
        }

        if(fecha_nacimiento.val().length==''){            
            fecha_nacimiento.addClass('form-control is-invalid');
            mensaje_fecha_nacimiento.addClass('invalid-feedback');
            mensaje_fecha_nacimiento.html('No deje vacio el campo Fecha Nacimiento');
            mensaje_fecha_nacimiento.css('font-weight','bold');
            validacion++;
        }else{
            fecha_nacimiento.removeClass('is-invalid');
            mensaje_fecha_nacimiento.removeClass('invalid-feedback');
            mensaje_fecha_nacimiento.html('');
        }

        if(isNaN(telefono.val())){                     
            telefono.addClass('form-control is-invalid');
            mensaje_telefono.addClass('invalid-feedback');
            mensaje_telefono.html('Escriba digitos numericos');
            mensaje_telefono.css('font-weight','bold');
            validacion++;           
        }else{
            telefono.removeClass('is-invalid');
            mensaje_telefono.removeClass('invalid-feedback');
            mensaje_telefono.html('');
        }
        
        if(validacion>0){
            return false;
        }
    });

    $('#formulario_profesor').submit(function(){      
        var apellido=$('input[name="apellido"]');
        var nombre=$('input[name="nombre"]');
        var dni=$('input[name="dni"]');
        var direccion=$('input[name="direccion"]');
        var pais=$('input[name="pais"]');
        var ciudad=$('input[name="ciudad"]');
        var localidad=$('input[name="localidad"]');
        var fecha_nacimiento=$('input[name="fecha_nacimiento"]');
        var telefono=$('input[name="telefono"]');
        var categoria=$('input[name="categoria"]');
        var mensaje_apellido=$('#mensaje_apellido');
        var mensaje_nombre=$('#mensaje_nombre');
        var mensaje_dni=$('#mensaje_dni');
        var mensaje_direccion=$('#mensaje_direccion');
        var mensaje_pais=$('#mensaje_pais');
        var mensaje_ciudad=$('#mensaje_ciudad');
        var mensaje_localidad=$('#mensaje_localidad');
        var mensaje_fecha_nacimiento=$('#mensaje_fecha_nacimiento');
        var mensaje_telefono=$('#mensaje_telefono');
        var mensaje_categoria=$('#mensaje_categoria');
        var validacion=0;
        
        if(apellido.val().length==''){           
            apellido.addClass('form-control is-invalid');
            mensaje_apellido.addClass('invalid-feedback');
            mensaje_apellido.html('No deje vacio el campo Apellido');
            mensaje_apellido.css('font-weight','bold');
            validacion++;
        }else{
            apellido.removeClass('is-invalid');
            mensaje_apellido.removeClass('invalid-feedback');
            mensaje_apellido.html('');
        }

        if(nombre.val().length==''){            
            nombre.addClass('form-control is-invalid');
            mensaje_nombre.addClass('invalid-feedback');
            mensaje_nombre.html('No deje vacio el campo Nombre');
            mensaje_nombre.css('font-weight','bold');
            validacion++;
        }else{
            nombre.removeClass('is-invalid');
            mensaje_nombre.removeClass('invalid-feedback');
            mensaje_nombre.html('');
        }

        if(dni.val().length==''){           
            dni.addClass('form-control is-invalid');
            mensaje_dni.addClass('invalid-feedback');
            mensaje_dni.html('No deje vacio el campo DNI');
            mensaje_dni.css('font-weight','bold');
            validacion++;   
        }else if(isNaN(dni.val())){         
            dni.addClass('form-control is-invalid');
            mensaje_dni.addClass('invalid-feedback');
            mensaje_dni.html('Escriba digitos numericos');
            mensaje_dni.css('font-weight','bold');
            validacion++;           
        }else{
            dni.removeClass('is-invalid');
            mensaje_dni.removeClass('invalid-feedback');
            mensaje_dni.html('');
        }

        if(direccion.val().length==''){         
            direccion.addClass('form-control is-invalid');
            mensaje_direccion.addClass('invalid-feedback');
            mensaje_direccion.html('No deje vacio el campo Direccion');
            mensaje_direccion.css('font-weight','bold');
            validacion++;
        }else{
            direccion.removeClass('is-invalid');
            mensaje_direccion.removeClass('invalid-feedback');
            mensaje_direccion.html('');
        }

        if(pais.val().length==''){          
            pais.addClass('form-control is-invalid');
            mensaje_pais.addClass('invalid-feedback');
            mensaje_pais.html('No deje vacio el campo Pais');
            mensaje_pais.css('font-weight','bold');
            validacion++;
        }else{
            pais.removeClass('is-invalid');
            mensaje_pais.removeClass('invalid-feedback');
            mensaje_pais.html('');
        }

        if(ciudad.val().length==''){            
            ciudad.addClass('form-control is-invalid');
            mensaje_ciudad.addClass('invalid-feedback');
            mensaje_ciudad.html('No deje vacio el campo Fecha de Pago');
            mensaje_ciudad.css('font-weight','bold');
            validacion++;
        }else{
            ciudad.removeClass('is-invalid');
            mensaje_ciudad.removeClass('invalid-feedback');
            mensaje_ciudad.html('');
        }

        if(localidad.val().length==''){            
            localidad.addClass('form-control is-invalid');
            mensaje_localidad.addClass('invalid-feedback');
            mensaje_localidad.html('No deje vacio el campo Localidad');
            mensaje_localidad.css('font-weight','bold');
            validacion++;
        }else{
            localidad.removeClass('is-invalid');
            mensaje_localidad.removeClass('invalid-feedback');
            mensaje_localidad.html('');
        }

        if(fecha_nacimiento.val().length==''){            
            fecha_nacimiento.addClass('form-control is-invalid');
            mensaje_fecha_nacimiento.addClass('invalid-feedback');
            mensaje_fecha_nacimiento.html('No deje vacio el campo Fecha Nacimiento');
            mensaje_fecha_nacimiento.css('font-weight','bold');
            validacion++;
        }else{
            fecha_nacimiento.removeClass('is-invalid');
            mensaje_fecha_nacimiento.removeClass('invalid-feedback');
            mensaje_fecha_nacimiento.html('');
        }

        if(isNaN(telefono.val())){                     
            telefono.addClass('form-control is-invalid');
            mensaje_telefono.addClass('invalid-feedback');
            mensaje_telefono.html('Escriba digitos numericos');
            mensaje_telefono.css('font-weight','bold');
            validacion++;           
        }else{
            telefono.removeClass('is-invalid');
            mensaje_telefono.removeClass('invalid-feedback');
            mensaje_telefono.html('');
        }

        if(categoria.val().length==''){
            categoria.addClass('form-control is-invalid');
            mensaje_categoria.addClass('invalid-feedback');
            mensaje_categoria.html('No deje vacio el campo Categoria');
            mensaje_categoria.css('font-weight','bold');
        }else{
            categoria.removeClass('is-invalid');
            mensaje_categoria.removeClass('invalid-feedback');
            mensaje_categoria.html('');
        }
        
        if(validacion>0){
            return false;
        }
    });

    $('#formulario_editar_profesor').submit(function(){      
        var apellido=$('input[name="apellido"]');
        var nombre=$('input[name="nombre"]');
        var dni=$('input[name="dni"]');
        var direccion=$('input[name="direccion"]');
        var pais=$('input[name="pais"]');
        var ciudad=$('input[name="ciudad"]');
        var localidad=$('input[name="localidad"]');
        var fecha_nacimiento=$('input[name="fecha_nacimiento"]');
        var telefono=$('input[name="telefono"]');
        var categoria=$('input[name="categoria"]');
        var mensaje_apellido=$('#mensaje_apellido');
        var mensaje_nombre=$('#mensaje_nombre');
        var mensaje_dni=$('#mensaje_dni');
        var mensaje_direccion=$('#mensaje_direccion');
        var mensaje_pais=$('#mensaje_pais');
        var mensaje_ciudad=$('#mensaje_ciudad');
        var mensaje_localidad=$('#mensaje_localidad');
        var mensaje_fecha_nacimiento=$('#mensaje_fecha_nacimiento');
        var mensaje_telefono=$('#mensaje_telefono');
        var mensaje_categoria=$('#mensaje_categoria');
        var validacion=0;
        
        if(apellido.val().length==''){           
            apellido.addClass('form-control is-invalid');
            mensaje_apellido.addClass('invalid-feedback');
            mensaje_apellido.html('No deje vacio el campo Apellido');
            mensaje_apellido.css('font-weight','bold');
            validacion++;
        }else{
            apellido.removeClass('is-invalid');
            mensaje_apellido.removeClass('invalid-feedback');
            mensaje_apellido.html('');
        }

        if(nombre.val().length==''){            
            nombre.addClass('form-control is-invalid');
            mensaje_nombre.addClass('invalid-feedback');
            mensaje_nombre.html('No deje vacio el campo Nombre');
            mensaje_nombre.css('font-weight','bold');
            validacion++;
        }else{
            nombre.removeClass('is-invalid');
            mensaje_nombre.removeClass('invalid-feedback');
            mensaje_nombre.html('');
        }

        if(dni.val().length==''){           
            dni.addClass('form-control is-invalid');
            mensaje_dni.addClass('invalid-feedback');
            mensaje_dni.html('No deje vacio el campo DNI');
            mensaje_dni.css('font-weight','bold');
            validacion++;   
        }else if(isNaN(dni.val())){         
            dni.addClass('form-control is-invalid');
            mensaje_dni.addClass('invalid-feedback');
            mensaje_dni.html('Escriba digitos numericos');
            mensaje_dni.css('font-weight','bold');
            validacion++;           
        }else{
            dni.removeClass('is-invalid');
            mensaje_dni.removeClass('invalid-feedback');
            mensaje_dni.html('');
        }

        if(direccion.val().length==''){         
            direccion.addClass('form-control is-invalid');
            mensaje_direccion.addClass('invalid-feedback');
            mensaje_direccion.html('No deje vacio el campo Direccion');
            mensaje_direccion.css('font-weight','bold');
            validacion++;
        }else{
            direccion.removeClass('is-invalid');
            mensaje_direccion.removeClass('invalid-feedback');
            mensaje_direccion.html('');
        }

        if(pais.val().length==''){          
            pais.addClass('form-control is-invalid');
            mensaje_pais.addClass('invalid-feedback');
            mensaje_pais.html('No deje vacio el campo Pais');
            mensaje_pais.css('font-weight','bold');
            validacion++;
        }else{
            pais.removeClass('is-invalid');
            mensaje_pais.removeClass('invalid-feedback');
            mensaje_pais.html('');
        }

        if(ciudad.val().length==''){            
            ciudad.addClass('form-control is-invalid');
            mensaje_ciudad.addClass('invalid-feedback');
            mensaje_ciudad.html('No deje vacio el campo Fecha de Pago');
            mensaje_ciudad.css('font-weight','bold');
            validacion++;
        }else{
            ciudad.removeClass('is-invalid');
            mensaje_ciudad.removeClass('invalid-feedback');
            mensaje_ciudad.html('');
        }

        if(localidad.val().length==''){            
            localidad.addClass('form-control is-invalid');
            mensaje_localidad.addClass('invalid-feedback');
            mensaje_localidad.html('No deje vacio el campo Localidad');
            mensaje_localidad.css('font-weight','bold');
            validacion++;
        }else{
            localidad.removeClass('is-invalid');
            mensaje_localidad.removeClass('invalid-feedback');
            mensaje_localidad.html('');
        }

        if(fecha_nacimiento.val().length==''){            
            fecha_nacimiento.addClass('form-control is-invalid');
            mensaje_fecha_nacimiento.addClass('invalid-feedback');
            mensaje_fecha_nacimiento.html('No deje vacio el campo Fecha Nacimiento');
            mensaje_fecha_nacimiento.css('font-weight','bold');
            validacion++;
        }else{
            fecha_nacimiento.removeClass('is-invalid');
            mensaje_fecha_nacimiento.removeClass('invalid-feedback');
            mensaje_fecha_nacimiento.html('');
        }

        if(isNaN(telefono.val())){                     
            telefono.addClass('form-control is-invalid');
            mensaje_telefono.addClass('invalid-feedback');
            mensaje_telefono.html('Escriba digitos numericos');
            mensaje_telefono.css('font-weight','bold');
            validacion++;           
        }else{
            telefono.removeClass('is-invalid');
            mensaje_telefono.removeClass('invalid-feedback');
            mensaje_telefono.html('');
        }

        if(categoria.val().length==''){
            categoria.addClass('form-control is-invalid');
            mensaje_categoria.addClass('invalid-feedback');
            mensaje_categoria.html('No deje vacio el campo Categoria');
            mensaje_categoria.css('font-weight','bold');
        }else{
            categoria.removeClass('is-invalid');
            mensaje_categoria.removeClass('invalid-feedback');
            mensaje_categoria.html('');
        }
        
        if(validacion>0){
            return false;
        }
    });

    $('#formulario_curso').submit(function(){     
        
        var nombre=$('input[name="nombre"]');
        var fecha_inicio=$('input[name="fecha_inicio"]');
        var fecha_finalizacion=$('input[name="fecha_finalizacion"]');        
        var profesor_titular=$('select[name="profesor_titular"]');
        var profesor_adjunto=$('select[name="profesor_adjunto"]');
        var profesor_suplente=$('select[name="profesor_suplente"]');
        var profesores=0;                
        var mensaje_nombre=$('#mensaje_nombre');
        var mensaje_fecha_inicio=$('#mensaje_fecha_inicio');
        var mensaje_fecha_finalizacion=$('#mensaje_fecha_finalizacion');
        var mensaje_profesores=$('#mensaje_profesores');       
        var validacion=0;
                

        if(nombre.val().length==''){            
            nombre.addClass('form-control is-invalid');
            mensaje_nombre.addClass('invalid-feedback');
            mensaje_nombre.html('No deje vacio el campo Nombre');
            mensaje_nombre.css('font-weight','bold');
            validacion++;
        }else{
            nombre.removeClass('is-invalid');
            mensaje_nombre.removeClass('invalid-feedback');
            mensaje_nombre.html('');
        }        

        if(fecha_inicio.val().length==''){         
            fecha_inicio.addClass('form-control is-invalid');
            mensaje_fecha_inicio.addClass('invalid-feedback');
            mensaje_fecha_inicio.html('No deje vacio el campo Fecha Inicio');
            mensaje_fecha_inicio.css('font-weight','bold');
            validacion++;
        }else{
            fecha_inicio.removeClass('is-invalid');
            mensaje_fecha_inicio.removeClass('invalid-feedback');
            mensaje_fecha_inicio.html('');
        }

        if(fecha_finalizacion.val().length==''){          
            fecha_finalizacion.addClass('form-control is-invalid');
            mensaje_fecha_finalizacion.addClass('invalid-feedback');
            mensaje_fecha_finalizacion.html('No deje vacio el campo Fecha Finalizacion');
            mensaje_fecha_finalizacion.css('font-weight','bold');
            validacion++;
        }else{
            fecha_finalizacion.removeClass('is-invalid');
            mensaje_fecha_finalizacion.removeClass('invalid-feedback');
            mensaje_fecha_finalizacion.html('');
        }

        if(profesor_titular.val().length==''){
            profesores++;
        }
        if(profesor_adjunto.val().length==''){
            profesores++;
        }
        if(profesor_suplente.val().length==''){
            profesores++;
        }

        if(profesores==3){
            mensaje_profesores.html('Seleccione al menos un profesor');
            mensaje_profesores.addClass('alert alert-danger m-auto');
            mensaje_profesores.css('font-weight','bold');
            validacion++;            
        }else{
            mensaje_profesores.html('');
            mensaje_profesores.removeClass('alert alert-danger');
        }               
        
        if(validacion>0){
            return false;
        }
    });

    $('#formulario_editar_curso').submit(function(){     
        
        var nombre=$('input[name="nombre"]');
        var fecha_inicio=$('input[name="fecha_inicio"]');
        var fecha_finalizacion=$('input[name="fecha_finalizacion"]');        
        var profesor_titular=$('select[name="profesor_titular"]');
        var profesor_adjunto=$('select[name="profesor_adjunto"]');
        var profesor_suplente=$('select[name="profesor_suplente"]');
        var profesores=0;                
        var mensaje_nombre=$('#mensaje_nombre');
        var mensaje_fecha_inicio=$('#mensaje_fecha_inicio');
        var mensaje_fecha_finalizacion=$('#mensaje_fecha_finalizacion');
        var mensaje_profesores=$('#mensaje_profesores');       
        var validacion=0;                

        if(nombre.val().length==''){            
            nombre.addClass('form-control is-invalid');
            mensaje_nombre.addClass('invalid-feedback');
            mensaje_nombre.html('No deje vacio el campo Nombre');
            mensaje_nombre.css('font-weight','bold');
            validacion++;
        }else{
            nombre.removeClass('is-invalid');
            mensaje_nombre.removeClass('invalid-feedback');
            mensaje_nombre.html('');
        }        

        if(fecha_inicio.val().length==''){         
            fecha_inicio.addClass('form-control is-invalid');
            mensaje_fecha_inicio.addClass('invalid-feedback');
            mensaje_fecha_inicio.html('No deje vacio el campo Fecha Inicio');
            mensaje_fecha_inicio.css('font-weight','bold');
            validacion++;
        }else{
            fecha_inicio.removeClass('is-invalid');
            mensaje_fecha_inicio.removeClass('invalid-feedback');
            mensaje_fecha_inicio.html('');
        }

        if(fecha_finalizacion.val().length==''){          
            fecha_finalizacion.addClass('form-control is-invalid');
            mensaje_fecha_finalizacion.addClass('invalid-feedback');
            mensaje_fecha_finalizacion.html('No deje vacio el campo Fecha Finalizacion');
            mensaje_fecha_finalizacion.css('font-weight','bold');
            validacion++;
        }else{
            fecha_finalizacion.removeClass('is-invalid');
            mensaje_fecha_finalizacion.removeClass('invalid-feedback');
            mensaje_fecha_finalizacion.html('');
        }        

        if(profesor_titular.val().length==''){
            profesores++;
        }
        if(profesor_adjunto.val().length==''){
            profesores++;
        }
        if(profesor_suplente.val().length==''){
            profesores++;
        }

        if(profesores==3){
            mensaje_profesores.html('Seleccione al menos un profesor');
            mensaje_profesores.addClass('alert alert-danger m-auto');
            mensaje_profesores.css('font-weight','bold');
            validacion++;            
        }else{
            mensaje_profesores.html('');
            mensaje_profesores.removeClass('alert alert-danger');
        }
        
        if(validacion>0){
            return false;
        }
    });

    $('#formulario_inscripcion_curso').submit(function(){
        var curso=$('select[name="curso"]');
        var alumno=$('select[name="alumno"]');
        var mensaje_curso=$('#mensaje_curso');
        var mensaje_alumno=$('#mensaje_alumno');
        var validacion=0;

        if(curso.val().length==''){
            curso.addClass('form-control is-invalid');            
            mensaje_curso.addClass('invalid-feedback');
            mensaje_curso.css('font-weight','bold');
            mensaje_curso.html('No deje vacio el campo Curso');
            validacion++;
        }else{
            curso.removeClass('is-invalid');
            mensaje_curso.html('');
        }

        if(alumno.val().length==''){
            alumno.addClass('form-control is-invalid');
            mensaje_alumno.addClass('invalid-feedback');
            mensaje_alumno.css('font-weight','bold');
            mensaje_alumno.html('No deje vacio el campo Curso');
            validacion++;
        }else{
            alumno.removeClass('is-invalid');
            mensaje_alumno.html('');
        }

        if(validacion>0){
            return false;
        }
    });

    $('#formulario_editar_inscripcion_curso').submit(function(){
        var curso=$('select[name="curso"]');
        var alumno=$('select[name="alumno"]');
        var mensaje_curso=$('#mensaje_curso');
        var mensaje_alumno=$('#mensaje_alumno');
        var validacion=0;

        if(curso.val().length==''){
            curso.addClass('form-control is-invalid');            
            mensaje_curso.addClass('invalid-feedback');
            mensaje_curso.css('font-weight','bold');
            mensaje_curso.html('No deje vacio el campo Curso');
            validacion++;
        }else{
            curso.removeClass('is-invalid');
            mensaje_curso.html('');
        }

        if(alumno.val().length==''){
            alumno.addClass('form-control is-invalid');
            mensaje_alumno.addClass('invalid-feedback');
            mensaje_alumno.css('font-weight','bold');
            mensaje_alumno.html('No deje vacio el campo Curso');
            validacion++;
        }else{
            alumno.removeClass('is-invalid');
            mensaje_alumno.html('');
        }

        if(validacion>0){
            return false;
        }
    });
    

    
});