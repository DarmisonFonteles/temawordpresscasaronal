function string_to_slug(str)	{
    str = str.replace(/^\s+|\s+$/g, ''); // trim
    str = str.toLowerCase();

    // remove accents, swap ñ for n, etc
    var from = "àáäâèéëêìíïîòóöôùúüûñç·/_,:;";
    var to   = "aaaaeeeeiiiioooouuuunc------";

    for (var i=0, l=from.length ; i<l ; i++)
    {
        str = str.replace(new RegExp(from.charAt(i), 'g'), to.charAt(i));
    }

    str = str.replace(/[^a-z0-9 -]/g, '') // remove invalid chars
        .replace(/\s+/g, '-') // collapse whitespace and replace by -
        .replace(/-+/g, '-'); // collapse dashes

    return str;
}

function cookieLocation(pais, estado){
    // cria/atualize cookie da localização durante um período e refresh na página
    var formatPais = string_to_slug(pais);
    var formatEstado = string_to_slug(estado);
    const d = new Date();
    d.setTime(d.getTime() + (1*24*60*60*1000));
    let expires = "expires=" + d.toGMTString();
    document.cookie = 'pais' + "=" + formatPais + ";" + expires + ";path=/";
    document.cookie = 'estado' + "=" + formatEstado + ";" + expires + ";path=/";
    location.reload();
}
function getLocation() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition);                
    } else { 
        document.getElementById("status").innerHTML = "Geolocation is not supported by this browser.";
    }
}getLocation()

function showPosition(position) {
    getReverseGeocodingData(position.coords.latitude, position.coords.longitude);
}
function getReverseGeocodingData(lat, lng) {
    let myRequestURL = "https://nominatim.openstreetmap.org/reverse?format=jsonv2&lat="+lat+"&lon="+lng;
    fetch(myRequestURL, {
    method: 'GET',
    headers: {
        'Content-Type': 'application/json'
    }
    })
    .then( function( response){
        response.json();
        console.log(response);
    }).then(function(response){
        console.log(response);
        // $('#estado').toggleClass('is-visible');
        // var pais = data.address.country;  
        // var estado = data.address.state;
        // cookieLocation(JSON.stringify(pais),JSON.stringify(estado));
    })
    .catch(function(err){
        console.log(err.message)
    } );

    
}