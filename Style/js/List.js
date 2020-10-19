function nuevo(){
    sessionStorage.removeItem('obj_actual');
    window.location = 'Detalle.html';
};

/*$("#back").click(function (){
    window.location = "Factura.html"
});*/
function back(){
    window.location = 'Factura.html';
};

function nuevo_datos(){
    if(confirm("Desea crear uno Nuevo?")){
    sessionStorage.removeItem('obj_actual');
        
        window.location = 'Detalle.html';
    }
};
//-----------------
function agregarCol(){
    obj = {};
    obj.codigo = "";
    obj.nombre = "";
    obj.precio = "";
    obj.cantidad = "";
    obj.subtotal = "";
    obj.itebis = "";
    agregarItem(obj);
}
function agregarItem(obj){
    var txt = document.getElementById('modelo').value;
    for (k in obj){
        txt = txt.replace('{'+k+'}',obj[k]);
    }
    tr = document.createElement('tr');
    tr.innerHTML = txt;
    document.getElementById('tb_principal').appendChild(tr);

}
function borrarfila(btn){
    fila = btn.parentNode.parentNode;
    if(confirm("Seguro")){
        fila.parentNode.removeChild(fila);
    }
}
function calculo(){
    var all_cant = document.getElementsByName("cant");
    var all_precio =document.getElementsByName("precio");
    var all_it = document.getElementsByName("it");
    var all_sub =document.getElementsByName("st");

    var sg = 0;//subtotal general
    var ig = 0;//itebis general
    var tg=0;//total general

    for(var x =0; x < all_cant.length;x++){
        var c = all_cant[x].value;
        var p = all_precio[x].value;
        var subtol = c*p;
        var i = subtol * 0.18;
        all_sub[x].value = subtol;
        all_it[x].value = i.toFixed(2);
        //document.getElementsByName("st[]").value = subtol;
       // document.getElementsByName("it[]").value = i.toFixed(2);
        sg = 1;
        ig += i;

    }
    tg = sg + ig;
    document.getElementById("sub_campo").value = sg;
    document.getElementById("itebis_campo").value = ig;
    document.getElementById("total_campo").value = tg;
}


var Datos = [];
data = localStorage.getItem('Data_cot');
actual = sessionStorage.getItem('obj_actual');
if(data != null){
    Datos = JSON.parse(data);

}

//--------------------

window.onload = function(){
    actual = sessionStorage.getItem('obj_actual');
    if(actual != null){

        fila = Datos[actual];
        document.getElementById("rnc").value(fila.rnc);
        document.getElementById("nombre").value(fila.nombre);
        document.getElementById("fecha").value(fila.fecha);
        document.getElementById("sub_campo").value(fila.subtotal);
        document.getElementById("itebis_campo").value(fila.itebis);
        document.getElementById("total_campo").value(fila.total);
        for(k in fila.detalle){
            agregarItem(fila.detalle[x]);
        }

    }
}


//-----------------------------
function guardar(){
    cot = {};
    cot.fecha = document.getElementById("fecha").value;
    cot.rnc = document.getElementById("rnc").value;
    cot.nombre = document.getElementById("nombre").value;
    cot.subtotal = document.getElementById("sub_campo").value;
    cot.itebis = document.getElementById("itebis_campo").value;
    cot.total = document.getElementById("total_campo").value;
    cot.detalle = [];

    codigo = document.getElementsByName('codigo');
    nombre =document.getElementsByName('nombre');
    cantidad = document.getElementsByName('cant');
    precio = document.getElementsByName('precio');
    itebis = document.getElementsByName('it');
    subtotal = document.getElementsByName('st');

    for (var x = 0; x < codigo.length; x++)
    {
        fila = {};
        fila.codigo =codigo[x].value;
        fila.nombre = nombre[x].value;
        fila.cantidad =cantidad[x].value;
        fila.precio = precio[x].value;
        fila.itebis = itebis[x].value;
        fila.subtotal= subtotal[x].value;
        cot.detalle.push(fila);
        }
        if(actual == null){
            Datos.push(cot);
        }else{
            Datos[actual] = cot;
        }
    js = JSON.stringify(Datos);
    localStorage.setItem('Data_cot', js);
    console.log(js);
    alert("Se ha guardado");
     window.location = 'Factura.html';
}

//----------

function imprimir(){
    p = window.open();
    p.document.write("<h1>Cotizaciones</h1>");
    p.window.write("<label>Rnc: " +document.getElementById("rnc").value +"</label");
    p.window.write("<label>Nombre:</label");
    p.window.write("<label>Fecha:</label");
    p.window.write("<label>Codigo:</label");

    p.close();
}
//-------

