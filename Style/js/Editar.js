var Datos = [];
data = localStorage.getItem('Data_cot');
if(data != null){
    Datos = JSON.parse(data);

}
//--------------------
window.onload = function(){
    for(k in Datos){
        fila = Datos[k];

        tr = document.createElement('tr');
        //RNC
        td =document.createElement('td');
        td.innerHTML = fila.rnc;
        tr.appendChild(td);
        //fecha
        td =document.createElement('td');
        td.innerHTML = fila.fecha;
        tr.appendChild(td);
        //nombre
        td =document.createElement('td');
        td.innerHTML = fila.nombre;
        tr.appendChild(td);
        //subtotal
        td =document.createElement('td');
        td.innerHTML = fila.subtotal;
        tr.appendChild(td);
        //itebis
        td =document.createElement('td');
        td.innerHTML = fila.itebis;
        tr.appendChild(td);
        //total
         td =document.createElement('td');
          td.innerHTML = fila.total;
          tr.appendChild(td);

          //boton
         td =document.createElement('td');
         btn = document.createElement('button');
         btn.type = "button";
         btn.setAttribute('onclick', 'editar('+k+');');
         btn.innerHTML = "Edit"; 
         btn.setAttribute('class' , 'btn btn-warning btn-sm');
         td.appendChild(btn);
         tr.appendChild(td);

        document.getElementById('tabla_cota').appendChild(tr);
    }
}
function editar(k){
    sessionStorage.getItem('onj_actual', k);
    window.location = "Detalle.html";



}