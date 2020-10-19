function cambio_id() {
   var t = document.getElementById('table'),rIndex;
   for (var i = 0; i < t.rows.length;i++){
       table.rows[i].onclick = function()
       {
           rIndex = this.rowIndex;
           document.getElementById("id_cambio").value = this.cells[0].innerHTML;

       };
   }
}
function getvalue_1() {
    
    var grupo =  document.getElementById("grupo1").value;
    document.getElementById("valor").value = grupo;

}
function getvalue_2() {
    
    var grupo =  document.getElementById("grupo2").value;
    document.getElementById("valor").value = grupo;

}
