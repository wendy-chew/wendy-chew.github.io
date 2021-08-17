const form =document.querySelector('.contactform');

form.addEventListener('submit',e=>{
    e.preventDefault();
    const name =form.name.value;
    const email =form.email.value;
    const message= form.message.value;

    if(name==''){
        form.name.style.borderColor='red';
        document.querySelector('.status').innerHTML = "*Name cannot be empty!";
        return false;
    }

    if(email==''){
        form.email.style.borderColor='red';
        document.querySelector('.status').innerHTML = "*Email cannot be empty";
        return false;
    } else {
        var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        if(!re.test(email)){
            document.querySelector('.status').innerHTML = "*Invalid Email";
            return false;
        }
    }
    if (message == "") {
        form.message.style.borderColor='red';
        document.querySelector('.status').innerHTML = "*Message cannot be empty";
        return false;
    }
    form.submit();
});