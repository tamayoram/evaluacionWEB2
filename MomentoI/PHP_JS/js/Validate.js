function DeleteRecord(idDocument){

   if(confirm('¿Desea eliminar el registro?')){

       document.location='delete.php?document='+idDocument;
   }
}

function validate() {

     
    let idDocument = document.getElementById("idDocument").value;
    let name = document.getElementById("name").value;
    let lastName = document.getElementById("lastName").value;
    let birth = document.getElementById("birth").value;
    let phone = document.getElementById("phone").value;
    let city = document.getElementById("city").value;
    let district = document.getElementById("district").value;
      
    let reference = 10;
    let phoneLength = document.getElementById("phone").value.length;
    
       
         
    if (idDocument === "") {
 
      alert("Debe ingresar su documento");
      document.getElementById("idDocument").style.borderColor = "red";
      return false;
       
    } 
 
    if (isNaN(idDocument)) {
 
       alert("El documento debe ser un número");
       document.getElementById("idDocument").style.borderColor = "red";
       return false;
 
    }
 
    if (name === "") {
 
       alert("Debe ingresar su nombre");
       document.getElementById("name").style.borderColor = "red";
       return false;
        
     } 

     if (lastName === "") {
 
        alert("Debe ingresar su apellido");
        document.getElementById("lastName").style.borderColor = "red";
        return false;
         
      } 

      if (birth === "") {
 
        alert("Debe ingresar su fecha de nacimiento");
        document.getElementById("birth").style.borderColor = "red";
        return false;
         
      }

      if (phone === "") {
 
        alert("Debe ingresar su número de celular");
        document.getElementById("phone").style.borderColor = "red";
        return false;
         
      }

      if (isNaN(phone)) {
 
        alert("El celular debe ser un número");
        document.getElementById("phone").style.borderColor = "red";
        return false;
  
     }
 
  if (phoneLength !=reference) {
 
       alert("El número de celular debe tener 10 dígitos");
       document.getElementById("phone").style.borderColor = "red";
       return false;
    } 

    if (city === "") {
 
        alert("Debe ingresar su ciudad de residencia");
        document.getElementById("city").style.borderColor = "red";
        return false;
    }

    if (district === "") {
 
        alert("Debe ingresar su barrio de residencia");
        document.getElementById("district").style.borderColor = "red";
        return false;
    }

}
