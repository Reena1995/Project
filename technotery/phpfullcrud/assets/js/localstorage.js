

console.log("page is ready");
var submit=document.getElementById("myform");
// var form = document.getElementById("myform");
console.log(submit);
console.log('ssss');


submit.onclick=function(){
    var user=document.getElementById("user").value;
    var pass=document.getElementById("pass").value;
    var email=document.getElementById("email").value;
    // console.log( "in ssdsf",user);
    // var formdata = {'user':user,'pass':pass,'email':email};
    // console.log(form);
    
    localStorage.setItem('user',(JSON.stringify(user)));
    localStorage.setItem('pass',(JSON.stringify(pass)));
    localStorage.setItem('email',(JSON.stringify(email)));

    // var getData=localStorage.getItem("user");
    // console.log(getData,'getData');

    // localStorage.setItem('form',(JSON.stringify(form)));

    localStorage.getItem('email',(JSON.stringify(email)));
    

    // localStorage.setItem('form',(JSON.stringify(formdata)));
    // localStorage.removeItem('form',(JSON.stringify(formdata)));


    // localStorage.removeItem('user',(JSON.stringify(user)));
    // localStorage.removeItem('pass',(JSON.stringify(pass)));
    // localStorage.removeItem('email',(JSON.stringify(email)));
    // localStorage.removeItem('form',(JSON.stringify(form)));



    

    //localStorage.setItem('user',(JSON.stringify(user)));
    // localStorage.setItem('pass',(JSON.stringify(pass)));
    // localStorage.setItem('email',(JSON.stringify(email)));
    // localStorage.setItem('form',(JSON.stringify(form)));
}

