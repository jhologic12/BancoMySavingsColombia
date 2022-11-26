function revisar() {

    
    
   
    var CampoIdentifiacion = document.getElementById("Numero de Documento").value;
    

    if (CampoIdentifiacion.length == 0 || /^\s+$/.test(CampoIdentifiacion)) {
        alert('Por favor ingrese un valor en el campo identificación!');
        return false;
    }



 // Obtener hijos dentro de etiqueta <div>
 var cont = document.getElementById('opciones').children;
 var i = 0;
 var al_menos_uno = false;
 //Recorrido de checkbox's
 while (i < cont.length) {
     // Verifica si el elemento es un checkbox
     if (cont[i].tagName == 'INPUT' && cont[i].type == 'checkbox') {
         // Verifica si esta checked
         if (cont[i].checked) {
             al_menos_uno = true;
         }
     }
     i++
 }

 //Valida si al menos un checkbox es checked
 if (!al_menos_uno) {
     alert('Por Favor elija un Servicio');
     return false;
     if (e.preventDefault) {
        return false;
        

     } else {
         e.returnValue = false;
     }
 }




    
}




   
