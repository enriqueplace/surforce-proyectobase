function validar(){
      var frm = document.forms["form1"];
      var msg = new String();

      if(frm.id.value =="" && frm.nombre.value =="" && frm.descripcion.value ==""){
         msg = "Debe ingresar informacion en alguno de los campos";
      }

      if(msg.length > 0){
         alert('Atencion: '+msg);
      }else{
         frm.submit();
      }
}