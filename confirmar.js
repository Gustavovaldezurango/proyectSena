

function confirmacion(e){
    if (confirm('estas seguro que deseas eliminar este registro?')){
      return true
    }else{
      return e.preventDefault();          

    }

  }

  let linkdelete = document.querySelectorAll(".eliminar");

  for (var i = 0; i < linkdelete .length; i++ ){

    linkdelete[i].addEventListener('click', confirmacion)
  } 