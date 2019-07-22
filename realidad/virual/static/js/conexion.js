//Clave con la que vamos a llamar a los laboratorios
let lab = 'Lab1';
let parameters = 'lab=' + lab; 

var xhr = new XMLHttpRequest();
xhr.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
        //console.log(this.response);
        var result = JSON.parse(this.response);
        //console.log(result[1]._id.$oid);
        console.log(result);
    }
};
xhr.open("POST", "https://webhooks.mongodb-stitch.com/api/client/v2.0/app/testapp-usprt/service/Create/incoming_webhook/read", true);
xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
xhr.send(parameters);





