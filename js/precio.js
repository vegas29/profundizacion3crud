function sumar(){
    var total;
    var procesador = document.getElementById("procesador").value;
    var tarjetag = document.getElementById("tarjetag").value;
    var tarjetam = document.getElementById("tarjetam").value;
    var memram = document.getElementById("memram").value;
    var disco = document.getElementById("disco").value;
    var fuente = document.getElementById("fuente").value;
    var monitor = document.getElementById("monitor").value;
    var caja = document.getElementById("caja").value;
    var teclado = document.getElementById("teclado").value;
    var raton = document.getElementById("raton").value;
    var disi = document.getElementById("disi").value;
    var alta = document.getElementById("alta").value;
    var ventil = document.getElementById("ventil").value;
    total = parseInt(procesador)+parseInt(tarjetag)+parseInt(tarjetam)+parseInt(memram)
    +parseInt(disco)+parseInt(fuente)+parseInt(monitor)+parseInt(caja)+parseInt(teclado)
    +parseInt(raton)+parseInt(disi)+parseInt(alta)+parseInt(ventil);
    document.getElementById("total").value=  total;


}

function validars(){
    pro = document.getElementById("procesador").selectedIndex;
    gra = document.getElementById("tarjetag").selectedIndex;
    ma = document.getElementById("tarjetam").selectedIndex;
    ram = document.getElementById("memram").selectedIndex;
    dis = document.getElementById("disco").selectedIndex;
    fue = document.getElementById("fuente").selectedIndex;
    mon = document.getElementById("monitor").selectedIndex;
    caj = document.getElementById("caja").selectedIndex;
    rat = document.getElementById("raton").selectedIndex;
    disi = document.getElementById("disi").selectedIndex;
    alt = document.getElementById("alta").selectedIndex;
    ven = document.getElementById("ventil").selectedIndex;


    if(pro == 0){
        alert("Seleccione un procesador");
        return false;
    }else if(gra == 0){
        alert("Seleccione una grafica");
        return false;
    }else if(ma == 0){
        alert("Seleccione una tarjeta madre");
        return false;
    }else if(ram == 0){
        alert("Seleccione memoria ram");
        return false;
    }else if(dis == 0){
        alert("Seleccione disco");
        return false;
    }else if(fue == 0){
        alert("Seleccione una fuente");
        return false;
    }else if(mon == 0){
        alert("Seleccione un monitor");
        return false;
    }else if(caj == 0){
        alert("Seleccione una caja");
        return false;
    }else if(rat == 0){
        alert("Seleccione un raton");
        return false;
    }else if(disi == 0){
        alert("Seleccione una disipacion");
        return false;
    }else if(alt == 0){
        alert("Seleccione altavoces");
        return false;
    }else if(ven == 0){
        alert("Seleccione ventiladores");
        return false;
    }else{
        return true;
    }

    
}


function iniciar(){
    
    sumar();
    document.getElementById('procesadorsh').value=document.getElementById("procesador").options[0].text;
    document.getElementById('graficash').value=document.getElementById("tarjetag").options[0].text;
    document.getElementById('madresh').value=document.getElementById("tarjetam").options[0].text;
    document.getElementById('memramsh').value=document.getElementById("memram").options[0].text;
    document.getElementById('discosh').value=document.getElementById("disco").options[0].text;
    document.getElementById('fuentesh').value=document.getElementById("fuente").options[0].text;
    document.getElementById('monitorsh').value=document.getElementById("monitor").options[0].text;
    document.getElementById('cajash').value=document.getElementById("caja").options[0].text;
    document.getElementById('tecladosh').value=document.getElementById("teclado").options[0].text;
    document.getElementById('ratonsh').value=document.getElementById("raton").options[0].text;
    document.getElementById('disish').value=document.getElementById("disi").options[0].text;
    document.getElementById('altash').value=document.getElementById("alta").options[0].text;
    document.getElementById('ventilsh').value=document.getElementById("ventil").options[0].text;

    
}